<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "your-email@example.com"; // Ganti dengan alamat email Anda
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    $body = "Nama: $name\n";
    $body .= "Email: $email\n";
    $body .= "Subjek: $subject\n";
    $body .= "Pesan:\n$message\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Pesan Anda telah dikirim!";
    } else {
        echo "Terjadi kesalahan saat mengirim pesan.";
    }
} else {
    echo "Metode tidak diizinkan.";
}
?>