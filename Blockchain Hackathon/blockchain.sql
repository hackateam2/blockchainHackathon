-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 07:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blockchain`
--

-- --------------------------------------------------------

--
-- Table structure for table `bussiness_info`
--

CREATE TABLE `bussiness_info` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` int(100) NOT NULL,
  `image` varchar(225) NOT NULL,
  `location` varchar(225) NOT NULL,
  `created` int(4) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `payment option` varchar(2000) NOT NULL,
  `potential` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bussiness_info`
--

INSERT INTO `bussiness_info` (`id`, `name`, `amount`, `image`, `location`, `created`, `description`, `payment option`, `potential`) VALUES
(1, 'Ones and Twos', 20000, 'IFS second year.jpg', 'Pretoria', 2018, 'rw5yerktuilyoyh;puhguifk rtaytejrku', 'eqw465ye6kiyug jtu7i5ewy3q', 'rwy5qahxcty yur5w6y3q uit6ru56 200 htydyrt');

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE `fund` (
  `id` int(100) NOT NULL,
  `receiver_adress` varchar(255) NOT NULL,
  `Tax_id` int(10) NOT NULL,
  `amount_in_ETH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fund`
--

INSERT INTO `fund` (`id`, `receiver_adress`, `Tax_id`, `amount_in_ETH`) VALUES
(1, 'uyaghopahjet[', 231242, 5),
(2, 'trkiul', 2147483647, 3243252),
(3, 'dgfk gftyd tysy6t', 1234567890, 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bussiness_info`
--
ALTER TABLE `bussiness_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fund`
--
ALTER TABLE `fund`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bussiness_info`
--
ALTER TABLE `bussiness_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fund`
--
ALTER TABLE `fund`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
