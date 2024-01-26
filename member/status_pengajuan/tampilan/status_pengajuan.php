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

    th {
      background-color: rgb(19, 110, 170);
      color: white;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }
  </style>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
  <script>
    $(document).ready(function() {
      var dataTable;

      // Initialize DataTable with AJAX
      function initializeDataTable(filterValue) {
        dataTable = $('#myDataTable').DataTable({
          "ajax": {
            "url": "tampil.php",
            "type": "POST",
            "data": {
              "kecamatan": filterValue
            }
          },
          "columns": [{
              "data": "no_registrasi"
            },
            {
              "data": "nama_korban"
            },
            {
              "data": "jenis_kasus"
            },
            {
              "data": "nama_pelaku"
            },
            {
              "data": "status_pengajuan"
            }
          ],
        });
      }

      // Initialize DataTable with the default filter value
      initializeDataTable('');

      // Update the table when the kecamatan dropdown changes
      $('#kecamatanDropdown').on('change', function() {
        var selectedKecamatan = $(this).val();
        // Destroy the existing DataTable instance
        dataTable.destroy();
        // Initialize DataTable with the new filter value
        initializeDataTable(selectedKecamatan);
      });
    });
  </script>
</head>

<body style="background-color:white;">

  <div class="navbar">
    <a href="../../">PROFIL</a>
    <a href="../../ganti_password/tampilan/ganti_password.php">GANTI PASSWORD</a>
    <div class="dropdown">
      <button class="dropbtn">PENGAJUAN LAPORAN
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="../../kasus_anak/tampilan/tambah_data_kasus_anak.php">KASUS ANAK</a>
        <a href="../../kasus_dewasa/tampilan/tambah_data_kasus_dewasa.php">KASUS DEWASA</a>
      </div>
    </div>
    <a href="status_pengajuan.php">STATUS PENGAJUAN</a>
    <a href="../../../logout.php">LOGOUT</a>
  </div>

  <h2>STATUS PENGAJUAN</h2>
  <hr>
  <br>

  <table id="myDataTable">
    <thead>
      <tr>
        <th>NO. REGISTRASI</th>
        <th>NAMA KORBAN</th>
        <th>JENIS KASUS</th>
        <th>NAMA PELAKU</th>
        <th>STATUS PENGAJUAN</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>

  <br>

</body>

</html>