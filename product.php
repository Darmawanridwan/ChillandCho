<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product - Chill & Cho</title>
    <link rel="stylesheet" href="product.css">
    <style>
         /* Background image for the entire page */
         body {
            background-image: url('https://i.pinimg.com/736x/64/1b/dd/641bdd769d71641649d7f9b289ea0843.jpg');
            background-size: 100%; /* Ensures the image covers the full page */
            background-position: center;
            background-attachment: relative; /* Keeps the background fixed when scrolling */
        }
    </style>
</head>
<body>
<div class="navbar">
    <div class="logo">
        <h1><p style="color: rgb(242, 180, 8);">Chill & Cho</p></h1>
    </div>
    <ul class="nav-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="payment.php">Payment</a></li>
        <li><a href="aboutus.php">About Us</a></li>

        <!-- Menghapus pengecekan session untuk login/logout -->
        <li><a href="logout.php">LogOut</a></li>
    </ul>
</div>

    <div class="product-section">
        <h2>Our Coffee Menu</h2>
        <div class="product-cards">
            <!-- Produk 1 -->
            <div class="product-card">
                <img src="https://i.pinimg.com/736x/7d/cd/91/7dcd91034529ddc099805e3aeffccd7b.jpg">
                <h3>C&C Ice Coffee</h3>
                <p>Es kopi susu dengan tambahan gula aren memiliki rasa yang creamy manis</p>
                <p class="price">Rp 24.00</p>
                <a href="payment.php" class="buy-btn">Beli Sekarang</a>
            </div>

            <!-- Produk 2 -->
            <div class="product-card">
                <img src="https://i.pinimg.com/736x/ba/59/01/ba590142187dcaf2dd74f22f8c27c765.jpg">
                <h3>Affogatto</h3>
                <p>Single shot espresso dengan ice cream vanilla</p>
                <p class="price">Rp 28.00</p>
                <a href="payment.php" class="buy-btn">Beli Sekarang</a>
            </div>

            <!-- Produk 3 -->
            <div class="product-card">
                <img src="https://i.pinimg.com/736x/52/a6/32/52a63237fa73beee733fbb33dc888f23.jpg">
                <h3> Caffe Latte</h3>
                <p>Single shot espresso dengan susu steam hangat dan micro foam</p>
                <p class="price">Rp 27.000</p>
                <a href="payment.php" class="buy-btn">Beli Sekarang</a>
            </div>

            <!-- Produk 4 -->
            <div class="product-card">
                <img src="https://i.pinimg.com/736x/15/73/f2/1573f22afad0b6eb64074ab9dc89683f.jpg">
                <h3>Ice Long Black</h3>
                <p>Espresso dengan tambahan mineral water dan ice cube</p>
                <p class="price">Rp 20.00</p>
                <a href="payment.php" class="buy-btn">Beli Sekarang</a>
            </div>

            <!-- Produk 5 -->
            <div class="product-card">
                <img src="https://i.pinimg.com/736x/89/0e/cf/890ecf140ec8ca327c5f8891cb6fe67e.jpg">
                <h3>Cappuccino</h3>
                <p>Double shot espresso dengan susu steam hangat dan foam tebal</p>
                <p class="price">Rp 27.00</p>
                <a href="payment.php" class="buy-btn">Beli Sekarang</a>
            </div>

            <!-- Produk 6 -->
            <div class="product-card">
                <img src="https://i.pinimg.com/736x/c8/fc/61/c8fc616cf76a13234f4eba68658fe0d2.jpg">
                <h3>Butterscotch</h3>
                <p>Es kopi susu dengan tambahan sirup buutterscotch memiliki rasa gurih creamy manis</p>
                <p class="price">Rp 29.00</p>
                <a href="payment.php" class="buy-btn">Beli Sekarang</a>
            </div>

            <!-- Produk 7 -->
            <div class="product-card">
                <img src="https://i.pinimg.com/736x/de/d8/5d/ded85de22eaedcf4416926633ae13eb9.jpg">
                <h3>Moccachino</h3>
                <p>Cappucino hangat dengan tambahan cokelat</p>
                <p class="price">Rp 25.000</p>
                <a href="payment.php" class="buy-btn">Beli Sekarang</a>
            </div>

            <!-- Produk 8 -->
            <div class="product-card">
                <img src="https://i.pinimg.com/736x/0d/ba/89/0dba89e37f143cbb2b7bf1ed1153c650.jpg">
                <h3>Filter Coffee</h3>
                <p>Kopi full arabica yang diseduh manual menggunakan dripper v60</p>
                <p class="price">Rp 27.000</p>
                <a href="payment.php" class="buy-btn">Beli Sekarang</a>
            </div>

    </div>

    <div class="product-section">
       <h2>Our Mocktail Menu</h2>
       <div class="product-cards">
           <!-- Produk Mocktail 1 -->
           <div class="product-card">
               <img src="https://i.pinimg.com/736x/fe/f0/bd/fef0bd7cb17eb27b88d5b19ef15e5d94.jpg" alt="Virgin Mojito">
               <h3>Virgin Mojito</h3>
               <p>Mocktail yang menyegarkan dengan rasa mint dan lime yang tajam</p>
               <p class="price">Rp 29.000</p>
               <a href="payment.php" class="buy-btn">Beli Sekarang</a>
           </div>
           <!-- Produk Mocktail 2 -->
           <div class="product-card">
               <img src="https://i.pinimg.com/736x/4b/74/6a/4b746a96f05142ba6add60d1e43c6d85.jpg" alt="Blue Lagoon">
               <h3>Blue Lagoon</h3>
               <p>Minuman dari sirup blue citrus dan rasa asam-manis dari campuran jeruk dan soda, memberikan sensasi yang menyegarkan</p>
               <p class="price">Rp 30.000</p>
               <a href="payment.php" class="buy-btn">Beli Sekarang</a>
           </div> 
           <!-- Produk Mocktail 3 -->
           <div class="product-card">
               <img src="https://i.pinimg.com/736x/4b/aa/05/4baa0564168c15278574acd40e378f90.jpg" alt="Blue Lagoon">
               <h3>Tropical Mango</h3>
               <p> Mocktail terbuat dari mangga tropis yang dipadukan dengan lime memberikan sensasi tropis, menyegarkan di setiap tegukan</p>
               <p class="price">Rp 32.000</p>
               <a href="payment.php" class="buy-btn">Beli Sekarang</a>
           </div> 
           <!-- Produk Mocktail 4 -->
           <div class="product-card">
               <img src="https://i.pinimg.com/736x/fa/d8/f9/fad8f97836080e4c91c238cabc78a734.jpg" alt=" Lemonade Coffee">
               <h3>Lemonade Coffee</h3>
               <p>Mocktail coffee dengan campuran syrup lime yang menyegarkan</p>
               <p class="price">Rp 30.000</p>
               <a href="payment.php" class="buy-btn">Beli Sekarang</a>
           </div> 
       </div>
    </div>

    <div class="product-section">
        <h2>Our Non-Coffee Menu</h2>
        <div class="product-cards">
            <!-- Produk Non-Coffee 1 -->
            <div class="product-card">
                <img src="https://i.pinimg.com/736x/fc/4f/12/fc4f12edc7d569b815417e613d4f8ac3.jpg">
                <h3>Matcha Latte</h3>
                <p>Teh hijau matcha yang lembut dipadukan dengan susu krimi, menciptakan rasa yang menenangkan</p>
                <p class="price">Rp 26.000</p>
                <a href="payment.php" class="buy-btn">Beli Sekarang</a>
            </div>

            <!-- Produk Non-Coffee 2 -->
            <div class="product-card">
                <img src="https://i.pinimg.com/736x/74/59/96/745996f032e0b4a332e7afe035c88c7b.jpg">
                <h3>Choco Milkshake</h3>
                <p>Milkshake cokelat manis dan creamy dengan es krim vanila, disajikan dengan topping whipped cream</p>
                <p class="price">Rp 23.000</p>
                <a href="payment.php" class="buy-btn">Beli Sekarang</a>
            </div>

            <!-- Produk Non-Coffee 3 -->
            <div class="product-card">
                <img src="https://i.pinimg.com/736x/bd/de/69/bdde6982203758aa0f92621e5d9c3986.jpg">
                <h3>Strawberry Smoothie</h3>
                <p>Smoothie segar dari stroberi dan yogurt, memberikan rasa buah alami yang lembut</p>
                <p class="price">Rp 20.000</p>
                <a href="payment.php" class="buy-btn">Beli Sekarang</a>
            </div>
            <!-- Produk Non-Coffee 4 -->
            <div class="product-card">
                <img src="https://i.pinimg.com/736x/6b/93/41/6b9341a895ed7c0ce36fdb5c64c46514.jpg">
                <h3>Taro Milk Tea</h3>
                <p>Minuman manis berbasis taro dan susu, memberikan rasa creamy dengan sentuhan lembut</p>
                <p class="price">Rp 23.000</p>
                <a href="payment.php" class="buy-btn">Beli Sekarang</a>
            </div>
            <!-- Produk Non-Coffee 5-->
            <div class="product-card">
                <img src="https://i.pinimg.com/736x/8d/fe/9c/8dfe9cdff0379e43726b4878f176ca3b.jpg">
                <h3>Ice Lychee</h3>
                <p>Minuman dingin segar dan manis dari sirup lychee dan yakult ditambah toping buah lychee</p>
                <p class="price">Rp 20.000</p>
                <a href="payment.php" class="buy-btn">Beli Sekarang</a>
            </div>
            <!-- Produk Non-Coffee 6-->
            <div class="product-card">
                <img src="https://i.pinimg.com/736x/34/14/fa/3414fae109d041c5f5f153ee9eba54bb.jpg">
                <h3>Apple Cinnamon</h3>
                <p>Sari apel hangat dengan kayu manis, memberikan sensasi manis dan pedas yang menyegarkan</p>
                <p class="price">Rp 29.000</p>
                <a href="payment.php" class="buy-btn">Beli Sekarang</a>
        </div>
    </div>

    <div class="footer">
    <p style="color: white;">2024 Chill & Cho. All Rights Reserved</p>
    </div>
</body>
</html>
