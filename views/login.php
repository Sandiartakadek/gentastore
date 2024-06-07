<?php
$title = "Genta Store - Login";
include '../includes/header.php';
?>

<div class="bg-gray-100 py-16 mt-16 mb-7 flex justify-center">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-lg mt-7">
        <h2 class="unna-style text-4xl font-bold text-center py-4 border-b-2 border-gray-500">Login</h2>
        <form action="#" method="POST" class="space-y-4 pt-10 px-12">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-600 focus:border-green-600 sm:text-sm" required>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-600 focus:border-green-600 sm:text-sm" required>
            </div>
            <div class="pt-3">
                <a href="#" class="block w-full text-center py-2 px-4  bg-green-600 text-white font-semibold rounded-md shadow hover:bg-green-600">
                    Login
                </a>
            </div>
        </form>
        <div class="relative my-4 mx-12">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-white text-gray-500">or</span>
            </div>
        </div>
        <div class="mx-12 pb-8">
            <a href="register.php" class="block w-full text-center py-2 px-4 mb-5 bg-transparent text-black font-semibold rounded-md border-2 border-green-600 shadow hover:bg-gray-100">
                Register
            </a>
        </div>
    </div>
</div>

<?php
include '../includes/footer.php'
?>

