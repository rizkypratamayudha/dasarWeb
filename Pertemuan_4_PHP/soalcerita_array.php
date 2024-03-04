<?php
$nilai_siswa = array(
    'Alice' => 85,
    'Bob' => 92,
    'Charlie' => 78,
    'David' => 64,
    'Eva' => 90
);

// Menghitung rata-rata kelas
$rata_rata_kelas = array_sum($nilai_siswa) / count($nilai_siswa);

// Mencetak daftar nilai siswa yang melebihi rata-rata kelas
echo "Daftar siswa dengan nilai di atas rata-rata kelas:\n";
foreach ($nilai_siswa as $nama => $nilai) {
    if ($nilai > $rata_rata_kelas) {
        echo "$nama: $nilai\n";
    }
}
?>