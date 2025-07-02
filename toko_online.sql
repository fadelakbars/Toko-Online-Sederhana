-- Database: toko_online

CREATE DATABASE IF NOT EXISTS toko_online;
USE toko_online;

-- Table: produk
CREATE TABLE produk (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    deskripsi TEXT,
    harga DECIMAL(10,2) NOT NULL,
    gambar VARCHAR(255),
    kategori VARCHAR(100),
    stok INT(11) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table: admin
CREATE TABLE admin (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    nama_lengkap VARCHAR(100) NOT NULL
);

-- Insert default admin (username: admin, password: admin123)
INSERT INTO admin (username, password, nama_lengkap) 
VALUES ('admin', 'admin123', 'Administrator');