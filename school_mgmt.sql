-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 05, 2023 at 01:55 PM
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
  `admin_role` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hod_contact` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `login_id` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `inst_reg_id` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `institute_email` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `institute_address` varchar(550) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_profile_pic` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `community_status` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `account_status` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `account_type` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `supp` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `transaction_id` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `renewal_date` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `validity_upto` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `takeover_date` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `portal_registration_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `institute_registration`
--

INSERT INTO `institute_registration` (`id`, `institute_name`, `admin_name`, `admin_role`, `hod_contact`, `login_id`, `password`, `inst_reg_id`, `institute_email`, `institute_address`, `admin_profile_pic`, `community_status`, `account_status`, `account_type`, `supp`, `transaction_id`, `renewal_date`, `validity_upto`, `takeover_date`, `portal_registration_date`) VALUES
(1, 'Zerbronics', 'Benq', 'super_admin', '+91-7445112316', 'ZERB03232316', 'RobinR2204#@', 'Enter Institute Registration Details', 'email@yourinstitute.com', 'Your Institute Address Here', 'http://localhost/school_mgmt_system/modules/avatar/sample/avatar6.png', 'Not Published', 'Running', 'Premium Account', 'To be updated', '', '', '', 'New Principal Joining Date', '2023-03-04 16:07:43'),
(2, 'Asdf', 'Asdasd', 'super_admin', '+91-1798467461', 'ASDF03237461', 'Admin1234', 'Enter Institute Registration Details', 'email@yourinstitute.com', 'Your Institute Address Here', 'http://localhost/school_mgmt_system/modules/avatar/sample/avatar17.png', 'Not Published', 'Account_Suspended', 'Trial Account', 'To be updated', '', '', '', 'New Principal Joining Date', '2023-03-04 18:10:07');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
