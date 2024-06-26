<?php
include 'Config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    // Menangani file upload
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Periksa apakah file adalah gambar asli atau bukan
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File bukan gambar.";
        $uploadOk = 0;
    }

    // Periksa apakah file sudah ada
    if (file_exists($target_file)) {
        echo "Maaf, file sudah ada.";
        $uploadOk = 0;
    }

    // Periksa ukuran file
    if ($_FILES["image"]["size"] > 500000) {
        echo "Maaf, file terlalu besar.";
        $uploadOk = 0;
    }

    // Perbolehkan format file tertentu
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Maaf, hanya format JPG, JPEG, PNG & GIF yang diperbolehkan.";
        $uploadOk = 0;
    }

    // Periksa apakah $uploadOk bernilai 0 karena kesalahan
    if ($uploadOk == 0) {
        echo "Maaf, file Anda tidak terunggah.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "File ". basename($_FILES["image"]["name"]). " telah terunggah.";
            // Simpan path file di database
            $sql = "INSERT INTO products (product_name, price, stock, image) VALUES ('$product_name', '$price', '$stock', '$target_file')";

            if ($conn->query($sql) === TRUE) {
                echo "Produk baru berhasil ditambahkan.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file Anda.";
        }
    }

    $conn->close();
}
?>
