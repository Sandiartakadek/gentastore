<?php
include 'Config.php';

$product_id = $_POST['editProductId'];
$product_name = $_POST['editProductName'];
$description = $_POST['editProductDesc'];
$price = $_POST['editProductPrice'];
$stock = $_POST['editProductStock'];

if ($_FILES["editProductImage"]["name"]) {
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["editProductImage"]["name"]);
    move_uploaded_file($_FILES["editProductImage"]["tmp_name"], $target_file);
    $image_sql = ", image='$target_file'";
} else {
    $image_sql = "";
}

$sql = "UPDATE products SET product_name='$product_name', description='$description', price='$price', stock='$stock' $image_sql WHERE product_id='$product_id'";

session_start(); // Start the session to use session variables

if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = "Produk berhasil diupdate";
} else {
    $_SESSION['message'] = "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: ../../views/kelolaProduct.php");
exit();
?>
