<?php 
    $name = $_POST["name"];
    $id = $_POST["id"];
    $jenis = $_POST["jenis"];
    $price = $_POST["price"];
    $place = $_POST["place"];

    $buka = fopen("file.txt", "a+");
    $isi = fgets($buka, 80);
   
    $split = explode(";", $temp);

    fputs($buka, "$id|$name|$jenis|$price|$place\n");
    fclose($buka);

    header("location:index.php");
?>