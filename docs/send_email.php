<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $to = "harry-rae@hotmail.com"; // Replace with your email
    $subject = "New Form Submission";
    $message = "Name: $name\nEmail: $email";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
}
?>
