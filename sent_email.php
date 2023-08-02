<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $email_address = $_POST["email_address"];
    $mobile_number = $_POST["mobile_number"];
    $email_subject = $_POST["email_subject"];
    $message = $_POST["message"];

    $to = "recipient@example.com"; // Replace with the actual recipient email address
    $headers = "From: " . $email_address . "\r\n";
    $headers .= "Reply-To: " . $email_address . "\r\n";

    if (mail($to, $email_subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
