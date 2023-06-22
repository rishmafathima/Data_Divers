-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 10:10 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tsk`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `a_id` int(11) NOT NULL,
  `a_uid` int(11) NOT NULL,
  `a_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `c_id` int(11) NOT NULL,
  `c_uid` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `c_state` varchar(50) NOT NULL,
  `c_postalcode` int(10) NOT NULL,
  `c_contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`c_id`, `c_uid`, `c_name`, `c_address`, `c_state`, `c_postalcode`, `c_contact`) VALUES
(1, 1, 'JonSnow', 'KDSE', 'Johor', 51300, '0123456789'),
(2, 2, 'Arya', 'KDOJ', 'Johor', 51300, '01122334455');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `o_id` int(11) NOT NULL,
  `o_dateIssued` date DEFAULT NULL,
  `o_deliveryOrder` varchar(30) DEFAULT NULL,
  `o_jobOrder` varchar(30) DEFAULT NULL,
  `o_salesOrder` varchar(30) DEFAULT NULL,
  `o_terms` varchar(15) DEFAULT NULL,
  `o_cust` int(11) NOT NULL,
  `o_purchaseOrder` int(11) DEFAULT NULL,
  `o_qty` int(11) DEFAULT NULL,
  `o_totalAmount` float DEFAULT NULL,
  `o_tax` int(11) DEFAULT NULL,
  `o_uom` varchar(10) DEFAULT NULL,
  `o_isShip` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`o_id`, `o_dateIssued`, `o_deliveryOrder`, `o_jobOrder`, `o_salesOrder`, `o_terms`, `o_cust`, `o_purchaseOrder`, `o_qty`, `o_totalAmount`, `o_tax`, `o_uom`, `o_isShip`) VALUES
(7, '2023-06-21', NULL, NULL, NULL, NULL, 1, NULL, 2, 200, NULL, NULL, 2),
(8, '2023-06-21', NULL, NULL, NULL, NULL, 2, NULL, 3, 300, NULL, NULL, 2),
(9, '2023-06-21', NULL, NULL, NULL, NULL, 2, NULL, 2, 200, NULL, NULL, 2),
(10, '2023-06-21', NULL, NULL, NULL, NULL, 1, NULL, 1, 150, NULL, NULL, 2),
(11, '2023-06-21', NULL, NULL, NULL, NULL, 2, NULL, 1, 300, NULL, NULL, 2),
(12, '2023-06-21', NULL, NULL, NULL, NULL, 1, NULL, 1, 150, NULL, NULL, 2),
(13, '2023-06-21', NULL, NULL, NULL, NULL, 2, NULL, 1, 50, NULL, NULL, 2),
(14, '2023-06-21', NULL, NULL, NULL, NULL, 2, NULL, 2, 150, NULL, NULL, 2),
(17, '2023-06-21', NULL, NULL, NULL, NULL, 1, NULL, 1, 150, NULL, NULL, 2),
(18, '2023-06-21', NULL, NULL, NULL, NULL, 2, NULL, 2, 200, NULL, NULL, 2),
(19, '2023-06-22', NULL, NULL, NULL, NULL, 2, NULL, 1, 150, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_shipping`
--

CREATE TABLE `tb_shipping` (
  `shp_id` int(11) NOT NULL,
  `shp_oid` int(11) NOT NULL,
  `shp_date` date NOT NULL,
  `shp_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_shipping`
--

INSERT INTO `tb_shipping` (`shp_id`, `shp_oid`, `shp_date`, `shp_status`) VALUES
(16, 7, '2023-06-22', 4),
(17, 7, '2023-06-22', 4),
(19, 8, '2023-06-24', 3),
(20, 9, '2023-06-23', 1),
(21, 10, '2023-06-26', 2),
(22, 11, '2023-06-24', 1),
(23, 12, '2023-06-27', 3),
(24, 13, '2023-06-22', 2),
(25, 14, '2023-06-25', 4),
(27, 18, '2023-06-24', 1),
(28, 19, '2023-06-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `s_id` int(11) NOT NULL,
  `s_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`s_id`, `s_desc`) VALUES
(1, 'Pending'),
(2, 'Packed'),
(3, 'Shipped'),
(4, 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `u_id` int(11) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_pwd` varchar(50) NOT NULL,
  `u_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`u_id`, `u_email`, `u_pwd`, `u_type`) VALUES
(1, 'JonSnow@gmail.com', 'codex123.', 1),
(2, 'AryaStark@gmail.com', 'codex123.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `a_uid` (`a_uid`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `c_uid` (`c_uid`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `o_cust` (`o_cust`),
  ADD KEY `o_purchaseOrder` (`o_purchaseOrder`),
  ADD KEY `o_purchaseOrder_2` (`o_purchaseOrder`),
  ADD KEY `o_purchaseOrder_3` (`o_purchaseOrder`);

--
-- Indexes for table `tb_shipping`
--
ALTER TABLE `tb_shipping`
  ADD PRIMARY KEY (`shp_id`),
  ADD KEY `shp_status` (`shp_status`),
  ADD KEY `shp_oid` (`shp_oid`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `u_type` (`u_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_shipping`
--
ALTER TABLE `tb_shipping`
  MODIFY `shp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD CONSTRAINT `tb_admin_ibfk_1` FOREIGN KEY (`a_uid`) REFERENCES `tb_user` (`u_id`);

--
-- Constraints for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD CONSTRAINT `tb_customer_ibfk_1` FOREIGN KEY (`c_uid`) REFERENCES `tb_user` (`u_id`);

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_ibfk_1` FOREIGN KEY (`o_cust`) REFERENCES `tb_customer` (`c_id`);

--
-- Constraints for table `tb_shipping`
--
ALTER TABLE `tb_shipping`
  ADD CONSTRAINT `tb_shipping_ibfk_3` FOREIGN KEY (`shp_status`) REFERENCES `tb_status` (`s_id`),
  ADD CONSTRAINT `tb_shipping_ibfk_4` FOREIGN KEY (`shp_oid`) REFERENCES `tb_order` (`o_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
