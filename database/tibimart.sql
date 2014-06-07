-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2014 at 11:14 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tibimart`
--
CREATE DATABASE IF NOT EXISTS `tibimart` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `tibimart`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_product`, `quantity`, `price`, `total_price`, `ip`, `create_date`) VALUES
(1, 14, 4, 88889, 355555, '127.0.0.1', 1402021204);

-- --------------------------------------------------------

--
-- Table structure for table `cate_product`
--

CREATE TABLE IF NOT EXISTS `cate_product` (
  `id_cate` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `show_home` int(11) NOT NULL,
  PRIMARY KEY (`id_cate`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cate_product`
--

INSERT INTO `cate_product` (`id_cate`, `title`, `show_home`) VALUES
(1, 'Sản phẩm làm đẹp', 1),
(2, 'Sản phẩm làm đẹp', 0),
(4, 'ssss', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('02c8b79662e3fa84815fcfae28802866', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402131197, ''),
('0634efd9ee613185f1d5e98b698fd244', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127287, ''),
('06eaa9df3d3e19e0fbc134db068af437', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402131197, ''),
('0cd5750e559642939586b2abb14a249d', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402131265, ''),
('1127e69fea8863511dbd2b4d04b5ba6e', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127085, ''),
('15338eac763b6e1b116756941d515b6b', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127492, ''),
('160e9ecec48a150a44527f6786e4715a', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402131033, ''),
('17d38ca1e905bcdbd29c37210917baa3', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127441, ''),
('1957f11964cab4a9fc8e7f15d7e1a2e1', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402125847, ''),
('1a3e52729a02fbb8cb54de5555c14000', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402131209, ''),
('1ba0e6177baeee248c2c489df065be14', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127499, ''),
('1cba315dc829aa7cf56ad64a7be2ca06', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127420, ''),
('23b1c772ca631b844a88db91da0ab5f4', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402131029, ''),
('267a4621d36970ababf02223bb44e376', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402125490, ''),
('28de40e6c76a8ca8c51eac776f68fabb', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127218, ''),
('2c036f2d9240fd9d759a50d8950cd204', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127210, ''),
('2f669b217ad0ac31f00b85909d07c726', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127284, ''),
('38fc76b21799b182e79392e7611c9974', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402130200, ''),
('3b86405ee9e54526125eca5f39ea9246', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402125370, ''),
('3fee48ff77cbd98b998f5d3f1035af8f', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402125753, ''),
('44ef51a8e1dd0bb841125483288b53bc', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127249, ''),
('489af6e04951cdfd8148a6e680204e07', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127088, ''),
('49b1b5a4f6e9523612fe41efc77c2660', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402125469, ''),
('49ebeb0bc442ab5f643321cadc388629', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402125763, ''),
('548e14663e7ae9cfbacc2319101c0b99', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402131047, ''),
('55cdc9111f22edac5d67d75c9f0c1b26', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402131025, ''),
('576dffadecbd643d8132efbcf75bb6e7', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402125368, ''),
('5890f74c705f9fb5aed4e008880072ff', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402125926, ''),
('58ce3828343a85a7b8441cddabcc13fe', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402125487, ''),
('5cdc9adb5b43a6e8ab6961480ae4d24d', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127489, ''),
('66563d8c2e5f442ccdb29f6f2491c10e', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127281, ''),
('67c93eb7800abea3013464d2d476c94f', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127049, ''),
('6aca4c83ac8772fe9dcfd88adf3bde85', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127217, ''),
('6ae293df829e9927faacc34f9456a80c', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127418, ''),
('6cf1d90709caf450f97a22efda735425', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127045, ''),
('6de301f8a86f26abd545cf29fe99de0c', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402126915, ''),
('6e1cd3a55be15ae3519914c1c2bcbc68', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402125804, ''),
('6e2acb2422b1374f7c0cfc219636d8db', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127055, ''),
('6eb9bffb5750113fa15291706e8cde39', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127285, ''),
('70e06b72ce6e4da611223e32a37f4761', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127487, ''),
('71ce79d4e5bf8f1bc76b3d2b220b0f86', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127489, ''),
('75ddab0f2e932b8faf85b1c8886344bf', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402126712, ''),
('77b05a593263b560f8ddcad3578ec802', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402126919, ''),
('78dcef0bfbb27b69b6730f1d364e88a9', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402130525, ''),
('79cb1771b78b40ec1d5e06505521355e', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402130905, ''),
('84c6ac56e290b33f25504123a63de2a3', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402126716, ''),
('85c9c03f3f197c1984e544d926fbaa54', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402125378, ''),
('873fc7944c99a59906a6cc3f55527eee', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402125763, ''),
('8a2d37720cd345fbaa486b4d51ef1f42', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402130080, ''),
('9737ad9755689ce4b6a82fbb8ef490fe', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402125633, ''),
('9a3b77fea441233e1b9f8dfbf45ea9e5', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127083, ''),
('9b437cb33fe83d4604bf71411edf6b09', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127500, ''),
('9cf2c571cad62b924184166a05b80301', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127215, ''),
('9f55d3a5faf41416cf34fbf7d4e3c254', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402126712, ''),
('9fab16e9f30803616428ca902f79ad9d', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127213, ''),
('a19d1d1d0252c370f3b2dbde4c9ebc47', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402128316, ''),
('a7385c8c255420385c68f75517ab69bd', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402131187, ''),
('a8615a47b259f3a647332a20e6f14ba0', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402131030, ''),
('a8b4fb02b9c0f92be7ffba08b4908044', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127242, ''),
('a9f28309538873da1acee8bdab50cf05', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402130351, ''),
('aa02fae89cd4f7ab90fa6ed3e2ae76c5', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402126716, ''),
('aa39883ed553d2fc78dfeb3fe7b25348', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402125482, ''),
('ab8e4f3ad0d0d5d7c3f907115e0e2ff2', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127082, ''),
('acf07a49d91183a2478c48eb9c86b961', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127496, ''),
('adffe7be8849366e213668e78b274442', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402130083, ''),
('b1990dd80eac16aa87a8d3084a21983a', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402129964, ''),
('b2c627d27bb6e3d7f95774ffb17f41d7', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402129706, ''),
('b80898f49bfef0722295341d1a72d099', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127190, ''),
('b985980844c6d6e8444a11646789fe99', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127262, ''),
('b9f3ca26b1f49bc21c893fa10fb9dc9f', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127213, ''),
('ba10370287b234d760e83ebb8301f6f1', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127088, ''),
('bea8618805d1eb666cda8b432c50bc98', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402125630, ''),
('c09fe1a6da3864f561c762bd5a9e8ab0', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402131032, ''),
('c0dd604c9e2cc4b3c34e93f0c75b7eaa', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402130905, ''),
('c3dcbb7b34b29f740eef2a55da61f60b', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402125632, ''),
('ca41286fc1c0ea2906199ff553d7de13', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127208, ''),
('cdecf1bd9ad22a6f4c92b14d2f470318', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402128378, ''),
('ceffd4331c3757b30e07715e26529ef4', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402125799, ''),
('d000c5ab46a72709ccad0277a932a70a', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402130910, ''),
('d253685f17cff4fa7d62918dbc1a73d3', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127417, ''),
('d754c567a3069b732b17a8d1e1f21ed6', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402131209, ''),
('da4f9a91b0664cfe3367afc36fec5f81', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127246, ''),
('db7cc75df2c747014a5592ff0fabd9e6', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127262, ''),
('e564e866c59defbd60666a5f2e0bcd0e', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402129875, ''),
('e978830603e88f652602a5fc66bebb41', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402126705, ''),
('ed798a66d640eca052133920aa9ee91b', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402129907, ''),
('f41ee911d05d4b059f424db454125ed9', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127259, ''),
('f4a7a95cb4c4c22af6b3ace60104a13d', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127246, ''),
('f60409a28388c815e685591c4295b2be', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402125421, ''),
('f9f58f8c51b2c6663246919d9cf98828', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402127415, ''),
('fd1a6db526f00bf0c509e341d482361e', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402130911, ''),
('fd25f53fdc05a661b6c83026fc42cee6', '::1', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', 1402125853, '');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `name`, `title`, `email`, `question`, `answer`, `status`, `create_date`) VALUES
(1, '1', 'test cái', '1', '1', '<p>Ch&uacute;ng t&ocirc;i đ&atilde; trả lời c&acirc;u hỏi n&agrave;y của c&aacute;c bạn</p>\n', 1, 123),
(2, 'abc abc', 'Tôi muốn hỏi', 'abc abc', '<p>abc abc abc abc</p>\r\n', '<p>Chúng tôi đã trả lời câu hỏi này của các bạn</p>\n', 1, 1395481112),
(3, 'sss', 'ss', 'sss', 'sss', '', 0, 1401942203),
(4, 'giangbeo91', 'ss', 'beobeboi91@gmail.com', 'ssssss', '', 0, 1401942230);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_customer`
--

CREATE TABLE IF NOT EXISTS `order_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `fee_ship` int(11) NOT NULL,
  `ship_type` int(11) NOT NULL,
  `total_price_order` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `ip_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_id` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_account` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `account_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `name_account`, `account_number`, `image`) VALUES
(1, '2', '2', '2', '8d7067306daf7a29d280ba3b2a88773e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `id_cate` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `title`, `content`, `id_cate`, `price`, `image`, `stock`, `create_date`) VALUES
(1, 'Kem đánh răng người lớn', 'sss', 1, '160000', '068e80da9e71482db5912478760108dc.JPG', 10, 0),
(2, 'Ủ tóc 300ml Ganier Fructis Oil repair 3', 'Giá khuyến mại	200,000 VND\r\nGiá cũ	220,000 VND\r\nTrạng thái	Còn hàng\r\nNhãn hiệu	Ganier Fructis\r\nMàu sắc	Mẫu mới màu vàng\r\nNơi sản xuất	Đức', 1, '200000', 'd61c6da7e8984bdaaaa8c0df6c72bc8a.jpg', 10, 0),
(3, 'Kem dưỡng da Nivea 300ml', 'Giá khuyến mại	180,000 VND\r\nGiá cũ	220,000 VND\r\nTrạng thái	còn hàng\r\nNhãn hiệu	Nivea\r\nNơi sản xuất	Đức', 1, '180000', '862fdab67e1e4cc5aa3855b57ccc546f.png', 10, 0),
(4, 'Bộ dầu gội đầu và kem xả Ganier Fructis', 'Giá bán	300,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Ganier Fructis\r\nNơi sản xuất	Đức', 1, '300000', '06dfaa02730146e8805ba02703e84388.JPG', 10, 0),
(5, 'Kem dưỡng thể Lacoste', 'Giá bán	120,000 VND\r\nTrạng thái	Còn hàng\r\nNhãn hiệu	Lacoste\r\nNơi sản xuất	Đức', 1, '120000', 'd5299d6cf30e4b2cb24aa3e42b3b01c7.JPG', 10, 0),
(6, 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 'effd3139933d4bf287c27846d725e616.JPG', 11, 0),
(7, 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 'effd3139933d4bf287c27846d725e616.JPG', 11, 0),
(8, 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 'effd3139933d4bf287c27846d725e616.JPG', 11, 0),
(9, 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 'effd3139933d4bf287c27846d725e616.JPG', 11, 0),
(10, 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 'effd3139933d4bf287c27846d725e616.JPG', 11, 0),
(11, 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 'effd3139933d4bf287c27846d725e616.JPG', 11, 0),
(12, 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 'effd3139933d4bf287c27846d725e616.JPG', 11, 0),
(13, 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 'effd3139933d4bf287c27846d725e616.JPG', 11, 0),
(14, 'sss', '<p>ssssssssss</p>\n', 2, '111111', '58d2eca970d596818ad4855c85c1755e.jpg', 100, 1401946622),
(15, 'ssss', '', 0, '0', '0', 100, 1402125763);

-- --------------------------------------------------------

--
-- Table structure for table `sale_off`
--

CREATE TABLE IF NOT EXISTS `sale_off` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `id_product` int(11) NOT NULL,
  `percent` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exp_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `sale_off`
--

INSERT INTO `sale_off` (`id`, `title`, `content`, `id_product`, `percent`, `img`, `exp_date`) VALUES
(10, 'Giảm giá ủ tóc', '<p>Giảm gi&aacute; ủ t&oacute;c</p>\n', 2, 10, '', '2014-06-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_bin NOT NULL,
  `address` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `yahoo` varchar(255) COLLATE utf8_bin NOT NULL,
  `skype` varchar(255) COLLATE utf8_bin NOT NULL,
  `bank` varchar(255) COLLATE utf8_bin NOT NULL,
  `stk` varchar(255) COLLATE utf8_bin NOT NULL,
  `sex` int(11) NOT NULL,
  `province` int(11) NOT NULL,
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `birthday` varchar(255) COLLATE utf8_bin NOT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '3',
  `login_id` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `total_like` int(11) NOT NULL,
  `account_type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `phone`, `address`, `password`, `email`, `activated`, `yahoo`, `skype`, `bank`, `stk`, `sex`, `province`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`, `birthday`, `img`, `role`, `login_id`, `total_like`, `account_type`) VALUES
(1, 'giangbeo', 'Nguyễn Trường Giang', '01667039939', 'HCM', '$2a$08$av0xeUt7pYqEymtq0ENPN.65FaINVis/64LmuohuAdt8ND8exqVs2', 'nguyentruonggiang91@gmail.com', 1, '', '', '', '', 0, 79, 0, NULL, NULL, NULL, NULL, 'ad9147af77ea0a71cb1045eb8c144048', '::1', '2014-06-07 09:16:18', '2014-03-21 08:25:47', '2014-06-07 07:16:18', '', '', 1, '', 0, 0),
(2, 'BeoBeBoi', 'Nguyên Trường Giang', '01667039939', 'HCM', '$2a$08$av0xeUt7pYqEymtq0ENPN.65FaINVis/64LmuohuAdt8ND8exqVs2', 'beobeboi91@gmail.com', 0, 's', 's', 'Vietcombank', '0341005245193', 0, 1, 0, NULL, NULL, NULL, NULL, 'ab37717509a2f5b5e6c4335e8e960710', '::1', '0000-00-00 00:00:00', '2014-03-27 16:59:43', '2014-03-28 04:13:34', '2014/03/05', '', 4, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE IF NOT EXISTS `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE IF NOT EXISTS `user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `country`, `website`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_staff` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `name`, `is_staff`) VALUES
(1, 'Administrator', 1),
(2, 'Staff', 1),
(3, 'Member', 0),
(4, 'Volunteer', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
