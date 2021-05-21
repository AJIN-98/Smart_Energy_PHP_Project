-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 01:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `energy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `consumerdetails`
--

CREATE TABLE `consumerdetails` (
  `name` text NOT NULL,
  `address` text NOT NULL,
  `emailid` text NOT NULL,
  `consumernumber` text NOT NULL,
  `phone` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consumerdetails`
--

INSERT INTO `consumerdetails` (`name`, `address`, `emailid`, `consumernumber`, `phone`) VALUES
('Govind', 'College of Engineering Perumon', 'govind@gmail.com', '1234567891', '7094236000'),
('Syamili', 'College of Engineering Perumon', 'syamili@gmail.com', '1234567892', '9095612000'),
('Parvathy', 'College of Engineering Perumon', 'parvathy@gmail.com', '1234567893', '8089088000'),
('Swathi', 'College of Engineering Perumon', 'swathi@gmail.com', '1234567894', '9056755000');

-- --------------------------------------------------------

--
-- Table structure for table `orderid`
--

CREATE TABLE `orderid` (
  `month` text NOT NULL,
  `year` text NOT NULL,
  `consumernumber` text NOT NULL,
  `totalamount` text NOT NULL,
  `blinkingvalue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderid`
--

INSERT INTO `orderid` (`month`, `year`, `consumernumber`, `totalamount`, `blinkingvalue`) VALUES
('January', '2020', '1234567891', '1100', 220),
('February', '2020', '1234567891', '700', 140),
('March', '2020', '1234567891', '500', 100),
('April', '2020', '1234567891', '2000', 400),
('May', '2020', '1234567891', '2250', 450),
('June', '2020', '1234567891', '1600', 320),
('July', '2020', '1234567891', '1000', 200),
('August', '2020', '1234567891', '2000', 400),
('September', '2020', '1234567891', '2500', 500),
('October', '2020', '1234567891', '2000', 400),
('November', '2020', '1234567891', '3000', 600),
('January', '2020', '1234567892', '1100', 220),
('February', '2020', '1234567892', '700', 140),
('March', '2020', '1234567892', '500', 100),
('April', '2020', '1234567892', '2000', 400),
('May', '2020', '1234567892', '2250', 450),
('June', '2020', '1234567892', '1600', 320),
('July', '2020', '1234567892', '2000', 400),
('August', '2020', '1234567892', '2500', 500),
('September', '2020', '1234567892', '2000', 400),
('October', '2020', '1234567892', '2500', 500),
('November', '2020', '1234567892', '3000', 600),
('January', '2020', '1234567893', '1100', 220),
('February', '2020', '1234567893', '700', 140),
('March', '2020', '1234567893', '500', 100),
('April', '2020', '1234567893', '2000', 400),
('May', '2020', '1234567893', '2250', 450),
('June', '2020', '1234567893', '1600', 320),
('July', '2020', '1234567893', '2500', 500),
('August', '2020', '1234567893', '2000', 400),
('September', '2020', '1234567893', '2500', 500),
('October', '2020', '1234567893', '2000', 400),
('November', '2020', '1234567893', '3000', 600),
('January', '2020', '1234567894', '1100', 220),
('February', '2020', '1234567894', '700', 140),
('March', '2020', '1234567894', '500', 100),
('April', '2020', '1234567894', '2000', 400),
('May', '2020', '1234567894', '2250', 450),
('June', '2020', '1234567894', '1600', 320),
('July', '2020', '1234567894', '2000', 400),
('August', '2020', '1234567894', '2500', 500),
('September', '2020', '1234567894', '1250', 250),
('October', '2020', '1234567894', '2000', 400),
('November', '2020', '1234567894', '2500', 500);
-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` text NOT NULL,
  `passcode` text NOT NULL,
  `consumerid` text NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `passcode`, `consumerid`, `type`) VALUES
('govind@gmail.com', '12345', '1234567891', 1),
('admin', 'admin', '0', 0),
('syamili@gmail.com', '12345', '1234567892', 1),
('parvathy@gmail.com', '12345', '1234567893', 1),
('swathi@gmail.com', '12345', '1234567894', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
