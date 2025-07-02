
## 🛠️ Langkah-Langkah

### **Langkah 1: Instalasi Alat**

Pastikan software berikut sudah terpasang di komputer:

* ✅ XAMPP atau Laragon
* ✅ Text Editor (VS Code / Notepad++)
* ✅ Browser (Chrome / Firefox)

---

### **Langkah 2: Setup Project Website**

1. **Ekstrak folder `Toko-Online`** ke:

   * `C:\xampp\htdocs\Toko-Online` (jika pakai XAMPP)
   * `C:\laragon\www\Toko-Online` (jika pakai Laragon)

2. **Jalankan XAMPP atau Laragon**
   Aktifkan layanan **Apache** dan **MySQL**

3. **Buat Database**

   * Buka browser → ketik `http://localhost/phpmyadmin`
   * Klik “Database” → buat database baru bernama: `toko_online`
   * Klik database tersebut, lalu pilih “Import”
   * Upload file `toko_online.sql` dari folder projek

---

### **Langkah 3: Konfigurasi Awal**

#### 3.1 Ganti Nama Toko

Buka file:

```
includes/header.php
```

Ubah bagian berikut:

```html
<a class="navbar-brand" href="index.php">NAMA TOKO KAMU</a>
```

Ganti teks sesuai nama kelompok kalian.

#### 3.2 Login ke Admin Panel

Akses:

```
http://localhost/Toko-Online/admin/login.php
```

Gunakan:

* Username: `admin`
* Password: `admin123`

---

### **Langkah 4: Menambahkan Produk**

1. Setelah login ke admin, klik **"Tambah Produk"**
2. Isi form: nama, harga, deskripsi, dan upload gambar
3. Klik **Simpan**
4. Produk akan muncul di halaman utama website

---

### **Langkah 5: Uji Website**

1. Buka halaman utama:

   ```
   http://localhost/Toko-Online
   ```
2. Coba lihat produk yang telah ditambahkan
3. Klik salah satu produk untuk melihat detailnya

---

## 📂 Struktur Folder Penting

```
Toko-Online/
├── admin/             # Panel admin
├── assets/images/     # Folder gambar produk
├── config/            # Koneksi ke database
├── includes/          # Header dan footer
```

---

## 🧪 Tugas

Siswa diminta untuk:

1. Mengganti nama toko sesuai nama kelompok
2. Menambahkan minimal **5 produk**
3. Upload gambar untuk setiap produk
4. Menjalankan dan menampilkan hasil di browser
5. Mempresentasikan hasil kerja kelompok di depan kelas

---

## 📝 Catatan Tambahan

* **Jangan** mengubah file PHP selain yang diarahkan di modul ini
* Pastikan **XAMPP/Laragon aktif** sebelum menjalankan website
* Simpan semua gambar produk ke dalam folder `assets/images/`

---
