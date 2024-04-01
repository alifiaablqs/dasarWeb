<?php
$pattern = '/[a-z]/'; // Cocokan huruf kecil
$text = 'This is a Sample Text.';
if(preg_match($pattern, $text)){
    echo "Huruf kecil ditemukan! <br><br>";
} else {
    echo "Tidak ada huruf kecil!<br><br>";
}
?>

<?php
$pattern = '/[0-9]+/'; // Cocokan satu digit
$text = 'There are 123 apples.';
if(preg_match($pattern, $text, $matches)){
    echo "Cocokkan: " . $matches[0] ."<br><br>";
} else {
    echo "Tidak ada yang cocok!";
}
?>

<?php
$pattern = '/apple/'; 
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text . "<br><br>"; // Output: "I like banana pie."
?>

<?php
$pattern = '/go{2,4}d/'; // Cocokan "god", "good", "gooooood", dll
$text = 'god is good.';
if(preg_match($pattern, $text, $matches)){
    echo "Cocokkan: " . $matches[0] ."<br><br>";
} else {
    echo "Tidak ada yang cocok!";
}
?>
