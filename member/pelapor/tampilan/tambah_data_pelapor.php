<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    .navbar {
      overflow: hidden;
      background-color: #333;
    }

    .navbar a {
      float: left;
      font-size: 16px;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .dropdown {
      float: left;
      overflow: hidden;
    }

    .dropdown .dropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    .navbar a:hover,
    .dropdown:hover .dropbtn {
      background-color: red;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }
  </style>
</head>

<body style="background-color:white;">

  <div class="navbar">
    <a href="../../">PROFIL</a>
    <a href="../../ganti_password/tampilan/ganti_password.php">GANTI PASSWORD</a>
    <div class="dropdown">
      <button class="dropbtn">TAMBAH DATA
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="../../kasus_anak/tampilan/tambah_data_kasus_anak.php">TAMBAH DATA KASUS ANAK</a>
        <a href="../../kasus_dewasa/tampilan/tambah_data_kasus_dewasa.php">TAMBAH DATA KASUS DEWASA</a>
        <a href="tambah_data_pelapor.php">TAMBAH DATA PELAPOR</a>
      </div>
    </div>
    <a href="../../../logout.php">LOGOUT</a>
  </div>

  <h2>TAMBAH DATA PELAPOR</h2>
  <hr>
  <br>

  <!DOCTYPE html>
  <html>

  <head>
    <title>PELAPOR</title>
  </head>

  <body>

    <form action="../aksi/tambah.php" method="post">
      <label>KODE PELAPOR</label>
      <input type="text" id="kode_pelapor" name="kode_pelapor"><br><br>

      <label>NAMA PELAPOR</label>
      <input type="text" id="nama_pelapor" name="nama_pelapor"><br><br>

      <label>NIK PELAPOR</label>
      <input type="text" id="nik_pelapor" name="nik_pelapor"><br><br>
      
      <label>HUBUNGAN DENGAN KORBAN</label>
      <input type="text" id="hubungan_dengan_korban" name="hubungan_dengan_korban"><br><br>
      
      <label>ALAMAT PELAPOR</label><br>
      <textarea name="alamat_pelapor"></textarea><br><br>

      <label>KONTAK PELAPOR</label>
      <input type="text" id="kontak_pelapor" name="kontak_pelapor"><br><br>

      <input type="submit" name="tambah" value="Tambah">
      <input type="reset" name="reset" value="Reset">
    </form>

  </body>

  </html>


</body>

</html>