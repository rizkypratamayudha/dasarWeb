<?php
$pattern = '/[a-z]/'; //mencocokkan huruf kecil
$text = 'This is a Sample Text.';

if(preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan<br>";
}
else {
    echo "Tidak ada huruf kecil<br>";
}

$pattern2 ='/[0-9]+/';
$text = 'There are 123 apples.';

if(preg_match($pattern2, $text, $matches)) {
    echo "Cocokkan:" . $matches[0];
    echo "<br>";
}
else {
    echo "Tidak ada yang cocok";
}

$pattern3 = "/apple/";
$replacement = "banana";
$text = " I like apple pie.";
$new_text = preg_replace($pattern3, $replacement, $text);
echo $new_text ;
echo "<br>";

//$pattern4 = "/g*ood/";
//$pattern4 = "/go?d/";
$pattern4 = "/go{2,3}d/";
$text = "god is good";

if(preg_match($pattern4, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
}
else {
    echo "tidak ada yang cocok";
}
?>