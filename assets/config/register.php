<?php
session_start();
include 'Config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $phone = $_POST['phone'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed_password = md5($password); // Menggunakan md5 untuk penyandian kata sandi 
    $role = 'customer'; // Mengatur peran default

    // Mengecek apakah username sudah digunakan
    $check_username = $conn->prepare("SELECT user_id FROM users WHERE username = ?");
    $check_username->bind_param("s", $username);
    $check_username->execute();
    $check_username->store_result();

    if ($check_username->num_rows > 0) {
        echo "Username sudah digunakan.";
    } else {
        // Memasukkan data ke database dengan peran default
        $insert_user = $conn->prepare("INSERT INTO users (name, phone, alamat, username, password, role) VALUES (?, ?, ?, ?, ?, ?)");
        $insert_user->bind_param("ssssss", $nama, $phone, $alamat, $username, $hashed_password, $role);

        if ($insert_user->execute()) {
            // Registrasi berhasil, tampilkan peringatan dan arahkan dengan JavaScript
            echo '<script>alert("Registrasi berhasil. Silakan login."); 
            window.location.href = "../../views/login.php";</script>';
        } else {
            echo "Registrasi gagal. Silakan coba lagi.";
        }

        $insert_user->close();
    }

    $check_username->close();
}

$conn->close();
?>

?>