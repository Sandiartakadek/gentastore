<?php
session_start();
include 'Config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Mempersiapkan dan mengikat
    $stmt = $conn->prepare("SELECT user_id, username, name, password, role FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $username, $name, $stored_password, $role);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (md5($password) == $stored_password) { 
            // Password benar, simpan informasi pengguna ke session
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            $_SESSION['name'] = $name;
            $_SESSION['role'] = $role; // Tambahkan ini untuk menyimpan peran pengguna
            $_SESSION['login_success'] = true;

            // Mengarahkan customer ke index.php atau pemesanan.php
            if (isset($_SESSION['isShopping']) && $_SESSION['isShopping'] == true) {
                # Jika customer menekan shop now atau buy now di index.php, setelah login akan diarahkan ke pemesanan.php
                header("Location: ../../views/pemesanan.php");
                unset($_SESSION['isShopping']);
            } else {
                header("Location: ../../index.php");                
            }
        } else {
            $_SESSION['login_error'] = "Password salah.";
            header("Location: ../../views/login.php");
        }
    } else {
        $_SESSION['login_error'] = "Tidak ada pengguna dengan username tersebut.";
        header("Location: ../../views/login.php");
    }

    $stmt->close();
}

$conn->close();


?>