-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2023 at 01:00 AM
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
(1, 'Demonstration Account', 'Sonali Dongre 5', 'super_admin', '+91-9199450345', 'DEMO02230345', 'Sonali2922', '65465', 'support@aidcom.in', 'RobinR2204#@', 'http://localhost/school_mgmt_system/modules/avatar/sample/avatar17.png', 'Published', '2023-02-19 20:24:26'),
(2, 'Xiaomi', 'Sonali Dongre 5', 'super_admin', '+91-9971121646', 'XIAO02231646', 'Sonali2922', '65465', 'support@aidcom.in', 'RobinR2204#@', 'http://localhost/school_mgmt_system/modules/avatar/sample/avatar9.png', 'Published', '2023-02-20 00:34:45'),
(3, 'Zebronics Classes', 'Sonali Dongre 5', 'super_admin', '+91-5422132891', 'ZEBR02232891', 'Sonali2922', '65465', 'support@aidcom.in', 'RobinR2204#@', 'http://localhost/school_mgmt_system/modules/avatar/sample/avatar7.png', 'Published', '2023-02-23 00:14:42'),
(4, 'Sidhartha Institute', 'Sonali Dongre 5', 'super_admin', '+91-8775465464', 'SIDH02235464', 'Sonali2922', '65465', 'support@aidcom.in', 'RobinR2204#@', 'http://localhost/school_mgmt_system/modules/avatar/sample/avatar14.png', 'Published', '2023-02-23 21:58:32'),
(5, 'Pixie Art', 'Sonali Dongre 5', 'super_admin', '+91-4001001220', 'PIXI02231220', 'Sonali2922', '65465', 'support@aidcom.in', 'RobinR2204#@', 'http://localhost/school_mgmt_system/modules/avatar/sample/avatar19.png', 'Published', '2023-02-25 21:48:21'),
(6, 'Raspberry', 'Sonali Dongre 5', 'super_admin', '+91-8976453213', 'RASP02233213', 'Sonali2922', '65465', 'support@aidcom.in', 'RobinR2204#@', 'http://localhost/school_mgmt_system/modules/avatar/sample/avatar8.png', 'Published', '2023-02-26 00:08:55'),
(7, 'Sonali Education', 'Sonali Dongre 5', 'super_admin', '+91-1324654354', 'SONA02234354', 'Sonali2922', '65465', 'support@aidcom.in', 'RobinR2204#@', 'http://localhost/school_mgmt_system/modules/avatar/sample/avatar14.png', 'Published', '2023-02-26 00:14:16');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
