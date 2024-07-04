<?php
session_start();

$title = "Genta Store - Dashboard Admin";
include '../assets/config/views.php';

$isAdmin = true;
$nav = false;
include '../includes/header.php';

// go back if not logged in or not admin
if (!$_SESSION['user_id'] || $_SESSION['role'] !== 'admin') {
    $isAdmin = false;
    echo '<script>history.back()</script>';
}
// render content if logged in as admin
if ($isAdmin == true) {
?>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-lg fixed top-0 left-0 right-0 flex items-center justify-between px-8 py-4">
        <div class="flex items-center">
            <!-- Logo atau Judul Website -->
            <h1 class="text-lg font-bold">Genta Store</h1>
        </div>
        <div class="flex justify-center items-center gap-2">
            <!-- Image Profile Admin -->
            <div class="text-right">
                <a href="#"><h2 class="text-lg"><?= $_SESSION['name']; ?></h2></a>
                <a href="#"><h3 class="text-sm"><?= $_SESSION['role']; ?></h3></a>
            </div>
            <a href="#"><img src="../assets/images/admin_pic.svg" alt="Profile Admin" class="w-14 h-14 rounded-full mr-8"></a>
        </div>
    </nav>

    <!-- Sidebar -->
    <sidebar class="bg-green-700 text-white h-screen fixed left-0 top-0 w-64 px-8 pt-2">
        <h1 class="text-2xl font-bold text-center mb-1 pt-6 pb-5 border-b">Genta Store</h1>
        <div class="p-4 h-5/6 flex flex-col items-center justify-between">
            <ul class="pt-7 flex flex-col items-center">
                <li class="mb-1 bg-green-600/50 hover:bg-green-600/80 transition-colors duration-150 rounded-2xl">
                    <button class="py-2 px-4 w-36 text-start" onclick="renderDashboard('dashboard');">Dashboard</button>
                </li>
                <li class="mb-1 mt-2 bg-green-600/50 hover:bg-green-600/80 transition-colors duration-150 rounded-2xl">
                    <button class="py-2 px-4 w-36 text-start" onclick="renderDashboard('customer')">Customers</button>
                </li>
                <li class="mb-1 mt-2 bg-green-600/50 hover:bg-green-600/80 transition-colors duration-150 rounded-2xl">
                    <button class="py-2 px-4 w-36 text-start" onclick="PrintTable()">Cetak Laporan</button>
                </li>

                <script>
                    function renderDashboard(components) {
                        if (components === 'dashboard') {
                          document.getElementById('dashboard').classList.remove('hidden');
                          document.getElementById('customer').classList.add('hidden');
                        } else if (components === 'customer') {
                          document.getElementById('customer').classList.remove('hidden');
                          document.getElementById('dashboard').classList.add('hidden');
                        }
}

                    function PrintTable() {
                        let divToPrint = document.querySelector('.table-div');
                        let styles = 
                        `
                            <style>
                            table {
                                min-width: 100%;
                                font-family: 'Open Sans', sans-serif;
                            }
                            table thead tr th {
                                padding: 0.25rem 0.5rem;
                                background-color: rgb(229, 231, 235);
                                text-align: left;
                                font-size: 0.875rem;
                                line-height: 1.25rem;
                                color: rgb(55, 65, 81);
                            }
                            table tbody tr td {
                                padding: 0.25rem 0.5rem;
                                border-bottom: 1px solid rgb(229, 231, 235);
                            }
                            </style>
                        `;
                        newWin = window.open("");
                        newWin.document.write("<html><head><title>Laporan Penjualan GentaStore</title></head><body>" + styles + divToPrint.innerHTML + "</body></html>");
                        newWin.print();
                        newWin.close();
                    }
                </script>
            </ul>
            <div class="flex flex-col gap-10 items-center">
                <a href="../index.php" class="text-normal text-center w-16 py-1 px-2 tracking-wide rounded-lg bg-green-600/30 hover:bg-green-600/60 transition-colors ease-in duration-150">Back</a>
                <a href="../assets/config/logout.php" class="font-bold text-lg py-1 px-6 tracking-wide rounded-lg bg-green-600/50 hover:bg-green-600/80 transition-colors ease-in duration-150">LOGOUT</a>
            </div>
        </div>
    </sidebar>

    <!-- Content Area -->
    <section class="mt-16 ml-64 mr-12 p-4 pt-12 pl-16" id="dashboard">
        <!-- Isi konten website -->
        <h1 class="text-2xl font-bold mb-4">Welcome, Admin!</h1>
        <div class="flex flex-col gap-10">
            <!-- Dashboard -->
            <?php include '../assets/config/dashboard.php'; ?>

            <div class="flex justify-between items-center py-8 px-24 bg-white rounded-2xl drop-shadow-containerShadow">
                <div class="flex flex-col justify-center items-center gap-1">
                    <h2 class="text-4xl"><?= $total_product ?></h2>
                    <p class="text-lg">Products Sold</p>
                </div>
                <div class="flex flex-col justify-center items-center gap-1">
                    <h2 class="text-4xl"><?= $total_order ?></h2>
                    <p class="text-lg">Orders</p>
                </div>
                <div class="flex flex-col justify-center items-center gap-1">
                    <h2 class="text-4xl"><?= $total_customer ?></h2>
                    <p class="text-lg">Customers</p>
                </div>
            </div>
    
            <!-- Current Orders Section -->
            <div class="bg-white p-4 rounded-2xl drop-shadow-containerShadow">
                <!-- Content for current orders goes here -->
                <h2 class="text-xl font-bold mb-2">Current Orders</h2>
                <div class="order bg-gray-100 p-4 rounded-lg">
                    <div class="table-div flex-grow overflow-auto h-64">
                        <!-- Data table -->
                        <table class="min-w-full relative bg-white">
                            <thead>
                                <tr>
                                    <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0">Order ID</th>
                                    <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0">User ID</th>
                                    <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0">Username</th>
                                    <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0">Product Name</th>
                                    <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0">Quantity</th>
                                    <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0">Item Price</th>
                                    <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0">Total Price</th>
                                    <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0">Order Date</th>
                                    <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0">alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Loop through hasil query untuk menampilkan data
                                if ($order_result->num_rows > 0) {
                                    while ($row = $order_result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td class='py-1 px-2 border-b border-gray-200'>" . $row['order_id'] . "</td>";
                                        echo "<td class='py-1 px-2 border-b border-gray-200'>" . $row['user_id'] . "</td>";
                                        echo "<td class='py-1 px-2 border-b border-gray-200'>" . $row['username'] . "</td>";
                                        echo "<td class='py-1 px-2 border-b border-gray-200'>" . $row['product_name'] . "</td>";
                                        echo "<td class='py-1 px-2 border-b border-gray-200'>" . $row['quantity'] . "</td>";
                                        echo "<td class='py-1 px-2 border-b border-gray-200'>" . $row['item_price'] . "</td>";
                                        echo "<td class='py-1 px-2 border-b border-gray-200'>" . $row['total_price'] . "</td>";
                                        echo "<td class='py-1 px-2 border-b border-gray-200'>" . $row['order_date'] . "</td>";
                                        echo "<td class='py-1 px-2 border-b border-gray-200'>" . $row['alamat'] . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='9'>No orders found</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- List Customers -->
    <section class="mt-16 ml-64 mr-12 p-4 pt-12 pl-16 hidden" id="customer">
        <h1 class="text-2xl font-bold mb-4">User list.</h1>
        <div class="order bg-white p-4 rounded-2xl">
            <div class="table-div flex-grow overflow-auto h-64 bg-gray-100 rounded-lg">
                <!-- Data table -->
                <table class="min-w-full relative">
                    <thead>
                        <tr>
                            <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0">Nama</th>
                            <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0">No. Telp</th>
                            <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0">Alamat</th>
                            <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0">Username</th>
                            <th class="py-1 px-2 bg-gray-200 text-left text-sm font-bold text-gray-700 sticky top-0">Joined at</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Loop through hasil query untuk menampilkan data
                        if ($user_result->num_rows > 0) {
                            while ($row = $user_result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td class='py-1 px-2 border-b border-gray-200'>" . $row['name'] . "</td>";
                                echo "<td class='py-1 px-2 border-b border-gray-200'>" . $row['phone'] . "</td>";
                                echo "<td class='py-1 px-2 border-b border-gray-200'>" . $row['alamat'] . "</td>";
                                echo "<td class='py-1 px-2 border-b border-gray-200'>" . $row['username'] . "</td>";
                                echo "<td class='py-1 px-2 border-b border-gray-200'>" . $row['created_at'] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='9'>No orders found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

<?php
} // <- close bracket for rendering content
$footer = false;
include '../includes/footer.php';
$conn->close();
?>
