<?php
require_once 'functions/functions.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$product = getProductById($_GET['id']);
if (!$product) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $product['nama'] ?> | Toko Online Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/images/<?= $product['gambar'] ?: 'no-image.jpg' ?>" class="img-fluid rounded" alt="<?= $product['nama'] ?>">
            </div>
            <div class="col-md-6">
                <h1><?= $product['nama'] ?></h1>
                <h3 class="text-primary">Rp <?= number_format($product['harga'], 0, ',', '.') ?></h3>
                <p>Kategori: <?= $product['kategori'] ?></p>
                <p>Stok: <?= $product['stok'] ?></p>
                
                <h4 class="mt-4">Deskripsi Produk</h4>
                <p><?= $product['deskripsi'] ?></p>
                
                <a href="index.php" class="btn btn-secondary mt-3">Kembali</a>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>