-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2023 pada 05.41
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id`, `username`, `email`, `password`, `image`) VALUES
(1, 'binz', 'bintangwiratama4@gmail.com', '$2y$10$UrunKjr.4V/KxJ/EuFIk6Om7B42SYARewBFNgQs29eXcrUaY0Yc.W', ''),
(2, 'ayam', 'ayam@nnnnn', '$2y$10$4kVitGSyNxXOW2INyg9c3uSKCl9vObZHHFkhDR8pQHBYXcWUeO4x.', 'Screenshot 2023-11-06 123953.png'),
(3, 'cihh', 'ayam@123', '$2y$10$1S4OCH7sKamusBrz6UHqQOWvpljNcREDAFseYbIJtzzs8LG1dD6rS', 'Screenshot 2023-07-06 082848.png'),
(4, 'laper', 'turu@nnnnn', '$2y$10$ftq9RBnyITNUxc4GrcWs6.CNJn0jK/jMU4morW3nRIEudm74OGRpW', 'Screenshot 2023-07-06 083037.png'),
(5, 'ayam', 'starswars164@gmail.com', '$2y$10$fqHxOwYyjpMWdZcfLPJNiO5JxuZ4kvuJMEZjGo5iw9cLgwrnRXBBK', ''),
(6, 'qqq', 'ayam@nn33', '$2y$10$8y.7J1kssjd1vDLYWNAxOua9b2Mf/yXnEtEeP7muT2hr/f4sXvsvu', 'Screenshot 2023-07-06 082818.png'),
(7, 'neli', 'nelifauziyah07@gmail.com', '$2y$10$1b.8sNELgOHrvyHXPDxlmeubCxcoNZUofBIeeWXFMUrtunrtlV8NK', 'gambar.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `jurusan` enum('Teknik Elektro','Teknik Mesin','Teknik Sipil','Administrasi Bisnis','Akuntansi') NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `umur` int(100) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `email`, `nama`, `nim`, `jurusan`, `prodi`, `kelas`, `umur`, `jenis_kelamin`, `alamat`, `tanggal`) VALUES
(2, 'nelifauziyah07@gmail.com', 'Neli Fauziyah', '3.34.22.0.18', 'Teknik Elektro', 'Teknik Informatika', 'IK-2A', 19, 'Perempuan', 'Tegal', '2023-12-21 11:15:00.000000'),
(3, 'starswars164@gmail.com', 'BINTANG ', '3111', 'Teknik Elektro', 'aaa', 'ika', 12, 'Laki-Laki', 'tembalang', '2023-12-21 11:15:00.000000'),
(4, 'ayam@nnnnn', 'BINTANG ', '12', 'Teknik Mesin', 'aaa', 'aaaaa', 21, 'Perempuan', 'aaaa', '2023-12-21 11:15:00.000000'),
(5, 'ayam@nnnnn', 'BINTANG ', '12', 'Teknik Mesin', 'aaa', 'aaaaa', 21, 'Perempuan', 'aaaa', '2023-12-21 11:15:00.000000'),
(9, 'nelifauziyah07@gmail.com', 'Neli Fauziyah', '3.34.22.0.18', 'Teknik Elektro', 'Teknik Informatika', 'IK-2A', 19, 'Perempuan', 'Tegal', '2023-12-21 11:15:00.000000'),
(10, 'starswars164@gmail.com', 'BINTANG ', '3111', 'Teknik Elektro', 'aaa', 'ika', 12, 'Laki-Laki', 'tembalang', '2023-12-21 11:15:00.000000'),
(13, 'admin01@gmail.com', 'kkkk', '12111', 'Teknik Mesin', 'aaa', 'aaaaa', 21, 'Perempuan', 'aaaa', '2023-12-21 11:15:00.000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `periksa`
--

CREATE TABLE `periksa` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `jurusan` enum('Teknik Elektro','Teknik Mesin','Teknik Sipil','Administrasi Bisnis','Akuntansi') NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `umur` int(100) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `periksa`
--

INSERT INTO `periksa` (`id`, `email`, `nama`, `nim`, `jurusan`, `prodi`, `kelas`, `umur`, `jenis_kelamin`, `alamat`, `tanggal`) VALUES
(1, 'nelifauziyah07@gmail.com', 'Neli Fauziyah', '3.34.22.0.18', 'Teknik Elektro', 'Teknik Informatika', 'IK-2A', 19, 'Perempuan', 'Tegal', '2023-12-21 08:46:00.000000'),
(2, 'starswars164@gmail.com', 'BINTANG ', '3111', 'Teknik Elektro', 'aaa', 'ika', 12, 'Laki-Laki', 'tembalang', '2023-12-21 11:01:00.000000'),
(3, 'ayam@nnnnn', 'BINTANG ', '12', 'Teknik Mesin', 'aaa', 'aaaaa', 21, 'Perempuan', 'aaaa', '2023-12-21 11:15:00.000000'),
(4, 'ayam@nnnnn', 'BINTANG ', '12', 'Teknik Mesin', 'aaa', 'aaaaa', 21, 'Perempuan', 'aaaa', '2023-12-21 11:15:00.000000'),
(5, 'admin01@gmail.com', 'kkkk', '12111', 'Teknik Mesin', 'aaa', 'aaaaa', 21, 'Perempuan', 'aaaa', '2023-12-21 11:15:00.000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_sakit`
--

CREATE TABLE `surat_sakit` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `jurusan` enum('Teknik Elektro','Teknik Mesin','Teknik Sipil','Administrasi Bisnis','Akuntansi') NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `umur` int(100) NOT NULL,
  `kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_sakit`
--

INSERT INTO `surat_sakit` (`id`, `email`, `nama`, `nim`, `jurusan`, `prodi`, `kelas`, `umur`, `kelamin`, `alamat`, `tanggal_mulai`, `tanggal_selesai`, `image`) VALUES
(1, '$email', '$nama', '$nim', '', '$prodi', '$kelas', 0, '', '$alamat', '0000-00-00', '0000-00-00', '$berkas'),
(2, 'nelifauziyah07@gmail.com', 'Neli Fauziyah', '3.34.22.0.18', 'Teknik Elektro', 'Teknik Informatika', 'IK-2A', 19, 'Perempuan', 'tegal', '2023-12-21', '2023-12-23', '1703123257WhatsApp Image 2023-12-19 at 23.05.08.jpeg'),
(3, 'nelifauziyah07@gmail.com', 'Neli Fauziyah', '3.34.22.0.18', 'Teknik Elektro', 'Teknik Informatika', 'IK-2A', 19, 'Perempuan', 'tegal', '2023-12-21', '2023-12-21', '1703123297WhatsApp Image 2023-12-19 at 23.05.08.jpeg'),
(4, 'nelifauziyah07@gmail.com', 'Neli Fauziyah', '3.34.22.0.18', 'Teknik Elektro', 'hn', 'IK-2A', 19, 'Perempuan', 'tegal', '2023-12-21', '2023-12-23', '1703125076gambar.jpg'),
(5, 'nelifauziyah07@gmail.com', 'Neli Fauziyah', '3.34.22.0.18', 'Teknik Elektro', 'Teknik Informatika', 'IK-2A', 19, 'Perempuan', 'tg', '2023-12-21', '2023-12-23', '1703125118gambar.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `image`) VALUES
(28, 'Binz', 'starswars164@gmail.com', 'a4581e0ef85887c916bcba1e97ee7f3c', 'user', 'Screenshot 2023-06-08 114811.png'),
(29, 'Nice Try', 'bintangwiratama4@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'Screenshot 2023-07-04 102944.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `periksa`
--
ALTER TABLE `periksa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_sakit`
--
ALTER TABLE `surat_sakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `periksa`
--
ALTER TABLE `periksa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `surat_sakit`
--
ALTER TABLE `surat_sakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
