<?php
$nilaiNumerik = 92;

if($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
}elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai hurf: B";
}elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai Huruf: C";
}elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "<br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
echo "<br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
echo "<br>";
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
echo "<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}
echo "<br>";
echo "Total skor ujian adalah: $totalSkor";
echo "<br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
echo "<br>";
foreach ($nilaiSiswa as $nilai){
    if($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br>";
echo "<br>";

$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$nilaiTinggi1 = $nilai[0];
$nilaiTinggi2 = $nilai[0];
$nilaiRendah1 = $nilai[0];
$nilaiRendah2 = $nilai[0];
$total = 0;
$banyak = 0;
$rataNilai = 0;

//Mencari Nilai Tertinggi 1
foreach($nilai as $tinggi){
    if($tinggi > $nilaiTinggi1){
        $nilaiTinggi1 = $tinggi;
    }
}
echo"----------------------------------------------------------<br>";
echo"<br>";
echo "Nilai Tertinggi Pertama adalah : $nilaiTinggi1 <br>";

//Mencari Nilai Tertinggi 2
foreach($nilai as $tinggi){
    if($tinggi == $nilaiTinggi1){
        continue;
    }elseif($tinggi > $nilaiTinggi2 ){
        $nilaiTinggi2 = $tinggi;
    }
}
echo"Nilai Tertinggi Kedua adalah : $nilaiTinggi2 <br>";

//Mencari Nilai Terendah 1
foreach($nilai as $rendah){
    if($rendah < $nilaiRendah1){
        $nilaiRendah1 = $rendah;
    }
}
echo"Nilai Terendah Pertama adalah $nilaiRendah1<br>";

//Mencari Nilai Rendah 2
foreach($nilai as $rendah){
    if($rendah == $nilaiTinggi1 || $rendah == $nilaiTinggi2 ||
    $rendah == $nilaiRendah1 || $rendah == $nilaiRendah2){
        continue;
    }

    $banyak++;
    $total += $rendah;
    $rataNilai = $total / $banyak;
}
echo "Nilai Terendah Kedua adalah $nilaiRendah2 <br>";
echo "Total nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah adalah $rataNilai <br>";
echo"<br>";
?>