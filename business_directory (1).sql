-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2022 at 02:23 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `business_directory`
--

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `business_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `images` text NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `Date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`business_id`, `user_id`, `cat_id`, `name`, `address`, `phone`, `city`, `images`, `description`, `status`, `Date_created`) VALUES
(108, 1, 1, 'Transnational Corporation of Nigeria Plc', 'Transnational House 38 Glover Road, (Formerly 22B), Ikoyi, Lagos Nigeria', 2147483647, 'Lagos', '../uploads/74f23dc5a1c5dc6709073e5a388bd30cimag1.jpg', 'Transnational Corporation of Nigeria Plc is a business conglomerate doing business in areas such as hospitality, power and energy in Nigeria.', 1, '2021-03-20 15:38:08'),
(109, 1, 1, 'Macmed Integrated Farms', '1, Gani Street, Ijegun Imore. Satellite Town. Lagos , Lagos, Lagos, Nigeria', 2147483647, 'Lagos', '../uploads/0bb427f8a40b0f12062f1486e2a009bcimage4.jpg', 'Macmed Integrated Farms is into Poultry, Fish Farming (eggs, meat,day old chicks,fingerlings and grow-out) and animal Husbandry and sales of Farmlands land and facilities We also provide feasibility ', 1, '2021-03-20 15:50:37'),
(110, 1, 1, 'O&#39;LEAMS OILFIELD SERVICES LTD', '7 Alao Street, Ajao Estate Lagos Nigeria, Lagos, Lagos', 2147483647, 'Lagos', '../uploads/01fadceed08227c1e1eb5d5e5db96880imag3.jpg', 'O&#39;LEAMS OILFIELD SERVICES LTD is a leader in the provision of safe access and egress solutions,fall protection and confined space equipment, rescue equipment, rope rescue services,Work At Height,Lifelines and Anchorage Systems supplies,installation and certification,PPE,Harnesses,Lanyards,anchorage, rope grab, self-retracting lifelines, Fire Protection design and installation,Hydrant,Sprinkler, Fire Pumps,Fire Extinguishers e.t.c We carry out training programs on the proper use of safety equipment for a safer workplace (on-site and off-site)', 1, '2021-03-20 15:55:48'),
(111, 1, 1, 'DE-OXY FIRE CO. LTD', '27 COKER STREET, AMUKOKO, LAGOS., Lagos, Lagos, Nigeria', 2147483647, 'Lagos', '../uploads/e475aea07c762ad5b8c11b5fb5f291dcfire.png', 'Over a decade De-Oxy Fire Co. Ltd has been in a Continental Importation, Sales and servicing of reliable fire protection products. A privately owned and operated company with its headquarter in Lagos Nigeria, De-Oxy Fire Co. Ltd has earned an excellent reputation for quality, reliability and value within the commercial and industrial fire protection industry. Fire Safety Arrangements have become the basic necessity for MNC (Multi-National Companies), Offices, Corporates Organization, Schools, Colleges, Hotels, Shops, Restaurants, Gas Stations, Industries, High Rise Buildings, Societies, Homes/Houses, Multi Storey Buildings/Houses, Shopping Complexes, We therefore offer a complete line of handheld and wheeled fire extinguishers, extinguishing agents. To ensure our distributors and customers get the highest quality fire protection equipment, all of our products undergo rigorous testing, both in-house and by third party testing organizations such as Underwriters Laboratories, Standard Organization of Nigeria (SON), and the Federal Fire Service of Nigeria.. We are committed to helpful and responsive customer service, knowledgeable and dependable technical support. This commitment has earned De-Oxy Fire Co. Ltd the SONCAP Certification. Contact us for more information about the wide selection of De-Oxy Fire Co. Ltd products and services. We have trained personnel who are ready to assist you with your fire protection needs, fire suppressing foam concentrates & hardware and pre-engineered kitchen suppression systems. Our experience enables us to supply the complete package for all your requirements.. OUR SERVICES: Our services are very affordable and extremely reliable. We have Qualified Fire Protection Engineers and Consultants that could help in: 1. Analyzing the kind of Fire Safety Arrangements Required in your valuable premises. 2. Give our recommendation on how you can protect your premises with the help of latest Fire Safety Equipment. 3. Installation of Required Fire Safety Equipment (We are Importers & Suppliers of all types of Latest Fire Safety Equipment). 4. Demo/Training on how these Fire Safety Equipment works. 5. Maintenance of Fire Safety Equipment that will include regular visit to your premises to check the working condition of the Fire Equipment/Devices Installed. We undertake the following jobs at very competitive rates with very satisfactorily results: Installation and Commissioning job of automatic fire detection and alarm system. 2. Repairing / put into operation / comprehensive maintenance job of automatic fire detection and alarm system of any make and types. 3. Installation and Commissioning of Public Address System. 4. Supply and Installation of Fire Extinguishers. 5. Refilling / Servicing / Refurbishing of Fire Extinguishers. 6. Supply and Installation of Swinging Hose Reel / Sprinkler System. 7. Supply of all accessories / Spares / Items for Hydrant System. 8. Operational, Comprehensive maintenance job of complete Fire Fighting System installed in high rise building.', 1, '2021-03-20 16:04:15'),
(112, 1, 1, '', '', 0, '', '../uploads/0f2384c91a7939701f7992b9af777856safe.jpg', '', 1, '2022-05-03 12:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(2) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Technology'),
(2, 'Blogs'),
(3, 'Hotels'),
(4, 'Restaurants'),
(5, 'Garages'),
(6, 'Arts'),
(7, 'Shoppi'),
(8, 'Cafe'),
(9, 'Agriculture'),
(10, 'Human Development'),
(11, 'Training schools'),
(12, 'Football Team');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `Date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `fname`, `username`, `pass`, `Date_created`, `Last_login`) VALUES
(6, 'mikky kachi', 'mike', '1995', '2019-10-04 15:19:55', '2019-09-19 17:30:05'),
(8, 'mikky', 'mikky@gmail.com', '1234', '2019-09-20 00:30:27', '2019-09-20 00:30:27'),
(19, 'zxjhzjhzxzx', 'juseks_admin', 'SnVzZWshQCMxMjM=', '2022-04-15 16:29:45', '2022-04-15 16:29:45'),
(23, 'mikky', 'mikky', 'MTIzMTIz', '2022-04-27 16:08:42', '2022-04-27 16:08:42');

-- --------------------------------------------------------

--
-- Table structure for table `opening_hours`
--

CREATE TABLE `opening_hours` (
  `time_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `monday` varchar(225) NOT NULL,
  `tuesday` varchar(225) NOT NULL,
  `wednesday` varchar(225) NOT NULL,
  `thursday` varchar(225) NOT NULL,
  `friday` varchar(225) NOT NULL,
  `saturday` varchar(225) NOT NULL,
  `sunday` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opening_hours`
--

INSERT INTO `opening_hours` (`time_id`, `business_id`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(27, 108, '', '8:00 - 5pm', '8:00 - 5pm', '', '8:00 - 5pm', '8:00 - 5pm', ''),
(28, 109, '', '8am-5pm', '8am-5pm', '', '8am-5pm', '8am-5pm', ''),
(29, 110, '', '8:00am - 5:00pm', '8:00am - 5:00pm', '', '8:00am - 5:00pm', '8:00am - 5:00pm', ''),
(30, 111, '', '8.00AM - 4.00PM', '8.00AM - 4.00PM', '', '8.00AM - 4.00PM', '8.00AM - 4.00PM', ''),
(31, 112, '', '8.00am - 5.00pm', '8.00am - 5.00pm', '', '8.00am - 5.00pm', '8.00am - 5.00pm', ''),
(32, 111, '8am to 5pm', '8am to 5pm', '8am to 5pm', '8am to 5pm', '8am to 5pm', '8am to 5pm', 'off'),
(33, 113, '', '0', '0', '', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `business_id` int(11) NOT NULL,
  `rated` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `review` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `name`, `business_id`, `rated`, `user_email`, `review`, `date_added`) VALUES
(1, 'michael david', 1, 4, 'mikky@mgial.com', 'i love this company, the have help me to do some wonderful services and am cool with it', '2019-09-27 18:44:39'),
(2, 'kachi', 2, 4, 'ikky@mgial.com', 'thisis my review here', '2019-09-27 18:44:44'),
(3, 'emma', 1, 5, 'gaiolcom', 'mds,dsd', '2019-09-27 18:44:47'),
(32, 'aa', 2, 5, 'sds@fm.com', 'hdd', '2019-10-04 09:37:41'),
(34, 'aa', 4, 5, 'sds@fm.com', 'hdd', '2019-10-04 09:37:46'),
(35, 'aa', 6, 5, 'sds@fm.com', 'hdd', '2019-10-04 09:37:50'),
(36, 'aa', 3, 5, 'sds@fm.com', 'hdd', '2019-10-04 09:37:55'),
(37, 'jksdjksdk', 2, 5, 'jksdsjkd@gmail.com', 'jksdjskd', '2019-09-27 23:41:10'),
(38, 'jksdjksdk', 2, 5, 'jksdsjkd@gmail.com', 'jksdjskd', '2019-09-27 23:42:22'),
(39, 'jksdjksdk', 2, 5, 'jksdsjkd@gmail.com', 'jksdjskd', '2019-09-27 23:42:32'),
(40, 'jksdjksdk', 2, 5, 'jksdsjkd@gmail.com', 'jksdjskd', '2019-09-27 23:43:12'),
(41, 'mikye', 1, 5, 'ghhh@gmail.com', 'jksdjksdfksdf', '2019-09-27 23:45:31'),
(42, 'dsdsksdk', 58, 5, 'sksdjk@fma.com', 'kdjksd', '2019-09-28 01:53:27'),
(43, 'dsdsksdk', 58, 5, 'sksdjk@fma.com', 'kdjksd', '2019-09-28 01:54:19'),
(44, 'dsdsksdk', 58, 5, 'sksdjk@fma.com', 'kdjksd', '2019-09-28 01:56:15'),
(45, 'dsdsksdk', 58, 5, 'sksdjk@fma.com', 'kdjksd', '2019-09-28 01:56:54'),
(46, 'mikky kachi', 59, 4, 'jesmikky@gmail.com', 'i think i love this company, they have really help me in many ways to achieve', '2019-09-30 11:37:33'),
(47, 'kachi mikky', 62, 5, 'kachikwu@gmail.com', 'i love this site, weldone ', '2019-10-04 14:31:44'),
(48, 'test', 1, 5, 'test@gmail.com', 'this is coll', '2019-10-04 16:00:44'),
(49, 'test', 1, 5, 'test@gmail.com', 'this is coll', '2019-10-04 16:02:22'),
(50, 'test', 1, 5, 'test@gmail.com', 'this is coll', '2019-10-04 16:06:31'),
(51, 'test', 1, 5, 'test@gmail.com', 'this is coll', '2019-10-04 16:07:03'),
(52, 'test', 1, 5, 'test@gmail.com', 'this is coll', '2019-10-04 16:07:25'),
(53, 'test', 1, 5, 'test@gmail.com', 'this is coll', '2019-10-04 16:08:16'),
(54, 'test', 1, 5, 'test@gmail.com', 'this is coll', '2019-10-04 16:09:15'),
(55, 'final test', 62, 5, 'mikky@gmil.com', 'thanks for this final test', '2019-10-06 12:13:21'),
(56, 'final test', 62, 5, 'mikky@gmil.com', 'thanks for this final test', '2019-10-06 12:13:28'),
(57, 'thsi sis muy', 90, 5, 'd@gmail.com', 'jksdkjsdk', '2019-10-06 13:09:16'),
(58, 'thsi sis muy', 90, 5, 'd@gmail.com', 'jksdkjsdk', '2019-10-06 13:09:28'),
(59, 'final@gm.com', 93, 5, 'mm@gm.com', 'kjsdksjdk', '2019-10-06 13:26:30'),
(60, 'final@gm.com', 93, 5, 'mm@gm.com', 'kjsdksjdk', '2019-10-06 13:26:36'),
(61, 'thei', 1, 5, 'm@y.com', 'jksjkds', '2019-10-06 13:30:36'),
(62, 'thei', 1, 5, 'm@y.com', 'jksjkds', '2019-10-06 13:30:59'),
(63, 'thei', 1, 5, 'm@y.com', 'jksjkds', '2019-10-06 13:31:07'),
(64, 'thei', 1, 5, 'm@y.com', 'jksjkds', '2019-10-06 13:32:50'),
(65, 'thei', 1, 5, 'm@y.com', 'jksjkds', '2019-10-06 13:33:07'),
(66, 'thei', 1, 5, 'm@y.com', 'jksjkds', '2019-10-06 13:55:57'),
(67, 'thei', 1, 5, 'm@y.com', 'jksjkds', '2019-10-06 13:56:02'),
(68, 'this is ', 91, 5, 'fj@gmail.com', 'jsdjksd', '2019-10-06 13:56:30'),
(69, 'this is ', 91, 5, 'fj@gmail.com', 'jsdjksd', '2019-10-06 13:56:38'),
(70, 'this is ', 91, 5, 'fj@gmail.com', 'jsdjksd', '2019-10-06 13:57:30'),
(71, 'this is ', 91, 5, 'fj@gmail.com', 'jsdjksd', '2019-10-06 13:57:58'),
(72, 'this is ', 91, 5, 'fj@gmail.com', 'jsdjksd', '2019-10-06 13:58:04'),
(73, 'this is ', 91, 5, 'fj@gmail.com', 'jsdjksd', '2019-10-06 13:58:16'),
(74, 'this is ', 91, 5, 'fj@gmail.com', 'jsdjksd', '2019-10-06 13:58:33'),
(75, 'this is ', 91, 5, 'fj@gmail.com', 'jsdjksd', '2019-10-06 13:59:56'),
(76, 'this is ', 91, 5, 'fj@gmail.com', 'jsdjksd', '2019-10-06 14:00:01'),
(77, 'this is ', 91, 5, 'fj@gmail.com', 'jsdjksd', '2019-10-06 14:00:29'),
(78, 'this is ', 91, 5, 'fj@gmail.com', 'jsdjksd', '2019-10-06 14:00:33'),
(79, 'this is ', 91, 5, 'fj@gmail.com', 'jsdjksd', '2019-10-06 14:00:36'),
(80, 'added', 81, 5, 'gm@gmail.com', 'jksdjksd', '2019-10-06 14:01:10'),
(81, 'added', 81, 5, 'gm@gmail.com', 'jksdjksd', '2019-10-06 14:15:02'),
(82, 'added', 81, 5, 'gm@gmail.com', 'jksdjksd', '2019-10-06 14:15:08'),
(83, 'added', 81, 5, 'gm@gmail.com', 'jksdjksd', '2019-10-06 14:15:12'),
(84, 'added', 81, 5, 'gm@gmail.com', 'jksdjksd', '2019-10-06 14:16:23'),
(85, 'this is ', 81, 5, 'hhh@gmail.com', 'jksdkjsdk', '2019-10-06 14:16:53'),
(86, 'this is ', 81, 5, 'hhh@gmail.com', 'jksdkjsdk', '2019-10-06 14:19:47'),
(87, 'this is ', 81, 5, 'hhh@gmail.com', 'jksdkjsdk', '2019-10-06 14:20:25'),
(88, 'this is ', 81, 5, 'hhh@gmail.com', 'jksdkjsdk', '2019-10-06 14:21:11'),
(89, 'this is ', 81, 5, 'hhh@gmail.com', 'jksdkjsdk', '2019-10-06 14:24:37'),
(90, 'this is ', 81, 5, 'hhh@gmail.com', 'jksdkjsdk', '2019-10-06 14:25:02'),
(91, 'this is ', 81, 5, 'hhh@gmail.com', 'jksdkjsdk', '2019-10-06 14:26:28'),
(92, 'this is ', 81, 5, 'hhh@gmail.com', 'jksdkjsdk', '2019-10-06 14:26:45'),
(93, 'this is ', 81, 5, 'hhh@gmail.com', 'jksdkjsdk', '2019-10-06 14:26:58'),
(94, 'this is ', 81, 5, 'hhh@gmail.com', 'jksdkjsdk', '2019-10-06 14:27:15'),
(95, 'this is ', 81, 5, 'hhh@gmail.com', 'jksdkjsdk', '2019-10-06 14:28:47'),
(96, 'this is ', 81, 5, 'hhh@gmail.com', 'jksdkjsdk', '2019-10-06 14:28:51'),
(97, 'jksdjksdj', 93, 5, 'jsd@gmail.com', 'jksdjks', '2019-10-06 14:29:17'),
(98, 'jksdjksdj', 93, 5, 'jsd@gmail.com', 'jksdjks', '2019-10-06 14:35:23'),
(99, 'jksdjksdj', 93, 5, 'jsd@gmail.com', 'jksdjks', '2019-10-06 14:35:35'),
(100, 'jksdjksdj', 93, 5, 'jsd@gmail.com', 'jksdjks', '2019-10-06 14:36:28'),
(101, 'jksdjksdj', 93, 5, 'jsd@gmail.com', 'jksdjks', '2019-10-06 14:36:53'),
(102, 'jksdjksdj', 93, 5, 'jsd@gmail.com', 'jksdjks', '2019-10-06 14:37:03'),
(103, 'jksdjksdj', 93, 5, 'jsd@gmail.com', 'jksdjks', '2019-10-06 14:37:15'),
(104, 'jksdjksdj', 93, 5, 'jsd@gmail.com', 'jksdjks', '2019-10-06 14:37:35'),
(105, 'sdjkdsjk', 62, 5, 'sd@gmaill.com', 'jkskdjsd', '2019-10-06 14:45:44'),
(106, 'sdjkdsjk', 62, 5, 'sd@gmaill.com', 'jkskdjsd', '2019-10-06 14:45:47'),
(107, 'sdjkdsjk', 62, 5, 'sd@gmaill.com', 'jkskdjsd', '2019-10-06 14:46:20'),
(108, 'sdjkdsjk', 62, 5, 'sd@gmaill.com', 'jkskdjsd', '2019-10-06 14:46:24'),
(109, 'sdjkdsjk', 62, 5, 'sd@gmaill.com', 'jkskdjsd', '2019-10-06 14:46:27'),
(110, 'sdjkdsjk', 62, 5, 'sd@gmaill.com', 'jkskdjsd', '2019-10-06 14:46:56'),
(111, 'hope you are still working', 93, 3, 'test@gmal.com', 'fhkjfdfj', '2019-10-12 10:29:39'),
(112, 'hope you are still working', 93, 3, 'test@gmal.com', 'fhkjfdfj', '2019-10-12 10:30:08'),
(113, 'michael', 112, 3, 'test@gmail.com', 'this is a good business', '2022-05-03 12:02:24'),
(114, 'michael', 112, 3, 'test@gmail.com', 'this is a good business', '2022-05-03 12:02:34'),
(115, 'michael', 113, 3, 'test@gmail.com', 'akdladsa', '2022-05-03 12:06:26'),
(116, 'michael', 113, 3, 'test@gmail.com', 'akdladsa', '2022-05-03 12:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `socical_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `website` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`socical_id`, `business_id`, `website`, `facebook`, `twitter`, `email`) VALUES
(31, 0, '', '', '', '1'),
(32, 0, '', '', '', '1'),
(33, 0, '', '', '', '1'),
(34, 2, 'mikkynobel@gmail.com', 'facebook.com', 'twitter/mikkyoble', '1'),
(35, 2, '', '', '', ''),
(36, 79, 'dsds@gmail.com', '', '', ''),
(37, 89, 'mikky@gmail.com', 'jsdksdjk', 'dsjk', ''),
(38, 90, 'th@gmail.com', 'wehweh', 'smd,sd', ''),
(39, 90, 'th@gmail.com', 'wehweh', 'smd,sd', ''),
(40, 90, 'th@gmail.com', 'wehweh', 'smd,sd', ''),
(41, 91, 'hello@gmail.com', 'j', 'jkdfkdf', ''),
(42, 93, 'kwjejkewjk@gmail.com', 'jkdjsdkj', 'jksdjskdj', ''),
(43, 108, 'info@transcorpnigeria.com', '', '', ''),
(44, 109, 'info@MacmedIntegratedFarms.com', 'MacmedIntegratedFarms', 'MacmedIntegratedFarms', ''),
(45, 110, 'info@oleams.com', 'oleams', 'oleams', ''),
(46, 111, 'info@deoxyfire.com', 'deoxyfire.com', 'deoxyfire.com', ''),
(47, 112, 'info@chogonguards.com', 'chogonguards.com', 'chogonguards.com', ''),
(48, 113, 'help@tmai.com', 'dksfdk', 'vkjsdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `Last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `pass`, `phone`, `fname`, `lname`, `city`, `nationality`, `date_registered`, `Last_login`) VALUES
(1, 'mikky', '1991', '8039366207', 'michael', 'kachi', 'lagos', 'nigeria', '2022-05-03 12:03:34', '2022-05-03 12:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE `user_auth` (
  `user_auth_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visit_count`
--

CREATE TABLE `visit_count` (
  `visit_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `visit_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`business_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `opening_hours`
--
ALTER TABLE `opening_hours`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`socical_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD PRIMARY KEY (`user_auth_id`);

--
-- Indexes for table `visit_count`
--
ALTER TABLE `visit_count`
  ADD PRIMARY KEY (`visit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `business_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `opening_hours`
--
ALTER TABLE `opening_hours`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `socical_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user_auth`
--
ALTER TABLE `user_auth`
  MODIFY `user_auth_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visit_count`
--
ALTER TABLE `visit_count`
  MODIFY `visit_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
