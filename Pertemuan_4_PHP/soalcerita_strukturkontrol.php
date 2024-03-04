<?php
//soal cerita 4.6
$daftarNilai = [85,92,78,90,75,88,79,70];
$totalNilai = 0;
foreach($daftarNilai as $nilai){
    $totalNilai += $nilai / 8;
}

echo "Daftar nilai: 85,92,78,64,90,75,88,79,70,96 <br>";
echo "Rata-rata nilai setelah mengabaikan nilai tertinggi dan terendah: $totalNilai<br>";

//soal cerita 4.7
$harga_produk = 120000;
$diskon = 0.20;

if ($harga_produk > 100000) {
    $harga_setelah_diskon = $harga_produk - ($harga_produk * $diskon);
} else {
    $harga_setelah_diskon = $harga_produk;
}

echo "Harga yang harus dibayar setelah mendapatkan diskon : Rp " . ($harga_setelah_diskon);

//soal cerita 4.8
$skor_pemain = 600;
$total_skor = "Total skor pemain adalah: " . $skor_pemain;
$hadiah_tambahan = ($skor_pemain > 500) ? "YA" : "TIDAK";
echo "<br><br>";

echo "$total_skor<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah_tambahan";
?>