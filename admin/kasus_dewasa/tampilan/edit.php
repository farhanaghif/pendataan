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
        <a href="tambah_data_kasus_dewasa.php">TAMBAH DATA KASUS DEWASA</a>
        <a href="../../pelapor/tampilan/tambah_data_pelapor.php">TAMBAH DATA PELAPOR</a>
        <a href="../../jenis_kasus/tampilan/tambah_data_jenis_kasus.php">TAMBAH DATA JENIS KASUS</a>
        <a href="../../wilayah/tampilan/tambah_data_wilayah.php">TAMBAH DATA WILAYAH</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">LIHAT DATA
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="../../kasus_anak/tampilan/lihat_data_kasus_anak.php">LIHAT DATA KASUS ANAK</a>
        <a href="lihat_data_kasus_dewasa.php">LIHAT DATA KASUS DEWASA</a>
      </div>
    </div>
  </div>

  <h2>Ubah Data Kasus Dewasa</h2>
  <hr>
  <br>

  <!DOCTYPE html>
  <html>

  <head>
    <title>Edit Kasus Dewasa</title>
  </head>

  <body>

    <?php
    include '../../../koneksi.php';

    // Ambil id dari parameter URL
    $id = $_GET["id"];

    // Ambil data dari database berdasarkan id
    $sql = "SELECT * 
    FROM kasus_dewasa WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Output data of the selected row
      $row = $result->fetch_assoc();
    ?>

      <form action="../aksi/ubah.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">

        <label>NO. REGISTRASI</label>
        <input type="text" id="no_registrasi" name="no_registrasi" value="<?php echo $row["no_registrasi"]; ?>"><br><br>

        <label>NAMA KORBAN</label>
        <input type="text" id="nama_korban" name="nama_korban" value="<?php echo $row["nama_korban"]; ?>"><br><br>

        <label>NIK KORBAN</label>
        <input type="text" id="nik_korban" name="nik_korban" value="<?php echo $row["nik_korban"]; ?>"><br><br>

        <label>JENIS KELAMIN KORBAN</label>
        <label><input type="radio" name="jenis_kelamin_korban" value="Perempuan" <?php echo ($row["jenis_kelamin_korban"] == 'Perempuan') ? 'checked' : ''; ?>>Perempuan</label>
        <label><input type="radio" name="jenis_kelamin_korban" value="Laki-Laki" <?php echo ($row["jenis_kelamin_korban"] == 'Laki-Laki') ? 'checked' : ''; ?>>Laki-Laki</label><br><br>

        <label>TTL KORBAN</label>
        <input type="text" id="ttl_korban" name="ttl_korban" value="<?php echo $row["ttl_korban"]; ?>"><br><br>

        <label>UMUR KORBAN</label>
        <input type="text" id="umur_korban" name="umur_korban" value="<?php echo $row["umur_korban"]; ?>"><br><br>

        <label>ALAMAT</label><br>
        <textarea name="alamat"><?php echo $row["alamat"]; ?></textarea><br><br>

        <label>KONTAK KORBAN</label>
        <input type="text" id="kontak_korban" name="kontak_korban" value="<?php echo $row["kontak_korban"]; ?>"><br><br>

        <label>KRONOLOGI SINGKAT</label><br>
        <textarea name="kronologi_singkat"><?php echo $row["kronologi_singkat"]; ?></textarea><br><br>

        <label>PEKERJAAN KORBAN</label>
        <input type="text" id="pekerjaan_korban" name="pekerjaan_korban" value="<?php echo $row["pekerjaan_korban"]; ?>"><br><br>

        <label>STATUS PERKAWINAN KORBAN</label>
        <input type="text" id="status_perkawinan_korban" name="status_perkawinan_korban" value="<?php echo $row["status_perkawinan_korban"]; ?>"><br><br>

        <label>JENIS KASUS</label>
        <select name="jenis_kasus">
          <option value="Kekerasan Fisik" <?php echo ($row["jenis_kasus"] == 'Kekerasan Fisik') ? 'selected' : ''; ?>>Kekerasan Fisik</option>
          <option value="Kekerasan Psikis" <?php echo ($row["jenis_kasus"] == 'Kekerasan Psikis') ? 'selected' : ''; ?>>Kekerasan Psikis</option>
          <option value="Kekerasan Seksual" <?php echo ($row["jenis_kasus"] == 'Kekerasan Seksual') ? 'selected' : ''; ?>>Kekerasan Seksual</option>
          <option value="Ekonomi" <?php echo ($row["jenis_kasus"] == 'Ekonomi') ? 'selected' : ''; ?>>Ekonomi</option>
          <option value="Lainnya" <?php echo ($row["jenis_kasus"] == 'Lainnya') ? 'selected' : ''; ?>>Lainnya</option>
        </select><br><br>

        <label>TANGGAL KEJADIAN</label>
        <input type="date" id="tanggal_kejadian" name="tanggal_kejadian" value="<?php echo $row["tanggal_kejadian"]; ?>"><br><br>

        <label>ALAMAT TKP</label><br>
        <textarea name="alamat_tkp"><?php echo $row["alamat_tkp"]; ?></textarea><br><br>

        <label>KECAMATAN</label>
        <select name="kecamatan">
          <option value="Banjarmasin Tengah" <?php echo ($row["kecamatan"] == 'Banjarmasin Tengah') ? 'selected' : ''; ?>>Banjarmasin Tengah</option>
          <option value="Banjarmasin Utara" <?php echo ($row["kecamatan"] == 'Banjarmasin Utara') ? 'selected' : ''; ?>>Banjarmasin Utara</option>
          <option value="Banjarmasin Timur" <?php echo ($row["kecamatan"] == 'Banjarmasin Timur') ? 'selected' : ''; ?>>Banjarmasin Timur</option>
          <option value="Banjarmasin Selatan" <?php echo ($row["kecamatan"] == 'Banjarmasin Selatan') ? 'selected' : ''; ?>>Banjarmasin Selatan</option>
          <option value="Banjarmasin Barat" <?php echo ($row["kecamatan"] == 'Banjarmasin Barat') ? 'selected' : ''; ?>>Banjarmasin Barat</option>
        </select><br><br>

        <label>NAMA PELAKU</label>
        <input type="text" id="nama_pelaku" name="nama_pelaku" value="<?php echo $row["nama_pelaku"]; ?>"><br><br>

        <label>NIK PELAKU</label>
        <input type="text" id="nik_pelaku" name="nik_pelaku" value="<?php echo $row["nik_pelaku"]; ?>"><br><br>

        <label>TTL PELAKU</label>
        <input type="text" id="ttl_pelaku" name="ttl_pelaku" value="<?php echo $row["ttl_pelaku"]; ?>"><br><br>

        <label>UMUR PELAKU</label>
        <input type="text" id="umur_pelaku" name="umur_pelaku" value="<?php echo $row["umur_pelaku"]; ?>"><br><br>

        <label>HUBUNGAN DENGAN KORBAN</label>
        <input type="text" id="hubungan_dengan_korban" name="hubungan_dengan_korban" value="<?php echo $row["hubungan_dengan_korban"]; ?>"><br><br>

        <label>ALAMAT PELAKU</label><br>
        <textarea name="alamat_pelaku"><?php echo $row["alamat_pelaku"]; ?></textarea><br><br>

        <label>PEKERJAAN PELAKU</label>
        <input type="text" id="pekerjaan_pelaku" name="pekerjaan_pelaku" value="<?php echo $row["pekerjaan_pelaku"]; ?>"><br><br>

        <label>STATUS PERKAWINAN PELAKU</label>
        <input type="text" id="status_perkawinan_pelaku" name="status_perkawinan_pelaku" value="<?php echo $row["status_perkawinan_pelaku"]; ?>"><br><br>

        <label>KONTAK PELAKU</label>
        <input type="text" id="kontak_pelaku" name="kontak_pelaku" value="<?php echo $row["kontak_pelaku"]; ?>"><br><br>

        <label>SATGAS</label>
        <input type="text" id="satgas" name="satgas" value="<?php echo $row["satgas"]; ?>"><br><br>

        <input type="submit" name="update" value="Update">
        <input type="reset" name="reset" value="Reset">
      </form>

    <?php
    } else {
      echo "Data not found.";
    }

    $conn->close();
    ?>

  </body>

  </html>


</body>

</html>