<?php
// soal no 13
$lorem = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
Voluptatem reprehenderit nobis veritatis commodi fugiat molestias 
impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum 
quisquam? Quos impedit eum nulla optio.";

 echo "<p>{$lorem}</p>";
 echo "Panjang karakter: ". strlen($lorem). "<br>";
 echo "Panjang kata: ". str_word_count($lorem). "<br>";
 echo "<p>" . strtoupper($lorem) . "</p>";
 echo "<p>" . strtolower($lorem) . "</p>";

?>