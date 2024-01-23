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
        <a href="../../jenis_kasus/tampilan/tambah_data_jenis_kasus.php">JENIS KASUS</a>
        <a href="../../wilayah/tampilan/tambah_data_wilayah.php">WILAYAH</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">LIHAT DATA
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="../../kasus_anak/tampilan/lihat_data_kasus_anak.php">KASUS ANAK</a>
        <a href="../../kasus_dewasa/tampilan/lihat_data_kasus_dewasa.php">KASUS DEWASA</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">VERIFIKASI
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="../../verifikasi_akun/tampilan/verifikasi_akun.php">AKUN</a>
        <a href="verifikasi_laporan.php">LAPORAN</a>
      </div>
    </div>
    
    <a href="../logout.php">LOGOUT</a>
  </div>

  <h2>STATUS VERIFIKASI LAPORAN</h2>
  <hr>
  <br>

</body>

</html>