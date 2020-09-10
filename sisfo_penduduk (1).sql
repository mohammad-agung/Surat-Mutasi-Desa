-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Sep 2020 pada 02.16
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo_penduduk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tanggal_buat` timestamp NOT NULL DEFAULT current_timestamp(),
  `tanggal_pembaruan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_user`, `nama_user`, `username`, `password`, `tanggal_buat`, `tanggal_pembaruan`, `status`) VALUES
(1, 'Moh Chaesar Budi Agung', 'admin', '$2y$10$1b2XSAkS9gQntaA58g2LKuIUmoiiFfVjP1uA0dTX8PseAAWlsB..i', '2020-08-20 10:03:41', '2020-09-08 08:44:58', 1),
(16, 'Admin Dua', 'admindua', '$2y$10$1b2XSAkS9gQntaA58g2LKuIUmoiiFfVjP1uA0dTX8PseAAWlsB..i', '2020-08-20 10:03:41', '2020-09-08 08:49:03', 1),
(17, 'Admin Tiga', 'admintiga', '$2y$10$1b2XSAkS9gQntaA58g2LKuIUmoiiFfVjP1uA0dTX8PseAAWlsB..i', '2020-08-20 10:03:41', '2020-09-08 08:48:59', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_arsip_datang`
--

CREATE TABLE `tbl_arsip_datang` (
  `id_arsip_datang` bigint(20) NOT NULL,
  `id_pemohon` bigint(20) NOT NULL,
  `nama_pemohon` varchar(255) NOT NULL,
  `alamat_asal` varchar(100) NOT NULL,
  `alamat_tujuan` varchar(100) NOT NULL,
  `kelurahan_asal` varchar(100) NOT NULL,
  `kelurahan_tujuan` varchar(100) NOT NULL,
  `kecamatan_asal` varchar(100) NOT NULL,
  `kecamatan_tujuan` varchar(100) NOT NULL,
  `kota_asal` varchar(100) NOT NULL,
  `kota_tujuan` varchar(100) NOT NULL,
  `provinsi_asal` varchar(100) NOT NULL,
  `provinsi_tujuan` varchar(100) NOT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `tanggal_arsip` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_arsip_datang`
--

INSERT INTO `tbl_arsip_datang` (`id_arsip_datang`, `id_pemohon`, `nama_pemohon`, `alamat_asal`, `alamat_tujuan`, `kelurahan_asal`, `kelurahan_tujuan`, `kecamatan_asal`, `kecamatan_tujuan`, `kota_asal`, `kota_tujuan`, `provinsi_asal`, `provinsi_tujuan`, `nomor_surat`, `id_petugas`, `tanggal_arsip`, `status`) VALUES
(5, 2, 'La Burengkeng', 'Jalan Jati No 10 A', 'Jalan Garuda No 36', 'Kelurahan Biromaru', 'Kel. Buluri', 'Kec. Nunu Selatan', 'Kecamatan Solong', 'Kabupaten Donggala', 'Kota Bandung', 'Sulawesi Tengah', 'Bali', '70/70/08/md', 1, '2020-09-10', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_arsip_pindah`
--

CREATE TABLE `tbl_arsip_pindah` (
  `id_arsip_pindah` bigint(20) NOT NULL,
  `id_pemohon` bigint(20) NOT NULL,
  `nama_pemohon` varchar(255) NOT NULL,
  `nomor_kartu_keluarga` varchar(18) NOT NULL,
  `nama_kepala_keluarga` varchar(255) NOT NULL,
  `alamat_asal` varchar(100) NOT NULL,
  `alamat_tujuan` varchar(100) NOT NULL,
  `kelurahan_asal` varchar(100) NOT NULL,
  `kelurahan_tujuan` varchar(100) NOT NULL,
  `kecamatan_asal` varchar(100) NOT NULL,
  `kecamatan_tujuan` varchar(100) NOT NULL,
  `kota_asal` varchar(100) NOT NULL,
  `kota_tujuan` varchar(100) NOT NULL,
  `provinsi_asal` varchar(100) NOT NULL,
  `provinsi_tujuan` varchar(100) NOT NULL,
  `status_kk` varchar(150) NOT NULL,
  `alasanpindah` varchar(255) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `tanggal_arsip` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_arsip_pindah`
--

INSERT INTO `tbl_arsip_pindah` (`id_arsip_pindah`, `id_pemohon`, `nama_pemohon`, `nomor_kartu_keluarga`, `nama_kepala_keluarga`, `alamat_asal`, `alamat_tujuan`, `kelurahan_asal`, `kelurahan_tujuan`, `kecamatan_asal`, `kecamatan_tujuan`, `kota_asal`, `kota_tujuan`, `provinsi_asal`, `provinsi_tujuan`, `status_kk`, `alasanpindah`, `id_petugas`, `tanggal_arsip`, `status`) VALUES
(29, 1, 'Moh Chaesar Budi Agung', '7271022005090051', 'Hermansyah', 'Jalan Sungai Sausu No. 21 A', 'Jalan Soharso No.38', 'Ujuna', 'Kelurahan Nunu', 'Palu Barat', 'Palu Timur', 'Kota Palu', 'Kota Palu', 'Sulawesi Tengah', 'Sulawesi Tengah', 'Nomor Kartu Keluarga Tetap', 'Pekerjaan', 1, '2020-09-10', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id_contact` int(11) NOT NULL,
  `alamat` mediumtext NOT NULL,
  `email` varchar(200) NOT NULL,
  `telepon` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_contact`
--

INSERT INTO `tbl_contact` (`id_contact`, `alamat`, `email`, `telepon`) VALUES
(1, 'Desa Sangginora Kab. Poso Pesisir', 'adminsangginora@gmail.com', '0822-1234-xxxx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_datadatang`
--

CREATE TABLE `tbl_datadatang` (
  `id_datadatang` bigint(20) NOT NULL,
  `nomor_surat_pindah` varchar(255) NOT NULL,
  `nomorkk_asal` varchar(18) NOT NULL,
  `namakepalakeluarga_asal` varchar(255) NOT NULL,
  `alamat_asal` varchar(100) NOT NULL,
  `rt_asal` varchar(5) NOT NULL,
  `rw_asal` varchar(5) NOT NULL,
  `desa_kelurahan_asal` varchar(100) NOT NULL,
  `kabupaten_kota_asal` varchar(100) NOT NULL,
  `kecamatan_asal` varchar(100) NOT NULL,
  `provinsi_asal` varchar(100) NOT NULL,
  `kodepos_asal` varchar(6) NOT NULL,
  `telepon_asal` varchar(14) NOT NULL,
  `nik_pemohon` varchar(18) NOT NULL,
  `nama_pemohon` varchar(255) NOT NULL,
  `nomorkkdaerahtujuan` varchar(255) NOT NULL,
  `nikkepalakeluarga` varchar(18) NOT NULL,
  `namakepalakeluargatujuan` varchar(255) NOT NULL,
  `tanggal_datang` date NOT NULL,
  `alamat_tujuan` varchar(100) NOT NULL,
  `rt_tujuan` varchar(5) NOT NULL,
  `rw_tujuan` varchar(5) NOT NULL,
  `desa_kelurahan_tujuan` varchar(100) NOT NULL,
  `kabupaten_kota_tujuan` varchar(100) NOT NULL,
  `kecamatan_tujuan` varchar(100) NOT NULL,
  `provinsi_tujuan` varchar(100) NOT NULL,
  `statuskk_pindah` varchar(50) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `status` int(1) NOT NULL,
  `foto_ttd` varchar(255) NOT NULL,
  `foto_ktp` varchar(255) NOT NULL,
  `scan_surat` varchar(255) NOT NULL,
  `keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_datadatang`
--

INSERT INTO `tbl_datadatang` (`id_datadatang`, `nomor_surat_pindah`, `nomorkk_asal`, `namakepalakeluarga_asal`, `alamat_asal`, `rt_asal`, `rw_asal`, `desa_kelurahan_asal`, `kabupaten_kota_asal`, `kecamatan_asal`, `provinsi_asal`, `kodepos_asal`, `telepon_asal`, `nik_pemohon`, `nama_pemohon`, `nomorkkdaerahtujuan`, `nikkepalakeluarga`, `namakepalakeluargatujuan`, `tanggal_datang`, `alamat_tujuan`, `rt_tujuan`, `rw_tujuan`, `desa_kelurahan_tujuan`, `kabupaten_kota_tujuan`, `kecamatan_tujuan`, `provinsi_tujuan`, `statuskk_pindah`, `tanggal_buat`, `status`, `foto_ttd`, `foto_ktp`, `scan_surat`, `keterangan`) VALUES
(2, '70/70/08/md', '7271123412341234', 'La Baco', 'Jalan Jati No 10 A', '010', '006', 'Kelurahan Biromaru', 'Kabupaten Donggala', 'Kec. Nunu Selatan', 'Sulawesi Tengah', '98222', '081112341234', '7271021706980111', 'La Burengkeng', '7271098709870997', '7217111122223322', 'Baasssoooo', '2020-09-12', 'Jalan Garuda No 36', '005', '013', 'Kel. Buluri', 'Kota Bandung', 'Kecamatan Solong', 'Bali', 'Nomor Kartu Keluarga Tetap', '2020-09-08', 2, '08-09-2020-5f57b0cca13ca.png', '08-09-2020-5f57b0cca22fd.png', '08-09-2020-5f57b0cca2797.png', 'Surat Siap Di Cetak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_datapindah`
--

CREATE TABLE `tbl_datapindah` (
  `id_datapindah` bigint(20) NOT NULL,
  `nomorkk_asal` varchar(18) NOT NULL,
  `namakepalakeluarga_asal` varchar(255) NOT NULL,
  `alamat_asal` varchar(100) NOT NULL,
  `rt_asal` varchar(5) NOT NULL,
  `rw_asal` varchar(5) NOT NULL,
  `desa_kelurahan_asal` varchar(100) NOT NULL,
  `kabupaten_kota_asal` varchar(100) NOT NULL,
  `kecamatan_asal` varchar(100) NOT NULL,
  `provinsi_asal` varchar(100) NOT NULL,
  `kodepos_asal` varchar(6) NOT NULL,
  `telepon_asal` varchar(14) NOT NULL,
  `nik_pemohon` varchar(18) NOT NULL,
  `nama_pemohon` varchar(255) NOT NULL,
  `alasan_pindah` varchar(255) NOT NULL,
  `alamat_tujuan` varchar(100) NOT NULL,
  `rt_tujuan` varchar(5) NOT NULL,
  `rw_tujuan` varchar(5) NOT NULL,
  `desa_kelurahan_tujuan` varchar(100) NOT NULL,
  `kabupaten_kota_tujuan` varchar(100) NOT NULL,
  `kecamatan_tujuan` varchar(100) NOT NULL,
  `provinsi_tujuan` varchar(100) NOT NULL,
  `statuskk_tidakpindah` varchar(50) NOT NULL,
  `statuskk_pindah` varchar(50) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `status` int(1) NOT NULL,
  `foto_ttd` varchar(255) NOT NULL,
  `foto_ktp` varchar(255) NOT NULL,
  `foto_kk` varchar(255) NOT NULL,
  `keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_datapindah`
--

INSERT INTO `tbl_datapindah` (`id_datapindah`, `nomorkk_asal`, `namakepalakeluarga_asal`, `alamat_asal`, `rt_asal`, `rw_asal`, `desa_kelurahan_asal`, `kabupaten_kota_asal`, `kecamatan_asal`, `provinsi_asal`, `kodepos_asal`, `telepon_asal`, `nik_pemohon`, `nama_pemohon`, `alasan_pindah`, `alamat_tujuan`, `rt_tujuan`, `rw_tujuan`, `desa_kelurahan_tujuan`, `kabupaten_kota_tujuan`, `kecamatan_tujuan`, `provinsi_tujuan`, `statuskk_tidakpindah`, `statuskk_pindah`, `tanggal_buat`, `status`, `foto_ttd`, `foto_ktp`, `foto_kk`, `keterangan`) VALUES
(1, '7271022005090051', 'Hermansyah', 'Jalan Sungai Sausu No. 21 A', '001', '006', 'Ujuna', 'Kota Palu', 'Palu Barat', 'Sulawesi Tengah', '94223', '081354306260', '7271021706980011', 'Moh Chaesar Budi Agung', 'Pekerjaan', 'Jalan Soharso No.38', '005', '013', 'Kelurahan Nunu', 'Kota Palu', 'Palu Timur', 'Sulawesi Tengah', 'Nomor Kartu Keluarga Tetap', 'Nomor Kartu Keluarga Tetap', '2020-09-04', 2, '04-09-2020-5f5260fa9d613.png', '04-09-2020-5f5260fa9d7bc.png', '04-09-2020-5f5260fa9e6c9.jpg', 'Surat Siap Di Cetak'),
(3, '7271098765432123', 'Bacco Becce Beleng', 'Jalan Nuri No 11 A', '008', '019', 'Desa Labuan Bajo', 'Kab. Sigi', 'Kec. Nunu Selatan', 'Sulawesi Tengah', '94244', '081354306260', '7271021706981111', 'Hareudang', 'Perumahan', 'Jalan Merpati No 11 A', '004', '004', 'Kel. Buluri', 'Kota Palu', 'Kec. Buluri', 'Sulawesi Tengah', 'Numpang Kartu Keluarga', 'Nomor Kartu Keluarga Tetap', '2020-09-08', 0, '08-09-2020-5f57a91884ab7.png', '08-09-2020-5f57a91884e3c.png', '08-09-2020-5f57a918871fb.png', 'Surat Siap Di Cetak');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tbl_arsip_datang`
--
ALTER TABLE `tbl_arsip_datang`
  ADD PRIMARY KEY (`id_arsip_datang`),
  ADD KEY `tbl_arsip_datang_ibfk_1` (`id_pemohon`),
  ADD KEY `tbl_arsip_datang_ibfk_2` (`id_petugas`);

--
-- Indeks untuk tabel `tbl_arsip_pindah`
--
ALTER TABLE `tbl_arsip_pindah`
  ADD PRIMARY KEY (`id_arsip_pindah`),
  ADD KEY `tbl_arsip_pindah_ibfk_2` (`id_petugas`),
  ADD KEY `tbl_arsip_pindah_ibfk_1` (`id_pemohon`);

--
-- Indeks untuk tabel `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `tbl_datadatang`
--
ALTER TABLE `tbl_datadatang`
  ADD PRIMARY KEY (`id_datadatang`);

--
-- Indeks untuk tabel `tbl_datapindah`
--
ALTER TABLE `tbl_datapindah`
  ADD PRIMARY KEY (`id_datapindah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_arsip_datang`
--
ALTER TABLE `tbl_arsip_datang`
  MODIFY `id_arsip_datang` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_arsip_pindah`
--
ALTER TABLE `tbl_arsip_pindah`
  MODIFY `id_arsip_pindah` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_datadatang`
--
ALTER TABLE `tbl_datadatang`
  MODIFY `id_datadatang` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_datapindah`
--
ALTER TABLE `tbl_datapindah`
  MODIFY `id_datapindah` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_arsip_datang`
--
ALTER TABLE `tbl_arsip_datang`
  ADD CONSTRAINT `tbl_arsip_datang_ibfk_1` FOREIGN KEY (`id_pemohon`) REFERENCES `tbl_datadatang` (`id_datadatang`),
  ADD CONSTRAINT `tbl_arsip_datang_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `tbl_admin` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_arsip_pindah`
--
ALTER TABLE `tbl_arsip_pindah`
  ADD CONSTRAINT `tbl_arsip_pindah_ibfk_1` FOREIGN KEY (`id_pemohon`) REFERENCES `tbl_datapindah` (`id_datapindah`),
  ADD CONSTRAINT `tbl_arsip_pindah_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `tbl_admin` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
