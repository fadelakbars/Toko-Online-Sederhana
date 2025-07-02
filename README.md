```markdown
# Panduan Praktikum Toko Online SMK

## 📦 Persiapan Awal

### 1. Install Software yang Dibutuhkan
- XAMPP (Windows) atau Laragon (Windows/Mac)
- Text editor (VS Code, Notepad++, atau Sublime Text)
- Browser (Chrome/Firefox)

### 2. Setup Projek
1. Download folder projek `Toko-Online` dari guru
2. Ekstrak folder ke:
   - XAMPP: `C:\xampp\htdocs\Toko-Online`
   - Laragon: `C:\laragon\www\Toko-Online`

### 3. Setup Database
1. Buka XAMPP/Laragon → Start Apache dan MySQL
2. Buka http://localhost/phpmyadmin
3. Buat database baru dengan nama `toko_online`
4. Import file `toko_online.sql` dari folder projek

## 🛠️ Konfigurasi Website

### 1. Ganti Nama Toko
Buka file:
```
/Toko-Online/includes/header.php
```
Cari dan edit teks ini:
```html
<a class="navbar-brand" href="index.php">NAMA TOKO KAMU</a>
```

### 2. Login Admin
Akses:
```
http://localhost/Toko-Online/admin/login.php
```
Gunakan:
- Username: `admin`
- Password: `admin123`

## 🧑‍💻 Cara Menggunakan

### Untuk Admin
1. Tambah Produk:
   - Klik "Tambah Produk"
   - Isi form dan upload gambar
   - Simpan

2. Edit/Hapus Produk:
   - Klik ikon pensil untuk edit
   - Klik ikon tong sampah untuk hapus

### Untuk Pembeli
1. Buka http://localhost/Toko-Online
2. Lihat daftar produk
3. Klik produk untuk melihat detail

## 📂 Struktur Folder Penting
```
Toko-Online/
├── assets/images/    # Simpan gambar produk disini
├── admin/            # Halaman admin
├── includes/         # File header dan footer
└── config/           # Setting database
```

## 🚨 Troubleshooting
1. **Gambar tidak muncul**:
   - Pastikan folder `assets/images` ada
   - Cek nama file di database (phpMyAdmin → tabel `produk`)

2. **Login gagal**:
   - Pastikan password `admin123` (huruf kecil semua)
   - Jika lupa password, reset via phpMyAdmin:
     ```sql
     UPDATE admin SET password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' 
     WHERE username = 'admin';
     ```

## 📝 Tugas Praktikum
1. Ganti nama toko sesuai kelompok
2. Tambahkan minimal 5 produk
3. Upload gambar untuk setiap produk
4. Presentasikan hasil di browser

## ⚠️ Catatan
- Jangan ubah file PHP selain yang diinstruksikan
- Jika ada error, cek:
  - Apakah database sudah diimport?
  - Apakah XAMPP/Laragon sudah running?
  - Apakah file ada di folder yang benar?

---
**Selamat Mengerjakan!** 🎉
```

File README.md ini bisa:
1. Disimpan di folder utama projek
2. Dibagikan ke siswa sebagai panduan
3. Dicetak untuk referensi praktikum

Tips:
- Gunakan format MD yang rapi agar mudah dibaca
- Tambahkan screenshot jika perlu
- Sesuaikan path sesuai lokasi instalasi siswa