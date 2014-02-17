$(document).ready(function(){
	$('#add').click(function(){
		$('#addQuestion').slideToggle(1000);
		$('#overlay1').fadeIn(2000);
	});

	$('#closeAdd').click(function(){
		$('#addQuestion').slideUp(1000);
		$('#overlay1').fadeOut(2000);
	});

	$('#edit').click(function(){
		$('#editQuestion').slideToggle(1000);
		$('#overlay1').fadeIn(2000);
	});

	$('#view').click(function(){
		$('#viewQuestion').slideToggle(1000);
		$('#overlay1').fadeIn(2000);
	});

	$('#editAdmin').click(function(){
		$('#editAdminProfile').slideDown(1000);
	});

	$('#viewExam').click(function(){
		$('#viewExaminee').slideToggle(1000);
		$('#overlay1').fadeIn(1000);
	});

	$('#closeViewExaminee').click(function(){
		$('#viewExaminee').slideUp(1000);
		$('#overlay1').fadeOut(1000);
	});

	$('#adminChoices').click(function(){
		$('#adminDropDown').slideDown();
		$('#overlay1').show();
	});

	$('#adminDrop').click(function(){
		$('#adminDropDown').slideup();
		$('#overlay1').hide();
	});

	$('#adminaddUser').click(function(){
		$('#adminUserAdd').slideDown();
		$('#overlay1').show();
	});

	$('#adminUserCancel').click(function(){
		$('#adminUserAdd').slideUp();
		$('#overlay1').hide();
	});
});