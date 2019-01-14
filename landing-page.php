<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lead_info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




if (isset($_POST["contactSubmit"])){   

    $frmContact_name = trim($_POST["contact-name"]);

    $frmContact_phone = trim($_POST["contact-phone"]);

    $frmContact_email = trim($_POST["contact-email"]);

    $frmContact_message = trim($_POST["contact-message"]); 

    $frmContact_sqfeet = trim($_POST["contact-sqfeet"]);  

    $_SESSION["success_fixed_message"] = "error-msg";

		 $from_address = "cibyjohn736@gmail.com";

		 $subject = "Lead Information";
		 
		  $res = "insert into `contact_info` (name,email,phone,comments,square_feet) VALUES ('$frmContact_name','$frmContact_email','$frmContact_phone','$frmContact_message','$frmContact_sqfeet')";
          $final = $conn->query($res);
		  $info = '';
          if($final =='1'){
			 $info = "Information added successfully";  
		  }


	// To send HTML mail, the Content-type header must be set

//$headers  = 'MIME-Version: 1.0' . "\r\n";

//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

 //$from = $frmContact_name.'<'.$frmContact_email.'>';


    

// Create email headers

   /*  $headers .= 'From: '.$from."\r\n".

    'Reply-To: '.$from."\r\n" .

    'X-Mailer: PHP/' . phpversion();

		 $body = "<html><body>";
		 $body .=  "<br> Dear Administrator,<br><br>";
		 $body .= " There is an enquiry from the website's form.<br> Please find the details below:<hr /><table>";

		 $body .= " <tr><td width='40%' style='font-weight: bold;'>Name:</td><td width='60%'>". $frmContact_name ."</td></tr>";

         $body .= "<tr><td style='font-weight: bold;'>Mail ID:</td><td>". $frmContact_email ."</td></tr>";
		 $body .= "<tr><td style='font-weight: bold;'>Phone Number:</td><td>". $frmContact_phone ."</td></tr>";

		 $body .= "<tr><td style='font-weight: bold;' valign='top'>Message:</td><td>". $frmContact_message ."</td></tr>";
		 $body .= "<tr><td style='font-weight: bold;'>Square Feet:</td><td>". $frmContact_sqfeet ."</td></tr>";
		 $body .= "</table><hr />";
		 $body .= "<em>This email was sent via form on lead information Enquiry.</em>";
		 $body .= "</body></html>";
         $to = 'cibyjohn736@gmail.com';		 
		 $sendmail = mail( $to,$subject,$body,$headers);
		 sendMail($from_address,"","","cibyjohn736@gmail.com",$subject, $body);
		 

		 if ($sendmail == true) {

			header('Location: https://www.google.com');
			}else {	

			$msg	= "Oops! Something went wrong. Please try again later."; 
			$frmContact_name = "";
			$frmContact_phone = "";
			$frmContact_email = "";
			$frmContact_message = "";	
			$frmContact_sqfeet = "";
		 }*/
}





/*function sendMail( $to, $replyto, $cc, $bcc,  $subject , $email_message )



	{



		require_once("files/class.phpmailer.php");



		require_once("files/class.smtp.php");



		



		$mail = new PHPMailer();



		$mail->SetLanguage("en", "lib/");



		$mail->IsSMTP();



		$mail->SMTPSecure 	= "ssl"; //SSL should be enabled for mailgun



		$mode				= "html";



	



		$mail->Host		= "smtp.mailgun.org";



		$mail->SMTPAuth	= true;



		$mail->Port		= 465;



		



		$mail->Username	= "postmaster@sandboxaec8733709eb4402adae5693f2556a82.mailgun.org";



		$mail->Password	= "192ac0865g02";



		



		$mail->From		= "cibyjohn736@gmail.com";



		$mail->FromName	= "Lead Information";



	



		if ( strpos($to , ";") > -1 )



		{



			$strTo = explode(';',$to);



			



			foreach( $strTo as &$value){



				



				if ( trim($value) != "" )



					$mail->AddAddress($value);



			}



		}



		else



		{



			if ( trim($to) != "" )



				$mail->AddAddress($to);		



		}



		



		if ( strpos($cc,";") > -1 )



		{



			$strCC = explode(';',$cc);



	



			foreach( $strCC as &$value)



			{



				if ( trim($value) != "" )



					$mail->AddCC($value);		



			}



		}



		else



		{



			if ( trim($cc) != "" )



				$mail->AddCC($cc);		



		}



			



		if ( strpos($bcc,";") > -1)



		{



			$strBCC = explode(';',$bcc);



			foreach( $strBCC as &$value)



			{



				if ( trim($value) != "" )			



					$mail->AddBCC($value);		



			}



		}	



		else



		{



			if ( trim($bcc) != "" )



				$mail->AddBCC($bcc);		



		}	



		



		if ( $replyto != "")



		{



			$mail->AddReplyTo($replyto);		



		}	



		



		$mail->Subject = $subject;



		$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';	 



		$mail->MsgHTML( $email_message );



		



		if( $mail->Send())



		{



			return true;



		}



		else



		{



			return false;



		}



	}*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Landing Page </title>
	<!-- reponsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<!-- main stylesheet -->
	
</head>
<body>

<?php if(isset($info)&& $info!=''){ echo $info; }?>
<section class="contact-style-two" id="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-md-5 contact-info-wrap">
				<!-- .section-title -->
				<div class="section-title">
					<h2><span>Please fill your Informations: </span></h2>
				</div><!-- /.section-title -->				
			</div>
			<div class="col-md-7 right-side-overlay-full">
				<!-- .contact-form-wrap -->
			<div class="contact-form-wrap">
				<form method="post" class="contact-form-bottom" name="contact" id="contact">
					<p>
					<input name="contact-name" id="contact-name" type="text" title="Name" placeholder="Name*">
					 <span id="error_cname" class="common-error"></span>
					</p>
					<p>
					<input name="contact-email" id="contact-email" title="Email" type="text" placeholder="Email*">
					 <span id="error_cemail" class="common-error"></span>
					</p>					
					<p>
					<input name="contact-phone" id="contact-phone" type="text" placeholder="Phone*" title="Phone" maxlength="15" minlength="7">
					 <span id="error_cphone" class="common-error"></span>
					</p>
					<p>
					<textarea name="contact-message" id="contact-message" placeholder="Address"></textarea>
					 <span id="error_cmessage" class="common-error"></span>
					</p>
					<p>
					<input name="contact-sqfeet" id="contact-sqfeet" type="text" placeholder="Square Feet" title="Square Feet" >
					 <span id="error_sqfeet" class="common-error"></span>
					</p>
					<p><button type="submit" onclick="return validatecontact();" name="contactSubmit" id="contactSubmit">Submit Data</button></p>
				</form>
			</div><!-- /.contact-form-wrap -->
			</div>
		</div>
	</div>
</section>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<script>
	
$(window).scroll(function() {
    if ($(this).scrollTop() > 50 ) {
        $('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        $('.scrolltop').stop(true, true).fadeOut();
    }
});
$(function(){$(".scroll").click(function(){$("html,body").animate({scrollTop:$("body").offset().top},"1000");return false})})




function validatecontact(){ 
		var name = $('#contact-name').val();
		var email = $('#contact-email').val();
		var phone = $('#contact-phone').val();
		var message = $('#contact-message').val();
		var squarefeet = $('#contact-sqfeet').val();
		
		var namefilter = /^[a-zA-Z ]+$/;
          $("#error_cname").html('');
		  $("#error_cphone").html('');
		  $("#error_cemail").html('');
		  $("#error_ccountry").html('');
		  $("#error_cmessage").html('');
			
		if(name==""){ // || name=="Name*"

		document.getElementById('contact-name').style.border="1px solid red";

		document.getElementById('contact-name').focus();
         $("#error_cname").html('Please fill in your name.');
		return false;

	}

	else if (!namefilter.test(name))

	{

		document.getElementById('contact-name').style.border="1px solid red";

		document.getElementById('contact-name').focus();
         $("#error_cname").html('Please enter a valid name.');
		return false;

	}else{

		document.getElementById('contact-name').style.border="";
        $("#error_cname").html('');
	}
	var emailfilter = /^[_A-Za-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;


	if(email==""){ //|| email=="Email*"



		document.getElementById('contact-email').style.border="1px solid red";



		document.getElementById('contact-email').focus();

          $("#error_cemail").html('Please fill in your email address.');

		return false;



	}else if (!emailfilter.test( email )){



		document.getElementById('contact-email').style.border="1px solid red";



		document.getElementById('contact-email').focus();

         $("#error_cemail").html('Please enter a valid email adrress.');

		return false;



	}else{



	document.getElementById('contact-email').style.border="";

    $("#error_cemail").html('');

	}
	
	
	
	


	var phonefilter = /^[0-9- ]+$/;

	if(phone==""){ // || phone=="Phone*"

		document.getElementById('contact-phone').style.border="1px solid red";

		document.getElementById('contact-phone').focus();
         $("#error_cphone").html('Please fill in your phone number.');
		return false;


	}else if (!phonefilter.test( phone )){
         
		document.getElementById('contact-phone').style.border="1px solid red";

		document.getElementById('contact-phone').focus();
         $("#error_cphone").html('Please enter a valid phone number.');
		return false;

	}else if(phone.length < 7){
		document.getElementById('contact-phone').style.border="1px solid red";

		document.getElementById('contact-phone').focus();
         $("#error_cphone").html('Please enter a valid phone number.');
		return false;
	}else if(phone.length >15){
		document.getElementById('contact-phone').style.border="1px solid red";

		document.getElementById('contact-phone').focus();
         $("#error_cphone").html('Please enter a valid phone number.');
		return false;
	}else{
		document.getElementById('contact-phone').style.border="";
		 $("#error_cphone").html('');

	}
		
}


</script>



</body>
</html>