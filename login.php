<?php
// Mulai session
session_start();

// Variabel untuk menampilkan pesan error
$error_message = "";

// Cek apakah form login telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi login (contoh sederhana, bisa diganti dengan validasi dari database)
    $valid_username = "C&C24"; // Ganti dengan username yang valid
    $valid_password = "chill&cho2024"; // Ganti dengan password yang valid

    // Cek apakah username dan password sesuai
    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['username'] = $username; // Simpan data username ke session
        header("Location: home.php"); // Arahkan ke halaman home setelah login berhasil
        exit();
    } else {
        $error_message = "Username atau password salah!"; // Pesan error jika login gagal
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Chill & Cho</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <!-- Video background -->
    <video autoplay muted loop id="background-video">
        <source src="kopi.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Login Form Container -->
    <div class="login-container">
        <h2>Login</h2>

        <!-- Pesan error jika ada -->
        <?php if (!empty($error_message)): ?>
            <div class="error"><?= $error_message; ?></div>
        <?php endif; ?>

        <!-- Form login -->
        <form id="login-form" method="POST" action="">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required placeholder="Enter your username">

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required placeholder="Enter your password">

            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>

