<?php
include('PHPMailer/PHPMailer/PHPMailerAutoload.php');
function smtpmailer($to, $subject, $body)
{
   global $siteemail , $siteemailpassword , $siteemailhost , $sitename;
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'ssl';                    
    $mail->Host = $siteemailhost;               
    $mail->Port = 465;                             
    $mail->Username = $siteemail;      
    $mail->Password = $siteemailpassword;        

    $mail->IsHTML(true);
    $mail->From = $siteemail;                           
    $mail->FromName = $sitename;
    $mail->Sender = $siteemail;
    $mail->AddReplyTo($siteemail, $sitename);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);

    if(!$mail->Send()) {
        // Return detailed error message
        return 'Mailer Error: ' . $mail->ErrorInfo;
    }

    return true;  // Sending successful
}
?>

