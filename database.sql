-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 08:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10-alejandro-biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10-alejandro-biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10-alejandro-biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(64) NOT NULL,
  `author_name` varchar(30) NOT NULL,
  `author_lastname` varchar(30) NOT NULL,
  `description` varchar(64) NOT NULL,
  `publish_date` date NOT NULL,
  `type` enum('book','CD','DVD','') NOT NULL,
  `status` enum('available','reserved','','') NOT NULL,
  `publisher_name` varchar(30) NOT NULL,
  `publisher_address` varchar(30) NOT NULL,
  `publisher_size` enum('big','medium','small','') NOT NULL,
  `item_ISBN` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `title`, `image`, `author_name`, `author_lastname`, `description`, `publish_date`, `type`, `status`, `publisher_name`, `publisher_address`, `publisher_size`, `item_ISBN`) VALUES
(1, 'item1', 'item1.jpg', 'name1', 'lastname1', 'item1\'s short description', '2008-12-11', 'book', 'available', 'publisher_name1', 'publisher_address1', 'medium', 123213131),
(2, 'item2', 'item2.jpg', 'name2', 'lastname2', 'item\'s 2 short description', '2000-07-07', 'DVD', 'available', 'publisher_name1', 'publisher_address2', 'small', 123543423),
(3, 'item3', 'item3.jpg', 'name3', 'lastname3', 'item\'s 3 short description', '2020-03-04', 'CD', 'reserved', 'publisher_name3', 'publisher_address3', 'medium', 435437234),
(4, 'item4', 'item4.jpg', 'name4', 'lastname4', 'item4\'s short description', '1997-05-04', 'book', 'available', 'publisher_name3', 'publisher_address4', 'small', 923840943),
(5, 'item5', 'item5.jpg', 'name5', 'lastname5', 'item5\'s short description', '2018-08-18', 'book', 'available', 'publisher_name1', 'publisher_address5', 'big', 123135667),
(6, 'item6', 'item6.jpg', 'name6', 'lastname6', 'item6\'s short description', '2016-09-08', 'CD', 'reserved', 'publisher_name1', 'publisher_address6', 'big', 238478204),
(7, 'item7', 'item7.jpg', 'name7', 'lastname7', 'item7\'s short description', '2005-06-25', 'DVD', 'reserved', 'publisher_name3', 'publisher_address7', 'small', 897549245),
(8, 'item8', 'item8.jpg', 'name8', 'lastname8', 'item8\'s description', '2007-11-09', 'book', 'available', 'publisher_name2', 'publisher_address8', 'big', 897923495),
(9, 'item9', 'item9.jpg', 'name9', 'lastname9', 'item9\'s description', '2020-04-21', 'CD', 'available', 'publisher_name2', 'publisher_address9', 'small', 104378395),
(10, 'item10', 'item10.jpg', 'name10', 'lastname10', 'item10\'s description', '2004-11-09', 'book', 'available', 'publisher_name3', 'publisher_address10', 'medium', 891274942),
(11, 'item11', 'item1.jpg', 'authorname11', 'authorlastname11', 'shortdescription11', '2010-05-20', 'book', 'available', 'publisher11', 'publisheraddress11', 'big', 105398589);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
