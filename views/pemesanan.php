<?php
session_start();
$title = "Genta Store - Cart";

include '../includes/header.php';
include '../assets/config/Config.php';
include '../assets/config/cart.php';

if (!$_SESSION['user_id']) {
  $_SESSION['isShopping'] = true;
  header('Location: login.php');
}
?>

<section class="py-16 mt-16 h-screen">
  <div class="bg-white w-4/5 mx-auto rounded-xl flex drop-shadow-containerShadow">

    <!--| Bagian items |-->
    <div class="border-r-2 w-4/6 h-4/6">
      <?php
        $query = 'SELECT product_id, product_name, price, stock, image FROM products';
        $product_stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_execute($product_stmt);
        $result = mysqli_stmt_get_result($product_stmt);

              <?php
              $query = 'SELECT product_id, product_name, price, stock, image FROM products';
              $product_stmt = mysqli_prepare($conn, $query);
              mysqli_stmt_execute($product_stmt);
              $result = mysqli_stmt_get_result($product_stmt);

      <div class="flex items-center gap-2 mb-1 mt-2">
        <p class="ml-3 font-semibold flex">Plants</p>
        <div class="h-4 border border-gray-700 rounded-lg"></div>
        <p class="font-semibold flex">Total products: <?=  $totalProduct ?></p>
      </div>

                <div class="p-2 bg-white w-44 rounded-lg flex flex-col justify-center flex-shrink-0">
                  <img src="../assets/uploads/<?= $products['image']; ?>" alt="<?= $products['product_name'] ?>" class="rounded-md w-full h-28 object-cover">
                  <div class="mt-1 mb-1">
                    <h2 class="font-bold"><?= $products['product_name']; ?></h2>
                    <h3 class="text-sm">Stock: <?= $products['stock']; ?></h3>
                    <h3 class="text-sm">Rp. <?= number_format($products['price'], 0); ?></h3>
                  </div>

              <div class="p-2 bg-white w-44 rounded-lg flex flex-col justify-center flex-shrink-0">
                <img src="../assets/<?= $products['image']; ?>" alt="<?= $products['product_name'] ?>" class="rounded-md w-full h-28 object-cover">
                <div class="mt-1 mb-1">
                  <h2 class="font-bold"><?= $products['product_name']; ?></h2>
                  <h3 class="text-sm">Stock: <?= $products['stock']; ?></h3>
                  <h3 class="text-sm">Rp. <?= number_format($products['price'], 0); ?></h3>
                </div>
                <form method="POST" action="pemesanan.php?product_id=<?= $products['product_id']; ?>">
                  <input type="hidden" name="product_name" value="<?= $products['product_name']; ?>">
                  <input type="hidden" name="price" value="<?= $products['price']; ?>">
                  <div class="flex gap-2">
                    <input type="submit" name="add_to_cart" value="Add to Cart" class="bg-green-600 text-white px-6 py-1 rounded-md text-sm w-full cursor-pointer">
                    <input type="number" name="quantity" value="1" min="1" max="<?= $products['stock']; ?>" class="border border-green-600 focus:outline-none rounded-md w-full">
                  </div>
                </form>
                
              </div>
            <?php } mysqli_stmt_close($product_stmt); ?>

              <?php } mysqli_stmt_close($product_stmt); ?>

            </div>
          </div>
          
        </div>
      </div>
    </div>

    <!--| Bagian cart |-->
    <div class="w-2/6">
      <div class="w-full py-4 border-b-2 flex justify-center">
        <h2 class="text-2xl font-semibold">Your Cart</h2>
      </div>
      <!-- scrollable cart list -->
      <div class="flex flex-col border-b-2">
        <div class="flex font-bold px-2 pt-1 text-mainText">
          <p class="w-5/12">NAME</p>
          <p class="w-4/12">PRICE</p>
          <p class="w-2/12">QTY</p>
          <p class="w-1/12"></p>
        </div>
        <div class="flex flex-col overflow-y-auto no-scrollbar h-56 border-b-2 px-2">
          <?php
          $totalPrice = 0;
          $totalQty = 0;
          if (!empty($_SESSION['cart'])) {

            foreach ($_SESSION['cart'] as $key => $value) { ?>
              <div class='flex'>
                <p class='w-5/12'><?= $value['product_name']; ?></p>
                <p class='w-4/12 text-mainText'>Rp. <?= number_format(($value['price'] * $value['quantity']), 0) ; ?></p>
                <p class='w-2/12'><?= $value['quantity']; ?>
                </p>
                <a class='w-1/12' href="pemesanan.php?action=remove&product_id=<?= $value['product_id']; ?>" ]>
                  <p class="text-center font-bold" style="color: red;">X</p>
                </a>
              </div>

              <?php
              $totalPrice = $totalPrice + $value['quantity'] * $value['price'];
            }
          }
          ?>

        </div>
        <div class="flex font-bold p-2 text-mainText">
          <p class="w-5/12">TOTAL</p>
          <p class="w-4/12">Rp. <?= number_format($totalPrice, 0); ?></p>
          <p class="w-2/12">
            <?php
            if (isset($_SESSION['cart'])) {
              foreach ($_SESSION['cart'] as $item) {
                $totalQty = $totalQty + $item['quantity'];

              }
            }
            echo $totalQty; ?>
          </p>
          <?php
          if (!empty($_SESSION['cart'])) { ?>
            <a class="w-1/12 flex justify-center" href="pemesanan.php?action=clear">
              <svg style="width: 16px; height: 20px; margin-top: 2px;" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512">
                <path fill="#ff1f1f"
                  d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z" />
              </svg>
            </a>
          <?php } ?>
        </div>
      </div>

      <p class="p-2 border-b-2 w-full h-24">
        <strong class="text-mainText">Alamat pemesan:</strong>
        <span>
          <?php
            echo $alamat;
            $conn->close();
          ?>
        </span>
      </p>
      <div class="p-6 w-full flex justify-center">
        <form method="post" action="../assets/config/order.php" class="w-full">
          <input type="hidden" name="totalQty" value="<?= $totalQty ?>">
          <input type="hidden" name="totalPrice" value="<?= $totalPrice ?>">
          <button
            class="cursor-pointer rounded-md border-2 border-green-600 mt-1 py-2 w-full text-green-600 hover:bg-green-600 hover:text-white transition duration-200 ease-in-out font-bold"
            type="submit" <?php if (!isset($_SESSION['cart']) && empty($_SESSION['cart'])) { echo 'disabled'; } ?>>ORDER
            NOW
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php
include '../includes/footer.php';
?>