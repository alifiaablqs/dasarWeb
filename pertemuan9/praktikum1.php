<?php
$id = "id";
$username = "nama_pengguna";
$password = "kata_sandi";
$dbname = "nama_database";
// Buat koneksi
$conn = mysqli_connect($id, $username, $password, $dbname);
// Periksa koneksi
if (!$conn) {
die("Koneksi gagal: " . mysqli_connect_error());
}
// Query untuk membuat tabel 'user'
$query = "CREATE TABLE user (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL
)";
// Eksekusi query
if (mysqli_query($conn, $query)) {
echo "Tabel user berhasil dibuat.";
} else {
echo "Error: " . mysqli_error($conn);
}
// Tutup koneksi
mysqli_close($conn);
?>