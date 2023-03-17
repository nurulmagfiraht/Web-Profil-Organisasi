-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 08:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organisasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE `table_admin` (
  `id_admin` int(20) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_admin`
--

INSERT INTO `table_admin` (`id_admin`, `nama_admin`, `password`) VALUES
(1, 'Sutrisman', '202cb962ac59075b964b07152d234b70'),
(2, 'Nurul', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `table_alumni`
--

CREATE TABLE `table_alumni` (
  `id_alumni` int(10) NOT NULL,
  `nama_alumni` varchar(255) NOT NULL,
  `angkatan_alumni` int(20) NOT NULL,
  `nomor_alumni` varchar(20) NOT NULL,
  `email_alumni` varchar(255) NOT NULL,
  `alamat_makassar` varchar(255) NOT NULL,
  `alamat_soppeng` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_alumni`
--

INSERT INTO `table_alumni` (`id_alumni`, `nama_alumni`, `angkatan_alumni`, `nomor_alumni`, `email_alumni`, `alamat_makassar`, `alamat_soppeng`) VALUES
(2, 'Irsan', 2017, '087865899254', 'irsanlatif7@gmail.com', 'Jl. Muh. Jufri 4 no.20', 'Jl Enrekeng'),
(4, 'Yunita Darma', 2018, '085256843426', 'Yunitadarma713@gmail.com', 'BTP Blok AE', 'Mattabulu'),
(5, 'Muhammad Gafur', 2017, '085298361519', 'muhammadd.gafur@gmail.com', 'Per. Dewi Karmila sari ', 'Cennoe'),
(6, 'Rahmayanti Rauf', 2014, '082347032421', 'raaahmaaayyy@gmail.com', 'Perumnas Sudiang, Jl. Selayar Raya Blok M No. 112', 'Abbanuange, Lajoa'),
(7, 'Muhammad Zul Iptek Manwan', 2018, '081343429011', 'Zulmanwan26@gmail.com', 'Permata Sudiang Raya', 'Lajoa'),
(8, 'Khairunnisa Azzahra', 2017, '085158562899', 'khaiirunnisazz@gmail.com', 'BTN Nusa Indah, Pallangga, Gowa', 'Jl Pasar Sentral'),
(9, 'Andi Muh. Raihan', 2012, '085299934900', 'andiraihani@gmail.com', 'Puri Taman Sari Blok G4 No.2', 'BTN Husada Permai'),
(10, 'A M Aminul Askar', 2017, '087800075305', 'andiaskar705@gmail.com', 'Maros', 'Kubba'),
(11, 'Aguswandi', 2016, '081341782095', 'wandiagus493@gmail.com', 'Sulawesi Tenggara', 'Cangadi'),
(12, 'A.Annisa Ida Mawarni, S.Tr.T', 2017, '082154200881', 'andiannisaa300415@gmail.com', 'Jl. Sahabat 3', 'Kabaro, Desa Labokong'),
(18, 'Asbi Jayadi, A.Md.T', 2016, '081243354465', 'asbijayadi@gmail.com', 'BTP Blok A', 'Kabaro, Desa Labokong');

-- --------------------------------------------------------

--
-- Table structure for table `table_kegiatan`
--

CREATE TABLE `table_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_kegiatan`
--

INSERT INTO `table_kegiatan` (`id_kegiatan`, `photo`, `keterangan`) VALUES
(5, '23072022120315-kegiatan-ANNIVERSARY.jpg', 'Anniversary VI IMS PNUP'),
(6, '23072022120409-kegiatan-baksos.jpeg', 'BAKSOS 2022 IMS PNUP'),
(7, '23072022120458-kegiatan-kajian kedaerahan.jpg', 'Kajian Kedaerahan \"La Galigo\"'),
(8, '23072022120552-kegiatan-pengkaderan 2021.jpg', 'PENGADERAN 2021'),
(9, '23072022120631-kegiatan-persembahan anniversary VI IMS.jpg', 'Persembahan Anniversary VI IMS PNUP'),
(11, '23072022122409-kegiatan-23072022121904-kegiatan-kajian dan diskusi.jpg', 'Kajian dan Diskusi \"Sejarah IMS PNUP\" oleh Kakanda Ibrahim di Sekretariat IMS PNUP, 18 Juli 2022');

-- --------------------------------------------------------

--
-- Table structure for table `table_struktur`
--

CREATE TABLE `table_struktur` (
  `id_nama` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `nim` int(11) NOT NULL,
  `jenis_kelamin` enum('L','P','','') NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_handphone` varchar(11) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_struktur`
--

INSERT INTO `table_struktur` (`id_nama`, `nama`, `divisi`, `jabatan`, `periode`, `foto`, `nim`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `no_handphone`, `alamat`) VALUES
(12, 'Gugun Maulana Ashar, A.Md.T', 'Pengurus inti', 'Ketua Dpo', '2021/2022', 'akram.JPG', 321180030, 'L', 'Batu-batu', NULL, '08135412345', 'Pesona Pelangi Residence'),
(13, 'Fadhil Farid', 'Pengurus inti', 'Ketua Umum', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(14, 'Nurcahyati Sarjuni', 'Pengurus inti', 'Sekertaris Umum', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(15, 'Alda Wandana', 'Pengurus inti', 'Bendahara Umum', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(16, 'Muh. Multazam', 'Dept. Pengkaderan', 'Kordinator', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(17, 'Ikhlasul Amal Muhlis', 'Dept. Pengkaderan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(18, 'Maemunah', 'Dept. Pengkaderan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(19, 'Reski', 'Dept. Pengkaderan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(20, 'Ricky Rahmat', 'Dept. Pengkaderan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(21, 'Umar Yusuf', 'Dept. Pengkaderan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(22, 'Muh. Ilham', 'Dept. Hubungan Masyarakat', 'Kordinator', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(23, 'A.Abdiawan Prawira Negara', 'Dept. Hubungan Masyarakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(24, 'Andi Triannisa Zalzabila', 'Dept. Hubungan Masyarakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(25, 'Akram Alimin', 'Dept. Hubungan Masyarakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(26, 'Askar Nur', 'Dept. Hubungan Masyarakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(27, 'Ayyun Syah Muharram', 'Dept. Hubungan Masyarakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(28, 'Azrah Dwi Ningsih', 'Dept. Hubungan Masyarakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(29, 'Muh. Fajri', 'Dept. Hubungan Masyarakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(30, 'Fandi Kusuma', 'Dept. Hubungan Masyarakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(31, 'Indah Purnama Sari', 'Dept. Hubungan Masyarakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(32, 'Irmawati Irham', 'Dept. Hubungan Masyarakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(33, 'Muh. Irham Hidayatullah', 'Dept. Hubungan Masyarakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(34, 'Muhammad Yusuf', 'Dept. Hubungan Masyarakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(35, 'Nurazizah', 'Dept. Hubungan Masyarakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(36, 'Nurul Magfirah Tenriajeng', 'Dept. Hubungan Masyarakat', 'Anggota', '2021/2022', 'numa.jpg', 42520043, 'P', 'Watansoppeng', NULL, '08218895980', 'Perumahan Mangga Tiga Blok H1 No.6'),
(37, 'Resky Amalia', 'Dept. Hubungan Masyarakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(38, 'Selviyana Safitri', 'Dept. Hubungan Masyarakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(39, 'Miftahul Ginayah', 'Dept. Dana Dan Kesektariatan', 'Kordinator', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(40, 'A.Silva Sutera', 'Dept. Dana Dan Kesektariatan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(41, 'Evania Herasti Aurelia', 'Dept. Dana Dan Kesektariatan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(42, 'Faisal Akbar', 'Dept. Dana Dan Kesektariatan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(43, 'Fitri Zanjaya', 'Dept. Dana Dan Kesektariatan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(44, 'Jumadil Azis', 'Dept. Dana Dan Kesektariatan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(45, 'Muh. Nurhasryan Hasbi', 'Dept. Dana Dan Kesektariatan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(46, 'Nurasikin', 'Dept. Dana Dan Kesektariatan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(47, 'Nur Aulia', 'Dept. Dana Dan Kesektariatan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(48, 'Nur Fahmi', 'Dept. Dana Dan Kesektariatan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(49, 'Nurul Aulia', 'Dept. Dana Dan Kesektariatan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(50, 'Qurratul Aini', 'Dept. Dana Dan Kesektariatan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(51, 'Syamsul Ma’arif', 'Dept. Dana Dan Kesektariatan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(52, 'Utari Ainil Ilmi', 'Dept. Dana Dan Kesektariatan', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(53, 'Kurniawan', 'Dept. Minat Bakat', 'Kordinator', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(54, 'Anjas', 'Dept. Minat Bakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(55, 'Ansar', 'Dept. Minat Bakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(56, 'Asbar', 'Dept. Minat Bakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(57, 'Aulia Putri Adrianti', 'Dept. Minat Bakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(58, 'Hastriana', 'Dept. Minat Bakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(59, 'Iin Safitri', 'Dept. Minat Bakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(60, 'M. Ashar Alhakim', 'Dept. Minat Bakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(61, 'M. Farhan Saputra', 'Dept. Minat Bakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(62, 'Muh. Agung Perdana', 'Dept. Minat Bakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(63, 'Muhammad Hidayatullah', 'Dept. Minat Bakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(64, 'Muhammad Jamil Asri', 'Dept. Minat Bakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(65, 'Muh. Hilal Priyatama', 'Dept. Minat Bakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(66, 'Musdalifah', 'Dept. Minat Bakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(67, 'Nofia', 'Dept. Minat Bakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(68, 'Nurul Rezky Anugrah', 'Dept. Minat Bakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(69, 'Riri', 'Dept. Minat Bakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(70, 'Umar', 'Dept. Minat Bakat', 'Anggota', '2021/2022', '', 0, 'L', '', NULL, '0', ''),
(71, 'Yan Febrian', 'Dept. Hubungan Masyarakat', 'Kordinator', '2021/2022', 'Yan.JPG', 32120032, 'L', 'Soppeng', '2002-01-01', '08218895980', 'BTP Blok L');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `table_alumni`
--
ALTER TABLE `table_alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `table_kegiatan`
--
ALTER TABLE `table_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `table_struktur`
--
ALTER TABLE `table_struktur`
  ADD PRIMARY KEY (`id_nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_alumni`
--
ALTER TABLE `table_alumni`
  MODIFY `id_alumni` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `table_kegiatan`
--
ALTER TABLE `table_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `table_struktur`
--
ALTER TABLE `table_struktur`
  MODIFY `id_nama` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
