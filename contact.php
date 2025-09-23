<?php
if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $project_type = $_POST['project_type'];
    $message = $_POST['message'];
    
    $to = "kintan.x34@gmail.com";
    $subject = "New Contact Form Submission - Blue Space Engineering";
    
    $email_body = "New contact form submission:\n\n";
    $email_body .= "Name: " . $name . "\n";
    $email_body .= "Email: " . $email . "\n";
    $email_body .= "Phone: " . $phone . "\n";
    $email_body .= "Project Type: " . $project_type . "\n";
    $email_body .= "Message: " . $message . "\n";
    
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    
    if (mail($to, $subject, $email_body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>