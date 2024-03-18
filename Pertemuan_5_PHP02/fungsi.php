<?php
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam. ", ";
    echo "Perkenalkan, nama saya ".$nama."<br>";

    //memanggil fungsi lain
    echo "Saya berusia ".hitungumur(2004,2024)." tahun <br>";
    echo "Senang berkenalan dengan anda<br>";
}

//memanggil fungsi yang sudah dibuat 
perkenalan("Yudha");

echo "<hr>";

$saya ="Elok";
$ucapansalam = "Selamat pagi";
perkenalan($saya, $ucapansalam);

echo "<hr>";
perkenalan($saya);

echo "<hr>";

function hitungumur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
echo "Umur saya adalah ". hitungumur(2004, 2024) ." tahun";

?>
