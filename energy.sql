-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 11:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `energy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `agent_data`
--

CREATE TABLE `agent_data` (
  `a_id` int(11) NOT NULL,
  `agent_id` varchar(255) NOT NULL,
  `agent_name` varchar(255) NOT NULL,
  `agent_email` varchar(255) NOT NULL,
  `agent_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent_data`
--

INSERT INTO `agent_data` (`a_id`, `agent_id`, `agent_name`, `agent_email`, `agent_password`) VALUES
(2, 'AEL-0002', 'Agent Two', 'agent2@agent.com', 'agent');

-- --------------------------------------------------------

--
-- Table structure for table `electricity_data`
--

CREATE TABLE `electricity_data` (
  `ele_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `ele_status` varchar(255) NOT NULL,
  `ele_name` varchar(255) NOT NULL,
  `ele_business_name` varchar(255) NOT NULL,
  `ele_contact` varchar(255) NOT NULL,
  `ele_date` date NOT NULL,
  `ele_land_no` int(11) NOT NULL,
  `ele_mobile` int(11) NOT NULL,
  `ele_busi_address` varchar(255) NOT NULL,
  `ele_post_code` varchar(255) NOT NULL,
  `ele_current` varchar(255) NOT NULL,
  `sup_no1` int(2) NOT NULL,
  `sup_no2` int(3) NOT NULL,
  `sup_no3` int(3) NOT NULL,
  `sup_no4` int(2) NOT NULL,
  `sup_no5` int(4) NOT NULL,
  `sup_no6` int(4) NOT NULL,
  `sup_no7` int(3) NOT NULL,
  `ele_s_charge` varchar(255) NOT NULL,
  `ele_day` varchar(255) NOT NULL,
  `ele_night` varchar(255) NOT NULL,
  `ele_eve` varchar(255) NOT NULL,
  `ele_current_ref` varchar(255) NOT NULL,
  `ele_name_appear` varchar(255) NOT NULL,
  `ele_current_meter` varchar(255) NOT NULL,
  `ele_meter_serail` varchar(255) NOT NULL,
  `ele_last_bill` varchar(255) NOT NULL,
  `ele_supply_status` varchar(255) NOT NULL,
  `ele_property` varchar(255) NOT NULL,
  `ele_contract_term` varchar(255) NOT NULL,
  `ele_land_lord` varchar(255) NOT NULL,
  `ele_home_address` varchar(255) NOT NULL,
  `ele_bank_name` varchar(255) NOT NULL,
  `ele_account_title` varchar(255) NOT NULL,
  `ele_bank_address` varchar(255) NOT NULL,
  `ele_sort_code` varchar(255) NOT NULL,
  `ele_bank_accountn` varchar(255) NOT NULL,
  `ele_bill_payment` varchar(255) NOT NULL,
  `ele_a_q` varchar(255) NOT NULL,
  `ele_directors` varchar(255) NOT NULL,
  `ele_name_of_new` varchar(255) NOT NULL,
  `ele_directors_dob` varchar(255) NOT NULL,
  `ele_remarks` varchar(255) NOT NULL,
  `ele_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electricity_data`
--

INSERT INTO `electricity_data` (`ele_id`, `a_id`, `ele_status`, `ele_name`, `ele_business_name`, `ele_contact`, `ele_date`, `ele_land_no`, `ele_mobile`, `ele_busi_address`, `ele_post_code`, `ele_current`, `sup_no1`, `sup_no2`, `sup_no3`, `sup_no4`, `sup_no5`, `sup_no6`, `sup_no7`, `ele_s_charge`, `ele_day`, `ele_night`, `ele_eve`, `ele_current_ref`, `ele_name_appear`, `ele_current_meter`, `ele_meter_serail`, `ele_last_bill`, `ele_supply_status`, `ele_property`, `ele_contract_term`, `ele_land_lord`, `ele_home_address`, `ele_bank_name`, `ele_account_title`, `ele_bank_address`, `ele_sort_code`, `ele_bank_accountn`, `ele_bill_payment`, `ele_a_q`, `ele_directors`, `ele_name_of_new`, `ele_directors_dob`, `ele_remarks`, `ele_file`) VALUES
(3, 1, 'Unprocess', 'Agent One', 'sdfghj', 'test1', '2021-12-10', 5432, 12345, '', '543', '1234wers', 11, 122, 111, 11, 1111, 1111, 111, 'teststst', 'test', 'GVFSA', 'test', 'RE3455', 'ghj', 'test', 'test', 'jnhvdsa', 'Renewal', 'Resistane', 'test', 'gfdsa', 'gfdsa', 'test', 'dfghjk', 'gfds', 'gfds', 'ertyui', 'fghjk', 'test', 'gfds', 'gfdsa', 'cfg', 'fdsa', ''),
(4, 1, '0', 'Agent One', 'New', 'New', '2021-11-20', 123456, 2345678, '', '345678', 'New', 11, 111, 111, 11, 1111, 1111, 111, 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'Acquistion', 'Resistane', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'ele_file/'),
(5, 1, '1', 'Agent One', 'New', 'test1', '2021-11-15', 123456, 2345678, '', '3456789', 'New', 11, 111, 111, 11, 1111, 1111, 111, 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'Acquistion', 'Resistane', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'ele_file/dummy.pdf'),
(6, 1, '0', 'Agent One', 'Updated', 'New', '2021-12-06', 1234567890, 234567890, '', 'WE123', 'New', 11, 111, 111, 11, 1111, 1111, 111, 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'Acquistion', 'Resident', 'New', 'New', 'New', 'New', 'New', 'NewNew', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'ele_file/dummy.pdf'),
(7, 2, '0', 'Agent Two', 'New', 'New', '2021-11-24', 123457, 123456, 'ddwwdwqwd', 'WE123', '1234wers', 11, 111, 111, 11, 1111, 1111, 111, '111sdfgh', 'sdfghj', 'New', 'New', 'New', 'New', 'kjhfds', 'kjhgfd', 'New', 'Acquistion', 'Commercial', 'New', 'New', '', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'ele_file/dummy.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `gas_data`
--

CREATE TABLE `gas_data` (
  `gas_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `gas_status` varchar(255) NOT NULL,
  `gas_name` varchar(255) NOT NULL,
  `gas_business_name` varchar(255) NOT NULL,
  `gas_contact` varchar(255) NOT NULL,
  `gas_date` date NOT NULL,
  `gas_land_no` int(11) NOT NULL,
  `gas_mobile` int(11) NOT NULL,
  `gas_busi_address` varchar(255) NOT NULL,
  `gas_post_code` varchar(255) NOT NULL,
  `gas_current` varchar(255) NOT NULL,
  `gas_s_charge` varchar(255) NOT NULL,
  `gas_unit_rate` varchar(255) NOT NULL,
  `gas_meter_point` varchar(255) NOT NULL,
  `gas_current_ref` varchar(255) NOT NULL,
  `gas_name_appear` varchar(255) NOT NULL,
  `gas_current_meter` varchar(255) NOT NULL,
  `gas_meter_serail` varchar(255) NOT NULL,
  `gas_last_bill` varchar(255) NOT NULL,
  `gas_supply_status` varchar(255) NOT NULL,
  `gas_property` varchar(255) NOT NULL,
  `gas_contract_term` varchar(255) NOT NULL,
  `gas_land_lord` varchar(255) NOT NULL,
  `gas_home_address` varchar(255) NOT NULL,
  `gas_bank_name` varchar(255) NOT NULL,
  `gas_account_title` varchar(255) NOT NULL,
  `gas_bank_address` varchar(255) NOT NULL,
  `gas_sort_code` varchar(255) NOT NULL,
  `gas_bank_accountn` varchar(255) NOT NULL,
  `gas_bill_payment` varchar(255) NOT NULL,
  `gas_a_q` varchar(255) NOT NULL,
  `gas_directors` varchar(255) NOT NULL,
  `gas_name_of_new` varchar(255) NOT NULL,
  `gas_directors_dob` varchar(255) NOT NULL,
  `gas_remarks` varchar(255) NOT NULL,
  `gas_file` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gas_data`
--

INSERT INTO `gas_data` (`gas_id`, `a_id`, `gas_status`, `gas_name`, `gas_business_name`, `gas_contact`, `gas_date`, `gas_land_no`, `gas_mobile`, `gas_busi_address`, `gas_post_code`, `gas_current`, `gas_s_charge`, `gas_unit_rate`, `gas_meter_point`, `gas_current_ref`, `gas_name_appear`, `gas_current_meter`, `gas_meter_serail`, `gas_last_bill`, `gas_supply_status`, `gas_property`, `gas_contract_term`, `gas_land_lord`, `gas_home_address`, `gas_bank_name`, `gas_account_title`, `gas_bank_address`, `gas_sort_code`, `gas_bank_accountn`, `gas_bill_payment`, `gas_a_q`, `gas_directors`, `gas_name_of_new`, `gas_directors_dob`, `gas_remarks`, `gas_file`) VALUES
(3, 1, '2', 'Agent One', 'test', 'waestrdi', '2021-11-24', 123456, 2345678, '', '456789', 'DFGTHYJUKI', 'rtyuio', 'tryuiop', 'rtyuio', 'cvbnm,', 'rtyui', 'fjuki', 'fgthyjukl', 'fghjk', 'Acquistion', 'Commercial', 'sdfghyjukiol', 'rtyuiofghjutyuio', 'rtyuiotyuio', 'tyuioyu', 'tryuio', 'tyuio', 'tyuio', 'yuio', 'tyuio', 'tyuio', 'tyuiop', 'tgyuikl', 'tghjkl', 'fghjklfhj', ''),
(4, 1, '2', 'Agent One', 'New', 'New', '2021-11-23', 123456, 23456789, '', '34567', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'Acquistion', 'Commercial', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'gas_file/dummy.pdf'),
(5, 2, '0', 'Agent Two', 'test', 'test', '2021-11-16', 123456, 234567, 'dfrgthyjukipfghj', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '1234', 'Acquistion', 'Commercial', 'test', 'test', 'test', 'test', 'tg1234567', 'test', 'tsrt234', '23456hsh', '45678', 'test', 'test', 'test', 'test', 'test', 'gas_file/dummy.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent_data`
--
ALTER TABLE `agent_data`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `electricity_data`
--
ALTER TABLE `electricity_data`
  ADD PRIMARY KEY (`ele_id`);

--
-- Indexes for table `gas_data`
--
ALTER TABLE `gas_data`
  ADD PRIMARY KEY (`gas_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agent_data`
--
ALTER TABLE `agent_data`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `electricity_data`
--
ALTER TABLE `electricity_data`
  MODIFY `ele_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gas_data`
--
ALTER TABLE `gas_data`
  MODIFY `gas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
