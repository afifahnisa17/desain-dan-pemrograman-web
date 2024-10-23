<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari formulir
    $name = isset($_POST['name']) ? $_POST['name'] : 'There is no name';
    $email = isset($_POST['email']) ? $_POST['email'] : 'There is no email';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : 'There is no telephone';
    $flowerType = isset($_POST['flower-type']) ? $_POST['flower-type'] : 'There is no flower type';
    $paymentMethod = isset($_POST['payment']) ? $_POST['payment'] : 'There is no payment method';
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;
    $deliveryDate = isset($_POST['delivery-date']) ? $_POST['delivery-date'] : 'There is no delivery date';
    $price = 0; 

    // Menentukan harga berdasarkan jenis bunga
    switch ($flowerType) {
        case 'Rose':
            $price = 20; //Harga untuk Rose
            break;
        case 'Tulips':
            $price = 15; // Harga untuk Tulips
            break;
        case 'Daisy':
            $price = 20; // Harga untuk Daisy
            break;
        case 'Lily':
            $price = 20; // Harga untuk Lily
            break;
        case 'Lavender':
            $price = 15; // Harga untuk Lavender
            break;
        case 'Sunflower':
            $price = 10; // Harga untuk Sunflower
            break;
        default:
            $price = 0; // Harga default jika jenis bunga tidak dikenali
            break;
    }

    // Menghitung total harga
    $totalPrice = $quantity * $price;

    // Mengambil alamat dari formulir
    $address = isset($_POST['address']) ? $_POST['address'] : 'There is no address';

    // Menampilkan hasil pemesanan dengan tabel
    echo "Order Successfull!";
    echo "<table style='width: 100%; border-collapse: collapse;'>";
    echo "<tr><td style='padding: 8px; border: 1px solid #ddd;'>Name:</td><td style='padding: 8px; border: 1px solid #ddd;'>$name</td></tr>";
    echo "<tr><td style='padding: 8px; border: 1px solid #ddd;'>Email:</td><td style='padding: 8px; border: 1px solid #ddd;'>$email</td></tr>";
    echo "<tr><td style='padding: 8px; border: 1px solid #ddd;'>Telephone:</td><td style='padding: 8px; border: 1px solid #ddd;'>$phone</td></tr>";
    echo "<tr><td style='padding: 8px; border: 1px solid #ddd;'>Flower Type:</td><td style='padding: 8px; border: 1px solid #ddd;'>$flowerType</td></tr>";
    echo "<tr><td style='padding: 8px; border: 1px solid #ddd;'>Payment Method:</td><td style='padding: 8px; border: 1px solid #ddd;'>$paymentMethod</td></tr>";
    echo "<tr><td style='padding: 8px; border: 1px solid #ddd;'>Quantity:</td><td style='padding: 8px; border: 1px solid #ddd;'>$quantity</td></tr>";
    echo "<tr><td style='padding: 8px; border: 1px solid #ddd;'>Price per Flower:</td><td style='padding: 8px; border: 1px solid #ddd;'>$$price</td></tr>";
    echo "<tr><td style='padding: 8px; border: 1px solid #ddd;'>Total Price:</td><td style='padding: 8px; border: 1px solid #ddd;'>$$totalPrice</td></tr>";
    echo "<tr><td style='padding: 8px; border: 1px solid #ddd;'>Address:</td><td style='padding: 8px; border: 1px solid #ddd;'>$address</td></tr>";
    echo "<tr><td style='padding: 8px; border: 1px solid #ddd;'>Delivery Date:</td><td style='padding: 8px; border: 1px solid #ddd;'>$deliveryDate</td></tr>";
    echo "</table>";
}
?>
