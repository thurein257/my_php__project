-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2023 at 06:21 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ad_name` varchar(20) NOT NULL,
  `ad_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_name`, `ad_pass`) VALUES
('moondrop', 'codadmin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Message` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Mobile`, `City`, `Message`) VALUES
('thureinsoe', 'thureinsoe@gmail.com', '09788819542', 'Yangon', 'hi'),
('ald', 'ald@gmail.com', '0912345678', 'Yangon', 'hello hello here'),
('nami', 'nami@gmail.com', '095181620', 'Bago', 'connection text.');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Mobile Number` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Items` varchar(20) NOT NULL,
  `Prices` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Name`, `Email`, `Mobile Number`, `Address`, `Items`, `Prices`) VALUES
('thurein', 'thurein@gmail.com', '09788819542', 'pyihtaungsu street', 'STARFEILD II ', '$109.99 '),
('nami', 'nami@gmail.com', '095181620', 'Bago', 'SSR ', '$39.99 ');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pname` varchar(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `prn` varchar(20) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pname`, `cname`, `prn`, `img`) VALUES
('BLESSING2', 'IEMs', '$319.99', 'BLESSING2.jpg'),
('SOLIS', 'IEMs', '$1099.99', 'SOLIS.jpg'),
('DARKSABER', 'IEMs', '$799.99', 'DARKSABER.jpg'),
('SOLIS2', 'IEMs', '$2699.00', 'SOLIS2.jpg'),
('BEAUTIFUL WORLD', 'IEMs', '$770.00', 'beautiful world.jpg'),
('SSR', 'IEMs', '$39.99', 'SSR.jpg'),
('STARFEILD II', 'IEMs', '$109.99', 'starfield ii.jpg'),
('KATO', 'IEMs', '$189.99', 'KATO.jpg'),
('S8', 'IEMs', '$699.99', 'S8.jpg'),
('STARFEILD', 'IEMs', '$109.99', 'STARFIELD.jpg'),
('SSP', 'IEMs', '$39.99', 'SSP.jpg'),
('ILLUMINATION', 'IEMs', '$799.99', 'ILLUMINATION.jpg'),
('BLESSING3', 'IEMs', '$319.99', 'blessing3.jpg'),
('STELLARIS', 'IEMs', '$109.99', 'STELLARIS.jpg'),
('ARIASE', 'IEMs', '$79.99', 'ARIASE.jpg'),
('ARIA', 'IEMs', '$79.99', 'ARIA.jpg'),
('CHU', 'IEMs', '$19.99', 'CHU.jpg'),
('CHU II', 'IEMs', '$18.99', 'chu ii.jpg'),
('LAN', 'IEMs', '$39.99', 'lan.jpg'),
('VARIATIONS', 'IEMs', '$520.00', 'VARIATIONS.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Name`, `Email`, `Password`) VALUES
('luffy', 'luffy@gmail.com', 'qwer'),
('luffy', 'luffy@gmail.com', '0000'),
('nami', 'nami@gmail.com', 'zxcv');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
