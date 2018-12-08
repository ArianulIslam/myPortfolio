-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 05:47 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `pid` int(11) NOT NULL,
  `project_title` varchar(250) NOT NULL,
  `project_desc` varchar(512) NOT NULL,
  `project_img` varchar(250) NOT NULL,
  `project_link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`pid`, `project_title`, `project_desc`, `project_img`, `project_link`) VALUES
(22, 'Toura', 'survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'projectimage1.jpg', 'https://www.lipsum.com/'),
(24, 'Locate me', 'There is one global PHP variable called $_FILES. This variable is an associate double dimension array and keeps all the information related to uploaded file. So if the value assigned to the inputs name attribute in uploading form was file, then PHP would create following five variables ', 'projectimage2.png', 'https://www.tutorialspoint.com/php/php_file_uploading.htm'),
(25, 'Udemy', 'Online Educational Website build using html css boostrap', 'shutterstock_349400798-1000x300.jpg', 'https://www.udemy.com/');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `uniName` varchar(250) NOT NULL,
  `deptName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `email`, `password`, `fullName`, `uniName`, `deptName`) VALUES
(3, 'ibinternetbasic@gmail.com', 'iluvallah', 'Ariyan', 'IUB', 'EEE'),
(5, 'an.ariyan@yahoo.com', 'iluvallah', 'Arianul Islam', 'IUB', 'CSE'),
(6, 'sadmanrafi@gmail.com', 'iluvallah', 'Sadman Rafi', 'IUB', 'CSE'),
(7, 'abc@gmail.com', 'iluvallah', 'ABC', 'NSU', 'EEE'),
(8, 'ariyan@gmail.com', 'admin', 'Ariyan Islam', 'IUB', 'CS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
