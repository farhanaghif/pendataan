<?php
include '../../../koneksi.php';
$kecamatanFilter = isset($_POST['kecamatan']) ? $_POST['kecamatan'] : '';
$jenisKasusFilter = isset($_POST['jenis_kasus']) ? $_POST['jenis_kasus'] : '';

$query = "SELECT * FROM kasus_dewasa WHERE 1";

// Add kecamatan filter to the query
if (!empty($kecamatanFilter)) {
  $query .= " AND kecamatan = '$kecamatanFilter'";
}

// Add jenis_kasus filter to the query
if (!empty($jenisKasusFilter)) {
  $query .= " AND jenis_kasus = '$jenisKasusFilter'";
}

$result = mysqli_query($conn, $query);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}
echo json_encode(['data' => $data]);
