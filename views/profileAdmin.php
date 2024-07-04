<?php
$adminEditProfile = true;
include '../assets/config/editProfile.php';
include '../includes/header.php';
?>

<body>
    <?php
    if (isset($_GET['edit']) && $_GET['edit'] == 'success') {
    ?>
    <div class="hidden success-bg w-full h-full absolute z-10 transition ease duration-100">
        <div class="success-popup bg-white w-1/3 mx-auto mt-24 py-2 px-3 rounded-lg drop-shadow-containerShadow translate-y-[-120%] transition-transform ease duration-200">
            <h2>Edit profile as admin success!</h2>
        </div>
    </div>
    <script>
        document.querySelector(".success-bg").classList.toggle("hidden");
        setTimeout(() => {
            document.querySelector(".success-bg").classList.toggle("bg-black/20");
            document.querySelector(".success-popup").classList.toggle("translate-y-[-120%]");
        }, 100);
        setTimeout(() => {
            document.querySelector(".success-bg").classList.toggle("bg-black/20");
            document.querySelector(".success-popup").classList.toggle("translate-y-[-120%]");
        }, 1700);
        setTimeout(() => {
            location.href = "profileAdmin.php";
        }, 1900);
    </script>
    <?php } ?>
    <section class=" bg-gray-100 flex items-center justify-center h-screen">
        <div class="bg-white p-6 rounded shadow-md max-w-4xl w-full mt-16">
            <div class="flex items-center mb-6">
                <img src="../assets/images/admin_pic.svg" alt="" class="rounded-full h-12 w-12 mr-6">
                <h2 class="text-2xl font-semibold"><?= $_SESSION['name']; ?>'s PROFILE</h2>
            </div>
            <form method="post" id="edit-profile">
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                    <input type="text" id="nama" name="name" value="<?= $name; ?>" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly/>
                </div>
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username:</label>
                    <input type="text" id="username" name="username" value="<?= $username; ?>" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly/>
                </div>
                <div class="mb-4 passwordInput hidden">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">New Password:</label>
                    <input type="password" id="password" name="newPassword" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly/>
                </div>
                <div class="mb-4">
                    <label for="alamat" class="block text-gray-700 text-sm font-bold mb-2">Alamat:</label>
                    <input type="text" id="alamat" name="alamat" value="<?= $alamat; ?>" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly/>
                </div>
                <div class="mb-8">
                    <label for="noTelp" class="block text-gray-700 text-sm font-bold mb-2">No. Telp:</label>
                    <input type="text" id="noTelp" name="phone" value="<?= $phone; ?>" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly/>
                </div>
            </form>
            <div class="flex justify-left">
                <a href="../index.php" class="cancel-button bg-transparent border border-gray-700 text-gray-700 hover:bg-gray-100 hover:text-gray-900 font-bold py-1 px-7 rounded focus:outline-none focus:shadow-outline mr-2">
                    Back
                </a>
                <!-- tombol supaya form bisa diedit -->
                <button type="button" class="edit-button bg-green-600 hover:bg-green-700 text-white font-bold py-1 px-7 rounded focus:outline-none focus:shadow-outline mx-2">
                    Edit
                </button>
                <!-- submit button untuk form edit-profile -->
                <button type="submit" name="edit-profile" form="edit-profile" class="save-button hidden bg-green-600 hover:bg-green-700 text-white font-bold py-1 px-7 rounded focus:outline-none focus:shadow-outline mx-2">
                    Save
                </button>
            </div>
        </div>
    </section>

    <script>
        const editForm = document.getElementById("edit-profile");
        const editBtn = document.querySelector(".edit-button");
        editBtn.addEventListener("click", (e) => {
            document.querySelector('.passwordInput').classList.toggle("hidden");
            document.querySelector(".save-button").classList.toggle("hidden");
            document.querySelector(".edit-button").classList.toggle("hidden");
            document.querySelector(".cancel-button").setAttribute("href", "profileAdmin.php");
            document.querySelector(".cancel-button").innerText = "Cancel";
            editForm.querySelectorAll('input').forEach(input => input.removeAttribute("readonly"));
        });

    </script>
</body>

<?php
include '../includes/footer.php';
?>
