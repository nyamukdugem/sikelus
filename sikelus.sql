-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2020 pada 16.39
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikelus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `nisn` varchar(10) NOT NULL,
  `agama_s` decimal(4,1) NOT NULL,
  `pkn_s` decimal(4,1) NOT NULL,
  `bi_s` decimal(4,1) NOT NULL,
  `mtk_s` decimal(4,1) NOT NULL,
  `ipa_s` decimal(4,1) NOT NULL,
  `ips_s` decimal(4,1) NOT NULL,
  `sbk_s` decimal(4,1) NOT NULL,
  `pjok_s` decimal(4,1) NOT NULL,
  `bmr_s` decimal(4,1) NOT NULL,
  `bing_s` decimal(4,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(10) NOT NULL,
  `nis` varchar(7) NOT NULL,
  `nopes` varchar(14) NOT NULL,
  `nama_siswa` varchar(128) NOT NULL,
  `tmpt_lahir` varchar(128) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_ayah` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `us`
--

CREATE TABLE `us` (
  `nisn` varchar(10) NOT NULL,
  `agama` decimal(4,1) NOT NULL,
  `pkn` decimal(4,1) NOT NULL,
  `ips` decimal(4,1) NOT NULL,
  `sbk` decimal(4,1) NOT NULL,
  `pjok` decimal(4,1) NOT NULL,
  `bmr` decimal(4,1) NOT NULL,
  `bing` decimal(4,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `usbn`
--

CREATE TABLE `usbn` (
  `nisn` varchar(10) NOT NULL,
  `bi_pg` decimal(4,1) NOT NULL,
  `bi_uraian` decimal(4,1) NOT NULL,
  `bi_na` decimal(4,1) NOT NULL,
  `mtk_pg` decimal(4,1) NOT NULL,
  `mtk_uraian` decimal(4,1) NOT NULL,
  `mtk_na` decimal(4,1) NOT NULL,
  `ipa_pg` decimal(4,1) NOT NULL,
  `ipa_uraian` decimal(4,1) NOT NULL,
  `ipa_na` decimal(4,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Sulistio', 'admin@admin.com', '$2y$10$1i90WWAo4kNkNoyo2R81iOehdJSOWysDw1LGkF/Vj2yM1qmRYT8eC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `us`
--
ALTER TABLE `us`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `usbn`
--
ALTER TABLE `usbn`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
