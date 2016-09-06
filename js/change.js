// cambio JS

<<<<<<< HEAD
var terms = $("body ul li");
=======
var terms = $("#sec1 ul li");
>>>>>>> responsive

	function rotateTerm() {

	 var ct = $("#rotate").data("term") || 0;

	// console.log(terms.eq([ct]).text());
	 
	  $("#rotate").data("term", 
	  	ct == terms.length -1 ? 0 : ct + 1).text(terms.eq([ct]).text())
	  .fadeIn().delay(200).fadeOut(1, rotateTerm);

	}
	$(rotateTerm);