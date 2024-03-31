<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "documents/";
    $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
    $documentType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt","pdf","doc","docx");

    $maxfileSize = 10 * 1024 * 1024;

    if (in_array($documentType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxfileSize){
        if(move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)){
            echo"Dokumen berhasil diunggah<br>";
        }
        else{
            echo "Gagal mengunggah Dokumen";
        }
    }
    else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}

?>