<?php
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