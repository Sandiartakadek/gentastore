<?php
include '../assets/config/editProfile.php';
$nav = false;
include '../includes/header.php';

if (!isset($_SESSION['user_id'])) {
    echo '<script>history.back();</script>';
}
?>

<section class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 my-8 rounded-2xl shadow-md max-w-4xl w-full">
        <div class="flex items-center mb-6">
            <h2 class="text-2xl font-semibold">EDIT YOUR PROFILE</h2>
        </div>
        <form action="" method="POST" id="edit-profile">
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                <input type="text" id="nama" value="<?= $name; ?>" name="name"
                    class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" />
            </div>
            <div class="mb-4">
                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username:</label>
                <input type="text" id="username" value="<?= $username; ?>" name="username"
                    class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" />
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">New Password:</label>
                <input type="password" id="password" name="newPassword"
                    class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" />
            </div>
            <div class="mb-4">
                <label for="alamat" class="block text-gray-700 text-sm font-bold mb-2">Alamat:</label>
                <input type="text" id="alamat" value="<?= $alamat; ?>" name="alamat"
                    class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" />
            </div>
            <div class="mb-8">
                <label for="noTelp" class="block text-gray-700 text-sm font-bold mb-2">No. Telp:</label>
                <input type="text" id="noTelp" value="<?= $phone; ?>" name="phone"
                    class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" />
            </div>
        </form>
        <div class="flex justify-left">
            <a href="profile.php"
                class="bg-transparent border border-gray-700 text-gray-700 hover:bg-gray-100 hover:text-gray-900 font-bold py-1 px-7 rounded focus:outline-none focus:shadow-outline mr-2"
                type="button">
                Cancel
            </a>
            <button type="submit" name="edit-profile" form="edit-profile"
                class="bg-green-600 hover:bg-green-700 text-white font-bold py-1 px-7 rounded focus:outline-none focus:shadow-outline mx-2">
                Save
            </button>
        </div>
    </div>
</section>

<?php
$footer = false;
include '../includes/footer.php';
?>