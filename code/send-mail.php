<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $service = htmlspecialchars($_POST['service']);
    $date = htmlspecialchars($_POST['date']);

    $to = "fahimaazizi397@gmail.com"; // Your email
    $subject = "New Appointment Booking";
    $message = "Name: $name\nService: $service\nPreferred Date: $date";
    $headers = "From: no-reply@yourdomain.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Booking request sent successfully!";
    } else {
        echo "Failed to send booking request.";
    }
}
?>
