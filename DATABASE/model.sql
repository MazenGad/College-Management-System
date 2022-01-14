-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 ديسمبر 2021 الساعة 21:04
-- إصدار الخادم: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `model`
--

-- --------------------------------------------------------

--
-- بنية الجدول `grades`
--

CREATE TABLE `grades` (
  `student_id` int(11) NOT NULL,
  `id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `one` int(3) NOT NULL,
  `two` int(3) NOT NULL,
  `three` int(3) NOT NULL,
  `four` int(3) NOT NULL,
  `five` int(3) NOT NULL,
  `six` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `grades`
--

INSERT INTO `grades` (`student_id`, `id`, `one`, `two`, `three`, `four`, `five`, `six`) VALUES
(1, 'TD17-e3e6', 100, 85, 80, 98, 55, 78),
(2, 'TD17-0a58', 88, 90, 98, 88, 52, 100),
(3, 'TD17-a464', 50, 85, 59, 78, 92, 58);

-- --------------------------------------------------------

--
-- بنية الجدول `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(450) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `email` varchar(55) NOT NULL,
  `note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- بنية الجدول `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_id` varchar(220) NOT NULL,
  `name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `report` varchar(2000) NOT NULL,
  `yoa` varchar(45) NOT NULL,
  `parent` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(7) NOT NULL,
  `file` varchar(400) NOT NULL,
  `file1` varchar(400) NOT NULL,
  `one` varchar(20) NOT NULL,
  `two` varchar(255) NOT NULL,
  `three` varchar(20) NOT NULL,
  `four` varchar(20) NOT NULL,
  `five` varchar(20) NOT NULL,
  `six` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `student`
--

INSERT INTO `student` (`id`, `student_id`, `name`, `last_name`, `Year`, `report`, `yoa`, `parent`, `dob`, `gender`, `file`, `file1`, `one`, `two`, `three`, `four`, `five`, `six`) VALUES
(14, 'TD17-e3e6', 'Mazen', 'Gad', '0', 'Nice', '2018', '08138652641', '2003-10-01', 'Male', 'your_site_name_57d83ce7aaf3b8b55e377e51b4ae780a.jpg', 'your_site_name_2c9b53f346dc56e9ae62208c48d6df64.jpg', 'Data Science', 'Artificial Intellegence', 'Computer Graphic', 'Algebra', 'Algrothims', 'Data'),
(15, 'TD17-0a58', 'Ahmed', 'Mohamed', '3', 'Good', '2018', '01094066654', '2003-11-25', 'Male', 'your_site_name_d02c11a57cfb925449afcbef9d4fd7b5.jpg', 'your_site_name_d46a822ee7a91a620318fb9ec3a26547.jpg', 'computer graphics', 'Artificial Intellegence', 'artisicisa', 'Algrothims', 'datascince', 'ai'),
(16, 'TD17-a464', 'Khaled', 'Saad', '2', 'Nice Student', '2018', '010605080355', '2001-06-24', 'Male', 'your_site_name_85bc20eb599d5015026199ce13feeddd.jpg', '', 'Internert Security', 'Artificial Intellegence', 'Computer Graphic', 'Algrothims', 'Math', 'English');

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `position` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`id`, `name`, `position`, `username`, `password`) VALUES
(1, 'Admin 1', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
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
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
