<?php 
if(isset($_POST['submit'])){
    $to = "info@zumaconsulting.com"; // this is your Email address
    $from = $_POST['form_email']; // this is the sender's Email address
    $name = $_POST['form_name'];
    $phone = $_POST['form_phone'];
    $subject = "Speak To Us";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['form_message'];

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: ' . $from . "\r\n";

    mail($to,$subject,$message,$headers);

    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>