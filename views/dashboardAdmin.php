<?php
$title = "Genta Store - Dashboard Admin";
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
        
        <!-- Single Statistics Card -->
        <div class="bg-white shadow-lg rounded-lg py-12 text-center mb-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <h2 class="text-4xl font-bold text-gray-800">120</h2>
                    <p class="text-gray-600">Products Sold</p>
                </div>
                <div>
                    <h2 class="text-4xl font-bold text-gray-800">75</h2>
                    <p class="text-gray-600">Orders</p>
                </div>
                <div>
                    <h2 class="text-4xl font-bold text-gray-800">150</h2>
                    <p class="text-gray-600">Customers</p>
                </div>
            </div>
        </div>

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
                                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-bold text-gray-700">Customer</th>
                                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-bold text-gray-700">Items</th>
                                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-bold text-gray-700">Total</th>
                                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-bold text-gray-700">Status</th>
                                <th class="py-2 px-4 bg-gray-200 text-left text-sm font-bold text-gray-700">Shipping Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-200">#12345</td>
                                <td class="py-2 px-4 border-b border-gray-200">John Doe</td>
                                <td class="py-2 px-4 border-b border-gray-200">Product A, Product B, Product C</td>
                                <td class="py-2 px-4 border-b border-gray-200">$500</td>
                                <td class="py-2 px-4 border-b border-gray-200">Processing</td>
                                <td class="py-2 px-4 border-b border-gray-200">123 Main St, Anytown, USA</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
