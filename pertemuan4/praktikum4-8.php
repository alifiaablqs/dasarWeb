<?php
$poinPemain = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalSkor = 850;
foreach ($poinPemain as $poin){
    $totalSkor += $skor;
}
echo"<br>";
echo"<br>";
echo "Total skor Permainan adalah: $totalSkor <br>";
if($totalSkor > 500){
    echo "Apakah pemain mendapatkan hadiah tambahan? Ya";

} elseif($totalSkor < 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? Tidak ";
}
?>