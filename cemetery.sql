-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 02:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cemetery`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `corpse` varchar(150) NOT NULL,
  `dateBirth` date NOT NULL,
  `dateDeath` date NOT NULL,
  `corpseAddress` varchar(50) NOT NULL,
  `corpseReligion` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `adminapprove` varchar(20) NOT NULL,
  `gcash` varchar(50) NOT NULL,
  `bookimg` varchar(255) NOT NULL,
  `corpsetimestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='teest';

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `userid`, `corpse`, `dateBirth`, `dateDeath`, `corpseAddress`, `corpseReligion`, `payment`, `adminapprove`, `gcash`, `bookimg`, `corpsetimestamp`) VALUES
(4, 6, 'test2', '2021-11-10', '2021-11-08', 'Cawayan', 'Catholic', 'pending', 'waiting', '09273743328', 'CemImg-61a5cec7ab3d82.21529598.255891630_2730405320596985_1514668317247375432_n.jpg', '2021-11-30 15:11:56'),
(6, 12, 'kyss', '2021-11-09', '2021-11-02', 'Argao', 'Budha', 'pending', 'waiting', '09273743328', 'CemImg-61a5cf075563d1.30048174.t1.png', '2021-11-30 15:12:54'),
(7, 12, 'kyledart', '2021-11-18', '2021-11-07', 'Argao', 'Budha', 'queue', '', '', '', '2021-11-30 15:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `corpse`
--

CREATE TABLE `corpse` (
  `corpseid` int(11) NOT NULL,
  `cfname` varchar(50) NOT NULL,
  `clname` varchar(50) NOT NULL,
  `cmname` varchar(50) NOT NULL,
  `cdob` date NOT NULL,
  `cdod` date NOT NULL,
  `dtimestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `corpse`
--

INSERT INTO `corpse` (`corpseid`, `cfname`, `clname`, `cmname`, `cdob`, `cdod`, `dtimestamp`) VALUES
(1, 'Marks', 'Neo', 'Mamalias', '2021-10-05', '2021-10-07', '2021-10-19 03:55:24'),
(3, 'Rhysin', 'Villahermosa', 'Quilaton', '1978-10-03', '2000-10-20', '2021-10-19 03:57:42'),
(4, 'Kyle', 'Amaquin', 'kyaaaa', '2000-01-20', '2021-10-10', '2021-10-19 05:13:54');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(200) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `userFname` varchar(200) NOT NULL,
  `userLname` varchar(200) NOT NULL,
  `userContact` int(200) NOT NULL,
  `userAddress` varchar(50) NOT NULL,
  `userMail` varchar(200) NOT NULL,
  `userPwd` varchar(200) NOT NULL,
  `userTimestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `userFname`, `userLname`, `userContact`, `userAddress`, `userMail`, `userPwd`, `userTimestamp`) VALUES
(1, 'Admin', 'Pockey', 'Pepero', 666666, 'Realm of Reality', 'grimreaper@haven.hll', 'admin', '2021-10-15 23:43:28'),
(5, 'PockeyPepero', 'Rhysin', 'Villahermosa', 99999, 'Cawayan', 'rhysin@gmail.com', 'rhy123', '2021-10-17 19:44:13'),
(6, 'Mark', 'Mark Neo', 'Mamalias', 123123123, 'Argao', 'mark@gmail.com', 'mark123', '2021-10-17 19:44:55'),
(12, 'kylee', 'kyle', 'Amaquin', 123123, 'Dalaguete', 'kyle@gmail.com', 'kyle123', '2021-10-19 11:15:43'),
(14, 'Marksse', 'Mark', 'Neo', 31213123, 'Realm of Reality', 'kyle@gmail.com', '123', '2021-10-20 09:12:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corpse`
--
ALTER TABLE `corpse`
  ADD PRIMARY KEY (`corpseid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `corpse`
--
ALTER TABLE `corpse`
  MODIFY `corpseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
