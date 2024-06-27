<?php
include 'Config.php';

$product_name = $_POST['productName'];
$description = $_POST['productDesc'];
$price = $_POST['productPrice'];
$stock = $_POST['productStock'];

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["productImage"]["name"]);
move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file);

$sql = "INSERT INTO products (product_name, description, price, stock, image) VALUES ('$product_name', '$description', '$price', '$stock', '$target_file')";

session_start(); // Start the session to use session variables

if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = "Produk berhasil ditambahkan";
} else {
    $_SESSION['message'] = "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: ../../views/kelolaProduct.php");
exit();
?>
