<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai Variable a : 10 <br>";
echo "Nilai Variable b : 5 <br><br>";
echo "Hasil Tambah: $hasilTambah <br>";
echo "Hasil Kurang: $hasilKurang <br>";
echo "Hasil Kali: $hasilKali <br>";
echo "Hasil Bagi: $hasilBagi <br>";
echo "Hasil Sisa Bagi: $sisaBagi <br>";
echo "Hasil Pangkat: $pangkat <br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama dengan: $hasilSama <br>";
echo "Hasil Tidak Sama: $hasilTidakSama <br>";
echo "Hasil Lebih Kecil: $hasilLebihKecil <br>";
echo "Hasil Lebih Besar: $hasilLebihBesar <br>";
echo "Hasil Lebih Kecil Sama: $hasilLebihKecilSama <br>";
echo "Hasil Lebih Besar Sama: $hasilLebihBesarSama <br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil And: $hasilAnd <br>";
echo "Hasil Or: $hasilOr <br>";
echo "Hasil Not A: $hasilNotA <br>";
echo "Hasil Not B: $hasilNotB <br><br>";

$penugasanPenjumlahan = $a += $b;
$penugasanPengurangan = $a -= $b;
$penugasanPerkalian = $a *= $b;
$penugasanPembagian = $a /= $b;
$penugasanSisaBagi = $a %= $b;

echo "Penugasan dengan penjumlahan: $penugasanPenjumlahan <br>";
echo "Penugasan dengan pengurangan: $penugasanPengurangan <br>";
echo "Penugasan dengan perkalian: $penugasanPerkalian <br>";
echo "Penugasan dengan pembagian: $penugasanPembagian <br>";
echo "Penugasan dengan sisa bagi: $penugasanSisaBagi <br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik: $hasilIdentik <br>";
echo "Hasil Tidak Identik: $hasilTidakIdentik <br>";






?>