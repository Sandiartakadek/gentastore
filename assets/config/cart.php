<?php
include 'Config.php';

// Add To Cart function //
if (isset($_POST['add_to_cart'])) {
  $product_id = $_GET['product_id'];
  $product_name = $_POST['product_name'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];

  if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    $item_exists = false;

    // Check if the item is already in the cart
    foreach ($cart as $key => $item) {
      if ($item['product_id'] == $product_id) {
        $item_exists = true;

        $sql = "SELECT stock FROM products WHERE product_id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $product_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $productStock = (int) mysqli_fetch_assoc($result)['stock'];
        mysqli_stmt_close($stmt);

        $totalItemQty = ($cart[$key]['quantity'] + $quantity);
        if ($totalItemQty > $productStock) {
          echo "<script>alert('Adding failed, quantity exceeds available stock.'); window.location='pemesanan.php';</script>";
        } else {
          $cart[$key]['quantity'] = $totalItemQty;
        };
        break;
      }
    }

    // If the item is not in the cart, add it
    if (!$item_exists) {
      $cart[] = array(
        'product_id' => $product_id,
        'product_name' => $product_name,
        'price' => $price,
        'quantity' => $quantity
      );
    }

    $_SESSION['cart'] = $cart;
  } else {
    // if the cart isn't set, create a new one
    $_SESSION['cart'] = array(
      array(
        'product_id' => $product_id,
        'product_name' => $product_name,
        'price' => $price,
        'quantity' => $quantity
      )
    );
  }
}

// Remove cart item or clear cart //
if (isset($_GET['action'])) {

  if ($_GET['action'] == 'clear') {
    unset($_SESSION['cart']);
  }

  if ($_GET['action'] == "remove") {
    foreach ($_SESSION['cart'] as $key => $value) {
      if ($value['product_id'] == $_GET['product_id']) {
        unset($_SESSION['cart'][$key]);
      }
    }
  }
}

// Fetch alamat //
$alamat_stmt = $conn->prepare("SELECT alamat FROM users WHERE user_id = ?");
$alamat_stmt->bind_param("i", $_SESSION['user_id']);
$alamat_stmt->execute();
$alamat_stmt->bind_result($alamat);
$alamat_stmt->fetch();
$alamat_stmt->close();
?>