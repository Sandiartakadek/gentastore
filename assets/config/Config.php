<?php

// Konfigurasi database
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "coming-soon"; 

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
  die("Koneksi ke database gagal: " . $conn->connect_error);
}


?>