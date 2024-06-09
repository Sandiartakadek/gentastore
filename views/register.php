<?php

include '../includes/header.php';
?>

<div class="bg-gray-100 py-16 mt-16 mb-7 flex justify-center">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-lg mt-7 pb-2">
        <h2 class="unna-style text-4xl font-bold text-center py-4 border-b-2 border-gray-500 ">Register</h2>
        <form action="../assets/config/register.php" method="POST" class="space-y-2 px-12 pt-8">
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="nama" name="nama" class="mt-1 block w-full px-3 py-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-600 focus:border-green-600 sm:text-sm" required>
            </div>
            <div>
                <label for="notelp" class="block text-sm font-medium text-gray-700">No. Telp</label>
                <input type="text" id="notelp" name="phone" class="mt-1 block w-full px-3 py-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-600 focus:border-green-600 sm:text-sm" required>
            </div>
            <div>
                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                <input type="text" id="alamat" name="alamat" class="mt-1 block w-full px-3 py-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-600 focus:border-green-600 sm:text-sm" required>
            </div>
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" class="mt-1 block w-full px-3 py-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-600 focus:border-green-600 sm:text-sm" required>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full px-3 py-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-600 focus:border-green-600 sm:text-sm" required>
            </div>
            <div class="pt-2">
                <button type="submit" class="block w-full text-center py-1 px-4 bg-green-600 text-white font-semibold rounded-md shadow hover:bg-green-600">
                    Register
                </button>
            </div>
        </form>
        <div class="relative my-4">
            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-white text-gray-500">Already have an account?</span><a href="login.php" class="text-green-600 hover:text-green-600">Login</a>
            </div>
        </div>
    </div>
</div>

<?php
include '../includes/footer.php'
?>

