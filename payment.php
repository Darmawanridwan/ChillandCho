<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Chill & Cho</title>
    <link rel="stylesheet" href="payment.css">
    <style>
         /* Background image for the entire page */
         body {
            background-image: url('https://i.pinimg.com/736x/7f/ac/f4/7facf431f9b903450cdea6982202f351.jpg');
            background-size: 100%; /* Ensures the image covers the full page */
            background-position: center;
            background-attachment: relative; /* Keeps the background fixed when scrolling */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <h2>Chill & Cho</h2>
        </div>
        <ul class="nav-links">
            <li><a href="home.php">Home</a></li>
            <li><a href="product.php">Products</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="aboutus.php">About Us</a></li>

            <?php if (isset($_SESSION['email'])): ?>
                <li><a href="logout.php" class="logout-btn">Logout</a></li>
            <?php else: ?>
                <!-- Jika pengguna belum login -->
                <li><a href="logout.php">LogOut</a></li>
            <?php endif; ?>
        </ul>
    </div>

    <div class="payment-container">
    <h2><p style="color: white;">Detail Payment</p></h2>
        <div class="payment-form">
            <form action="process_payment.php" method="POST">
                <!-- Name input -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                </div>

                <!-- Phone number input -->
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" placeholder="Your Phone Number" required>
                </div>

                <!-- Address input -->
                <div class="form-group">
                    <label for="address">Shipping Address</label>
                    <input type="text" id="address" name="address" placeholder="Your Shipping Address" required>
                </div>

                <!-- Payment method selection -->
                <div class="form-group">
                    <label for="payment-method">Payment Method</label>
                    <select id="payment-method" name="payment_method" required>
                        <option value="credit_card">Credit Card</option>
                        <option value="paypal">PayPal</option>
                        <option value="bank_transfer">Bank Transfer</option>
                    </select>
                </div>
                <!-- Submit button -->
                <button type="submit" class="pay-btn">Proceed to Payment</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Chill & Cho. All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>

