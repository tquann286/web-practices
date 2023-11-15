-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 22, 2013 at 11:50 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_hanghoa`
--
CREATE DATABASE `db_hanghoa` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db_hanghoa`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE IF NOT EXISTS `tbl_danhmuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ten` (`ten`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id`, `ten`) VALUES
(3, 'Điện Thoại'),
(7, 'Máy Tính'),
(6, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE IF NOT EXISTS `tbl_sanpham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ten` (`ten`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id`, `ten`, `mota`, `gia`, `id_dm`) VALUES
(1, 'Sony Xperia Z', 'Siêu phẩm điện thoại đến từ Sony', 13000000, 3),
(2, 'HTC One', 'Siêu phẩm Từ HTC', 22000000, 3),
(3, 'Galaxy S4', 'Siêu phẩm của Samsung', 13000000, 3),
(4, 'Oppo Find 5', 'Siêu phẩm điện thoại đến từ Trung Quốc', 9000000, 3),
(5, 'Nexus 4', 'Điện thoại cấu hình khủng của Google', 10000000, 3),
(6, 'Optimus G', 'Siêu phẩm đến từ LG', 11000000, 3),
(7, 'iPhone 5', 'Siêu phẩm của Táo', 15000000, 3),
(8, 'Optimus Pro', 'Siêu phẩm full HD của LG', 13000000, 3),
(9, 'Xperia ZL', 'Siêu phẩm của Sony', 12000000, 3),
(10, 'Asus PadFone', 'Siêu phẩm từ ASUS', 13000000, 3),
(11, 'Lumia 520', 'Điện thoại WinPhone 8 giá rẻ của Nokia', 3500000, 3),
(12, 'Lumia 920', 'Siêu phẩm WinPhone 8 của Nokia', 11000000, 3),
(13, 'Lumia EOS', 'Siêu phẩm điện thoại WinPhone 8 với camera khủng 41Mpx của Nokia', 16000000, 3),
(14, 'Lumia 928', 'Siêu phẩm nâng cấp từ Lumia 920', 12000000, 3),
(15, 'Sony Vaio T', 'Siêu phẩm Vaio T', 12000000, 6),
(16, 'Dell XPS 12', 'Siêu phẩm laptop cảm ứng từ Dell', 21000000, 6),
(17, 'Asus Vivobook', 'Laptop cảm ứng chạy Win8', 17000000, 6),
(18, 'Asus Transformer Book', 'Laptop biến hình', 28000000, 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
