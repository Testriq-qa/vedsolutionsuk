<?php
include("class.phpmailer.php");
function sendMail($address,$username,$body){

			
			$email_to =   'contact@vedsolutions.co.uk'; //the address to which the email will be sent
			$name     =   $_POST['name'];  
			$email    =   $_POST['email'];
			$subject  =   $_POST['subject'];
			$message  =   $_POST['message'];

            $mail = new PHPMailer();
            $mail->IsSMTP(); // telling the class to use SMTP
            //$mail->Host       = "smtp.gmail.com"; // SMTP server
            $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                // 1 = errors and messages
                                                                           // 2 = messages only
             $mail->SMTPAuth   = true;                  // enable SMTP authentication
             $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
             $mail->Host       = "smtp.gmail.com";      // sets  as the SMTP server
             $mail->Port       = 465;                   // set the SMTP port for the server
             $mail->Username   = "silsolutions09@gmail.com";  // username
             $mail->Password   = "silsolid1";            // password

            $mail->SetFrom($email_to  , 'Contact');

            $mail->Subject    = $subject;



            $mail->MsgHTML($email .' .. ' . $message);

            $address = $address;
            $mail->AddAddress($email_to, $name);

            if(!$mail->Send()) {
              echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
            echo 'sent';
            }
}

?>