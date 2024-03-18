<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 2</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Array Associative</h2>

    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin'=> 'Perempuan',
    ];
    
    echo "<table>";
    echo "<tr><th>Field</th><th>Value</th></tr>";
    echo "<tr><td>Nama</td><td>{$Dosen['nama']}</td></tr>";
    echo "<tr><td>Domisili</td><td>{$Dosen['domisili']}</td></tr>";
    echo "<tr><td>Jenis Kelamin</td><td>{$Dosen['jenis_kelamin']}</td></tr>";
    echo "</table>";
    ?>
</body>
</html>
