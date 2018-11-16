-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2018 at 04:13 PM
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

--
-- Dumping data for table `clients_product`
--

INSERT INTO `clients_product` (`product_id`, `client_id`, `client_name`, `mobile_no`, `date`, `address`, `consignee`, `gst_no`, `product_name`, `hsn_code`, `quantity`, `per`, `rate`, `amount`, `gst`, `cgst`, `cgst_amount`, `sgst`, `sgst_amount`, `igst`, `igst_amount`, `total_amount`, `product_name2`, `hsn_code2`, `quantity2`, `per2`, `rate2`, `amount2`, `gst2`, `cgst2`, `cgst_amount2`, `sgst2`, `sgst_amount2`, `igst2`, `igst_amount2`, `total_amount2`, `product_name3`, `hsn_code3`, `quantity3`, `per3`, `rate3`, `amount3`, `gst3`, `cgst3`, `cgst_amount3`, `sgst3`, `sgst_amount3`, `igst3`, `igst_amount3`, `total_amount3`, `product_name4`, `hsn_code4`, `quantity4`, `per4`, `rate4`, `amount4`, `gst4`, `cgst4`, `cgst_amount4`, `sgst4`, `sgst_amount4`, `igst4`, `igst_amount4`, `total_amount4`, `tm`, `discount`, `net_amount`, `payable`, `dues`, `payment_mode`, `deposite_account`) VALUES
(3569, '2', 'Sagar Verma', '8298730526', '2018-09-18', 'boring road, tari prasad lane', '', '1ZUIO655SSSDR', 'paper ', '125231', '2', 'per psc', '12', '24', '12', '6', '1.44', '6', '1.44', '', '', '26.880000000000003', 'glue', '456', '2', 'per psc', '687', '1374', '12', '6', '82.44', '6', '82.44', '', '', '1538.88', 'gum', '56454', '1', 'per kg ', '877', '877', '12', '6', '52.62', '6', '52.62', '', '', '982.24', 'samosa', '5454', '1', 'per kg ', '56456', '56456', '12', '6', '3387.36', '6', '3387.36', '', '', '63230.72', '65778.72', '015', '65763.72', '657', '65106.72', 'Cheque', '654646');

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

-- --------------------------------------------------------

--
-- Table structure for table `staff_detail`
--

CREATE TABLE `staff_detail` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `doj` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `aadhar_no` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `date_of_advance` varchar(255) NOT NULL,
  `security_money` varchar(50) NOT NULL,
  `advance_money` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_detail`
--

INSERT INTO `staff_detail` (`staff_id`, `staff_name`, `mobile_no`, `doj`, `address`, `email`, `aadhar_no`, `salary`, `date_of_advance`, `security_money`, `advance_money`) VALUES
(1, 'Sagar Verma', '8298730526', '2018-09-18', 'boring roadtari prasad lane', 'sagr7188@gmail.com', '123456789101', '60000', '2018-09-18', '', '5000'),
(1, 'Sagar Verma', '9304672592', '2018-09-18', 'boring roadtari prasad lane', 'sagr7188@gmail.com', '123456789101', '60000', '2018-09-18', '50000', '6000');

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
(36, 'Sahil Sanjan', '12345', 'Admin@admin.com', '8083986916', 'patna'),
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
(2, 'Sagar Verma', '184189489484', '9509487566', '2018-09-20', 'Patna, India'),
(3, 'test vendor', '184189489484', '9509487566', '2018-09-20', 'Patna, India');

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
(1424, 2, 'Sagar Verma', '', '8298730526', 'boring road, tari prasad lane', '123456789', '10', '19/9/2018', 'test', '4184', '11', '10', '110', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '110', '18', '9', '9.9', '9', '9.9', '18', '19.8', '149.60', '149', '0.5999999999999943', 'Cash', '123', ''),
(7601, 3, 'test vendor', '', '9509487566', 'Patna, India', '184189489484', '10', '19/9/2018', 'test', 'test', '11', '10', '110', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '110', '18', '9', '9.9', '9', '9.9', '18', '19.8', '149.60', '', '', 'Cash', '123', '2356'),
(8088, 2, 'Sagar Verma', '', '8298730526', 'boring road, tari prasad lane', '123456789', '10', '19/9/2018', 'test', '4184', '11', '10', '110', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '110', '18', '9', '9.9', '9', '9.9', '18', '19.8', '149.60', '149', '0.5999999999999943', 'Cash', '123', '');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clients_product`
--
ALTER TABLE `clients_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3570;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense_products`
--
ALTER TABLE `expense_products`
  MODIFY `exp_prod_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vendors_product`
--
ALTER TABLE `vendors_product`
  MODIFY `order_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8089;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
