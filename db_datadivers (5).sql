-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 04:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_datadivers`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `c_state` varchar(50) NOT NULL,
  `c_postalcode` int(10) NOT NULL,
  `c_contact` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`c_id`, `c_name`, `c_address`, `c_state`, `c_postalcode`, `c_contact`) VALUES
(1, 'Terence', 'b52', 'Selangor', 41200, 1131350164);

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
  `o_terms` varchar(15) NOT NULL,
  `o_cust` int(11) NOT NULL,
  `o_purchaseOrder` int(11) NOT NULL,
  `o_item` int(11) NOT NULL,
  `o_shpID` int(11) DEFAULT NULL,
  `o_qty` int(11) NOT NULL,
  `o_uom` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`o_id`, `o_dateIssued`, `o_deliveryOrder`, `o_jobOrder`, `o_salesOrder`, `o_terms`, `o_cust`, `o_purchaseOrder`, `o_item`, `o_shpID`, `o_qty`, `o_uom`) VALUES
(3, '2023-06-20', NULL, 'asd', 'qwe', 'asd', 1, 1, 1, 16, 21, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_shipping`
--

CREATE TABLE `tb_shipping` (
  `shp_id` int(11) NOT NULL,
  `shp_date` date NOT NULL,
  `shp_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_shipping`
--

INSERT INTO `tb_shipping` (`shp_id`, `shp_date`, `shp_status`) VALUES
(16, '2023-06-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `s_id` int(11) NOT NULL,
  `s_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`u_id`, `u_email`, `u_pwd`, `u_type`) VALUES
(1, 'terence43@mgasd', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `o_cust` (`o_cust`),
  ADD KEY `o_purchaseOrder` (`o_purchaseOrder`),
  ADD KEY `o_item` (`o_item`),
  ADD KEY `o_shpID` (`o_shpID`);

--
-- Indexes for table `tb_shipping`
--
ALTER TABLE `tb_shipping`
  ADD PRIMARY KEY (`shp_id`),
  ADD KEY `shp_status` (`shp_status`);

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
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_shipping`
--
ALTER TABLE `tb_shipping`
  MODIFY `shp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD CONSTRAINT `tb_admin_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `tb_user` (`u_type`);

--
-- Constraints for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD CONSTRAINT `tb_customer_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `tb_user` (`u_type`);

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_ibfk_1` FOREIGN KEY (`o_cust`) REFERENCES `tb_customer` (`c_id`),
  ADD CONSTRAINT `tb_order_ibfk_2` FOREIGN KEY (`o_shpID`) REFERENCES `tb_shipping` (`shp_id`);

--
-- Constraints for table `tb_shipping`
--
ALTER TABLE `tb_shipping`
  ADD CONSTRAINT `tb_shipping_ibfk_1` FOREIGN KEY (`shp_status`) REFERENCES `tb_status` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
