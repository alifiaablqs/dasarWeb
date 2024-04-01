<?php
$myArray = array(); //Array kosong
if (empty($myArray)) {
    echo "Array tidak terdefinisi atau kososng.";
    echo "<br>";
} else {
    echo "Array terdefinisi dan tidak kososng.";
    echo "<br>";
}
if(empty($nonExistentVar)) {
    echo "Variabel tidak terdifinisi atau kososng.";
} else {
    echo "Variabel terdefinisi dan tidak kosong.";
}
?>