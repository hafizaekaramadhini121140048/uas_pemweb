<?php
// Informasi koneksi ke database
$host = "localhost";
$username = "nama_pengguna";
$password = "kata_sandi";
$database = "nama_database";

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Jika koneksi berhasil
echo "Koneksi berhasil!";
?>
