<?php
include 'Config.php';

$savedID = $_SESSION['user_id'];
$stmt = $conn->prepare('SELECT * FROM user_orders_view WHERE user_id = ?');
$stmt->bind_param('i', $savedID);
$stmt->execute();
$result = $stmt->get_result();

// fetch additonal user data
$additionalData = $conn->prepare("SELECT phone, alamat FROM users WHERE user_id = ?");
$additionalData->bind_param("i", $_SESSION['user_id']);
$additionalData->execute();
$additionalData->bind_result($phone, $alamat);
$additionalData->fetch();
$additionalData->close();
?>