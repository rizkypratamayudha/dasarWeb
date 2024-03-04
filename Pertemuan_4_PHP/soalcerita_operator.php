<?php
// Jumlah total kursi di restoran
$total_kursi = 45;

// Jumlah kursi yang sudah ditempati oleh pelanggan
$kursi_terisi = 28;

// Menghitung jumlah kursi yang masih kosong
$kursi_kosong = $total_kursi - $kursi_terisi;

// Menghitung persentase kursi yang masih kosong
$persentase_kosong = ($kursi_kosong / $total_kursi) * 100;

// Menampilkan hasil
echo "Total kursi: $total_kursi <br>";
echo  "Kursi terisi: $kursi_terisi <br>";

echo "Persentase kursi yang masih kosong di restoran adalah: " . number_format($persentase_kosong, 2) . "%";
?>