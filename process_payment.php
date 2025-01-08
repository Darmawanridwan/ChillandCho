<?php
session_start(); // Memulai sesi

// Cek apakah form sudah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mendapatkan data dari form
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $payment_method = $_POST['payment_method'];

    // Proses pembayaran
    // Ini adalah contoh, sesuaikan dengan metode pembayaran yang Anda gunakan (misalnya API pembayaran, database, dll.)
    // Dalam kasus ini, hanya akan menampilkan data yang dikirim.

    // Menyimpan informasi pembayaran ke session atau database (contoh menggunakan session)
    $_SESSION['payment_details'] = [
        'name' => $name,
        'phone' => $phone,
        'address' => $address,
        'payment_method' => $payment_method
    ];

    // Redirect ke halaman konfirmasi pembayaran
    header('Location: payment_confirmation.php');
    exit();
} else {
    // Jika akses langsung ke file tanpa form, redirect ke halaman pembayaran
    header('Location: payment.php');
    exit();
}
?>
