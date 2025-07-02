<?php
// require '../config/koneksi.php';
require_once __DIR__ . '/../config/koneksi.php';
function getAllProducts() {
    global $koneksi;
    $query = "SELECT * FROM produk ORDER BY created_at DESC";
    $result = mysqli_query($koneksi, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getProductById($id) {
    global $koneksi;
    $query = "SELECT * FROM produk WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    return mysqli_fetch_assoc($result);
}

function isAdminLoggedIn() {
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}
?>