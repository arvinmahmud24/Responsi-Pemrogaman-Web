<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $file_path = "file.txt";
   
    if (file_exists($file_path)) {
        $file = fopen($file_path, "r");
        $found = false;
       

        $lines = file($file_path);


        while ($isi = fgets($file)) {
            $pindah = preg_replace("/;/", "", $isi);
            $pisah = explode("|", $isi);
            
            if ($pisah[0] == $id) {
                $hotel_name = trim($pisah[1]);
                $room_type = trim($pisah[2]);
                $location = trim($pisah[4]);
                $price = trim($pisah[3]);
                $found = true;
                break;
            }
        }
        fclose($file);
        if ($found) {
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <link rel="stylesheet" type="text/css" href="style.css" />
                <link rel="preconnect" href="https://fonts.googleapis.com" />
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
                <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet" />
                <title>Reservasi Kamar</title>
            </head>
            <body>
                <nav>
                    <div class="container">
                        <ul>
                            <li class="logo">Sunshine Hotel</li>
                            <li><a class="nav-btn" href="index.php">Home</a></li>
                            <li><a href="jadwal.php" class="nav-btn active">Bedroom</a></li>
                            <li style="float: inline-end">
                              <a href="data.php" class="nav-btn" style="border-radius: 8px; color: white; padding-left: 30px; padding-right: 30px; background-color: rgb(12, 138, 77);">Login</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <section
                    class="boking"
                    style="
                      margin: 20px auto;
                      border-radius: 10px;
                      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                      padding: 20px;
                      display: flex;
                      width: 950px;
                    "
                  >
                    <div class="data" style="width: 500px">
                      <img
                        src="http://localhost/responsi-pweb-hotel/images/lux.jpg"
                        alt=""
                        style="width: 500px; border-radius: 10px"
                      />
                      <div class="name" style="font-size: 20px; font-weight: bold">
                        <?php echo $hotel_name; ?>
                      </div>
                      <div style="justify-content: space-between; display: flex">
                        <div class="jenis" style="color: rgb(153, 153, 153)">
                          <?php echo $room_type; ?>
                        </div>
                        <div class="tempat" style="color: rgb(153, 153, 153)"><?php echo $location; ?></div>
                      </div>
                      <div
                        class="harga"
                        style="color: red; font-size: 17px; margin-top: 20px"
                      >
                        <?php echo "Rp.$price" ?>
                      </div>
                    </div>
                    <div class="form">
                      <form action="proses.php" name="form1" method="post">
                        <section class="daftar" style="margin-left: 20px">
                          <table width="60%">
                            <tr>
                              <td colspan="2">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" id="name" required />
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" required />
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">
                                <label for="phone">Phone Number</label>
                                <input type="number" name="phone" id="phone" required />
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" required />
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <label for="checkin">Check-In Date</label>
                                <input type="date" name="checkin" id="checkin" required />
                              </td>
                              <td>
                                <label for="checkout">Check-Out Date</label>
                                <input type="date" name="checkout" id="checkout" required />
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2" style="display: none;">
                                <label for="id">id</label>
                                <input type="text" name="id" id="id" value="<?php echo $id; ?>" readonly />
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2" style="display: none;">
                                <label for="hotel_name">hotel_name</label>
                                <input type="text" name="hotel_name" value="<?php echo $hotel_name; ?>" id="hotel_name" readonly />
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2" style="display: none;">
                                <label for="room_type">room_type</label>
                                <input type="text" name="room_type" value="<?php echo $room_type; ?>" id="room_type" readonly />
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2" style="display: none;">
                                <label for="location">location</label>
                                <input type="text" name="location" id="location" value="<?php echo $location; ?>" readonly />
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2" style="display: none;">
                                <label for="price">price</label>
                                <input type="text" name="price" value="<?php echo $price; ?>" id="price" required />
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">
                                <input type="submit" value="Daftar" style="margin-top: 100px;" class="submit" onclick="checkReservasi();"/>
                              </td>
                            </tr>
                          </table>
                        </section>
                      </form>
                    </div>
                  </section>
            </body>
            <script>
              const checkReservasi = () => {
                var name = (document.form1.address.value);
                 var email = (document.form1.email.value);
                  var phone = (document.form1.phone.value);
                   var address = (document.form1.address.value);
                    var checkin = (document.form1.checkin.value);
                     var checkout = (document.form1.checkout.value);
                  
                if(name == "" || email == "" || phone == "" || address == "" || checkin == "" || checkout == "") 
                  alert("Data tidak boleh kosong");
                else {
                  alert("Data berhasil ditambahkan");
                }
              }
            </script>
            </html>
            <?php
        } 
      }
    }
?>