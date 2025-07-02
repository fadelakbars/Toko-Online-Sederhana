Berikut kelanjutan dan perapian dari penulisan `README.md` sesuai permintaanmu, tanpa kotak kode yang tidak perlu, dan disusun dengan rapi serta mudah dibaca:

---

## ⚙️ Konfigurasi

### Ganti Nama Toko

Buka file `includes/header.php`, lalu ubah bagian berikut:

```html
<a class="navbar-brand" href="index.php">NAMA TOKO KAMU</a>
```

Ganti teks "NAMA TOKO KAMU" sesuai nama kelompok atau nama toko kalian.

### Login Admin

Buka halaman admin melalui:

`http://localhost/Toko-Online/admin/login.php`

Gunakan akun berikut untuk login:

* **Username:** admin
* **Password:** admin123

---

## 🧑‍💻 Cara Penggunaan

### Sebagai Admin

* Tambahkan produk baru melalui halaman admin.
* Edit atau hapus produk yang sudah ada.
* Upload gambar produk dengan format JPG/PNG.

### Sebagai Pengunjung

* Akses halaman utama di `http://localhost/Toko-Online`.
* Lihat daftar produk.
* Klik produk untuk melihat detailnya.

---

## 📁 Struktur Folder

* `admin/` – Halaman dashboard admin
* `assets/images/` – Folder untuk menyimpan gambar produk
* `config/` – File koneksi ke database
* `includes/` – Header dan footer website

---

## 🧪 Tugas Praktikum

1. Ganti nama toko sesuai nama kelompok
2. Tambahkan minimal 5 produk
3. Upload gambar untuk setiap produk
4. Tampilkan hasil di browser saat presentasi

---

## ❗ Troubleshooting

**1. Gambar tidak muncul**

* Pastikan gambar disimpan di folder `assets/images/`
* Periksa nama file gambar di database (phpMyAdmin → tabel `produk`)

**2. Login admin gagal**

* Periksa apakah username dan password benar (admin / admin123)
* Jika lupa password, reset di phpMyAdmin dengan perintah SQL berikut:

```sql
UPDATE admin 
SET password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' 
WHERE username = 'admin';
```

---

## ✅ Tips

* Jangan ubah file PHP selain yang diperintahkan
* Pastikan database sudah di-import sebelum digunakan
* Jalankan XAMPP atau Laragon saat mengakses website

---

**Selamat mengerjakan dan semangat belajar! 💻🎉**
