$(document).ready(function(){

	$('#registers').on('click', function(){
		$('#RegistrationForm').toggle(4000);
		$('#overlay1').fadeIn(4000);
	});

	$('#validate').on('click', function(){
		$('#RegistrationForm').slideUp(1000);
		$('#overlay1').fadeOut(1000);
	});

	$('#close').on('click', function(){
		$('#RegistrationForm').slideUp(2000);
		$('#overlay1').fadeOut(2000);
	});

	$('#Online_test').fadeIn(3000);
	// $('#OEA').slideDown(2000);

	$('#testSubmit').click(function(event){

		if ($('#choice_a').is(':checked')) {
			return true;
		} else if ($('#choice_b').is(':checked')) {
			return true;
		} else if ($('#choice_c').is(':checked')) {
			return true;
		} else if ($('#choice_d').is(':checked')) {
			return true;
		} else {
			alert("You need to choice an Answer!");
			return false;
		}
	});
});