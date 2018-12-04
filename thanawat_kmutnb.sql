-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2018 at 05:56 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thanawat_kmutnb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `s_id` int(11) NOT NULL,
  `g1_st` int(11) NOT NULL,
  `g2_st` int(11) NOT NULL,
  `g3_st` int(11) NOT NULL,
  `g4_st` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`s_id`, `g1_st`, `g2_st`, `g3_st`, `g4_st`) VALUES
(1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `login_id` int(11) NOT NULL,
  `login_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `login_username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `login_password` blob NOT NULL,
  `login_status` varchar(100) NOT NULL,
  `game1` varchar(100) CHARACTER SET utf8 NOT NULL,
  `game2` varchar(100) CHARACTER SET utf8 NOT NULL,
  `game3` varchar(100) CHARACTER SET utf8 NOT NULL,
  `game4` varchar(100) CHARACTER SET utf8 NOT NULL,
  `s_st` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`login_id`, `login_name`, `login_username`, `login_password`, `login_status`, `game1`, `game2`, `game3`, `game4`, `s_st`) VALUES
(1, 'โรงเรียนชิโนรสวิทยาลัย', 'Team1', 0x334778467167, 'user', '', '', '', '', 0),
(2, 'โรงเรียนชิโนรสวิทยาลัย', 'Team2', 0x587551336353, 'user', '', '', '', '', 0),
(3, 'โรงเรียนชิโนรสวิทยาลัย', 'Team3', 0x746857783779, 'user', '', '', '', '', 0),
(4, 'โรงเรียนชิโนรสวิทยาลัย', 'Team4', 0x6e6476463365, 'user', '', '', '', '', 0),
(5, 'โรงเรียนชิโนรสวิทยาลัย', 'Team5', 0x586654386472, 'user', '', '', '', '', 0),
(6, 'โรงเรียนชิโนรสวิทยาลัย', 'Team6', 0x6a4132686d77, 'user', '', '', '', '', 0),
(7, 'โรงเรียนชิโนรสวิทยาลัย', 'Team7', 0x4c4477337268, 'user', '', '', '', '', 0),
(8, 'โรงเรียนชิโนรสวิทยาลัย', 'Team8', 0x346154625976, 'user', '', '', '', '', 0),
(9, 'ทดสอบ', 'test', 0x6a616d6573, 'user', '', '', '', '', 0),
(10, 'เฉียบวุฒิ รัตนวิไลสกุล', 'chaibwoot', 0x636861696274657374, 'table', '', '', '', '', 0),
(11, 'ธนวัฒน์ กุลาตี', 'admin', 0x4a616d65733135313237, 'admin', '-', '-', '-', '-', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
