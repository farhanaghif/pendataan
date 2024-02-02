-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2024 pada 03.19
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendataan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kasus`
--

CREATE TABLE `jenis_kasus` (
  `id` int(11) NOT NULL,
  `kode_jenis_kasus` varchar(25) NOT NULL,
  `jenis_kasus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_kasus`
--

INSERT INTO `jenis_kasus` (`id`, `kode_jenis_kasus`, `jenis_kasus`) VALUES
(4, '001', 'Kekerasan Fisik'),
(5, '002', 'Kekerasan Psikis'),
(6, '003', 'Kekerasan Seksual'),
(7, '004', 'Ekonomi'),
(8, '005', 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus_anak`
--

CREATE TABLE `kasus_anak` (
  `id` int(11) NOT NULL,
  `no_registrasi` varchar(50) NOT NULL,
  `nama_korban` varchar(50) NOT NULL,
  `jenis_kelamin_korban` varchar(10) NOT NULL,
  `ttl_korban` varchar(50) NOT NULL,
  `umur_korban` int(11) NOT NULL,
  `kronologi_singkat` text NOT NULL,
  `alamat` text NOT NULL,
  `nama_wali_korban` varchar(50) NOT NULL,
  `nik_wali` varchar(17) NOT NULL,
  `kontak_korban` varchar(15) NOT NULL,
  `jenis_kasus` varchar(25) NOT NULL,
  `tanggal_kejadian` date NOT NULL,
  `alamat_tkp` text NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `nama_pelaku` varchar(50) NOT NULL,
  `nik_pelaku` varchar(17) NOT NULL,
  `ttl_pelaku` varchar(50) NOT NULL,
  `umur_pelaku` int(11) NOT NULL,
  `hubungan_dengan_korban` varchar(50) NOT NULL,
  `alamat_pelaku` text NOT NULL,
  `pekerjaan_pelaku` varchar(25) NOT NULL,
  `kontak_pelaku` varchar(15) NOT NULL,
  `satgas` varchar(50) NOT NULL,
  `status_pengajuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kasus_anak`
--

INSERT INTO `kasus_anak` (`id`, `no_registrasi`, `nama_korban`, `jenis_kelamin_korban`, `ttl_korban`, `umur_korban`, `kronologi_singkat`, `alamat`, `nama_wali_korban`, `nik_wali`, `kontak_korban`, `jenis_kasus`, `tanggal_kejadian`, `alamat_tkp`, `kecamatan`, `nama_pelaku`, `nik_pelaku`, `ttl_pelaku`, `umur_pelaku`, `hubungan_dengan_korban`, `alamat_pelaku`, `pekerjaan_pelaku`, `kontak_pelaku`, `satgas`, `status_pengajuan`) VALUES
(1, '001/F/UPTD-PKA/BJM/I/2023', 'Sultan Isya Mahta', 'Laki-Laki', 'Banjarmasin, 27-01-2016', 7, 'Korban dalam kecelakaan lalu lintas', 'Jl. Antasan Raden Gg. Harmoni No.4 RT 024 / RW 002 Kelurahan Teluk Tiram Kecamatan Banjarmasin Tengah Kota Banjarmasin', 'Unit Laka Lantas Polresta Banjarmasin', '-', '-', 'Lainnya', '2022-12-03', 'Jalan AMD Komplek Permata Regency Kecubung Raya RT 048 RW 003 Kelurahan Pemurus Dalam Kecamatan Banjarmasin Selatan Kota Banjarmasin', 'Banjarmasin Selatan', 'Nurrahman', '6371010810920016', 'Rantau, 08-10-1992', 31, 'Orang Lain', 'Jl. Amd Komplek Permata Regency Kecubung VII Blok C No.125 RT 048 RW 003 Kelurahan Pemurus Dalam Kecamatan Banjarmasin Selatan Kota Banjarmasin\r\n', 'Karyawan Honorer', '-', 'Hayati', 'Selesai'),
(2, '002/F/UPTD-PKA/BJM/II/2023', 'Afika Zahra', 'Perempuan', 'Banjarmasin, 07-06-2014', 9, 'Kekerasan fisik berupa cubitan, pukulan, dan kata-kata kasar dari pemilik panti tempat anak tinggal.', 'Jalan Kelayan A Gang Srikandi RT 020 / RW 002 Kelurahan Kelayan Dalam Kecamatan Banjarmasin Selatan Kota Banjarmasin', 'DPPKBPMPPA Kota Banjarbaru', '-', '-', 'Kekerasan Fisik', '0000-00-00', 'Griya Yatim Dhuafa Kelurahan Mentaos Kota Banjarbaru', 'Banjarmasin Tengah', '-', '-', '-', 0, 'Orang Lain', 'Mentaos', '-', '-', 'Markan', 'Selesai'),
(22, '003/F/UPTD-PKA/BJM/II/2024', 'Aqilla Fariza', 'Perempuan', 'Banjarmasin, 23-10-2017', 5, 'Infeksi alat kelamin akibat dugaan pelecehan seksual oleh teman satu kelas', 'Jalan Tanjung Berkat RT 015/RW 001 Kelurahan Teluk Tiram Banjarmasin Kota Banjarmasin', '', '', '085715368969', 'Kekerasan Seksual', '2023-09-29', '', 'Banjarmasin Barat', '', '', '', 0, '', '', '', '', 'Markhan', 'Diterima'),
(23, '004/F/UPTD-PKA/BJM/II/2024', 'Siti Maryam', 'Perempuan', 'Kandangan, 19-02-2015', 8, 'Korban mendapat tindakan kekerasan fisik oleh orang tua angkatnya', 'Jalan Gatot Subroto 6 Jalur 6 RT.35 No.75 Kelurahan Kuripan Kecamatan Banjarmasin Timur Kota Banjarmasin', 'Lili (Guru Siti Mariam)', '', '', 'Kekerasan Fisik', '2023-12-13', 'Jalan Gatot Subroto 6 Jalur 6 RT.35 No.75 Kelurahan Kuripan Kecamatan Banjarmasin Timur Kota Banjarmasin', 'Banjarmasin Timur', 'Risma Islamiah dan Mursidi', '', '', 0, 'Orang Tua Angkat', 'Jalan Gatot Subroto 6 Jalur 6 RT.35 No.75 Kelurahan Kuripan Kecamatan Banjarmasin Timur Kota Banjarmasin', '', '', 'Hayati, Irvan, Markhan, Rizki', 'Diterima'),
(24, '005/F/UPTD-PKA/BJM/II/2024', 'Nur Alisa Fitri', 'Perempuan', 'Banjarmasin, 23-09-2016', 7, 'Kekerasan seksual terhadap anak dibawah umur', 'Jalan Muara Tatah Belayung RT.046 RW.002 Kelurahan Pemurus Dalam Kecamatan Banjarmasin Selatan Kota Banjarmasin', '', '', '', 'Kekerasan Seksual', '2023-12-13', '', 'Banjarmasin Selatan', '', '', '', 0, 'Orang Lain', '', '', '', '', 'Diterima'),
(25, '006/F/UPTD-PKA/BJM/II/2024', 'Nabila Asyura Zahra', 'Perempuan', 'Banjarmasin, 20-09-2018', 5, 'Dugaan terjadinya pelecehan seksual hingga persetubuhan dibawah umur oleh sepupu yang tinggal serumah', 'Jalan Pangeran Antasari Gang VI Simpang Penghulu RT.13 RW.002 Kelurahan Kelayan Luar Kecamatan Banjarmasin Tengah Kota Banjarmasin', '', '', '0813-4821-5407 ', 'Kekerasan Seksual', '2023-12-29', 'Jalan Pangeran Antasari Gang VI Simpang Penghulu RT.13 RW.002 Kelurahan Kelayan Luar Kecamatan Banjarmasin Tengah Kota Banjarmasin', 'Banjarmasin Tengah', '', '', '', 0, 'Sepupu', '', '', '', '', 'Diterima'),
(26, '007/F/UPTD-PKA/BJM/II/2024', 'Haliza Noor Sifa ', 'Perempuan', '', 6, 'Korban dirazia Satpol PP saat mengemis di jalanan', '', '', '', '', 'Kekerasan Psikis', '2023-12-29', '', 'Banjarmasin Tengah', '', '', '', 0, '', '', '', '', '', 'Diterima'),
(27, '008/F/UPTD-PKA/BJM/II/2024', 'Kharin Khairunnisa Fitri Al-Banjari', 'Perempuan', '', 6, 'Korban dipaksa ngemis di trotoar jalan, dengan hasil digunakan oleh ibu. Korban sering mendapatkan kekerasan fisik dari ibu dan ayah kandung', 'Jalan Pekapuran Baru A RT.010 RW.002 Kelurahan Sungai Baru Kecamatan Banjarmasin Tengah Kota Banjarmasin', '', '', '', 'Kekerasan Fisik', '2023-08-02', '', 'Banjarmasin Tengah', '', '', '', 0, '', '', '', '', '', 'Diterima'),
(28, '009/F/UPTD-PKA/BJM/II/2024', 'Pauline Augusta Mahin', 'Perempuan', 'Banjarmasin, 01-08-2018', 5, 'korban tidak dipertemukan dengan ayah kandung dan mendapat kekerasan fisik dan psikis dari ibu kandung ( diasuh dengan kurang baik)', 'Jalan Ramin 1 No.45 Komplek Banjar Indah Permai. Kelurahan Pemurus dalam Kecamatan Banjarmasin Selatan Kota Banjarmasin', '', '', '0822-5591-3397 ', 'Kekerasan Psikis', '2023-09-06', 'Jalan Tembikar Kanan, Komplek Bumi Pesona No.36 Kelurahan Pemurus Dalam Kecamatan Banjarmasin Selatan, Kota Banjarmasin', 'Banjarmasin Selatan', '', '', '', 0, 'Ibu Kandung', '', '', '', '', 'Diterima'),
(29, '010/F/UPTD-PKA/BJM/II/2024', 'Aulia Rahmah', 'Perempuan', 'Banjarmasin, 02-10-2014', 8, 'Penganiayaan yang dilakukan oleh orang tidak dikenal karena tidak taat dengan aturan lalu lintas', 'Jalan AMD Komplek Sudirapi Perumahan Waringin Permai Blok D No.3 RT 020 RW 002 Kelurahan Alalak Utara Kecamatan Banjarmasin Utara Kota Banjarmasin', 'Helda Rosita', '6371055510850007', '', 'Kekerasan Fisik', '2023-05-22', 'Jalan HKSN', 'Banjarmasin Tengah', '', '', '', 0, 'Orang Lain', '', '', '', '', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus_dewasa`
--

CREATE TABLE `kasus_dewasa` (
  `id` int(11) NOT NULL,
  `no_registrasi` varchar(50) NOT NULL,
  `nama_korban` varchar(50) NOT NULL,
  `nik_korban` varchar(17) NOT NULL,
  `jenis_kelamin_korban` varchar(10) NOT NULL,
  `ttl_korban` varchar(50) NOT NULL,
  `umur_korban` int(11) NOT NULL,
  `kronologi_singkat` text NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan_korban` varchar(25) NOT NULL,
  `status_perkawinan_korban` varchar(20) NOT NULL,
  `kontak_korban` varchar(15) NOT NULL,
  `jenis_kasus` varchar(25) NOT NULL,
  `tanggal_kejadian` date NOT NULL,
  `alamat_tkp` text NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `nama_pelaku` varchar(50) NOT NULL,
  `nik_pelaku` varchar(17) NOT NULL,
  `ttl_pelaku` varchar(50) NOT NULL,
  `umur_pelaku` int(11) NOT NULL,
  `hubungan_dengan_korban` varchar(50) NOT NULL,
  `alamat_pelaku` text NOT NULL,
  `pekerjaan_pelaku` varchar(25) NOT NULL,
  `status_perkawinan_pelaku` varchar(25) NOT NULL,
  `kontak_pelaku` varchar(15) NOT NULL,
  `satgas` varchar(50) NOT NULL,
  `status_pengajuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kasus_dewasa`
--

INSERT INTO `kasus_dewasa` (`id`, `no_registrasi`, `nama_korban`, `nik_korban`, `jenis_kelamin_korban`, `ttl_korban`, `umur_korban`, `kronologi_singkat`, `alamat`, `pekerjaan_korban`, `status_perkawinan_korban`, `kontak_korban`, `jenis_kasus`, `tanggal_kejadian`, `alamat_tkp`, `kecamatan`, `nama_pelaku`, `nik_pelaku`, `ttl_pelaku`, `umur_pelaku`, `hubungan_dengan_korban`, `alamat_pelaku`, `pekerjaan_pelaku`, `status_perkawinan_pelaku`, `kontak_pelaku`, `satgas`, `status_pengajuan`) VALUES
(1, '001/F/UPTD-PP/BJM/I/2023', 'Nirmala Sari, S.pd', '6371016712710009', 'Perempuan', 'Semarang, 27-12-1971', 52, 'Klien mendapatkan perlakuan kekerasan oleh anaknya sendiri, dikarenakan keinginan anaknya untuk tinggal bersama kakak dan ayahnya belum terpenuhi untuk tinggal bersama. Anak agresif dn mengalami OCD dan sering memaksa ibu untuk memenuhi semua keinginannya.', 'Jl. Veteran No.08 RT. 021 RW.001 Kelurahan Melayu Kecamatan Banjarmasin Tengah Kota Banjarmasin', 'Bekerja', 'Kawin', '0857-9672-6545', 'Kekerasan Fisik', '0000-00-00', 'Jl. Veteran No.08 RT. 021 RW.001 Kelurahan Melayu Kecamatan Banjarmasin Tengah Kota Banjarmasin', 'Banjarmasin Tengah', 'Edward Januar Gunarta', '637101540110003', 'Banjarmasin, 14-01-2010', 14, 'Anak Kandung', 'Jl. Veteran No.08 RT. 021 RW.001 Kelurahan Melayu Kecamatan Banjarmasin Tengah Kota Banjarmasin', 'Pelajar', 'Belum Kawin', '-', 'Hayati', 'Selesai'),
(18, '002/F/UPTD-PP/BJM/II/2024', 'Isabella Damayanti', '', '', '', 27, 'Tidak bisa bertemu dengan anak pasca berpisah dan bercerai dengan mantan suami kurang lebih 5 tahun', 'Jalan Pramuka Komplek Hidayatullah RT 11 RW 001 Kelurahan Pemurus Luar Kecamatan Banjarmasin Timur / Jalan Kelayan B Gang Setia Bersama No.40 Kelurahan Kelayan Tengah Kecamatan Banjarmasin Selatan. ', 'Bekerja', 'Cerai', '082253835358', 'Kekerasan Psikis', '2019-01-01', '', 'Banjarmasin Selatan', 'Haris', '', '', 30, 'Mantan Suami', 'Jalan tatah Bangkal Luar RT.034 RW.002 Kelurahan Kelayan Timur Kecamatan Banjarmasin Selatan Kota Banjarmasin', 'Mekanik', 'Cerai', '', 'Raudah dan Noriani', 'Diterima'),
(19, '003/F/UPTD-PP/BJM/II/2024', 'Shella', '6304076306090001', 'Perempuan', 'Banjarmasin, 23-06-2009', 13, 'Disetubuhi oleh pelaku (pacar) di hotel royal borneo banjarmasin', 'Jalan belitung darat Gang 17 Juli Kelurahan Kuin Cerucuk Kecamatan Banjarmasin Barat Kota Banjarmasin', 'Pelajar', 'Belum Kawin', '0838-2746-7593', 'Kekerasan Seksual', '2023-03-05', 'Hotel Borneo Royal Banjarmasin', 'Banjarmasin Tengah', 'M. Iqbal', '', '', 17, 'Pacar', '', 'Buruh Harian Lepas', 'Belum Kawin', '', '', 'Selesai'),
(20, '004/F/UPTD-PP/BJM/II/2024', 'Elly Yanti', '6371045303950005', 'Perempuan', 'Banjarmasin, 13-03-1995', 28, 'Perebutan hak asuh anak', 'Jalan Alalak Tengah No 42 RT 003 RW 001 Kelurahan Alalak Tengah Kecamatan Banjarmasin Utara Kota Banjarmasin', 'Bekerja', 'Cerai', '083879300159 / ', 'Kekerasan Psikis', '2023-04-22', '', 'Banjarmasin Utara', 'Muhammad Iskandarsyah Muharram', '6371040908910011', 'Banjarmasin, 09-08-1991', 31, 'Mantan Suami', 'Jalan Alalak Tengah No. 42 RT 015 RW 002 Kelurahan Alalak Tengah  Kecamatan Banjarmasin Utara Kota Banjarmasin', 'Wiraswasta', 'Cerai', '083844863336 / ', 'Heriyadi', 'Diterima'),
(21, '005/F/UPTD-PP/BJM/II/2024', 'Aisiyah Ratu', '', 'Perempuan', '', 35, 'Penganiayaan yang dilakukan oleh suami siri', 'Jalan Kemiri Sungai Andai RT 68 Kelurahan Sungai Andai Kecamatan Banjarmasin Barat Kota Banjarmasin ', 'Tidak Bekerja', 'Kawin', '089563508350', 'Kekerasan Fisik', '2023-05-17', 'Jalan Kemiri Sungai Andai RT 68 Kelurahan Sungai Andai Kecamatan Banjarmasin Barat Kota Banjarmasin ', 'Banjarmasin Barat', '', '', '', 0, 'Suami Siri', '', '', '', '', '', 'Selesai'),
(22, '006/F/UPTD-PP/BJM/II/2024', 'Mega Wati', '6371044910000001', 'Perempuan', 'Banjarmasin, 09-10-2000', 22, 'Penganiayaan berat yang dilakukan oleh suami', 'Jalan Alalak Selatan RT.007 / RW.001 Kelurahan Alalak Selatan, Kecamatan Banajrmasin Utara Kota Banjarmasin', 'Lainnya', 'Kawin', '0878-5451-6071', 'Kekerasan Fisik', '2023-07-01', 'Alalak Selatan RT.07', 'Banjarmasin Utara', 'Said Muhammad Yusuf', '6371040404950012', 'Banjarmasin, 02-04-1995', 28, 'Suami', 'Jalan Alalak Selatan RT.007 RW.001 Kelurahan Alalak Selatan Kecamatan Banajrmasin Selatan Kota Banjarmasin', 'Wiraswasta', 'Kawin', '', '', 'Diterima'),
(23, '007/F/UPTD-PP/BJM/II/2024', 'Nadella', '6371034810080005', 'Perempuan', 'Sungai Lulut, 08-10-2008', 14, 'Anak dirazia Satpol PP Kabupaten Tanah Laut saat sedang mengoplos minuman keras dan yang bersangkutan didapatkan merupakan PSP (penyuka sesama perempuan)', 'Jalan Sutoyo Gang Rahayu RT 11 RW 1 Kelurahan Pelambuan Kecamatan Banjarmasin Barat Kota Banjarmasin', 'Pelajar', 'Belum Kawin', '082155373292', 'Lainnya', '2023-08-30', '', 'Banjarmasin Barat', '', '', '', 0, '', '', '', '', '', '', 'Diterima'),
(24, '008/F/UPTD-PP/BJM/II/2024', 'Rizna Handayani', '6371096801730004', 'Perempuan', 'Banjarmasin, 28-01-1973', 50, 'Mendapatkan kekerasan fisik dari suami sah berupa pukulan hingga cedera', 'Jalan Sungai Andai Komplek Andai Jaya Persada No 131/B3 RT 33 Kelurahan Sungai Andai Banjarmasin Utara Kota Banjarmasin', 'Bekerja', 'Kawin', '0821-5462-5644', 'Kekerasan Fisik', '2023-09-29', 'Jalan Sungai Andai Komplek Andai Jaya Persada No 131/B3 RT 33 Kelurahan Sungai Andai Banjarmasin Utara Kota Banjarmasin', 'Banjarmasin Utara', 'Ichwansyah', '6371042206710007', 'Banjarmasin, 22-06-1971', 0, 'Suami', '', '', '', '', '', 'Diterima'),
(25, '009/F/UPTD-PP/BJM/II/2024', 'Lisa Ariani', '6304054907020001', 'Perempuan', 'Berangas, 22-02-2002', 21, 'KDRT yang dilakukan oleh kakak sepupu', 'Jalan Tembus Mantuil Gang Hariti RT.16 Kelurahan Kelayan Selatan Kecamatan Banjarmasin Selatan Kota Banjarmasin', 'Pelajar', 'Belum Kawin', '083150081373', 'Kekerasan Fisik', '2023-10-10', '', 'Banjarmasin Selatan', '', '', '', 0, '', '', '', '', '', '', 'Diterima'),
(26, '010/F/UPTD-PP/BJM/II/2024', 'Mistriah', '', 'Perempuan', '', 34, 'Korban mengalami kekerasan fisik, perselingkuhan dan dipisahkan dari anak (dibawa kabur) oleh suami dan tidak mau dipertemukan', 'Jalan Veteran Gang 7 Daha RT.10 RW.001 Kelurahan Kuripan Kecamatan Banjarmasin Timur Kota Banjarmasin', 'Lainnya', 'Kawin', '085705787217', 'Kekerasan Fisik', '2023-12-29', 'Jalan Veteran Gang 7 Daha RT.10 RW.001 Kelurahan Kuripan Kecamatan Banjarmasin Timur Kota Banjarmasin', 'Banjarmasin Timur', '', '', '', 0, 'Suami', '', '', '', '', '', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status_verifikasi` int(11) NOT NULL,
  `foto_profil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nik`, `username`, `nama`, `role`, `alamat`, `telp`, `password`, `status_verifikasi`, `foto_profil`) VALUES
(1, '12345', 'admin', 'zidan', 'admin', 'Handil Bakti', '0812345', 'admin123', 1, 'logo-uniska-ok.png'),
(2, '23456', 'user1', 'user1', 'user', '-', '0823456', 'user1', 1, NULL),
(8, '1', '1', '1', 'user', '1', '1', '1', 0, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah`
--

CREATE TABLE `wilayah` (
  `id` int(11) NOT NULL,
  `kode_wilayah` varchar(25) NOT NULL,
  `nama_wilayah` varchar(50) NOT NULL,
  `kecamatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wilayah`
--

INSERT INTO `wilayah` (`id`, `kode_wilayah`, `nama_wilayah`, `kecamatan`) VALUES
(5, '001', 'Banjarmasin Tengah', 'Banjarmasin Tengah'),
(6, '002', 'Banjarmasin Utara', 'Banjarmasin Utara'),
(7, '003', 'Banjarmasin Timur', 'Banjarmasin Timur'),
(8, '004', 'Banjarmasin Selatan', 'Banjarmasin Selatan'),
(9, '005', 'Banjarmasin Barat', 'Banjarmasin Barat');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_kasus`
--
ALTER TABLE `jenis_kasus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kasus_anak`
--
ALTER TABLE `kasus_anak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kasus_dewasa`
--
ALTER TABLE `kasus_dewasa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indeks untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_kasus`
--
ALTER TABLE `jenis_kasus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kasus_anak`
--
ALTER TABLE `kasus_anak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `kasus_dewasa`
--
ALTER TABLE `kasus_dewasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
