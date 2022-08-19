-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2022 at 02:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tnelection`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkdetails`
--

CREATE TABLE `checkdetails` (
  `id` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Father_name` varchar(30) NOT NULL,
  `D_O_B` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkdetails`
--

INSERT INTO `checkdetails` (`id`, `Name`, `Father_name`, `D_O_B`, `Gender`, `Address`) VALUES
(10001, 'E.RAVI', 's/o GANESHAN', '1998-10-10', 'Male', 'karaikudi, sivagangai'),
(10002, 'T.SHARMILA', 'd/o RAJA', '1995-12-06', 'Female', 'manamadurai, sivagangai'),
(10003, 'P.ANBU', 's/o PITCHAI', '2000-07-16', 'Male', 'manamadurai, sivagangai'),
(10004, 'E.DHARMA RAJ', 's/o ESWARAN', '1997-05-01', 'Male', 'tirupattur, sivagangai'),
(10005, 'M.KISHORE', 'd/o MURUGESAN', '1999-11-15', 'Male', 'alangudi, sivagangai'),
(10006, 'S.PREM KUMAR', 's/o SENTHIL', '1993-01-13', 'Male', 'tirupattur, sivagangai'),
(10007, 'M.GOWSALYA', 'd/o MAREESWARAN', '1998-01-13', 'Female', 'manamadurai, sivagangai'),
(10008, 'S.MITHILESH', 's/o SEENI', '1999-09-10', 'Male', 'alangudi, sivagangai'),
(10009, 'A.RAMACHANDRAN', 's/o ALAGU', '1997-02-14', 'Male', 'karaikudi, sivagangai');

-- --------------------------------------------------------

--
-- Table structure for table `testvote`
--

CREATE TABLE `testvote` (
  `id` int(10) NOT NULL,
  `Voter_id_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testvote`
--

INSERT INTO `testvote` (`id`, `Voter_id_no`) VALUES
(1, 10005),
(2, 10006),
(3, 10003),
(4, 10008),
(5, 10002);

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `id` int(11) NOT NULL,
  `voted_for` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`id`, `voted_for`) VALUES
(1, 'DMK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkdetails`
--
ALTER TABLE `checkdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testvote`
--
ALTER TABLE `testvote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkdetails`
--
ALTER TABLE `checkdetails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10010;

--
-- AUTO_INCREMENT for table `testvote`
--
ALTER TABLE `testvote`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
