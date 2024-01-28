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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

  <script>
    $(document).ready(function() {
      var dataTable;

      // Initialize DataTable with AJAX
      // function initializeDataTable(filterValue) {
      function initializeDataTable(kecamatanFilter, jenisKasusFilter) {
        dataTable = $('#myDataTable').DataTable({
          "ajax": {
            "url": "tampil.php",
            "type": "POST",
            "data": {
              "kecamatan": kecamatanFilter,
              "jenis_kasus": jenisKasusFilter
            }
          },
          "columns": [{
              "data": "no_registrasi"
            },
            {
              "data": "nama_korban"
            },
            {
              "data": "nik_korban"
            },
            {
              "data": "jenis_kelamin_korban"
            },
            {
              "data": "ttl_korban"
            },
            {
              "data": "umur_korban"
            },
            {
              "data": "alamat"
            },
            {
              "data": "kontak_korban"
            },
            {
              "data": "kronologi_singkat"
            },
            {
              "data": "pekerjaan_korban"
            },
            {
              "data": "status_perkawinan_korban"
            },
            {
              "data": "jenis_kasus"
            },
            {
              "data": "tanggal_kejadian"
            },
            {
              "data": "alamat_tkp"
            },
            {
              "data": "kecamatan"
            },
            {
              "data": "nama_pelaku"
            },
            {
              "data": "nik_pelaku"
            },
            {
              "data": "ttl_pelaku"
            },
            {
              "data": "umur_pelaku"
            },
            {
              "data": "hubungan_dengan_korban"
            },
            {
              "data": "alamat_pelaku"
            },
            {
              "data": "pekerjaan_pelaku"
            },
            {
              "data": "status_perkawinan_pelaku"
            },
            {
              "data": "kontak_pelaku"
            },
            {
              "data": "satgas"
            },
            {
              "data": null,
              "render": function(data, type, row) {
                return `
              <button class='edit-btn' onclick='window.location.href="edit.php?id=${row.id}"'>Edit</button>
              <button class='hapus-btn' onclick='confirmDelete(${row.id})'>Hapus</button>
            `;
              }
            }
          ],
          "scrollX": true, // Enable horizontal scrolling
          "paging": true, // Enable pagination
          dom: 'Bfrtip',
          buttons: ['csv', 'excel', 'print'],
        });
      }

      // Initialize DataTable with the default filter value
      // initializeDataTable('');
      initializeDataTable('', '');

      // Update the table when the kecamatan dropdown changes
      // $('#kecamatanDropdown').on('change', function() {
      //   var selectedKecamatan = $(this).val();
      //   // Destroy the existing DataTable instance
      //   dataTable.destroy();
      //   // Initialize DataTable with the new filter value
      //   initializeDataTable(selectedKecamatan);
      // });
      $('#kecamatanDropdown').on('change', function() {
        var selectedKecamatan = $(this).val();
        // Destroy the existing DataTable instance
        dataTable.destroy();
        // Initialize DataTable with the new filter values
        initializeDataTable(selectedKecamatan, $('#jenisKasusDropdown').val());
      });

      $('#jenis_kasusDropdown').on('change', function() {
        var selectedJenisKasus = $(this).val();
        // Destroy the existing DataTable instance
        dataTable.destroy();
        // Initialize DataTable with the new filter values
        initializeDataTable($('#kecamatanDropdown').val(), selectedJenisKasus);
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
        <a href="lihat_data_kasus_dewasa.php">KASUS DEWASA</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">VERIFIKASI
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="../../verifikasi_akun/tampilan/verifikasi_akun.php">AKUN</a>
        <a href="../../verifikasi_laporan/tampilan/verifikasi_laporan.php">LAPORAN</a>
      </div>
    </div>

    <a href="../logout.php">LOGOUT</a>
  </div>

  <h2>LIHAT DATA KASUS DEWASA</h2>
  <hr>
  <br>

  <label for="kecamatanDropdown">Filter Kecamatan</label>
  <select name="kecamatan" id="kecamatanDropdown">
    <option value=''>-- Pilih Kecamatan--</option>
    <?php
    include '../../../koneksi.php';
    $sql_wilayah = "SELECT * FROM wilayah";
    $result_wilayah = $conn->query($sql_wilayah);
    if ($result_wilayah->num_rows > 0) {
      while ($row = $result_wilayah->fetch_assoc()) {
        $id = $row['id'];
        $kode_wilayah = $row['kode_wilayah'];
        $nama_wilayah = $row['nama_wilayah'];
        $kecamatan = $row['kecamatan'];
        echo "
            <option value='$kecamatan'>$kode_wilayah - $kecamatan</option>
            ";
      }
    } else {
      echo "<option>Tidak ada Nama Kecamatan</option>";
    }
    $conn->close();
    ?>
  </select><br><br>

  <label for="jenis_kasusDropdown">Filter Jenis Kasus</label>
  <select name="jenis_kasus" id="jenis_kasusDropdown">
    <option value=''>-- Pilih Jenis Kasus--</option>
    <?php
    include '../../../koneksi.php';
    $sql_jenis_kasus = "SELECT * FROM jenis_kasus";
    $result_jenis_kasus = $conn->query($sql_jenis_kasus);
    if ($result_jenis_kasus->num_rows > 0) {
      while ($row = $result_jenis_kasus->fetch_assoc()) {
        $id = $row['id'];
        $kode_jenis_kasus = $row['kode_jenis_kasus'];
        $jenis_kasus = $row['jenis_kasus'];
        echo "
            <option value='$jenis_kasus'>$kode_jenis_kasus - $jenis_kasus</option>
            ";
      }
    } else {
      echo "<option>Tidak ada Jenis Kasus</option>";
    }
    $conn->close();
    ?>
  </select><br><br>

  <table id="myDataTable">
    <thead>
      <tr>
        <th>NO. REGISTRASI</th>
        <th>NAMA KORBAN</th>
        <th>NIK KORBAN</th>
        <th>JENIS KELAMIN KORBAN</th>
        <th>TTL KORBAN</th>
        <th>UMUR KORBAN</th>
        <th>ALAMAT</th>
        <th>KONTAK KORBAN/WALI</th>
        <th>KRONOLOGI SINGKAT</th>
        <th>PEKERJAAN KORBAN</th>
        <th>STATUS PERKAWINAN KORBAN</th>
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
        <th>STATUS PERKAWINAN PELAKU</th>
        <th>KONTAK PELAKU</th>
        <th>SATGAS</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>

  <br>
  <!-- <button>
    <a target="_blank" href="cetak.php">CETAK</a>
  </button>
  <button>
    <a target="_blank" href="export_excel.php">EXCEL</a>
  </button> -->

</body>

</html>