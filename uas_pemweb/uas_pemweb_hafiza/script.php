<?php
// Mulai session
session_start();

// Cek apakah pengguna sudah login atau belum
if(isset($_SESSION['user_id'])) {
    echo "Selamat datang, User ID: " . $_SESSION['user_id'];
} else {
    echo "Silakan login";
    // Simpan informasi pengguna ke dalam session
    $_SESSION['user_id'] = 123;
}
?>
