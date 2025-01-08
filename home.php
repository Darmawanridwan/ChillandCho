<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Chill & Cho</title>
    <link rel="stylesheet" href="home.css">
    <style>
        /* Background image for the entire page */
        body {
            background-image: url('https://i.pinimg.com/736x/18/f3/69/18f369946437867e4dc93a5ccf2a8272.jpg');
            background-size: 100%; /* Ensures the image covers the full page */
            background-position: center;
            background-attachment: fixed; /* Keeps the background fixed when scrolling */
        }

        /* Optional: If you want to add a background specifically to the hero section */
        .hero-section {
            background-image: url('');
            background-size: 48%;
            background-position: center;
            padding: 100px 0; /* Adds some padding to the section */
            color: white; /* Ensures text is visible against the background */
            text-align: center;
        }

        .hero-text h1 {
            font-size: 3em;
            margin-bottom: 0.5em;
        }

        .hero-text p {
            font-size: 1.5em;
        }
    </style>
</head>
<body>
<div class="navbar">
    <div class="logo">
        <!-- Logo can be added here -->
    </div>
    <ul class="nav-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="payment.php">Payment</a></li>
        <li><a href="aboutus.php">About Us</a></li>

        <!-- Menampilkan link Login jika pengguna belum login -->
        <li><a href="logout.php">LogOut</a></li>
    </ul>
</div>

<div class="hero-section">
    <div class="hero-text">
        <h1>Welcome to Chill & Cho</h1>
        <p>"More Chill, More Flavor, More Cho"</p>
    </div>
</div>

<div class="product-section">
    <h2>Our Best Selling Menu</h2>
    <div class="product-cards">
        <!-- Produk 1 -->
        <div class="product-card">
            <img src="https://i.pinimg.com/736x/ba/59/01/ba590142187dcaf2dd74f22f8c27c765.jpg">
            <h3>Affogatto</h3>
            <p>A rich and bold coffee for those who love a strong kick.</p>
            <a href="product.php" class="buy-btn">Detail Product</a>
        </div>
        <!-- Produk 2 -->
        <div class="product-card">
            <img src="https://i.pinimg.com/736x/a1/d8/8c/a1d88cadc7f1b9fd65238f39ae295d1b.jpg">
            <h3>C&C Ice Coffee</h3>
            <p>A smooth, frothy coffee perfect for any time of the day.</p>
            <a href="product.php" class="buy-btn">Detail Product</a>
        </div>
        <!-- Produk 3 -->
        <div class="product-card">
            <img src="https://i.pinimg.com/736x/4b/74/6a/4b746a96f05142ba6add60d1e43c6d85.jpg">
            <h3>Blue Lagoon</h3>
            <p>A creamy coffee with a perfect balance of espresso and milk.</p>
            <a href="product.php" class="buy-btn">Detail Product</a>
        </div>
    </div>
</div>

<!-- Footer Section -->
<footer>
    <div class="footer-content">
        <p>&copy; 2024 Chill & Cho. All Rights Reserved.</p>
    </div>
</footer>

</body>
</html>


