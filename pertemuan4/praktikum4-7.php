<?php
$pembelian = 120000;
$total = 0;
$diskon = 0;

if($pembelian >= 100000){
    $diskon = ($pembelian * 20) /100;
    $total = $pembelian - $diskon;

    echo "Anda mendapatkan diskon sebesar 20%. <br>";
    echo "Harga yang harus di bayar adalah $total <br> ";
}
?>