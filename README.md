Berikut adalah versi yang sudah disederhanakan, dirapikan, dan diformat sesuai standar file `README.md` untuk proyek praktikum siswa SMK:

```md
# 🛒 Toko Online Sederhana - Praktikum SMK

Website toko online sederhana menggunakan **PHP + MySQLi** tanpa framework. Cocok untuk tugas praktikum siswa SMK.

---

## 📦 Persiapan

### 1. Software Wajib
- XAMPP atau Laragon
- Code Editor (VS Code / Notepad++ / Sublime Text)
- Browser (Chrome/Firefox)

### 2. Instalasi
1. Ekstrak folder `Toko-Online` ke:
   - `C:\xampp\htdocs\Toko-Online` (untuk XAMPP)
   - `C:\laragon\www\Toko-Online` (untuk Laragon)
2. Jalankan Apache dan MySQL
3. Buka `http://localhost/phpmyadmin`
4. Buat database `toko_online` dan **import** file `toko_online.sql`

---

## ⚙️ Konfigurasi

### Ganti Nama Toko
Edit file:
```

/includes/header.php

````
Ganti teks:
```html
<a class="navbar-brand" href="index.php">NAMA TOKO KAMU</a>
````

### Login Admin

Buka:

```
http://localhost/Toko-Online/admin/login.php
```

Login:

* **Username:** admin
* **Password:** admin123

---

## 📋 Fitur

### Untuk Admin

* Tambah, edit, dan hapus produk
* Upload gambar produk

### Untuk Pengunjung

* Lihat daftar produk
* Buka detail produk

---

## 📂 Struktur Folder

```
Toko-Online/
├── admin/            # Halaman admin
├── assets/images/    # Gambar produk
├── config/           # Koneksi database
├── includes/         # Header & footer
```

---

## 🧪 Tugas Praktikum

* Ganti nama toko sesuai kelompok
* Tambahkan minimal 5 produk
* Upload gambar untuk setiap produk
* Tampilkan hasil di browser

---

## ❗ Troubleshooting

### Gambar Tidak Muncul

* Pastikan file ada di `assets/images`
* Periksa nama file di database (tabel `produk`)

### Login Gagal

* Cek username/password
* Reset password lewat phpMyAdmin:

```sql
UPDATE admin 
SET password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' 
WHERE username = 'admin';
```

---

**Selamat Mengerjakan dan Semangat Belajar! 🎉**

```

File ini sudah:
- Menggunakan format markdown yang rapi dan bersih
- Disederhanakan agar langsung ke inti
- Cocok untuk file `README.md` di root folder projek

Jika kamu ingin saya bantu menambahkan screenshot, diagram alur, atau panduan tambahan, tinggal beri tahu.
```
