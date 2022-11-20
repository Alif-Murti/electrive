-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 03:41 PM
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
(1, 'hyundaiioniq', 'electrification'),
(2, 'airev', 'wuling');

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
(11, 'aa', 'aa', '6377a6a4543bc.jpeg', ' aaaa', '00001111', '0986768976', 0),
(12, 'qwe', 'qwe', '6377aa9abd8a3.jpeg', ' qwe', '085155437703', '', 1),
(13, 'plis', 'jangan', '6377bd41545a0.jpeg', ' error', '0000000', 'hahahaha', 0),
(14, 'cek', 'lagi', '6377bd858ab9d.jpeg', ' haa', '0101001101', 'hweh', 0),
(15, 'tes jasa', 'tes jasa', '637997ea16c27.png', ' tes jasa', 'tes jasa', 'tes jasa', 0),
(16, 'tes jasa', 'tes jasa', '6379980fca8da.jpg', ' tes jasa', '123445', 'tes jasa tes jasa tes jasa tes jasa tes jasa tes jasa tes jasa tes jasa tes jasa tes jasa tes jasa tes jasa tes jasa tes jasa tes jasa tes jasa tes jasa tes jasa tes jasa tes jasa', 1);

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
  `jt_mbl` varchar(15) NOT NULL,
  `daya_mbl` varchar(8) NOT NULL,
  `torsi_mbl` varchar(8) NOT NULL,
  `harga_mbl` varchar(15) NOT NULL,
  `desk_mbl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mbl`, `merek_mbl`, `tipe_mbl`, `jenis_mbl`, `gambar_mbl`, `kapasitas_mbl`, `baterai_mbl`, `jt_mbl`, `daya_mbl`, `torsi_mbl`, `harga_mbl`, `desk_mbl`) VALUES
(6, 'Toyota', 'BZ4X', 'BEV', '63799a6b417e7.jpg', '-', ' 71,4kWh', '500 KM', '201 HP', '266 NM', ' Rp. 1.190.000.', 'Toyota BZ4X adalah mobil listrik berbasis BEV pertama dari Toyota. Mobil ini digunakan oleh Indonesia sebagai kendaraan operasional dalam penyelenggaraan KTT G20 di Bali. Toyota bZ4X dibanderol Rp 1,190 miliar. Mobil listrik besutan pabrikan Jepang ini hanya dijual dalam satu varian yakni penggerak roda depan (FWD) yang dibekali baterai lithium-ion 335 volt dengan kapasitas 71,4 kWh yang mampu menghasilkan tenaga 244 hp dan torsi 266 Nm. Mobil ini dapat menempuh jarak 500 km dalam sekali pengecasan, sementara untuk waktu pengisian daya membutuhkan 30 menit dari posisi kosong hingga 80 persen.'),
(7, 'Nissan', 'Kicks e-Power', 'HEV', '63799b5fd8f9a.jpg', '41 liter', ' -', '541 KM', '260 HP', '500 NM', 'Rp482.800.000', 'Teknologi Nissan e-POWER terdiri dari mesin 3-silinder kecil berukuran 1.2 liter, generator, inverter, dan motor elektrik. Mesin ICE (Internal Combustion Engine) dan generator akan menghasilkan listrik yang tersimpan di baterai lithium-ion, lalu menyalurkannya ke motor elektrik untuk memberi daya tanpa perlu recharging listrik dari luar. Memberikan pengalaman berkendara baru dengan motor yang 100% digerakkan oleh tenaga listrik.'),
(8, 'Hyundai', 'Ioniq 5', 'BEV', '63799cdcc5931.jpg', '-', ' 58 kWh', '384 KM', '170 HP', '350 NM', 'Rp748.000.000', 'IONIQ 5 dibangun melalui arsitektur BEV khusus dari Hyundai Motor Group yang disebut Electric-Global Modular Platform (E-GMP). Konsep itu memungkinkan IONIQ memiliki proporsi unik dari wheelbase yang memanjang. Melalui platform E-GMP, IONIQ 5 menawarkan desain interior dengan material ramah lingkungan di beberapa titik tertentu, performa kuat yang dipadukan dengan pengisian daya sangat cepat serta fungsi Vehicle-to-Load (V2L).'),
(9, 'Wuling', 'Air EV', 'BEV', '63799d9abf363.png', '-', ' 17,3 kWh', '200 KM', '40 HP', '110 NM', 'Rp238.000.000', 'Wuling Air ev merupakan mobil listrik pertama Wuling yang mengusung desain future-tech. Dengan tagline “Drive For A Green Life”, kendaraan cerdas ini menawarkan smart driving experience dengan fitur-fitur canggih yang disematkan, sehingga membuat perjalanan Anda terasa lebih mudah dan nyaman. Spesifikasi Wuling Air ev juga sudah dilengkapi dengan IoV (Internet of Vehicle) atau Wuling Remote Control App, fitur perintah suara pintar berbahasa Indonesia pertama dan satu-satunya di industri otomotif Indonesia yaitu WIND (Wuling Indonesian Command), serta fitur Easy Home Charging yang memungkinkan penggunanya bisa melakukan pengisian daya dengan mudah.'),
(10, 'Nissan', 'Leaf', 'BEV', '63799e3948f98.png', '-', ' 40 kWh', '378 KM', '148 HP', '320 NM', 'Rp728.000.000', 'All-New Nissan Leaf merupakan 100% kendaraan elektrik berbasis baterai yang memanfaatkan tenaga listrik untuk mengisi ulang dayanya. Dengan kapasitas baterai lebih besar, The All-New Nissan Leaf menjadi kendaraan ideal beraktifitas sehari-hari didukung kemudahan pengisian daya baterai. Nikmati The All-New Nissan Leaf, kendaraan elektrik pertama yang dijual secara umum dengan full bertenaga listrik.'),
(11, 'Hyundai', 'Kona Electric', 'BEV', '63799f332c818.png', '-', ' 39,2 kWh', '305 KM', '136 HP', '395 NM', 'Rp742.000.000', 'Semua aspek dari KONA Electric membuktikan kekuatan dari inovasi terbaru. Desain terkini dengan tenaga elektrik murni untuk berkendara dengan jarak tempuh 305 km (berdasarkan metode pengukuran WLTP*), ditambah rangkaian fitur konektivitas dan keselamatan canggih yang menempatkan Anda di barisan terdepan dalam tren dan teknologi. Manfaatkan kekuatan energi positif dalam keseharian Anda bersama KONA Electric. Pengisian daya KONA Electric sangat fleksibel. Dapat melalui AC charger, DC fast charger yang hanya membutuhkan waktu kurang dari 1 jam sampai 80% daya baterai. Dan juga melalui portable charger yang dapat terhubung ke stop kontak arus listrik rumah tangga.'),
(12, 'Mini', 'Electric', 'BEV', '6379a07a9e328.jpeg', '-', ' 32,6 kWh', '232 KM', '184 HP', '270 NM', 'Rp945.000.000', 'Mini Electric ditawarkan dalam dua varian, yakni Mini Electric dan Mini Electric Collection. Mobil ini sekaligus menjadi kendaraan kompak premium full listrik pertama di Indonesia. Mini Electric menggunakan motor listrik berkapasitas 32,6 kWh yang mampu menempuh jarak sekitar 232 kilometer. Berpenggerak roda depan, mobil memiliki tenaga maksimum 135 kWh atau 184 tk dan torsi puncak 270 Nm. Bicara soal harga, Mini Electric dan Mini Electric Collection masing-masing ditawarkan dengan harga Rp 945.000.000,- off-the-road dan 955.000.000,- off-the-road.'),
(13, 'Lexus', 'UX300e', 'BEV', '6379b79951753.jpg', '-', ' 54,3 kWh', '300 KM', '201 HP', '300 NM', 'Rp1.245.000.000', 'Lexus UX 300e mulai dipasarkan di Indonesia pada November 2020. mobil ini merupakan compact luxury Crossover berteknologi full listrik (battery electric vehicle/BEV) pertama dari Lexus. Sementara peluncuran Lexus UX 300e di Indonesia merupakan yang pertama dilakukan di Asia Tenggara dengan harga jual Rp 1,245 miliar. Sebagai informasi, Lexus UX 300e mengandalkan baterai Lithium-ion dengan kapasitas 54,3 kWh yang mampu menempuh jarak 400 kilometer saat baterai dalam keadaan penuh. Motor listrik ini mampu menghasilkan tenaga hingga 204 tenaga kuda (tk), dan torsi maksimal 300 Nm. Adapun durasi pengisian baterai 0-100 persen lewat D Fast Charging kurang lebih membutuhkan waktu 50 menit.');

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
(4, 'Yamaha', 'E01', '637610b96fdd0.jpeg', ' 4,9 kWh', '90 km/jam', '104 km', '-', 'Yamaha E01 adalah motor listrik berbasis baterai pertama yang dirilis. Sebelumnya terdapat yamaha fazzio yang merupakan varian motor hybrid. Untuk saat ini Yamaha E01 belum tersedia untuk dijual di Indonesia karena masih dalam tahap pengujian.'),
(5, 'Gesits', 'G1', '6379a24c41655.jpg', ' 5kWh', '70 km/jam', '50 km', 'Rp28.000.000', 'Motor listrik Gesits menggunakan tenaga listrik dengan daya motor 5KW. Sekali pengisian daya, motor listrik Gesits bisa digunakan untuk berkendara sejauh sekitar 50 kilomter untuk baterai tunggal dan 100 kilometer untuk baterai ganda. Untuk performanya sendiri bisa mencapai kecepatan maksimal kurang lebih 70 km/jam.'),
(6, 'Alva', 'ONE', '6379a397769af.jpg', ' 2,7 kWh', '60-90 km/j', '70 km', 'Rp34.900.000', 'Motor ini didesain menggunakan hub drive motor, yang artinya motor listrik langsung menggerakan roda tanpa menggunakan pentransfer daya. Motor ini diklaim mampu menghasilkan daya 5,7 daya kuda serta torsi 46 Nm. Alva One dibekali baterai lithium 60 volt 45 Ah dengan bobot 18 Kg yang dilindungi layar IP65 yang aman dari debu dan semprotan air. Selain itu motor ini juga dilengkapi fitur ABS, CBS, serta aplikasi yang dapat mengontrol motor melalui smartphone.'),
(7, 'Niu', 'Gova 03', '6379a56e45c9a.png', ' 2,4 kWh', '60 km/jam', '70 km', 'Rp23.800.000', 'Motor listrik ini mampu berlari hingga kecepatan 60 Km per jam dengan tenaga maksimum 2.000 W. Seperti motor listrik lainnya, sejak awal akselerasi terasa halus sehingga membuat pengendara merasa lebih nyaman. Dengan bekal baterai lithium 60 volt 40 Ah dengan berat 20 Kg, motor listrik ini mampu menempuh jarak hingga 70 Km. Sementara pengisian daya listrik sampai penuh membutuhkan waktu 6,5 jam. Motor listrik ini juga dibekali teknologi Energy Recovery System (EBS) memastikan baterai dapat terisi kembali oleh daya listrik ketika rem aktif sehingga dapat memperpanjang jarak tempuh.'),
(8, 'Volta', 'Virgo', '6379a9491e115.jpg', ' 1,38 kWh', '55 km/jam', '60 km', 'Rp17.500.000', 'Motor listrik Volta Virgo ini memiliki tampilan depan minimalis dengan bentuk lampu yang agak meruncing. Secara keseluruhan, tampilan motor listrik Volta tersebut terlihat cukup modern. Area deknya cenderung rata dipadukan dengan bodi belakang yang mengotak dan dengan stop lamp besar. Bicara spesifikasinya, motor listrik Volta Virgo menggunakan baterai 60V 23Ah LiFePO4 dengan slot ganda. Dengan banterai tersebut, Virgo diklaim bisa mencapai kecepatan sampai 55 km/jam serta jarak tempuh 60 km per baterai penuh.'),
(9, 'Viar', 'Q1', '6379b30a2f8d7.jpg', ' 1,38 kWh', '60 km/jam', '60 km', 'Rp18.000.000', 'Viar New Q1 dibekali dinamo 800 Watt yang dapat menghasilkan kecepatan 60 Km per jam dengan daya angkut maksimal 120 Kg. Motor listrik ini dilengkapi baterai bebas perawatan lithium-ion 60 volt dengan kapasitas 23 Ah sehingga mampu menempuh jarak sampai 60 Km. Bisa juga baterai tersebut ditambah satu lagi, agar Viar New Q1 mampu menempuh jarak semakin jauh. Sementara itu, pengisiannya membutuhkan waktu 4-5 jam per baterai.'),
(10, 'United ', 'T1800', '6379b379bad13.jpg', ' 1,68 kWh', '70 km/jam', '60 km', 'Rp27.000.000', 'United T1800 pertama kali muncul pada Desember 2020 dengan model skuter matik bongsor dengan dimensi panjang 1,9 meter, lebar 0,7 meter dan tinggi 1,2 meter. Motor ini dibatasi muatannya sampai 150 Kg saja. Pada bagian depan, motor listrik ini dilengkapi windshield tidak terlalu besar dengan warna hitam transparan. Berpadu dengan lekukan lampu kepala membuat United T1800 lebih sporty. Untuk performa, United T1800 memiliki 3 mode percepatan dan turbo mode yang mana masing-masing kecepatan 50 Km per jam, 60 Km per jam, 65 Km per jam dan 70 Km per jam. Motor listrik ini juga memiliki mode mundur dengan kecepatan 3 Km per jam.'),
(11, 'BMW', 'CE 04', '6379b3e5dba9f.jpeg', ' 60,6 Ah', '120 km/jam', '130 km', 'Rp380.000.000', 'BMW CE 04 memiliki desain futuristik dengan bagian depan yang terlihat besar dan bodi yang padat. Motor ini sudah memakai lampu -lampu full LED. Headlight sudah dilengkapi dengan powerfull LED dan Adaptive Headlight Pro. Secara performa, BMW CE 04 dibekali motor listrik berdaya 42 dk dan torsi maksimum 62 Nm pada 1.500 rpm, menggunakan baterai 60,6 Ah. Kendaraan zero emisi ini bisa berakselerasi dari 0 sampai 50 km/jam dalam 2,6 detik. Sementara untuk kecepatannya, bisa melaju pada kecepatan maksimal 120 km/jam dan saat kondisi baterai penuh dapat melaju hingga jarak 130 km, untuk sekali pengisian daya 4 jam 20 menit.'),
(12, 'Rakata', 'S9', '6379b48d68cfb.jpg', ' 1,2 kWh', '50 km/jam', '60 km', 'Rp17.000.000', 'Skuter listrik Rakata S9 punya tampilan minimalis dan futuristik. Motor listrik ini dibekali lampu LED berbentuk oval dan lampu senja yang dibuat terpisah. Kemudian panel instrumennya menggunakan layar LCD berbentuk digital yang sudah tahan air dan debu. Sepeda motor listrik tersebut mengusung motor penggerak High Power Motor Variable Frequency berkekuatan 800W. Motor penggerak ditenagai baterai Gel Battery berkapasitas 60V/20Ah. Baterai dapat menempuh jarak maksimal 50 hingga 60 km dalam sekali pengisian daya dengan kecepatan maksimal 49 km per jam. Skuter listrik ini bisa melibas jalur tanjakan dengan tingkat kemiringan 30 derajat.'),
(13, 'Uwinfly', 'T 3', '6379b5745feb9.jpg', ' 1,2 kWh', '60 km/jam', '70 km', 'Rp12.000.000', 'Uwinfly adalah skuter listrik bertema retro yang memiliki desain sangat mirip dengan Vespa S. motor listrik bergaya retro ini memakai baterai 60V20Ah, didukung motor listrik atau dinamo dengan daya 800 watt.Berkat baterai dan dinamo tersebut, top speed atau kecepatan maksimal Uwinfly T3 bisa mencapai 55 km/jam.Kemudian, untuk jarak tempuh dari motor ini berada di kisaran 50 sampai dengan 60 km.'),
(14, 'Honda', 'U-Go', '6379b64bdd626.png', ' 1,2 kWh', '53 km/jam', '65 km', 'Rp39.000.000', ' U-GO dipasarkan dengan dua tipe, yakni Regular dan Low Speed. Untuk varian Low Speed, mendapat motor dengan daya 800W. Honda U-GO mengusung motor listrik dengan daya 1,2 kW. Apabila kapasitas baterai dalam kondisi penuh, skuter listrik ini diklaim mampu menempuh jarak hingga 65 km. U-GO juga dapat menampung dua baterai sekaligus. Sehingga, daya tempuhnya bisa dua kali lipat, tembus hingga 133 km.'),
(15, 'Davigo', 'Space', '6379b70f009e3.jpeg', ' 2,52 kWh', '70 km/jam', '120 km', 'Rp18.700.000', 'Davigo resmi meluncurkan motor listrik bernama Davigo Space. Motor baru ini memiliki gaya khas skuter listrik yaitu minimalis dan terkesan modern dengan bodi sedikit gemuk. Keunggulan dari Davigo Space yakni motor listrik tipe BLDC yang terletak di roda belakang diklaim kedap air dan debu. Hal ini disebut sangat berpengaruh pada performa motor listrik secara keseluruhan. Spesifikasikanya memiliki dimensi panjang 1.820 mm, lebar 710 mm, dan tinggi 1.100 mm, bobot 108 kg dengan baterai. Catu daya Graphene 72V35AH dan mampu diajak jalan hingga 120 km dan charging 4-5 jam sekali isi. Davido Space dibanderol Rp 18.700.000 yaitu harga off the road alias belum tanpa surat.');

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
  MODIFY `id_admin` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jasa`
--
ALTER TABLE `jasa`
  MODIFY `id_jasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mbl` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `id_mtr` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
