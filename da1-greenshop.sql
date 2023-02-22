-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 09:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `da1-greenshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) DEFAULT 0,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1. Thanh toán trực tiếp\r\n2. Chuyển khoản\r\n3. Thanh toán online',
  `ngaydathang` varchar(50) NOT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0. Đơn hàng mới\r\n1.Đang xử lý\r\n2.Đang giao hàng\r\n3.Đã giao hàng',
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_tel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`) VALUES
(1, 0, '', '', '', '', 0, '', 0, 0, NULL, NULL, NULL),
(2, 0, '', '', '', '', 0, '', 0, 0, NULL, NULL, NULL),
(3, 0, '', '', '', '', 0, '', 0, 0, NULL, NULL, NULL),
(4, 0, '', '', '', '', 0, '', 0, 0, NULL, NULL, NULL),
(5, 0, '', '', '', '', 0, '', 0, 0, NULL, NULL, NULL),
(6, 0, '', '', '', '', 0, '', 0, 0, NULL, NULL, NULL),
(7, 0, '', '', '', '', 0, '', 0, 0, NULL, NULL, NULL),
(8, 0, '', '', '', '', 0, '', 0, 0, NULL, NULL, NULL),
(9, 0, '', '', '', '', 0, '', 0, 0, NULL, NULL, NULL),
(10, 0, 'taidvph20044@gmail.com', '', '', '', 0, '07:47:47am 13/10/2022', 9007, 0, NULL, NULL, NULL),
(11, 0, 'taidvph20044@gmail.com', '', '', '', 0, '07:52:30am 13/10/2022', 13449, 0, NULL, NULL, NULL),
(12, 0, 'taidvph20044@gmail.com', '', '', '', 0, '07:53:53am 13/10/2022', 13449, 0, NULL, NULL, NULL),
(13, 0, 'taidvph20044@gmail.com', '', '', '', 0, '07:54:05am 13/10/2022', 13449, 0, NULL, NULL, NULL),
(14, 0, 'taidvph20044@gmail.com', '', '', '', 0, '07:54:49am 13/10/2022', 13449, 0, NULL, NULL, NULL),
(15, 0, 'taidvph20044@gmail.com', 'giao an giao thuy', '0916523894', 'taidvph20044@gmail.com', 3, '07:55:15am 13/10/2022', 13449, 2, NULL, NULL, NULL),
(16, 0, 'taidvph20044@gmail.com', '', '', '', 0, '07:59:24am 13/10/2022', 13449, 0, NULL, NULL, NULL),
(17, 0, 'taidvph20044@gmail.com', '', '', '', 0, '08:00:45am 13/10/2022', 13449, 0, NULL, NULL, NULL),
(18, 0, 'taidvph20044@gmail.com', '', '', '', 0, '08:01:08am 13/10/2022', 13449, 0, NULL, NULL, NULL),
(19, 0, 'Tai dinh', 'giaothuy, namdinh', '0916523', 'anhnek033@gmail.com', 0, '08:02:07am 13/10/2022', 123, 0, NULL, NULL, NULL),
(20, 0, 'Tai dinh', 'giaothuy, namdinh', '0916523', 'anhnek033@gmail.com', 0, '08:09:12am 13/10/2022', 123, 0, NULL, NULL, NULL),
(21, 0, 'taidvph20044@gmail.com', '', '', '', 0, '08:09:27am 13/10/2022', 1112, 0, NULL, NULL, NULL),
(22, 0, 'taidvph20044@gmail.com', '', '', '', 0, '08:10:01am 13/10/2022', 5554, 0, NULL, NULL, NULL),
(23, 2, 'taidvph20044@gmail.com', '', '', '', 0, '08:39:53am 13/10/2022', 10440, 0, NULL, NULL, NULL),
(24, 2, 'taidvph20044@gmail.com', '', '', '', 0, '08:40:26am 13/10/2022', 10884, 0, NULL, NULL, NULL),
(25, 2, 'taidvph20044@gmail.com', '', '', '', 0, '08:40:44am 13/10/2022', 10884, 0, NULL, NULL, NULL),
(26, 2, 'taidvph20044@gmail.com', '', '', '', 0, '08:40:54am 13/10/2022', 10884, 0, NULL, NULL, NULL),
(27, 2, 'taidvph20044@gmail.com', '', '', '', 0, '08:41:28am 13/10/2022', 10884, 0, NULL, NULL, NULL),
(28, 2, 'taidvph20044@gmail.com', '', '', '', 0, '08:42:36am 13/10/2022', 10884, 0, NULL, NULL, NULL),
(29, 2, 'taidvph20044@gmail.com', '', '', '', 0, '08:42:57am 13/10/2022', 10884, 0, NULL, NULL, NULL),
(30, 2, 'taidvph20044@gmail.com', '', '', '', 0, '08:43:00am 13/10/2022', 10884, 0, NULL, NULL, NULL),
(31, 2, 'taidvph20044@gmail.com', '', '', '', 0, '08:43:54am 13/10/2022', 10884, 0, NULL, NULL, NULL),
(32, 2, 'Tai dinh', 'giaothuy, namdinh', '0916523', 'anhnek033@gmail.com', 0, '08:48:53am 13/10/2022', 888, 0, NULL, NULL, NULL),
(33, 1, 'taidvph', 'giaothuy, namdinh', '0916523894', 'anhnek033@gmail.com', 0, '03:57:21pm 14/10/2022', 444, 0, NULL, NULL, NULL),
(34, 1, 'taidvph', 'giaothuy, namdinh', '0916523894', 'anhnek033@gmail.com', 0, '10:21:41am 15/10/2022', 4442, 0, NULL, NULL, NULL),
(35, 1, 'taidvph', 'giaothuy, namdinh', '0916523894', 'anhnek033@gmail.com', 0, '10:22:08am 15/10/2022', 4886, 0, NULL, NULL, NULL),
(36, 1, 'taidvph', 'giaothuy, namdinh', '0916523894', 'anhnek033@gmail.com', 0, '10:13:20pm 16/10/2022', 4442, 0, NULL, NULL, NULL),
(37, 1, 'taidvph', 'giaothuy, namdinh', '0916523894', 'anhnek033@gmail.com', 0, '10:13:51pm 16/10/2022', 4442, 0, NULL, NULL, NULL),
(38, 21, '0916523894', '', '', '', 0, '10:14:31pm 16/10/2022', 4442, 0, NULL, NULL, NULL),
(39, 21, 'vân', 'giaothuy, namdinh', '0916523', 'anhnek033@gmail.com', 0, '10:44:25pm 16/10/2022', 1112, 0, NULL, NULL, NULL),
(40, 21, '0916523894', '', '', '', 0, '10:45:36pm 16/10/2022', 2224, 0, NULL, NULL, NULL),
(41, 21, '0916523894', '', '', '', 0, '10:45:49pm 16/10/2022', 2224, 0, NULL, NULL, NULL),
(42, 2, 'taidvph20044@gmail.com', '', '', '', 0, '10:49:30pm 16/10/2022', 444, 0, NULL, NULL, NULL),
(43, 2, 'taidvph20044@gmail.com', '', '', '', 0, '10:49:52pm 16/10/2022', 12, 0, NULL, NULL, NULL),
(44, 2, 'taidvph20044@gmail.com', '', '', '', 0, '10:50:24pm 16/10/2022', 456, 0, NULL, NULL, NULL),
(45, 1, 'taidvph', 'giaothuy, namdinh', '0916523894', 'anhnek033@gmail.com', 0, '10:52:21pm 16/10/2022', 1112, 0, NULL, NULL, NULL),
(46, 1, 'taidvph', 'giaothuy, namdinh', '0916523894', 'anhnek033@gmail.com', 0, '11:02:40pm 16/10/2022', 1556, 0, NULL, NULL, NULL),
(47, 21, '0916523894da', '', '', '', 0, '11:05:02pm 16/10/2022', 444, 0, NULL, NULL, NULL),
(48, 1, 'taidvph', 'giaothuy, namdinh', '0916523894', 'anhnek033@gmail.com', 0, '07:09:21pm 21/10/2022', 380, 0, NULL, NULL, NULL),
(49, 0, 'Tai dinh', 'giaothuy, namdinh', '0916523', 'anhnek033@gmail.com', 0, '05:02:50pm 22/10/2022', 190, 0, NULL, NULL, NULL),
(50, 1, 'taidvph', 'giaothuy, namdinh', '0916523894', 'anhnek033@gmail.com', 0, '05:03:07pm 22/10/2022', 310, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(15, 'quần đẹp', 1, 11, '01:59:08am 17/10/2022'),
(16, 'hoa đẹp vch luôn ớ', 1, 18, '07:09:10pm 21/10/2022');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(10) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(1, 2, 9, '633a9e0c43c88-69d2d4b9f6e831b668f9.jpg', 'áo 2', 123, 1, 123, 10),
(2, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 10),
(3, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 10),
(4, 2, 9, '633a9e0c43c88-69d2d4b9f6e831b668f9.jpg', 'áo 2', 123, 1, 123, 11),
(5, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 11),
(6, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 11),
(7, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 11),
(8, 2, 9, '633a9e0c43c88-69d2d4b9f6e831b668f9.jpg', 'áo 2', 123, 1, 123, 12),
(9, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 12),
(10, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 12),
(11, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 12),
(12, 2, 9, '633a9e0c43c88-69d2d4b9f6e831b668f9.jpg', 'áo 2', 123, 1, 123, 13),
(13, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 13),
(14, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 13),
(15, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 13),
(16, 2, 9, '633a9e0c43c88-69d2d4b9f6e831b668f9.jpg', 'áo 2', 123, 1, 123, 14),
(17, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 14),
(18, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 14),
(19, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 14),
(20, 2, 9, '633a9e0c43c88-69d2d4b9f6e831b668f9.jpg', 'áo 2', 123, 1, 123, 15),
(21, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 15),
(22, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 15),
(23, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 15),
(24, 2, 9, '633a9e0c43c88-69d2d4b9f6e831b668f9.jpg', 'áo 2', 123, 1, 123, 16),
(25, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 16),
(26, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 16),
(27, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 16),
(28, 2, 9, '633a9e0c43c88-69d2d4b9f6e831b668f9.jpg', 'áo 2', 123, 1, 123, 17),
(29, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 17),
(30, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 17),
(31, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 17),
(32, 2, 9, '633a9e0c43c88-69d2d4b9f6e831b668f9.jpg', 'áo 2', 123, 1, 123, 18),
(33, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 18),
(34, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 18),
(35, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 18),
(36, 2, 9, '633a9e0c43c88-69d2d4b9f6e831b668f9.jpg', 'áo 2', 123, 1, 123, 19),
(37, 2, 9, '633a9e0c43c88-69d2d4b9f6e831b668f9.jpg', 'áo 2', 123, 1, 123, 20),
(38, 2, 10, '660c10db8eec49b210fd.jpg', 'quần 1', 1112, 1, 1112, 21),
(39, 2, 10, '660c10db8eec49b210fd.jpg', 'quần 1', 1112, 1, 1112, 22),
(40, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 22),
(41, 2, 10, '660c10db8eec49b210fd.jpg', 'quần 1', 1112, 1, 1112, 23),
(42, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 23),
(43, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 23),
(44, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 23),
(45, 2, 10, '660c10db8eec49b210fd.jpg', 'quần 1', 1112, 1, 1112, 24),
(46, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 24),
(47, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 24),
(48, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 24),
(49, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 24),
(50, 2, 10, '660c10db8eec49b210fd.jpg', 'quần 1', 1112, 1, 1112, 25),
(51, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 25),
(52, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 25),
(53, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 25),
(54, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 25),
(55, 2, 10, '660c10db8eec49b210fd.jpg', 'quần 1', 1112, 1, 1112, 26),
(56, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 26),
(57, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 26),
(58, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 26),
(59, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 26),
(60, 2, 10, '660c10db8eec49b210fd.jpg', 'quần 1', 1112, 1, 1112, 27),
(61, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 27),
(62, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 27),
(63, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 27),
(64, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 27),
(65, 2, 10, '660c10db8eec49b210fd.jpg', 'quần 1', 1112, 1, 1112, 28),
(66, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 28),
(67, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 28),
(68, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 28),
(69, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 28),
(70, 2, 10, '660c10db8eec49b210fd.jpg', 'quần 1', 1112, 1, 1112, 29),
(71, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 29),
(72, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 29),
(73, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 29),
(74, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 29),
(75, 2, 10, '660c10db8eec49b210fd.jpg', 'quần 1', 1112, 1, 1112, 30),
(76, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 30),
(77, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 30),
(78, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 30),
(79, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 30),
(80, 2, 10, '660c10db8eec49b210fd.jpg', 'quần 1', 1112, 1, 1112, 31),
(81, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 31),
(82, 2, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 31),
(83, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 31),
(84, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 31),
(85, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 32),
(86, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 32),
(87, 1, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 33),
(88, 1, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 34),
(89, 1, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 35),
(90, 1, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 35),
(91, 1, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 36),
(92, 1, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 37),
(93, 21, 12, '7d3e18e986de418018cf.jpg', 'quần 3', 4442, 1, 4442, 38),
(94, 21, 10, '660c10db8eec49b210fd.jpg', 'quần 1', 1112, 1, 1112, 39),
(95, 21, 10, '660c10db8eec49b210fd.jpg', 'quần 1', 1112, 1, 1112, 40),
(96, 21, 10, '660c10db8eec49b210fd.jpg', 'quần 1', 1112, 1, 1112, 40),
(97, 21, 10, '660c10db8eec49b210fd.jpg', 'quần 1', 1112, 1, 1112, 41),
(98, 21, 10, '660c10db8eec49b210fd.jpg', 'quần 1', 1112, 1, 1112, 41),
(99, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 42),
(100, 2, 8, '633a9da433b13-fcc14d346f65a83bf174.jpg', 'áo 1', 12, 1, 12, 43),
(101, 2, 8, '633a9da433b13-fcc14d346f65a83bf174.jpg', 'áo 1', 12, 1, 12, 44),
(102, 2, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 44),
(103, 1, 10, '660c10db8eec49b210fd.jpg', 'quần 1', 1112, 1, 1112, 45),
(104, 1, 10, '660c10db8eec49b210fd.jpg', 'quần 1', 1112, 1, 1112, 46),
(105, 1, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 46),
(106, 21, 11, 'f00483d31de4daba83f5.jpg', 'quần 2', 444, 1, 444, 47),
(107, 1, 18, 'chau-hoa-huong-duong-dep.jpg', 'Hoa cực xinh', 190, 1, 190, 48),
(108, 1, 18, 'chau-hoa-huong-duong-dep.jpg', 'Hoa cực xinh', 190, 1, 190, 48),
(109, 0, 18, 'chau-hoa-huong-duong-dep.jpg', 'Hoa cực xinh', 190, 1, 190, 49),
(110, 1, 18, 'chau-hoa-huong-duong-dep.jpg', 'Hoa cực xinh', 190, 1, 190, 50),
(111, 1, 17, 'hoa-hong-ba-bong-xinh.jpg', 'Hoa handmade', 120, 1, 120, 50);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(12, 'rau củ '),
(26, 'hoa quả');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) DEFAULT 0,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(1, 'Rau ngổ', 90000, 'sp2.png', 'Rau ngổ là một thành phần không thể thiếu với món canh chua. Không những khiến món ăn dậy mùi, hấp dẫn mà nó còn có nhiều công dụng đặc biệt. Lâm Hải Farm là đơn vị được khách hàng yêu thích và tin tưởng chọn để cung cấp Rau ngổ.', 12, 12),
(33, 'Cải bó xôi hữu cơ', 108000, 'sp112.png', 'Cải bó xôi hữu cơ cũng giống như cải bó xôi thường, được gọi là rau chân vịt hay rau Bina. Điểm khác biệt là thay thế hình thức trồng trọt và canh tác sang mô hình hữu cơ. Vì thế, sản phẩm cải bó xôi hữu cơ có độ an toàn cao, tốt cho sức khỏe người tiêu dùng.', 0, 12),
(34, 'Cà rốt mini', 129000, 'carotbaby_d5548354ce4444a785a9b85926e5a703_large.png', 'Cà rốt mini (hay còn gọi là cà rốt baby, cà rốt tí hon) có tên khoa học là Daucus carota, chúng còn một cái tên khác là Carrot Baby Pak. Đây là loại cà rốt dại, có kích thước nhỏ hơn gấp 3 lần so với cà rốt thông thường.', 0, 12),
(35, 'Củ cải đường hữu cơ', 28700, 'spnt_-_cu_cai_do_5fa85c3d441c4062ab88828fa3aaeff7_master.png', 'Củ cải đỏ là một loại cải củ thuộc họ nhà Cải, có nguồn gốc từ Trung Quốc, xuất hiện đầu tiên vào thế kỷ thứ 3 và dần dần được trồng ở các nước phương Tây. Củ cải đỏ sinh trưởng tốt ở những nơi có điều kiện khí hậu mát mẻ như Lâm Đồng. Củ cải đỏ của SUNI GREEN FARM được trồng theo phương pháp hữu cơ tại Đà Lạt, hoàn toàn không thuốc trừ sâu, luôn đảm bảo về chất lượng và dinh dưỡng.', 0, 12),
(36, 'Dâu Tây Đà Lạt', 285000, 'can_tay_sach__facebook_post___900___900_px___1__e7084f6692df484d8a40ae5636627cf1_master.png', 'Dâu tây Đà Lạt là một loại trái cây thơm ngon và rất giàu dinh dưỡng, vì thế có rất nhiều người yêu thích loại quả này, nhất là trẻ nhỏ. Vậy khi muốn mua dâu tây ngon từ Đà Lạt mà bạn đang ở TP HCM thì nên mua ở đâu? Bài viết sau sẽ giới thiệu đến bạn nơi bán dâu tây uy tín, chất lượng, mời bạn đọc tham khảo.', 0, 26);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'taidv', 'dinhtai2003', 'taidvph20044@gmail.com', 'nam định', '0916523894', 1),
(131, 'taidvph', 'taidinhvan', 'grgr@gmail.com', NULL, NULL, 0),
(168, 'anhhh', 'qưẻtyu', 'anhnek033@gmail.com', NULL, NULL, 0),
(169, '209180a1d1f35e6b005c048a219f7ff2', 'qưẻtyu', 'anhnek033@gmail.com', NULL, NULL, 0),
(170, '209180a1d1f35e6b005c048a219f7ff2', 'qưẻtyu', 'anhnek033@gmail.com', NULL, NULL, 0),
(171, 'anhhh', '10fc67cca0d79e58a013904cf77384a5', 'anhnek033@gmail.com', NULL, NULL, 0),
(172, 'anhhh', '10fc67cca0d79e58a013904cf77384a5', 'anhnek033@gmail.com', NULL, NULL, 0),
(173, 'anhhh', '10fc67cca0d79e58a013904cf77384a5', 'anhnekaa033@gmail.com', NULL, NULL, 0),
(174, 'anhhh', '10fc67cca0d79e58a013904cf77384a5', 'anhnek033@gmail.com', NULL, NULL, 0),
(175, 'anhhh', '10fc67cca0d79e58a013904cf77384a5', 'anhnek033@gmail.com', NULL, NULL, 0),
(176, 'anhhhđa', '10fc67cca0d79e58a013904cf77384a5', 'anhne1231k033@gmail.com', NULL, NULL, 0),
(177, 'anhhh23', '10fc67cca0d79e58a013904cf77384a5', 'anhnek32033@gmail.com', NULL, NULL, 0),
(178, 'anhhhas', '10fc67cca0d79e58a013904cf77384a5', 'anhnek033@gmail.com', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
