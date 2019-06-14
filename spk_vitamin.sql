-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2019 at 10:34 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spk_vitamin`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE IF NOT EXISTS `gejala` (
  `id` int(11) NOT NULL,
  `gejala` varchar(255) NOT NULL,
  `kode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=362 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `gejala`, `kode`) VALUES
(322, 'Rabun senja', 'G01'),
(323, 'Infeksi saluran pernafasan', 'G02'),
(324, 'Kulit kering', 'G03'),
(325, 'Daya tahan tubuh berkurang', 'G04'),
(326, 'Katarak', 'G05'),
(327, 'Beri-beri', 'G06'),
(328, 'Kulit bersisik', 'G07'),
(329, 'Mulut kering', 'G08'),
(330, 'Bibir pecah-pecah', 'G09'),
(331, 'Sariawan', 'G010'),
(332, 'Lemah daya pengelihatan', 'G011'),
(333, 'Kelelahan', 'G012'),
(334, 'Tidak tahan terhadap cahaya', 'G013'),
(335, 'Tubuh mengalami kejang', 'G014'),
(336, 'Kram otot', 'G015'),
(337, 'Gangguan sistem pencernaan', 'G016'),
(338, 'Muntah-muntah', 'G017'),
(339, 'Bengkak dibagian mulut dan lidah', 'G018'),
(340, 'Kadar gula rendah dalam darah', 'G019'),
(341, 'Kulit pecah-pecah', 'G020'),
(342, 'Sakit kepala', 'G021'),
(343, 'Kejang otot', 'G022'),
(344, 'Gangguan mental', 'G023'),
(345, 'Luka kemerahan pada lidah', 'G024'),
(346, 'Sudut mulut yang pecah-pecah', 'G025'),
(347, 'Mati rasa dan rasa seperti tertusuk jarum ditangan dan kaki', 'G026'),
(348, 'Anemia', 'G027'),
(349, 'Gangguan syaraf', 'G028'),
(350, 'Gangguan pewarnaan pada kulit', 'G029'),
(351, 'Nyeri otot', 'G030'),
(352, 'Infeksi dan kulit bersisik', 'G031'),
(353, 'Gigi lebih mudah rusak', 'G032'),
(354, 'Diabetes', 'G033'),
(355, 'Kanker', 'G034'),
(356, 'Pertumbuhan tulang tidak normal', 'G035'),
(357, 'Kelemahan otot', 'G036'),
(358, 'Kemandulan pada pria / wanita', 'G037'),
(359, 'Diare berat', 'G038'),
(360, 'Ubun-ubun menonjol', 'G039'),
(361, 'Pucat hingga kejang', 'G040');

-- --------------------------------------------------------

--
-- Table structure for table `kemiripan`
--

CREATE TABLE IF NOT EXISTS `kemiripan` (
  `id` int(11) NOT NULL,
  `gejala_id_1` int(11) NOT NULL,
  `gejala_id_2` int(11) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kemiripan`
--

INSERT INTO `kemiripan` (`id`, `gejala_id_1`, `gejala_id_2`, `bobot`) VALUES
(1, 121, 121, 1),
(2, 121, 136, 0.5),
(3, 121, 125, 0.75),
(4, 125, 125, 1),
(5, 125, 136, 0.25),
(6, 125, 121, 0.75),
(7, 136, 136, 1),
(8, 136, 125, 0.25),
(9, 136, 121, 0.5),
(10, 122, 122, 1),
(11, 122, 149, 0.5),
(12, 149, 149, 1),
(13, 149, 122, 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE IF NOT EXISTS `konsultasi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `pesan` text NOT NULL,
  `pemeriksaan_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `user_id`, `waktu`, `pesan`, `pemeriksaan_id`) VALUES
(2, 11, '2019-05-29 12:57:09', 'saya bingung dok. kenapa kok sakit sekali di mata saya ', 36),
(3, 11, '2019-05-29 12:59:34', 'saya tidak tau do. kenap tiba tiba kepala saya bengkak dan bernanah ', 36),
(4, 11, '2019-05-29 12:59:49', 'saya tidak tau do. kenap tiba tiba kepala saya bengkak dan bernanah ', 36),
(6, 1, '2019-05-29 01:05:19', 'hmm.. sebaiknya anda melakukan ini dan itu ', 0),
(7, 1, '2019-05-29 01:06:47', 'helo helo ', 0),
(8, 1, '2019-05-29 01:08:23', 'helo halo ', 0),
(9, 1, '2019-05-29 01:10:47', 'coba lagi ahh', 0),
(10, 1, '2019-05-29 01:11:48', 'mbalala', 36),
(11, 1, '2019-05-29 01:12:09', 'mbalala', 36),
(12, 9, '2019-05-29 01:14:13', 'saya harap anda tidak sungkan sungkan ', 37),
(13, 9, '2019-05-29 01:29:11', 'oke. teirma kasih karena telah berbelanja di toko kami ', 37),
(14, 1, '2019-05-29 01:29:43', 'kenapa anda bisa seperti itu ? ', 37),
(15, 9, '2019-05-29 01:31:08', 'saya sudah pesan ke mereka supaya jangan dikucek matanya. ', 37),
(16, 1, '2019-05-29 01:31:36', 'saya kira anda tidak akan dipermasalahkan oleh mereka. baiklah kalo begit ', 37);

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE IF NOT EXISTS `pemeriksaan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `vitamin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id`, `tanggal`, `user_id`, `vitamin_id`) VALUES
(49, '2019-06-10', 1, 59),
(50, '2019-06-10', 1, NULL),
(51, '2019-06-14', 1, 75);

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan_detail`
--

CREATE TABLE IF NOT EXISTS `pemeriksaan_detail` (
  `id` int(11) NOT NULL,
  `pemeriksaan_id` int(11) NOT NULL,
  `gejala_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=224 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan_detail`
--

INSERT INTO `pemeriksaan_detail` (`id`, `pemeriksaan_id`, `gejala_id`) VALUES
(206, 49, 269),
(207, 49, 270),
(208, 49, 271),
(209, 49, 272),
(210, 49, 273),
(211, 49, 274),
(212, 49, 275),
(213, 49, 276),
(214, 49, 277),
(215, 49, 278),
(216, 50, 271),
(217, 50, 291),
(218, 50, 298),
(219, 51, 322),
(220, 51, 323),
(221, 51, 324),
(222, 51, 325),
(223, 51, 326);

-- --------------------------------------------------------

--
-- Table structure for table `pengetahuan`
--

CREATE TABLE IF NOT EXISTS `pengetahuan` (
  `id` int(11) NOT NULL,
  `id_vitamin` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=419 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengetahuan`
--

INSERT INTO `pengetahuan` (`id`, `id_vitamin`, `id_gejala`) VALUES
(414, 75, 323),
(416, 75, 327),
(413, 75, 331),
(415, 75, 347),
(417, 85, 333),
(418, 85, 357);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `level` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(2) NOT NULL,
  `umur` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `level`, `nama`, `hp`, `alamat`, `jk`, `umur`) VALUES
(1, 'admin', '0cc175b9c0f1b6a831c399e269772661', 1, 'Aministrator', '08132945559', 'Jl. kenair no. 343', 'L', 0),
(7, 'budi', '0cc175b9c0f1b6a831c399e269772661', 0, 'Firmansyah', '0813280800', 'jl. kenari no. 34', 'L', 20),
(8, 'bejo', '7fc56270e7a70fa81a5935b72eacbe29', 0, 'Bejo sandix', '0813243595', 'Jl. keramat jadixxx', 'P', 40),
(9, 'heri', '0cc175b9c0f1b6a831c399e269772661', 0, 'Heru hendriyadi', '45838538r3985', 'Jl. undru no. 4', 'P', 40),
(10, 'heru', '0cc175b9c0f1b6a831c399e269772661', 0, 'Heru hendriyadi', '083848583', 'Jl. kenari no. 345', 'L', 3),
(11, 'eko', '0cc175b9c0f1b6a831c399e269772661', 0, 'Eko kurniawan', '03895935893', 'Jl. kenari no. 335', 'L', 25),
(12, 'naruto', '0cc175b9c0f1b6a831c399e269772661', 0, 'Firmansyah', '08132485858', 'JL. lingkar utara no 345', 'L', 23);

-- --------------------------------------------------------

--
-- Table structure for table `tmp`
--

CREATE TABLE IF NOT EXISTS `tmp` (
  `id_penyakit` int(11) NOT NULL,
  `skor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp`
--

INSERT INTO `tmp` (`id_penyakit`, `skor`) VALUES
(1, 0.0666667),
(53, 0.0666667),
(54, 0.0666667),
(55, 0.0666667),
(56, 0.0666667),
(57, 0.0666667),
(58, 0.0666667),
(2, 0.0666667),
(4, 0.0666667),
(5, 0.0666667),
(6, 0.0666667),
(44, 0.0666667),
(50, 0.0666667),
(51, 0.0666667),
(52, 0.0666667);

-- --------------------------------------------------------

--
-- Table structure for table `vitamin`
--

CREATE TABLE IF NOT EXISTS `vitamin` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `vitamin` varchar(255) NOT NULL,
  `sumber_vitamin` text NOT NULL,
  `fungsi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vitamin`
--

INSERT INTO `vitamin` (`id`, `kode`, `vitamin`, `sumber_vitamin`, `fungsi`) VALUES
(75, 'V01', 'A (Thiamin)', 'susu, ikan, sayur-sayuran, dan buah-buahan seperti cabai merah,wortel, pisang, dan papaya.', 'pengelihatan,pertumbuhan dan perkembangan, reproduksi, serta kekebalan tubuh.'),
(76, 'V02', 'B1 (Thiamin)', 'beras merah, ragi, gandum, kedelai, susu, kacang tanah dan kacang-kacangan.', 'Sebagai koenzim berbagai reaksi metabolisme energi serta dapat menjaga kesehatan saraf dan otot.'),
(77, 'V03', 'B2 (Riboflavin)', 'sayur segar, kning telur, kacang kedelai dan susu.', 'Membantu pertumbuhan dan perawatan jaringan erta membantu metabolisme karbohidrat, lemak, dan protein.'),
(78, 'V04', 'B3  (Niacin)', 'hati lembu, Ragi yang ditapai, sayur-sayuran segar, keju, kacang kedelai, kuning telur, susu, ubi kentang, tomat dan Gandum.', 'Menjaga kadar gula darah, dan menetralisir berbagai jenis senyawa racun.'),
(79, 'V05', 'B5 (Asam Pantotenat)', 'Daging, susu, sayur, hati, kacang hijau', 'Membentuk antibodi, serta membantu menukarkan lemak, karbohidrat dan protein pada tenaga.'),
(80, 'V06', 'B6 (Piridoksin)', 'susu, kacang hijau, dan sayur - sayuran', 'Berfungsi sebagai metabolisme protein.'),
(81, 'V07', 'B12 (Kobalamin)', 'telur, hati, dan daging, susu, usus, ikan, dan keju', 'Mengubah folat menjadi aktif, terutama sel-sel saluran cerna, sum-Sum tulang, dan Jaringan saraf'),
(82, 'V08', 'C (Asam Askorbat)', 'buah - buahan seperti jeruk, jambu biji, kiwi dan sayur- sayuran seperti paprika merah.', 'Untuk pembentukan kolagen yaitu sejenis protein yang mengukuhkan kedudukan sel badan.'),
(83, 'V09', 'D (Kalsiferol)', 'ikan, telur, susu, serta produk olahannya, seperti keju.', 'Membantu pembentukan dan pemeliharaan tulang, serta membantu pergeseran tulang dengan cara mengatur  agar kalsium tersedia di dalam darah untuk diendapkan pada proses pengerasan tulang.'),
(85, 'V010', 'E (Tokoferol)', 'susu, mentega, ', 'Sebagai antioksidan, merangsang reaksi kekebalan, mencegah penyakit jantung koroner, mencegah keguguran, dan mencegah gangguan menstruasi.'),
(87, 'V011', 'K (Filokuinona)', 'susu, kuning telur, dan sayuran segar (kol, kacang buncis dan brokoli)', 'Mencegah penuaan dini, serta membantu pembentukan protein dalam tulang dan ginjal.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kemiripan`
--
ALTER TABLE `kemiripan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemeriksaan_detail`
--
ALTER TABLE `pemeriksaan_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pemeriksaan` (`pemeriksaan_id`);

--
-- Indexes for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_penyakit` (`id_vitamin`,`id_gejala`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vitamin`
--
ALTER TABLE `vitamin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=362;
--
-- AUTO_INCREMENT for table `kemiripan`
--
ALTER TABLE `kemiripan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `pemeriksaan_detail`
--
ALTER TABLE `pemeriksaan_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=224;
--
-- AUTO_INCREMENT for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=419;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `vitamin`
--
ALTER TABLE `vitamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemeriksaan_detail`
--
ALTER TABLE `pemeriksaan_detail`
  ADD CONSTRAINT `fk_pemeriksaan` FOREIGN KEY (`pemeriksaan_id`) REFERENCES `pemeriksaan` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
