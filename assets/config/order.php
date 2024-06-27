<?php
session_start();
include 'Config.php';

$conn->begin_transaction();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['cart']) && !empty($_SESSION['cart']))  {
  $userId = $_SESSION['user_id'];
  $totalPrice = $_POST['totalPrice'];
  $totalQty = $_POST['totalQty'];

  $orderSQL = "INSERT INTO orders (user_id, total_price, order_date) VALUES (?, ?, NULL)";
  $stmt = mysqli_prepare($conn, $orderSQL);
  mysqli_stmt_bind_param($stmt, 'ii', $userId, $totalPrice);

  if (!mysqli_stmt_execute($stmt)) {
    echo "Error inserting order: " . mysqli_stmt_error($stmt);
    $conn->rollback();
    exit();
  }

  $orderId = mysqli_stmt_insert_id($stmt);

  foreach ($_SESSION['cart'] as $item) {
    $productId = $item['product_id'];
    $productPrice = $item['price'];
    $quantity = $item['quantity'];

    $orderItemSQL = "INSERT INTO order_items (order_item_id, order_id, product_id, quantity, price) VALUES (NULL, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $orderItemSQL);
    mysqli_stmt_bind_param($stmt, 'iiii', $orderId, $productId, $quantity, $productPrice);

    if (!mysqli_stmt_execute($stmt)) {
      echo "Error inserting order: " . mysqli_stmt_error($stmt);
      $conn->rollback();
      exit();
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_commit($conn);

  if (mysqli_commit($conn)) {
    $_SESSION['order_success'] = true;
    echo "Order created successfully";
    header('Location: ../../views/order_confirmed.php');
    unset($_SESSION['cart']);
    exit();
  }
  mysqli_close($conn);
}

?>