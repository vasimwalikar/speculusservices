<?php
/*
 **************************************
 *									  *
 * Config here                        *
 *									  *
 **************************************
 */

$to = 'vasim@freenet.zone';

$siteName = "http://speculusservices.com";

/*
 *************************************************************
 *									                         *
 *      Don't Change below code, if you don't know php.      *
 *									                         *
 *************************************************************
 */

 $name = $_POST['name'];

 $mail = $_POST['email'];
 $mobile = $_POST['mobile'];
 $subject = $_POST['subj'];
 $message = $_POST['mssg'];
if (isset($name) && isset($mail) && isset($message)) {


    $mailSub = '[Contact] [' . $siteName . '] '.$subject;

    $body = 'Sender Name: ' . $name . "\n\n";
    $body .= 'Sender Mail: ' . $mail . "\n\n";
    $body .= 'Sender Mobile: ' . $mobile . "\n\n";
    $body .= 'Message Subject: ' . $subject . "\n\n";
    $body .= 'Message: ' . $message;

    $header = 'From: ' . $mail . "\r\n";
    $header .= 'Reply-To:  ' . $mail . "\r\n";
    $header .= 'X-Mailer: PHP/' . phpversion();

    echo mail($to, $mailSub, $body, $header);
}else{
    echo '0';
}
?>