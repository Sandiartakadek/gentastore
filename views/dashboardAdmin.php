<?php
session_start();

// masih eroooooooor

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['user_id'])) {
    // Jika belum, arahkan ke halaman login dan tampilkan alert
    echo "<script>alert('Anda harus login untuk mengakses halaman ini'); window.location.href='login.php';</script>";
    exit;
}

// Periksa apakah peran pengguna adalah admin
if ($_SESSION['role'] !== 'admin') {
    // Jika bukan admin, arahkan ke halaman sebelumnya dan tampilkan alert
    echo "<script>alert('Anda tidak memiliki izin untuk mengakses halaman ini'); window.history.back();</script>";
    exit;
}

$title = "Genta Store - Dashboard Admin";
include '../assets/config/views.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Genta Store'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Unna:wght@400;700&display=swap">
    <link rel="stylesheet" href=".././assets/css/styles.css">
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-lg fixed top-0 left-0 right-0 flex items-center justify-between px-8 py-4">
        <div class="flex items-center">
            <!-- Logo atau Judul Website -->
            <h1 class="text-lg font-bold">Genta Store</h1>
        </div>
        <div class="flex items-center">
            <!-- Image Profile Admin -->
            <img src="../assets/images/admin_pic.png" alt="Profile Admin" class="w-10 h-10 rounded-full mr-8">
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="bg-green-600 text-white h-screen fixed left-0 top-0 w-64 px-8 pt-2">
        <div class="p-4">
            <h1 class="text-2xl font-bold mb-4 border-b pb-4 inline-block">Genta Store</h1>
            <ul class="pt-7">
                <li class="mb-2"><a href="#" class="hover:text-gray-300">Customers</a></li>
            </ul>
        </div>
    </div>

    <!-- Content Area -->
    <div class="mt-16 ml-64 mr-12 p-4 pt-12 pl-16">
        <!-- Isi konten website -->
        <h1 class="text-2xl font-bold mb-8">Welcome, Admin!</h1>

        <!-- Current Orders Section -->
        <div>
            <div class="bg-white p-4 rounded-lg">
                <!-- Content for current orders goes here -->
                <h2 class="text-xl font-bold mb-4">Current Orders</h2>
                <div class="order bg-gray-100 p-4 rounded-lg">
                    <!-- Data table -->
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-bold text-gray-700">Order ID</th>
                                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-bold text-gray-700">User ID</th>
                                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-bold text-gray-700">Username</th>
                                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-bold text-gray-700">Product Name</th>
                                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-bold text-gray-700">Quantity</th>
                                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-bold text-gray-700">Item Price</th>
                                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-bold text-gray-700">Total Price</th>
                                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-bold text-gray-700">Order Date</th>
                                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-bold text-gray-700">alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Loop through hasil query untuk menampilkan data
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td class='py-2 px-4 border-b border-gray-200'>" . $row['order_id'] . "</td>";
                                    echo "<td class='py-2 px-4 border-b border-gray-200'>" . $row['user_id'] . "</td>";
                                    echo "<td class='py-2 px-4 border-b border-gray-200'>" . $row['username'] . "</td>";
                                    echo "<td class='py-2 px-4 border-b border-gray-200'>" . $row['product_name'] . "</td>";
                                    echo "<td class='py-2 px-4 border-b border-gray-200'>" . $row['quantity'] . "</td>";
                                    echo "<td class='py-2 px-4 border-b border-gray-200'>" . $row['item_price'] . "</td>";
                                    echo "<td class='py-2 px-4 border-b border-gray-200'>" . $row['total_price'] . "</td>";
                                    echo "<td class='py-2 px-4 border-b border-gray-200'>" . $row['order_date'] . "</td>";
                                    echo "<td class='py-2 px-4 border-b border-gray-200'>" . $row['alamat'] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>No orders found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<?php
$conn->close();

?>
