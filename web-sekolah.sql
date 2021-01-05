-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 08:00 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `gambar_berita` varchar(255) DEFAULT NULL,
  `tgl_berita` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `nama_guru` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `id_mapel` int(2) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `foto_guru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nip`, `nama_guru`, `tempat_lahir`, `tgl_lahir`, `id_mapel`, `pendidikan`, `foto_guru`) VALUES
(57, '12121212', 'Antoine Griezmann', 'bogor', '2020-03-30', 42, 'S1 Teknik Informatika', 'game1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Tata Boga'),
(4, 'Robotik'),
(7, 'Multimedia'),
(8, 'Teknik Industri'),
(9, 'Teknik Elektro'),
(10, 'Teknik Jaringan dan Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id_mapel`, `nama_mapel`) VALUES
(37, 'Fisika'),
(38, 'Bahasa inggriss'),
(39, 'Bahasa Indonesia'),
(40, 'Bahasa Jepang'),
(41, 'Web Programming'),
(42, 'Jaringan Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(255) DEFAULT NULL,
  `isi_pengumuman` text DEFAULT NULL,
  `tgl_pengumuman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(255) DEFAULT NULL,
  `nama_siswa` text DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `id_jurusan` int(11) NOT NULL,
  `foto_siswa` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nis`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `kelas`, `id_jurusan`, `foto_siswa`) VALUES
(22, '1403015067', 'Muhammad Danny Waskito', 'Bogor', '2020-04-01', '12', 7, 'gtaa2.png'),
(23, '1403015066', 'wkwk', 'bogor', '2020-04-13', '10', 1, '111.PNG'),
(24, '1403015060', 'a', 'Rosario', '2020-03-30', '10', 10, '112.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Danny', 'admin', 'admin', 1),
(2, 'waskito', 'user', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
