-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Agu 2023 pada 12.55
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komik`
--

CREATE TABLE `komik` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `komik`
--

INSERT INTO `komik` (`id`, `judul`, `slug`, `penulis`, `penerbit`, `sampul`, `created_at`, `updated_at`) VALUES
(1, 'Naruto', 'naruto', 'Masashi Kishimoto', 'Shonen Jump', 'naruto.jpg', NULL, NULL),
(2, 'One Piece', 'one-piece', 'Eiichiro Oda', 'Shonen Jmp', 'one piece.jpg', NULL, '2023-08-27 11:58:42'),
(53, 'default ', 'default', '', '', 'default.jpg', '2023-08-28 16:25:23', '2023-08-28 16:25:23'),
(55, 'diubah cuman judul', 'diubah-cuman-judul', '', '', '1693240121_85f824217d4206074be8.png', '2023-08-28 16:28:41', '2023-08-28 16:51:03'),
(56, 'diubah gambarnya ', 'diubah-gambarnya', '', '', '1693241498_fc61600928121a57f4ba.png', '2023-08-28 16:51:13', '2023-08-28 16:51:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-08-29-131552', 'App\\Database\\Migrations\\Orang', 'default', 'App', 1693315712, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orang`
--

CREATE TABLE `orang` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `orang`
--

INSERT INTO `orang` (`id`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Ghani Hakim', 'Dk. Jambu No. 894, Tanjungbalai 97050, Kaltim', '2021-04-15 14:38:29', '2023-08-29 16:30:55'),
(2, 'Gadang Balangga Pradipta M.Kom.', 'Jln. Ters. Pasir Koja No. 213, Lhokseumawe 66219, Kepri', '2014-04-27 05:26:29', '2023-08-29 16:30:56'),
(3, 'Ivan Gunawan M.TI.', 'Kpg. Untung Suropati No. 145, Ternate 48797, Malut', '1977-02-18 06:41:01', '2023-08-29 16:30:56'),
(4, 'Kamaria Mardhiyah', 'Gg. Agus Salim No. 905, Denpasar 19304, Sumsel', '1980-08-12 12:39:13', '2023-08-29 16:30:56'),
(5, 'Lili Jelita Lestari', 'Gg. Bahagia No. 756, Lhokseumawe 75689, Kalteng', '2000-04-08 13:55:08', '2023-08-29 16:30:56'),
(6, 'Betania Sudiati M.Kom.', 'Dk. Gading No. 180, Bukittinggi 67795, Lampung', '2019-07-28 08:58:17', '2023-08-29 16:30:56'),
(7, 'Belinda Zulaika', 'Ds. Sukajadi No. 332, Prabumulih 45033, Bali', '2013-06-02 02:50:44', '2023-08-29 16:30:56'),
(8, 'Cahya Hutapea', 'Dk. Baranangsiang No. 625, Lubuklinggau 86829, NTB', '1992-11-04 20:33:05', '2023-08-29 16:30:56'),
(9, 'Lurhur Latupono', 'Gg. Gading No. 446, Magelang 25568, Kalsel', '2018-07-10 13:05:30', '2023-08-29 16:30:56'),
(10, 'Najwa Suartini', 'Ki. Babakan No. 312, Bekasi 87660, Sulteng', '1978-01-18 23:23:14', '2023-08-29 16:30:56'),
(11, 'Endra Gunarto', 'Ki. Jend. Sudirman No. 110, Sorong 75651, Sumbar', '1998-03-22 21:08:00', '2023-08-29 16:30:56'),
(12, 'Banawi Gangsa Marpaung S.Pt', 'Ki. Kalimantan No. 52, Sukabumi 70781, Sumbar', '2019-08-14 17:32:22', '2023-08-29 16:30:56'),
(13, 'Gabriella Utami', 'Ds. Cikutra Timur No. 675, Yogyakarta 36473, Sulut', '2020-12-12 07:13:32', '2023-08-29 16:30:56'),
(14, 'Silvia Bella Astuti S.Kom', 'Dk. Bakhita No. 198, Cirebon 82719, Sumbar', '1997-05-14 03:42:40', '2023-08-29 16:30:56'),
(15, 'Gangsa Sihotang S.Gz', 'Gg. Abdul Rahmat No. 932, Denpasar 56374, Malut', '2006-11-06 10:53:06', '2023-08-29 16:30:56'),
(16, 'Umay Uwais', 'Kpg. Teuku Umar No. 231, Malang 17961, Babel', '1999-02-27 12:38:57', '2023-08-29 16:30:56'),
(17, 'Patricia Hariyah', 'Kpg. Ciumbuleuit No. 866, Pariaman 42667, Sumbar', '1995-11-27 05:08:20', '2023-08-29 16:30:56'),
(18, 'Lukita Santoso', 'Psr. HOS. Cjokroaminoto (Pasirkaliki) No. 589, Medan 34114, Maluku', '2005-04-28 00:06:44', '2023-08-29 16:30:57'),
(19, 'Hendra Saputra', 'Ki. Flora No. 810, Tanjungbalai 55780, Pabar', '2004-07-26 22:35:19', '2023-08-29 16:30:57'),
(20, 'Kamidin Gunawan', 'Ki. Imam Bonjol No. 601, Kupang 10747, NTB', '1988-03-02 01:25:40', '2023-08-29 16:30:57'),
(21, 'Nova Sari Mulyani S.Gz', 'Jr. Laswi No. 750, Magelang 30762, Sulsel', '2022-04-17 03:13:36', '2023-08-29 16:30:57'),
(22, 'Umar Waluyo', 'Jr. Ters. Jakarta No. 148, Cimahi 77102, Sumbar', '2018-04-22 12:05:53', '2023-08-29 16:30:57'),
(23, 'Rangga Pradipta M.Farm', 'Ds. Salatiga No. 599, Cimahi 95843, Pabar', '2004-06-26 06:06:30', '2023-08-29 16:30:57'),
(24, 'Yessi Rahmawati', 'Ds. Nangka No. 599, Sawahlunto 59147, Aceh', '1982-02-01 00:27:31', '2023-08-29 16:30:57'),
(25, 'Ratna Dewi Lestari', 'Gg. Kalimalang No. 733, Pekalongan 60562, Jateng', '2016-05-05 13:14:27', '2023-08-29 16:30:57'),
(26, 'Pandu Wijaya', 'Jln. Abdul Rahmat No. 913, Administrasi Jakarta Selatan 29583, NTB', '2016-04-02 21:28:22', '2023-08-29 16:30:57'),
(27, 'Juli Hassanah', 'Jr. Pasir Koja No. 784, Administrasi Jakarta Pusat 65888, Jateng', '2021-05-12 11:02:35', '2023-08-29 16:30:57'),
(28, 'Talia Nasyidah', 'Kpg. Laswi No. 260, Kupang 46702, NTT', '2001-06-20 19:55:33', '2023-08-29 16:30:57'),
(29, 'Mursinin Tarihoran', 'Dk. Sampangan No. 120, Malang 56131, Sulut', '2017-08-13 22:10:40', '2023-08-29 16:30:57'),
(30, 'Digdaya Budiyanto', 'Jr. Taman No. 239, Mojokerto 16284, Jateng', '2005-02-13 00:42:35', '2023-08-29 16:30:57'),
(31, 'Mahfud Wasita S.Sos', 'Ds. Sampangan No. 368, Pariaman 69323, Papua', '1977-02-25 20:51:44', '2023-08-29 16:30:57'),
(32, 'Lintang Pudjiastuti M.TI.', 'Gg. Banda No. 474, Pekalongan 77871, Kalteng', '2021-11-13 21:50:55', '2023-08-29 16:30:58'),
(33, 'Leo Nashiruddin', 'Kpg. Pattimura No. 806, Pagar Alam 33259, NTB', '1972-11-22 02:20:44', '2023-08-29 16:30:58'),
(34, 'Jaeman Kurnia Uwais S.T.', 'Dk. Monginsidi No. 797, Administrasi Jakarta Barat 18510, Sulbar', '1988-05-22 12:28:48', '2023-08-29 16:30:58'),
(35, 'Panca Widodo M.Farm', 'Gg. Basmol Raya No. 977, Pagar Alam 16654, Malut', '1996-04-27 15:04:59', '2023-08-29 16:30:58'),
(36, 'Gabriella Halimah', 'Ds. Tentara Pelajar No. 90, Pariaman 66109, Kaltara', '1989-05-20 08:54:07', '2023-08-29 16:30:58'),
(37, 'Harjo Waskita M.Farm', 'Gg. Casablanca No. 624, Gorontalo 52051, Babel', '1995-07-22 15:56:46', '2023-08-29 16:30:58'),
(38, 'Teguh Hakim', 'Jln. Gambang No. 440, Tasikmalaya 16640, Sulbar', '2004-09-19 21:15:55', '2023-08-29 16:30:58'),
(39, 'Agus Habibi S.Gz', 'Jln. Villa No. 162, Batam 26692, DIY', '1989-07-10 18:48:08', '2023-08-29 16:30:58'),
(40, 'Balamantri Cakrawangsa Putra', 'Jln. Honggowongso No. 495, Bekasi 91281, Papua', '1976-08-10 06:24:55', '2023-08-29 16:30:58'),
(41, 'Cici Hariyah', 'Dk. Bagas Pati No. 555, Dumai 13993, Babel', '2013-07-03 12:00:03', '2023-08-29 16:30:58'),
(42, 'Bajragin Gambira Wijaya S.Psi', 'Jln. Bahagia  No. 899, Banjarmasin 73814, Banten', '1986-01-24 00:27:19', '2023-08-29 16:30:58'),
(43, 'Aslijan Mustofa Wasita S.Kom', 'Ds. R.M. Said No. 226, Ternate 39174, NTB', '1995-09-28 12:49:33', '2023-08-29 16:30:58'),
(44, 'Zaenab Tira Kusmawati', 'Dk. Rumah Sakit No. 815, Sabang 38373, Sumsel', '2007-08-05 01:55:39', '2023-08-29 16:30:59'),
(45, 'Lukita Widodo', 'Ki. Soekarno Hatta No. 900, Administrasi Jakarta Utara 78327, Jambi', '1971-08-17 20:08:56', '2023-08-29 16:30:59'),
(46, 'Septi Usamah', 'Jln. Gedebage Selatan No. 713, Surakarta 97612, Sumsel', '1978-07-11 23:17:33', '2023-08-29 16:30:59'),
(47, 'Laswi Harjo Thamrin S.Gz', 'Dk. Baan No. 794, Tangerang Selatan 91559, Sumbar', '2013-01-17 16:55:43', '2023-08-29 16:30:59'),
(48, 'Taswir Galak Hutapea', 'Gg. Baja No. 658, Tegal 58797, Kepri', '2003-04-02 18:43:40', '2023-08-29 16:30:59'),
(49, 'Hana Sudiati', 'Gg. Bak Air No. 17, Cirebon 10910, Sulsel', '2007-10-14 21:24:14', '2023-08-29 16:30:59'),
(50, 'Salwa Novitasari M.Kom.', 'Gg. Dewi Sartika No. 907, Cimahi 25433, Maluku', '1984-06-01 04:24:14', '2023-08-29 16:30:59'),
(51, 'Surya Natsir', 'Kpg. Abdul No. 41, Dumai 87143, Sulteng', '2002-10-22 03:57:03', '2023-08-29 16:30:59'),
(52, 'Ajeng Susanti', 'Ki. Basuki No. 331, Lubuklinggau 83166, Riau', '1995-06-18 05:06:27', '2023-08-29 16:30:59'),
(53, 'Kawaca Sinaga', 'Dk. Yap Tjwan Bing No. 632, Administrasi Jakarta Pusat 23181, Sulsel', '1992-11-26 00:27:43', '2023-08-29 16:30:59'),
(54, 'Nadine Hastuti S.Psi', 'Kpg. Thamrin No. 986, Sukabumi 73379, Sulsel', '2023-03-17 08:44:40', '2023-08-29 16:31:00'),
(55, 'Cemeti Saptono', 'Kpg. Juanda No. 28, Payakumbuh 95710, Sumut', '2016-02-22 08:35:41', '2023-08-29 16:31:00'),
(56, 'Ajeng Ira Susanti', 'Ki. Pahlawan No. 267, Serang 61679, Bali', '1971-07-16 18:55:29', '2023-08-29 16:31:00'),
(57, 'Ihsan Pangestu', 'Gg. Arifin No. 568, Madiun 55028, NTT', '1972-01-11 01:47:51', '2023-08-29 16:31:00'),
(58, 'Lantar Hardiansyah', 'Jln. Orang No. 857, Magelang 32934, Pabar', '1994-07-25 09:45:28', '2023-08-29 16:31:00'),
(59, 'Taufik Kuncara Nugroho S.Gz', 'Gg. Abdul. Muis No. 914, Tangerang Selatan 20949, NTB', '2016-06-23 08:17:08', '2023-08-29 16:31:00'),
(60, 'Sabri Adriansyah S.Farm', 'Ds. Achmad Yani No. 471, Lubuklinggau 56883, Lampung', '2012-11-14 13:17:08', '2023-08-29 16:31:00'),
(61, 'Rini Salwa Nuraini M.Ak', 'Kpg. Gardujati No. 618, Depok 81365, NTT', '1979-01-25 19:17:52', '2023-08-29 16:31:00'),
(62, 'Hasna Safitri', 'Jr. Astana Anyar No. 84, Salatiga 94564, Kalteng', '1983-02-02 08:29:37', '2023-08-29 16:31:00'),
(63, 'Dinda Maryati', 'Psr. Taman No. 143, Bogor 82452, Jambi', '1978-11-07 04:26:25', '2023-08-29 16:31:00'),
(64, 'Lamar Budiyanto', 'Ds. Bahagia  No. 71, Medan 83544, DIY', '2007-12-20 15:30:37', '2023-08-29 16:31:00'),
(65, 'Jaswadi Prasetyo', 'Dk. Yos Sudarso No. 58, Kotamobagu 92536, Sulsel', '2015-06-21 18:25:20', '2023-08-29 16:31:00'),
(66, 'Laila Suryatmi S.H.', 'Psr. Adisucipto No. 74, Pangkal Pinang 55501, Malut', '1982-12-14 20:54:07', '2023-08-29 16:31:00'),
(67, 'Heryanto Surya Natsir', 'Ki. Baranang Siang No. 211, Makassar 26819, DKI', '2002-01-27 05:30:56', '2023-08-29 16:31:00'),
(68, 'Gabriella Jessica Lestari S.I.Kom', 'Psr. Veteran No. 623, Langsa 43108, DKI', '2003-12-11 21:49:12', '2023-08-29 16:31:00'),
(69, 'Siti Anggraini', 'Ki. Tambak No. 935, Pariaman 92538, Gorontalo', '1972-04-16 18:34:43', '2023-08-29 16:31:01'),
(70, 'Olga Hutagalung', 'Psr. Raden Saleh No. 4, Salatiga 57580, Kalbar', '2002-11-28 07:40:30', '2023-08-29 16:31:01'),
(71, 'Aslijan Thamrin', 'Jln. Bagis Utama No. 563, Solok 85886, Kepri', '2002-03-14 19:14:53', '2023-08-29 16:31:01'),
(72, 'Amelia Rahmawati', 'Ki. Muwardi No. 641, Binjai 42639, Kalteng', '1979-10-21 23:13:18', '2023-08-29 16:31:01'),
(73, 'Mila Nurdiyanti S.Ked', 'Dk. Lumban Tobing No. 548, Medan 17197, Banten', '2004-10-25 20:32:38', '2023-08-29 16:31:01'),
(74, 'Asman Gunawan', 'Dk. Baabur Royan No. 592, Bima 78055, Papua', '1985-12-12 21:53:56', '2023-08-29 16:31:01'),
(75, 'Kemba Hutapea', 'Psr. Bawal No. 522, Tanjung Pinang 92131, Papua', '1971-02-28 13:11:01', '2023-08-29 16:31:01'),
(76, 'Tantri Puti Hartati S.Pt', 'Psr. Sugiono No. 552, Tebing Tinggi 67893, NTB', '1975-05-11 10:47:17', '2023-08-29 16:31:01'),
(77, 'Ozy Aris Maryadi', 'Psr. Ki Hajar Dewantara No. 127, Tasikmalaya 96782, Papua', '2019-04-11 21:05:51', '2023-08-29 16:31:01'),
(78, 'Mutia Cinthia Purnawati', 'Ds. Cokroaminoto No. 825, Singkawang 29670, Sumsel', '2014-02-16 08:24:57', '2023-08-29 16:31:01'),
(79, 'Ana Yuliarti', 'Kpg. Basoka No. 398, Tarakan 14860, Jateng', '2006-02-25 00:52:11', '2023-08-29 16:31:01'),
(80, 'Gangsa Harimurti Suryono', 'Gg. Yohanes No. 703, Mataram 88451, Lampung', '1988-05-14 04:31:12', '2023-08-29 16:31:01'),
(81, 'Bambang Megantara', 'Jr. Raden Saleh No. 145, Langsa 14712, Sultra', '2016-06-22 01:52:10', '2023-08-29 16:31:01'),
(82, 'Yono Nashiruddin S.H.', 'Jln. Ronggowarsito No. 815, Balikpapan 70164, Sumbar', '1985-07-15 11:00:56', '2023-08-29 16:31:02'),
(83, 'Ina Pratiwi', 'Jln. Barat No. 959, Bima 72315, Sulbar', '2005-12-11 21:32:40', '2023-08-29 16:31:02'),
(84, 'Zulfa Hana Suryatmi', 'Jr. Baranang Siang Indah No. 375, Batu 66632, Kalsel', '2008-06-01 03:50:19', '2023-08-29 16:31:02'),
(85, 'Betania Wahyuni', 'Jr. Suharso No. 665, Tual 26527, Sumsel', '1980-12-16 20:19:24', '2023-08-29 16:31:02'),
(86, 'Damar Dimas Natsir M.M.', 'Ki. Lada No. 386, Pasuruan 37089, DIY', '1991-05-24 01:50:33', '2023-08-29 16:31:02'),
(87, 'Yani Usamah', 'Ds. Adisumarmo No. 413, Madiun 70124, Papua', '1970-10-15 22:07:09', '2023-08-29 16:31:02'),
(88, 'Oni Farah Safitri M.Kom.', 'Jln. Bank Dagang Negara No. 943, Denpasar 52845, Sumsel', '2001-04-02 22:05:18', '2023-08-29 16:31:02'),
(89, 'Siska Anita Melani', 'Ds. Supomo No. 265, Kendari 33882, Sumsel', '1993-02-25 05:50:25', '2023-08-29 16:31:02'),
(90, 'Ellis Zulaika', 'Psr. Arifin No. 807, Surakarta 36683, Bengkulu', '2019-04-03 01:00:05', '2023-08-29 16:31:02'),
(91, 'Mutia Utami S.H.', 'Kpg. Wora Wari No. 789, Semarang 27960, Gorontalo', '1970-09-25 13:15:55', '2023-08-29 16:31:02'),
(92, 'Putri Gina Padmasari', 'Jr. Baranangsiang No. 509, Tomohon 12362, Riau', '2020-12-23 09:39:39', '2023-08-29 16:31:03'),
(93, 'Jefri Eluh Anggriawan', 'Jln. Kyai Mojo No. 503, Bandar Lampung 61640, Jambi', '2007-03-12 19:43:54', '2023-08-29 16:31:03'),
(94, 'Raharja Prasetya', 'Jr. Tambak No. 535, Administrasi Jakarta Barat 66482, Riau', '1976-07-03 10:29:44', '2023-08-29 16:31:03'),
(95, 'Ami Padmasari S.E.I', 'Kpg. Nangka No. 809, Tarakan 98031, NTB', '2015-12-09 20:03:19', '2023-08-29 16:31:03'),
(96, 'Raden Prasasta', 'Dk. R.E. Martadinata No. 62, Administrasi Jakarta Timur 18552, NTT', '2001-05-11 16:36:22', '2023-08-29 16:31:03'),
(97, 'Jane Hassanah S.T.', 'Gg. Laswi No. 107, Batu 82680, Sumbar', '2012-04-25 21:06:05', '2023-08-29 16:31:03'),
(98, 'Padmi Laksita', 'Dk. Jend. Sudirman No. 520, Magelang 70199, Sumbar', '1997-11-02 11:08:13', '2023-08-29 16:31:03'),
(99, 'Rahayu Puspita', 'Psr. Padang No. 627, Magelang 93423, Papua', '1989-12-08 23:14:02', '2023-08-29 16:31:03'),
(100, 'Zamira Widiastuti', 'Jr. Monginsidi No. 269, Magelang 90470, Sulut', '2011-01-29 04:05:25', '2023-08-29 16:31:03');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `komik`
--
ALTER TABLE `komik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orang`
--
ALTER TABLE `orang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `komik`
--
ALTER TABLE `komik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `orang`
--
ALTER TABLE `orang`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
