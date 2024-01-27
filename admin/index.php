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
  <?php
  include '../koneksi.php';
  session_start();
  $id = $_SESSION["id"]; ?>

  <div class="navbar">
    <a href="">PROFIL</a>
    <a href="ganti_password/tampilan/ganti_password.php">GANTI PASSWORD</a>
    <div class="dropdown">
      <button class="dropbtn">TAMBAH DATA
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="jenis_kasus/tampilan/tambah_data_jenis_kasus.php">JENIS KASUS</a>
        <a href="wilayah/tampilan/tambah_data_wilayah.php">WILAYAH</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">LIHAT DATA
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="kasus_anak/tampilan/lihat_data_kasus_anak.php">KASUS ANAK</a>
        <a href="kasus_dewasa/tampilan/lihat_data_kasus_dewasa.php">KASUS DEWASA</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">VERIFIKASI
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="verifikasi_akun/tampilan/verifikasi_akun.php">AKUN</a>
        <a href="verifikasi_laporan/tampilan/verifikasi_laporan.php">LAPORAN</a>
      </div>
    </div>

    <a href="../logout.php">LOGOUT</a>
  </div>

  <h2>EDIT PROFIL</h2>
  <hr>

  <?php
  $sql = "SELECT * FROM login WHERE id = $id";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $profile = $row['foto_profil'] == null ? '../img/profile.jpeg' : '../img/photo/' . $row['foto_profil'];
  ?>
    <img width="200" height="200" src="<?php echo $profile ?>"><br><br>

    <form action="update_profile.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <label>NAMA</label>
      <input type="text" id="nama" name="nama" value="<?php echo $row['nama'] ?>"><br><br>

      <label>NIK</label>
      <input type="text" id="nik" name="nik" value="<?php echo $row['nik'] ?>"><br><br>

      <label>ALAMAT</label><br>
      <textarea name="alamat"><?php echo $row['alamat'] ?></textarea><br><br>

      <label>NO. HP</label>
      <input type="text" id="telp" name="telp" value="<?php echo $row['telp'] ?>"><br><br>

      <label>Update Foto Profil</label><br><br>
      <input type="file" name="foto_profil" accept="image/*"><br><br>

      <input type="submit" name="edit" value="Edit">
    </form>
  <?php
  } else {
    echo "Data not found.";
  }

  $conn->close();
  ?>

</body>

</html>