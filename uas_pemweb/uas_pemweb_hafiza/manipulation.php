<?php
// Menambah data ke tabel
$insertQuery = "INSERT INTO nama_tabel (nama, alamat, tanggal_lahir) VALUES ('John Doe', 'Jl. Contoh 123', '1990-01-01')";
$resultInsert = $conn->query($insertQuery);

if ($resultInsert === TRUE) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Error: " . $insertQuery . "<br>" . $conn->error;
}

// Mengambil data dari tabel
$selectQuery = "SELECT id, nama, alamat FROM nama_tabel";
$resultSelect = $conn->query($selectQuery);

if ($resultSelect->num_rows > 0) {
    while ($row = $resultSelect->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nama: " . $row["nama"] . " - Alamat: " . $row["alamat"] . "<br>";
    }
} else {
    echo "Tidak ada data.";
}

// Mengupdate data dalam tabel
$updateQuery = "UPDATE nama_tabel SET alamat='Jl. Contoh Baru' WHERE nama='John Doe'";
$resultUpdate = $conn->query($updateQuery);

if ($resultUpdate === TRUE) {
    echo "Data berhasil diupdate!";
} else {
    echo "Error updating record: " . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
