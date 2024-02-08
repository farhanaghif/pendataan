<?php
include '../../../koneksi.php';
session_start();
$user_id = $_SESSION["id"];
$kecamatanFilter = isset($_POST['kecamatan']) ? $_POST['kecamatan'] : '';
$query = "SELECT no_registrasi, nama_korban, jenis_kasus, nama_pelaku, status_pengajuan 
          FROM kasus_anak WHERE status_pengajuan != 'Selesai' AND user_id = $user_id 
          UNION 
          SELECT no_registrasi, nama_korban, jenis_kasus, nama_pelaku, status_pengajuan 
          FROM kasus_dewasa WHERE status_pengajuan != 'Selesai' AND user_id = $user_id";
if (!empty($kecamatanFilter)) {
  $query .= " WHERE kecamatan = '$kecamatanFilter'";
}

$result = mysqli_query($conn, $query);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}
echo json_encode(['data' => $data]);
