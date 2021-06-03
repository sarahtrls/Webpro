-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2021 pada 09.54
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `grooming`
--

CREATE TABLE `grooming` (
  `id_grooming` int(100) NOT NULL,
  `id_user` int(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `grooming`
--

INSERT INTO `grooming` (`id_grooming`, `id_user`, `nama_lengkap`, `paket`, `tanggal`, `waktu`, `no_telp`, `alamat`) VALUES
(347, 22, 'Sarah', 'Anjing', '2021-06-22', 'Sore', '1111', 'Batutapak, RT 05/03'),
(348, 24, 'rama', 'Anjing', '2021-06-18', 'Sore', '2222', 'Rancamaya'),
(349, 23, 'lingga', 'Anjing', '2021-06-15', 'Sore', '3333', 'Pelabuhan'),
(350, 25, 'reza', 'Anjing', '2021-06-12', 'Siang', '44444', 'Sukabumi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `role` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `role`, `nama_lengkap`, `username`, `password`, `email`, `alamat`, `avatar`) VALUES
(19, 'user', 'awah', 'awah', '$2y$10$8fJrU53zVitc4G5Q/NekPuim5vqemhLAIILSVq6ZTw2/y/m0tRtne', 'sarahtrilestari@gmail.com', 'Batutapak', ''),
(21, 'admin', 'admin', 'admin', '$2y$10$tY244b/02cf6dmPUX0xyOuofsuYw/JXWKBNgCpU5SvdEvhCdEe5qi', 'sarahtrilestari@gmail.com', 'Lebak Kantin, Sempur', ''),
(22, 'user', 'Sarah', 'sarah', '$2y$10$1JEXLJFUSnqopv3rK5AJOuEULfSAphc/LUzGJYFT9H6Y6jTa2UkOS', 'sarahtrilestari67@gmail.com', 'Batutapak, RT 05/03', '60b87cdaa2ab8.jpg'),
(23, 'user', 'lingga', 'lingga', '$2y$10$BFQslhkxjCB/oXdC6SsQYeE5xrJVV1gsJEyhSy0rC47TUY0dIYufi', 'lingganazila@gmail.com', 'Pelabuhan', '60b87e475b54f.jpeg'),
(24, 'user', 'rama', 'rama', '$2y$10$n/uIyTc/xYJNTfiCmYGwHuS8PD5FVvHYTDygQjkL/TBataGoTWU9K', 'ramanurfaizi@gmail', 'Rancamaya', '60b87d3739abe.jpeg'),
(25, 'user', 'reza', 'reza', '$2y$10$3.LenKD7kIX4/9LE4eI8Iu6hwT97ztGK.aCgGYPzAgBW1iM95Xhdm', 'rezaaaa@gmail.com', 'Sukabumi', '60b87fd41f2c9.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `grooming`
--
ALTER TABLE `grooming`
  ADD PRIMARY KEY (`id_grooming`) USING BTREE,
  ADD KEY `id` (`id_user`) USING BTREE;

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `grooming`
--
ALTER TABLE `grooming`
  MODIFY `id_grooming` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `grooming`
--
ALTER TABLE `grooming`
  ADD CONSTRAINT `grooming_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
