-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 05:21 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `damri-profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `content_id` int(11) NOT NULL,
  `profile_perusahaan` text NOT NULL,
  `visi_perusahaan` text NOT NULL,
  `misi_perusahaan` text NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `deskripsi_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `profile_perusahaan`, `visi_perusahaan`, `misi_perusahaan`, `alamat_perusahaan`, `deskripsi_content`) VALUES
(1, 'DAMRI adalah singkatan dari Djawatan Angkoetan Motor Repoeblik Indonesia (ER, EYD: Jawatan Angkutan Motor Republik Indonesia) yang dibentuk berdasarkan Maklumat Kementerian Perhubungan RI No.01/DAMRI/46 tanggal 25 November 1946 dengan tugas utama menyelenggarakan angkutan penumpang dan barang di atas jalan dengan menggunakan kendaraan bermotor. Dalam perkembangan selanjutnya sebagai Perusahaan Umum (Perum), nama DAMRI tetap diabadikan sebagai brand mark dari Badan Usaha Milik Negara (BUMN) ini yang hingga saat ini masih tetap konsisten menjalankan tugasnya sebagai salah satu penyelenggara jasa angkutan penumpang dan barang dengan menggunakan bus dan truk.\r\n\r\nHingga saat ini, DAMRI memiliki jaringan pelayanan tersebar hampir di seluruh wilayah Republik Indonesia. Dalam kegiatan usahanya DAMRI menyelenggarakan pelayanan angkutan kota, angkutan antarkota dalam provinsi, angkutan kota antarprovinsi, angkutan khusus bandar udara, angkutan pariwisata, angkutan logistik, angkutan keperintisan, dan angkutan lintas batas negara.', 'Menjadi perusahaan transportasi kelas dunia yang handal, berkinerja unggul dan berkelanjutan.', '1. Menyediakan alat produksi yang handal, modern dan berbasis teknologi mutakhir untuk mendukung konektivitas transportasi.\r\n2. Memberikan pelayanan yang berkualitas prima, berkeselamatan, dan berorientasi kepada pelanggan.\r\n3. Mengembangkan human capital yang professional dan inovatif untuk mengoptimalkan profit guna meningkatkan nilai tambah kepada stake holder.\r\n4. Menjalankan prinsip-prinsip Good Corporate Governance (GCG) dalam aktifitas usaha perusahaan\r\n5. Mengembangkan diversifikasi usaha guna mendukung core bisnis perusahaan', 'Jl. Matraman Raya No.25, RT.2/RW.1, Palmeriam, Kec. Matraman, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13140', 'Nikmatilah perjalanan anda dengan aman dan nyaman dengan kami.');

-- --------------------------------------------------------

--
-- Table structure for table `galleri`
--

CREATE TABLE `galleri` (
  `galleri_id` int(15) NOT NULL,
  `name_galleri` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galleri`
--

INSERT INTO `galleri` (`galleri_id`, `name_galleri`) VALUES
(1, 'angkutan-1.jpg'),
(2, 'angkutan-2.jpg'),
(3, 'angkutan-3.jpg'),
(4, 'angkutan-4.jpg'),
(5, 'angkutan-5.jpg'),
(6, 'angkutan-6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `galleri`
--
ALTER TABLE `galleri`
  ADD PRIMARY KEY (`galleri_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galleri`
--
ALTER TABLE `galleri`
  MODIFY `galleri_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
