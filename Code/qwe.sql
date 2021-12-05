-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2021 lúc 04:00 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qwe`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(13, 'che nguyen minh tung', 'cheminhtung', '123456'),
(14, 'nguyen van quoc viet', 'quocviet', '123456'),
(15, 'Nguyen duc toan', 'toan', '123456'),
(16, 'huynh minh tri', 'trihuynh', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(20, 'Sảnh A', 'Food_Category_342.jpg', 'Yes', 'Yes'),
(21, 'Sảnh B', 'Food_Category_111.jpg', 'Yes', 'Yes'),
(22, 'Sảnh C', 'Food_Category_664.jpeg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` int(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(14, 'Bàn 3.000.000đ', 'Thức ăn bao gồm 6 món chính và 2 món tráng miệng', 3000000, 'Food-Name-8601.jpg', 20, 'Yes', 'Yes'),
(15, 'Bàn 5.000.000đ', 'Thức ăn bao gồm 8 món chính và 2 món phụ, có rượu vang', 5000000, 'Food-Name-5186.jpg', 20, 'Yes', 'Yes'),
(16, 'Bàn 10.000.000đ', 'Thức ăn bao gồm 10 món chính và 3 món phụ, có rượu vodka', 10000000, 'Food-Name-1130.jpg', 20, 'Yes', 'Yes'),
(17, 'Bàn 7.000.000đ', 'Thức ăn bao gồm 9 món chính và 2 món phụ, có rượu vang.', 5000000, 'Food-Name-5374.jpg', 20, 'Yes', 'Yes'),
(18, 'Bàn 10.000.000đ', 'Thức ăn bao gồm 10 món chính và 3 món phụ, có rượu vodka', 10000000, 'Food-Name-2708.jpg', 21, 'Yes', 'Yes'),
(19, 'Bàn 5.000.000đ', 'Thức ăn bao gồm 8 món chính và 2 món phụ, có rượu vang', 5000000, 'Food-Name-816.jpg', 21, 'Yes', 'Yes'),
(20, 'Bàn 7.000.000đ', 'Thức ăn bao gồm 9 món chính và 2 món phụ, có rượu  vodka', 7000000, 'Food-Name-8689.jpg', 21, 'Yes', 'Yes'),
(21, 'Bàn 12.000.000đ', 'Thức ăn bao gồm 10 món chính và 3 món phụ, có rượu vodka', 12000000, 'Food-Name-3033.jpg', 21, 'Yes', 'Yes'),
(22, 'Bàn 7.000.000đ', 'Thức ăn bao gồm 9 món chính và 2 món phụ, có rượu vodka', 7000000, 'Food-Name-2911.jpg', 22, 'Yes', 'Yes'),
(23, 'Bàn 10.000.000đ', 'Thức ăn bao gồm 10 món chính và 3 món phụ, có rượu vodka', 1000000, 'Food-Name-3255.jpg', 22, 'Yes', 'Yes'),
(24, 'Bàn 12.000.000đ', 'Thức ăn bao gồm 10 món chính và 3 món phụ, có rượu vodka', 12000000, 'Food-Name-5189.jpg', 22, 'Yes', 'Yes'),
(25, 'Bàn 15.000.000đ', 'Thức ăn bao gồm 15 món chính và 3 món phụ, có rượu', 15000000, 'Food-Name-7197.jpg', 22, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `date_wedding` varchar(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `date_wedding`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(1, 'Sadeko Momo', '6.00', 3, '18.00', '2020-11-30 03:49:48', '0000-00-00 ', 'Cancelled', 'Bradley Farrell', '+1 (576) 504-4657', 'zuhafiq@mailinator.com', 'Duis aliqua Qui lor'),
(2, 'Best Burger', '4.00', 4, '16.00', '2020-11-30 03:52:43', '0000-00-00 ', 'Delivered', 'Kelly Dillard', '+1 (908) 914-3106', 'fexekihor@mailinator.com', 'Incidunt ipsum ad d'),
(3, 'Mixed Pizza', '10.00', 2, '20.00', '2020-11-30 04:07:17', '0000-00-00 ', 'Delivered', 'Jana Bush', '+1 (562) 101-2028', 'tydujy@mailinator.com', 'Minima iure ducimus'),
(6, 'Bàn 3.000.000đ', '3000000.00', 1, '3000000.00', '2021-12-05 02:48:29', '205765', 'Ordered', 'e', '231', '19522490@gm.uit.edu.vn', 'adsa');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
