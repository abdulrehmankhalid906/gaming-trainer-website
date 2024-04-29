-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2024 at 07:13 PM
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
-- Database: `expert`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rank` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `name`, `email`, `password`, `rank`) VALUES
(1, 'admin', 'admin@gmail.com', '12345678', 1);

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` int(11) NOT NULL,
  `game_name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `game_name`, `description`, `link`) VALUES
(1, 'Odette Whitley', '0', '0'),
(2, 'Bruno Wyatt', '0', '0'),
(3, 'Stronghold HD', '0', '0'),
(4, 'STRONGHOLD', 'about 14 inches and the mean annual air temperature is about 63 degrees F.\n\nTAXONOMIC CLASS: Coarse-loamy, mixed, superactive, thermic Ustic Haplocalcids\n\nTYPICAL PEDON: Stronghold very gravelly loamy sand - rangeland. (Colors are for dry soil unless otherwise noted.) Surface gravel - 35 to 55 percent of the surface is covered with gravel\n\nA--0 to 1 inch; brown (7.5YR 4/2) very gravelly loamy sand, dark brown (7.5YR 3/2) moist; weak thick platy structure; loose, nonsticky and nonplastic; few very fine roots; common fine irregular pores; 37 percent gravel; strongly effervescent; moderately alkaline (pH 8.2); abrupt smooth boundary.\n\nA/Bk1--1 to 8 inches; brown (7.5YR 4/2) gravelly sandy loam, dark brown (7.5YR 3/2) moist; weak fine subangular blocky structure; soft, very friable, moderately sticky and moderately plastic; common very fine and fine roots; few fine tubular pores; few patchy calcium carbonate coatings on rock fragments; common distinct organic coatings on rock fragments; 34 percent gravel; violently effervescent, 14 percent calcium carbonate equivalent; moderately alkaline (pH 8.2); clear smooth boundary.\n\nBk2--8 to 25 inches; light brown (7.5YR 6/3) gravelly sandy loam; brown (7.5YR 5/4) moist; massive; slightly hard, very friable, slightly sticky and moderately plastic; common very fine and fine roots; few fine tubular pores; many distinct calcium carbonate coatings on rock fragments; common fine and medium calcium carbonate filaments; 23 percent gravel; violently effervescent, 20 percent calcium carbonate equivalent; moderately alkaline (pH 8.2); clear smooth boundary.', 'https://soilseries.sc.egov.usda.gov/OSD_Docs/S/STRONGHOLD.html'),
(5, 'Melissa Tyler', 'Nihil ullamco consec', 'Consectetur exceptur'),
(6, 'Damon Le', 'Provident ipsa sin', 'Laudantium perspici'),
(7, 'Jakeem Albert', 'Accusantium veniam ', 'Voluptatum incididun');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `game_name` varchar(50) DEFAULT NULL,
  `game_ver` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `descrip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `email`, `game_name`, `game_ver`, `status`, `descrip`) VALUES
(1, 'Mani', 'abdulrehmankhalid906@gmail.com', 'Stronghold HD', '1.41', 1, 'Looking for some info.'),
(2, 'Maggy Tillman', 'zataxa@mailinator.com', 'Xanthus Hughes', 'Sit voluptates lore', 1, 'Error velit esse min');

-- --------------------------------------------------------

--
-- Table structure for table `stronghold`
--

CREATE TABLE `stronghold` (
  `id` int(11) NOT NULL,
  `game_name` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `version` varchar(50) DEFAULT NULL,
  `game_pic` varchar(150) DEFAULT NULL,
  `upload_file` varchar(150) DEFAULT NULL,
  `upload_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `trainer_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stronghold`
--

INSERT INTO `stronghold` (`id`, `game_name`, `description`, `version`, `game_pic`, `upload_file`, `upload_time`, `trainer_id`) VALUES
(3, 'Stronghold Crusader HD', '  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>\r\n', 'GTA 6', 'Hamza.jpg', 'controlere.txt', '2024-04-29 17:07:48', '4258');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stronghold`
--
ALTER TABLE `stronghold`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stronghold`
--
ALTER TABLE `stronghold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
