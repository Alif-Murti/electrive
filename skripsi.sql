-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 06:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(1) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'hyundaiioniq', 'electrification');

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
--

CREATE TABLE `jasa` (
  `id_jasa` int(11) NOT NULL,
  `nama_jasa` varchar(50) NOT NULL,
  `penyedia_jasa` varchar(50) NOT NULL,
  `gambar_jasa` text NOT NULL,
  `alamat_jasa` text NOT NULL,
  `kontak_jasa` varchar(50) NOT NULL,
  `desk_jasa` text NOT NULL,
  `status_jasa` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`id_jasa`, `nama_jasa`, `penyedia_jasa`, `gambar_jasa`, `alamat_jasa`, `kontak_jasa`, `desk_jasa`, `status_jasa`) VALUES
(4, '1', '1', '6373608b2e054.jpg', ' 1', '', '3', 0),
(6, 'v', 'v', '637499e3bdc49.jpg', ' v', 'https://www.w3schools.com/sql/sql_where.asp', 'g', 1),
(7, 'n', 'n', '63749c5848182.jpg', ' Rusunawa Cipinang Besar Selatan Blok E No.119', 'v', 'kjlmi', 0),
(8, 'g', 'g', '637798c49a340.jpeg', ' g', 'g', '', 0),
(9, 'ggg', 'ggg', '6377998a31052.jpeg', ' Rusunawa Cipinang Besar Selatan Blok E No.119', '1234', 'klop', 0),
(10, 'ff', 'ff', '63779a3d3536a.jpeg', ' ff', 'ff', 'ff', 0),
(11, 'aa', 'aa', '6377a6a4543bc.jpeg', ' aaaa', '00001111', '0986768976', 0),
(12, 'qwe', 'qwe', '6377aa9abd8a3.jpeg', ' qwe', '085155437703', '', 1),
(13, 'plis', 'jangan', '6377bd41545a0.jpeg', ' error', '0000000', 'hahahaha', 0),
(14, 'cek', 'lagi', '6377bd858ab9d.jpeg', ' haa', '0101001101', 'hweh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mbl` int(2) NOT NULL,
  `merek_mbl` varchar(20) NOT NULL,
  `tipe_mbl` varchar(20) NOT NULL,
  `jenis_mbl` varchar(20) NOT NULL,
  `gambar_mbl` text NOT NULL,
  `kapasitas_mbl` varchar(15) NOT NULL,
  `baterai_mbl` varchar(10) NOT NULL,
  `daya_mbl` int(3) NOT NULL,
  `torsi_mbl` int(3) NOT NULL,
  `harga_mbl` varchar(15) NOT NULL,
  `desk_mbl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mbl`, `merek_mbl`, `tipe_mbl`, `jenis_mbl`, `gambar_mbl`, `kapasitas_mbl`, `baterai_mbl`, `daya_mbl`, `torsi_mbl`, `harga_mbl`, `desk_mbl`) VALUES
(4, 'halih', '3', '4', '636a5c7f848f2.jpg', '2', ' 2', 2, 2, '2', '2'),
(5, 'tssss', '3', '3', '636a15121e83f.jpg', '3', ' 3', 3, 3, '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `id_mtr` int(2) NOT NULL,
  `merek_mtr` varchar(20) NOT NULL,
  `tipe_mtr` varchar(20) NOT NULL,
  `gambar_mtr` text NOT NULL,
  `baterai_mtr` varchar(15) NOT NULL,
  `maks_mtr` varchar(10) NOT NULL,
  `jt_mtr` varchar(10) NOT NULL,
  `harga_mtr` varchar(15) NOT NULL,
  `desk_mtr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`id_mtr`, `merek_mtr`, `tipe_mtr`, `gambar_mtr`, `baterai_mtr`, `maks_mtr`, `jt_mtr`, `harga_mtr`, `desk_mtr`) VALUES
(4, 'Yamaha', 'E01', '637610b96fdd0.jpeg', ' 4,9 kWh', '90 km/jam', '104 km', '-', 'Yamaha E01 adalah motor listrik berbasis baterai pertama yang dirilis. Sebelumnya terdapat yamaha fazzio yang merupakan varian motor hybrid. Untuk saat ini Yamaha E01 belum tersedia untuk dijual di Indonesia karena masih dalam tahap pengujian.');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi_pesan` varchar(150) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `email`, `isi_pesan`, `tanggal`) VALUES
(3, 'anakcerdas733@gmail.com', 'tes', '2022-11-17 12:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `spklu`
--

CREATE TABLE `spklu` (
  `id_spklu` int(2) NOT NULL,
  `nama_spklu` varchar(60) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(30) NOT NULL,
  `latitude` varchar(22) NOT NULL,
  `longitude` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spklu`
--

INSERT INTO `spklu` (`id_spklu`, `nama_spklu`, `alamat`, `kota`, `latitude`, `longitude`) VALUES
(4, 'SPKLU Charging Station', 'Jl. Tebet Bar., RT.10/RW.5, Tebet Bar., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12810', 'Jakarta', '-6.241421942232799', '106.85273960646903'),
(5, 'Electric Vehicle Charging Station', '7, RT.7/RW.1, Gambir, Central Jakarta City, Jakarta 10110', 'Jakarta', '-6.1794446913942815', '106.8327725793926'),
(6, 'EV Fast Charging Station', '10, RT.10/RW.10, Kampung Bali, Tanah Abang, Central Jakarta City, Jakarta 10250', 'Jakarta', '-6.184277229079185', '106.82167374658044'),
(7, 'Hyundai EV Charging Station - Botani Square Bogor', 'Jl. Pajajaran No.40, RT.04/RW.05, Tugu Kujang, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16127', 'Bogor', '-6.599301199248781', '106.80694182412887'),
(8, 'Electric Vehicle Charging Station', 'RT.05/RW.04, Tajur, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16134', 'Bogor', '-6.629321857551109', '106.82429954277099'),
(9, 'Hyundai EV Charging Station - Kuntum Farmfield', 'Jl. Raya Tajur No.291, RT.01/RW.01, Sindangrasa, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16145', 'Bogor', '-6.638795351916137', '106.83948215904725'),
(10, 'Electric Vehicle Charging Station', 'Jl. Naming D Bothin No.84, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16431', 'Depok', '-6.386911173067895', '106.82178957154353'),
(11, 'MyPertamina Charging Station', 'RT.001/RW.010, Pajang, Benda, Tangerang City, Banten 15126', 'Tangerang', '-6.1107608175922845', '106.68083739985819'),
(12, 'Hyundai EV Charging Station - Living World Alam Sutra', 'Jl. Alam Sutera Boulevard No.Kav. 21, Pakulonan, Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15325', 'Tangerang', '-6.2401971310308975', '106.65277068201222'),
(13, 'Charging Station Rest Area KM 13 A Jakarta Tangerang', 'RT.001/RW.007, Pinang, Kec. Pinang, Kota Tangerang, Banten 15145', 'Tangerang', '-6.210954153372837', '106.6827374997668'),
(14, 'SPKLU Charging Station', 'Jakarta - Cikampek Toll Rd, RT.008/RW.004, Jatibening Baru, Pondok Gede, Bekasi City, West Java 17412', 'Bekasi', '-6.252805325042018', '106.92733082186423'),
(15, 'Electric Vehicle Charging Station', 'RT.001/RW.018, Jatimakmur, Pondok Gede, Bekasi City, West Java 17413', 'Bekasi', '-6.28215460855205', '106.92904743676343');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mbl`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id_mtr`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `spklu`
--
ALTER TABLE `spklu`
  ADD PRIMARY KEY (`id_spklu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jasa`
--
ALTER TABLE `jasa`
  MODIFY `id_jasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mbl` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `id_mtr` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `spklu`
--
ALTER TABLE `spklu`
  MODIFY `id_spklu` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
