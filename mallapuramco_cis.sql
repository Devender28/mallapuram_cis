-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 08, 2018 at 11:36 PM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mallapuramco_cis`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_statements`
--

CREATE TABLE `account_statements` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date` varchar(50) NOT NULL,
  `company` varchar(100) NOT NULL,
  `insurance_company_id` varchar(250) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_statements`
--

INSERT INTO `account_statements` (`id`, `crdate`, `date`, `company`, `insurance_company_id`, `pdf`, `status`) VALUES
(1, '2018-08-10 08:51:52', '08/10/18', '29', '17', '29_1533891112.pdf', '1'),
(2, '2018-08-13 07:48:52', '13/08/2018', '34', '13', '34_1534146532.pdf', '1'),
(3, '2018-08-14 12:51:14', '14/08/2018', '34', '13', '34_1534251074.pdf', '1'),
(4, '2018-08-14 12:57:44', '14/08/2018', '34', '13', '34_1534251464.pdf', '1'),
(5, '2018-08-14 13:02:40', '14/08/2018', '34', '13', '34_1534251760.pdf', '1'),
(6, '2018-08-14 13:05:48', '14/08/2018', '34', '13', '34_1534251948.pdf', '1'),
(7, '2018-08-14 13:09:39', '14/08/2018', '34', '13', '34_1534252179.pdf', '1'),
(8, '2018-08-18 14:10:04', '18/08/2018', '35', '18', '35_1534601404.pdf', '1');

-- --------------------------------------------------------

--
-- Table structure for table `addition`
--

CREATE TABLE `addition` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `corporate_id` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `policy_id` varchar(250) NOT NULL,
  `addition_id` varchar(250) NOT NULL,
  `employee_id` varchar(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_of_joining` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `relation` varchar(50) NOT NULL,
  `nominee_name` varchar(100) NOT NULL,
  `nominee_relationship` varchar(50) NOT NULL,
  `nominee_dob` varchar(50) NOT NULL,
  `remarks` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`) VALUES
(1, 'devender@elefontdesign.com', 'admin', 'welcome@123');

-- --------------------------------------------------------

--
-- Table structure for table `cd_account`
--

CREATE TABLE `cd_account` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `corporate_id` varchar(50) NOT NULL,
  `insurance_id` varchar(50) NOT NULL,
  `amount` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cd_account`
--

INSERT INTO `cd_account` (`id`, `crdate`, `corporate_id`, `insurance_id`, `amount`, `status`) VALUES
(3, '2018-08-10 06:37:51', '29', '17', '58000', '1'),
(2, '2018-08-08 06:49:44', '24', '14', '140000', '1'),
(4, '2018-08-13 07:28:05', '34', '13', '50800', '1'),
(5, '2018-08-18 11:58:11', '35', '18', '90000', '1'),
(17, '2018-10-03 13:26:17', '34', '17', '0', '1'),
(16, '2018-10-03 12:54:24', '34', '18', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cd_amount`
--

CREATE TABLE `cd_amount` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `corporate_id` varchar(50) NOT NULL,
  `insurance_id` varchar(50) NOT NULL,
  `amount` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `payment_methods` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL,
  `remarks` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cd_amount`
--

INSERT INTO `cd_amount` (`id`, `crdate`, `corporate_id`, `insurance_id`, `amount`, `date`, `payment_methods`, `number`, `remarks`, `status`) VALUES
(8, '2018-08-18 12:10:50', '35', '18', '100000', '08/18/18', 'Cheque', '2345123', 'CD Buffer for future additions', '1'),
(3, '2018-08-10 07:10:50', '29', '17', '50000', '08/10/18', 'Cheque', '5334343', 'Amount Added.', '1'),
(4, '2018-08-10 07:12:19', '29', '17', '25000', '08/10/18', 'Cheque', '978787', 'Amount added.', '1'),
(5, '2018-08-13 07:40:16', '34', '13', '10000', '08/13/18', 'Cash', '756556', 'amount added', '1'),
(6, '2018-08-14 09:10:38', '34', '13', '10000', '08/14/18', 'Cash', '5343434', 'amount added', '1'),
(7, '2018-08-18 12:00:23', '35', '18', '2400000', '07/13/18', 'Cheque', '234567', '', '1'),
(9, '2018-10-03 12:43:56', '34', '13', '10000', '03/10/2018', 'Cash', '4565665', 'Test Amount Added.', '1'),
(10, '2018-10-03 13:07:46', '34', '13', '10000', '03/10/2018', 'Cash', '45656657', 'Test Amount', '1'),
(11, '2018-10-03 13:11:24', '34', '13', '10000', '03/10/2018', 'Cash', '456566578', 'gfhgfhfh', '1'),
(12, '2018-10-03 13:20:16', '34', '13', '10000', '03/10/2018', 'Cash', '4565665789', 'test', '1');

-- --------------------------------------------------------

--
-- Table structure for table `check_family_registration`
--

CREATE TABLE `check_family_registration` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ticket_id` varchar(250) NOT NULL,
  `ticket_max_id` varchar(250) NOT NULL,
  `member_max_id` varchar(250) NOT NULL,
  `family_member_max_id` varchar(200) NOT NULL,
  `emp_id` varchar(250) NOT NULL,
  `relationship` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `middle_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `mobile1` varchar(250) NOT NULL,
  `mobile2` varchar(250) NOT NULL,
  `mobile3` varchar(250) NOT NULL,
  `actual_dob` varchar(250) NOT NULL,
  `recorded_dob` varchar(250) NOT NULL,
  `aadhar_no` varchar(250) NOT NULL,
  `aadhar_scan` varchar(250) NOT NULL,
  `pan_no` varchar(250) NOT NULL,
  `pan_scan` varchar(250) NOT NULL,
  `voterid_no` varchar(250) NOT NULL,
  `voterid_scan` varchar(250) NOT NULL,
  `license_no` varchar(250) NOT NULL,
  `license_expiry_date` varchar(250) NOT NULL,
  `license_scan` varchar(250) NOT NULL,
  `passport_no` varchar(250) NOT NULL,
  `passport_expiry_date` varchar(250) NOT NULL,
  `passport_scan` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `check_ind_registration`
--

CREATE TABLE `check_ind_registration` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `mobile1` varchar(20) NOT NULL,
  `mobile2` varchar(20) NOT NULL,
  `mobile3` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `recorded_dob` varchar(100) NOT NULL,
  `actual_dob` varchar(100) NOT NULL,
  `aadhar_no` varchar(100) NOT NULL,
  `aadhar_scan` varchar(100) NOT NULL,
  `pan_no` varchar(100) NOT NULL,
  `pan_scan` varchar(100) NOT NULL,
  `voterid_no` varchar(100) NOT NULL,
  `voterid_scan` varchar(100) NOT NULL,
  `license_no` varchar(100) NOT NULL,
  `license_expiry_date` varchar(100) NOT NULL,
  `license_scan` varchar(100) NOT NULL,
  `passport_no` varchar(100) NOT NULL,
  `passport_expiry_date` varchar(100) NOT NULL,
  `passport_scan` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `emp_id` varchar(250) NOT NULL,
  `ticket_id` varchar(250) NOT NULL,
  `ticket_max_id` varchar(250) NOT NULL,
  `member_max_id` varchar(250) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `claims_intimation`
--

CREATE TABLE `claims_intimation` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `claims_id` varchar(250) NOT NULL,
  `corporate_id` varchar(250) NOT NULL,
  `claim_type` varchar(250) NOT NULL,
  `policy_id` varchar(250) NOT NULL,
  `employee_id` varchar(250) NOT NULL,
  `relation` varchar(50) NOT NULL,
  `date_of_hospitalization` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `claims_intimation`
--

INSERT INTO `claims_intimation` (`id`, `crdate`, `claims_id`, `corporate_id`, `claim_type`, `policy_id`, `employee_id`, `relation`, `date_of_hospitalization`, `reason`, `status`) VALUES
(1, '2018-08-14 10:08:03', '1534241283', '34', '', '123456', '', '', '08/14/2018', 'Test incident description', '1');

-- --------------------------------------------------------

--
-- Table structure for table `claim_dump`
--

CREATE TABLE `claim_dump` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date` varchar(50) NOT NULL,
  `company` varchar(100) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `insurance_company_id` varchar(250) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `claim_dump`
--

INSERT INTO `claim_dump` (`id`, `crdate`, `date`, `company`, `pdf`, `insurance_company_id`, `status`) VALUES
(7, '2018-08-14 11:07:52', '14/08/2018', '34', '34_1534244872.pdf', '13', '1'),
(8, '2018-08-19 02:05:07', '18/08/2018', '35', '35_1534644307.xls', '18', '1');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_client`
--

CREATE TABLE `corporate_client` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `client_max_id` varchar(150) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `gstn_number` varchar(20) NOT NULL,
  `gstn_scan` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `pan_number` varchar(20) NOT NULL,
  `pan_scan` varchar(100) NOT NULL,
  `bank_account_name` varchar(50) NOT NULL,
  `bank_account_number` varchar(20) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `bank_branch` varchar(50) NOT NULL,
  `ifsc_code` varchar(20) NOT NULL,
  `cheque_scan` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `authorised_contact_person1_name` varchar(100) NOT NULL,
  `authorised_contact_person1_designation` varchar(50) NOT NULL,
  `authorised_contact_person1_phone` varchar(20) NOT NULL,
  `authorised_contact_person1_email` varchar(50) NOT NULL,
  `authorised_contact_person2_name` varchar(100) NOT NULL,
  `authorised_contact_person2_designation` varchar(50) NOT NULL,
  `authorised_contact_person2_phone` varchar(20) NOT NULL,
  `authorised_contact_person2_email` varchar(100) NOT NULL,
  `superior_contact_person1_name` varchar(100) NOT NULL,
  `superior_contact_person1_designation` varchar(50) NOT NULL,
  `superior_contact_person1_phone` varchar(20) NOT NULL,
  `superior_contact_person1_email` varchar(100) NOT NULL,
  `superior_contact_person2_name` varchar(100) NOT NULL,
  `superior_contact_person2_designation` varchar(50) NOT NULL,
  `superior_contact_person2_phone` varchar(50) NOT NULL,
  `superior_contact_person2_email` varchar(100) NOT NULL,
  `support_contact_person1_name` varchar(100) NOT NULL,
  `support_contact_person1_designation` varchar(30) NOT NULL,
  `support_contact_person1_phone` varchar(20) NOT NULL,
  `support_contact_person1_email` varchar(100) NOT NULL,
  `support_contact_person2_name` varchar(100) NOT NULL,
  `support_contact_person2_designation` varchar(100) NOT NULL,
  `support_contact_person2_phone` varchar(50) NOT NULL,
  `support_contact_person2_email` varchar(100) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corporate_client`
--

INSERT INTO `corporate_client` (`id`, `crdate`, `client_max_id`, `name`, `address`, `pincode`, `contact_number`, `gstn_number`, `gstn_scan`, `logo`, `website`, `pan_number`, `pan_scan`, `bank_account_name`, `bank_account_number`, `bank_name`, `bank_branch`, `ifsc_code`, `cheque_scan`, `username`, `password`, `authorised_contact_person1_name`, `authorised_contact_person1_designation`, `authorised_contact_person1_phone`, `authorised_contact_person1_email`, `authorised_contact_person2_name`, `authorised_contact_person2_designation`, `authorised_contact_person2_phone`, `authorised_contact_person2_email`, `superior_contact_person1_name`, `superior_contact_person1_designation`, `superior_contact_person1_phone`, `superior_contact_person1_email`, `superior_contact_person2_name`, `superior_contact_person2_designation`, `superior_contact_person2_phone`, `superior_contact_person2_email`, `support_contact_person1_name`, `support_contact_person1_designation`, `support_contact_person1_phone`, `support_contact_person1_email`, `support_contact_person2_name`, `support_contact_person2_designation`, `support_contact_person2_phone`, `support_contact_person2_email`, `status`) VALUES
(24, '2018-06-13 19:05:33', '45454576', 'Elefont Design', 'Hyderguda,Sai Thirumala Towers', '52113333', '9985895136', 'GST123456', 'cpc_gstn_scan1663816479.jpg', 'cpc_logo1528871756166429881.jpg', 'elefontdesign.com/', 'PAN123456', 'cpc_pan_scan27329077.jpg', '', '', '', '', '', 'cpc_cheque_scan152887175628426891.jpg', 'rahaman12', 'rahaman@123', 'Rahaman', 'Developer', '09876543210', 'rahaman.a@elefontdesign.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(25, '2018-06-13 20:59:27', '6756656', 'IBM', 'Hyderabad,Hitech City', '521133', '9985895136', 'GST12345667', 'cpc_gstn_scan191569341.jpg', 'cpc_logo15288785912736618471.jpg', 'ibm.in', 'PAN1234567', 'cpc_pan_scan2033816323.jpg', '', '', '', '', '', 'cpc_cheque_scan1528878591164482937.jpg', 'devender@elefontdesign.com', 'devender@123', '  devender', 'developer', '9985895126', 'devender@elefontdesign.in', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(26, '2018-07-11 13:18:31', '', 'jagruthi', 'Visakhapatnam', '500027', '9666974593', 'GST_Jagruthi_01', 'cpc_gstn_scan511731398722061937.jpg', 'cpc_logo15313151111230864167183342187.jpg', 'jagrithiIndia.com', 'PAN', 'cpc_pan_scan2117739435206661347.jpg', 'JMACTS', '123456789', 'SBI', 'Sabbavaram', 'IFSC12345789', 'cpc_cheque_scan153131511115642817691515394686.jpg', 'media@Jagruthiindia.com', '123456', 'Rama Krishna ', 'MD', '9666974593', 'media@jagruthiindia.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(29, '2018-08-10 06:18:13', '', 'Infosys', 'Hyderabad', '500030', '543434343', '755464545435', 'cpc_gstn_scan1800977945547110992.jpg', 'cpc_logo1533881893850724491256419663.jpg', 'elefontdesign.com', '7867756565', 'cpc_pan_scan1399320098608809999.jpg', '', '', '', '', '', 'cpc_cheque_scan15338818931540158845327948653.jpg', 'devender@elefontdesign.com', 'dev1122', 'Devender', 'HR', '9618218722', 'devender@elefontdesign.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(34, '2018-08-13 07:15:17', '', 'Wipro', 'Hyd', '500030', '9618218722', '676777', 'cpc_gstn_scan12194251471073178313.jpg', 'cpc_logo153414451711475660071638390274.jpg', 'elefontdesign.com', '56565656', 'cpc_pan_scan18702223111813625126.jpg', '', '', '', '', '', 'cpc_cheque_scan15341445171202841761643862311.jpg', 'devender@elefontdesign.com', 'devwipro', 'Devender', 'HR', '9618218722', 'devender@elefontdesign.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(35, '2018-08-18 10:52:32', '', 'Bisco Bio-Sciences Pvt Ltd.', 'ASHOKA MY HOME CHAMBERS, H.NO-1-8-201 TO 203, FLAT NO-208 AND 209, S P ROAD, SECUNDERABAD-500003', '500003', '04039188821', '36AACCB6862A1ZY', 'cpc_gstn_scan153750669801857875.jpg', 'cpc_logo153458955221359192171000227409.jpg', 'limagrain.com/', 'AACCB6862A', 'cpc_pan_scan14177810401282360703.jpg', 'Bisco Bio-Sciences Pvt Ltd', '30184752605', 'Sate Bank of India', 'Secunderabad', 'SBIN0008779', 'cpc_cheque_scan15345895521654985453292901046.jpg', 'mis@mallapuram.com', 'bisco@123', 'Mrs Kavya G', 'HR Officer', '9866277716', 'mis@mallapuram.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_client_branches`
--

CREATE TABLE `corporate_client_branches` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `corporate_client_policy`
--

CREATE TABLE `corporate_client_policy` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `corporate_client` varchar(100) NOT NULL,
  `insurance_company` varchar(50) NOT NULL,
  `policy_type` varchar(20) NOT NULL,
  `policy_name` varchar(50) NOT NULL,
  `policy_number` varchar(50) NOT NULL,
  `policy_start_date` varchar(50) NOT NULL,
  `policy_end_date` varchar(50) NOT NULL,
  `policy_term` varchar(20) NOT NULL,
  `premium_payment_term` varchar(20) NOT NULL,
  `premium_payment_mode` varchar(30) NOT NULL,
  `payment_type` varchar(30) NOT NULL,
  `cheque_number` varchar(50) NOT NULL,
  `cheque_scan` varchar(100) NOT NULL,
  `online_transaction_number` varchar(50) NOT NULL,
  `premium_without_tax` varchar(50) NOT NULL,
  `premium_with_tax` varchar(50) NOT NULL,
  `policy_scan` varchar(100) NOT NULL,
  `policy_benifits_scan` varchar(100) NOT NULL,
  `task_pane` text NOT NULL,
  `comment` text NOT NULL,
  `state` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `corporate_employee`
--

CREATE TABLE `corporate_employee` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `corporate_id` varchar(250) NOT NULL,
  `insurance_company_id` varchar(250) NOT NULL,
  `id_card_no` varchar(250) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `age` varchar(20) NOT NULL,
  `age_band` varchar(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `pincode` varchar(250) NOT NULL,
  `date_of_joining` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `aadhaar_scan` varchar(100) NOT NULL,
  `pan_scan` varchar(100) NOT NULL,
  `voterid_scan` varchar(100) NOT NULL,
  `driving_license_scan` varchar(100) NOT NULL,
  `bank_account_name` varchar(100) NOT NULL,
  `bank_account_number` varchar(20) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `bank_branch` varchar(50) NOT NULL,
  `ifsc_code` varchar(20) NOT NULL,
  `cheque_scan` varchar(100) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `sum_insured` varchar(30) NOT NULL,
  `family_floater` varchar(10) NOT NULL,
  `nominee_name` varchar(100) NOT NULL,
  `nominee_relationship` varchar(30) NOT NULL,
  `nominee_dob` varchar(30) NOT NULL,
  `policy_id` varchar(30) NOT NULL,
  `policy_name` varchar(100) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `passpot_scan` varchar(250) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corporate_employee`
--

INSERT INTO `corporate_employee` (`id`, `crdate`, `corporate_id`, `insurance_company_id`, `id_card_no`, `employee_id`, `name`, `designation`, `date_of_birth`, `age`, `age_band`, `address`, `pincode`, `date_of_joining`, `gender`, `photo`, `aadhaar_scan`, `pan_scan`, `voterid_scan`, `driving_license_scan`, `bank_account_name`, `bank_account_number`, `bank_name`, `bank_branch`, `ifsc_code`, `cheque_scan`, `branch`, `phone`, `email`, `sum_insured`, `family_floater`, `nominee_name`, `nominee_relationship`, `nominee_dob`, `policy_id`, `policy_name`, `relation`, `passpot_scan`, `status`) VALUES
(1, '2018-08-08 09:48:46', '24', '', 'mallapuram01', 'Emp123456711', 'rakesh', 'developer', '15-07-1987', '31', '', '', '', '', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '9985895136', 'rakesh177@gmail.com', '', 'No', '', '', '', '12345678', '', 'self', '', '0'),
(2, '2018-08-08 09:48:46', '24', '', 'mallapuram02', 'Emp123456711', 'rakesh  father', 'self employee', '15-07-1965', '30', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '9985895136', '', '', '', '', '', '', '12345678', '', 'father', '', '0'),
(3, '2018-08-08 09:48:46', '24', '', 'mallapuram03', 'Emp123456711', 'rakesh  mother', 'housewife', '15-07-1970', '60', '', '', '', '', 'f', '', '', '', '', '', '', '', '', '', '', '', '', '9985895136', 'rakesh177@gmail.com', '', '', '', '', '', '12345678', '', 'mother', '', '0'),
(4, '2018-08-08 09:48:46', '24', '', 'mallapuram04', 'Emp123456711', 'rakesh  brother', 'self', '15-07-1988', '40', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '9985895136', 'rakesh177@gmail.com', '', '', '', '', '', '12345678', '', 'brother', '', '0'),
(5, '2018-08-08 09:48:46', '24', '', 'mallapuram05', 'Emp123456711', 'rakesh  sister', 'self', '15-07-1988', '40', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '9985895136', 'rakesh177@gmail.com', '', '', '', '', '', '12345678', '', 'sister', '', '0'),
(6, '2018-08-10 10:49:24', '29', '', 'mallapuram01', 'Emp123456711', 'Devender', 'developer', '15-07-1987', '31', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '9618218722', 'devender@elefontdesign.com', '', '', '', '', '', '867876767', '', 'self', '', '0'),
(7, '2018-08-10 10:49:24', '29', '', 'mallapuram04', 'Emp123456711', 'Rahaman', 'designer', '15-07-1988', '30', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '9985895136', 'rahaman.a@elefontdesign.com', '', '', '', '', '', '867876767', '', 'brother', '', '0'),
(8, '2018-08-14 11:44:28', '34', '', 'mallapuram01', 'Emp123456711', 'Devender', 'developer', '15-07-1987', '31', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '9618218722', 'devender@elefontdesign.com', '', '', '', '', '', '123456', '', 'self', '', '0'),
(9, '2018-08-14 11:44:28', '34', '', 'mallapuram04', 'Emp123456711', 'Rahaman', 'designer', '15-07-1988', '30', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '9985895136', 'rahaman.a@elefontdesign.com', '', '', '', '', '', '123456', '', 'brother', '', '0'),
(10, '2018-08-18 15:43:55', '35', '', 'mallapuram01', 'Emp123456711', 'Mr Sailesh', 'developer', '15/07/1987', '31', '', '', '', '', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '9849064645', 'rakesh177@gmail.com', '', 'Yes', '', '', '', 'P/131116/01/2019/005779', '', 'self', '', '0'),
(11, '2018-08-18 15:43:55', '35', '', 'mallapuram02', 'Emp123456711', 'Mr Sailesh Father', 'self employee', '15/07/1965', '30', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '8790603070', 'rakesh177@gmail.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'father', '', '0'),
(12, '2018-08-18 15:43:56', '35', '', 'mallapuram03', 'Emp123456711', 'Mrs Sailesh Mother', 'housewife', '15/07/1970', '60', '', '', '', '', 'f', '', '', '', '', '', '', '', '', '', '', '', '', '9866277716', 'rakesh177@gmail.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'mother', '', '0'),
(13, '2018-08-18 15:52:35', '35', '', 'mallapuram21', 'Emp123456711', 'Mr Srinivas', 'developer', '15/07/1987', '31', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '9849064645', 'operations@mallapuram.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'self', '', '0'),
(14, '2018-08-18 15:52:36', '35', '', 'mallapuram22', 'Emp123456711', 'Mr Srinivas Father', 'self employee', '15/07/1965', '30', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '8790603070', 'operations@mallapuram.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'father', '', '0'),
(15, '2018-08-18 15:52:36', '35', '', 'mallapuram23', 'Emp123456711', 'Mrs Srinivas Mother', 'housewife', '15/07/1970', '60', '', '', '', '', 'f', '', '', '', '', '', '', '', '', '', '', '', '', '9866277716', 'operations@mallapuram.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'mother', '', '0'),
(16, '2018-08-18 15:52:36', '35', '', 'mallapuram11', 'Emp123456711', 'Mr Hussain', 'developer', '15/07/1987', '31', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '9849064645', 'mis@mallapuram.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'self', '', '0'),
(17, '2018-08-18 15:52:37', '35', '', 'mallapuram12', 'Emp123456711', 'Mr Hussain Father', 'self employee', '15/07/1965', '30', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '8790603070', 'mis@mallapuram.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'father', '', '0'),
(18, '2018-08-18 15:52:37', '35', '', 'mallapuram13', 'Emp123456711', 'Mrs Hussain Mother', 'housewife', '15/07/1970', '60', '', '', '', '', 'f', '', '', '', '', '', '', '', '', '', '', '', '', '9866277716', 'mis@mallapuram.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'mother', '', '0'),
(19, '2018-08-19 01:28:06', '35', '', 'mallapuram21', 'Emp123456712', 'Mr Srinivas', 'developer', '15/07/1987', '31', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '9849064645', 'operations@mallapuram.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'self', '', '1'),
(20, '2018-08-19 01:28:06', '35', '', 'mallapuram22', 'Emp123456712', 'Mr Srinivas Father', 'self employee', '15/07/1965', '30', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '8790603070', 'operations@mallapuram.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'father', '', '1'),
(21, '2018-08-19 01:28:07', '35', '', 'mallapuram23', 'Emp123456712', 'Mrs Srinivas Mother', 'housewife', '15/07/1970', '60', '', '', '', '', 'f', '', '', '', '', '', '', '', '', '', '', '', '', '9866277716', 'operations@mallapuram.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'mother', '', '1'),
(22, '2018-08-19 01:28:07', '35', '', 'mallapuram11', 'Emp123456713', 'Mr Hussain', 'developer', '15/07/1987', '31', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '9849064645', 'mis@mallapuram.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'self', '', '1'),
(23, '2018-08-19 01:28:07', '35', '', 'mallapuram12', 'Emp123456713', 'Mr Hussain Father', 'self employee', '15/07/1965', '30', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '8790603070', 'mis@mallapuram.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'father', '', '1'),
(24, '2018-08-19 01:28:08', '35', '', 'mallapuram13', 'Emp123456713', 'Mrs Hussain Mother', 'housewife', '15/07/1970', '60', '', '', '', '', 'f', '', '', '', '', '', '', '', '', '', '', '', '', '9866277716', 'mis@mallapuram.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'mother', '', '1'),
(25, '2018-08-19 01:51:31', '35', '', 'mallapuram31', 'Emp123456714', 'Mr Raj', 'developer', '15/07/1987', '31', '', '', '', '', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '9849064645', 'operations1@mallapuram.com', '', 'Yes', '', '', '', 'P/131116/01/2019/005779', '', 'self', '', '1'),
(26, '2018-08-19 01:51:31', '35', '', 'mallapuram32', 'Emp123456714', 'Mr Raj Father', 'self employee', '15/07/1965', '30', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '8790603070', 'operations@mallapuram.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'father', '', '1'),
(27, '2018-08-19 01:51:32', '35', '', 'mallapuram33', 'Emp123456714', 'Mrs Raj Mother', 'housewife', '15/07/1970', '60', '', '', '', '', 'f', '', '', '', '', '', '', '', '', '', '', '', '', '9866277716', 'operations@mallapuram.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'mother', '', '1'),
(28, '2018-08-19 01:51:32', '35', '', 'mallapuram41', 'Emp123456715', 'Mr Jyothi', 'developer', '15/07/1987', '31', '', '', '', '', 'Female', '', '', '', '', '', '', '', '', '', '', '', '', '9849064645', 'mis1@mallapuram.com', '', 'Yes', '', '', '', 'P/131116/01/2019/005779', '', 'self', '', '1'),
(29, '2018-08-19 01:51:32', '35', '', 'mallapuram42', 'Emp123456715', 'Mr Jyothi Father', 'self employee', '15/07/1965', '30', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '8790603070', 'mis@mallapuram.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'father', '', '1'),
(30, '2018-08-19 01:51:33', '35', '', 'mallapuram43', 'Emp123456715', 'Mrs Jyothi Mother', 'housewife', '15/07/1970', '60', '', '', '', '', 'f', '', '', '', '', '', '', '', '', '', '', '', '', '9866277716', 'mis@mallapuram.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'mother', '', '1'),
(31, '2018-08-29 11:44:28', '35', '', 'mallapuram01', 'Emp123456711', 'rakesh', 'developer', '15-07-1987', '31', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '9985895136', 'rahaman.a@elefontdesign.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'self', '', '1'),
(32, '2018-08-29 11:44:29', '35', '', 'mallapuram02', 'Emp123456711', 'rakesh  father', 'self employee', '15-07-1965', '30', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '9985895136', 'rahaman.a@elefontdesign.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'father', '', '1'),
(33, '2018-08-29 11:44:29', '35', '', 'mallapuram03', 'Emp123456711', 'rakesh  mother', 'housewife', '15-07-1970', '60', '', '', '', '', 'f', '', '', '', '', '', '', '', '', '', '', '', '', '9985895136', 'rahaman.a@elefontdesign.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'mother', '', '1'),
(34, '2018-08-29 11:44:29', '35', '', 'mallapuram04', 'Emp123456711', 'rakesh  brother', 'self', '15-07-1988', '40', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '9985895136', 'rahaman.a@elefontdesign.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'brother', '', '1'),
(35, '2018-08-29 11:44:30', '35', '', 'mallapuram05', 'Emp123456711', 'rakesh  sister', 'self', '15-07-1988', '40', '', '', '', '', 'm', '', '', '', '', '', '', '', '', '', '', '', '', '9985895136', 'rahaman.a@elefontdesign.com', '', '', '', '', '', 'P/131116/01/2019/005779', '', 'sister', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_employee_family`
--

CREATE TABLE `corporate_employee_family` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `corporate_id` varchar(250) NOT NULL,
  `insurance_company_id` varchar(250) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `age` varchar(20) NOT NULL,
  `age_band` varchar(20) NOT NULL,
  `date_of_joining` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `aadhaar_scan` varchar(100) NOT NULL,
  `pan_scan` varchar(100) NOT NULL,
  `voterid_scan` varchar(100) NOT NULL,
  `driving_license_scan` varchar(100) NOT NULL,
  `bank_account_name` varchar(100) NOT NULL,
  `bank_account_number` varchar(20) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `bank_branch` varchar(50) NOT NULL,
  `ifsc_code` varchar(20) NOT NULL,
  `cheque_scan` varchar(100) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `sum_insured` varchar(30) NOT NULL,
  `family_floater` varchar(10) NOT NULL,
  `nominee_name` varchar(100) NOT NULL,
  `nominee_relationship` varchar(30) NOT NULL,
  `nominee_dob` varchar(30) NOT NULL,
  `policy_id` varchar(30) NOT NULL,
  `policy_name` varchar(100) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `passpot_scan` varchar(250) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `correction`
--

CREATE TABLE `correction` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `correction_id` varchar(250) NOT NULL,
  `corporate_id` varchar(250) NOT NULL,
  `policy_id` varchar(250) NOT NULL,
  `employee_id` varchar(250) NOT NULL,
  `relation` varchar(100) NOT NULL,
  `existing_name` varchar(100) NOT NULL,
  `new_name` varchar(100) NOT NULL,
  `existing_dob` varchar(50) NOT NULL,
  `new_dob` varchar(50) NOT NULL,
  `existing_gender` varchar(50) NOT NULL,
  `new_gender` varchar(50) NOT NULL,
  `existing_relation` varchar(50) NOT NULL,
  `new_relation` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dummy_individual_slaes_booking`
--

CREATE TABLE `dummy_individual_slaes_booking` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `corporate_id` varchar(250) NOT NULL,
  `employee_id` varchar(250) NOT NULL,
  `policy_id` varchar(250) NOT NULL,
  `individual_policy_id` varchar(250) NOT NULL,
  `max_id` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `relationship` varchar(250) NOT NULL,
  `sum_insured` varchar(250) NOT NULL,
  `family_floater` varchar(250) NOT NULL,
  `nominee` varchar(250) NOT NULL,
  `nominee_relationship` varchar(250) NOT NULL,
  `nominee_dob` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_deletion`
--

CREATE TABLE `employee_deletion` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deletion_id` varchar(100) NOT NULL,
  `corporate_id` varchar(100) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp_login`
--

CREATE TABLE `emp_login` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_time` varchar(50) NOT NULL,
  `login_date` varchar(50) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_login`
--

INSERT INTO `emp_login` (`id`, `crdate`, `login_time`, `login_date`, `emp_id`, `status`) VALUES
(8, '2018-08-08 06:40:54', '12:10 pm', 'August 8, 2018', '2', '1'),
(9, '2018-08-19 11:57:38', '5:27 pm', 'August 19, 2018', '7', '1'),
(10, '2018-08-19 12:09:13', '5:39 pm', 'August 19, 2018', '7', '1'),
(11, '2018-08-20 11:08:04', '4:38 pm', 'August 20, 2018', '2', '1'),
(12, '2018-08-24 13:13:25', '6:43 pm', 'August 24, 2018', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `endorsement_charges`
--

CREATE TABLE `endorsement_charges` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `corporate_id` varchar(250) NOT NULL,
  `insurance_company_id` varchar(250) NOT NULL,
  `policy_id` varchar(250) NOT NULL,
  `addition_amount` varchar(250) NOT NULL,
  `deletion_amount` varchar(250) NOT NULL,
  `extra_ammount` varchar(250) NOT NULL,
  `endorsement_copy` varchar(200) NOT NULL,
  `endorsement_number` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `endorsement_charges`
--

INSERT INTO `endorsement_charges` (`id`, `crdate`, `corporate_id`, `insurance_company_id`, `policy_id`, `addition_amount`, `deletion_amount`, `extra_ammount`, `endorsement_copy`, `endorsement_number`, `status`) VALUES
(2, '2018-08-08 07:15:37', '24', '14', '12345678', '5000', '0', '', '24_1533712537.pdf', '1234567', '1'),
(3, '2018-08-10 10:38:16', '29', '17', '867876767', '1000', '0', '', '29_1533897496.pdf', '66545454', '1'),
(4, '2018-08-10 10:39:44', '29', '17', '867876767', '1000', '0', '', '29_1533897584.pdf', '756565656', '1'),
(5, '2018-08-14 09:52:35', '34', '13', '123456', '1000', '0', '', '34_1534240355.pdf', '756565656', '1'),
(6, '2018-08-14 09:54:30', '34', '13', '123456', '1000', '0', '', '34_1534240470.pdf', '75656565686', '1'),
(7, '2018-08-18 12:05:01', '35', '18', 'P/131116/01/2019/005779', '2400000', '0', '', '35_1534593901.pdf', 'Initial Sale - P/131116/01/2019/005779', '1'),
(8, '2018-08-29 10:53:28', '35', '18', 'P/131116/01/2019/005779', '10000', '0', '', '35_1535540008.jpg', 'ghrr/123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `endorsement_request`
--

CREATE TABLE `endorsement_request` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `endorsement_max_id` varchar(150) NOT NULL,
  `client` varchar(100) NOT NULL,
  `policy` varchar(100) NOT NULL,
  `additions` varchar(100) NOT NULL,
  `deletions` varchar(100) NOT NULL,
  `corrections` varchar(100) NOT NULL,
  `file_name` varchar(150) NOT NULL,
  `endorsement_count` int(11) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `endorsement_request`
--

INSERT INTO `endorsement_request` (`id`, `crdate`, `endorsement_max_id`, `client`, `policy`, `additions`, `deletions`, `corrections`, `file_name`, `endorsement_count`, `status`) VALUES
(4, '2018-08-14 07:19:13', 'end10393371291715557848', '34', '123456', '2', '0', '0', 'end_34_1495011002_14_08_2018.xls', 0, 1),
(3, '2018-08-10 11:33:52', 'end718185458804630878', '29', '867876767', '2', '0', '0', 'end_29_725485198_10_08_2018.xls', 0, 1),
(5, '2018-08-14 07:25:31', 'end14394643761072174299', '34', '123456', '2', '0', '0', 'end_34_779993722_14_08_2018.xls', 0, 1),
(6, '2018-08-14 07:27:06', 'end725098771932109624', '34', '123456', '2', '0', '0', 'end_34_607158824_14_08_2018.xls', 0, 1),
(7, '2018-08-14 07:33:27', 'end15618445691842183934', '34', '123456', '2', '0', '0', 'end_34_775347154_14_08_2018.xls', 0, 1),
(8, '2018-08-14 07:36:20', 'end4201516642009332099', '34', '123456', '2', '0', '0', 'end_34_1443748990_14_08_2018.xls', 0, 1),
(9, '2018-08-14 07:37:59', 'end16781181811138060712', '34', '123456', '2', '0', '0', 'end_34_163253722_14_08_2018.xls', 0, 1),
(10, '2018-08-14 07:39:46', 'end795393070579990170', '34', '123456', '2', '0', '0', 'end_34_873556846_14_08_2018.xls', 0, 1),
(11, '2018-08-14 07:41:34', 'end12921119372012331524', '34', '123456', '2', '0', '0', 'end_34_983556724_14_08_2018.xls', 0, 1),
(12, '2018-08-14 07:50:11', 'end14997050181053670946', '34', '123456', '2', '0', '0', 'end_34_1647977332_14_08_2018.xls', 0, 1),
(13, '2018-08-14 07:52:08', 'end12223059111566889336', '34', '123456', '2', '0', '0', 'end_34_2140937304_14_08_2018.xls', 0, 1),
(14, '2018-08-14 09:23:11', 'end1262817581391376756', '34', '123456', '2', '0', '0', 'end_34_123497233_14_08_2018.xls', 0, 1),
(15, '2018-08-14 09:25:08', 'end459966444217381309', '34', '123456', '2', '0', '0', 'end_34_1693504999_14_08_2018.xls', 0, 1),
(16, '2018-08-14 12:42:05', 'end17103783831024335256', '34', '123456', '2', '0', '0', 'end_34_1331781795_14_08_2018.xls', 0, 1),
(17, '2018-08-14 12:45:31', 'end5009610901366265077', '34', '123456', '2', '0', '0', 'end_34_1467416669_14_08_2018.xls', 0, 1),
(18, '2018-08-14 12:47:53', 'end10247800851861548268', '34', '123456', '2', '0', '0', 'end_34_941932073_14_08_2018.xls', 0, 1),
(19, '2018-08-14 12:53:14', 'end14663109571786682242', '34', '123456', '2', '0', '0', 'end_34_1910439977_14_08_2018.xls', 0, 1),
(20, '2018-08-14 13:09:55', 'end5072374961098599208', '34', '123456', '2', '0', '0', 'end_34_1983056833_14_08_2018.xls', 0, 1),
(21, '2018-08-17 10:15:41', 'end2405102241703963963', '34', '123456', '2', '0', '0', 'end_34_1904248923_17_08_2018.xls', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `individual_slaes_booking`
--

CREATE TABLE `individual_slaes_booking` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `corporate_id` varchar(250) NOT NULL,
  `employee_id` varchar(250) NOT NULL,
  `policy_id` varchar(250) NOT NULL,
  `individual_policy_id` varchar(250) NOT NULL,
  `max_id` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `relationship` varchar(250) NOT NULL,
  `sum_insured` varchar(250) NOT NULL,
  `family_floater` varchar(250) NOT NULL,
  `nominee` varchar(250) NOT NULL,
  `nominee_relationship` varchar(250) NOT NULL,
  `nominee_dob` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ind_family`
--

CREATE TABLE `ind_family` (
  `id` int(11) NOT NULL,
  `crdate` date NOT NULL,
  `member_max_id` varchar(250) NOT NULL,
  `family_member_max_id` varchar(250) NOT NULL,
  `relationship` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `middle_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `mobile1` varchar(250) NOT NULL,
  `mobile2` varchar(250) NOT NULL,
  `mobile3` varchar(250) NOT NULL,
  `actual_dob` varchar(250) NOT NULL,
  `recorded_dob` varchar(250) NOT NULL,
  `aadhar_no` varchar(250) NOT NULL,
  `aadhar_scan` varchar(250) NOT NULL,
  `pan_no` varchar(250) NOT NULL,
  `pan_scan` varchar(250) NOT NULL,
  `voterid_no` varchar(250) NOT NULL,
  `voterid_scan` varchar(250) NOT NULL,
  `license_no` varchar(250) NOT NULL,
  `license_expiry_date` varchar(250) NOT NULL,
  `license_scan` varchar(250) NOT NULL,
  `passport_no` varchar(250) NOT NULL,
  `passport_expiry_date` varchar(250) NOT NULL,
  `passport_scan` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ind_policy`
--

CREATE TABLE `ind_policy` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `member_id` varchar(100) NOT NULL,
  `policy_max_id` varchar(200) NOT NULL,
  `insurance_company` varchar(100) NOT NULL,
  `policy_name` varchar(100) NOT NULL,
  `policy_number` varchar(50) NOT NULL,
  `policy_holder_name` varchar(150) NOT NULL,
  `policy_start_date` varchar(50) NOT NULL,
  `policy_period` varchar(10) NOT NULL,
  `policy_sum_insured` varchar(100) NOT NULL,
  `policy_premium` varchar(50) NOT NULL,
  `premium_payment_mode` varchar(15) NOT NULL,
  `policy_copy` varchar(50) NOT NULL,
  `nominee1_name` varchar(50) NOT NULL,
  `nominee1_relation` varchar(20) NOT NULL,
  `nominee1_dob` varchar(50) NOT NULL,
  `nomination1_percentage` varchar(10) NOT NULL,
  `nominee2_name` varchar(50) NOT NULL,
  `nominee2_relation` varchar(20) NOT NULL,
  `nominee2_dob` varchar(50) NOT NULL,
  `nomination2_percentage` varchar(10) NOT NULL,
  `nominee3_name` varchar(50) NOT NULL,
  `nominee3_relation` varchar(50) NOT NULL,
  `nominee3_dob` varchar(50) NOT NULL,
  `nomination3_percentage` varchar(10) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ind_registration`
--

CREATE TABLE `ind_registration` (
  `id` int(11) NOT NULL,
  `max_id` varchar(250) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `mobile1` varchar(20) NOT NULL,
  `mobile2` varchar(20) NOT NULL,
  `mobile3` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `recorded_dob` varchar(100) NOT NULL,
  `actual_dob` varchar(100) NOT NULL,
  `aadhar_no` varchar(100) NOT NULL,
  `aadhar_scan` varchar(100) NOT NULL,
  `pan_no` varchar(100) NOT NULL,
  `pan_scan` varchar(100) NOT NULL,
  `voterid_no` varchar(100) NOT NULL,
  `voterid_scan` varchar(100) NOT NULL,
  `license_no` varchar(100) NOT NULL,
  `license_expiry_date` varchar(100) NOT NULL,
  `license_scan` varchar(100) NOT NULL,
  `passport_no` varchar(100) NOT NULL,
  `passport_expiry_date` varchar(100) NOT NULL,
  `passport_scan` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ind_registration`
--

INSERT INTO `ind_registration` (`id`, `max_id`, `crdate`, `first_name`, `middle_name`, `last_name`, `email1`, `email2`, `mobile1`, `mobile2`, `mobile3`, `username`, `password`, `recorded_dob`, `actual_dob`, `aadhar_no`, `aadhar_scan`, `pan_no`, `pan_scan`, `voterid_no`, `voterid_scan`, `license_no`, `license_expiry_date`, `license_scan`, `passport_no`, `passport_expiry_date`, `passport_scan`, `state`, `district`, `address`, `pincode`, `status`) VALUES
(1, '1686630632759066201', '2018-08-07 07:12:55', 'abdul', 'rahaman', 'shaik', 'rahaman.a@elefontdesign.com', '', '9985895136', '', '', '', '123456789', '', '', '121212', '1686630632759066201_aadhar.jpg', '', '1686630632759066201_pan.jpg', '', '1686630632759066201_voterid.jpg', '', '', '1686630632759066201_license.jpg', '', '', '1686630632759066201_passport.jpg', '', 'Yes', '', '', '1'),
(2, '920407444299401617', '2018-08-07 07:17:01', 'rahaman', 'rahaman', 'shaik', 'sarahaman177@gmail.com', '', '9985895136', '', '', '', '123456789', '', '', 'AADahar123', '920407444299401617_aadhar.png', 'pan1234', '920407444299401617_pan.png', '', '920407444299401617_voterid.jpg', '', '', '920407444299401617_license.jpg', '', '', '', '', 'Yes', '', '', '1'),
(3, '14345970361208537983', '2018-08-16 10:41:32', 'dasharath', 'dass', 'da', 'dasharath2013@gmail.com', '', '8522025563', '', '', '', '8522025563', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(4, '283399298195143085', '2018-08-24 13:14:58', 'SRINIVAS', '', 'EEDALA', 'srinivas.hr@kbpmpl.com', '', '9666296663', '', '', '', '9666296663', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ind_service_request`
--

CREATE TABLE `ind_service_request` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `member_id` varchar(250) NOT NULL,
  `max_id` varchar(250) NOT NULL,
  `policy_id` varchar(250) NOT NULL,
  `category` varchar(50) NOT NULL,
  `service_type` text NOT NULL,
  `comments` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ind_share_app`
--

CREATE TABLE `ind_share_app` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `member_id` varchar(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `insurance_companies`
--

CREATE TABLE `insurance_companies` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `branch_address` text NOT NULL,
  `headoffice_address` text NOT NULL,
  `gstn_number` varchar(20) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `website` varchar(150) NOT NULL,
  `relationship_manager_name` varchar(50) NOT NULL,
  `relationship_manager_phone` varchar(20) NOT NULL,
  `relationship_manager_email` varchar(50) NOT NULL,
  `branch_manager_name` varchar(50) NOT NULL,
  `branch_manager_phone` varchar(20) NOT NULL,
  `branch_manager_email` varchar(150) NOT NULL,
  `regional_head_name` varchar(100) NOT NULL,
  `regional_head_phone` varchar(20) NOT NULL,
  `regional_head_email` varchar(50) NOT NULL,
  `helpline_number` varchar(20) NOT NULL,
  `service_forms_link` varchar(100) NOT NULL,
  `renewal_payment_link` varchar(100) NOT NULL,
  `grievance_redressal_link` varchar(100) NOT NULL,
  `branch_locations_link` varchar(100) NOT NULL,
  `hospitals_link` varchar(100) NOT NULL,
  `otherlink1` varchar(100) NOT NULL,
  `otherlink2` varchar(100) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance_companies`
--

INSERT INTO `insurance_companies` (`id`, `crdate`, `name`, `branch_name`, `branch_address`, `headoffice_address`, `gstn_number`, `logo`, `website`, `relationship_manager_name`, `relationship_manager_phone`, `relationship_manager_email`, `branch_manager_name`, `branch_manager_phone`, `branch_manager_email`, `regional_head_name`, `regional_head_phone`, `regional_head_email`, `helpline_number`, `service_forms_link`, `renewal_payment_link`, `grievance_redressal_link`, `branch_locations_link`, `hospitals_link`, `otherlink1`, `otherlink2`, `status`) VALUES
(18, '2018-08-18 10:18:10', 'Star Health and Allied Insurance Co. Ltd.', 'Tarnaka', 'Star Health & Allied Insurance Co. Ltd,\nNo.303/4, Third Floor, 12-13-97, \nMundra Tara Tycoon, Tarnaka, \nHyderabad - 500017', 'Star Health & Allied Insurance Co. Ltd,\nNo.1, New Tank Street, Valluvarkottam High Road,\nNungambakkam,\nChennai - 600 034', '36AAJCS4517L1ZZ', 'MCA1534587490.png', 'starhealth.in/', 'Mr Yugandhara', '7396005157', 'yugandhara.s@starhealth.in', 'Mr Yugandhara', '7396005157', 'yugandhara.s@starhealth.in', 'Mr Srinivas', '9908720123', 'srinivas.kbb@starhealth.in', '1800 425 2255', 'starhealth.in/Download', 'retail.starhealth.in/renewal', 'starhealth.in/grievance-redressal', 'starhealth.in/locate-us', 'starhealth.in/claims/claims-status', 'starhealth.in/tax-benefits', 'retail.starhealth.in/updatecustomerdetails', '1'),
(13, '2018-06-13 18:47:59', 'LIC', 'LIC', 'Secunderabad,Tarnak,5000123', 'Yogakshema Building, Jeevan Bima Marg, P.O. Box No – 19953, Mumbai – 400 021', 'GST1234567890', 'MCA1528870703.png', 'licindia.in', 'Rajashekhar', '9876543210', 'devender@elefontdesign.com', '', '', '', '', '', '', '9222492224', 'licindia.in/Customer-Services/Costumer-Education', 'licindia.in/Community/Payment-at-Cash-Counter', 'licindia.in/Customer-Services/Phone-Help-Line', '', '', '', '', '1'),
(17, '2018-07-14 06:59:30', 'ICICI Lombard General Insurance Co Ltd', 'Hyderabad', 'Ounjagutta', 'Mumbai', 'GSTTESTICICILOMBARD1', 'MCA1531551570.png', 'icicilombard.com/', 'Sikindar', '9849064645', 'mrajashekhar@gmail.com', 'Amiya', '9849064645', '', '', '', '', '180026666', 'app4.icicilombard.com/ucvselfhelp/(S(isfgb0o44einfky0x0frvcyz))/ucvwebappln/index.aspx?SRT=Changes%2', 'icicilombard.com/renew-policy', 'icicilombard.com/grievance-redressal', 'icicilombard.com/branches', 'icicilombard.com/IL-Health-Care/Customer/GetHospitalList', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_policy`
--

CREATE TABLE `insurance_policy` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance_policy`
--

INSERT INTO `insurance_policy` (`id`, `crdate`, `name`, `category`, `type`, `company`, `status`) VALUES
(18, '2018-07-14 07:17:30', 'IHealth Care - Family Floater', 'Individual', '30', '17', '1'),
(22, '2018-08-18 10:25:57', 'Star Group Health Insurance', 'Group', '33', '18', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mallapuram_employees`
--

CREATE TABLE `mallapuram_employees` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `emp_type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mallapuram_employees`
--

INSERT INTO `mallapuram_employees` (`id`, `crdate`, `name`, `email`, `username`, `password`, `emp_type`, `status`) VALUES
(1, '2018-02-22 02:19:30', 'abdul', 'rahaman.a@elefontdesign.com', 'rahaman.a@elefontdesign.com', 'rahaman@123', 'manager', '1'),
(2, '2018-02-22 02:19:30', 'devender', 'devender@elefontdesign.com', 'devender@elefontdesign.com', 'devender@123', 'executive', '1'),
(3, '2018-07-13 11:28:02', 'admin_ticket', 'info@mallapuram.com', 'info@mallapuram.com', '123456', 'admin', '1'),
(4, '2018-07-13 12:30:11', 'Nag_empl', 'nag@mallapuram.com', 'nag@mallapuram.com', '123456', 'manager', '1'),
(5, '2018-07-14 12:17:01', 'Mallapuram Rajashekhar', 'Manager1@gmail.com', 'Manager1@gmail.com', '123456', 'manager', '1'),
(6, '2018-07-14 12:17:21', 'Mallapuram Rajashekhar', 'Executive1@gmail.com', 'Executive1@gmail.com', '123456', 'executive', '1'),
(7, '2018-08-19 11:36:39', 'Mallapuram Rajashekhar', 'admin1@gmail.com', 'admin1@gmail.com', '123456', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `policy_types`
--

CREATE TABLE `policy_types` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policy_types`
--

INSERT INTO `policy_types` (`id`, `crdate`, `category`, `name`, `status`) VALUES
(32, '2018-08-18 10:21:09', 'Group', 'Personal Accident', '1'),
(26, '2018-07-14 07:12:13', 'Individual', 'Endowment', '1'),
(27, '2018-07-14 07:12:23', 'Individual', 'Money Back', '1'),
(28, '2018-07-14 07:12:38', 'Individual', 'Term', '1'),
(29, '2018-07-14 07:12:49', 'Individual', 'Whole Life', '1'),
(30, '2018-07-14 07:16:44', 'Individual', 'Medical Insurance', '1'),
(33, '2018-08-18 10:22:20', 'Group', 'Medical Insurance', '1');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(250) NOT NULL,
  `url` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `crdate`, `name`, `url`, `image`, `description`, `status`) VALUES
(16, '2018-05-24 01:30:29', 'personal accident insurance', 'http://mallapuram.com/', 'promotions_15270804531698242165.jpg', 'Test Description', '0'),
(17, '2018-05-24 01:36:37', 'Personal accident insurance 5678', 'http://mallapuram.com/personalaccident_pa/', 'promotions_1527080821650396378.jpg', 'Test Description', '0'),
(18, '2018-05-24 01:46:09', 'test 123', 'http://mallapuram.com', 'promotions_152708139334761315.jpg', 'Test Description', '0'),
(19, '2018-07-11 18:12:30', 'new promo image', 'google.com', 'promotions_1531332750522128241.png', 'Test Description', '0'),
(20, '2018-07-13 13:24:21', 'PA', 'www.mallapura.com', 'promotions_15314882611700245973.jpg', 'Test Description', '0'),
(21, '2018-10-03 12:22:40', 'mallapuram insurance company', 'http://mallapuram.com', 'promotions_15385693601910542500.jpg', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sales_booking`
--

CREATE TABLE `sales_booking` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `client` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `policy_name` varchar(100) NOT NULL,
  `policy_number` varchar(100) NOT NULL,
  `premium_without_tax` varchar(100) NOT NULL,
  `premium_with_tax` varchar(100) NOT NULL,
  `tax_percentage` varchar(10) NOT NULL,
  `sum_insured` varchar(100) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `policy_term` varchar(50) NOT NULL,
  `payment_term` varchar(20) NOT NULL,
  `payment_mode` varchar(50) NOT NULL,
  `policy_copy` varchar(100) NOT NULL,
  `policy_benefits` varchar(100) NOT NULL,
  `remarks` text NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_booking`
--

INSERT INTO `sales_booking` (`id`, `crdate`, `client`, `company`, `category`, `type`, `policy_name`, `policy_number`, `premium_without_tax`, `premium_with_tax`, `tax_percentage`, `sum_insured`, `start_date`, `end_date`, `policy_term`, `payment_term`, `payment_mode`, `policy_copy`, `policy_benefits`, `remarks`, `status`) VALUES
(15, '2018-08-18 11:54:53', '35', '18', 'Group', '33', '22', 'P/131116/01/2019/005779', '2033898', '2400000', '18.00', '81900000', '14/07/2018', 'end date', '1', '1', '1', 'PC1534593291.pdf', 'PB1534593293.pdf', 'Testing', '1');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `crdate`, `name`, `status`) VALUES
(1, '2017-12-14 10:38:46', 'Telangana', '1'),
(2, '2017-12-14 10:39:19', 'Andhra Pradesh', '1'),
(3, '2017-12-14 10:39:27', 'Karnataka', '1'),
(4, '2017-12-14 10:39:31', 'Maharashtra', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `member_max_id` varchar(250) NOT NULL,
  `ticket_max_id` varchar(250) NOT NULL,
  `ticket_id` varchar(100) NOT NULL,
  `priority` varchar(250) NOT NULL,
  `est_time` varchar(50) NOT NULL,
  `ticket_type_id` varchar(250) NOT NULL,
  `responsibility` varchar(250) NOT NULL,
  `ticket_process_id` varchar(250) NOT NULL,
  `order` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `points` varchar(250) NOT NULL,
  `process_status` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_bucket`
--

CREATE TABLE `ticket_bucket` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `member_max_id` varchar(250) NOT NULL,
  `ticket_max_id` varchar(250) NOT NULL,
  `ticket_id` varchar(100) NOT NULL,
  `policy_max_id` varchar(200) NOT NULL,
  `family_member_max_id` varchar(200) NOT NULL,
  `endorsement_max_id` varchar(200) NOT NULL,
  `claims_max_id` varchar(150) NOT NULL,
  `priority` varchar(250) NOT NULL,
  `est_time` varchar(50) NOT NULL,
  `ticket_type_id` varchar(250) NOT NULL,
  `responsibility` varchar(250) NOT NULL,
  `ticket_process_id` varchar(250) NOT NULL,
  `postpone` varchar(100) NOT NULL,
  `order` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `process_status` varchar(50) NOT NULL,
  `points` varchar(250) NOT NULL,
  `ticket_from` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_bucket`
--

INSERT INTO `ticket_bucket` (`id`, `crdate`, `member_max_id`, `ticket_max_id`, `ticket_id`, `policy_max_id`, `family_member_max_id`, `endorsement_max_id`, `claims_max_id`, `priority`, `est_time`, `ticket_type_id`, `responsibility`, `ticket_process_id`, `postpone`, `order`, `type`, `process_status`, `points`, `ticket_from`, `status`) VALUES
(38, '2018-08-14 07:50:11', '', '376251249', '278841000', '', '', 'end14997050181053670946', '', 'A', '', '13', 'Executive', '15', '', '1', '13', 'Not Initiated', '5', 'corporate', '0'),
(37, '2018-08-14 07:41:34', '', '1866059646', '1549644264', '', '', 'end12921119372012331524', '', 'A', '', '13', 'Executive', '15', '', '1', '13', 'Not Initiated', '5', 'corporate', '0'),
(36, '2018-08-14 07:39:46', '', '1629628666', '932518455', '', '', 'end795393070579990170', '', 'A', '', '13', 'Executive', '15', '', '1', '13', 'Not Initiated', '5', 'corporate', '0'),
(35, '2018-08-14 07:37:59', '', '227987184', '459001867', '', '', 'end16781181811138060712', '', 'A', '', '13', 'Executive', '15', '', '1', '13', 'Not Initiated', '5', 'corporate', '0'),
(34, '2018-08-14 07:36:20', '', '192787638', '1048985179', '', '', 'end4201516642009332099', '', 'A', '', '13', 'Executive', '15', '', '1', '13', 'Not Initiated', '5', 'corporate', '0'),
(31, '2018-08-14 07:25:31', '', '276563619', '122540551', '', '', 'end14394643761072174299', '', 'A', '', '13', 'Executive', '15', '', '1', '13', 'Not Initiated', '5', 'corporate', '0'),
(32, '2018-08-14 07:27:06', '', '681255183', '586795928', '', '', 'end725098771932109624', '', 'A', '', '13', 'Executive', '15', '', '1', '13', 'Not Initiated', '5', 'corporate', '0'),
(33, '2018-08-14 07:33:27', '', '1503003906', '1820814269', '', '', 'end15618445691842183934', '', 'A', '', '13', 'Executive', '15', '', '1', '13', 'Not Initiated', '5', 'corporate', '0'),
(30, '2018-08-14 07:19:13', '', '1445645682', '2047695384', '', '', 'end10393371291715557848', '', 'A', '', '13', 'Executive', '15', '', '1', '13', 'Not Initiated', '5', 'corporate', '0'),
(29, '2018-08-10 11:33:52', '', '196303543', '2007891727', '', '', 'end718185458804630878', '', 'A', '', '13', 'Executive', '15', '', '1', '13', 'Not Initiated', '5', 'corporate', '0'),
(39, '2018-08-14 07:52:08', '', '1141972301', '1263633445', '', '', 'end12223059111566889336', '', 'A', '', '13', 'Executive', '15', '', '1', '13', 'Not Initiated', '5', 'corporate', '0'),
(40, '2018-08-14 09:23:11', '', '985894905', '231355825', '', '', 'end1262817581391376756', '', 'A', '', '13', 'Executive', '15', '', '1', '13', 'Not Initiated', '5', 'corporate', '0'),
(41, '2018-08-14 09:25:08', '', '1745800879', '660129640', '', '', 'end459966444217381309', '', 'A', '', '13', 'Executive', '15', '', '1', '13', 'Not Initiated', '5', 'corporate', '0'),
(42, '2018-08-14 10:08:03', '', '920614533', '1270300877', '', '', '', '1534241283', 'A', '', '14', 'Executive', '16', '', '1', '13', 'Not Initiated', '5', 'corporate', '0'),
(43, '2018-08-14 12:42:05', '', '1998139154', '803743682', '', '', 'end17103783831024335256', '', 'A', '', '13', 'Executive', '15', '', '1', '13', 'Not Initiated', '5', 'corporate', '0'),
(44, '2018-08-14 12:45:31', '', '1170573090', '1708307242', '', '', 'end5009610901366265077', '', 'A', '', '13', 'Executive', '15', '', '1', '13', 'Not Initiated', '5', 'corporate', '0'),
(45, '2018-08-14 12:47:53', '', '958669393', '1444601918', '', '', 'end10247800851861548268', '', 'A', '', '13', 'Executive', '15', '', '1', '13', 'Not Initiated', '5', 'corporate', '0'),
(46, '2018-08-14 12:53:14', '', '1020580367', '2055010841', '', '', 'end14663109571786682242', '', 'A', '', '13', 'Executive', '15', '', '1', '13', 'Not Initiated', '5', 'corporate', '0'),
(47, '2018-08-14 13:09:55', '', '308960627', '713766337', '', '', 'end5072374961098599208', '', 'A', '', '13', 'Executive', '15', '', '1', '13', 'Not Initiated', '5', 'corporate', '0'),
(48, '2018-08-16 10:41:32', '14345970361208537983', '1034507910', '1122288189', '', '', '', '', 'A', '24', '3', 'Executive', '2', '', '1', '3', 'Not Initiated', '1', 'individual', '0'),
(49, '2018-08-17 10:15:41', '', '1216863684', '128388571', '', '', 'end2405102241703963963', '', 'A', '', '13', 'Executive', '15', '', '1', '13', 'Not Initiated', '5', 'corporate', '0');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_picking`
--

CREATE TABLE `ticket_picking` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `emp_id` varchar(250) NOT NULL,
  `member_max_id` varchar(250) NOT NULL,
  `ticket_max_id` varchar(250) NOT NULL,
  `ticket_type_id` varchar(50) NOT NULL,
  `ticket_id` varchar(250) NOT NULL,
  `family_member_max_id` varchar(200) NOT NULL,
  `policy_max_id` varchar(200) NOT NULL,
  `endorsement_max_id` varchar(200) NOT NULL,
  `claims_max_id` varchar(150) NOT NULL,
  `responsibility` varchar(20) NOT NULL,
  `postpone` varchar(100) NOT NULL,
  `order` varchar(20) NOT NULL,
  `points` varchar(50) NOT NULL,
  `ticket_process_id` varchar(250) NOT NULL,
  `remark` text NOT NULL,
  `process_status` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `ticket_from` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_picking_history`
--

CREATE TABLE `ticket_picking_history` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `emp_id` varchar(250) NOT NULL,
  `ticket_id` varchar(250) NOT NULL,
  `remark` text NOT NULL,
  `postpone` varchar(100) NOT NULL,
  `process_status` varchar(50) NOT NULL,
  `promoting_policy` varchar(50) NOT NULL,
  `points` varchar(50) NOT NULL,
  `promotion_id` varchar(100) NOT NULL,
  `ticket_from` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_points`
--

CREATE TABLE `ticket_points` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `emp_id` varchar(250) NOT NULL,
  `ticket_id` varchar(250) NOT NULL,
  `remark` text NOT NULL,
  `process_status` varchar(50) NOT NULL,
  `promoting_policy` varchar(50) NOT NULL,
  `points` varchar(250) NOT NULL,
  `promotion_id` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_process`
--

CREATE TABLE `ticket_process` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ticket_type_id` varchar(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `responsibility` varchar(250) NOT NULL,
  `priority` varchar(250) NOT NULL,
  `est_time` varchar(20) NOT NULL,
  `order` int(10) NOT NULL,
  `description` text NOT NULL,
  `points` varchar(250) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_process`
--

INSERT INTO `ticket_process` (`id`, `crdate`, `ticket_type_id`, `name`, `responsibility`, `priority`, `est_time`, `order`, `description`, `points`, `status`) VALUES
(2, '2018-01-18 21:15:27', '3', 'New Registration', 'Executive', 'A', '24', 1, '  Dear Sir/Madam, We welcome you to \"Personal Insurance Portfolio\" services from Mallapuram Insurance & Allied Services\n\nWe request you to do\n          1) Update your profile\n          2) Update your existing Policy Details along with the Scan copies \n          3) Update Family Member Details', '1', '1'),
(5, '2018-02-03 00:07:16', '3', 'Profile  Update Check Process', 'Manager', 'A', '', 2, '   1) Dear <Name>, the following details are Empty, pls provide us the details.... 1)... 2)...\r\n 1) Dear <Name>, the following details are Empty, pls provide us the details.... 1)... 2)...', '2', '1'),
(6, '2018-02-03 00:09:27', '3', 'Profile and Family Member Details Authentication', 'Manager', 'A', '', 3, '  Check all the details', '3', '1'),
(7, '2018-02-03 00:10:15', '3', 'Profile and Family Member Authentication - Error Process', 'Manager', 'A', '', 2, '    1) Call up Client\r\n2) SAY:\"Good Morning\" <Mr / Ms> <Client Name>, we thank you for registering your <Policy Name> with Policy No. <Pol No.> taken from <Insurance Co. Name> with your \"Mallapuram Personal Insurance Portfolio App\". We found there are following errors while uploading, Your policy scan copy shows \".....\" but you have mentioned \".....\", so shall we change the details as per the Policy Copy ?', '4', '1'),
(10, '2018-04-01 23:26:26', '10', 'Family Memebr Profile Check', 'Manager', 'A', '', 1, 'Check Family Member Profile Details.', '5', '1'),
(11, '2018-04-01 23:27:01', '10', 'Family Memebr Profile Update', 'Manager', 'A', '', 2, 'Family Member Profile Update Process', '5', '1'),
(12, '2018-04-08 07:39:07', '11', 'New Policy Request', 'Manager', 'B', '', 1, 'Dear <Name>, We wecome you to \"Personal Insurance Portfolio\" services from Mallapuram Insurance & Allied Services', '10', '1'),
(13, '2018-04-08 07:40:56', '12', 'Existing Policy Request', 'Manager', 'B', '', 1, '  Dear <Name>, We thank you for your request for Policy Servicing <Policy Number> and the ticket raised is <Ticket No.> You will receive the call from our operations team shortly.. Operations@mallapuram.com', '20', '1'),
(14, '2018-04-17 01:50:07', '9', 'Added Policy Check Process', 'Manager', 'A', '', 1, 'Check Added Policy Details.', '10', '1'),
(15, '2018-07-10 12:48:37', '13', 'Endorsement', 'Executive', 'A', '', 1, '1) Pls Check the data\n2) Call the Client If there is any discrepancy\n3) Call up Insurance Company to see if they have received the mail.\n4) Put Reply all to the mail received from the client and push the Insurance Company.', '5', '1'),
(16, '2018-07-10 12:49:00', '14', 'Claim Intimation', 'Executive', 'A', '', 1, 'Help Regarding Claim Process...', '5', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_process_order`
--

CREATE TABLE `ticket_process_order` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ticket_type_id` varchar(250) NOT NULL,
  `ticket_process_id` varchar(250) NOT NULL,
  `order` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_process_order`
--

INSERT INTO `ticket_process_order` (`id`, `crdate`, `ticket_type_id`, `ticket_process_id`, `order`, `status`) VALUES
(1, '2018-02-02 11:48:26', '3', '2', '1', '1'),
(2, '2018-02-02 11:49:01', '3', '5', '2', '1'),
(3, '2018-02-02 11:49:16', '3', '6', '3', '1'),
(4, '2018-02-02 11:49:26', '3', '7', '4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_type`
--

CREATE TABLE `ticket_type` (
  `id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(250) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_type`
--

INSERT INTO `ticket_type` (`id`, `crdate`, `name`, `status`) VALUES
(9, '2018-02-23 01:09:59', 'Policy Addition', '1'),
(3, '2018-07-13 13:27:24', 'Registration', '1'),
(10, '2018-04-01 23:24:45', 'Family Member Add', '1'),
(11, '2018-04-08 07:36:42', 'New Policy Request', '1'),
(12, '2018-04-08 07:39:34', 'Existing Policy Request', '1'),
(13, '2018-07-10 12:47:14', 'Endorsement', '1'),
(14, '2018-07-10 12:47:39', 'Claim Intimation', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_statements`
--
ALTER TABLE `account_statements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `addition`
--
ALTER TABLE `addition`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cd_account`
--
ALTER TABLE `cd_account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `cd_amount`
--
ALTER TABLE `cd_amount`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `check_family_registration`
--
ALTER TABLE `check_family_registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `check_ind_registration`
--
ALTER TABLE `check_ind_registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `claims_intimation`
--
ALTER TABLE `claims_intimation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `claim_dump`
--
ALTER TABLE `claim_dump`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `corporate_client`
--
ALTER TABLE `corporate_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate_client_branches`
--
ALTER TABLE `corporate_client_branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate_client_policy`
--
ALTER TABLE `corporate_client_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate_employee`
--
ALTER TABLE `corporate_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate_employee_family`
--
ALTER TABLE `corporate_employee_family`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `correction`
--
ALTER TABLE `correction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `dummy_individual_slaes_booking`
--
ALTER TABLE `dummy_individual_slaes_booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `employee_deletion`
--
ALTER TABLE `employee_deletion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `emp_login`
--
ALTER TABLE `emp_login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `endorsement_charges`
--
ALTER TABLE `endorsement_charges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `endorsement_request`
--
ALTER TABLE `endorsement_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `individual_slaes_booking`
--
ALTER TABLE `individual_slaes_booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ind_family`
--
ALTER TABLE `ind_family`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ind_policy`
--
ALTER TABLE `ind_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind_registration`
--
ALTER TABLE `ind_registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ind_service_request`
--
ALTER TABLE `ind_service_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ind_share_app`
--
ALTER TABLE `ind_share_app`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `insurance_companies`
--
ALTER TABLE `insurance_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_policy`
--
ALTER TABLE `insurance_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mallapuram_employees`
--
ALTER TABLE `mallapuram_employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `policy_types`
--
ALTER TABLE `policy_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `sales_booking`
--
ALTER TABLE `sales_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ticket_bucket`
--
ALTER TABLE `ticket_bucket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ticket_picking`
--
ALTER TABLE `ticket_picking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ticket_picking_history`
--
ALTER TABLE `ticket_picking_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ticket_points`
--
ALTER TABLE `ticket_points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ticket_process`
--
ALTER TABLE `ticket_process`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ticket_process_order`
--
ALTER TABLE `ticket_process_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ticket_type`
--
ALTER TABLE `ticket_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_statements`
--
ALTER TABLE `account_statements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `addition`
--
ALTER TABLE `addition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cd_account`
--
ALTER TABLE `cd_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cd_amount`
--
ALTER TABLE `cd_amount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `check_family_registration`
--
ALTER TABLE `check_family_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `check_ind_registration`
--
ALTER TABLE `check_ind_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `claims_intimation`
--
ALTER TABLE `claims_intimation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `claim_dump`
--
ALTER TABLE `claim_dump`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `corporate_client`
--
ALTER TABLE `corporate_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `corporate_client_branches`
--
ALTER TABLE `corporate_client_branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `corporate_client_policy`
--
ALTER TABLE `corporate_client_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `corporate_employee`
--
ALTER TABLE `corporate_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `corporate_employee_family`
--
ALTER TABLE `corporate_employee_family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `correction`
--
ALTER TABLE `correction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dummy_individual_slaes_booking`
--
ALTER TABLE `dummy_individual_slaes_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_deletion`
--
ALTER TABLE `employee_deletion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_login`
--
ALTER TABLE `emp_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `endorsement_charges`
--
ALTER TABLE `endorsement_charges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `endorsement_request`
--
ALTER TABLE `endorsement_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `individual_slaes_booking`
--
ALTER TABLE `individual_slaes_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind_family`
--
ALTER TABLE `ind_family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ind_policy`
--
ALTER TABLE `ind_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ind_registration`
--
ALTER TABLE `ind_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ind_service_request`
--
ALTER TABLE `ind_service_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ind_share_app`
--
ALTER TABLE `ind_share_app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insurance_companies`
--
ALTER TABLE `insurance_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `insurance_policy`
--
ALTER TABLE `insurance_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mallapuram_employees`
--
ALTER TABLE `mallapuram_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `policy_types`
--
ALTER TABLE `policy_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sales_booking`
--
ALTER TABLE `sales_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_bucket`
--
ALTER TABLE `ticket_bucket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `ticket_picking`
--
ALTER TABLE `ticket_picking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `ticket_picking_history`
--
ALTER TABLE `ticket_picking_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_points`
--
ALTER TABLE `ticket_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_process`
--
ALTER TABLE `ticket_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ticket_process_order`
--
ALTER TABLE `ticket_process_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ticket_type`
--
ALTER TABLE `ticket_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
