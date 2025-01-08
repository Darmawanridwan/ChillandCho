<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Chill & Cho</title>
    <link rel="stylesheet" href="aboutus.css">
</head>
<body>
    <!-- Background Video -->
    <video id="background-video" autoplay loop muted>
        <source src="latte.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <h2>Chill & Cho</h2>
        </div>
        <br>
        <ul class="nav-links">
            <li><a href="home.php">Home</a></li>
            <li><a href="product.php">Products</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="aboutus.php">About Us</a></li>

            <?php if (isset($_SESSION['email'])): ?>
                <!-- Jika pengguna sudah login -->
                <li><a href="logout.php" class="logout-btn">Logout</a></li>
            <?php else: ?>
                <!-- Jika pengguna belum login -->
                <li><a href="logout.php">LogOut</a></li>
            <?php endif; ?>
        </ul>
    </div>

    <!-- About Us Section -->
    <div class="aboutus-container">
        <div class="about-text">
            <p><b>Chill & Cho</b> adalah tempat di mana setiap tegukan kopi membawa Anda pada pengalaman rasa yang tak terlupakan. Kami hadir dengan misi untuk menyajikan kopi terbaik dengan sentuhan kehangatan yang membuat setiap kunjungan semakin berkesan. Dari biji kopi pilihan hingga teknik penyeduhan yang sempurna, setiap cangkir kopi di Chill & Cho adalah hasil dedikasi kami untuk menciptakan kenikmatan yang sesungguhnya.</p>
            <br>
            <p>Kami percaya bahwa kopi bukan hanya tentang rasa, tetapi juga tentang pengalaman. Kami mengutamakan kualitas dengan hanya memilih biji kopi terbaik, yang diseduh dengan penuh perhatian untuk memberikan cita rasa yang kaya dan memuaskan. Kami berkomitmen untuk menyediakan tempat yang nyaman bagi semua penggemar kopi, dari yang baru mencoba hingga para barista sejati.</p>
            <br>
            <p>Dengan dedikasi pada kualitas dan rasa, Chill & Cho menyajikan kopi yang cocok untuk menemani hari-hari Anda, menjadikannya lebih rileks dan penuh energi.</p>
        </div>    
    <!-- Footer Section -->
<footer>
    <div class="footer-content">
        <p>&copy; 2024 Chill & Cho. All Rights Reserved.</p>
    </div>
</footer>
</body>
</html>



