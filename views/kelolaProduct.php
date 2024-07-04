    <?php
    session_start();

    if (isset($_SESSION['message'])) {
        echo "<script>alert('" . $_SESSION['message'] . "');</script>";
        unset($_SESSION['message']);
    }

    if (isset($_SESSION['message'])) {
        echo "<script>alert('" . $_SESSION['message'] . "');</script>";
        unset($_SESSION['message']);
    }
    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Genta Store</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-100">

        <!-- Navbar -->
        <nav class="bg-green-500 shadow-lg fixed top-0 left-0 right-0 flex items-center justify-between px-8 py-4">
            <div class="flex items-center">
                <!-- Logo atau Judul Website -->
                <a href="../index.php" class="text-lg font-bold text-white">Genta Store</a>
            </div>
            <div class="flex items-center">
                <!-- Image Profile Admin -->
                <img src="../assets/images/admin_pic.svg" alt="Profile Admin" class="w-10 h-10 rounded-full mr-8">
            </div>
        </nav>

        <section class="container mx-auto p-16">
            <h1 class="text-3xl font-bold mb-5 mt-10">Kelola Produk</h1>
            <button id="btnTambahProduk" class="bg-blue-500 text-white py-2 px-4 rounded mb-5 inline-block">Tambah Produk</button>
            <table class="table-auto w-full bg-white rounded shadow-md">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Nama Produk</th>
                        <th class="px-4 py-2">Deskripsi</th>
                        <th class="px-4 py-2">Harga</th>
                        <th class="px-4 py-2">Stok</th>
                        <th class="px-4 py-2">Gambar</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- tabel read product -->
                    <?php
                    include '../assets/config/product.php';

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td class='border px-4 py-2'>{$row['product_id']}</td>
                                <td class='border px-4 py-2'>{$row['product_name']}</td>
                                <td class='border px-4 py-2'>{$row['description']}</td>
                                <td class='border px-4 py-2'>{$row['price']}</td>
                                <td class='border px-4 py-2'>{$row['stock']}</td>
                                <td class='border px-4 py-2'><img src='../assets/{$row['image']}' alt='{$row['product_name']}' class='w-16'></td>
                                <td class='border px-4 py-2'>
                                    <button class='bg-yellow-500 text-white py-1 px-3 rounded btnEdit' data-id='{$row['product_id']}'>Edit</button>
                                    <button class='bg-red-500 text-white py-1 px-3 rounded btnDelete' data-id='{$row['product_id']}'>Delete</button>
                                </td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7' class='border px-4 py-2 text-center'>Tidak ada data</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </section>

        <!-- Modal Tambah Produk -->
        <div id="modalTambahProduk" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white p-8 rounded-lg max-w-lg">
                <h2 class="text-2xl font-bold mb-4">Tambah Produk</h2>
                <form action="../assets/config/createProduct.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label for="productName" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                        <input type="text" id="productName" name="productName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div class="mb-4">
                        <label for="productDesc" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea id="productDesc" name="productDesc" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="productPrice" class="block text-sm font-medium text-gray-700">Harga</label>
                        <input type="text" id="productPrice" name="productPrice" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div class="mb-4">
                        <label for="productStock" class="block text-sm font-medium text-gray-700">Stok</label>
                        <input type="text" id="productStock" name="productStock" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div class="mb-4">
                        <label for="productImage" class="block text-sm font-medium text-gray-700">Gambar</label>
                        <input type="file" id="productImage" name="productImage" accept="image/*" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded mt-4">Tambah</button>
                </form>
                <button id="btnCloseModal" class="bg-red-500 text-white py-2 px-4 rounded mt-4">Tutup</button>
            </div>
        </div>

        <!-- Modal Edit Produk -->
        <div id="modalEditProduk" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white p-8 rounded-lg max-w-lg">
                <h2 class="text-2xl font-bold mb-4">Edit Produk</h2>
                <form action="../assets/config/updateProduct.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="editProductId" name="editProductId">
                    <div class="mb-4">
                        <label for="editProductName" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                        <input type="text" id="editProductName" name="editProductName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div class="mb-4">
                        <label for="editProductDesc" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea id="editProductDesc" name="editProductDesc" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="editProductPrice" class="block text-sm font-medium text-gray-700">Harga</label>
                        <input type="text" id="editProductPrice" name="editProductPrice" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div class="mb-4">
                        <label for="editProductStock" class="block text-sm font-medium text-gray-700">Stok</label>
                        <input type="text" id="editProductStock" name="editProductStock" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div class="mb-4">
                        <label for="editProductImage" class="block text-sm font-medium text-gray-700">Gambar</label>
                        <input type="file" id="editProductImage" name="editProductImage" accept="image/*" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded mt-4">Update</button>
                </form>
                <button id="btnCloseEditModal" class="bg-red-500 text-white py-2 px-4 rounded mt-4">Tutup</button>
            </div>
        </div>

        <script>
            const modalTambahProduk = document.getElementById('modalTambahProduk');
            const modalEditProduk = document.getElementById('modalEditProduk');
            const btnTambahProduk = document.getElementById('btnTambahProduk');
            const btnCloseModal = document.getElementById('btnCloseModal');
            const btnCloseEditModal = document.getElementById('btnCloseEditModal');

            btnTambahProduk.addEventListener('click', () => {
                modalTambahProduk.classList.remove('hidden');
            });

            btnCloseModal.addEventListener('click', () => {
                modalTambahProduk.classList.add('hidden');
            });

            const editButtons = document.querySelectorAll('.btnEdit');
            editButtons.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    const productId = e.target.getAttribute('data-id');
                    fetch(`../assets/config/getProduct.php?id=${productId}`)
                        .then(response => response.json())
                        .then(data => {
                            document.getElementById('editProductId').value = data.product_id;
                            document.getElementById('editProductName').value = data.product_name;
                            document.getElementById('editProductDesc').value = data.description;
                            document.getElementById('editProductPrice').value = data.price;
                            document.getElementById('editProductStock').value = data.stock;
                            modalEditProduk.classList.remove('hidden');
                        });
                });
            });

            btnCloseEditModal.addEventListener('click', () => {
                modalEditProduk.classList.add('hidden');
            });

            const deleteButtons = document.querySelectorAll('.btnDelete');
            deleteButtons.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    const productId = e.target.getAttribute('data-id');
                    const confirmDelete = confirm('Apakah Anda yakin ingin menghapus produk ini?');
                    if (confirmDelete) {
                        fetch('../assets/config/deleteProduct.php', {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                            body: `product_id=${productId}`
                        }).then(() => location.reload());
                    }
                });
            });
        </script>
    </body>
    </html>
