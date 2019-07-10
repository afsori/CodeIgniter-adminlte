-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2019 at 06:23 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `brg_id` int(11) NOT NULL,
  `kd_barang` varchar(20) NOT NULL,
  `nm_barang` varchar(100) NOT NULL,
  `stok` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`brg_id`, `kd_barang`, `nm_barang`, `stok`, `keterangan`) VALUES
(2, '002', 'Kursi', '201', 'Kursi Bahan Bagus Untuk Mahasiswa'),
(3, '09081', 'nhuihi', '98', 'jknkj'),
(5, '89798', 'jkhnui', '8876', 'jknbjk'),
(6, '004', 'Papan Tulis', '34', 'Papan tulis merek penghapus'),
(8, '9078', 'jhuih', '8768', 'uhuk'),
(9, '090', 'Spidol', '456', 'Spidol harga murah'),
(10, '789', 'jkhui', '90789', 'lknn'),
(11, '0088', 'lampu', '6786', 'jkb');

-- --------------------------------------------------------

--
-- Table structure for table `detil_transaksi`
--

CREATE TABLE `detil_transaksi` (
  `detil_trans_id` int(11) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `brg_id` int(11) NOT NULL,
  `jumlah_barang` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` char(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `perguruan_tinggi` varchar(50) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `nik`, `tgl_lahir`, `alamat`, `email`, `perguruan_tinggi`, `deskripsi`, `gambar`) VALUES
(1, 'Bayu Ferdiansyah, S.Kom, M.Ti, ENSA, HOS, CORE OF THE CORE', '1311010014', '1995-05-13', 'pagelaran', 'bayuferdi@gmail.com', 'AMIK DCC Pringsewu', 'Merupakan Dosen yang terkenal sangat ganteng dan ramah, dibalik itu semua termasuk dosen yang satu ini belum mempunyai istri. :D', ''),
(3, 'Dwi Febriana, M. Kom', '1301118118', '1996-05-06', '', 'dwifebrii@gmail.com', 'AMIK DCC Pringsewu', 'Merupakan Dosen yang terkenal sangat Cantik dan murah senyum dan sangat ramah terhadap mahasiswa, dibalik itu semua termasuk dosen yang satu ini belum mempunyai suami. :D', ''),
(4, 'siapa elo, S. Kom', '3843098420', '0000-00-00', '', 'jdasdjai@gmail.com', '', '', ''),
(5, 'eewfhio', '789789', '0000-00-00', 'jknhjkhk', 'kjnjkk@gmail.com', '', '', ''),
(8, 'Oki Fajar Saputra, S. Kom', '12908238109', '0000-00-00', '', 'okiaj@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_transaksi`
--

CREATE TABLE `jenis_transaksi` (
  `jns_trans_id` int(11) NOT NULL,
  `kd_transaksi` varchar(20) NOT NULL,
  `nm_transaksi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nrp` char(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`) VALUES
(24, 'Dewi agutina', '87856765756', 'dewiagusaja@afs.id', 'Manajemen Informatika'),
(25, 'riki', '3473289', 'riki@kk.id', 'Teknik Informatika'),
(35, 'uhiufvh', '67868768', 'njk@jnk.cd', 'Teknik Informatika'),
(42, 'saya', '321397319', 'skasjnjn@knds.c', 'Teknik Informatika'),
(44, 'bayu ferdi', '90854543', 'afs@gmail.com', 'Teknik Informatika'),
(45, 'haikar', '4757495874', 'afsoryafsor@gmail.com', 'Manajemen Informatika'),
(46, 'tau lah, gelap', '3472389', 'jkncdskj@fv.fvq', 'Teknik Informatika'),
(47, 'angga', '74342078', 'angga@gmail.com', 'Teknik Informatika'),
(48, 'anggo', '903718789', 'anggo@gmail.com', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `trans_id` int(11) NOT NULL,
  `jns_trans_id` int(11) NOT NULL,
  `kd_transaksi` varchar(100) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `gambar`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'aku siapa', 'akusiapa@gmail.com', 'default.jpg', '$2y$10$wX/ksZxZj9DLlMApCagcAeJdnCDMsTZMUx2PRrOmZMqS15afycA92', 2, 1, 1552621781),
(6, 'afs', 'afs@gmail.com', 'default.jpg', '$2y$10$lMY7jfnuBgyXizoh4fEJHOCtCczs826p8stC1E8hfUh03BwjU6ihi', 2, 1, 1555849732),
(8, 'aku', 'aka@gmail.com', 'default.jpg', '$2y$10$cIt7E4/y8GT42Aj3Re.tsOpsjf8HfUvXmHVaj1E25WMrnWzF.8ryK', 1, 1, 1557495480),
(9, 'ujang', 'ujang@gmail.com', 'default.jpg', '$2y$10$VTuOlkeP5ovgPsYP4ZhxbuyJA5JNe0TbU/S7FfvI3I8pjgTVavU.y', 2, 1, 1557496902),
(10, 'afsoria', 'afsoria@gmail.com', 'default.jpg', '$2y$10$DJqXI3ytKbqtfwR7aULKbub3meVvdzUxCoIb.jbmp69qJiLnzV/Ji', 2, 1, 1557498388),
(11, 'bayu ferdi', 'bayu@gmail.com', 'default.jpg', '$2y$10$M1e4PE1Cfxfktf5ZNmWHe.ZbiAJt6o5tAbbEiU8ZLSTbCa9TKVbzK', 2, 1, 1557750795);

-- --------------------------------------------------------

--
-- Table structure for table `user_akses_menu`
--

CREATE TABLE `user_akses_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_akses_menu`
--

INSERT INTO `user_akses_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `judul`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Profil Saya', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profil', 'user/edit', 'fas fa-fw fa-user-edit', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`brg_id`);

--
-- Indexes for table `detil_transaksi`
--
ALTER TABLE `detil_transaksi`
  ADD PRIMARY KEY (`detil_trans_id`),
  ADD KEY `trans_id` (`trans_id`),
  ADD KEY `barang_id` (`brg_id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_transaksi`
--
ALTER TABLE `jenis_transaksi`
  ADD PRIMARY KEY (`jns_trans_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `jns_trans_id` (`jns_trans_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_akses_menu`
--
ALTER TABLE `user_akses_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `brg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `detil_transaksi`
--
ALTER TABLE `detil_transaksi`
  MODIFY `detil_trans_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jenis_transaksi`
--
ALTER TABLE `jenis_transaksi`
  MODIFY `jns_trans_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_akses_menu`
--
ALTER TABLE `user_akses_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
