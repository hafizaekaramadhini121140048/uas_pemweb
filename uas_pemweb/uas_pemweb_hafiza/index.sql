-- Membuat database jika belum ada
CREATE DATABASE IF NOT EXISTS nama_database;

-- Menggunakan database yang telah dibuat
USE nama_database;

-- Membuat tabel
CREATE TABLE IF NOT EXISTS nama_tabel (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    alamat VARCHAR(255),
    tanggal_lahir DATE
);
