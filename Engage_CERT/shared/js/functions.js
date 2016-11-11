// --- functions.js v0.024 --- //
// --- CORE FUNCTIONS --- //
for (var key in config) {
    window[key] = config[key];
}

var videoObject,
    emailFragments = [],
    emailFragmentTemplateIds = [];
    emailDocument = [],
    emailTemplateId = -1,
    loopIndex = -1;

// --- NAVIGATION FLOW --- //
function getCurrentPage()
{
	var parser = document.createElement('a');
	parser.href = window.location.href.replace("/index.html", "");
	return new String(parser.pathname).substring(parser.pathname.lastIndexOf('/') + 1);
}

function getPreviousPage()
{
	if(pagesAll.indexOf(getCurrentPage()) === 0) {
		return pagesAll[pagesAll.indexOf(getCurrentPage())];
	} else {
		return pagesAll[pagesAll.indexOf(getCurrentPage())-1];
	}
}

function getNextPage()
{
	if(pagesAll.indexOf(getCurrentPage())+1 === pagesAll.length) {
		return pagesAll[pagesAll.indexOf(getCurrentPage())];
	} else {
		return pagesAll[pagesAll.indexOf(getCurrentPage())+1];
	}
}

function getReferencesForPage()
{
	return pageReferencesAll[pagesAll.indexOf(getCurrentPage())];
}
// --- END NAVIGATION FLOW --- //

// --- DOUBLE TAP NAVIGATION --- //
function updatePage(navPopupPage,navPopupPres) {
	if(navPopupPage && navPopupPres) {
		if(!isiPad) {
			  document.location.href = '../../'+navPopupPres+'/'+navPopupPage+'/index'+myextension;
		} else if(isiPad) {
			  document.location.href = "veeva:gotoSlide("+navPopupPage+myextension+","+navPopupPres+")";
		}
	} else if (navPopupPage && !navPopupPres) {
		mtgsk_Left = navPopupPage;
		mtgsk_Right = navPopupPage;
	}
	if(!isiPad && mtgsk_Left && mtgsk_Right) {
		 if (veevaCall==='prev'){
			  document.location.href = '../'+mtgsk_Left+'/index'+myextension;
		  } else if (veevaCall==='next'){
			  document.location.href = '../'+mtgsk_Right+'/index'+myextension;
		  }
	} else if(isiPad && mtgsk_Left && mtgsk_Right) {
		swipeLeftURL = (mtgsk_Left === currentpage) ? 'xxx' : "veeva:gotoSlide("+mtgsk_Left+myextension+")";
		swipeRightURL = (mtgsk_Right === currentpage) ? 'xxx' : "veeva:gotoSlide("+mtgsk_Right+myextension+")";
		if (veevaCall === "prev"){
			document.location.href = swipeLeftURL;
	    } else if (veevaCall === "next"){
			document.location.href = swipeRightURL;
		}
	} else if(isiPad && !mtgsk_Left && !mtgsk_Right) {
		if (veevaCall==='prev') { com.veeva.clm.prevSlide();}
		if (veevaCall==='next') { com.veeva.clm.nextSlide();}
	}
}

function tap(navPopupPage,navPopupPres) {
	if (tapCount > 1) {
		tapCount = 0;
	}
	if (tapCount === 0) {
		startTime = new Date().getTime();
	}
	if (tapCount === 1) {
		endTime = new Date().getTime();
	}
	if (tapCount === 1 && endTime - startTime <= threshold) {
		updatePage(navPopupPage,navPopupPres);
	}
	tapCount++;
	clearTimeout(timer);
	timer = setTimeout(function() {// reset count on idle
		tapCount = 0;
	}, threshold);
}
// --- END DOUBLE TAP NAVIGATION --- //

// --- GSK MENU NAVIGATION --- //
function navHome() {
	if((!isiPad && homepage) && (homepage !== currentpage)) {
		document.location.href = '../../'+presentation+'/'+homepage+'/index'+myextension;
	} else if((isiPad && homepage) && (homepage !== currentpage)) {
		document.location.href = "veeva:gotoSlide("+homepage+myextension+","+presentation+")";
	}
}

function navMenu() {
	if(!$("#menu").hasClass("activeNav")) {
		if(!isiPad) {
			document.location.href = '../../'+menuPresentation+'/'+menu+'/index'+myextension;
		} else {
			document.location.href ="veeva:gotoSlide("+menu+myextension+", "+menuPresentation+")";
		}
	}
}

function navReferences() {
	if(!$("#references").hasClass("activeNav")) {
		if(!isiPad) {
			document.location.href = '../../'+referencesPresentation+'/'+references+'/index'+myextension;
		} else {
			document.location.href ="veeva:gotoSlide("+references+myextension+", "+referencesPresentation+")";
		}
	}
}

function navPi() {
	if(!$("#pi").hasClass("activeNav")) {
		if(!isiPad) {
			document.location.href = '../../'+piPresentation+'/'+pi+'/index'+myextension;
		} else {
			document.location.href ="veeva:gotoSlide("+pi+myextension+", "+piPresentation+")";
		}
	}
}

function getSavedFragments(){
    emailFragments = JSON.parse(window.sessionStorage.getItem('emailFragments'));

	if (!emailFragments) {
	    emailFragments = [];
	}
    emailFragments.sort();
}

function addFragment(fragmentId) {
    if (emailFragments.indexOf(fragmentId) == -1) {
        emailFragments.push(fragmentId);
        emailFragments.sort();
        window.sessionStorage.setItem('emailFragments', JSON.stringify(emailFragments));
    }
    if(!isiPad) {
        alert(emailFragments);
    }
}

function removeFragment(fragmentId) {
    var fragmentIndex = emailFragments.indexOf(fragmentId);
    if (fragmentIndex != -1) {
        emailFragments.splice(fragmentIndex, 1);
        emailFragments.sort();
        window.sessionStorage.setItem('emailFragments', JSON.stringify(emailFragments));
    }
    if(!isiPad) {
        alert(emailFragments);
    }
}

function getApprovedDocumentRecursive(result){
    loopIndex++;
    if (result.success) {
        if (loopIndex == 0) { // Loop 1
            emailTemplateId = result.Approved_Document_vod__c.ID;
            if (0 == emailFragments.length) {
                com.veeva.clm.launchApprovedEmail(emailTemplateId, emailFragmentTemplateIds, finalLoop);
            } else {
                com.veeva.clm.getApprovedDocument(vaultID, emailFragments[loopIndex], getApprovedDocumentRecursive);
            }
        } else if (loopIndex == emailFragments.length) { // Final loop
            emailFragmentTemplateIds.push(result.Approved_Document_vod__c.ID);
            com.veeva.clm.launchApprovedEmail(emailTemplateId, emailFragmentTemplateIds, finalLoop);
        } else {
            emailFragmentTemplateIds.push(result.Approved_Document_vod__c.ID);
            com.veeva.clm.getApprovedDocument(vaultID, emailFragments[loopIndex], getApprovedDocumentRecursive);
        }
    }
}

function finalLoop(result) { }

function sendEmail() {
    if(!isiPad) {
        alert("Send email template with fragments: "+emailFragments);
    } else {
        com.veeva.clm.getApprovedDocument(vaultID, templateID, getApprovedDocumentRecursive);
    }
}

function clearEmail() {
    if(!isiPad) {
        alert("Clearing selected email fragments");
    }
    emailFragments = [];
    window.sessionStorage.setItem('emailFragments', JSON.stringify(emailFragments));
}

function navDisable() {
	if (menu === ''){
		$('#menu').css('display', 'none');
	} else if (menu === currentpage) {
		$("#menu").addClass("activeNav");
	}
	if (references === '' || referencesAll === '') {
		$('#references').css('display', 'none');
	} else if (references === currentpage) {
		$("#references").addClass("activeNav");
	}
	if (pi === ''){
		$('#pi').css('display', 'none');
	} else if (pi === currentpage) {
		$("#pi").addClass("activeNav");
	}
	if (homepage === ''){
		$('#home').css('display', 'none');
	} else if (homepage === currentpage) {
		$("#home").addClass("activeNav");
	}
}
// --- END GSK MENU NAVIGATION --- //

// --- GSK NAVIGATION GOTOSLIDE --- //
function mtgskGoToSlide(navPopupPage,navPopupPres) {
	if(!isiPad && navPopupPres) {
		document.location.href = '../../'+navPopupPres+'/'+navPopupPage+'/index'+myextension;
	} else if(!isiPad && !navPopupPres) {
		document.location.href = '../'+navPopupPage+'/index'+myextension;
	} else if(isiPad && navPopupPres) {
		document.location.href ="veeva:gotoSlide("+navPopupPage+myextension+", "+navPopupPres+")";
	} else if(isiPad && !navPopupPres) {
		document.location.href ="veeva:gotoSlide("+navPopupPage+myextension+")";
	}
}
// --- END GSK NAVIGATION GOTOSLIDE --- //

// --- SWIPE NAVIGATION --- //
function navSwipes() {
	if(!isiPad && !mtgsk_Left && !mtgsk_Right) {
	} else if(!isiPad && mtgsk_Left && mtgsk_Right) {
		$("#container").swipe( {
      swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
        if (!gskNoSwipe) {
          if (direction === 'right'){
  				  document.location.href = '../'+mtgsk_Left+'/index'+myextension;
  			  } else if (direction === 'left'){
  				  document.location.href = '../'+mtgsk_Right+'/index'+myextension;
  			  }
        }
			},
			threshold:100
		});
	} else if(isiPad && !mtgsk_Left && !mtgsk_Right) {
		$("#container").swipe( {
      swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
        if (!gskNoSwipe) {
  			  if (direction === 'right') {
  				  com.veeva.clm.prevSlide();
  			  } else if (direction === 'left') {
  				  com.veeva.clm.nextSlide();
  			  }
        }
			},
			threshold:100,
			allowPageScroll: "vertical"
		});
	} else {
		$("#container").swipe( {
      swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
        if (!gskNoSwipe) {
  			  swipeLeftURL = (mtgsk_Left === currentpage) ? 'xxx' : "veeva:gotoSlide("+mtgsk_Left+myextension+")";
  			  swipeRightURL = (mtgsk_Right === currentpage) ? 'xxx' : "veeva:gotoSlide("+mtgsk_Right+myextension+")";
  			  if (direction === 'right') {
  				  document.location.href = swipeLeftURL;
  			  } else if (direction === 'left') {
  				  document.location.href = swipeRightURL;
  			  }
        }
			},
			threshold:100,
			allowPageScroll: "vertical"
		});
	}
}
// --- END SWIPE NAVIGATION --- //

// --- CUSTOM SWIPE  --- //
function navCustomSwipe(mtgsk_Left,mtgsk_CustomLeftPres,mtgsk_Right,mtgsk_CustomRightPres,mtgsk_Up,mtgsk_CustomUpPres,mtgsk_Down,mtgsk_CustomDownPres) {
	if(!isiPad) {
		$("#containerCustomSwipe").swipe( {
			swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
        if (!gskNoSwipe) {
  			  if (direction === 'right' && (mtgsk_Left != '') && (mtgsk_CustomLeftPres == '')){
  				  document.location.href = '../'+mtgsk_Left+'/index'+myextension;
  			  } else if (direction === 'right' && (mtgsk_Left != '') && (mtgsk_CustomLeftPres != '')){
  				  document.location.href = '../../'+mtgsk_CustomLeftPres+'/'+mtgsk_Left+'/index'+myextension;
  			  } else if (direction === 'left' && (mtgsk_Right != '') && (mtgsk_CustomRightPres == '')){
  				  document.location.href = '../'+mtgsk_Right+'/index'+myextension;
  			  } else if (direction === 'left' && (mtgsk_Right != '') && (mtgsk_CustomRightPres != '')){
  				  document.location.href = '../../'+mtgsk_CustomRightPres+'/'+mtgsk_Right+'/index'+myextension;
  			  } else if (direction === 'up' && (mtgsk_Up != '') && (mtgsk_CustomUpPres == '')){
  				  document.location.href = '../'+mtgsk_Up+'/index'+myextension;
  			  } else if (direction === 'up' && (mtgsk_Up != '') && (mtgsk_CustomUpPres != '')){
  				  document.location.href = '../../'+mtgsk_CustomUpPres+'/'+mtgsk_Up+'/index'+myextension;
  			  } else if (direction === 'down' && (mtgsk_Down != '') && (mtgsk_CustomDownPres == '')){
  				  document.location.href = '../'+mtgsk_Down+'/index'+myextension;
  			  } else if (direction === 'down' && (mtgsk_Down != '') && (mtgsk_CustomDownPres != '')){
  				  document.location.href = '../../'+mtgsk_CustomDownPres+'/'+mtgsk_Down+'/index'+myextension;
  			  }
        }
			},
			threshold:100
		});
	} else {
		$("#containerCustomSwipe").swipe( {
			swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
        if (!gskNoSwipe) {
  			  if (direction === 'right' && (mtgsk_Left != '') && (mtgsk_CustomLeftPres == '')){
  				  document.location.href = "veeva:gotoSlide("+mtgsk_Left+myextension+")";
  			  } else if (direction === 'right' && (mtgsk_Left != '') && (mtgsk_CustomLeftPres != '')){
  				  document.location.href = "veeva:gotoSlide("+mtgsk_Left+myextension+","+mtgsk_CustomLeftPres+")";
  			  } else if (direction === 'left' && (mtgsk_Right != '') && (mtgsk_CustomRightPres == '')){
  				  document.location.href = "veeva:gotoSlide("+mtgsk_Right+myextension+")";
  			  } else if (direction === 'left' && (mtgsk_Right != '') && (mtgsk_CustomRightPres != '')){
  				  document.location.href = "veeva:gotoSlide("+mtgsk_Right+myextension+","+mtgsk_CustomRightPres+")";
  			  } else if (direction === 'up' && (mtgsk_Up != '') && (mtgsk_CustomUpPres == '')){
  				  document.location.href = "veeva:gotoSlide("+mtgsk_Up+myextension+")";
  			  } else if (direction === 'up' && (mtgsk_Up != '') && (mtgsk_CustomUpPres != '')){
  				  document.location.href = "veeva:gotoSlide("+mtgsk_Down+myextension+","+mtgsk_CustomDownPres+")";
  			  } else if (direction === 'down' && (mtgsk_Down != '') && (mtgsk_CustomDownPres == '')){
  				  document.location.href = "veeva:gotoSlide("+mtgsk_Down+myextension+")";
  			  } else if (direction === 'down' && (mtgsk_Down != '') && (mtgsk_CustomDownPres != '')){
  				  document.location.href = "veeva:gotoSlide("+mtgsk_Up+myextension+","+mtgsk_CustomDownPres+")";
  			  }
        }
			},
			threshold:100
		});
	}
}

// --- END CUSTOM SWIPE  --- //

// --- SETUP PORTRAIT MODE --- //
function resizePortrait() {
	 $('#bg img').css('width', 'auto');
	 $('#bg img').css('height', '100%');
	 $("#doubleClickCentre").css('display', 'block');

	 $("#doubleClickCentre").doubletap(function() {
		$("#doubleClickCentre").unbind();
		$('.bg').css('overflow-y', 'scroll');
		$('#bg img').css('height', 'auto');
		$('#bg img').css('width', '100%');
		$("#container").css('z-index', -10);

		$('#bg').doubletap(function() {
			$('#bg').unbind();
			$('.bg').css('overflow-y', 'initial');
			$("#container").css('z-index', 10);
			resizePortrait();
		}, 400);
	}, 400);
}
// --- END SETUP PORTRAIT MODE --- //

// --- DISPLAY REFERENCES --- //
function mtgskReferences(type) {
	if (pageReferencesAll !== "") {
		page_references = JSON.parse(window.sessionStorage.getItem('page_references'));
	}
	if (page_references===null) {
		$('#referenceList').empty();
		for(i=0;i<referencesAll.length;i++) {
			$('#referenceList').append('<li id="referenceActive">'+referencesAll[i]+'</li>');
		}
	} else {
		$('#referenceList').empty();
		for(i=0;i<referencesAll.length;i++) {
			if($.inArray(i + 1, page_references) === -1 && type === 'all') {
				$('#referenceList').append('<li id="referenceActive">'+referencesAll[i]+'</li>');
			} else if($.inArray(i + 1, page_references) === -1) {
				$('#referenceList').append('<li id="referenceInactive">'+referencesAll[i]+'</li>');
			} else {
				$('#referenceList').append('<li id="referenceActive">'+referencesAll[i]+'</li>');
			}
		}
	}
}

function mtgskClose() {
	previouspage = window.sessionStorage.getItem('previouspage');
	previouspres = window.sessionStorage.getItem('previouspres');
	if(!isiPad) {
		document.location.href = '../../'+previouspres+'/'+previouspage+'/index'+myextension;
	} else {
		document.location.href = "veeva:gotoSlide("+previouspage+myextension+", "+previouspres+")";
	}
}
// --- END DISPLAY REFERENCES --- //

// --- DOUBLE TAP CENTRAL ZOOM --- //
(function($){
    // Determine if we on iPhone or iPad
    var isiOS = false;
    var agent = navigator.userAgent.toLowerCase();
    if(agent.indexOf('iphone') >= 0 || agent.indexOf('ipad') >= 0){
           isiOS = true;
    }

    $.fn.doubletap = function(onDoubleTapCallback, onTapCallback, delay){
        var eventName, action;
        delay = delay == null? 500 : delay;
        eventName = isiOS == true? 'touchend' : 'click';

        $(this).bind(eventName, function(event){
            var now = new Date().getTime();
            var lastTouch = $(this).data('lastTouch') || now + 1 /** the first time this will make delta a negative number */;
            var delta = now - lastTouch;
            clearTimeout(action);
            if(delta<500 && delta>0){
                if(onDoubleTapCallback != null && typeof onDoubleTapCallback == 'function'){
                    onDoubleTapCallback(event);
                }
            }else{
                $(this).data('lastTouch', now);
                action = setTimeout(function(evt){
                    if(onTapCallback != null && typeof onTapCallback == 'function'){
                        onTapCallback(evt);
                    }
                    clearTimeout(action);   // clear the timeout
                }, delay, [event]);
            }
            $(this).data('lastTouch', now);
        });
    };
})(jQuery);
// --- END DOUBLE TAP CENTRAL ZOOM --- //

// --- PULL VEEVA VARIABLES --- //
var updateContainer = "";
var fallbackText = "";
var gskObject = "";
var gskField = "";

function showField(result) {
  if (result[gskObject] != undefined && result[gskObject][gskField] != undefined) {
    var HCPName = result[gskObject][gskField];
    $("" + updateContainer + "").html(HCPName);
  } else {
    $("" + updateContainer + "").html(fallbackText);
  }
}

function gskReadObject(object, field, fallback, updatefield){
  updateContainer = updatefield;
  fallbackText = fallback;
  gskObject = object;
  gskField = field;
	if(!isiPad) {
		$(""+updateContainer+"").html(fallback);
	} else {
		com.veeva.clm.getDataForCurrentObject(object, field, showField);
	}
}
// --- PULL VEEVA VARIABLES --- //

// --- PUSH VARIABLE --- //

function gskWriteValue(question, answer, description){
  var clickStream = {};
  clickStream.Question_vod__c = question;
  clickStream.Answer_vod__c = answer;
  clickStream.Track_Element_Description_vod__c = description;
  if (!isiPad) {
    alert(JSON.stringify(clickStream));
  } else {
    var myJSONText = JSON.stringify(clickStream);
    request = 'veeva:saveObject(Call_Clickstream_vod__c),value(' + myJSONText + '),callback()';
    document.location = request;
  }
}

// --- PUSH DATA --- //

var updateSource;
var updateField;
var updateValue;

function debug(result) {

}

function gskUpdate(result) {
  var obj = {};
  	obj[updateField] = updateValue;
  com.veeva.clm.updateRecord(updateSource, result.Account.ID, obj, debug);
  accField = "";
  accValue = "";
}

function gskWrite(source, field, value) {
  updateSource = source;
  updateField = field;
	updateValue = value;
  if (!isiPad) {
    alert(updateSource + '.' + updateField + ':' + updateValue);
  } else {
    com.veeva.clm.getDataForCurrentObject("Account", "ID", gskUpdate);
  }
}

// --- PULL DATA --- //

function showField2(result) {
  if (result[updateSource] != undefined && result[updateSource][updateField] != undefined) {
    var value = result[updateSource][updateField];
    $("" + updateContainer + "").html(value);
  } else {
    $("" + updateContainer + "").html(fallbackText);
  }
}

function gskReadField(source, field, container, fallback) {
  updateSource = source;
  updateField = field;
  updateContainer = container;
  fallbackText = fallback;
	if(!isiPad) {
		$(""+updateContainer+"").html(fallback);
	} else {
    com.veeva.clm.getDataForCurrentObject(updateSource, updateField, showField2);
	}
}

// --- PUSH ACCOUNT FORM DATA --- //

function gskSubmit(){

  $.each($('.logAccountField'), function() {
    var type = $(this).attr('type');
    if (type == 'checkbox' && $(this).prop('checked')) {
      gskWrite($(this).attr("data-object"), $(this).attr("data-field"), $(this).attr("data-desc"));
    } else if (type == 'radio' && $(this).prop("checked")) {
      gskWrite($(this).attr("data-object"), $(this).attr("data-field"), $(this).val());
    }  else if (type == 'text') {
      if($(this).val()){
        gskWrite($(this).attr("data-object"), $(this).attr("data-field"), $(this).val());
        $(this).val("");
      }
    } else if ($(this).prop("tagName").toLowerCase() == "select") {
      gskWrite($(this).attr("data-object"), $(this).attr("data-field"), $(this).val());
    } else if ($(this).hasClass('slider')) {
      gskWrite($(this).attr("data-object"), $(this).attr("data-field"), $(this).slider("value"));
    }
  });
}

// --- TRACK SURVEY --- //

function gskInitTrackedSlider(slider) {
  slider.slider({
    min: parseInt(slider.attr("data-min")),
    max: parseInt(slider.attr("data-max")),
    step: parseInt(slider.attr("data-step")),
    value: parseInt(slider.attr("data-value")),
    start: function(e, ui) {
      gskNoSwipe = true;
    },
    change: function(e, ui) {
      if (slider.hasClass("logField")) {
        gskTrackField(slider.attr("data-question"), ui.value);
      }
    },
    stop: function(e, ui) {
      gskNoSwipe = false;
    }
  });
  $('ui-slider-handle').css('z-index',10);
}

function gskFormResponse(result){
  gskLoopCounter++;
  if (gskLoopCounter > gskMaxIterations) {
    console.log("gskSurveySubmit exceeded " + gskMaxIterations + " iterations: escaping from possible infinite loop.");
    return;
  }
	if (gskClickStreamContainer.length > 0) {
	  if (!isiPad) {
	    alert(JSON.stringify(gskClickStreamContainer[0]));
			gskClickStreamContainer.shift();
	    gskFormResponse();
			return;
	  } else {
			var myJSONText = JSON.stringify(gskClickStreamContainer[0]);
			gskClickStreamContainer.shift();
			request = "veeva:saveObject(Call_Clickstream_vod__c),value(" + myJSONText + "),callback(gskFormResponse)";
			document.location = request;
			return;
		}
	}
}

function gskStoreField(type, field){
  if (type == 'checkbox' && field.prop('checked')) {
    window.sessionStorage.setItem(field.attr('id'), 'checked');
  } else if (type == 'radio') {
    window.sessionStorage.setItem(field.attr('id'), field.is(":checked"));
  } else if (type == 'text') {
    window.sessionStorage.setItem(field.attr('id'), field.val());
  } else if (field.hasClass('slider')) {
    window.sessionStorage.setItem(field.attr('id'), field.slider("value"));
  } else if (field.prop("tagName").toLowerCase() == "select") {
    window.sessionStorage.setItem(field.attr('id'), field[0].selectedIndex);
  }
}

function gskSetField(field){
  var type = field.attr('type');
  var value = window.sessionStorage.getItem(field.attr('id'));

  if (type == 'checkbox' && value == 'checked') {
    field.prop('checked', true);
  } else if (type == 'radio') {
    //field.prop('checked', false);
    if (value == 'true') {
      field.prop('checked', true);
    }
  } else if (type == 'text') {
    field.val(value);
  } else if (field.hasClass('slider')) {
    field.slider("value", value);
  } else if (field.prop("tagName").toLowerCase() == "select") {
    field[0].selectedIndex = value;
  }
}

function gskRetrieveFields() {
  $.each($('.logFormField'), function() {
    gskSetField($(this));
  });
}

function gskFormSubmit(result){
	gskClickStreamContainer = [];
  $.each($('.logFormField'), function() {
    var type = $(this).attr('type');
    gskStoreField(type, $(this));
		var clickStream = {};
    if (type == 'checkbox' && $(this).prop('checked')) {
		  clickStream.Question_vod__c = $(this).attr("data-question");
		  clickStream.Answer_vod__c = $(this).attr("data-answer");
			gskClickStreamContainer.push(clickStream);
    } else if (type == 'text' || $(this).prop("tagName").toLowerCase() == "select" ||
							 (type == 'radio' && $(this).prop("checked"))) {
		  clickStream.Question_vod__c = $(this).attr("data-question");
		  clickStream.Answer_vod__c = $(this).val();
			gskClickStreamContainer.push(clickStream);
    } else if ($(this).hasClass('slider')) {
		  clickStream.Question_vod__c = $(this).attr("data-question");
		  clickStream.Answer_vod__c = $(this).slider("value");
			gskClickStreamContainer.push(clickStream);
    }
  });
	gskFormResponse();
}

// --- TRACK INTERACTION --- //

function gskTrackInteraction(interaction, description){
  var clickStream = {};
  clickStream.Answer_vod__c = interaction;
  clickStream.Track_Element_Description_vod__c = description;
  if (!isiPad) {
    alert(JSON.stringify(clickStream));
  } else {
    var myJSONText = JSON.stringify(clickStream);
    request = 'veeva:saveObject(Call_Clickstream_vod__c),value(' + myJSONText + '),callback()';
    document.location = request;
  }
}

// --- TRACK FIELD --- //

function gskTrackField(question, answer){
  var clickStream = {};
  clickStream.Question_vod__c = question;
  clickStream.Answer_vod__c = answer;
  if (!isiPad) {
 	  alert(JSON.stringify(clickStream));
  } else {
    var myJSONText = JSON.stringify(clickStream);
    request = 'veeva:saveObject(Call_Clickstream_vod__c),value(' + myJSONText + '),callback()';
    document.location = request;
  }
}

// --- TRACK VIDEO --- //

function gskTrackedVideo(videoElement) {
  this.video = videoElement;
  this.videoObject = this.video[0];
}

gskTrackedVideo.prototype.init = function() {
  var This = this;
  this.video.off("play").on("play", function(event) {
    $('#container').trigger(myevent);
    gskCurrentVideo = This;
    videoTrack = true;
  });

  this.video.off("pause ended").on("pause ended", function(event) {
    $('#container').trigger(myevent);
		This.videoEvent();
    if(event.type=='ended') {
        This.video.get(0).load();
    }
  });
};

gskTrackedVideo.prototype.getSeconds = function() {
  var seconds = 0;
  if (this.videoObject.played.length > 1) {
    for(var ii = 1; ii < this.videoObject.played.length; ii++) {
      seconds += this.videoObject.played.end(ii) - this.videoObject.played.start(ii);
    }
  } else if (this.videoObject.played.length > 0){
    seconds += this.videoObject.played.end(0) - this.videoObject.played.start(0);
  }
  return getTimeFromSeconds(seconds);
};

gskTrackedVideo.prototype.videoEvent = function() {
  if (!videoTrack) {
    return;
  }
	this.track();
};

gskTrackedVideo.prototype.track = function() {
  var clickStream = {};
  clickStream.Question_vod__c = this.video.attr("data-name");
  clickStream.Answer_vod__c = this.getSeconds();
  clickStream.Track_Element_Description_vod__c = this.video.attr("data-description");
  if (!isiPad) {
 	  alert(JSON.stringify(clickStream));
  } else {
    var myJSONText = JSON.stringify(clickStream);
    request = 'veeva:saveObject(Call_Clickstream_vod__c),value(' + myJSONText + '),callback()';
    document.location = request;
  }
};

function stringPad(string, padding, length) {
  return (new Array(length+1).join(padding)+string).slice(-length);
}

function getTimeFromSeconds(time) {
  time = parseInt(time);
  var minutes = Math.floor(time / 60);
  var seconds = time - minutes * 60;
  return stringPad(minutes,'0',2)+':'+stringPad(seconds,'0',2);
}

com.veeva.clm.createRecordsOnExit = function() {
  if (gskCurrentVideo) {
    var callObject = "Call_Clickstream_vod__c";
    var clickStream = {};
    clickStream.Question_vod__c = gskCurrentVideo.video.attr("data-name");
    clickStream.Answer_vod__c = gskCurrentVideo.getSeconds();
    clickStream.Track_Element_Description_vod__c = gskCurrentVideo.video.attr("data-description");

    gskCurrentVideo = null;
    if (isiPad) {
      return com.veeva.clm.formatCreateRecords(callObject, clickStream);
    }
  }

  if (gskClickedTrackedLink != null) {
    var callObject = "Call_Clickstream_vod__c";
    var clickStream = {};
    clickStream.Answer_vod__c = gskClickedTrackedLink.attr("data-interaction");
    clickStream.Track_Element_Description_vod__c = gskClickedTrackedLink.attr("data-description");
    if (isiPad) {
      return com.veeva.clm.formatCreateRecords(callObject, clickStream);
    }
  }
};
