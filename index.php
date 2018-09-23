<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V7</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
	
<!--===============================================================================================-->
</head>
<body>

<?php
session_start();
$captch=$_SESSION['captcha'] = mt_rand(10000, 99999);
?>
	<div class="container-contact100">
		<div class="wrap-contact100">
				<span class="contact100-form-title">
					 Get in Contact Touch AJAX.
					<p>With just 2 files this can be easily integrated into any PHP page!</p>
				</span>
                    <div style="color: green;width: 183%;margin-left: -29%;">
					   <span id="success"></span>
					</div>
					<div style="color: red;width: 183%;margin-left: -29%;">
					   <span id="error"></span>
					</div>
			    <div style="color: white;margin-left: -29%;margin-bottom: 4%;">
				 <span id="error">All Field Requred *</span>
				</div>
				
				
			<div class="load-div"  id="tab_up_cart">	
				<div class="wrap-input100 validate-input">
					<input class="input100" id="fname" type="text" name="name" placeholder="First Name">
					<label class="label-input100" for="name">
						<span class="lnr lnr-user"></span>
					</label>
					<div style="margin-left: 65%;color: red;">
					  <span id="fname_error"></span>
					</div>
				</div>
				
				<div class="wrap-input100 validate-input">
					<input class="input100" id="lname" type="text" name="name" placeholder="Last Name">
					<label class="label-input100" for="name">
						<span class="lnr lnr-user"></span>
					</label>
					<div style="margin-left: 65%;color: red;">
					 <span id="lname_error"></span>
					</div>
				</div>

				<div class="wrap-input100 validate-input">
					<input class="input100" id="email" onkeyup="Emailcheck()" type="text" name="email" placeholder="Email">
					<label class="label-input100" for="email">
						<span class="lnr lnr-envelope"></span>
					</label>
					<div style="margin-left: 65%;color: red;">
					 <span id="email_error"></span>
					</div>
				</div>

				<div class="wrap-input100 validate-input">
					<input class="input100" id="phone" type="text" name="phone" placeholder="Phone">
					<label class="label-input100" for="phone">
						<i><span class="lnr lnr-phone-handset"></span></i>
					</label>
					<div style="margin-left: 65%;color: red;">
					 <span id="phone_error"></span>
					</div>
				</div>
				
				<div class="wrap-input100 validate-input">
					<select class="input100" id="department" style="height: 58px;border: none;">
					 <option value="">Select Options</option>
					 <option value="1">PHP</option>
					 <option value="2">Laravel</option>
					 <option value="3">Python</option>
					 <option value="4">Java</option>
					</select>
					<div style="margin-left: 65%;color: red;">
					 <span id="department_error"></span>
					</div>
				</div>

				<div class="wrap-input100 validate-input">
					<textarea class="input100" id="message" name="message" placeholder="Your message..."></textarea>
					<div style="margin-left: 65%;color: red;">
					 <span id="message_error"></span>
					</div>
				</div>
				<div class="captch">Enter this number: <?php echo $_SESSION['captcha']; ?></div>
				<div class="wrap-input100 validate-input">
					<input class="input100" id="code" type="text" name="code" placeholder="Captch Varifacation">
					<div style="margin-left: 65%;color: red;">
					 <span id="code_error"></span>
					</div>
					<input type="hidden" id="valid_captch" value="<?php echo $captch;?>">
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn save">
							Submit
						</button>
					</div>
				</div>
		    </div>
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>
	<!--Registration Form-->
	<!-- <div class="container-contact100">
		<div class="wrap-contact100">
				<span class="contact100-form-title">
					Get in Touch AJAX
				</span>
                    <div style="color: green;width: 183%;margin-left: -29%;">
					   <span id="success"></span>
					</div>
					<div style="color: red;width: 183%;margin-left: -29%;">
					   <span id="error"></span>
					</div>
			    <div style="color: red;margin-left: -29%;margin-bottom: 4%;">
				 <span id="error">All Field Requred *</span>
				</div>
				
				
			<div class="load-div"  id="tab_up_cart">	
				<div class="wrap-input100 validate-input">
					<input class="input100" id="fname" type="text" name="name" placeholder="First Name">
					<label class="label-input100" for="name">
						<span class="lnr lnr-user"></span>
					</label>
					<div style="margin-left: 65%;color: red;">
					  <span id="fname_error"></span>
					</div>
				</div>
				
				<div class="wrap-input100 validate-input">
					<input class="input100" id="lname" type="text" name="name" placeholder="Last Name">
					<label class="label-input100" for="name">
						<span class="lnr lnr-user"></span>
					</label>
					<div style="margin-left: 65%;color: red;">
					 <span id="lname_error"></span>
					</div>
				</div>

				<div class="wrap-input100 validate-input">
					<input class="input100" id="email" onkeyup="Emailcheck()" type="text" name="email" placeholder="Email">
					<label class="label-input100" for="email">
						<span class="lnr lnr-envelope"></span>
					</label>
					<div style="margin-left: 65%;color: red;">
					 <span id="email_error"></span>
					</div>
				</div>

				<div class="wrap-input100 validate-input">
					<input class="input100" id="phone" type="text" name="phone" placeholder="Phone">
					<label class="label-input100" for="phone">
						<i><span class="lnr lnr-phone-handset"></span></i>
					</label>
					<div style="margin-left: 65%;color: red;">
					 <span id="phone_error"></span>
					</div>
				</div>
				
				<div class="wrap-input100 validate-input">
					<select class="input100" id="department" style="height: 58px;border: none;">
					 <option value="">Select Options</option>
					 <option value="1">PHP</option>
					 <option value="2">Laravel</option>
					 <option value="3">Python</option>
					 <option value="4">Java</option>
					</select>
					<div style="margin-left: 65%;color: red;">
					 <span id="department_error"></span>
					</div>
				</div>

				<div class="wrap-input100 validate-input">
					<textarea class="input100" id="message" name="message" placeholder="Your message..."></textarea>
					<div style="margin-left: 65%;color: red;">
					 <span id="message_error"></span>
					</div>
				</div>
				<div class="captch">Enter this number: <?php //echo $_SESSION['captcha']; ?></div>
				<div class="wrap-input100 validate-input">
					<input class="input100" id="code" type="text" name="code" placeholder="Captch Varifacation">
					<div style="margin-left: 65%;color: red;">
					 <span id="code_error"></span>
					</div>
					<input type="hidden" id="valid_captch" value="<?php //echo $captch;?>">
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn save">
							Submit
						</button>
					</div>
				</div>
		    </div>
		</div>
	</div>-->

  <div id="dropDownSelect1"></div>
<!--===============================================================================================-->
   <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>

	function Emailcheck(){
	    var email = $("#email").val();
	    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if (filter.test(email)) {
			 $("#email_error").html("");
		} 
		else {
		  $("#email_error").html(email+" is not a valid Email !");
		}
    }
	$("#phone").keypress(function (e) {
      if(String.fromCharCode(e.keyCode).match(/[^0-9]/g)){
		  $("#phone_error").html('Please Enter Valid Phone !');
		  return false;
	  } 
	  else{
		  $("#phone_error").html('');
		  return true;
	  }
    });
	
	$("#fname").keypress(function (e) {
		var fname =$("#fname").val();
      if(fname !=''){
		  $("#fname_error").html('');
	  }
    });
	$("#lname").keypress(function (e) {
		var lname =$("#lname").val();
        if(lname !=''){
		  $("#lname_error").html('');
	    }
    });
	$("#message").keypress(function (e) {
		var message =$("#message").val();
        if(message !=''){
		  $("#message_error").html('');
	   }
    });
	
	$("#department").change(function (e) {
		var department =$("#department").val();
        if(department !=''){
		  $("#department_error").html('');
	    }
    });
	$("#code").keypress(function (e) {
		var code =$("#code").val();
        if(code !=''){
		  $("#code_error").html('');
	    }
    });

</script>
 
   
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-23581568-13');

  $( document ).ready(function(){
	 
	   $(".save").on('click',function(){
		    var fname = $("#fname").val();
			var lname = $("#lname").val();
			var email = $("#email").val();
			var phone = $("#phone").val();
			var message = $("#message").val();
			var department = $("#department").val();
			var code = $("#code").val();
			var valid_captch = $("#valid_captch").val();
			
		    if(fname =='' || lname =='' || phone =='' || message =='' || email =='' || department =='' || code==''){
				if(fname ==''){
					$("#fname_error").html('Please Enter First Name !');
				}
				if(lname ==''){
					$("#lname_error").html('Please Enter Last Name !');
				}
				
				if(phone ==''){
					$("#phone_error").html('Please Enter Phone !');
				}
				if(message ==''){
					$("#message_error").html('Please Enter Message !');
				}
				if(department ==''){
					$("#department_error").html('Please Select Department !');
				}
				if(code ==''){
					$("#code_error").html('Please Enter Varication !');
				}
				if(email ==''){
					$("#email_error").html('Please Enter Email !');
				}
				else if(validateEmail(email)){
				}
				else{
					  $("#email_error").html('Invalid Email Address !');
					  e.preventDefault();
				}
			return false;
		   }
		    $.ajax({
				url:'insert.php',
                method:'POST',
				data:{
					fname : fname,
					lname : lname,
					email : email,
					phone : phone,
					message : message,
                    department : department,
                    code : code,
                    valid_captch : valid_captch		
				},
				success:function(data){
					if(data == 'fname'){
						$("#error").html('<div class="alert alert-danger">Attention ! First Name Not Empty.</div>');
					}
					else if(data == 'lname'){
						$("#error").html('<div class="alert alert-danger">Attention ! Last Name Not Empty.</div>');
					}
					else if(data == 'email'){
						$("#error").html('<div class="alert alert-danger">Attention ! Email Address Not Empty.</div>');
					}
					else if(data == 'not_valid'){
						$("#error").html('<div class="alert alert-danger">Attention ! Email Address Not Valid.</div>');
					}
					else if(data == 'phone'){
						$("#error").html('<div class="alert alert-danger">Attention ! Phone Number Not Empty.</div>');
					}
					else if(data == 'message'){
						$("#error").html('<div class="alert alert-danger">Attention ! Message Not Empty.</div>');
					}
					else if(data == 'department'){
						$("#error").html('<div class="alert alert-danger">Attention ! Department Not Empty.</div>');
					}
					else if(data=='captch'){
						$("#error").html('<div class="alert alert-danger">Attention ! The verification number you entered is incorrect.</div>');
					}
					else if(data=='success'){
						$("#error").html('');
						$("#success").html('<div class="alert alert-success">Your Information Insert Successfully.</div>');
						$("#tab_up_cart").load(location.href+" #tab_up_cart>*","");
					}
					else{
						$("#error").html('<div class="alert alert-success">Somthing Wrong.</div>');
					}
				}
			})
	});
	function validateEmail(email){
		var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if (filter.test(email)) {
		  return true;
		}
		else {
		  return false;
		}
	}
 });
</script>

</body>
</html>
