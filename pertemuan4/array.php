<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach($nilaiSiswa as $nilai){
    if($nilai >= 70){
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);
echo"<br>";

$daftarKaryawan = [
    ['Alice' , 7],
    ['Bob' , 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan){
    if($karyawan[1] > 5){
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo"<br>";
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ',$karyawanPengalamanLimaTahun);

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';
echo"<br>";
echo"<br>";
echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: ({$nilai[0]}), Nilai : {$nilai[1]} <br>";
}
echo"<br>";

$daftarSiswa = [
    ['Alice' , 85],
    ['Bob' , 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];
$jumlahNilai = 0;
$banyakNilai = 0;
$rataNilai = 0;
$nilaiAtasRata = [];

foreach($daftarSiswa as $nilai){
    $jumlahNilai += $nilai[1];
    $banyakNilai++;
}

$rataNilai = $jumlahNilai / $banyakNilai;

foreach($daftarSiswa as $nilai){
    if($nilai[1] > $rataNilai){
        $nilaiAtasRata[] = $nilai[0];
    }
}

echo "Daftar nilai siswa yang mencapai nilai di atas rata-rata kelas adalah " . implode(', ', $nilaiAtasRata);

?>