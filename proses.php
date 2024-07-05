<?php 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $price = $_POST["price"];
    $location = $_POST["location"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];
    $id = $_POST["id"];
    $hotel_name = $_POST["hotel_name"];
    $room_type = $_POST["room_type"];
    
   


    $buka = fopen("dataReservasi.txt", "a+");
    $isi = fgets($buka, 80);
   
    $split = explode(";", $temp);

    fputs($buka, "$id|$name|$email|$price|$location|$phone|$address|$checkin|$checkout|$hotel_name|$room_type\n");
    fclose($buka);

    header("location:index.php");
?>