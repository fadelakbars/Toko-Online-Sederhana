<?php
session_start();
require_once '../config/koneksi.php';
require_once '../functions/functions.php';

if (!isAdminLoggedIn()) {
    header("Location: login.php");
    exit;
}

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$product = getProductById($_GET['id']);
if (!$product) {
    header("Location: index.php");
    exit;
}

// Hapus gambar jika ada
if ($product['gambar'] && file_exists("../assets/images/" . $product['gambar'])) {
    unlink("../assets/images/" . $product['gambar']);
}

// Hapus dari database
$query = "DELETE FROM produk WHERE id = " . $product['id'];
if (mysqli_query($koneksi, $query)) {
    $_SESSION['success'] = "Produk berhasil dihapus!";
} else {
    $_SESSION['error'] = "Error: " . mysqli_error($koneksi);
}

header("Location: index.php");
exit;
?>