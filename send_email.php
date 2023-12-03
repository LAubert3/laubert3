<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set up email parameters
    $to = "so7ar@protonmail.com";
    $subject = "New Message from Portfolio Contact Form";
    $headers = "From: $name <$email>";

    // Send the email
    $success = mail($to, $subject, $message, $headers);

    // Check if the email was sent successfully
    if ($success) {
        echo "Email sent successfully!";
    } else {
        echo "An error occurred. Please try again.";
    }
}
?>
