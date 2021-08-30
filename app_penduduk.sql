-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Agu 2021 pada 11.04
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_penduduk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `id_pend` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no_kk` varchar(20) DEFAULT NULL,
  `nama` varchar(20) NOT NULL,
  `tempat_lh` varchar(15) NOT NULL,
  `tgl_lh` date NOT NULL,
  `jekel` enum('Laki-Laki','Perempuan') NOT NULL,
  `desa` varchar(15) NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `kawin` varchar(15) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `status` enum('Ada','Meninggal','Pindah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_penduduk`
--

INSERT INTO `data_penduduk` (`id_pend`, `nik`, `no_kk`, `nama`, `tempat_lh`, `tgl_lh`, `jekel`, `desa`, `rt`, `rw`, `agama`, `kawin`, `pekerjaan`, `status`) VALUES
(16, '000000099999', '789456123', 'joko mmmm', 'sukoharjo', '2021-06-28', 'Laki-Laki', 'juron', '01', '02', 'islam', 'belum kawin', 'mahasiswa', 'Ada'),
(17, '1000000997', '1000000997582', 'joko and', 'sukoharjo', '2021-06-28', 'Laki-Laki', 'boyolloko', '01', '02', 'islam', 'kawin', 'buroh', 'Pindah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int(11) NOT NULL,
  `id_kk` int(11) NOT NULL,
  `id_pend` int(11) NOT NULL,
  `hubungan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `id_kk`, `id_pend`, `hubungan`) VALUES
(2, 1, 2, 'Istri'),
(3, 2, 3, 'Kepala Keluarga'),
(4, 2, 4, 'Istri'),
(5, 3, 6, 'Kepala Keluarga'),
(6, 3, 7, 'Istri'),
(7, 1, 5, 'Anak'),
(9, 3, 8, 'Anak'),
(10, 1, 9, 'Anak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kk`
--

CREATE TABLE `tb_kk` (
  `id_kk` int(11) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `kepala` varchar(20) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `kec` varchar(20) NOT NULL,
  `kab` varchar(20) NOT NULL,
  `prov` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kk`
--

INSERT INTO `tb_kk` (`id_kk`, `no_kk`, `kepala`, `desa`, `rt`, `rw`, `kec`, `kab`, `prov`) VALUES
(1, '1010202030304040', 'Juprianto', 'Majujaya', '01', '02', 'Semarang', 'Semarang', 'Jawa Tengahh'),
(2, '1010202030304012', 'Hardi', 'Majujaya', '02', '02', 'Semarang', 'Semarang', 'Jawa Tengahh'),
(3, '1010202030301111', 'Supardi', 'Majujaya', '02', '02', 'Semarang', 'Semarang', 'Jawa Tengahh'),
(4, '12300000000000321', 'Ahmad', 'Majujaya', '02', '02', 'Semarang', 'Semarang', 'Jawa Tengahh'),
(5, '234234478', 'jono', 'boyolloko', '01', '02', 'sukoharjo', 'sukoharjo', 'jateng');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`id_pend`);

--
-- Indeks untuk tabel `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `tb_anggota_ibfk_1` (`id_pend`),
  ADD KEY `tb_anggota_ibfk_2` (`id_kk`);

--
-- Indeks untuk tabel `tb_kk`
--
ALTER TABLE `tb_kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  MODIFY `id_pend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_kk`
--
ALTER TABLE `tb_kk`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
