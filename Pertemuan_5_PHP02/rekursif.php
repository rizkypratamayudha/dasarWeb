<?php
//function tampilkanHaloDunia(){
  //  echo "Halo dunia!<br>";

    //tampilkanHaloDunia();
//}
//tampilkanHaloDunia();

for($i=1; $i <= 25; $i++){
    echo "Perulangan ke-{$i}<br>";
}

echo "<hr>";

function tampilkanAngka($jumlah, $indeks=1){
    echo "Perulangan ke-{$indeks}<br>";

    if($indeks < $jumlah){
        tampilkanAngka($jumlah, $indeks+1);
    }
}
tampilkanAngka(20)
?>