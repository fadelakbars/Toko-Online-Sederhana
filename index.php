<?php
require_once 'functions/functions.php';
$products = getAllProducts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Selamat Datang di Toko Kami</h1>
        
        <div class="row">
            <?php foreach ($products as $product): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="assets/images/<?= $product['gambar'] ?: 'no-image.jpg' ?>" class="card-img-top" alt="<?= $product['nama'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['nama'] ?></h5>
                        <p class="card-text">Rp <?= number_format($product['harga'], 0, ',', '.') ?></p>
                        <a href="detail.php?id=<?= $product['id'] ?>" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>