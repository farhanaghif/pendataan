<?php
include '../../../koneksi.php';
$kecamatanFilter = isset($_POST['kecamatan']) ? $_POST['kecamatan'] : '';
$query = "SELECT * FROM kasus_dewasa";
if (!empty($kecamatanFilter)) {
  $query .= " WHERE kecamatan = '$kecamatanFilter'";
}

$result = mysqli_query($conn, $query);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}
echo json_encode(['data' => $data]);
