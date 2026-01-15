<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['cname'];
    $email = $_POST['cemail'];
    $message = $_POST['cmessage'];

    $to = "your-email@example.com"; // Replace with your email address
    $subject = "New Message from $name";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }
}
