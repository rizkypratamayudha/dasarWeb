<?php
//koneksi database
$koneksi = mysqli_connect("localhost","root","","prakwebdb");

//memeriksa koneksi
if(mysqli_connect_errno()){
    die("Koneki database gagal : " . mysqli_connect_error());
}
else{
    echo "Koneksi berhasil";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
</head>
<body>
    <div class="container">
        <h2>Data Anggora</h2>
        
    </div>
</body>
</html>