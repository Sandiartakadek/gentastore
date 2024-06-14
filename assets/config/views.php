<!-- kode dashboard admin untuk memanggil views pada tabel -->
<?php
include 'Config.php';

// Query untuk mengambil 10 data terbaru dari view admin_orders_view
$sql = "SELECT * FROM admin_orders_view ORDER BY order_date DESC LIMIT 10";

// Eksekusi query
$result = $conn->query($sql);

?>