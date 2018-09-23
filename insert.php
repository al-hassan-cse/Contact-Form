<?php 
$server='localhost';
$sql='root';
$password='';
$db='ajax_insert';
$con=  mysqli_connect($server, $sql, $password, $db);
if($con){
   //echo 'connect';
}
else {
   die('Your Database Not Connect!!!');    
}


include("mail/phpmailer.php");


if(isset($_POST)){
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];
   $department = $_POST['department'];
   $code = $_POST['code'];
   $valid_captch = $_POST['valid_captch'];
   
    if($fname ==''){
		 echo 'fname';
		 return false;
	}
	if($lname ==''){
		 echo 'lname';
		 return false;
	}
	if($email ==''){
		 echo 'email';
		 return false;
	}
	
	if($email !=''){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		}
		else{
			 echo 'not_valid';
		     return false;
		}
	}
	
	if($phone ==''){
		 echo 'phone';
		 return false;
	}
	if($department ==''){
		 echo 'department';
		 return false;
	}
	if($message ==''){
		 echo 'message';
		 return false;
	}
    if($code != $valid_captch){
		 echo 'captch';
		 return false;
    }

   $sql="INSERT INTO tbl_student(fname,lname,email,phone,message,department) VALUES ('$fname','$lname','$email','$phone','$message','$department')";
   $result=mysqli_query($con, $sql);
   if($result){
		$mail_subject="Quick Contact.";      //Show Contact Title
		$contactname = $fname. $lname;
		$sysEmail='alhassan.cse@gmail.com';  //Receive Email Address
		$body = $message;

		$host = 'smtp.gmail.com';
		$smtp_username = 'alhassan.bdtask@gmail.com';
		$stmp_password = 'bdtaskcom';
		$port = 587;
		$secure = 'tls';
		
		$mail = new PHPMailer();

		try{
			$mail->isSMTP();                          // Set mailer to use SMTP
			$mail->Host = $host;                      // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                   // Enable SMTP authentication
			$mail->Username = $smtp_username;         // SMTP username
			$mail->Password = $stmp_password;         // SMTP password
			$mail->SMTPSecure = $secure;              // Enable TLS encryption, `ssl` also accepted
			$mail->Port = $port;

			$mail->setFrom($email, $contactname);     // $email ---who send mail
			$mail->addAddress($sysEmail, $fname);     // Receive Email Address
			$mail->isHTML(true);                      // Set email format to HTML

			$mail->Subject = $mail_subject;
			$mail->Body = $body;

			if (!$mail->send()){
				echo "mail_not_send";
			}
			else {
			   echo "success";
			}
		} 
		catch (\phpmailerException $e) {
		   echo "error";
		}
					
   }
   else{
	   echo 2;
   }
}
?>