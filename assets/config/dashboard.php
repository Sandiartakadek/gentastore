<?php
include 'Config.php';
// Total products sold
$get_total_products = $conn->prepare("SELECT COUNT(order_item_id) FROM order_items");
$get_total_products->execute();
$get_total_products->store_result();
$get_total_products->bind_result($total_product);
$get_total_products->fetch();
$get_total_products->close();

// Total orders
$get_total_products = $conn->prepare("SELECT COUNT(order_id) FROM orders");
$get_total_products->execute();
$get_total_products->store_result();
$get_total_products->bind_result($total_order);
$get_total_products->fetch();
$get_total_products->close();

// Total customer
$get_total_products = $conn->prepare("SELECT COUNT(user_id) FROM users WHERE role = 'customer'");
$get_total_products->execute();
$get_total_products->store_result();
$get_total_products->bind_result($total_customer);
$get_total_products->fetch();
$get_total_products->close();
?>