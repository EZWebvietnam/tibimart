-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2014 at 05:30 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tibimart`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cate_product`
--

INSERT INTO `cate_product` (`id_cate`, `title`, `show_home`) VALUES
(1, 'Sản phẩm làm đẹp', 1),
(2, 'Sản phẩm làm đẹp', 1);

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
('00109a931c1185ed7e8eb8dd02e712e9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946788, ''),
('00a1834f9b49aaee72a7bc8047ee7434', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946644, ''),
('06e33a01b490352b80a5514b30b34d2e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946331, ''),
('071377ecc5be23412e37f6acacdd7cbe', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946318, ''),
('07b7d532d4d1ec3e937467087e358d7d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402025107, ''),
('07c5711658566df706d6499295d790fb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402024957, ''),
('0ca78ba08743cf8caa98cd8b234ec4e2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946116, ''),
('0fa770cb9ba2147b13afe9bb2d4ca464', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946827, ''),
('13dba36f20096001e8dbc2945bdd109b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946597, ''),
('174f512f78e0388beb87b45d2fa0af0a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946653, ''),
('1f8be14c470972a4eb3283a352246da2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946075, ''),
('260f2ee0b24d604288d3d1b3fb190e46', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946662, ''),
('2688d066a4df1cfdfc81362e0109ff0c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402025052, ''),
('26a4010cd230f9f1f96e22c475bd4e76', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401948703, ''),
('27fbb8c268bf36b7bcd6078b9c0203f4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946649, ''),
('29a048672a266d76fcabf5356fc07cf3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946660, ''),
('2b21acc99193de6309b5fdc1d2f2e4d8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402025383, ''),
('2ca2238e95044002e08947ef4c24c587', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946131, ''),
('3374c80a51e16d11d52fb7ee4dd093e6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401948618, ''),
('3515009d640437507a28437fe1f28502', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946400, ''),
('39d1dfdf22afccec04f2a292dc98348a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402025403, ''),
('3a41dcc49af0a14d3a32bbcb3e83f486', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402025188, ''),
('3ac655c7a9d0f2adc39567cca0cd41bf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401942585, ''),
('3b04a726ae72c63837e8ba4f6d963f2e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401948568, ''),
('414a685dbbf7575ab13261f169036cc5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946249, ''),
('4af2e9567440121c3ead8ad656e03c0c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946841, ''),
('5a737eb54d7381ec97a7953c13e1dfcc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401948666, ''),
('5d7afbb0511ace21766f032fa8d2036c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401948703, ''),
('60e0225e9c9301cbcdaa4159c2b24d5a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401948578, ''),
('62824d64077907f863006c9548f3891f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946119, ''),
('6578ba94ec7be08878dd42b7962d54c5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946600, ''),
('69045c6e77712d32fb34b6578312664b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946308, ''),
('698d302b8dd7946c686280f46a7e4c56', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946792, ''),
('6a67357503986bd96a358597ded8468b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401942609, ''),
('6ad738771043e90dd6e5f7c4308c398e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946123, ''),
('6f69b6d527128c096ad195f5b577c38a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402025357, ''),
('72acdd0b5d12b06bd240539d850f0f9e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402025381, ''),
('781c72261867e1b63b2bfee4d4ff2dfb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946574, ''),
('7963b525c49773721258212d85dacf78', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946602, ''),
('7a4dcd2ccb3643536b22b7cf59505a0a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401948663, ''),
('7d7bc6f2c09ab2e181d799456d5b33c6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401948663, ''),
('8534a10b7daaa122eb299db863183e86', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946438, ''),
('860a4aa42293443970c645ea3ee4356c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401942582, ''),
('8a02deede0e90cda5ab5ed14c6d36b9a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402025350, ''),
('8edb317ab9a63073cfbdb05b0cf5d183', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946397, ''),
('9125b76faf392648caf5d8edd742beaa', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946338, ''),
('913335f588506795564c5f415e9e2556', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946326, ''),
('9399a61fc87a4cbc9ed43664a918dbe1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402024566, ''),
('972db7259024ba321d01343eac1d434f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402025385, ''),
('984c229fc95a224e885cf5dd2bcf8fd2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402025388, ''),
('9ab0210b69babdd1fe21496307ac1cbc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402025403, ''),
('a31262d1d48a2eeb1ae23aa1c36da012', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946622, ''),
('a38e09039f3cbad65fed15876864871b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401942594, ''),
('a5c69e65724fac6511098519af0c8e18', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946622, ''),
('a5de62a61844e07ba4e028fdfb7319d6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402025357, ''),
('ab03d6a9bf9d930979d59bd600897d73', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946315, ''),
('af1c4ed2be2d22df5791152664eb9b38', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401942582, ''),
('b89d442422d5aea4ed582c6d6cb9eeca', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402025136, ''),
('b8e143d8ee1e696cacd62b4c0169db3a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946242, ''),
('b99384f7ede1b92ee5a7c0ada81212ec', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402024798, ''),
('ba17d9382652bb2df5fe796464547886', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402025385, ''),
('be4943c5cb16637b721126b239897385', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402025387, ''),
('beda3c5e624a6aff12b35c22fbf05eca', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402025380, ''),
('c1cce79d4a42a97b883a20dd9a95c1fd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946506, ''),
('c2a1b3067657d73fa13d6cd83e865a6b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946822, ''),
('c4d9d6e3678df6223624d0c64d5bed56', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402025387, ''),
('d16de30d4fd1a09dd858ba1935f2c574', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402025136, ''),
('d60155cb56926e89dc681a79a5237b6a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946815, ''),
('d6a7499f46a4cc8e4ff7d693a143149d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402024882, ''),
('d72ad3a68f96a0533c0208b044f185b6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402025226, ''),
('d796e8a7e14ae4570b72727b0ac5af21', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402024961, ''),
('da463210d72f06ea4992a0f652321d8b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946391, ''),
('dbef9a618bdaea462c8b7d64a5c606d1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402025383, ''),
('dcf0cd3d4fbdd08f4426524ad93cf2a2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402024569, ''),
('de7120af0227364945c17acfeaea2bb9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402024560, ''),
('ea26d5fedb5800342d82ab2a7afb8fae', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402024925, ''),
('ec540178f8a2ea028f3ed7521f291344', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946245, ''),
('edd8029cc33042be2c10934618492bf4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946113, ''),
('edfecd9ed911e47da477c9ee0edd1790', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946283, ''),
('eef6346af88679e4357d1f560467afd6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401948574, ''),
('f2fbf962fc77a169ddd05164e2aa39d9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946488, ''),
('f451a54528ebc6114ec2c73bda62ecb3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946779, ''),
('f765cd4590eecbbc71f9100314ca3ac0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946638, ''),
('f788672c7ec528f7684d8b5f2ae7d402', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946075, ''),
('ff17131446ced8cd96f122bb9790eec4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1402024910, ''),
('ffc33345a79d6a62ca3f56278d7c95ef', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1401946080, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

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
(14, 'sss', '<p>ssssssssss</p>\n', 2, '111111', '58d2eca970d596818ad4855c85c1755e.jpg', 100, 1401946622);

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
(1, 'giangbeo', 'Nguyễn Trường Giang', '01667039939', 'HCM', '$2a$08$av0xeUt7pYqEymtq0ENPN.65FaINVis/64LmuohuAdt8ND8exqVs2', 'nguyentruonggiang91@gmail.com', 1, '', '', '', '', 0, 79, 0, NULL, NULL, NULL, NULL, 'ad9147af77ea0a71cb1045eb8c144048', '127.0.0.1', '2014-06-06 05:16:06', '2014-03-21 08:25:47', '2014-06-06 03:16:06', '', '', 1, '', 0, 0),
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
