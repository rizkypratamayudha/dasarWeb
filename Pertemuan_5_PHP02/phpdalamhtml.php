<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARA 01</title>
</head>
<body>
    <p>
        Tanggal hari ini : <?php 
        echo date("d M Y")
        ?>
        <hr>
    </p>

    <p>
        <?php 
        echo '<html';
        echo '<head><title><Cara02></title></head>';
        echo '<body>';
        echo '<p>tanggal hari ini : ' . date('d M Y'). '</p>';
        echo '<body>';
        echo '</html>';
        ?>
    </p>
</body>
</html>