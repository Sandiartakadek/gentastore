<?php
session_start();
include 'Config.php';

// Fetch before editing user data
$stmt = $conn->prepare("SELECT name, phone, alamat, username FROM users WHERE user_id = ?");
$stmt->bind_param('i', $_SESSION['user_id']);
$stmt->execute();
$stmt->bind_result($name, $phone, $alamat, $username);
$stmt->fetch();
$stmt->close();

if (isset($_POST['edit-profile'])) {
  $name = $_POST['name'];
  $username = $_POST['username'];
  $newPassword = $_POST['newPassword'];
  $phone = $_POST['phone'];
  $alamat = $_POST['alamat'];

  $hashed_password = md5($passwordInp);

  if (empty($name) || empty($username) || empty($phone) || empty($alamat)) {
    header('Location: editProfile.php?error=empty');
  } else {
    $queryFields = array();
    if (!empty($newPassword)) { $queryFields[] = "password = '$hashed_password'"; };

    $queryFields[] = "name = '$name'";
    $queryFields[] = "username = '$username'";
    $queryFields[] = "phone = '$phone'";
    $queryFields[] = "alamat = '$alamat'";

    try {
      $stmt = $conn->prepare("UPDATE users SET ". implode(', ', $queryFields) ." WHERE user_id = '".$_SESSION['user_id']."'");
      $stmt->execute();
      if ($adminEditProfile === true) {
        header('Location: profileAdmin.php?edit=success');
      } else {
        header('Location: ../views/profile.php?edit=success');
      }
    } catch(Exception) {
      header('Location: editProfile.php?error=sql');
    }
  }
}
?>