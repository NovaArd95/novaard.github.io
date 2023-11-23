-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2023 pada 08.55
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `Id_Guru` varchar(10) NOT NULL,
  `Nama_Guru` varchar(25) NOT NULL,
  `Alamat` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`Id_Guru`, `Nama_Guru`, `Alamat`) VALUES
('G001', 'Koro Sensei', 'Tokyo'),
('G002', 'Rimuru Dayo', 'Federasi Jura'),
('G003', 'Venti', 'Mondstand'),
('G004', 'Hu Tao', 'Liyue');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `Id_Kelas` varchar(10) NOT NULL,
  `Nama_Kelas` varchar(10) NOT NULL,
  `Jumlah_Siswa` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`Id_Kelas`, `Nama_Kelas`, `Jumlah_Siswa`) VALUES
('K001', 'XI PPLG 1', '36'),
('K002', 'XI PPLG 2', '36'),
('K003', 'XI DKV 2', '34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `Id_Mapel` varchar(10) NOT NULL,
  `Id_Guru` varchar(10) NOT NULL,
  `Id_Kelas` varchar(10) NOT NULL,
  `Nama_Mapel` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`Id_Mapel`, `Id_Guru`, `Id_Kelas`, `Nama_Mapel`) VALUES
('M001', 'G001', 'K001', 'Matematika'),
('M002', 'G002', 'K002', 'IPA'),
('M003', 'G003', 'K003', 'Pyroo Traning');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `Id_Siswa` varchar(10) NOT NULL,
  `Id_Kelas` varchar(10) NOT NULL,
  `Nama_Siswa` varchar(20) NOT NULL,
  `Alamat` varchar(20) NOT NULL,
  `Jenis_Kelamin` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`Id_Siswa`, `Id_Kelas`, `Nama_Siswa`, `Alamat`, `Jenis_Kelamin`) VALUES
('S001', 'K001', 'Anos ', 'Yogyakarta', 'L'),
('S002', 'K002', 'Rimuru Temprest', 'Jura Federation', 'L'),
('S003', 'K003', 'Zhong Li', 'Liyue Tyvat', 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Nova Ardian Purnomo', 'novaard', '12345678', 'admin'),
(2, 'Anda User', 'usernya', '12345678', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`Id_Guru`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`Id_Kelas`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`Id_Mapel`),
  ADD KEY `Id_Guru` (`Id_Guru`,`Id_Kelas`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`Id_Siswa`),
  ADD KEY `Id_Kelas` (`Id_Kelas`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
