<?php
include 'Config.php';

$product_id = $_POST['product_id'];

$sql = "DELETE FROM products WHERE product_id='$product_id'";

if ($conn->query($sql) === TRUE) {
    echo "Produk berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: ../../views/kelolaProduct.php");
?>
