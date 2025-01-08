<?php
session_start();

// Cek apakah pembayaran sudah disimpan di sesi
if (!isset($_SESSION['payment_details'])) {
    header('Location: payment.php');
    exit();
}

$payment_details = $_SESSION['payment_details'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation - Chill & Cho</title>
    <link rel="stylesheet" href="confirmation.css">
    <style>
        /* Ensure the confirmation section uses transparent background and is centered */
        .payment-confirmation {
            background: rgba(255, 255, 255, 0.3);
            position: center;
            max-width: 500px;
            margin: 2 auto;
            padding: 15px;
            border-radius: 5px;
        }

        .confirmation-item {
            margin-bottom: 9px;
        }

        .confirmation-item label {
            font-weight: bold;
        }

        .confirmation-item p {
            margin: 0px 0;
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
            <li><a href="logout.php">LogOut</a></li>
        </ul>
    </div>

    <!-- Payment Confirmation Section -->
    <div class="payment-confirmation">
        <h2>Payment Confirmation</h2>
        <div class="confirmation-details">
            <div class="confirmation-item">
                <label>Name</label>
                <p><?php echo htmlspecialchars($payment_details['name']); ?></p>
            </div>
            <div class="confirmation-item">
                <label>Phone Number</label>
                <p><?php echo htmlspecialchars($payment_details['phone']); ?></p>
            </div>
            <div class="confirmation-item">
                <label>Shipping Address</label>
                <p><?php echo htmlspecialchars($payment_details['address']); ?></p>
            </div>
            <div class="confirmation-item">
                <label>Payment Method</label>
                <p><?php echo htmlspecialchars($payment_details['payment_method']); ?></p>
            </div>
            </div>
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


