-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 06:11 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oswa_inv`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cust_id`, `p_id`, `qty`) VALUES
(1, 4, 0, 0),
(2, 4, 0, 0),
(3, 5, 0, 0),
(4, 6, 0, 0),
(5, 6, 0, 0),
(6, 7, 12, 1),
(7, 7, 4, 1),
(8, 8, 12, 1),
(9, 8, 4, 1),
(10, 9, 12, 1),
(11, 10, 109, 1),
(12, 11, 112, 4),
(13, 12, 20, 4),
(14, 13, 16, 1),
(15, 14, 113, 1),
(16, 14, 113, 1),
(17, 14, 111, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `active`) VALUES
(3, 'master', 1, 1),
(11, 'Master Watches', 0, 0),
(12, 'uboat', 11, 0),
(26, 'Watches', 0, 1),
(27, 'Ulysse Nardin', 11, 1),
(28, 'Tissot', 11, 1),
(29, 'Tag Heuer', 11, 1),
(30, 'SEVENFRIDAY', 11, 1),
(31, 'Rolex', 11, 1),
(32, 'Richard Mille', 11, 1),
(33, 'Rado', 11, 1),
(34, 'Porsche Design', 11, 1),
(35, 'Patek Phillippe', 11, 1),
(36, 'WOMEN', 0, 1),
(37, 'MOBILE ACCESSORIES', 0, 1),
(38, 'MEN WEAR', 0, 1),
(39, 'Lawn', 0, 1),
(40, 'FOOTWEAR', 0, 1),
(41, 'COSMETIC', 0, 1),
(42, 'ACCESSORIES', 0, 1),
(44, 'Audemars Piguet', 11, 1),
(45, 'Breitling', 11, 1),
(46, 'Burberry', 11, 1),
(47, 'BVLGARI', 11, 1),
(48, 'Calvin Klein', 11, 1),
(49, 'CARTIER', 11, 1),
(50, 'Corum', 11, 1),
(51, 'De-Lawrance', 11, 1),
(52, 'Emporio Armani', 11, 1),
(53, 'Ferrari', 11, 1),
(54, 'Guess_GC', 11, 1),
(55, 'Hublot', 11, 1),
(56, 'IWC', 11, 1),
(57, 'Longines', 11, 1),
(58, 'Louis Vuitton', 11, 1),
(59, 'Montblanc', 11, 1),
(60, 'Movado', 11, 1),
(61, 'Omega', 11, 1),
(62, 'Panerai', 11, 1),
(63, 'selfie stick', 37, 1),
(64, 'protectors', 37, 1),
(65, 'Mobile Phone Clip Lens', 37, 1),
(66, 'earphone', 37, 1),
(67, 'handfree', 37, 1),
(68, 'Virtual Reality (VR) 3D Glasses', 37, 1),
(69, 'Water Proof Pouch', 37, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `name`, `email`, `address`, `phone`, `password`) VALUES
(1, 'uzair', 'uzai@gmail.com', 'dhoraji', 321212212, 'abc'),
(2, 'uzair', 'uzai@gmail.com', 'dhoraji', 321212212, 'abc'),
(3, 'uzair', 'as@gmail.com', 'dhoraji', 321212212, 'abc'),
(4, 'uzair', 'as@gmail.com', 'dhoraji', 321212212, 'abc'),
(5, 'imran', 'imran@gmial', 'sas', 12121, '1212'),
(6, 'sasas', 'aasasa', 'sasas', 12121, '1212'),
(7, 'uzair', 'klkl@gmail.com', 'dhoraji', 346121221, '123'),
(8, 'assa', 'saas', 'sasas', 121212, 'asas'),
(9, 'abdul ahad', 'sasas@gmail.com', 'asas', 2121212213, '1212'),
(10, 'shayan', 'klkl@gmail.com', 'assasas', 21212, 'saasas'),
(11, 'kamran', 'ksas@gmail.com', 'qwqw', 121212, '1212'),
(12, 'kamran', 'kami@gmail.com', 'saasas', 21212, '12345'),
(13, 'illyas', 'il@gmaic.om', 'saas', 21212, '1212'),
(14, 'klk', 'ass', 'sasa', 0, '12sas');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE IF NOT EXISTS `emails` (
  `email_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`email_id`, `email`) VALUES
(1, 'uzairkamdar@gmail.com'),
(2, 'kamran@gmail.com'),
(3, 'kamran@gmail.com'),
(4, 'uzairkamdar@gmail.com'),
(5, 'uzairkamdar@gmail.com'),
(6, 'uz');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `stock` varchar(50) DEFAULT NULL,
  `buy_price` decimal(25,2) DEFAULT NULL,
  `sale_price` decimal(25,2) NOT NULL,
  `categorie_id` int(11) unsigned NOT NULL,
  `date` datetime NOT NULL,
  `image` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `discount` int(11) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `timer` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `categorie_id` (`categorie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=116 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `stock`, `buy_price`, `sale_price`, `categorie_id`, `date`, `image`, `color`, `size`, `weight`, `discount`, `brand`, `timer`) VALUES
(1, 'xyz', '12', '120.00', '220.00', 11, '2017-08-18 11:11:39', '', 'black', 's', '120', 20, 'master', 0),
(2, 'rado', '15', '200.00', '400.00', 12, '2017-08-20 12:10:53', '', 'golden', '', '10g', 10, 'rado', 0),
(3, 'one', '12', '12.00', '12.00', 12, '2017-08-22 12:15:14', '', '', '', '', 0, '', 0),
(4, 'uboat', '1', '3.00', '3.00', 12, '2017-08-22 12:20:57', '1485258945-U-Boat-Italo-Fontana-Quartz-Chronograph-UB-1023-Man-Watch(4100).jpg', 'b', 'ss', '', 0, '', 0),
(5, 'ULYSEE NARDIN 2', '1', '1.00', '5200.00', 27, '2017-08-22 12:22:12', '1478070517-Ulysse-nardin-conquering-the-oceans-Watch(5800).JPG', '', '', '', 0, '', 0),
(12, 'ULYSEE NARDINN', '1', '143.00', '13.00', 27, '2017-08-22 12:24:04', '1478070823-ULYSSE-NARDIN-MAXI-MARINE-CHRONOGRAPH-WATCH(4700).JPG', '', '', '', 0, '', 0),
(13, 'GFS', '33', '3.00', '3.00', 27, '2017-08-22 12:26:09', '1478703986-Ulysse-Nardin-Maxi-Marine-Chronometer-Watch(5000).JPG', '', '', '', 0, '', 0),
(14, 'GFD', '34', '4.00', '4.00', 27, '2017-08-22 12:26:18', '', '', '', '', 0, '', 0),
(15, 'HYRF', '4', '4.00', '4.00', 27, '2017-08-22 12:26:32', '1478962241-ULYSSES-LE-LOCLE-NARDIN-SUISSES-CHRONOMETER-WATCH(5200).JPG', '', '', '', 0, '', 0),
(16, 'G', '3', '42.00', '4.00', 28, '2017-08-22 12:27:15', '1481280133-Tissot-1853-TRADITION-CHRONOGRAPH-WATCH(3800).JPG', '', '', '', 0, '', 0),
(17, 'DFG', '3', '4.00', '4.00', 28, '2017-08-22 12:27:33', '1481281269-TISSOT-1853-COUTURIER-CHRONOGRAPH-VALJOUX-Watch(4100).JPG', '', '', '', 0, '', 0),
(18, 'YHT', '45', '53.00', '53.00', 28, '2017-08-22 12:27:50', '1481283097-Tissot-Men-PRC-200-Chronograph-Watch.JPG', '', '', '', 0, '', 0),
(19, 'TUJH', '46', '46.00', '64.00', 28, '2017-08-22 12:28:15', '1481283097-Tissot-Men-PRC-200-Chronograph-Watch.JPG', '', '', '', 0, '', 0),
(20, 'RY', '54', '45.00', '45.00', 28, '2017-08-22 12:28:42', '1485008741-Tissot-1853-Day-date-Ultra-Slim-Black-Gold-Sheffar-Chain-Watch(3200).jpg', '', '', '', 0, '', 0),
(21, 'GJK', '3', '34.00', '34.00', 28, '2017-08-22 12:29:03', '1485159821-Tissot-1853-Classic-Day-Date-Ultra-Slim-Blue-Black-Limited-Edition-Watch(3200).jpg', '', '', '', 0, '', 0),
(22, 'GBG', '5', '3.00', '3.00', 28, '2017-08-22 12:29:17', '1485961287-TISSOT-TRADITION-QUARTZ-T063610A-Watch(2500).jpg', '', '', '', 0, '', 0),
(23, 'hGF', '4', '54.00', '45.00', 28, '2017-08-22 12:29:41', '1485962924-TissotT-Classic-Couturier-Chronograph-Automatic-T032527A-Watch(5500).jpg', '', '', '', 0, '', 0),
(24, 'GJG', '45', '54.00', '54.00', 28, '2017-08-22 12:29:58', '1486016604-Tissot-Couturier-Silver-Dial-Mens-T035627A-Watch(4900).jpg', '', '', '', 0, '', 0),
(25, 'HGD', '3', '34.00', '4.00', 29, '2017-08-22 12:31:37', '1477911488-TAG-HEUER-Formula-1-Calibre-16-Chronograph-Watch(5800).jpg', '', '', '', 0, '', 0),
(26, 'hD', '34', '34.00', '34.00', 29, '2017-08-22 12:36:08', '1478245195-TAG-Heuer-Carrera-Chronograph-McLaren-Watch(4900).JPG', '', '', '', 0, '', 0),
(27, 'GDF', '35', '35.00', '35.00', 29, '2017-08-22 12:36:24', '1480680680-TAG-HEUER-CARRERA-SPACEX-1887-WATCH(5500).jpg', '', '', '', 0, '', 0),
(28, 'FSD', '3', '3.00', '3.00', 29, '2017-08-22 12:36:39', '1480680999-TAG-HEUER-CARRERA-1887-50th-Anniversary-WATCH(5000).jpg', '', '', '', 0, '', 0),
(30, 'GFDDG', '342', '43.00', '34.00', 30, '2017-08-22 12:38:05', '1478688544-SevenFriday-V-Series-Watch(5100).JPG', '', '', '', 0, '', 0),
(31, 'hjgf', '4', '35.00', '3.00', 30, '2017-08-22 12:41:00', '1487074450-Sevenfriday-Fresh-From-The-Press-Industrial-Series-Limited-Edition-Watch(3800).jpg', '', '', '', 0, '', 0),
(32, 'fdggf', '5', '53.00', '53.00', 30, '2017-08-22 12:41:15', '1487074769-SevenFriday-V-Series-Limited-Edition-Watch-02(4200).jpg', '', '', '', 0, '', 0),
(33, 'gdsf', '43', '43.00', '34.00', 31, '2017-08-22 12:42:33', '1477570454-Rolex-Daytona-Cosmograph-40mm-Yellow-Gold-116528-GoldCrystals-Diamonds(5500).jpg', '', '', '', 0, '', 0),
(34, 'gfdg', '53', '53.00', '64.00', 31, '2017-08-22 12:42:54', '1477913228-Rolex-Daytona-Cosmograph-All-Black-Automatic-Watch(4800).JPG', '', '', '', 0, '', 0),
(35, 'yjh', '6', '56.00', '65.00', 31, '2017-08-22 12:43:08', '1478244198-Rolex-Milgauss-Blue-Dial-Watch(5000).JPG', '', '', '', 0, '', 0),
(36, 'nfgngf', '64', '65.00', '56.00', 31, '2017-08-22 12:43:24', '1478338997-Rolex-Oyster-Perpetual-Cosmograph-2016-Limited-Edition-Watch(4600).JPG', '', '', '', 0, '', 0),
(37, 'gdsfgh', '342', '43.00', '43.00', 33, '2017-08-22 12:44:05', '1477570454-Rolex-Daytona-Cosmograph-40mm-Yellow-Gold-116528-GoldCrystals-Diamonds(5500).jpg', '', '', '', 0, '', 0),
(38, 'gsfg', '43', '3.00', '35.00', 33, '2017-08-22 12:44:23', '1478244198-Rolex-Milgauss-Blue-Dial-Watch(5000).JPG', '', '', '', 0, '', 0),
(39, 'khj,', '34', '34.00', '34.00', 33, '2017-08-22 12:44:57', '1478244198-Rolex-Milgauss-Blue-Dial-Watch(5000).JPG', '', '', '', 0, '', 0),
(40, 'gsdf', '43', '3553.00', '35.00', 33, '2017-08-22 12:45:11', '1480330211-Rolex-Oyster-Perpetual-Milgauss-Watch(6500).JPG', '', '', '', 0, '', 0),
(41, 'GFDh', '35', '35.00', '35.00', 32, '2017-08-22 12:45:59', '1485003119-Richard-Mille-RM011-FM-Limited-Edition-Watch(8850).jpg', '', '', '', 0, '', 0),
(42, 'gregh', '45', '54.00', '54.00', 32, '2017-08-22 12:46:15', '1485003610-Richard-Mille-RM-011-FM-Rose-Gold-Limited-Edition-Watch(8850).jpg', '', '', '', 0, '', 0),
(43, 'htrh', '54', '4.00', '44.00', 32, '2017-08-22 12:46:29', '1485004776-Richard-Mille-RM-011-FM-Silver-Limited-Edition-Watch(8500).jpg', '', '', '', 0, '', 0),
(44, 'jyt', '54', '54.00', '45.00', 32, '2017-08-22 12:46:43', '1485330197-Richard-Mille-RM-052-Skull-Rose-Gold-Limited-Edition-Watch(5000).jpg', '', '', '', 0, '', 0),
(45, 'grew', '45', '54.00', '45.00', 34, '2017-08-22 12:47:16', '1485329804-PORSCHE-DESIGN-CHRONOGRAPH-LIMITED-EDITION-WATCH(5600).jpg', '', '', '', 0, '', 0),
(46, 'gfds', '3', '2.00', '2.00', 11, '2017-08-23 12:40:21', '1478243850-Audemars-Piguet-Royal-Oak-Carbon-Concept-Chrono-and-Tourbillon-Watch(5400).JPG', '', '', '', 0, '', 0),
(47, 'gfdsfsd', '3', '2.00', '2.00', 11, '2017-08-23 12:40:48', '1481287598-Breitling-1884-Chronometre-Watch(3800).JPG', '', '', '', 0, '', 0),
(49, 'fsddsv', '243', '43.00', '43.00', 11, '2017-08-23 12:41:12', '1478761314-Burberry-BU9005-Men-Bracelet-Watch(4000).JPG', '', '', '', 0, '', 0),
(50, 'dsv', '342', '43.00', '34.00', 11, '2017-08-23 12:41:25', '1480573997-Bvlgari-L9030-Chronograph-Limited-Edition-Watch(4500).jpg', '', '', '', 0, '', 0),
(51, 'sbfsgsg', '43', '43.00', '4.00', 11, '2017-08-23 12:41:37', '1480502678-Calvin-Klein-Moon-Full-Black-Limited-Edition-Watch(3000).jpg', '', '', '', 0, '', 0),
(52, 'dvs', '43', '433.00', '4.00', 11, '2017-08-23 12:41:52', '1449652992-CARTIER-BALLON-WATCH-MY-CW03(4300).jpg', '', '', '', 0, '', 0),
(53, 'vds', '4', '4343.00', '4.00', 11, '2017-08-23 12:42:07', '1482914723-Corum-Golden-Bridge-Automatic-Watch(5000).jpg', '', '', '', 0, '', 0),
(54, 'dfsf', '4', '43.00', '43.00', 11, '2017-08-23 12:42:22', '1486018196-De-Lawrance-Ultra-Slim-White-Dial-Watch-GBX-1074(1150).jpg', '', '', '', 0, '', 0),
(55, 'dsf', '43', '43.00', '34.00', 11, '2017-08-23 12:42:39', '1480500669-Emporio-Armani-Men-s-white-and-Gold-Chronograph-Watch(4500).jpg', '', '', '', 0, '', 0),
(57, 'fsddf', '43', '34.00', '43.00', 11, '2017-08-23 12:43:01', '1480496077-Scuderia-Ferrari-Sport-Carbon-Tachymeter-Chrono-Watch(5000).jpg', '', '', '', 0, '', 0),
(59, 'vdsa', '23', '32.00', '32.00', 44, '2017-08-23 12:56:04', '1478243850-Audemars-Piguet-Royal-Oak-Carbon-Concept-Chrono-and-Tourbillon-Watch(5400).JPG', '', '', '', 0, '', 0),
(60, 'ad', '23', '32.00', '32.00', 44, '2017-08-23 12:56:25', '1478267214-ROYAL-OAK-CONCEPT-GMT-TOURBILLON-Watch(5400).JPG', '', '', '', 0, '', 0),
(61, 'qe', '23', '32.00', '23.00', 44, '2017-08-23 12:56:39', '1478333885-AUDEMARS-PIGUET-ROYAL-SKELETON-GOLD-WATCH(8700).JPG', '', '', '', 0, '', 0),
(62, 'we', '32', '23.00', '23.00', 44, '2017-08-23 12:56:56', '1478336249-Audemars-Piguet-Royal-OAK-Chronograph-WATCH(8700).JPG', '', '', '', 0, '', 0),
(63, 'ewf', '24', '24.00', '42.00', 45, '2017-08-23 12:57:16', '1481287598-Breitling-1884-Chronometre-Watch(3800).JPG', '', '', '', 0, '', 0),
(64, 'vewgfes', '42', '4224.00', '42.00', 45, '2017-08-23 12:57:27', '1481290599-Breitling-1884-Chronometre-A24322-Automatic-Watch(4600).JPG', '', '', '', 0, '', 0),
(65, 'dasfd', '23', '23.00', '32.00', 45, '2017-08-23 12:57:44', '1485947382-Breitling-Chronometer-Navitimer-Brown-Dial-Chronograph-Watch(4500).jpg', '', '', '', 0, '', 0),
(66, 'fdsv', '422', '42.00', '42.00', 46, '2017-08-23 12:58:05', '1478761314-Burberry-BU9005-Men-Bracelet-Watch(4000).JPG', '', '', '', 0, '', 0),
(67, 'vvew', '24', '42.00', '24.00', 47, '2017-08-23 12:58:30', '1480573997-Bvlgari-L9030-Chronograph-Limited-Edition-Watch(4500).jpg', '', '', '', 0, '', 0),
(68, 'dvsd', '23', '232.00', '3.00', 47, '2017-08-23 12:58:41', '1480586318-Bvlgari-Po-0805-Chronograph-Premium-Grade(4500).jpg', '', '', '', 0, '', 0),
(69, 'gfdsg', '24', '42.00', '42.00', 47, '2017-08-23 12:58:59', '1484999784-BVLGARI-DIAGONO-CHRONOGRAPH-DG-42-SC-CH-WATCH(4200).jpg', '', '', '', 0, '', 0),
(70, 'fhgdf', '34', '43.00', '34.00', 47, '2017-08-23 12:59:15', '1484999784-BVLGARI-DIAGONO-CHRONOGRAPH-DG-42-SC-CH-WATCH(4200).jpg', '', '', '', 0, '', 0),
(71, 'bvsfgfd', '34', '34.00', '34.00', 47, '2017-08-23 12:59:27', '1485952802-Bvlgari-Carbon-Gold-Two-Tone-Watch(4500).jpg', '', '', '', 0, '', 0),
(72, 'gessd', '24', '42.00', '42.00', 48, '2017-08-23 12:59:46', '1480502678-Calvin-Klein-Moon-Full-Black-Limited-Edition-Watch(3000).jpg', '', '', '', 0, '', 0),
(73, 'vdsv', '42', '42.00', '24.00', 49, '2017-08-23 13:00:44', '1449652992-CARTIER-BALLON-WATCH-MY-CW03(4300).jpg', '', '', '', 0, '', 0),
(74, 'dsgfds', '32', '23.00', '23.00', 49, '2017-08-23 13:00:57', '1487069139-Cartier-Diamond-732604DX-Brown-Leather-Mens-Watch(3200).jpg', '', '', '', 0, '', 0),
(75, 'dvds', '24', '24.00', '24.00', 49, '2017-08-23 13:01:20', '1487070000-Cartier-Ballon-Bleu-White-Dial-Leather-Mens-Watch(4300).jpg', '', '', '', 0, '', 0),
(76, 'fdsf', '42', '42.00', '24.00', 50, '2017-08-23 13:01:37', '1482914723-Corum-Golden-Bridge-Automatic-Watch(5000).jpg', '', '', '', 0, '', 0),
(77, 'fadsf', '342', '42.00', '24.00', 51, '2017-08-23 13:02:12', '1486018196-De-Lawrance-Ultra-Slim-White-Dial-Watch-GBX-1074(1150).jpg', '', '', '', 0, '', 0),
(78, '24', '32', '2.00', '23.00', 51, '2017-08-23 13:02:29', '1486020039-De-Lawrance-Ultra-Slim-White-Dial-Watch=GBX-1073(1150).jpg', '', '', '', 0, '', 0),
(79, 'rfew', '2', '24.00', '24.00', 51, '2017-08-23 13:02:39', '1486020473-De-Lawrance-Ultra-Slim-Black-Dial-Watch-GBX-1073(1150).jpg', '', '', '', 0, '', 0),
(80, 'fasfs', '22', '22.00', '22.00', 52, '2017-08-23 13:03:02', '1480500669-Emporio-Armani-Men-s-white-and-Gold-Chronograph-Watch(4500).jpg', '', '', '', 0, '', 0),
(81, 'casc', '32', '23.00', '23.00', 52, '2017-08-23 13:03:23', '1480501114-Emporio-Armani-AR5981-Black-Dial-Classic-Chrono-Watch(4500).jpg', '', '', '', 0, '', 0),
(82, 'vdvs', '22', '22.00', '22.00', 52, '2017-08-23 13:03:36', '1480502178-Emporio-Armani-Sport-Mens-Brown-AR5922-Watch(4500).jpg', '', '', '', 0, '', 0),
(83, 'fasff', '32', '23.00', '32.00', 53, '2017-08-23 13:26:08', '1480496077-Scuderia-Ferrari-Sport-Carbon-Tachymeter-Chrono-Watch(5000).jpg', '', '', '', 0, '', 0),
(84, 'casvc', '32', '23.00', '23.00', 53, '2017-08-23 13:26:18', '1480501791-Ferrari-Scuderia-Paddock-Chronograph-Black-Dial-Watch(5500).jpg', '', '', '', 0, '', 0),
(85, 'vdas', '24', '23.00', '23.00', 54, '2017-08-23 13:27:17', '1478675413-GC-Guess-X72025g7s-Sapphire-Crystal-Chronograph-Watch(5750).JPG', '', '', '', 0, '', 0),
(86, 'gdsg', '23', '23.00', '23.00', 54, '2017-08-23 13:27:42', '1478678660-Guess-Rigor-Gold-Day-Date-W0218G1-Chronograph-Watch(5300).JPG', '', '', '', 0, '', 0),
(88, 'fdsffsd', '42', '34.00', '34.00', 54, '2017-08-23 13:27:56', '1478690483-Guess-w0674g2-Chronograph-Watch(3800).JPG', '', '', '', 0, '', 0),
(89, 'fga', '24', '34.00', '34.00', 55, '2017-08-23 13:28:18', '1477637465-Hublot-Geneve-Classic-Fusion-Arabic-Chronograph-Limited-Edition-Watch(4050).jpg', '', '', '', 0, '', 0),
(90, 'wegwe', '432', '34.00', '34.00', 55, '2017-08-23 13:28:43', '1477638483-Hublot-Limited-Edition-Big-Bang-Ferrari-Chronograph-Watch(5900).jpg', '', '', '', 0, '', 0),
(91, 'bsa', '24', '43.00', '34.00', 55, '2017-08-23 13:28:55', '1477649204-Hublot-Classic-Fusion-Arabic-Chronograph-2016-Limited-Edition-Watch(4050).jpg', '', '', '', 0, '', 0),
(93, 'dsff', '32', '23.00', '23.00', 56, '2017-08-23 14:11:39', '1485001049-IWC-Big-Pilot-Top-Gun-Watch(6350).jpg', '', '', '', 0, '', 0),
(94, '1qwd', '32', '32.00', '23.00', 56, '2017-08-23 14:11:50', '1485001422-IWC-SCHAFHAUSEN-TOP-GUN-MIRAMAR-CHRONOGRAPH-WATCH(5000).jpg', '', '', '', 0, '', 0),
(95, 'fesf', '32', '2323.00', '23.00', 56, '2017-08-23 14:12:02', '1485174306-IWC-Fliegeruhr-Chronograph-Watch(4900).jpg', '', '', '', 0, '', 0),
(96, 'gsd', '24', '34.00', '43.00', 57, '2017-08-23 14:12:23', '1467189341-Longines-Retrograde-Watch-03(4500).jpg', '', '', '', 0, '', 0),
(97, 'few', '23', '34.00', '34.00', 57, '2017-08-23 14:12:36', '1467189342-Longines-Retrograde-Watch-04(4500).jpg', '', '', '', 0, '', 0),
(98, 'gfdsgg', '43', '34.00', '34.00', 58, '2017-08-23 14:14:45', '1477571293-Louis-Vuitton-Chronometer-TAMBOUR-BROWN-Watch(4500).jpg', '', '', '', 0, '', 0),
(99, 'gsfqw', '234', '34.00', '43.00', 58, '2017-08-23 14:14:59', '1478007467-Louis-Vuitton-Chronometer-Tambour-LV277-Brown-Watch(4800).jpg', '', '', '', 0, '', 0),
(100, 'r23fdew', '32', '34.00', '34.00', 58, '2017-08-23 14:15:23', '1478691974-Louis-Vuitton-Tambour-Chronograph-Rose-Gold-Watch(5000).JPG', '', '', '', 0, '', 0),
(101, 'fewfwe', '24', '34.00', '34.00', 59, '2017-08-23 14:15:44', '1484993581-Montblanc-Flyback-Chronograph-G-818-Watch(3100).jpg', '', '', '', 0, '', 0),
(102, 'fwfs', '42', '34.00', '34.00', 59, '2017-08-23 14:16:11', '1484994622-Montblanc-Timewalker-Chronograph-Auto-atic-N-168-Watch(3100).jpg', '', '', '', 0, '', 0),
(103, 'vsdv', '24', '23.00', '23.00', 59, '2017-08-23 14:16:22', '1484995349-MONTBLANC-HEMISPHERES-CHRONOGRAPH-N-168-Watch(3100).jpg', '', '2', '', 0, '', 0),
(104, 'bsvsdv', '24', '43.00', '34.00', 60, '2017-08-23 14:16:45', '1485945821-Movado-Bold-G2337M-Two-Tone-Mens-Watch(3000).jpg', '', '', '', 0, '', 0),
(105, 'cdc', '34', '43.00', '43.00', 60, '2017-08-23 14:16:56', '1485946127-Movado-Bold-2-Black-Edition-MensWatch(3500).jpg', '', '', '', 0, '', 0),
(107, 'fewfweg', '34', '34.00', '34.00', 60, '2017-08-23 14:17:25', '1485946357-Movado-Bold-Rose-Gold-And-Black-Mens-Watch(3500).jpg', '', ' ', '', 0, '', 0),
(108, 'sdfffd', '34', '34.00', '34.00', 61, '2017-08-23 14:17:59', '1477572905-Omega-Seamaster-Professional-PLANET-OCEAN-600-CHRONOMETER-CHRONOGRAPH-Watch(4300).jpg', '', '', '', 0, '', 0),
(109, 'g43g', '3', '33.00', '3.00', 61, '2017-08-23 14:18:11', '1477655212-Omega-Seamaster-Planet-Ocean-600m-CO-AXIAL-MASTER-CHRONOMETER-CHRONOGRAPH-Watch(4200).jpg', '', '', '', 0, '', 0),
(110, 'fwq2', '42', '34.00', '43.00', 61, '2017-08-23 14:18:24', '1477656260-Omega-Seamaster-Planet-Ocean-600m-CO-AXIAL-MASTER-CHRONOMETER-CHRONOGRAPH-Watch(4800).jpg', '', '', '', 0, '', 0),
(111, 'zdvdz', '3', '32.00', '32.00', 62, '2017-08-23 14:19:42', '1477744242-Panerai-LUMINOR-SUBMERSIBLE-AUTOMATIC-Op-6817-Watch(10000).jpg', '', '', '', 0, '', 0),
(112, 'vasas', '32', '23.00', '23.00', 62, '2017-08-23 14:20:00', '1482916089-PANERAI-LUMINOR-AUTOMATIC-GMT-POWER-RESERVE-INDICATOR-PAM-321-Watch(7800).jpg', '', '', '', 0, '', 0),
(113, 'sacsa', '32', '432.00', '233.00', 62, '2017-08-23 14:20:18', '1482921143-PANERAI-LUMINOR-Flyback-1950-AUTOMATIC-Watch(5500).jpg', '', '', '', 0, '', 0),
(115, 'new1', '12', '100.00', '200.00', 28, '2017-08-25 19:18:38', '400(2).png', '', '', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) unsigned NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(25,2) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(11) NOT NULL,
  `image` varchar(255) DEFAULT 'no_image.jpg',
  `status` int(1) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_level` (`user_level`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `user_level`, `image`, `status`, `last_login`) VALUES
(1, ' Admin User', 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'no_image.jpg', 1, '2017-12-02 17:42:11'),
(2, 'Special User', 'special', 'ba36b97a41e7faf742ab09bf88405ac04f99599a', 2, 'no_image.jpg', 1, '2017-08-06 15:53:49'),
(3, 'Default User', 'user', '12dea96fec20593566ab75692c9949596833adc9', 3, 'no_image.jpg', 1, '2015-09-27 22:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(150) NOT NULL,
  `group_level` int(11) NOT NULL,
  `group_status` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_level` (`group_level`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `group_name`, `group_level`, `group_status`) VALUES
(1, 'Admin', 1, 1),
(2, 'special', 2, 1),
(3, 'User', 3, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_products` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `SK` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`user_level`) REFERENCES `user_groups` (`group_level`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
