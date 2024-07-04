<?php
session_start();

$nav = false;
include '../includes/header.php';
include '../assets/config/userViews.php';

// go back if not logged in
$isLogin = true;
if (!($_SESSION['user_id'])) {
  $isLogin = false;
  echo '<script>history.back();</script>';
}
// render content if logged in
if ($isLogin == true) {
?>

<main>
  <?php
  if (isset($_GET['edit']) && $_GET['edit'] == 'success') {
  ?>
    <div class="success-bg w-full h-full absolute z-10 transition ease duration-100">
      <div class="success-popup bg-white w-1/3 mx-auto mt-4 py-2 px-3 rounded-lg drop-shadow-containerShadow translate-y-[-140%] transition-transform ease duration-200">
        <h2>Edit profile success!</h2>
      </div>
    </div>
    <script>
      setTimeout(() => {
        document.querySelector(".success-bg").classList.toggle("bg-black/20");
        document.querySelector(".success-popup").classList.toggle("translate-y-[-140%]");
      }, 100);
      setTimeout(() => {
        document.querySelector(".success-bg").classList.toggle("bg-black/20");
        document.querySelector(".success-popup").classList.toggle("translate-y-[-140%]");
      }, 1700);
      setTimeout(() => {
        location.href = "profile.php";
      }, 1900);
    </script>
  <?php } ?>
  <header class="bg-green-600 p-4 flex justify-between font-semibold text-white">
    <div class="flex items-center gap-4">
      <a href="../index.php" class="flex gap-2 justify-center w-24 px-3 py-2 bg-green-700 rounded-2xl">
        <svg class="w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
          <path fill="#ffffff"
            d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
        </svg>
        BACK
      </a>
      <h2 class="text-lg"><?= $_SESSION['name']; ?>'s Profile</h2>
    </div>
    <a href="../assets/config/logout.php"
      class="bg-green-700 rounded-2xl flex items-center px-4 hover:bg-green-500">LOGOUT</a>
  </header>
  <article class="bg-gray-100 my-16">
    <div class="flex gap-6 w-full px-24 justify-center">

      <!-- Profile -->
      <div class="bg-white drop-shadow-containerShadow w-3/12 rounded-2xl p-6">
        <h2 class="text-center text-lg text-mainText font-semibold pb-4">Profile</h2>

        <div class="flex flex-col gap-2 mb-5">
          <div>
            <h4 class="text-sm text-mainText">Username</h4>
            <p class="w-full text-mainText/80 bg-gray-100 py-1 px-2 rounded-md"><?= $_SESSION['username'] ?></p>
            </p>
          </div>
          <div>
            <h4 class="text-sm text-mainText">Nama</h4>
            <p class="w-full text-mainText/80 bg-gray-100 py-1 px-2 rounded-md"><?= $_SESSION['name'] ?></p>
          </div>
          <div>
            <h4 class="text-sm text-mainText">No. Telp</h4>
            <p class="w-full text-mainText/80 bg-gray-100 py-1 px-2 rounded-md"><?php echo $phone ?></p>
          </div>
          <div>
            <h4 class="text-sm text-mainText">Alamat</h4>
            <p class="w-full h-24 text-mainText/80 bg-gray-100 py-1 px-2 rounded-md"><?php echo $alamat ?></p>
          </div>
        </div>

        <div class="w-full flex justify-center">
          <a href="editProfile.php" class="inline-block bg-green-600 text-white rounded-md py-1 px-12">Edit Profile</a>
        </div>
      </div>

      <!-- Order -->
      <div class="bg-white drop-shadow-containerShadow w-9/12 rounded-2xl px-4 py-2">
        <h2 class="font-semibold text-mainText mb-1">Your Order</h2>
        <div class="bg-gray-100 p-4 rounded-lg h-96">
          <div class="flex-grow overflow-auto">
            <table class="min-w-full relative bg-white">
              <thead>
                <tr>
                  <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0 border-x border-gray-100">Order ID</th>
                  <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0 border-x border-gray-100">Product Name</th>
                  <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0 border-x border-gray-100">Quantity</th>
                  <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0 border-x border-gray-100">Item Price</th>
                  <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0 border-x border-gray-100">Total Price</th>
                  <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0 border-x border-gray-100">Order Date</th>
                  <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0 border-x border-gray-100">Status</th>
                  <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0 border-x border-gray-100">Date Completed</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td class="py-1 px-2 border-b border-x border-gray-200 bg-gray-100">' . $row['order_id'] . '</td>';
                    echo '<td class="py-1 px-2 border-b border-x border-gray-200 bg-gray-100">' . $row['product_name'] . '</td>';
                    echo '<td class="py-1 px-2 border-b border-x border-gray-200 bg-gray-100">' . $row['quantity'] . '</td>';
                    echo '<td class="py-1 px-2 border-b border-x border-gray-200 bg-gray-100">' . $row['item_price'] . '</td>';
                    echo '<td class="py-1 px-2 border-b border-x border-gray-200 bg-gray-100">' . $row['total_price'] . '</td>';
                    echo '<td class="py-1 px-2 border-b border-x border-gray-200 bg-gray-100">' . $row['order_date'] . '</td>';
                    if ($row['status'] == 'Pending') {
                      echo '<td class="text-red-600 py-1 px-2 border-b border-x border-gray-200 bg-gray-100">Pending</td>';
                    } else {
                      echo '<td class="text-green-600 py-1 px-2 border-b border-x border-gray-200 bg-gray-100">Completed</td>';
                    }
                    echo '<td class="py-1 px-2 border-b border-x border-gray-200 bg-gray-100">' . $row['date_completed'] . '</td>';
                    echo '</tr>';
                  }
                } else {
                  echo '<tr><td>No orders found</td></tr>';
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </article>
</main>

<?php
include '../includes/footer.php';
} // <- close bracket for rendering content
?>