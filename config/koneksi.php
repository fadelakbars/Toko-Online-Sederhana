<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "toko_online";

$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>