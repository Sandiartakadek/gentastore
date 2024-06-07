<?php
include '../includes/header.php';
?>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow-md max-w-4xl w-full">
        <div class="flex items-center mb-6">
            <img src="../assets/images/admin_pic.png" alt="" class="rounded-full h-12 w-12 mr-6">
            <h2 class="text-2xl font-semibold">ADMIN's PROFILE</h2>
        </div>
        <div class="mb-4">
            <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
            <input type="text" id="nama" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
        </div>
        <div class="mb-4">
            <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username:</label>
            <input type="text" id="username" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
            <input type="password" id="password" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
        </div>
        <div class="mb-4">
            <label for="alamat" class="block text-gray-700 text-sm font-bold mb-2">Alamat:</label>
            <input type="text" id="alamat" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
        </div>
        <div class="mb-8">
            <label for="noTelp" class="block text-gray-700 text-sm font-bold mb-2">No. Telp:</label>
            <input type="text" id="noTelp" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
        </div>
        <div class="flex justify-left">
            <a href="#" class="bg-transparent border border-gray-700 text-gray-700 hover:bg-gray-100 hover:text-gray-900 font-bold py-1 px-7 rounded focus:outline-none focus:shadow-outline mx-2" type="button">
                Cancel
            </a>
            <a href="#" class="bg-green-600 hover:bg-green-700 text-white font-bold py-1 px-7 rounded focus:outline-none focus:shadow-outline mx-2" type="button">
                Save
            </a>
        </div>
    </div>
</body>

<?php
include '../includes/footer.php';
?>
