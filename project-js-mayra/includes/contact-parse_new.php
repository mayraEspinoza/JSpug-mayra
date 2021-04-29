<?php
//if they pressed the button, pull out the user inputs
if($_POST['did_send'] == 1){
    
    // create variables from inputs and sanitize
    $senderName= filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $senderPhone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $senderEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $senderMessage = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    // IMPORTANT - Change these lines to be appropriate for your needs - IMPORTANT !!!!!!!!!!!!!!!!!!
    $to = "mayraespinoza0715@platt.edu";
    $from = "$senderEmail";
    $subject = "Class form Test";
    // Modify the Body of the message however you like
    $message = "form info:

        Name:  $senderName
        Email:  $senderEmail
        Phone: $senderPhone
        Message: $senderMessage";

        // Build $headers Variable
        $headers = "From: $from\r\n";
        $headers .= "Reply-to: $senderEmail\r\n";

    //send the mail!
    $mail_sent = mail($to, $subject, $message, $headers);

    //success/error
    if($mail_sent == 1){
        //success
        $display_msg = 'Thank you for filling in the form ' .$senderName.'. I will reply as soon as possible';
        $status = 'success';
        //to open a new thank you page use: header( 'Location: thankYou.html' ) ;
    }else{
        //failure
        $display_msg = 'Sorry, something went wrong, and the form was not submitted. Please try again';
        $status = 'notsent';
    }
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="../css/form.css" rel="stylesheet" type="text/css" />
</head>
