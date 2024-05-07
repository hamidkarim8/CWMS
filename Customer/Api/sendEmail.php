<?php 
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../../vendor/phpmailer/phpmailer/src/Exception.php';
require '../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../../vendor/phpmailer/phpmailer/src/SMTP.php';

include_once("../../dbConnect.php");

$email=$_POST["email"];
$nama=$_POST["nama"];
$message=$_POST["message"];
    

                $otp = mt_rand(1000, 9999);
                $mail = new PHPMailer(); $mail->IsSMTP(); $mail->Mailer = "smtp";
                $mail->SMTPDebug  = 1;  
                $mail->SMTPAuth   = TRUE;
                $mail->SMTPSecure = "tls";
                $mail->Port       = 587;
                $mail->Host       = "smtp.gmail.com";
                $mail->Username   = "ssems3344@gmail.com";
                $mail->Password   = "nxoc vnlf eltm mmht";
                $mail->IsHTML(true);
                $mail->AddAddress("$email", "$nama");
                $mail->SetFrom("ssems3344@gmail.com", "Reminder Return Equipment");
                $mail->AddReplyTo("ssems3344@gmail.com", "reply-to-name");
                // $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
                $mail->Subject = "Reminder Return Equipment";
                $content = "<b>$message</b>";

                $mail->MsgHTML($content); 
                if(!$mail->Send()) {
                    echo "
                        <script type='text/javascript'>
                        alert('Error Send OTP Number To Your Email $email');
                    window.location.href ='index.php';
                    </script>";
                } else {
                    $_SESSION['otp'] = $otp;
                    $_SESSION['email'] = $email;
                    echo "
                          <script type='text/javascript'>
                          alert('Email Send Success');
                      window.location.href ='../returnFile.php';
                    </script>";
                }
     
   

?>