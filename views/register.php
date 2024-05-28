<?php

include '../includes/header.php';
?>

<div class="bg-gray-100 py-16 mt-16 mb-7 flex justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg mt-7">
        <h2 class="unna-style text-4xl font-bold text-center pb-4 border-b-2 border-gray-500 ">Register</h2>
        <form action="../assets/config/Register.php" method="POST" class="space-y-4 pt-4">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" required>
            </div>
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" required>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" required>
            </div>
            <div>
                <a href="#" class="block w-full text-center py-2 px-4 bg-green-500 text-white font-semibold rounded-md shadow hover:bg-green-600">
                    Register
                </a>
            </div>
        </form>
        <div class="relative my-4">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-white text-gray-500">Already have Account?</span>
            </div>
        </div>
        <div>
            <a href="login.php" class="block w-full text-center py-2 px-4 bg-transparent text-black font-semibold rounded-md border-2 border-green-500 shadow hover:bg-gray-100">
                Login
            </a>
        </div>
    </div>
</div>

<?php
include '../includes/footer.php'
?>

