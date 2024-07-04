<!-- kode dashboard admin untuk memanggil views pada tabel -->
<?php
include 'Config.php';

// Query untuk mengambil 10 data terbaru dari view admin_orders_view
$sql = "SELECT * FROM admin_orders_view ORDER BY order_date DESC LIMIT 10";
// Query untuk mengambil data user
$get_user_data = "SELECT name, phone, alamat, username, created_at FROM users WHERE role = 'customer' ORDER BY created_at DESC";

// Eksekusi query
$order_result = $conn->query($sql);
$user_result = $conn->query($get_user_data);

?>