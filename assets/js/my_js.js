$(document).ready(function(){
	// Start function for registration
	$('#fname').on('blur', function(){
		if($(this).val() == ""){
			$('#xfname').html("<p style = 'height:10px;width:10px'><img src = 'assets/img/ekis.png'/></p>");
		}else{
			$('#xfname').html("<p style = 'height:10px;width:10px'><img src = 'assets/img/check.png'/></p>");
		}
	});
		
	$('#lname').on('blur', function(){
		if($(this).val() == ""){
			$('#xlname').html("<p style = 'height:10px;width:10px'><img src = 'assets/img/ekis.png'/></p>");
		}else{
			$('#xlname').html("<p style = 'height:10px;width:10px'><img src = 'assets/img/check.png'/></p>");
		}
	});

	$('#Email').on('blur', function(){
		if($(this).val() == ""){
			$('#xemailadd').html("<p style = 'height:10px;width:10px'><img src = 'assets/img/ekis.png'/></p>");
		}else{
			$('#xemailadd').html("<p style = 'height:10px;width:10px'><img src = 'assets/img/check.png'/></p>");
		}

		var a = $("#Email").val();
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
		if(filter.test(a))
		{
			$('#xemailadd').animate({ width: 'show' });
			$('#xemailadd').html("<p style = 'height:10px;width:10px'><img src = 'assets/img/check.png'/></p>");
			return false;
		}else{
			$('#xemailadd').animate({ width: 'show' });
			$('#xemailadd').html("<p style = 'height:10px;width:10px'><img src = 'assets/img/ekis.png'/></p>");
			alert("Incorrect Email format!");
			return false;	
		}
	});

	$('#Password').on('blur', function(){
		if($(this).val().length < 8 || $(this).val() == ""){
			$('#xpassword').html("<p style = 'height:10px;width:10px'><img src = 'assets/img/ekis.png'/></p>");
			alert("Require atleast 8 characters");
		}else{
			$('#xpassword').html("<p style = 'height:10px;width:10px'><img src = 'assets/img/check.png'/></p>");
		}
	});

	$('#Confpass').on('blur', function(){
		if($(this).val() != $('#Password').val() && $(this).val().length < 8 || $(this).val() == ""){
			$('#xcon_password').html("<p style = 'height:10px;width:10px'><img src = 'assets/img/ekis.png'/></p>");
			alert('Password Mismatch!');
		}else{
			$('#xcon_password').html("<p style = 'height:10px;width:10px'><img src = 'assets/img/check.png'/></p>");
		}
	});

	$('#validate').on('click', function(){
		if($('#fname').val() != "" && $('#lname').val() != "" &&
			$('#emailadd').val() != "" && $('#password').val() != "" && $('#Confpass').val() == $('#Password').val()){
			return true;
		}else{
			alert('Please Fill out all Form!');
			return false;
		}
	});

	$('#reset').on('click', function(){
		$('#xfname').html("");
		$('#xmname').html("");
		$('#xlname').html("");
		$('#xemailadd').html("");
		$('#xpassword').html("");
		$('#xConfpass').html("");
	});
	// End function for registration

	// Start function for submit emailadd and password
	$('#login').on('click', function(){
		var emailadd = $('#email').val();
		var password = $('#password').val();
		var is_user;
		$.ajax({
			url: 'insert1.php',
			data: {emailadd: emailadd, password: password},
			dataType: 'JSON',
			type: 'POST',

			success:function(r){
				is_user = r.is_user;
				alert("Successfully Log In");
			}
			// error:function(){
			// 	alert('There something wrong');
			// }
		});
		return is_user;
	});
	// End function for submit emailadd and password

	// Start function for validation in login
	$('#email').on('blur', function(){
		if($(this).val() == ""){
			$('#xemail').html("<p style = 'height:10px;width:10px'><img src = 'assets/img/ekis.png'/></p>");
		}else{
			$('#xemail').html("<p style = 'height:10px;width:10px'><img src = 'assets/img/check.png'/></p>");
		}
		var a = $("#email").val();
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
		if(filter.test(a))
		{
			$('#xemail').animate({ width: 'show' });
			$('#xemail').html("<p style = 'height:10px;width:10px'><img src = 'assets/img/check.png'/></p>");
			return false;
		}else{
			$('#xemail').animate({ width: 'show' });
			$('#xemail').html("<p style = 'height:10px;width:10px'><img src = 'assets/img/ekis.png'/></p>");
			alert("Incorrect Email format!");
			return false;	
		}
	});

	$('#pass').on('blur', function(){
		if($(this).val() == ""){
			$('#xpass').html("<p style = 'height:10px;width:10px'><img src = 'assets/img/ekis.png'/></p>");
		}else{
			$('#xpass').html("<p style = 'height:10px;width:10px'><img src = 'assets/img/check.png'/></p>");
		}
	});
	// End function for validation in login
	var getCorrect = $('#getCorrect').val();
	var getYour = $('#getYour').val();
	if (getCorrect != getYour && getYour == '') {
		$('#remarks').html("<p style = 'height:10px;width:10px'><img src = 'assets/img/ekis.png'/></p>");
	} else {
		$('#remarks').html("<p style = 'height:10px;width:10px'><img src = 'assets/img/check.png'/></p>");
	}
});