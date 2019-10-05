-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Okt 2019 pada 06.27
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dll`
--

CREATE TABLE `dll` (
  `id` int(11) NOT NULL,
  `footerbawah` longtext NOT NULL,
  `isinano` longtext NOT NULL,
  `email` tinytext NOT NULL,
  `hp` tinytext NOT NULL,
  `alamat` tinytext NOT NULL,
  `faceb` tinytext NOT NULL,
  `instagl` tinytext NOT NULL,
  `goog` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dll`
--

INSERT INTO `dll` (`id`, `footerbawah`, `isinano`, `email`, `hp`, `alamat`, `faceb`, `instagl`, `goog`) VALUES
(1, '<p>DOKTER COATING&nbsp;nano ceramic+ paint protection yang biasa di sebut laminating, merupakan paint protection berbahan keramik, di proses dengan teknologi nano menjadikan partikel keramik memiliki ukuran nano</p>\r\n', '<p>DOKTER COATING&nbsp;nano ceramic+ paint protection dengan teknologi terbaik saat ini, SCUTO nano ceramic+ paint protection yang biasa di sebut laminating, merupakan paint protection berbahan keramik, di proses dengan teknologi nano menjadikan partikel keramik memiliki ukuran nano atau 0,0000001 meter.<br />\r\n<br />\r\nKarena ukuran partikel ini sangat kecil hingga dapat menutup pori-pori cat dengan sangat rapat dan menjadikannya kedap udara dan mencegah kotoran masuk ke dalam pori cat, dapat mengurangi terjadinya watermark spot, dan mampu melindungi dari sinar UV</p>\r\n', 'marketing@doktercoating.id', '087855340881', 'Kantor / workhsop kurnia kencana persada Sungai Raya, Kabupaten Kubu Raya, Kalimantan Barat', 'https://www.facebook.com/a', 'https://www.instagram.com/?hl=ida', 'https://plus.google.com/discovera');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar2`
--

CREATE TABLE `gambar2` (
  `id` int(11) NOT NULL,
  `id_proyek` tinytext NOT NULL,
  `foto` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar2`
--

INSERT INTO `gambar2` (`id`, `id_proyek`, `foto`) VALUES
(8, '2', 'a1.jpg'),
(9, '2', 'a2.jpg'),
(10, '3', 'b1.jpg'),
(11, '3', 'b2.jpg'),
(12, '4', 'c1.jpg'),
(13, '4', 'c2.jpg'),
(14, '5', 'd1.jpg'),
(15, '5', 'd2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar3`
--

CREATE TABLE `gambar3` (
  `id` int(11) NOT NULL,
  `foto` tinytext NOT NULL,
  `nama` tinytext NOT NULL,
  `deskripsi` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar3`
--

INSERT INTO `gambar3` (`id`, `foto`, `nama`, `deskripsi`) VALUES
(8, 'nano-ceramic-1.png', 'nano ceramic', 'asdasdas'),
(9, 'maintanance.png', 'nano ceramic', 'asdasdas'),
(10, 'main-product.png', 'nano ceramic', 'asdasdas'),
(13, '', 'aabb', 'asdasdbb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek2`
--

CREATE TABLE `proyek2` (
  `id` int(11) NOT NULL,
  `nama` tinytext NOT NULL,
  `kategori` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proyek2`
--

INSERT INTO `proyek2` (`id`, `nama`, `kategori`) VALUES
(2, 'Coating Small', ''),
(3, 'Coating Medium', ''),
(4, 'Coating Large', ''),
(5, 'Coating Motor', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` longtext NOT NULL,
  `password` longtext NOT NULL,
  `nama` longtext NOT NULL,
  `status` tinytext NOT NULL,
  `id_toko` int(11) NOT NULL,
  `keterangan` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `status`, `id_toko`, `keterangan`) VALUES
(1, 'adminweb1', 'adminweb1', 'adminweb', '1', 0, 'super');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dll`
--
ALTER TABLE `dll`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gambar2`
--
ALTER TABLE `gambar2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gambar3`
--
ALTER TABLE `gambar3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proyek2`
--
ALTER TABLE `proyek2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dll`
--
ALTER TABLE `dll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `gambar2`
--
ALTER TABLE `gambar2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `gambar3`
--
ALTER TABLE `gambar3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `proyek2`
--
ALTER TABLE `proyek2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
