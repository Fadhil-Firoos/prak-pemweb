-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2023 pada 10.00
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prak8`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` int(11) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `prodi`, `email`, `jenis_kelamin`, `tgl_lahir`, `alamat`) VALUES
(2, 'Quia optio recusand', 61, 'Repellendus Facere ', 'qiwe@mailinator.com', 'Laki-Laki', '1994-05-17', 'Eum ipsum iste eum '),
(3, 'Molestiae veritatis ', 37, 'Rerum in minus aut a', 'fecizovy@mailinator.com', 'Laki-Laki', '1983-05-02', 'Fugiat corporis temp'),
(4, 'Rem dicta veniam ut', 38, 'Exercitationem maior', 'vikehahumu@mailinator.com', 'Laki-Laki', '1981-03-07', 'Ut sunt est quo mol'),
(5, 'Cupiditate ut illo q', 39, 'In sit sapiente sint', 'vujelit@mailinator.com', 'Laki-Laki', '1985-08-12', 'Vero est enim vitae ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
