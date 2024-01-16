<?php
include '../../../koneksi.php';
$sql = "SELECT * FROM kasus_anak";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row["no_registrasi"] . "</td>
            <td>" . $row["nama_korban"] . "</td>
            <td>" . $row["umur_korban"] . "</td>
            <td>" . $row["alamat"] . "</td>
            <td>" . $row["nama_wali_korban"] . "</td>
            <td>" . $row["nik_wali"] . "</td>
            <td>" . $row["kontak_korban"] . "</td>
            <td>" . $row["tanggal_kejadian"] . "</td>
            <td>" . $row["kronologi_singkat"] . "</td>
            <td>" . $row["alamat_tkp"] . "</td>
            <td>" . $row["nama_pelaku"] . "</td>
            <td>" . $row["nik_pelaku"] . "</td>
            <td>" . $row["satgas"] . "</td>
          </tr>";
  }
} else {
  echo "<tr><th colspan='8'>0 results</th></tr>";
}
$conn->close();
