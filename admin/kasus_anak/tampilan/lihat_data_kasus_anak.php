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

    table {
      border-collapse: collapse;
      width: 100%;
    }

    table,
    th,
    td {
      border: 1px solid black;
    }

    th,
    td {
      padding: 10px;
      text-align: center;
      padding: 10px;
    }

    th {
      background-color: rgb(19, 110, 170);
      color: white;
    }

    tr:hover {
      background-color: #f5f5f5;
    }

    .edit-btn,
    .hapus-btn {
      display: inline-block;
      padding: 5px 10px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      border: 1px solid #ccc;
      background-color: #f2f2f2;
      color: #333;
    }

    .edit-btn:hover,
    .hapus-btn:hover {
      background-color: #ddd;
    }
  </style>
  <script>
    function confirmDelete(id) {
      if (confirm("Apakah Anda yakin ingin menghapus data?")) {
        window.location.href = "../aksi/hapus.php?id=" + id;
      }
    }
  </script>
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
        <a href="tambah_data_kasus_anak.php">TAMBAH DATA KASUS ANAK</a>
        <a href="../../kasus_dewasa/tampilan/tambah_data_kasus_dewasa.php">TAMBAH DATA KASUS DEWASA</a>
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
        <a href="lihat_data_kasus_anak.php">LIHAT DATA KASUS ANAK</a>
        <a href="../../kasus_dewasa/tampilan/lihat_data_kasus_dewasa.php">LIHAT DATA KASUS DEWASA</a>
      </div>
    </div>
  </div>

  <h2>Lihat Data Kasus Anak</h2>
  <hr>
  <br>

  <table>
    <tr>
      <th>NO. REGISTRASI</th>
      <th>NAMA KORBAN</th>
      <th>JENIS KELAMIN KORBAN</th>
      <th>TTL KORBAN</th>
      <th>UMUR KORBAN</th>
      <th>ALAMAT</th>
      <th>KONTAK KORBAN/WALI</th>
      <th>KRONOLOGI SINGKAT</th>
      <th>NAMA WALI KORBAN</th>
      <th>NIK WALI</th>
      <th>JENIS KASUS</th>
      <th>TANGGAL KEJADIAN</th>
      <th>ALAMAT TKP</th>
      <th>KECAMATAN</th>
      <th>NAMA PELAKU</th>
      <th>NIK PELAKU</th>
      <th>TTL PELAKU</th>
      <th>UMUR PELAKU</th>
      <th>HUBUNGAN DENGAN KORBAN</th>
      <th>ALAMAT PELAKU</th>
      <th>PEKERJAAN PELAKU</th>
      <th>KONTAK PELAKU</th>
      <th>SATGAS</th>
      <th>ACTION</th>
    </tr>
    <?php include 'tampil.php'; ?> <!-- menambahkan kode ini untuk menghubungkan dengan tampil.php -->
  </table>

  <br>
  <button>
    <a target="_blank" href="cetak.php">CETAK</a>    
  </button>
  <button>
    <a target="_blank" href="export_excel.php">EXCEL</a>
  </button>

</body>

</html>