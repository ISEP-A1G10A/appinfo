-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 31, 2018 at 02:58 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appinfo_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `gear`
--

CREATE TABLE `gear` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `reference` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gear_action`
--

CREATE TABLE `gear_action` (
  `id` int(11) NOT NULL,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `instruction` varchar(1023) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gear_category`
--

CREATE TABLE `gear_category` (
  `id` int(11) NOT NULL,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gear_company`
--

CREATE TABLE `gear_company` (
  `id` int(11) NOT NULL,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gear_event`
--

CREATE TABLE `gear_event` (
  `id` int(11) NOT NULL,
  `gear` int(11) NOT NULL,
  `action` int(11) NOT NULL,
  `data` varchar(1023) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gear_type`
--

CREATE TABLE `gear_type` (
  `id` int(11) NOT NULL,
  `company` int(11) NOT NULL,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `serial_number` varchar(515) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `main_user` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `surface` varchar(11) NOT NULL,
  `address_line_1` varchar(1023) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address_line_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address_zip_code` varchar(10) NOT NULL,
  `address_city` varchar(127) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address_country` varchar(127) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home_type`
--

CREATE TABLE `home_type` (
  `id` int(11) NOT NULL,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `link_gear_action_gear_category`
--

CREATE TABLE `link_gear_action_gear_category` (
  `id` int(11) NOT NULL,
  `action` int(11) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `link_user_home`
--

CREATE TABLE `link_user_home` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `home` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `object` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message_object`
--

CREATE TABLE `message_object` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `email_prefix` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `id` int(11) NOT NULL,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `type` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_tempory_password`
--

CREATE TABLE `user_tempory_password` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `expiration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `label`) VALUES
(1, 'admin_sys'),
(2, 'admin_sav'),
(3, 'user_main'),
(4, 'user_secondary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gear`
--
ALTER TABLE `gear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gear_action`
--
ALTER TABLE `gear_action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gear_category`
--
ALTER TABLE `gear_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gear_company`
--
ALTER TABLE `gear_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gear_event`
--
ALTER TABLE `gear_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gear_type`
--
ALTER TABLE `gear_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_type`
--
ALTER TABLE `home_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link_gear_action_gear_category`
--
ALTER TABLE `link_gear_action_gear_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link_user_home`
--
ALTER TABLE `link_user_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_object`
--
ALTER TABLE `message_object`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tempory_password`
--
ALTER TABLE `user_tempory_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gear`
--
ALTER TABLE `gear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gear_action`
--
ALTER TABLE `gear_action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gear_category`
--
ALTER TABLE `gear_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gear_company`
--
ALTER TABLE `gear_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gear_event`
--
ALTER TABLE `gear_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gear_type`
--
ALTER TABLE `gear_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `home_type`
--
ALTER TABLE `home_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `link_gear_action_gear_category`
--
ALTER TABLE `link_gear_action_gear_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `link_user_home`
--
ALTER TABLE `link_user_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message_object`
--
ALTER TABLE `message_object`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_tempory_password`
--
ALTER TABLE `user_tempory_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
