<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <title>Home</title>
</head>
<body>
  <nav>
    <div class="container">
      <ul>
        <li class="logo">Sunshine Hotel</li>
        <li><a class="nav-btn" href="index.php">Home</a></li>
        <li><a href="bedroom.php" class="nav-btn active">Bedroom</a></li>
        <li style="float: inline-end">
          <a href="data.php" class="nav-btn" style="
            border-radius: 8px;
            color: white;
            padding-left: 30px;
            padding-right: 30px;
            background-color: rgb(12, 138, 77);
          ">Lihat Data</a>
        </li>
      </ul>
    </div>
  </nav>
  <section>
    <div class="room">Daftar Kamar</div>
  </section>
  <section class="popular-room" style="margin-bottom: 100px; display: flex;">
    <?php
      $buka = fopen("file.txt", "r");
      while ($isi = fgets($buka, 80)) {
        $pindah = preg_replace("/;/", "", $isi );
        $pisah = explode("|", $isi);

        // Menambahkan link ke reservasi.php dengan parameter nama hotel
        echo "<div class='card-room'>
          <img src='http://localhost/responsi-pweb-hotel/images/lux.jpg' alt='' />
          <div class='title'>$pisah[0]</div>
          <div class='place'>$pisah[2]</div>
          <div class='price'>Rp.$pisah[3]</div>
          <a href='reservasi.php?id=$pisah[0]' class='tombol'>Reservasi</a>
        </div>";
      }

      fclose($buka);
    ?>
  </section>
</body>
</html>
