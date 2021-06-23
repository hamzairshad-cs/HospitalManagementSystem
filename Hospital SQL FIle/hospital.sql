-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 10:15 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_doctors`
--

CREATE TABLE `all_doctors` (
  `doc_no` varchar(255) NOT NULL,
  `department` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_doctors`
--

INSERT INTO `all_doctors` (`doc_no`, `department`) VALUES
('DC-1', 'Arms'),
('DC-2', 'Arms'),
('DC-3', 'Arms'),
('DC-4', 'Arms'),
('DC-5', 'Physioterapy'),
('DC-6', 'Cardiology'),
('DR-1', 'Arms'),
('DR-2', 'Cardiology'),
('DR-3', 'Arms'),
('DR-4', 'Arms'),
('DR-5', 'Arms'),
('DR-6', 'Arms');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `d_name` varchar(255) NOT NULL,
  `d_location` varchar(255) DEFAULT NULL,
  `facilities` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`d_name`, `d_location`, `facilities`) VALUES
('Arms', 'Mughalpura', 'High'),
('Cardiology', 'Jail Road', 'low'),
('Gynae', 'Saddar', 'Many'),
('OPD', 'Jail Road Gulberg', 'Many'),
('Physioterapy', 'Gulberg mall', 'High');

-- --------------------------------------------------------

--
-- Table structure for table `doc_on_call`
--

CREATE TABLE `doc_on_call` (
  `doc_no` varchar(255) DEFAULT NULL,
  `d_name` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `fs_pr_cl` varchar(255) DEFAULT NULL,
  `pymt_du` int(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `ph_no` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doc_on_call`
--

INSERT INTO `doc_on_call` (`doc_no`, `d_name`, `qualification`, `fs_pr_cl`, `pymt_du`, `address`, `ph_no`) VALUES
('DC-1', 'Arms', 'PHD', '45000', 40000, 'Thokar', 3333),
('DC-2', 'Arms', 'Hakeem', '7000', 2000, 'Mughalpoura', 465465654),
('DC-3', 'Arms', 'Middle', '2000', 500, 'Kareem Block', 12),
('DC-4', 'Arms', 'Intermediate', '4500', 50, 'Joray Pull', 32132),
('DC-5', 'Physioterapy', 'Masters', '8000', 5000, 'Askari 1', 2147483647),
('DC-6', 'Cardiology', 'Middle', NULL, 1, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doc_reg`
--

CREATE TABLE `doc_reg` (
  `qualification` varchar(255) DEFAULT NULL,
  `salary` int(255) DEFAULT NULL,
  `en_time` time DEFAULT NULL,
  `ex_time` time DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `ph_no` int(255) DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `doc_no` varchar(255) DEFAULT NULL,
  `d_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doc_reg`
--

INSERT INTO `doc_reg` (`qualification`, `salary`, `en_time`, `ex_time`, `address`, `ph_no`, `doj`, `doc_no`, `d_name`) VALUES
('MBBS', 450000, '12:00:00', '21:00:00', 'Valencia', 1, '2010-10-11', 'DR-1', 'Arms'),
('Diploma', 60000, '11:00:00', '18:00:00', 'Lalpul', 308467086, '2002-06-08', 'DR-2', 'Cardiology'),
('Matric', 500, '09:00:00', '20:00:00', 'Harbanspura', 654654, '2009-06-09', 'DR-3', 'Arms'),
('Diploma', 45000, '09:00:00', '19:00:00', 'Punjab College Of INformation and Technology, Campus 4 near Muslim town Metro Station, Lahore Pakistan', 324, '2002-12-12', 'DR-4', 'Arms'),
('DPT', 8000000, '18:00:00', '09:00:00', 'Askari X', 7896, '2006-12-05', 'DR-5', 'Arms'),
('Matric', 650000, '01:01:00', '14:02:00', 'Jerusalem ', 34555555, '2222-01-01', 'DR-6', 'Arms');

-- --------------------------------------------------------

--
-- Table structure for table `pat_admit`
--

CREATE TABLE `pat_admit` (
  `pat_no` varchar(255) DEFAULT NULL,
  `adv_pymt` varchar(255) DEFAULT NULL,
  `mode_pymt` varchar(255) DEFAULT NULL,
  `dept_name` varchar(255) DEFAULT NULL,
  `admtd_on` date DEFAULT NULL,
  `cond_on` varchar(255) DEFAULT NULL,
  `trmt_sdt` varchar(255) DEFAULT NULL,
  `invstgtn_dn` varchar(255) DEFAULT NULL,
  `attdnt_nm` varchar(255) DEFAULT NULL,
  `room_no` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pat_chkup`
--

CREATE TABLE `pat_chkup` (
  `pat_no` varchar(255) DEFAULT NULL,
  `doc_no` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `treatment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pat_chkup`
--

INSERT INTO `pat_chkup` (`pat_no`, `doc_no`, `status`, `treatment`) VALUES
('PT-1 ', 'DC-1', 'Regular', 'Giving'),
('PT-2 ', 'DC-1', 'Operation', 'giving'),
('PT-3 ', 'DC-3', 'Admit', 'OP'),
('PT-4 ', 'DC-1', 'Regular', 'as'),
('PT-5 ', 'DC-5', 'Operation', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `pat_dis`
--

CREATE TABLE `pat_dis` (
  `pat_no` varchar(255) DEFAULT NULL,
  `tr_advs` varchar(255) DEFAULT NULL,
  `tr_gvn` varchar(255) DEFAULT NULL,
  `medicines` varchar(255) DEFAULT NULL,
  `pymt_gv` int(255) DEFAULT NULL,
  `dis_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pat_dis`
--

INSERT INTO `pat_dis` (`pat_no`, `tr_advs`, `tr_gvn`, `medicines`, `pymt_gv`, `dis_on`) VALUES
('PT-3', 'Eat Hygienic Food', 'as', 'Panadol', 80000, '5621-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `pat_entry`
--

CREATE TABLE `pat_entry` (
  `pat_no` varchar(255) NOT NULL,
  `pat_name` varchar(255) DEFAULT NULL,
  `chkup_dt` date DEFAULT NULL,
  `pt_age` int(255) DEFAULT NULL,
  `sex` varchar(1) DEFAULT NULL,
  `diagonosis` varchar(255) DEFAULT NULL,
  `rfd` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `ph_no` int(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pat_entry`
--

INSERT INTO `pat_entry` (`pat_no`, `pat_name`, `chkup_dt`, `pt_age`, `sex`, `diagonosis`, `rfd`, `address`, `city`, `ph_no`, `department`) VALUES
('PT-', '', '0000-00-00', 0, 'M', '', '', '', '', 0, 'Arms'),
('PT-1', 'Afzal', '0000-00-00', 12, 'M', '56', 'Ahmed', 'Jerusalem Avenue', 'Hempstead', 0, 'Arms'),
('PT-2', 'husnnain', '2021-12-31', 77, 'M', 'Psychoqqqqq', 'Ahmed', 'Punjab College Of INformation and Technology, Campus 4 near Muslim town Metro Station, Lahore Pakistan', 'Lahore', 2147483647, 'Arms'),
('PT-3', 'Khwaja', '2017-01-01', 24, 'F', 'Trauma', 'X', 'House No. 31, Street No. 39-A Muslimabad Railway Station near Fateh Garh, Lahore, Punjab, Pakistan', 'Lahore', 0, 'Gynae'),
('PT-4', 'Ali', '2026-12-06', 654, 'F', 'ammendix', 'Ahmed', 'Jerusalem Avenue', 'Hempstead', 2147483647, 'Arms'),
('PT-5', 'umair', '2000-04-05', 69, 'M', 'aja', 'X', 'Jerusalem Avenue', 'Hempstead', 2147483647, 'Physioterapy');

-- --------------------------------------------------------

--
-- Table structure for table `pat_opr`
--

CREATE TABLE `pat_opr` (
  `pat_no` varchar(255) DEFAULT NULL,
  `date_opr` date DEFAULT NULL,
  `in_cond` varchar(255) DEFAULT NULL,
  `afop_cond` varchar(255) DEFAULT NULL,
  `ty_operation` varchar(255) DEFAULT NULL,
  `medicines` varchar(255) DEFAULT NULL,
  `doc_no` varchar(255) DEFAULT NULL,
  `opth_no` varchar(255) DEFAULT NULL,
  `other_sug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pat_opr`
--

INSERT INTO `pat_opr` (`pat_no`, `date_opr`, `in_cond`, `afop_cond`, `ty_operation`, `medicines`, `doc_no`, `opth_no`, `other_sug`) VALUES
('PT-2 ', '2021-01-01', 'farigh', 'garihg', 'bigone', 'Valtecqqqq', 'DC-1', 'R', '21'),
('PT-5 ', '2006-04-08', 'bad', 'garihg', 'small', 'R', 'DC-5', '3', '2');

-- --------------------------------------------------------

--
-- Table structure for table `pat_reg`
--

CREATE TABLE `pat_reg` (
  `pat_no` varchar(255) DEFAULT NULL,
  `dat_vis` date DEFAULT NULL,
  `conditio` varchar(255) DEFAULT NULL,
  `treatment` varchar(255) DEFAULT NULL,
  `medicines` varchar(255) DEFAULT NULL,
  `doc_no` varchar(255) DEFAULT NULL,
  `pamyt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pat_reg`
--

INSERT INTO `pat_reg` (`pat_no`, `dat_vis`, `conditio`, `treatment`, `medicines`, `doc_no`, `pamyt`) VALUES
('PT-1 ', '2020-12-12', 'fine', 'Giving', 'Panadol555', 'DC-1', '1500'),
('PT-4 ', '0000-00-00', 'nice', 'as', 'lkkl', 'DC-1', '85');

-- --------------------------------------------------------

--
-- Table structure for table `room_detail`
--

CREATE TABLE `room_detail` (
  `room_no` int(11) NOT NULL,
  `type` varchar(1) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `rm_dl_crg` varchar(25) DEFAULT NULL,
  `patient_name` varchar(25) DEFAULT NULL,
  `pat_no` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_detail`
--

INSERT INTO `room_detail` (`room_no`, `type`, `status`, `rm_dl_crg`, `patient_name`, `pat_no`) VALUES
(1, 'G', 'y', '2500', 'Null', 'Null'),
(2, 'P', 'y', '1500', 'Null', 'Null'),
(3, 'P', 'Y', '2000', '', ''),
(4, 'G', 'Y', '900', '', ''),
(5, 'P', 'Y', '8000', '', ''),
(6, 'G', 'Y', '4500', '', ''),
(7, 'G', 'Y', '4500', '', ''),
(8, 'P', 'Y', '2500', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_doctors`
--
ALTER TABLE `all_doctors`
  ADD PRIMARY KEY (`doc_no`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`d_name`);

--
-- Indexes for table `doc_on_call`
--
ALTER TABLE `doc_on_call`
  ADD KEY `doc_on_call_ibfk_1` (`doc_no`),
  ADD KEY `doc_on_call_ibfk_2` (`d_name`);

--
-- Indexes for table `doc_reg`
--
ALTER TABLE `doc_reg`
  ADD KEY `doc_reg_ibfk_1` (`doc_no`),
  ADD KEY `doc_reg_ibfk_2` (`d_name`);

--
-- Indexes for table `pat_admit`
--
ALTER TABLE `pat_admit`
  ADD KEY `pat_admit_ibfk_1` (`pat_no`),
  ADD KEY `pat_admit_ibfk_2` (`room_no`);

--
-- Indexes for table `pat_chkup`
--
ALTER TABLE `pat_chkup`
  ADD KEY `pat_chkup_ibfk_1` (`pat_no`),
  ADD KEY `pat_chkup_ibfk_2` (`doc_no`);

--
-- Indexes for table `pat_dis`
--
ALTER TABLE `pat_dis`
  ADD KEY `pat_dis_ibfk_1` (`pat_no`);

--
-- Indexes for table `pat_entry`
--
ALTER TABLE `pat_entry`
  ADD PRIMARY KEY (`pat_no`);

--
-- Indexes for table `pat_opr`
--
ALTER TABLE `pat_opr`
  ADD KEY `pat_opr_ibfk_1` (`pat_no`),
  ADD KEY `pat_opr_ibfk_2` (`doc_no`);

--
-- Indexes for table `pat_reg`
--
ALTER TABLE `pat_reg`
  ADD KEY `pat_reg_ibfk_1` (`pat_no`),
  ADD KEY `pat_reg_ibfk_2` (`doc_no`);

--
-- Indexes for table `room_detail`
--
ALTER TABLE `room_detail`
  ADD PRIMARY KEY (`room_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doc_on_call`
--
ALTER TABLE `doc_on_call`
  ADD CONSTRAINT `doc_on_call_ibfk_1` FOREIGN KEY (`doc_no`) REFERENCES `all_doctors` (`doc_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doc_on_call_ibfk_2` FOREIGN KEY (`d_name`) REFERENCES `department` (`d_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doc_reg`
--
ALTER TABLE `doc_reg`
  ADD CONSTRAINT `doc_reg_ibfk_1` FOREIGN KEY (`doc_no`) REFERENCES `all_doctors` (`doc_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doc_reg_ibfk_2` FOREIGN KEY (`d_name`) REFERENCES `department` (`d_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pat_admit`
--
ALTER TABLE `pat_admit`
  ADD CONSTRAINT `pat_admit_ibfk_1` FOREIGN KEY (`pat_no`) REFERENCES `pat_entry` (`pat_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pat_admit_ibfk_2` FOREIGN KEY (`room_no`) REFERENCES `room_detail` (`room_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pat_chkup`
--
ALTER TABLE `pat_chkup`
  ADD CONSTRAINT `pat_chkup_ibfk_1` FOREIGN KEY (`pat_no`) REFERENCES `pat_entry` (`pat_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pat_chkup_ibfk_2` FOREIGN KEY (`doc_no`) REFERENCES `all_doctors` (`doc_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pat_dis`
--
ALTER TABLE `pat_dis`
  ADD CONSTRAINT `pat_dis_ibfk_1` FOREIGN KEY (`pat_no`) REFERENCES `pat_entry` (`pat_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pat_opr`
--
ALTER TABLE `pat_opr`
  ADD CONSTRAINT `pat_opr_ibfk_1` FOREIGN KEY (`pat_no`) REFERENCES `pat_entry` (`pat_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pat_opr_ibfk_2` FOREIGN KEY (`doc_no`) REFERENCES `all_doctors` (`doc_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pat_reg`
--
ALTER TABLE `pat_reg`
  ADD CONSTRAINT `pat_reg_ibfk_1` FOREIGN KEY (`pat_no`) REFERENCES `pat_entry` (`pat_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pat_reg_ibfk_2` FOREIGN KEY (`doc_no`) REFERENCES `all_doctors` (`doc_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
