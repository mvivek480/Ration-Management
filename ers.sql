-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2019 at 06:35 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ers`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg_member`
--

CREATE TABLE `reg_member` (
  `member_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `c_number` varchar(20) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `L_id` int(2) NOT NULL,
  `uid` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `reg_member`
--

INSERT INTO `reg_member` (`member_id`, `firstname`, `lastname`, `address`, `email`, `c_number`, `gender`, `date`, `L_id`, `uid`) VALUES
(2, 'Kollapapillai', 'ss', 'eraniel', 'kollapillai@gmail.com', '9791669657', 'Male', '2019-01-13 15:16:00', 1234, '1002'),
(1, 'padmagopal', 'ss', 'eraniel', 'vnglraja1999@gmail.com', '8890855976', 'Male', '2019-01-13 15:08:23', 1234, '4583'),
(40, 'seetha', 'kollapapillai', 'eraniel', 'seethakollapillai@gmail.com', '8220797273', 'Female', '2019-01-13 15:21:34', 1234, '1918');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `Location` varchar(12) NOT NULL,
  `L_id` int(2) NOT NULL,
  `item` varchar(12) NOT NULL,
  `stock` int(12) NOT NULL,
  `IL_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`Location`, `L_id`, `item`, `stock`, `IL_id`) VALUES
('eraniel', 1234, 'rice(ponni)', 23, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stock_user`
--

CREATE TABLE `stock_user` (
  `stock_user` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_user`
--

INSERT INTO `stock_user` (`stock_user`, `username`, `password`) VALUES
(1, 'vijay', 'vijay'),
(2, 'vijay', 'vijay');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `L_id` int(2) NOT NULL,
  `Location` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user`, `username`, `password`, `firstname`, `lastname`, `L_id`, `Location`) VALUES
(5, 'gopal', 'gopal', 'john kevin', 'lorayna', 1234, 'eraniel'),
(4, 'teph', 'teph', 'stephanie', 'villanueva', 1235, 'nagercoil'),
(6, 'tk', 'tk', 'tephkev', 'tephkev', 1236, 'keezhatheru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg_member`
--
ALTER TABLE `reg_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`IL_id`);

--
-- Indexes for table `stock_user`
--
ALTER TABLE `stock_user`
  ADD PRIMARY KEY (`stock_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user`),
  ADD UNIQUE KEY `L_id` (`L_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg_member`
--
ALTER TABLE `reg_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `IL_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stock_user`
--
ALTER TABLE `stock_user`
  MODIFY `stock_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
