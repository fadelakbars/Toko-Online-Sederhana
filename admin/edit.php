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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
    $harga = mysqli_real_escape_string($koneksi, $_POST['harga']);
    $kategori = mysqli_real_escape_string($koneksi, $_POST['kategori']);
    $stok = mysqli_real_escape_string($koneksi, $_POST['stok']);
    
    // Jika ada gambar baru diupload
    if ($_FILES['gambar']['name']) {
        $target_dir = "../assets/images/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if ($check !== false) {
            // Generate unique filename
            $gambar = uniqid() . '.' . $imageFileType;
            $target_file = $target_dir . $gambar;
            
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                // Hapus gambar lama jika ada
                if ($product['gambar'] && file_exists("../assets/images/" . $product['gambar'])) {
                    unlink("../assets/images/" . $product['gambar']);
                }
            } else {
                $error = "Maaf, terjadi error saat mengupload gambar.";
            }
        } else {
            $error = "File bukan gambar.";
        }
    } else {
        $gambar = $product['gambar'];
    }
    
    if (!isset($error)) {
        $query = "UPDATE produk SET 
                  nama = '$nama',
                  deskripsi = '$deskripsi',
                  harga = '$harga',
                  kategori = '$kategori',
                  stok = '$stok',
                  gambar = '$gambar'
                  WHERE id = " . $product['id'];
        
        if (mysqli_query($koneksi, $query)) {
            $_SESSION['success'] = "Produk berhasil diperbarui!";
            header("Location: index.php");
            exit;
        } else {
            $error = "Error: " . mysqli_error($koneksi);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Kembali</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2>Edit Produk</h2>
        
        <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
        
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $product['nama'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required><?= $product['deskripsi'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="<?= $product['harga'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $product['kategori'] ?>">
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" value="<?= $product['stok'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Produk</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
                <?php if ($product['gambar']): ?>
                <div class="mt-2">
                    <img src="../assets/images/<?= $product['gambar'] ?>" width="100">
                    <p class="text-muted">Gambar saat ini</p>
                </div>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>