-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 07:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

CREATE DATABASE IF NOT EXISTS `rental` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `rental`;

-- --------------------------------------------------------

--
-- Table structure for table `girls`
--

CREATE TABLE `girls` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `skin_type` varchar(255) NOT NULL,
  `breast_size` varchar(255) NOT NULL,
  `waist_line` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `girls`
--

INSERT INTO `girls` (`id`, `firstname`, `lastname`, `age`, `skin_type`, `breast_size`, `waist_line`, `height`, `rate`, `description`, `image`) VALUES
(1, 'Eva', 'Elf', '25', 'White', 'D', '26', '5\'4', '2,000', 'I love eating roasters and I&#039;m allergic to crabs', 'https://i.pinimg.com/originals/5e/86/54/5e865471203f4b7ae2eacbd188d1a90c.jpg'),
(2, 'Kyedae', 'Shymoko', '21', 'White', 'A', '25', '5\'9', '5,000', 'I love peanuts', 'https://i.pinimg.com/736x/e0/c8/77/e0c8776214ebce90f357ecde9363da79.jpg'),
(4, 'Denise', 'Gezon', '21', 'white', 'B', '26', '5&#039;6', '150', 'madaldalna puro redflag', 'https://drive.google.com/file/d/1J9S_CItXo55TsCD5_4V8TchpLwZX1W-r/view');

-- --------------------------------------------------------

--
-- Table structure for table `renting`
--

CREATE TABLE `renting` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `girl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `type`, `username`, `password`) VALUES
(1, 'Jaydee', 'Ballaho', 'admin', 'jaydee', 'jaydee'),
(2, 'Root', 'Root', 'admin', 'root', 'root'),
(3, 'Natsu', 'Dragneel', 'user', 'natsu', 'natsu'),
(4, 'Erza', 'Scarlet', 'user', 'erza', 'erza'),
(5, 'Khasmir', 'Basaluddin', 'user', 'khasmir', 'khasmir'),
(6, 'Kent', 'Evangelista', 'user', 'kent', 'kent'),
(7, 'Bennett', 'Chan', 'user', 'bennett', 'bennett'),
(8, 'Lucy', 'Felix', 'user', 'lucy', 'lucy'),
(9, 'Rob', 'Villanueva', 'user', 'rob', 'rob');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `girls`
--
ALTER TABLE `girls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renting`
--
ALTER TABLE `renting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `girls`
--
ALTER TABLE `girls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `renting`
--
ALTER TABLE `renting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
