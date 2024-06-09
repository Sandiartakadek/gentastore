<?php
session_start();
include 'Config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Mempersiapkan dan mengikat
    $stmt = $conn->prepare("SELECT id, username, password FROM user_management WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $username, $stored_password);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (md5($password) == $stored_password) { 
            // Password benar, simpan informasi pengguna ke session
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            header("Location: ../../index.php");
            $_SESSION['login_success'] = true;
        } else {
            $_SESSION['login_error'] = "Password salah.";
        }
    } else {
        $_SESSION['login_error'] = "Tidak ada pengguna dengan username tersebut.";
    }

    $stmt->close();
}

$conn->close();

?>