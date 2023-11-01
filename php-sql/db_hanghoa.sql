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
(3, 'Äiá»‡n Thoáº¡i'),
(7, 'MÃ¡y Láº¡nh'),
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
(1, 'Sony Xperia Z', 'SiÃªu pháº©m Ä‘iá»‡n thoáº¡i Ä‘áº¿n tá»« Sony                                                                ', 13000000, 3),
(2, 'HTC One', '            SiÃªu pháº©m Tá»« HTC                    ', 22000000, 3),
(3, 'Galaxy S4', 'SiÃªu pháº©m cá»§a Samsung', 13000000, 3),
(4, 'Oppo Find 5', 'SiÃªu pháº©m Ä‘iá»‡n thoáº¡i Ä‘áº¿n tá»« TQ', 9000000, 3),
(5, 'Nexus 4', 'Äiá»‡n thoáº¡i cáº¥u hÃ¬nh khá»§ng cá»§a Google        ', 10000000, 3),
(6, 'Optimus G', 'SiÃªu pháº©m Ä‘áº¿n tá»« LG        ', 11000000, 3),
(7, 'iPhone 5', 'SiÃªu pháº©m cá»§a TÃ¡o        ', 15000000, 3),
(8, 'Optimus Pro', '            SiÃªu pháº©m full HD cá»§a LG                    ', 13000000, 3),
(9, 'Xperia ZL', 'SiÃªu pháº©m cá»§a Sony        ', 12000000, 3),
(10, 'Asus PadFone', 'SiÃªu pháº©m tá»« ASUS        ', 13000000, 3),
(11, 'Lumia 520', '            Äiá»‡n thoáº¡i WinPhone 8 giÃ¡ ráº» cá»§a Nokia                    ', 3500000, 3),
(12, 'Lumia 920', 'SiÃªu pháº©m WinPhone 8 cá»§a Nokia        ', 11000000, 3),
(13, 'Lumia EOS', 'SiÃªu pháº©m Ä‘iá»‡n thoáº¡i WinPhone 8 vá»›i camera khá»§ng 41Mpx cá»§a Nokia        ', 16000000, 3),
(14, 'Lumia 928', 'SiÃªu pháº©m nÃ¢ng cáº¥p tá»« Lumia 920        ', 12000000, 3),
(15, 'Sony Vaio T', 'SiÃªu pháº©m Vaio T        ', 12000000, 6),
(16, 'Dell XPS 12', 'SiÃªu pháº©m laptop cáº£m á»©ng tá»« Dell        ', 21000000, 6),
(17, 'Asus Vivobook', '                        Laptop cáº£m á»©ng cháº¡y Win8                                ', 17000000, 6),
(18, 'Asus Transformer Book', '                        Laptop biáº¿n hÃ¬nh.                       ', 28000000, 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
