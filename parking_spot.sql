-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 10:55 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking_spot`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_info`
--

CREATE TABLE `basic_info` (
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mob_number` int(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `w_owner` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic_info`
--

INSERT INTO `basic_info` (`name`, `email`, `mob_number`, `password`, `w_owner`) VALUES
('Hasib', 'hasib123@gmail.c0m', 173082301, '12345', 'House Owner'),
('Hasib hasan', 'hasib123@gmail.c0m', 17308232, '12345', 'Car Owner'),
('Hasan', 'hasan@gmail.com', 173082311, '12345', 'House Owner'),
('Shawon', 'shawon@gmal.com', 173082322, '12345', 'Car Owner');

-- --------------------------------------------------------

--
-- Table structure for table `car_info`
--

CREATE TABLE `car_info` (
  `user_id` int(20) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_model` varchar(50) NOT NULL,
  `c_number` varchar(50) NOT NULL,
  `licence_num` varchar(50) NOT NULL,
  `c_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_info`
--

INSERT INTO `car_info` (`user_id`, `c_name`, `c_model`, `c_number`, `licence_num`, `c_image`) VALUES
(0, 'Audi', 'av3000', 'h-123123', 'ahs2412412', '60c67034b6932dc-avanti.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `car_owner`
--

CREATE TABLE `car_owner` (
  `user_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `district` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `p_code` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_owner`
--

INSERT INTO `car_owner` (`user_id`, `name`, `address`, `district`, `city`, `p_code`, `country`, `image`) VALUES
(0, 'Shawon', '125,Shankar', 'Dhaka', 'Dhaka', '1235', 'Bangladesh', '60c66fd6c7d7fIMG_1441.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `drver_info`
--

CREATE TABLE `drver_info` (
  `user_id` int(20) NOT NULL,
  `d_name` varchar(20) NOT NULL,
  `d_number` varchar(50) NOT NULL,
  `d_licence` varchar(50) NOT NULL,
  `d_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `house_owner`
--

CREATE TABLE `house_owner` (
  `user_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `house_add` varchar(50) NOT NULL,
  `district` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `car_space` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `park_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house_owner`
--

INSERT INTO `house_owner` (`user_id`, `name`, `house_add`, `district`, `city`, `postal_code`, `country`, `car_space`, `image`, `park_time`) VALUES
(0, 'Hasan', '123,Shankar', 'Dhaka', 'Dhaka', '12345', 'Bangladesh', '5', '60c66f5d59296223309n - Copy.jpg', 'Night|');

-- --------------------------------------------------------

--
-- Table structure for table `howner_lat_lng`
--

CREATE TABLE `howner_lat_lng` (
  `user_id` int(20) NOT NULL,
  `lat` int(50) NOT NULL,
  `lng` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `howner_lat_lng`
--

INSERT INTO `howner_lat_lng` (`user_id`, `lat`, `lng`) VALUES
(0, 24, 90);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
