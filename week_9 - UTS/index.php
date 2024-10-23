<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function() {
            // saat tombol order diklik, tampilkan modal
            $('.button1').click(function() {
                $('#modalOverlay').fadeIn(); // tampilkan overlay
                $('#orderForm').fadeIn(); // tampilkan form
            });

            // Ketika tombol close modal diklik
            $('#closeModal, #cancel-btn').click(function() {
                $('#modalOverlay').fadeOut(); // sembunyikan overlay
                $('#orderForm').fadeOut(); // sembunyikan form
            });

            // Mencegah form untuk menutup saat diklik
            $('#orderForm').click(function(event) {
                event.stopPropagation(); // mencegah event bubbling
            });

            $('.order-link').click(function(e) {
                e.preventDefault(); // Mencegah aksi default link
                $('#modalOverlay').fadeIn(); // Tampilkan overlay
                $('#orderForm').fadeIn(); // Tampilkan form
            });

        });
    </script>

    <title>Florist</title>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <a href="#">Florist</a>
        </div>
        <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#product">Product</a></li>
        <li><a href="#" class="order-link">Order</a></li>
        </ul>

    </div>

    <div class="home">
        <h1 class="ads">Order Flowers, <br>Share Happiness!</h1>
        <p class="desc">Our flowers are hand-picked and arranged with love, <br> ensuring freshness and beauty in every delivery</p>
        <button class="button1"  id="orderButton">Order Now</button>
    </div>

    <h1 class="product" id="product">OUR PRODUCT</h1>
    <div class="product-container">
        <div class="product-card">
            <img src="img/mawar.jpg" alt="Mawar">
            <h3>Rose</h3>
            <p>Collection of pink rose</p>
            <p>Price: $20</p>
            <button class="button1">Order</button>
        </div>
        <div class="product-card">
            <img src="img/tulip.jpg" alt="Tulip">
            <h3>Tulips</h3>
            <p>Rainbow Fun Tulips</p>
            <p>Price: $15</p>
            <button class="button1">Order</button>
        </div>
        <div class="product-card">
            <img src="img/daisy.jpg" alt="Aster">
            <h3>Daisy</h3>
            <p>Collections of white daisy</p>
            <p>Price: $20</p>
            <button class="button1">Order</button>
        </div>
        <div class="product-card">
            <img src="img/lily.jpg" alt="">
            <h3>Lily</h3>
            <p>Beautiful Lily</p>
            <p>Price:$20</p>
            <button class="button1">Order</button>
        </div>
        <div class="product-card">
            <img src="img/lavender.png" alt="lavender">
            <h3>Lavender</h3>
            <p>Purple Lavender</p>
            <p>Harga: $15</p>
            <button class="button1">Order</button>
        </div>
        <div class="product-card">
            <img src="img/sunflower.jpg" alt="sunflower">
            <h3>Sunflower</h3>
            <p>Sunny Sunflower</p>
            <p>Harga: $10</p>
            <button class="button1">Order</button>
        </div>
        
    </div>

    <!--Form Pembelian-->
    <div id="modalOverlay" class="modal"></div>
    <div id="orderForm" class="modal">
    <h2 class="form-title">Order Form</h2>
    <form id="formOrder" action="berhasil.php" method="post">
        <div class="form-row">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-row">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-row">
            <label for="phone">Number:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>

        <div class="form-row">
            <label for="flower-type">Tipe of Flowers:</label>
            <select id="flower-type" name="flower-type" required>
                <option value="Rose">Rose</option>
                <option value="Tulips">Tulips</option>
                <option value="Daisy">Daisy</option>
                <option value="Lily">Lily</option>
                <option value="Lavender">Lavender</option>
                <option value="Sunflower">Sunflower</option>
            </select>
        </div>

        <div class="form-row">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" required>
        </div>

        <div class="form-row">
            <label>Payment Method:</label>
            <div>
                <input type="radio" id="transfer" name="payment" value="transfer" required>
                <label for="transfer">Transfer Bank</label>
            </div>
            <div>
                <input type="radio" id="e-wallet" name="payment" value="e-wallet" required>
                <label for="e-wallet">E-Wallet</label>
            </div>
        </div>

        <div class="form-row">
            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea>
        </div>

        <div class="form-row">
            <label for="delivery-date">Delivery Date:</label>
            <input type="date" id="delivery-date" name="delivery-date" required>
        </div>

        <div class="button-container">
            <button type="submit">Submit</button>
            <button type="button" id="cancel-btn">Cancel</button>
        </div>
    </form>

</div>

<footer style="text-align: center;">
    <p>&copy; 2024 Florist. All Rights Reserved.</p>
</footer>
</body>
</html>



