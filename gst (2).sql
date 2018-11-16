-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2018 at 03:27 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gst`
--

-- --------------------------------------------------------

--
-- Table structure for table `advance_money`
--

CREATE TABLE `advance_money` (
  `a_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `a_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `a_money` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `gst_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_name`, `date`, `mobile_no`, `gst_no`, `address`) VALUES
(1, 'Ravi Teja', '28-09-2018', '9525728202', '12', 'bbbj'),
(2, 'sagar', '28-09-2018', '9525728202', '12345658558558', 'boring road patna bihar');

-- --------------------------------------------------------

--
-- Table structure for table `clients_product`
--

CREATE TABLE `clients_product` (
  `product_id` int(11) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `consignee` varchar(255) NOT NULL,
  `gst_no` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `hsn_code` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `per` varchar(50) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `cgst` varchar(255) NOT NULL,
  `cgst_amount` varchar(255) NOT NULL,
  `sgst` varchar(50) NOT NULL,
  `sgst_amount` varchar(50) NOT NULL,
  `igst` varchar(255) NOT NULL,
  `igst_amount` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `product_name2` varchar(255) NOT NULL,
  `hsn_code2` varchar(255) NOT NULL,
  `quantity2` varchar(255) NOT NULL,
  `per2` varchar(50) NOT NULL,
  `rate2` varchar(255) NOT NULL,
  `amount2` varchar(255) NOT NULL,
  `gst2` varchar(255) NOT NULL,
  `cgst2` varchar(50) NOT NULL,
  `cgst_amount2` varchar(255) NOT NULL,
  `sgst2` varchar(50) NOT NULL,
  `sgst_amount2` varchar(50) NOT NULL,
  `igst2` varchar(255) NOT NULL,
  `igst_amount2` varchar(255) NOT NULL,
  `total_amount2` varchar(255) NOT NULL,
  `product_name3` varchar(255) NOT NULL,
  `hsn_code3` varchar(255) NOT NULL,
  `quantity3` varchar(255) NOT NULL,
  `per3` varchar(50) NOT NULL,
  `rate3` varchar(255) NOT NULL,
  `amount3` varchar(255) NOT NULL,
  `gst3` varchar(255) NOT NULL,
  `cgst3` varchar(255) NOT NULL,
  `cgst_amount3` varchar(255) NOT NULL,
  `sgst3` varchar(50) NOT NULL,
  `sgst_amount3` varchar(50) NOT NULL,
  `igst3` varchar(255) NOT NULL,
  `igst_amount3` varchar(255) NOT NULL,
  `total_amount3` varchar(255) NOT NULL,
  `product_name4` varchar(255) NOT NULL,
  `hsn_code4` varchar(255) NOT NULL,
  `quantity4` varchar(255) NOT NULL,
  `per4` varchar(50) NOT NULL,
  `rate4` varchar(255) NOT NULL,
  `amount4` varchar(255) NOT NULL,
  `gst4` varchar(255) NOT NULL,
  `cgst4` varchar(255) NOT NULL,
  `cgst_amount4` varchar(255) NOT NULL,
  `sgst4` varchar(50) NOT NULL,
  `sgst_amount4` varchar(50) NOT NULL,
  `igst4` varchar(50) NOT NULL,
  `igst_amount4` varchar(255) NOT NULL,
  `total_amount4` varchar(255) NOT NULL,
  `tm` varchar(50) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `net_amount` varchar(50) NOT NULL,
  `payable` varchar(255) NOT NULL,
  `dues` varchar(255) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `deposite_account` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deposit_security`
--

CREATE TABLE `deposit_security` (
  `deposit_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `deposit_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deposit_amount` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deposit_security`
--

INSERT INTO `deposit_security` (`deposit_id`, `staff_id`, `deposit_date`, `deposit_amount`) VALUES
(1, 7, '2018-09-29 11:14:29', ''),
(2, 7, '2018-09-29 11:17:47', '3000'),
(3, 7, '2018-09-29 11:28:44', '3000'),
(4, 7, '2018-09-29 11:29:54', '3000'),
(5, 7, '2018-09-29 11:31:00', '6000'),
(6, 7, '2018-09-29 11:32:09', '5000'),
(7, 7, '2018-09-29 11:33:48', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expense_id` int(11) NOT NULL,
  `doe` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `doe2` varchar(255) NOT NULL,
  `product_name2` varchar(255) NOT NULL,
  `quanity2` varchar(255) NOT NULL,
  `rate2` varchar(255) NOT NULL,
  `Total2` varchar(255) NOT NULL,
  `doe3` varchar(255) NOT NULL,
  `product_name3` varchar(255) NOT NULL,
  `quanity3` varchar(255) NOT NULL,
  `rate3` varchar(255) NOT NULL,
  `Total3` varchar(255) NOT NULL,
  `doe4` varchar(255) NOT NULL,
  `product_name4` varchar(255) NOT NULL,
  `quanity4` varchar(255) NOT NULL,
  `rate4` varchar(255) NOT NULL,
  `Total4` varchar(255) NOT NULL,
  `total_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`expense_id`, `doe`, `product_name`, `rate`, `quantity`, `total_amount`, `doe2`, `product_name2`, `quanity2`, `rate2`, `Total2`, `doe3`, `product_name3`, `quanity3`, `rate3`, `Total3`, `doe4`, `product_name4`, `quanity4`, `rate4`, `Total4`, `total_no`) VALUES
(1, '28-09-2018', '1', '158', '146', '23068', '28-09-2018', '2', '105', '600', '63000', '28-09-2018', '', '', '', '', '28-09-2018', '', '', '', '', '86068');

-- --------------------------------------------------------

--
-- Table structure for table `expense_products`
--

CREATE TABLE `expense_products` (
  `exp_prod_id` int(11) NOT NULL,
  `exp_prod_name` char(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `added_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_products`
--

INSERT INTO `expense_products` (`exp_prod_id`, `exp_prod_name`, `status`, `added_date`) VALUES
(1, 'asf', 1, '2018-09-28 15:51:20'),
(2, 'jbbj', 1, '2018-09-28 15:51:27');

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE `product_master` (
  `product_id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `client_id` varchar(50) DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `hsn_code` varchar(50) DEFAULT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `per` varchar(50) DEFAULT NULL,
  `rate` varchar(50) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `gst` varchar(50) DEFAULT NULL,
  `cgst` varchar(50) DEFAULT NULL,
  `cgst_amount` varchar(50) DEFAULT NULL,
  `sgst` varchar(50) DEFAULT NULL,
  `sgst_amount` varchar(50) DEFAULT NULL,
  `igst` varchar(50) DEFAULT NULL,
  `igst_amount` varchar(50) DEFAULT NULL,
  `total_amount` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`product_id`, `purchase_id`, `client_id`, `product_name`, `hsn_code`, `quantity`, `per`, `rate`, `amount`, `gst`, `cgst`, `cgst_amount`, `sgst`, `sgst_amount`, `igst`, `igst_amount`, `total_amount`) VALUES
(1, 1, '1', 'p1', 'h1', '100000', 'kg', '100', '10000000', '12', '6', '600000', '6', '600000', '', '0', '11200000.00'),
(2, 1, '1', 'p2', 'h2', '105', 'per2', '200', '21000', '9', '4.5', '945', '4.5', '945', '', '0', '22890.00'),
(3, 2, '1', 'p1', 'h1', '100000', 'kg', '100', '10000000', '12', '6', '600000', '6', '600000', '', '0', '11200000.00'),
(4, 2, '1', 'p2', 'h2', '105', 'per2', '200', '21000', '9', '4.5', '945', '4.5', '945', '', '0', '22890.00'),
(5, 3, '1', 'p1', 'h1', '100000', 'kg', '100', '10000000', '12', '6', '600000', '6', '600000', '', '0', '11200000.00'),
(6, 3, '1', 'p2', 'h2', '105', 'per2', '200', '21000', '9', '4.5', '945', '4.5', '945', '', '0', '22890.00'),
(7, 4, '1', 'p1', 'h1', '100000', 'kg', '100', '10000000', '12', '6', '600000', '6', '600000', '', '0', '11200000.00'),
(8, 4, '1', 'p2', 'h2', '105', 'per2', '200', '21000', '9', '4.5', '945', '4.5', '945', '', '0', '22890.00'),
(9, 5, '1', 'p1', 'h1', '100000', 'kg', '100', '10000000', '12', '6', '600000', '6', '600000', '', '0', '11200000.00'),
(10, 5, '1', 'p2', 'h2', '105', 'per2', '200', '21000', '9', '4.5', '945', '4.5', '945', '', '0', '22890.00'),
(11, 6, '1', 'p1', 'h1', '1', 'per', '100', '100', '12', '6', '6', '6', '6', '12', '12', '124.00'),
(12, 7, '1', 'p1', 'h1', '1', 'per', '100', '100', '12', '6', '6', '6', '6', '12', '12', '124.00'),
(13, 8, '1', 'p1', 'h1', '1', 'per', '100', '100', '12', '6', '6', '6', '6', '12', '12', '124.00'),
(14, 9, '3', 'p1', 'h1', '1', 'per', '100', '100', '12', '6', '6', '6', '6', '12', '12', '124.00'),
(15, 9, '3', 'p1', 'h1', '2', 'per', '100', '200', '12', '6', '12', '6', '12', '', '0', '224.00'),
(16, 10, '2', 'paper', 'h1', '1', 'per', '100', '100', '12', '6', '6', '6', '6', '12', '12', '124.00'),
(17, 10, '2', 'paper 2', 'h2', '1', 'per2', '100', '100', '12', '6', '6', '6', '6', '12', '12', '124.00'),
(18, 11, '2', 'product1', 'p1', '1', 'per', '100', '100', '12', '6', '6', '6', '6', '12', '12', '124.00'),
(19, 11, '2', 'product2', 'p2', '2', 'per', '100', '200', '12', '6', '12', '6', '12', '12', '24', '248.00'),
(20, 11, '2', 'product3', 'p3', '3', 'per', '100', '300', '12', '6', '18', '6', '18', '12', '36', '372.00'),
(21, 12, '2', 'product1', 'h1', '1', 'per', '100', '100', '12', '6', '6', '6', '6', '12', '12', '124.00'),
(22, 12, '2', 'paper3', 'h2', '2', 'per', '200', '400', '12', '6', '24', '6', '24', '13', '52', '500.00'),
(23, 12, '2', 'paper56', 'h2', '3', 'per', '300', '900', '120', '60', '540', '60', '540', '', '0', '1980.00'),
(24, 13, '1', 'paper', '1', '1', '1', '1000', '1000', '12', '6', '60', '6', '60', '', '0', '1120.00'),
(25, 13, '1', 'shop', '2', '2', 'per', '2000', '4000', '120', '60', '2400', '60', '2400', '', '0', '8800.00'),
(26, 13, '1', 'product1', 'h2', '2', 'per2', '100', '200', '12', '6', '12', '6', '12', '', '0', '224.00'),
(27, 13, '1', 'p2', 'h2', '3', 'per', '200', '600', '12', '6', '36', '6', '36', '', '0', '672.00'),
(28, 13, '1', 'product1', '456', '2', 'per', '200', '400', '12', '6', '24', '6', '24', '', '0', '448.00'),
(29, 13, '1', 'holllaa', '1', '2', 'per2', '200', '400', '120', '60', '240', '60', '240', '', '0', '880.00'),
(30, 14, '1', 'p1', 'h1', '1', 'per', '100', '100', '12', '6', '6', '6', '6', '', '0', '112.00'),
(31, 14, '1', 'p2', 'h2', '2', 'per', '100', '200', '12', '6', '12', '6', '12', '', '0', '224.00'),
(32, 15, '1', 'product1', 'h1', '1', 'per', '100', '100', '12', '6', '6', '6', '6', '12', '12', '124.00'),
(33, 15, '1', 'paper3', 'h2', '2', 'per', '100', '200', '12', '6', '12', '6', '12', '12', '24', '248.00'),
(34, 16, '2', 'parle g', 'h1', '1', 'per', '100', '100', '12', '6', '6', '6', '6', '12', '12', '124.00'),
(35, 16, '2', 'product1', 'h2', '2', 'per', '100', '200', '12', '6', '12', '6', '12', '12', '24', '248.00'),
(36, 16, '2', 'product1', 'h2', '2', 'per', '100', '200', '12', '6', '12', '6', '12', '12', '24', '248.00'),
(37, 16, '2', 'paper3', 'h2', '2', 'per2', '100', '200', '12', '6', '12', '6', '12', '12', '24', '248.00'),
(38, 16, '2', 'product1', 'h2', '2', 'per2', '100', '200', '12', '6', '12', '6', '12', '12', '24', '248.00'),
(39, 16, '2', 'product1', 'h2', '2', 'per', '100', '200', '12', '6', '12', '6', '12', '12', '24', '248.00'),
(40, 16, '2', 'product1', 'h1', '2', 'per', '100', '200', '12', '6', '12', '6', '12', '12', '24', '248.00'),
(41, 16, '2', 'paper3', 'h2', '2', 'per', '100', '200', '12', '6', '12', '6', '12', '12', '24', '248.00'),
(42, 16, '2', 'product1', 'h2', '2', 'per', '100', '200', '12', '6', '12', '6', '12', '12', '24', '248.00'),
(43, 16, '2', 'paper3', 'h1', '2', 'per', '100', '200', '12', '6', '12', '6', '12', '12', '24', '248.00'),
(44, 17, '2', 'Golden Coin ', '4802', '146', 'Rim', '600', '87600', '12', '6', '5256', '6', '5256', '', '0', '98112.00'),
(45, 17, '2', 'Golden Coin Maplitho ', '4802', '105', 'rim', '600', '63000', '12', '6', '3780', '6', '3780', '', '0', '70560.00'),
(46, 17, '2', 'Golden Coin ', '4802', '146', 'rim', '600', '87600', '12', '6', '5256', '6', '5256', '', '0', '98112.00'),
(47, 17, '2', 'Golden Coin Maplitho', '4802', '105', 'rim', '600', '63000', '12', '6', '3780', '6', '3780', '', '0', '70560.00'),
(48, 17, '2', 'Golden Coin ', '4802', '146', 'rim', '600', '87600', '12', '6', '5256', '6', '5256', '', '0', '98112.00'),
(49, 17, '2', 'Golden Coin Maplitho', '4802', '105', 'rim', '600', '63000', '12', '6', '3780', '6', '3780', '', '0', '70560.00'),
(50, 17, '2', 'Golden Coin ', '4802', '146', 'rim', '600', '87600', '12', '6', '5256', '6', '5256', '', '0', '98112.00'),
(51, 17, '2', 'Golden Coin Maplitho', '4802', '105', 'rim', '600', '63000', '12', '6', '3780', '6', '3780', '', '0', '70560.00'),
(52, 18, '2', 'amarnath kumar sah patna sdjfkdjfksdjfskfjk', '232', '23', '23', '23', '529', '23', '11.5', '60.835', '11.5', '60.835', '', '0', '650.67'),
(53, 19, '1', 'samosa', 'fdasdwas', '5', '3', '3', '15', '5', '2.5', '0.375', '2.5', '0.375', '2', '0.3', '16.05'),
(54, 19, '1', 'lotto chocopie', 'dfsafde', '4', '1', '2', '8', '8', '4', '0.32', '4', '0.32', '5', '0.4', '9.04'),
(55, 20, '2', 'amarnath kujsdkfjksdjf skjfksdjfk', 'sdkfjksjfk', '23', 'fsdf', '230', '5290', '23', '11.5', '608.35', '11.5', '608.35', '18', '952.2', '7458.90'),
(56, 20, '2', 'chai', 'bnm', '12', '25', '14', '168', '12', '6', '10.08', '6', '10.08', '8', '13.44', '201.60'),
(57, 21, '1', 'product1', 'h1', '2', 'per', '100', '200', '12', '6', '12', '6', '12', '12', '24', '248.00'),
(58, 22, '1', 'projsnkdavhnkjasvkjsavkjasnvkjsnhvkjsvvnskajvnsakv', '123456', '2', '3', '3', '6', '5', '2.5', '0.15', '2.5', '0.15', '', '0', '6.30'),
(59, 22, '1', 'SDgasdfhsdghsfgjdfhtjkdtghkjthkdhgtkghkfgjkfgkkgkf', '45847564', '2', '3', '2252252', '4504504', '12', '6', '270270.24', '6', '270270.24', '', '0', '5045044.48'),
(60, 22, '1', 'szdfhsftghdtghsrdghjnsrtghsdatghsdfh', '1234585', '2', '3', '5255255', '10510510', '5', '2.5', '262762.75', '2.5', '262762.75', '', '0', '11036035.50'),
(61, 22, '1', 'dgvsaDgasFDghsfhgasdfhasdfhasdfhasfhasfhasfhaedfrh', '458514', '2', '3', '2415458521', '4830917042', '5', '2.5', '120772926.05', '2.5', '120772926.05', '', '0', '5072462894.10'),
(62, 22, '1', 'jsfhgvjkahsnkjdfhgikhsdkhfkgjhsdkjfhkjshdjshkdahfk', '12345845', '2', '3', '3', '6', '5', '2.5', '0.15', '2.5', '0.15', '', '0', '6.30'),
(63, 22, '1', 'dshsdfgjtswfhyksgtjhulkdgtjlkgdhkmgyhjsdhsdddddddd', '123458', '2', '3', '3', '6', '5', '2.5', '0.15', '2.5', '0.15', '', '0', '6.30'),
(64, 22, '1', 'sdfghjsfghsfghsdfhsdhsdthsdfhsdthsdthwsaerhwsareht', '154827', '2', '3', '1000', '2000', '5', '2.5', '50', '2.5', '50', '', '0', '2100.00'),
(65, 22, '1', 'adfhdfhadhsdghsadjhsfdgjtsfrijketyhkmszfghsftghsar', '145887', '2', '3', '1000', '2000', '5', '2.5', '50', '2.5', '50', '', '0', '2100.00');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_table`
--

CREATE TABLE `purchase_table` (
  `purchase_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `client_id` int(11) NOT NULL,
  `total_amount` varchar(50) DEFAULT NULL,
  `discount` varchar(50) DEFAULT NULL,
  `net_amount` varchar(50) DEFAULT NULL,
  `payble` varchar(50) DEFAULT NULL,
  `dues` varchar(50) DEFAULT NULL,
  `payment_method` varchar(50) NOT NULL,
  `deposite_account` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_table`
--

INSERT INTO `purchase_table` (`purchase_id`, `date`, `client_id`, `total_amount`, `discount`, `net_amount`, `payble`, `dues`, `payment_method`, `deposite_account`) VALUES
(1, '2018-09-28 10:06:06', 1, '11222890.00', '', '11222890', '20000', '11202890', 'Select...', ''),
(2, '2018-09-28 10:06:10', 1, '11222890.00', '', '11222890', '20000', '11202890', 'Select...', ''),
(3, '2018-09-28 10:06:12', 1, '11222890.00', '', '11222890', '20000', '11202890', 'Select...', ''),
(4, '2018-09-28 10:06:14', 1, '11222890.00', '', '11222890', '20000', '11202890', 'Select...', ''),
(5, '2018-09-28 10:06:15', 1, '11222890.00', '', '11222890', '20000', '11202890', 'Select...', ''),
(6, '2018-09-28 11:20:35', 1, '124.00', '24', '100', '20', '80', 'Cheque', '12345678'),
(7, '2018-09-28 11:21:26', 1, '124.00', '24', '100', '50', '50', 'Cheque', '12345678'),
(8, '2018-09-28 11:22:40', 1, '124.00', '24', '100', '50', '50', 'Cheque', '12345678'),
(9, '2018-09-28 12:59:45', 3, '348.00', '48', '300', '250', '50', 'Cheque', '12345678'),
(10, '2018-09-28 13:53:36', 2, '248.00', '48', '200', '100', '100', 'Cheque', '12345678'),
(11, '2018-09-28 14:52:27', 2, '744.00', '24', '720', '50', '670', 'Cheque', '12345678'),
(12, '2018-09-29 05:01:53', 2, '2604.00', '24', '2580', '50', '2530', 'Cash', '12345678'),
(13, '2018-09-29 05:55:29', 1, '12144.00', '144', '12000', '6000', '6000', 'Cash', ''),
(14, '2018-09-29 06:02:56', 1, '336.00', '36', '300', '50', '250', 'Cash', ''),
(15, '2018-09-29 06:15:37', 1, '372.00', '72', '300', '150', '150', 'Cheque', '12345678'),
(16, '2018-09-29 07:58:30', 2, '2356.00', '56', '2300', '2000', '300', 'Cheque', '12345678'),
(17, '2018-09-29 08:58:54', 2, '674688.00', '0', '674688', '674688', '0', 'Cash', ''),
(18, '2018-09-29 09:24:36', 2, '650.67', '12', '638.67', '600', '38.66999999999996', 'Cheque', '34343434343434'),
(19, '2018-09-29 09:29:18', 1, '25.09', '8', '17.09', '17', '0.09', 'Cash', '147855'),
(20, '2018-09-29 09:55:14', 2, '7660.50', '600.57', '7059.93', '', '7059.93', 'Select...', ''),
(21, '2018-09-29 10:58:34', 1, '248.00', '', '248.00', '240', '8.00', 'Select...', ''),
(22, '2018-09-29 11:52:00', 1, '5088548192.98', '192', '5088548000.98', '48', '5088547952.98', 'Cheque', '147855');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `salary_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `salary` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`salary_id`, `staff_id`, `date`, `salary`) VALUES
(1, 7, '2018-09-28 10:13:16', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `security_money`
--

CREATE TABLE `security_money` (
  `s_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `s_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `s_money` varchar(50) DEFAULT NULL,
  `s_remaining` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security_money`
--

INSERT INTO `security_money` (`s_id`, `staff_id`, `s_date`, `s_money`, `s_remaining`, `status`) VALUES
(1, 7, '2018-09-29 11:33:48', '90000', '-5000', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `doj` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `aadhar_no` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `date_of_advance` varchar(255) NOT NULL,
  `advance_money` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`staff_id`, `staff_name`, `mobile_no`, `doj`, `address`, `email`, `aadhar_no`, `salary`, `date_of_advance`, `advance_money`) VALUES
(7, 'sagar', '9525728202', '2018-09-28', 'vhkjjjbbbmmbb', 'admin@admin.com', '692139396717', '5000', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `product_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`product_name`) VALUES
('<script>document.write(product_name)</script>'),
('<script>document.write(product_name)</script>'),
('<script>document.write(product_name)</script>'),
('<script>document.write(product_name)</script>'),
('<script>document.write(product_name)</script>');

-- --------------------------------------------------------

--
-- Table structure for table `test_ajax`
--

CREATE TABLE `test_ajax` (
  `product_name` varchar(50) NOT NULL,
  `hsn_code` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_ajax`
--

INSERT INTO `test_ajax` (`product_name`, `hsn_code`, `quantity`) VALUES
('', 'h1', '1'),
('', 'h2', '2'),
('', 'h3', '3'),
('', 'h4', '4'),
('p1', 'h1', '1'),
('p2', 'h2', '2'),
('p3', 'h3', '3'),
('p4', 'h4', '4'),
('paper 1', '123', '1'),
('paper2', '456', '2'),
('paper3', '789', '3'),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `email`, `mobile_no`, `address`) VALUES
(36, 'Sahil Sanjan', 'h', 'Admin@admin.com', '8083986916', 'patna'),
(37, 'Sahil Sanjan', '123456', 'manojkumar11307@gmail.com', '8083986916', 'patna');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendor_id` int(11) NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `gst_no` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `vendor_name`, `gst_no`, `mobile_no`, `date`, `address`) VALUES
(1, 'hmvl', '1ZUIO655SSSDR', '9525728202', '28-09-2018', 'bbbj');

-- --------------------------------------------------------

--
-- Table structure for table `vendors_product`
--

CREATE TABLE `vendors_product` (
  `order_no` int(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gst_no` varchar(255) NOT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `date_of_invoice` varchar(50) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `hsn_code` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `product_name2` varchar(255) NOT NULL,
  `hsn_code2` varchar(255) NOT NULL,
  `quantity2` varchar(255) NOT NULL,
  `rate2` varchar(255) NOT NULL,
  `amount2` varchar(255) NOT NULL,
  `product_name3` varchar(255) NOT NULL,
  `hsn_code3` varchar(255) NOT NULL,
  `quantity3` varchar(255) NOT NULL,
  `rate3` varchar(255) NOT NULL,
  `amount3` varchar(255) NOT NULL,
  `product_name4` varchar(255) NOT NULL,
  `hsn_code4` varchar(255) NOT NULL,
  `quantity4` varchar(255) NOT NULL,
  `rate4` varchar(255) NOT NULL,
  `amount4` varchar(255) NOT NULL,
  `tm` varchar(50) NOT NULL,
  `gst` varchar(50) NOT NULL,
  `cgst` varchar(50) NOT NULL,
  `cgst_amount` varchar(50) NOT NULL,
  `sgst` varchar(50) NOT NULL,
  `sgst_amount` varchar(50) NOT NULL,
  `igst` varchar(50) NOT NULL,
  `igst_amount` varchar(50) NOT NULL,
  `net_amount` varchar(50) NOT NULL,
  `payable` varchar(255) NOT NULL,
  `dues` varchar(255) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `deposite_account` varchar(255) NOT NULL,
  `utr_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors_product`
--

INSERT INTO `vendors_product` (`order_no`, `product_id`, `vendor_name`, `date`, `mobile_no`, `address`, `gst_no`, `invoice_no`, `date_of_invoice`, `product_name`, `hsn_code`, `quantity`, `rate`, `amount`, `product_name2`, `hsn_code2`, `quantity2`, `rate2`, `amount2`, `product_name3`, `hsn_code3`, `quantity3`, `rate3`, `amount3`, `product_name4`, `hsn_code4`, `quantity4`, `rate4`, `amount4`, `tm`, `gst`, `cgst`, `cgst_amount`, `sgst`, `sgst_amount`, `igst`, `igst_amount`, `net_amount`, `payable`, `dues`, `payment_mode`, `deposite_account`, `utr_no`) VALUES
(4672, 1, 'hmvl', '', '9525728202', 'bbbj', '1ZUIO655SSSDR', '719', '06-09-2018', 'golden coin', '4802', '146', '600', '87600', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '87600', '6', '3', '2628', '3', '2628', '', '', '92856.00', '20000', '72856', 'Cash', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advance_money`
--
ALTER TABLE `advance_money`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `clients_product`
--
ALTER TABLE `clients_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `deposit_security`
--
ALTER TABLE `deposit_security`
  ADD PRIMARY KEY (`deposit_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `expense_products`
--
ALTER TABLE `expense_products`
  ADD PRIMARY KEY (`exp_prod_id`),
  ADD UNIQUE KEY `exp_prod_name` (`exp_prod_name`);

--
-- Indexes for table `product_master`
--
ALTER TABLE `product_master`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchase_table`
--
ALTER TABLE `purchase_table`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `security_money`
--
ALTER TABLE `security_money`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendor_id`);

--
-- Indexes for table `vendors_product`
--
ALTER TABLE `vendors_product`
  ADD PRIMARY KEY (`order_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advance_money`
--
ALTER TABLE `advance_money`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clients_product`
--
ALTER TABLE `clients_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposit_security`
--
ALTER TABLE `deposit_security`
  MODIFY `deposit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expense_products`
--
ALTER TABLE `expense_products`
  MODIFY `exp_prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `security_money`
--
ALTER TABLE `security_money`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendors_product`
--
ALTER TABLE `vendors_product`
  MODIFY `order_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4673;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advance_money`
--
ALTER TABLE `advance_money`
  ADD CONSTRAINT `advance_money_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`staff_id`);

--
-- Constraints for table `deposit_security`
--
ALTER TABLE `deposit_security`
  ADD CONSTRAINT `deposit_security_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`staff_id`);

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`staff_id`);

--
-- Constraints for table `security_money`
--
ALTER TABLE `security_money`
  ADD CONSTRAINT `security_money_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`staff_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
