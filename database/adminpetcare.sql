-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2021 pada 12.59
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpetcare`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `tgl` date NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `judul`, `isi`, `tgl`, `gambar`) VALUES
(2, 'jenis kucing', 'kucing anggora\r\nkucing persia', '2020-12-29', 'image_3.jpg'),
(4, 'kucing', 'Jenis kucing anggora memang dikenal dengan tampilannya yang cantik dan anggun. Namun ternyata kucing anggora juga memiliki kecerdasan yang cukup tinggi. Kucing ini mempunyai berbagai macam cara dalam menghadapi setiap masalah yang dia temukan. Bukan hanya itu, kucing anggora juga memiliki sifat atletis.\r\n       Jenis kucing anggora ini juga mempunyai jiwa sosial yang tinggi dan mudah beradaptasi dengan lingkungan sekitar. Kucing ini dengan ramah akan menyambut teman atau tamu yang datang ke rumah. Tidak hanya itu, kucing anggora juga dapat berteman baik dengan hewan peliharaan lain di sekitar lingkungan. Seperti anjing maupun jenis kucing lain\r\n   Meskipun begitu, kecerdasan kucing anggora memang menjadi tantangan tersendiri. Dengan kemampuan ini, kucing anggora bisa melakukan berbagai macam hal yang terlintas di kepalanya. Tidak jarang, kucing ini bertingkah gaduh ketika kita tidak bisa mengendalikannya. Untuk itu, diperlukan kesabaran yang cukup tinggi untuk menghadapi jenis kucing anggora ini.\r\n', '2020-12-29', 'image_9.jpg'),
(7, 'jenis burung', 'burung elang \r\nburung kakak tua\r\nburung beo', '2020-12-31', 'image_12.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_pengguna`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'pengguna', 'user', 'user', 'user'),
(3, 'pengguna', 'rakhmat', 'rakhmat', 'rakhmat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabelkomentar`
--

CREATE TABLE `tabelkomentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `aktif` enum('Y','N') CHARACTER SET latin1 DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabelkomentar`
--

INSERT INTO `tabelkomentar` (`id`, `nama`, `email`, `komentar`, `tgl`, `aktif`) VALUES
(17, 'Rakhmat', 'rakhmat@gmail.com', 'pelayanan sangat bagus', '2020-12-29', 'Y'),
(19, 'kelompok 6', 'kel6@gmail.com', 'pet care sangat rekomen di daerah indramayu', '2020-12-29', 'Y'),
(21, 'nadwa', 'nadwa@gmail.com', 'pelayanan nya sangat baik', '2020-12-31', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabelpelayanan`
--

CREATE TABLE `tabelpelayanan` (
  `idbooking` int(11) NOT NULL,
  `namapemilik` varchar(50) NOT NULL,
  `namahewan` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `sakit` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `tanggal` text NOT NULL,
  `waktu` time NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabelpelayanan`
--

INSERT INTO `tabelpelayanan` (`idbooking`, `namapemilik`, `namahewan`, `jenis`, `sakit`, `nohp`, `tanggal`, `waktu`, `keterangan`) VALUES
(11, 'halimah', 'berry', 'kucing', 'flu', '097727156355', '12/2/2020', '01:30:00', 'sakit nya sudah seminggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id` int(11) NOT NULL,
  `namapemilik` varchar(200) NOT NULL,
  `namahewan` varchar(200) NOT NULL,
  `jenishewan` varchar(200) NOT NULL,
  `jeniskel` enum('Jantan','Betina') NOT NULL,
  `gejala` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id`, `namapemilik`, `namahewan`, `jenishewan`, `jeniskel`, `gejala`, `alamat`) VALUES
(3, 'halimah', 'kimi', 'kucing', 'Jantan', 'perawatan bulu', 'lohbener indramayu'),
(5, 'imam', 'benny', 'kucing', 'Jantan', 'sakit kaki', 'kab.indramayu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tabelkomentar`
--
ALTER TABLE `tabelkomentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabelpelayanan`
--
ALTER TABLE `tabelpelayanan`
  ADD PRIMARY KEY (`idbooking`);

--
-- Indeks untuk tabel `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabelkomentar`
--
ALTER TABLE `tabelkomentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tabelpelayanan`
--
ALTER TABLE `tabelpelayanan`
  MODIFY `idbooking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
