<?php

require '../env.php';

// Ambil data dari form
$nama = $_POST['name'];
$email = $_POST['email'];
$pesan = $_POST['message'];
$subjek = $_POST['subject'];

// Atur penerima email
$penerima = $EMAIL;

// Atur isi email
$pesan_email = "Pesan dari: $nama \n\nEmail: $email \n\nPesan: $pesan";

// Atur headers email
$headers = 'From: ' . $EMAIL_FROM . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Kirim email
if (mail($penerima, $subjek, $pesan_email, $headers)) {
    echo 'Pesan telah berhasil dikirim!';
} else {
    echo 'Terjadi kesalahan saat mengirim pesan.';
}
