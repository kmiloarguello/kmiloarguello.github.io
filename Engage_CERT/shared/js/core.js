// --- core.js v0.006 --- //
// --- CORE JS --- //

// --- DEFAULT VARIABLES --- //
var tapCount = 0;
var threshold = 400;
var startTime = 0;
var endTime = 0;
var timer = 0;

var gskNoSwipe = false;
var videoTrack = false;
var gskLoopCounter = 0;
var gskMaxIterations = 100;
var gskClickStreamContainer;
var gskCurrentVideo = null;
var gskClickedTrackedLink = null;
var videos = Array();

// --- SETUP LOCAL VS IPAD CLICK TYPES --- //
var isiPad = navigator.userAgent.match(/iPad/i) !== null;
var myevent = 'click';
var myevent2 = 'click';
var myextension = '.html';
if (isiPad) myevent = 'touchstart';
if (isiPad) myevent2 = 'touchend';
if (isiPad) myextension = '.zip';
var unloadEvent = (isiPad) ? "pagehide" : "beforeunload";

// --- SET NAVIGATION VARIABLES --- //
var currentpage = getCurrentPage();
if (veevaSwipe === '0'){
	if(pagesAll.indexOf(getCurrentPage()) != -1) {
		var mtgsk_Left = getPreviousPage();
		var mtgsk_Right = getNextPage();
		var page_references = getReferencesForPage();
		window.sessionStorage.setItem('previouspage', currentpage);
		window.sessionStorage.setItem('previouspres', presentation);
		window.sessionStorage.setItem('page_references', JSON.stringify(page_references));
	}
} else if (isiPad) {
	var mtgsk_Left = false;
	var mtgsk_Right = false;
}

// --- STOP RUBBER BANDING ON LANDSCAPE PAGES --- //
if (mtgskPortrait === '0'){
	document.addEventListener(
	'touchmove',
	function(e) {
	e.preventDefault();
	},
	false
	);
}

$( document ).ready(function() {

	// --- DOUBLE TAP NAVIGATION --- //
	$("#doubleClickLeft").bind(myevent2, function() {
		veevaCall = "prev";
		tap($(this).attr('data-slide'),$(this).attr('data-presentation'));
	});
	$("#doubleClickRight").bind(myevent2, function() {
		veevaCall = "next";
		tap($(this).attr('data-slide'),$(this).attr('data-presentation'));
	});

	$("#clickLeft").bind(myevent2, function() {
		veevaCall = "prev";
		updatePage();
	});
	$("#clickRight").bind(myevent2, function() {
		veevaCall = "next";
		updatePage();
	});

	// --- SETUP NAVIGATION --- //
	navSwipes();
	navDisable();

	// --- GSK NAVIGATION LINKS --- //
	$('#home').bind(myevent, function() {
		navHome();
	});
	$('#menu').bind(myevent, function() {
		navMenu();
	});
	$('#references').bind(myevent, function() {
		navReferences();
	});
	$('#pi').bind(myevent, function() {
		navPi();
	});
	$('#mtgskClose').bind(myevent, function() {
		mtgskClose();
	});

	// --- PORTRAIT VIEW SIZING --- //
	if (mtgskPortrait === "1") {
		resizePortrait();
	}

	// --- CUSTOM ANIMATIONS ON OR OFF --- //
	if (window.sessionStorage.getItem('mtgskAnimations') === null) {
		window.sessionStorage.setItem('mtgskAnimations', mtgskAnimations);
	}

	// --- GSK REFERENCES --- //
	if (page_references !== null) {
		mtgskReferences('page');
		$('#referencesAll').bind(myevent, function() {
			mtgskReferences('all');
		});
		$('#referencesPage').bind(myevent, function() {
			mtgskReferences('page');
		});
	}

	// --- GOTO LINKS --- //
	$('.gotoSlide').bind(myevent2, function() {
		mtgskGoToSlide($(this).attr('data-slide'),$(this).attr('data-presentation'));
	});

	// --- LOG CLICK --- //
	$.each($(".logClick"), function() {
		if (window.sessionStorage.getItem($(this).attr('id')) != undefined) {
			$(this)[0].disabled = true;
		}
		$(this).bind(myevent2, function() {
 	 		gskTrackInteraction($(this).attr("data-interaction"), $(this).attr("data-description"));
			if ($(this).attr("data-onetime") == 1) {
				window.sessionStorage.setItem($(this).attr('id'), true);
				$(this)[0].disabled = true;
			}
		});
	});

	// --- LOG FIELD --- //
	$("input[type=checkbox].logField").change(function(e) {
		gskTrackField($(this).attr("data-question"), $(this).prop('checked') ? 'checked' : 'unchecked');
	});
	$("input[type=radio].logField").change(function(e) {
		gskTrackField($(this).attr("data-question"), $(this).val());
	});
	$("select.logField").change(function(e) {
		gskTrackField($(this).attr("data-question"), $(this).val());
	});

	// --- LOG FORM SUBMIT --- //
	$.each($("button[type=submit].logFormSubmit"), function() {
		if (window.sessionStorage.getItem($(this).attr('id')) != undefined) {
			$(this)[0].disabled = true;
		}
		$(this).on(myevent2, function(e) {
			e.preventDefault();
			if ($(this).attr("data-onetime") == 1) {
				window.sessionStorage.setItem($(this).attr('id'), true);
				$(this)[0].disabled = true;
			}
			gskLoopCounter = 0;
			gskFormSubmit();
		});
	});

	// --- LOG FORM SUBMIT ACCOUNT --- //

	$(".goToSlideLogged").on(myevent2, function(e) {
		e.preventDefault();
		gskClickedTrackedLink = $(this);
		mtgskGoToSlide($(this).attr('data-slide'),$(this).attr('data-presentation'));
	});

	$.each($("button[type=submit].logFormSubmitAccount"), function() {
		/*if (window.sessionStorage.getItem($(this).attr('id')) != undefined) {
			$(this)[0].disabled = true;
		}*/
		$(this).on(myevent2, function(e) {
			e.preventDefault();
			gskSubmit();
		});
	});

	// --- CREATE SLIDERS --- //
	$.each($(".slider"), function() {
		gskInitTrackedSlider($(this));
	});

	if ($("button[type=submit].logFormSubmit") &&
		window.sessionStorage.getItem($("button[type=submit].logFormSubmit").attr('id')) != undefined) {
		gskRetrieveFields();
	}

	// --- VIDEO TRACKING --- //
	var videoIndex = 0;

	$.each($('.logVideo'), function() {
		videos.push(new gskTrackedVideo($(this)));
		videos[videoIndex++].init();
	});

	window.addEventListener(unloadEvent, function (e) {
		return com.veeva.clm.createRecordsOnExit();
	});

    // --- EMAIL FRAGMENTS --- //

    // get saved email Fragments
    getSavedFragments();
    var emailElement = $("#email");

    if (useEmail && pagesEmail[currentpage] != undefined) {
        if (!customFragmentSelector) {
            insertFragmentSelector();
        } else {
            populateFragmentSelector();
        }
        fragmentCount();

        emailElement.bind(myevent, function() {
            $("#fragmentSelector").toggle();
        });
        $("#fragmentSelector .fragmentOption").bind(myevent2, function() {
            if ($(this).hasClass("gskFragmentSelected")) {
                removeFragment(parseInt($(this).attr("data-fragment")));
                $(this).removeClass("gskFragmentSelected");
                if ($(".gskFragmentSelected").length < 1) {
                    emailElement.removeClass("active");
                }
            } else {
                addFragment(parseInt($(this).attr("data-fragment")));
                $(this).addClass("gskFragmentSelected");
                emailElement.addClass("active");
            }
            var selectorCount = $('.selectorCount');
            if ($(".gskFragmentSelected").length > 0) {
                selectorCount.show()
                             .html($(".gskFragmentSelected").length);
            } else {
                selectorCount.hide();
            }
        });
        $("#closeSelector").bind(myevent2, function() {
            $("#fragmentSelector").hide();
        });
    } else if (useEmail && emailElement.hasClass("sendEmail")) {
        if (emailFragments.length > 0) {
            fragmentCountFinal();
            emailElement.addClass("active")
                       .bind(myevent2, function() {
                if ($(this).attr("data-sent") == 1) {

                } else {
                    sendEmail();
                    $(this).attr("data-sent", 1);
                    setTimeout(function() {
                        emailElement.attr("data-sent", 0);
                    }, 5000);
                }
            });
        } else {
            emailElement.addClass("inactive");
        }
    } else {
        emailElement.addClass("inactive");
    }

});

function insertFragmentSelector() {
    var selectorHTML = '<div id="fragmentSelector"><div id="inner">';
    for (var ii = 0; ii < pagesEmail[currentpage].length; ii++) {
        var fragmentIndex = emailFragments.indexOf(fragments[pagesEmail[currentpage][ii]].id);
        var selClass = "";
        if (fragmentIndex != -1) {
            selClass = "gskFragmentSelected ";
            $('#email').addClass("active");
        }
        selectorHTML += '<div class="' + selClass +
                        'fragmentOption" data-fragment="' +
                        fragments[pagesEmail[currentpage][ii]].id + '">' +
                        fragments[pagesEmail[currentpage][ii]].label + '</div>';
    }
    selectorHTML += '<div id="closeSelector" style="color:#CC0000;">Close</div></div>' +
                    '<div class="selectorTriangle"></div></div>';
    $("body").append(selectorHTML);
}

function populateFragmentSelector() {
    var container = $(customFragmentSelectorContainer);
    if (container.length) {
        var selectorHTML = "";
        for (var ii = 0; ii < pagesEmail[currentpage].length; ii++) {
            var fragmentIndex = emailFragments.indexOf(fragments[pagesEmail[currentpage][ii]].id);
            var selClass = "";
            if (fragmentIndex != -1) {
                selClass = "gskFragmentSelected ";
                $('#email').addClass("active");
            }
            selectorHTML = '<div class="' + selClass +
                            'fragmentOption" data-fragment="' +
                            fragments[pagesEmail[currentpage][ii]].id + '">' +
                            fragments[pagesEmail[currentpage][ii]].label + '</div>';
            container.append(selectorHTML);
        }
    }
}

function fragmentCount() {
    $(".selectorCount").remove();
    $("#email").append('<div class="selectorCount">'+$(".gskFragmentSelected").length+'</div>');
    if ($(".gskFragmentSelected").length > 0) {
        $('.selectorCount').show();
    } else {
        $('.selectorCount').hide();
    }
}

function fragmentCountFinal() {
    $("#email").append('<div class="selectorCount">'+emailFragments.length+'</div>');
}
