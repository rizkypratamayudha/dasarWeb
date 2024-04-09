<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
</head>
<body>
    <div class="container">
        <h2>Data Anggota</h2>
            <a href="create.php" class="btn-tambah">Tambah anggota</a>
            <?php
                include('koneksi.php');

                $query = "SELECT * FROM anggota order by id desc";
                $result = mysqli_query($koneksi, $query);

                if(mysqli_num_rows($result)>0){
                    $no = 1;
                    echo "<table>";
                    echo "<tr>
                        <th>No</<th>
                        <th>Nama</<th>
                        <th>Jenis Kelamin</<th>
                        <th>Alamat</<th>
                        <th>No.Telp</<th>
                        <th>Aksi</<th>
                        </tr>";

                    while ($row = mysqli_fetch_array($result)){
                        $kelamin = ($row['jenis_kelamin']==='L')?'Laki-Laki' : 'Perempuan';
                        echo "<tr>
                            <td>" . $no++ . "</td><td>"
                            . $row["nama"] . "</td><td>"
                            . $kelamin . "</td><td?>" 
                            . $row["alamat"] . "</td>

                        
                        
                        
                            </tr>";
                    }
                }
            ?>
    </div>
</body>
</html>