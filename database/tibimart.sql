-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2014 at 06:27 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `title`, `content`, `id_cate`, `price`, `image`, `stock`, `create_date`) VALUES
(1, 'Kem đánh răng người lớn', 'sss', 1, '160000', '068e80da9e71482db5912478760108dc.JPG', 10, 0),
(2, 'Ủ tóc 300ml Ganier Fructis Oil repair 3', 'Giá khuyến mại	200,000 VND\r\nGiá cũ	220,000 VND\r\nTrạng thái	Còn hàng\r\nNhãn hiệu	Ganier Fructis\r\nMàu sắc	Mẫu mới màu vàng\r\nNơi sản xuất	Đức', 1, '200000', 'd61c6da7e8984bdaaaa8c0df6c72bc8a.jpg', 10, 0),
(3, 'Kem dưỡng da Nivea 300ml', 'Giá khuyến mại	180,000 VND\r\nGiá cũ	220,000 VND\r\nTrạng thái	còn hàng\r\nNhãn hiệu	Nivea\r\nNơi sản xuất	Đức', 1, '180000', '862fdab67e1e4cc5aa3855b57ccc546f.png', 10, 0),
(4, 'Bộ dầu gội đầu và kem xả Ganier Fructis', 'Giá bán	300,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Ganier Fructis\r\nNơi sản xuất	Đức', 1, '300000', '06dfaa02730146e8805ba02703e84388.JPG', 10, 0),
(5, 'Kem dưỡng thể Lacoste', 'Giá bán	120,000 VND\r\nTrạng thái	Còn hàng\r\nNhãn hiệu	Lacoste\r\nNơi sản xuất	Đức', 1, '120000', 'd5299d6cf30e4b2cb24aa3e42b3b01c7.JPG', 10, 0),
(6, 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 'effd3139933d4bf287c27846d725e616.JPG', 11, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
