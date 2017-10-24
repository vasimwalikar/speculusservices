<?php
/*
 **************************************
 *									  *
 * Config here                        *
 *									  *
 **************************************
 */

$to = 'girish@speculusservices.com';

$siteName = "http://speculusservices.com";

/*
 *************************************************************
 *									                         *
 *      Don't Change below code, if you don't know php.      *
 *									                         *
 *************************************************************
 */

 $company_name = $_POST['company_name'];

 $Service = $_POST['Service'];
 $lead_time_expected = $_POST['lead_time_expected'];
 $expected_budget = $_POST['expected_budget'];
 $mail = $_POST['email'];
 $contact = $_POST['contact'];


if (isset($company_name) && isset($mail)) {


    $mailSub = '[Contact] [' . $siteName . '] '.$subject;

    $body = 'Company Name: ' . $company_name . "\n\n";
    $body .= 'Mail: ' . $mail . "\n\n";
    $body .= 'Service: ' . $Service . "\n\n";
    $body .= 'Lead time expected: ' . $lead_time_expected . "\n\n";
    $body .= 'Expected budget: ' . $expected_budget . "\n\n";
    $body .= 'Contact: ' . $contact;

    $header = 'From: ' . $mail . "\r\n";
    $header .= 'Reply-To:  ' . $mail . "\r\n";
    $header .= 'X-Mailer: PHP/' . phpversion();

    echo mail($to, $mailSub, $body, $header);
}else{
    echo '0';
}
?>