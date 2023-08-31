<?php
if (isset($_POST['email']) && isset($_POST['message'])) {
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'dreamliner.contact@gmail.com'; // Ganti dengan alamat email Anda
    $subject = 'New Contact Form Message';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    mail($to, $subject, $message, $headers);

    echo 'Email sent successfully.';
} else {
    echo 'Failed to send email.';
}
?>