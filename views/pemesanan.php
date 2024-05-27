<?php
$title = "Genta Store - Cart";
include '../includes/header.php';
?>

<div class="container mx-auto py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Bagian Kiri -->
      <div class="bg-white p-4 rounded-md shadow-md">
        <h2 class="text-lg font-semibold mb-4">Featured Products</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <!-- Card 1 -->
          <div class="bg-gray-200 rounded-md p-4 flex items-center">
            <img src="gambar_produk1.jpg" alt="Product 1" class="w-12 h-12 rounded-full mr-4">
            <div>
              <h3 class="text-sm font-semibold">Product 1</h3>
              <p class="text-xs text-gray-500">Rp 100.000</p>
            </div>
            <a href="#" class="ml-auto bg-blue-500 text-white px-2 py-1 rounded">Add to Cart</a>
          </div>
          <!-- Card 2 -->
          <div class="bg-gray-200 rounded-md p-4 flex items-center">
            <img src="gambar_produk2.jpg" alt="Product 2" class="w-12 h-12 rounded-full mr-4">
            <div>
              <h3 class="text-sm font-semibold">Product 2</h3>
              <p class="text-xs text-gray-500">Rp 150.000</p>
            </div>
            <a href="#" class="ml-auto bg-blue-500 text-white px-2 py-1 rounded">Add to Cart</a>
          </div>
          <!-- Card 3 -->
          <div class="bg-gray-200 rounded-md p-4 flex items-center">
            <img src="gambar_produk3.jpg" alt="Product 3" class="w-12 h-12 rounded-full mr-4">
            <div>
              <h3 class="text-sm font-semibold">Product 3</h3>
              <p class="text-xs text-gray-500">Rp 120.000</p>
            </div>
            <a href="#" class="ml-auto bg-blue-500 text-white px-2 py-1 rounded">Add to Cart</a>
          </div>
          <!-- Card 4 -->
          <div class="bg-gray-200 rounded-md p-4 flex items-center">
            <img src="gambar_produk4.jpg" alt="Product 4" class="w-12 h-12 rounded-full mr-4">
            <div>
              <h3 class="text-sm font-semibold">Product 4</h3>
              <p class="text-xs text-gray-500">Rp 80.000</p>
            </div>
            <a href="#" class="ml-auto bg-blue-500 text-white px-2 py-1 rounded">Add to Cart</a>
          </div>
        </div>
      </div>
      <!-- Bagian Kanan -->
      <div class="bg-white p-4 rounded-md shadow-md">
        <h2 class="text-lg font-semibold mb-4">Your Chart</h2>
        <div class="mb-4">
          <p class="font-semibold">Product Name</p>
          <p>Product 1</p>
        </div>
        <div class="mb-4">
          <p class="font-semibold">Quantity</p>
          <p>3</p>
        </div>
        <div class="mb-4">
          <p class="font-semibold">Price</p>
          <p>Rp 300.000</p>
        </div>
        <div class="mb-4">
          <p class="font-semibold">Total</p>
          <p>Rp 300.000</p>
        </div>
        <input type="text" placeholder="Enter your address" class="w-full border border-gray-300 rounded-md px-3 py-2 mb-4">
        <button class="w-full bg-blue-500 text-white py-2 rounded-md">Order Now</button>
      </div>
    </div>
  </div>

<?php
include '../includes/footer.php';
?>
