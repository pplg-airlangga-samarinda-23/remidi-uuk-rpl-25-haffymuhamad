<?php

$host = "localhost";
$user = "admin"; 
$pass = "admin123";
$database   = "posyandu"; 
$conn = mysqli_connect($host, $user, $pass, $database);


if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}


$email      = $_POST['email'];
$nama       = $_POST['nama'];
$password   = $_POST['password'];
$konfirmasi = $_POST['konfirmasi'];


if ($password != $konfirmasi) {
    echo "Konfirmasi password tidak cocok!";
    exit;
}


$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO posyandu (nama, tanggal, tinggi, berat) VALUES ('$nama', '$tanggal', '$tinggi' , '$berat')";
if (mysqli_query($conn, $sql)) {
    echo "Pendaftaran berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>