-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2022 pada 12.55
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `id_mhs` varchar(255) NOT NULL,
  `kode_matkul` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail`
--

INSERT INTO `detail` (`id_mhs`, `kode_matkul`) VALUES
('1', '0001'),
('1', '0002'),
('1', '0004'),
('1', '0003'),
('2', '0001'),
('2', '0002'),
('2', '0003'),
('2', '0004'),
('3', '0001'),
('3', '0002'),
('3', '0003'),
('3', '0004'),
('3', '0005');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nrp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`) VALUES
(1, 'Bambang', '1461900035', 'miftahuda0035@gmail.com', 'Teknik Informatika'),
(2, 'M. Mudhafiq Sholiq', '1461900060', 'mudhafiq@gmail.com', 'Teknik Informatika'),
(3, 'M. Rizky Sulistyawan', '1461900043', 'riszkysulis@gmail.com', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_matakuliah`
--

CREATE TABLE `tbl_matakuliah` (
  `id_matkul` int(11) NOT NULL,
  `kode_matkul` varchar(20) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `kelas` char(2) NOT NULL,
  `sks` char(2) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `peserta` int(11) NOT NULL,
  `waktu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_matakuliah`
--

INSERT INTO `tbl_matakuliah` (`id_matkul`, `kode_matkul`, `nama_matkul`, `kelas`, `sks`, `kapasitas`, `peserta`, `waktu`) VALUES
(1, '0001', 'Pemograman Dasar WEB', 'A', '3', 45, 35, 'Senin, 07.50 - 09.30'),
(2, '0002', 'Pengembangan Mobile', 'C', '3', 35, 30, 'Senin, 09.30 - 11.10'),
(3, '0003', 'Rekayasa Perangkat Lunak', 'D', '4', 45, 35, 'Selasa, 08.00 - 10.00'),
(4, '0004', 'Interaksi Manusia Komputer', 'A', '2', 45, 35, 'Rabu, 07.00 - 09.00'),
(5, '0005', 'Pengembangan Game', 'B', '3', 45, 35, 'Kamis, 07.50 - 09.30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_matakuliah`
--
ALTER TABLE `tbl_matakuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_matakuliah`
--
ALTER TABLE `tbl_matakuliah`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
