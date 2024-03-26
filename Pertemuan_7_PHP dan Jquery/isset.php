<?php
//isset tidak terdefinsi data
$umur;
if (isset($umur) && $umur >=10){
    echo "Anda sudah dewasa";
}
else {
    echo "Anda belum Dewasa atau variable 'umur' tidak ditemukan<br>    ";
}

$data = array(
    "nama"=> "Jane",
    "Usia"=> "25",
);

//isset jika terdefinisi data
if (isset($data["nama"])){
    echo "Nama: ". $data["nama"];
}
else {
    echo "Variable 'nama' tidak ditemukan dalam array.";
}
echo    "<br>";

//empty()
$nama = "";
if(empty($nama)){
    echo "Nama tidak terdifinisi atau kosong";
}
else {
    echo "Nama terdefinisi";
}
?>