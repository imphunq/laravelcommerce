-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2018 at 04:53 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doan`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(10) NOT NULL,
  `danhmuc_id` int(10) NOT NULL,
  `tieude` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tomtat` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anh_thumb` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soluotxem` int(10) DEFAULT NULL,
  `ngaydang` date DEFAULT NULL,
  `giodang` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ordernum` int(10) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `images` varchar(100) NOT NULL,
  `title` varchar(40) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `dateCreate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `images`, `title`, `status`, `dateCreate`) VALUES
(2, 'Women', '../upload/bep-gas-am-kinh-giovani-G209SB.jpg', 'Bếp', 1, '2018-04-19 19:40:20'),
(3, 'Bags', '../upload/iphone-x-64gb-hh-600x600-400x400.jpg', 'SmartPhone', 1, '2018-04-19 19:28:22'),
(4, 'Shoes', '../upload/tinhyeulunglinh.png', 'Purple Love', 1, '2018-05-14 00:18:00'),
(5, 'Watch', '../upload/matngot.png', 'ONLY YOU 2', 1, '2018-05-13 13:30:00'),
(6, 'Hoa Tình Yêu', '../upload/reuphong.png', 'Rêu Phong', 0, '2018-05-14 10:05:00'),
(7, 'Array', '../upload/chucthanhcong.png', 'Hoa thành công', 0, '2018-05-15 16:51:00'),
(8, 'Wallet', 'product-big-3.jpg', 'hàng mới về', 1, '2018-05-13 00:00:00'),
(9, 'Book', 'product-9.jpg', 'hết hàng', 1, '2018-05-11 00:00:00'),
(10, 'Tivi', 'product-2.jpg', 'hàng đẹp', 1, '2018-05-16 00:00:00'),
(11, 'Điều hòa', 'db.PNG', 'điều hòa đểu', 1, '2018-05-18 00:00:00'),
(12, 'máy giặt', 'product-7.jpg', 'hết hàng', 1, '2018-05-16 00:00:00'),
(13, 'thu', 'product-5.jpg', 'hàng mới về', 1, '2018-05-16 00:00:00'),
(14, 'Chai nuoc', 'product-8.jpg', 'hết hàng', 2, '2018-05-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `code` varchar(20) NOT NULL,
  `status` tinyint(40) DEFAULT NULL,
  `dateCreate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `name`, `code`, `status`, `dateCreate`) VALUES
(1, 'Màu xanh', '#80ff00', 0, '2018-05-14 10:32:00'),
(2, 'Màu đỏ', '#ff0000', 1, '2018-05-14 10:33:00'),
(3, 'Màu vàng', '#ffff00', 1, '2018-05-13 10:34:00'),
(4, 'Màu đen', '#000000', 1, '2018-07-26 04:14:32'),
(5, 'Tím', '#800080', 1, '2018-07-25 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(50) NOT NULL,
  `title` varchar(40) NOT NULL,
  `product_id` int(50) DEFAULT NULL,
  `content` varchar(80) NOT NULL,
  `status` tinyint(30) DEFAULT NULL,
  `dateCreate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(40) NOT NULL,
  `type` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) NOT NULL,
  `danhmuc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `menu` int(1) DEFAULT NULL,
  `home` int(1) DEFAULT NULL,
  `ordernum` int(10) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotro`
--

CREATE TABLE `hotro` (
  `id` int(10) NOT NULL,
  `yahoo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `skype` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ordernum` int(10) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(30) NOT NULL,
  `images` varchar(100) NOT NULL,
  `product_id` int(30) NOT NULL,
  `status` tinyint(30) DEFAULT NULL,
  `dateCreate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(10) NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` date DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `dateCreate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT NULL,
  `fullName` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `payment_id` int(1) DEFAULT NULL,
  `transport_id` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `total`, `dateCreate`, `status`, `fullName`, `address`, `mobile`, `email`, `payment_id`, `transport_id`) VALUES
(1, 1, 639, '2018-06-05 08:21:15', 1, 'Lê Đức Bảy', 'Hoằng Hóa, Thanh Hóa', ' 0941385777', 'bayptit@gmail.com', 1, 2),
(2, 1, 639, '2018-06-05 08:21:31', 1, 'Lê Đức Bảy', 'Hoằng Hóa, Thanh Hóa', ' 0941385777', 'bayptit@gmail.com', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(50) NOT NULL,
  `order_id` int(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `quanlity` int(40) DEFAULT NULL,
  `status` tinyint(40) DEFAULT NULL,
  `dateCreate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `price`, `quanlity`, `status`, `dateCreate`) VALUES
(1, 1, 10, 425, 1, 1, '2018-06-05 08:21:15'),
(2, 1, 16, 214, 1, 1, '2018-06-05 08:21:15'),
(3, 2, 10, 425, 1, 1, '2018-06-05 08:21:31'),
(4, 2, 16, 214, 1, 1, '2018-06-05 08:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `status` tinyint(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `status`) VALUES
(1, 'Chuyển khoản', 1),
(2, 'TIền tươi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(30) NOT NULL,
  `nameProduct` varchar(50) NOT NULL,
  `images` varchar(40) NOT NULL,
  `cat_id` int(30) NOT NULL,
  `price` int(40) DEFAULT NULL,
  `size_id` int(30) DEFAULT NULL,
  `color_id` int(40) DEFAULT NULL,
  `amount` int(40) DEFAULT NULL,
  `sale_of` int(40) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `status` tinyint(50) DEFAULT NULL,
  `dateCreate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nameProduct`, `images`, `cat_id`, `price`, `size_id`, `color_id`, `amount`, `sale_of`, `description`, `status`, `dateCreate`) VALUES
(17, 'Product_1', 'product-1.jpg', 1, 320, 2, 4, 3, 50, 'hàng đẹp chất lượng', 1, NULL),
(18, 'Product_2', 'product-2.jpg', 2, 320, 1, 3, 3, 50, 'hàng đẹp', 1, NULL),
(19, 'Product_3', 'product-3.jpg', 4, 320, 2, 5, 2, 50, 'gfaf', 1, NULL),
(20, 'Product_4', 'product-4.jpg', 5, 320, 3, 2, 2, 0, 'dùawfa', 1, NULL),
(21, 'Product_5', 'product-5.jpg', 3, 321, 1, 3, 3, 50, 'ưdaefeaf', 1, NULL),
(22, 'Product_6', 'product-6.jpg', 2, 321, 2, 2, 3, 50, 'fcsfaf', 1, NULL),
(23, 'Product_7', 'product-7.jpg', 4, 320, 2, 2, 3, 50, 'fwfaf', 1, NULL),
(24, 'Product_8', 'product-8.jpg', 3, 321, 1, 2, 3, 0, 'dfsfaafas', 1, NULL),
(25, 'Product_9', 'product-9.jpg', 1, 321, 1, 3, 3, 0, 'dfsfaf', 1, NULL),
(26, 'Product_10', 'item-cart-05.jpg', 1, 320, 3, 1, 3, 50, 'ssasca', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` tinyint(30) DEFAULT NULL,
  `dateCreate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `name`, `status`, `dateCreate`) VALUES
(1, 'XL', 1, '2018-05-24 12:01:52'),
(2, 'M', 1, '2018-05-24 12:01:56'),
(3, 'S', 2, '2018-07-26 03:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(10) NOT NULL,
  `tieude` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `anh_thumb` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ordernum` int(10) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `tieude`, `anh`, `anh_thumb`, `link`, `ordernum`, `status`) VALUES
(1, 'Smart Tivi Sony 43 inch 43W660F', '../upload/smart-tivi-sony-43-inch-43w660f-hdr-mxr-200hz-Oza1Q5.png', NULL, 'https://mediamart.vn/tivi/sony/smart-tivi-sony-43-inch-43w660f-hdr-mxr-200hz.htm', 1, 1),
(2, 'Smart Tivi Sony 49 inch 49X7000E', '../upload/-3Hj390.png', NULL, 'https://mediamart.vn/tivi/sony/smart-tivi-sony-49-inch-49x7000e-4k-ultra-hdr-mxr-200hz.htm', 2, 0),
(9, 'Smart Tivi Sony 32 inch 32W610F', '../upload/smart-tivi-sony-32-inch-32w610f-hdr-mxr-200hz-s2QK70.png', NULL, 'https://mediamart.vn/tivi/sony/smart-tivi-sony-32-inch-32w610f-hdr-mxr-200hz.htm', 3, 1),
(10, 'Tivi Sony 40 inch 40R350E', '../upload/tivi-sony-40-inch-40r350e-full-hd-mxr-100hz-qH3IZP.png', 'upload/resize/tivi-sony-40-inch-40r350e-full-hd-mxr-100hz-qH3IZP_thumb.png', 'https://mediamart.vn/tivi/sony/tivi-sony-40-inch-40r350e.htm', 4, 0),
(11, 'Smart Tivi LG 43 inch 43UJ632T', '../upload/-0m2lRs.png', '', 'https://mediamart.vn/tivi/lg/smart-tivi-lg-43-inch-43uj632t.htm', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `thongtincongty`
--

CREATE TABLE `thongtincongty` (
  `id` int(10) NOT NULL,
  `tencongty` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hotline` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`id`, `name`, `status`) VALUES
(1, 'Oto', 1),
(2, 'Máy Bay', 1),
(3, 'đi bộ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` int(1) DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `phone`, `email`, `gender`, `birthday`, `address`, `status`) VALUES
(1, 'admin', '123456', 'Lê Đức Bảy', '0941385777', 'bayptit@gmail.com', NULL, NULL, 'Hoằng Hóa, Thanh Hóa', 1),
(2, 'thuonglth.tha', '123456', 'Lê Thị Hoài Thương', '123456789', 'thuonglth.tha@vnpt.vn', NULL, NULL, 'Thanh Hóa', 1),
(3, 'quannt.tha', '123456', 'Nguyễn Trí Quân', '123321', 'quannt.tha@vnpt.vn', NULL, NULL, 'Thanh Hóa', 0),
(4, 'quangphu', '$2y$10$lVbkJMQuHEngai.YLfbYUerKXES1w5kjbsze6asj8Qg1smmPiTrLG', 'Nguyen Quang Phu', '0123456788', 'phu123@gmail.com', 1, NULL, 'ha noi', 1),
(7, 'dung', '$2y$10$tltQ4w2jyayefIUXjmISNubBueItPLfc18aGtcBl68cxU.qqGlpBC', 'Nguyen Dung', '0123456786', 'dung@gmail.com', 1, NULL, 'ha noi', 0),
(8, 'ducvan', '$2y$10$lsWgXDMSS6drA3elopFL8ejo0KpImdZAptZUedGjkbSawffhozyt2', 'Nguyen Van Duc', '0123456745', 'duc123@gmail.com', 1, NULL, 'ha noi', 0),
(9, 'thiloi', '$2y$10$PFvcu2WUNhTDmCT.4h/bF.MuOIrJ428VLH33rP2HydEBhyNCprjrW', 'Trinh Thi Loi', '0325263632', 'thiloi@gmail.com', 0, NULL, 'ha nam', 0),
(10, 'vanquyen', '$2y$10$9D9WQP1SXrabb/j80w4dXukoVy0S/7dd1SQbwQE0xNaBWydyyzZDe', 'Nguyen Van Quyen', '02412425134', 'vanquyen@gmail.com', 1, NULL, 'ha noi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(10) NOT NULL,
  `tieude` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ordernum` int(10) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `tieude`, `link`, `ordernum`, `status`) VALUES
(1, '3.000 phóng viên đưa tin cuộc gặp lịch sử Hàn - Triều', 'https://www.youtube.com/watch?v=Pr9A8NPeb94', 1, 0),
(2, 'Tổn thất không ngờ của Mỹ sau vụ tấn công Syria', 'https://www.youtube.com/watch?v=EQN_cQhv8tk', 2, 1),
(3, 'Bộ Công an đang điều tra vấn đề Giám đốc công an Đà Nẵng', 'https://www.youtube.com/watch?v=AkUluQsYpQI', 3, 0),
(4, 'Con đường bích họa độc đáo ở chùa Thầy', 'https://www.youtube.com/watch?v=wOHkTTUEmog', 4, 1),
(5, '5 điều giúp bạn sống thêm 10 năm', 'https://www.youtube.com/watch?v=aOSpudVe9Ps', 5, 0),
(6, 'Tăng tuổi nghỉ hưu: Để tránh “vỡ quỹ” bảo hiểm xã hội?', 'https://www.youtube.com/watch?v=eWw7nGncOhM', 6, 1),
(31, 'Implode function in php', 'https://www.youtube.com/watch?v=qVrDMj8gPdw', 7, 1),
(32, 'Hạ Thương', 'https://www.youtube.com/watch?v=barjhCNRQz0', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `dateCreate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotro`
--
ALTER TABLE `hotro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thongtincongty`
--
ALTER TABLE `thongtincongty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `thongtincongty`
--
ALTER TABLE `thongtincongty`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
