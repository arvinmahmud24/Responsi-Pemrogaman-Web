<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <title>Home</title>
  </head>
  <body>
    <nav>
      <div class="container">
        <ul>
          <li class="logo">Sunshine Hotel</li>
          <li><a class="active nav-btn" href="index.php">Home</a></li>
          <li><a href="bedroom.php" class="nav-btn">Bedroom</a></li>
          <li style="float: inline-end">
            <a
              href="data.php"
              class="nav-btn"
              style="
                border-radius: 8px;
                color: white;
                padding-left: 30px;
                padding-right: 30px;
                background-color: rgb(12, 138, 77);
              "
              >Lihat Data</a
            >
          </li>
        </ul>
      </div>
    </nav>
    <section class="page-content">
      <div class="img"></div>
      <div class="title">Book Your Style With Tripster</div>
      <div class="subtitle">
        banyak kamar di seluruh dunia menunggu Anda!
      </div>
    </section>
    <section class="bar" style="justify-content: center">
      <div class="card-bar" style="display: flex">
        <div class="card-content" style="display: flex">
          <div>
            <div class="title">Location</div>
            <div class="subtitle">Where are you going?</div>
          </div>
          <div class="vertikal"></div>
        </div>
        <div class="card-content" style="display: flex">
          <div>
            <div class="title">Check-In</div>
            <div class="subtitle">Add date</div>
          </div>
          <div class="vertikal"></div>
        </div>
        <div class="card-content" style="display: flex">
          <div>
            <div class="title">Check-Out</div>
            <div class="subtitle">Add date</div>
          </div>
          <div class="vertikal"></div>
        </div>
        <div class="card-content" style="display: flex">
          <div>
            <div class="title">Guest</div>
            <div class="subtitle">Number of guest</div>
          </div>
        </div>
      </div>
    </section>
    <section> <div class="title-room">Popular room</div></section>
    <section class="popular-room" style="margin-bottom: 100px; display: flex;">
      <?php 

          $buka = fopen("file.txt", "r");
          while($isi = fgets($buka, 80)) {
            $pindah = preg_replace("/;/", "", $isi );
            $pisah = explode("|", $isi);

            echo "<div class='card-room'>
            <img src='http://localhost/responsi-pweb-hotel/images/lux.jpg' alt='' />
            <div class='title' style='margin-top: 8px;'> $pisah[0] </div>
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
