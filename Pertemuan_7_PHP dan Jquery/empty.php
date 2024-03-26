<?php
$myarray = array();

if(empty($myarray)) {
    echo"array tidak terdefinsi atau kosong";
}
else {
    echo"Array terdefinsi dan tidak kosong";
}
echo"<br><br>";

if(empty($nonExistentVar)){
    echo "Variable tidak terdefinisi atau kosong";
}
else {
    echo "variable terdefini dan tidak kosong";
}
?>