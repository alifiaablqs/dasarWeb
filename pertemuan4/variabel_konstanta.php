<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;

$benar = true;
$salah = false;

// Mendefinisikan konstanta nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil. <br>";
echo "Variabel benar: $benar, Variabel salah: $salah <br>";
echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ". <br>";
?>

