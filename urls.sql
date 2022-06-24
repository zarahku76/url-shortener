-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2022 pada 05.10
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urls`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_url`
--

CREATE TABLE `daftar_url` (
  `id` int(11) NOT NULL,
  `url_pendek` varchar(36) DEFAULT NULL,
  `url_asli` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_url`
--

INSERT INTO `daftar_url` (`id`, `url_pendek`, `url_asli`) VALUES
(1, '1d8beff0-f362-11ec-8acd-089e014e153b', 'https://www.kaskus.co.id/thread/62b4f9c4aa60f65d844d466e/waspada-pelecehan-seksual-pada-anak-lakukan-ini-agar-pelakunya-tertangkap/?ref=homelanding&med=hot_thread&style=card'),
(2, '38bfc32c-f362-11ec-8acd-089e014e153b', 'https://www.zarah.my.id/p/sort-string.html'),
(3, '4dd1b667-f362-11ec-8acd-089e014e153b', 'https://www.tutorialspoint.com/arduino/arduino_board_description.htm'),
(4, '67c6b699-f362-11ec-8acd-089e014e153b', 'https://kumparan.com/berita-update/pengertian-manunggaling-kawula-gusti-dalam-budaya-jawa-1x240Ad66cJ'),
(5, 'ad694771-f362-11ec-8acd-089e014e153b', 'https://sekolah.data.kemdikbud.go.id/index.php/chome/profil/c0972496-2bf5-e011-825c-69715c27ccc1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_url`
--
ALTER TABLE `daftar_url`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url_pendek` (`url_pendek`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_url`
--
ALTER TABLE `daftar_url`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
