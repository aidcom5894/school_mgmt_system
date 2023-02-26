-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2023 at 10:20 PM
-- Server version: 8.0.32-0ubuntu0.22.04.2
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_mgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `institute_registration`
--

CREATE TABLE `institute_registration` (
  `id` int NOT NULL,
  `institute_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_name` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_role` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `hod_contact` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `login_id` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `inst_reg_id` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `institute_email` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `institute_address` varchar(550) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_profile_pic` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `community_status` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `registered_Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `institute_registration`
--

INSERT INTO `institute_registration` (`id`, `institute_name`, `admin_name`, `admin_role`, `hod_contact`, `login_id`, `password`, `inst_reg_id`, `institute_email`, `institute_address`, `admin_profile_pic`, `community_status`, `registered_Date`) VALUES
(1, 'Aadamya Classes', 'Vivek Robin Kujur', 'super_admin', '+91-9264453821', 'AADA02233821', 'Admin1234#@', '10CTAPK5544G1Z4', 'robinkujur@aidcom.in', 'St. Tersa School Road, Dargah Muhallah, Bettiah', 'http://localhost/school_mgmt_system/modules/avatar/uploaded_avatar/avatar.png', 'Published', '2023-02-26 17:04:47'),
(2, 'Code Block', 'Reshma Robin', 'super_admin', '+91-6205969520', 'CODE02239520', 'Admin1234#@', 'asdv', 'sdf@gmail.com', 'adsfa asdf', 'http://localhost/school_mgmt_system/modules/avatar/uploaded_avatar/Profile1.png', 'Published', '2023-02-26 21:09:06'),
(3, 'Papappas', 'pp Daniel', 'super_admin', '+91-1328535000', 'PAPA02235000', '123456789', 'asdasdf', 'bsb@gmail.com', 'asdf sadfasdf', 'http://localhost/school_mgmt_system/modules/avatar/uploaded_avatar/images.jpeg', 'Published', '2023-02-26 21:17:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `institute_registration`
--
ALTER TABLE `institute_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `institute_registration`
--
ALTER TABLE `institute_registration`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
