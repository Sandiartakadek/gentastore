<?php
include 'Config.php';

$product_id = $_GET['id'];

$sql = "SELECT * FROM products WHERE product_id='$product_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
} else {
    echo json_encode([]);
}

$conn->close();
?>
