<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil dari $a ditambah $b adalah $hasilTambah. <br>";
echo "Hasil dari $a dikurangi $b adalah $hasilKurang. <br>";
echo "Hasil dari $a dikali $b adalah $hasilKali. <br>";
echo "Hasil dari $a dibagi $b adalah $hasilBagi. <br>";
echo "Sisa bagi dari $a dibagi $b adalah $sisaBagi. <br>";
echo "Hasil dari $a pangkat $b adalah $pangkat. <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br>";
echo "Hasil sama dengan dari $a dan $b adalah $hasilSama. <br>";
echo "Hasil tidak sama dengan dari $a dan $b adalah $hasilTidakSama. <br>";
echo "Hasil lebih kecil dari $a dan $b adalah $hasilLebihKecil. <br>";
echo "Hasil lebih besar dari $a dan $b adalah $hasilLebihBesar. <br>";
echo "Hasil lebih kecil sama dengan dari $a dan $b adalah $hasilLebihKecilSama. <br>";
echo "Hasil lebih besar sama dengan dari $a dan $b adalah $hasilLebihBesarSama. <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br>";
echo "Hasil AND dari $a dan $b adalah $hasilAnd <br>";
echo "Hasil OR dari $a dan $b adalah $hasilOr <br>";
echo "Hasil Not A dari $a dan $b adalah $hasilNotA <br>";
echo "Hasil Not B dari $a dan $b adalah $hasilNotB <br>";

$tambah = $a += $b;
$kurang = $a -= $b;
$kali = $a *= $b;
$bagi = $a /= $b;
$modulus = $a %= $b;

echo "<br>";
echo "Hasil dari nilai A adalah 10 <br>";
echo "Hasil dari 10 ditambah $b adalah $tambah <br>";
echo "Hasil dari 10 dikurangi $b adalah $kurang <br>";
echo "Hasil dari 10 dikali $b adalah $kali <br>";
echo "Hasil dari 10 dibagi $b adalah $bagi <br>";
echo "Hasil dari 10 modulus $b adalah $modulus <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br>";
echo "Hasil dentik adalah $hasilIdentik <br>";
echo "Hasil tidak identik adalah $hasilTidakIdentik <br>";

//Restoran
$kursiPengunjung = 45;
$kursiTerisi = 28;
//Pada suatu malah 28 kursi telah di tempati, Berapa persen kursi yang masih kosong?
$kursiKosong = $kursiPengunjung - $kursiTerisi;
$persentasiKursi = $kursiKosong / $kursiPengunjung *100;

echo"<br>";
echo"------------------------------------------------<br>";
echo"Data Kursi Kosong Restoran <br>"; 
echo"------------------------------------------------<br>";
echo"Jumlah Kursi Seluruhnya :  $kursiPengunjung kursi <br>";
echo"Jumlah Kursi Terisi     :  $kursiTerisi kursi <br>";
echo"Jumlah Kursi Kosong     :  $kursiKosong kursi <br>";
echo"Presentase Kursi Kosong :  $persentasiKursi% <br>";
?>

