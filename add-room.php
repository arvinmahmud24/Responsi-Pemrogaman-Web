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
          <li><a class="nav-btn" href="data.php">Data Reservasi</a></li>
          <li><a href="add-room.php" class="nav-btn active">Tambah Kamar</a></li>
          <li style="float: inline-end">
            <a
              href="index.php"
              class="nav-btn"
              style="
                border-radius: 8px;
                color: white;
                padding-left: 30px;
                padding-right: 30px;
                background-color:red;
              "
              >Keluar</a
            >
          </li>
        </ul>
      </div>
    </nav>
    <section><div class="room">Daftar Kamar</div></section>
    <section class="add" >
      <form action="create.php" name="form1" method="post" style="justify-content: center; display:flex; ">
        <section class="daftar" style="width: 1000px; border-radius: 10px;   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); padding-top: 30px; padding-bottom: 30px;">
          <div class="container" align="center">
            <table width="60%">
               <tr>
                <td colspan="2">
                  <label for="id">ID</label>
                  <input type="text" name="id" id="id" required />
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <label for="name">Nama Hotel</label>
                  <input type="text" name="name" id="name" value="Sunshine Hotel" readonly />
                </td>
              </tr>
              <tr style="align-items: center;">
                <td class="td">
                  <label for="jenis" style="margin-top: -12px ;">Jenis</label>
                  <select name="jenis" id="jenis" required style="width: 98%; padding-top: 5px; padding-bottom: 5px;">
                    <option value="Standard Room">Standard Room</option>
                    <option value="Superior Room">Superior Room</option>
                    <option value="Deluxe Room">Deluxe Room</option>
                   
                  </select>
                </td>
                <td>
                  <label for="price">Harga</label>
                  <input type="text" name="price" id="price" required />
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <label for="place">Tempat</label>
                  <input type="text" name="place" id="place" required />
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <input type="submit" value="Daftar" class="submit" onclick="check();" />
                </td>
              </tr>
            </table>
          </div>
        </section>
      </form>
    </section>
  </body>
  <script>
      const check = () => {
        var id = (document.form1.id.value);
        var name = (document.form1.name.value);
        var jenis = (document.form1.jenis.value);
        var price = (document.form1.price.value);
        var place = (document.form1.place.value);

        if(id == "" || name == "" || jenis == "" || price == "" || place == "") {
          alert("Data tidak boleh kosong");
        }else {
          alert("Data berhasil ditambahkan");
        }
        
      }
  </script>
</html>
