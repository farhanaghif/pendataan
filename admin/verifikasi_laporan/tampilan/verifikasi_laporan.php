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
            },
            // {
            //   "data": null,
            //   "render": function(data, type, row) {
            //     return `
            //   <button class='edit-btn' onclick='window.location.href="edit_status_pengajuan.php?id=${row.id}"'>Edit</button>
            // `;
            //   }
            // }
            {
              "data": null,
              "render": function(data, type, row) {
                var statusPengajuan = row.status_pengajuan;
                var buttonClass = (statusPengajuan === "Sedang Diproses") ? "edit-btn-sedang-diproses" : "edit-btn-diterima";
                if (statusPengajuan == 'Selesai') {
                  return '-';
                } else if (statusPengajuan == 'Sedang Diproses') {
                  var statusDitolak = 'Ditolak';
                  return `
                      <button class='${buttonClass}' onclick='window.location.href="edit_status_pengajuan.php?no_registrasi=${row.no_registrasi}&status=${encodeURIComponent(statusPengajuan)}"'>Proses Kasus Sekarang</button>
                      <button class='${buttonClass}' onclick='window.location.href="edit_status_pengajuan.php?no_registrasi=${row.no_registrasi}&status=${encodeURIComponent(statusDitolak)}"'>Tolak</button>
                  `;
                } else {
                  return `
                      <button class='${buttonClass}' onclick='window.location.href="edit_status_pengajuan.php?no_registrasi=${row.no_registrasi}&status=${encodeURIComponent(statusPengajuan)}"'>Kasus Selesai</button>
                  `;
                }
              }
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

    <a href="../../../logout.php">LOGOUT</a>
  </div>

  <h2>STATUS VERIFIKASI LAPORAN</h2>
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
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>

  <br>

</body>

</html>