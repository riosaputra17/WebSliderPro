-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2023 at 04:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `jobname` varchar(30) NOT NULL,
  `jobdesc` text NOT NULL,
  `jobstart` date NOT NULL,
  `jobend` date NOT NULL,
  `registerend` date NOT NULL,
  `jobadded` timestamp NOT NULL DEFAULT current_timestamp(),
  `jobloc` text NOT NULL,
  `workingtype` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `jobname`, `jobdesc`, `jobstart`, `jobend`, `registerend`, `jobadded`, `jobloc`, `workingtype`) VALUES
(1, 'Graphic Design', 'Experienced with Adobe Illustrator, Photoshop, InDesign, good sense of designing.', '2021-01-01', '2022-01-01', '2020-11-30', '2020-10-26 05:25:56', 'Central Jakarta', 'WFH'),
(3, 'System Analyst', 'Building system architecture using diagrams', '2021-01-01', '2022-01-01', '2020-12-31', '2020-10-26 18:58:24', 'Bali', 'WFH'),
(5, 'Android Developer', 'Menjadi Android Expert', '2023-12-01', '2024-01-06', '2024-01-01', '2023-12-28 12:45:07', 'Bekasi', 'WFO');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `id_job` int(11) NOT NULL,
  `nama_materi` varchar(255) NOT NULL,
  `link_materi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `id_job`, `nama_materi`, `link_materi`) VALUES
(5, 5, 'Android Itu Kotlin lah', 'https://youtu.be/90NF1quNhPo?si=e9JTSOfBgfJGqwja'),
(6, 5, 'Mengenal Apa itu Android', 'https://www.youtube.com/embed/xI_udOx4xAU?si=XtZT_pHarza_ZEO6');

-- --------------------------------------------------------

--
-- Table structure for table `registrant`
--

CREATE TABLE `registrant` (
  `idreg` int(11) NOT NULL,
  `idjob` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `motivational` text NOT NULL,
  `linkedin` varchar(30) NOT NULL,
  `portfolio` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrant`
--

INSERT INTO `registrant` (`idreg`, `idjob`, `name`, `gender`, `dob`, `alamat`, `email`, `telepon`, `motivational`, `linkedin`, `portfolio`, `date`) VALUES
(13, 2, 'Frendy', 'Laki-laki', '2007-12-05', 'Jl. HS. Ronggo Waluyo Blok A', 'frendy@gmail.com', '+6289514121147', '', 'https://japanesetest4you.com/j', 'https://japanesetest4you.com/j', '2023-12-20 15:33:09'),
(14, 2, 'Wahyu Rahayu Rahayu', 'Laki-laki', '2007-12-05', 'Jl. HS. Ronggo Waluyo Blok A', 'wahyurahayu82@gmail.com', '+6289514121147', '', 'https://japanesetest4you.com/j', 'https://japanesetest4you.com/j', '2023-12-27 09:33:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `registrant`
--
ALTER TABLE `registrant`
  ADD PRIMARY KEY (`idreg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registrant`
--
ALTER TABLE `registrant`
  MODIFY `idreg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
