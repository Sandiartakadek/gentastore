<?php
session_start();
if (!isset($_SESSION['order_success']) || $_SESSION['order_success'] !== true) {
  echo '<script>history.back()</script>';
} else {
  unset($_SESSION['order_success']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order success!</title>
  <link rel="stylesheet" href="../assets/css/output.css">
</head>

<body class="bg-gray-100">
  <main class="h-screen">

    <div class="order-popup transition-transform duration-500 mx-auto w-2/6 translate-y-[-95%] rounded-lg bg-white drop-shadow-containerShadow">
      <h2 class="unna-style text-2xl font-bold text-mainText pt-2 border-b-2 border-gray-500 p-2 text-center">
        Continue shopping?
      </h2>

      <div class="py-2 px-3">
        <h3>Your order have been confirmed!</h3>
        <p>We'll send the items to your location ASAP.</p>
        <div class="mt-3 flex justify-end w-full">
          <div class="flex gap-2">
            <button
              class="border-2 border-gray-200 rounded-lg px-3 hover:bg-gray-200 transition ease-in duration-150"
              onclick="handleContinue('no')">
              Cancel
            </button>
            <button
              class="rounded-lg px-3 bg-green-500 text-slate-50 hover:bg-green-600 transition ease-in duration-150"
              onclick="handleContinue('yes');">
              Yes
            </button>
          </div>
        </div>
      </div>

    </div>

  </main>
  <script>
    window.addEventListener("load", () => {
      document.querySelector(".order-popup").classList.remove("translate-y-[-95%]");
      document.querySelector(".order-popup").classList.add("translate-y-8");
    });
    
    function handleContinue(choice) {
      if (choice == 'yes') {
        window.location.href = 'pemesanan.php';
      } else {
        window.location.href = 'profile.php';
      }
    }
  </script>
</body>

</html>