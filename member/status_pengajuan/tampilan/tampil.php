<?php
include '../../../koneksi.php';
$kecamatanFilter = isset($_POST['kecamatan']) ? $_POST['kecamatan'] : '';
$query = "SELECT no_registrasi, nama_korban, jenis_kasus, nama_pelaku, status_pengajuan
FROM kasus_anak
WHERE status_pengajuan != 'Selesai'
UNION
SELECT no_registrasi, nama_korban, jenis_kasus, nama_pelaku, status_pengajuan
FROM kasus_dewasa
WHERE status_pengajuan != 'Selesai'
";
if (!empty($kecamatanFilter)) {
  $query .= " WHERE kecamatan = '$kecamatanFilter'";
}

$result = mysqli_query($conn, $query);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}
echo json_encode(['data' => $data]);
