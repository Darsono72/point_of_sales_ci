-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 18, 2020 at 08:11 PM
-- Server version: 10.3.22-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigni_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `name` varchar(100) NOT NULL COMMENT 'Name',
  `email` varchar(255) NOT NULL COMMENT 'Email Address',
  `contact_no` varchar(50) NOT NULL COMMENT 'Contact No',
  `created_at` varchar(20) NOT NULL COMMENT 'Created date'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact_no`, `created_at`) VALUES
(3, 'User', 'user@test.com', '9000000003', '2019-01-03'),
(4, 'Editor', 'editor@test.com', '9000000004', '2019-01-04'),
(5, 'Writer', 'writer@test.com', '9000000005', '2019-01-05'),
(6, 'Contact', 'contact@test.com', '9000000006', '2019-01-06'),
(7, 'Manager', 'manager@test.com', '9000000007', '2019-01-07'),
(8, 'John', 'john@test.com', '9000000055', '2019-01-08'),
(9, 'Merry', 'merry@test.com', '9000000088', '2019-01-09'),
(10, 'Keliv', 'kelvin@test.com', '9000550088', '2019-01-10'),
(11, 'Herry', 'herry@test.com', '9050550088', '2019-01-11'),
(12, 'Mark', 'mark@test.com', '9050550998', '2019-01-12'),
(13, 'Jono', 'Jono@test.com', '', ''),
(14, 'Farida', 'farida@test.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `_company`
--

CREATE TABLE `_company` (
  `branch_id` int(11) NOT NULL,
  `branch_nm` varchar(25) DEFAULT NULL,
  `jenis_persh` varchar(10) DEFAULT NULL,
  `nama_persh` varchar(50) DEFAULT NULL,
  `alamat_persh1` varchar(100) DEFAULT NULL,
  `alamat_persh2` varchar(100) DEFAULT NULL,
  `kota_persh` varchar(50) DEFAULT NULL,
  `telp1_persh` varchar(20) DEFAULT NULL,
  `telp2_persh` varchar(20) DEFAULT NULL,
  `fax_persh` varchar(20) DEFAULT NULL,
  `post_code` int(11) DEFAULT NULL,
  `avatar` varchar(50) DEFAULT NULL,
  `avatar_small` varchar(50) DEFAULT NULL,
  `locked` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_company`
--

INSERT INTO `_company` (`branch_id`, `branch_nm`, `jenis_persh`, `nama_persh`, `alamat_persh1`, `alamat_persh2`, `kota_persh`, `telp1_persh`, `telp2_persh`, `fax_persh`, `post_code`, `avatar`, `avatar_small`, `locked`) VALUES
(101, 'TOKO CABANG 101', NULL, 'JAGAD', 'JL. Srengseng Sawah No.1B', NULL, 'Depok', '021.7868103', NULL, NULL, NULL, 'logoleuser.png', 'leuser_bw.png', 0),
(102, 'TOKO CABANG 102', NULL, 'SOLUTION', 'Ruko The Galaxy Blok C', NULL, 'Cibinong Bogor', '', NULL, NULL, NULL, 'logoleuser.png', 'arei_logo_kecil.jpg', 0),
(103, 'TOKO CABANG 103', NULL, 'JAGAD 02', 'JL. IR Juanda No. 8B', NULL, 'Ciputat Tangsel', '021.7424941', NULL, NULL, NULL, 'logoleuser.png', 'leuser_bw.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `_users`
--

CREATE TABLE `_users` (
  `branch_id` int(11) NOT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `user_name` varchar(50) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `user_pass` varchar(50) DEFAULT NULL,
  `real_pass` varchar(50) DEFAULT NULL,
  `user_avatar` varchar(50) DEFAULT 'no_image.png',
  `user_level` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_no` varchar(50) DEFAULT NULL,
  `update_time` varchar(50) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_users`
--

INSERT INTO `_users` (`branch_id`, `dept_id`, `user_name`, `full_name`, `user_pass`, `real_pass`, `user_avatar`, `user_level`, `email`, `phone_no`, `update_time`, `active`) VALUES
(101, NULL, 'admin_1', 'Administrator', 'b714337aa8007c433329ef43c7b8252c', NULL, 'no_image.png', 'staff', NULL, NULL, NULL, 0),
(101, NULL, 'demo_1', 'User Demo #1', 'b714337aa8007c433329ef43c7b8252c', NULL, 'no_image.png', 'mgr', NULL, NULL, NULL, 0),
(102, NULL, 'demo_2', 'App Developer #11', '70fb27278e406a8a3cb6e7da51bd7797', NULL, 'no_image.png', 'spv', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `_user_permission`
--

CREATE TABLE `_user_permission` (
  `rec_id` int(11) UNSIGNED NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `menu_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_user_permission`
--

INSERT INTO `_user_permission` (`rec_id`, `user_name`, `menu_id`) VALUES
(422, 'demo_2', 1),
(423, 'demo_2', 110),
(424, 'demo_2', 5),
(426, 'demo_2', 2),
(427, 'demo_2', 320),
(1875, 'admin_1', 1),
(1876, 'admin_1', 5),
(1878, 'admin_1', 502),
(1879, 'admin_1', 109),
(1880, 'admin_1', 2),
(1881, 'admin_1', 401),
(1882, 'admin_1', 3),
(1883, 'admin_1', 4),
(1884, 'admin_1', 6),
(1886, 'admin_1', 410),
(1887, 'admin_1', 320),
(1888, 'admin_1', 601),
(1891, 'admin_1', 404),
(1893, 'admin_1', 110),
(1897, 'admin_1', 591),
(1898, 'admin_1', 650),
(1899, 'admin_1', 9),
(1900, 'admin_1', 910),
(1901, 'admin_1', 920),
(1907, 'demo_1', 4),
(1908, 'demo_1', 5),
(1909, 'demo_1', 0),
(1910, 'demo_1', 401),
(1911, 'demo_1', 550),
(1912, 'demo_1', 40),
(1913, 'demo_1', 50),
(1914, 'demo_1', 5010),
(1915, 'demo_1', 5020),
(1916, 'demo_1', 4040),
(1917, 'demo_1', 5030),
(1918, 'demo_1', 5040),
(1919, 'admin_1', 7),
(1920, 'demo_1', 7),
(1921, 'demo_1', 710),
(1922, 'demo_1', 99),
(1923, 'demo_1', 9910),
(1924, 'demo_1', 750);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_company`
--
ALTER TABLE `_company`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `_users`
--
ALTER TABLE `_users`
  ADD PRIMARY KEY (`user_name`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `_user_permission`
--
ALTER TABLE `_user_permission`
  ADD PRIMARY KEY (`rec_id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `_user_permission`
--
ALTER TABLE `_user_permission`
  MODIFY `rec_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1925;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
