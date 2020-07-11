-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 11, 2020 at 04:04 PM
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
-- Database: `tymobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `bill_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `status` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `pay` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` int(11) NOT NULL,
  `phone` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `receiver` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `user_id`, `date`, `status`, `pay`, `total`, `phone`, `province`, `district`, `address`, `receiver`) VALUES
(15, 9, '2020-07-11 03:13:57', 'Tiếp nhận thành công', 'Chưa thanh toán', 30490000, '0987654321', 'Phú Yên', 'Tuy Hòa', 'KTX Khu B, Tô Vĩnh Diện, Đông Hòa', 'ĐàoTuấn Anh');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

DROP TABLE IF EXISTS `bill_detail`;
CREATE TABLE IF NOT EXISTS `bill_detail` (
  `bill_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `bill_id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(10,2) NOT NULL,
  `total_price` double(10,2) NOT NULL,
  PRIMARY KEY (`bill_detail_id`),
  KEY `fk_ten1` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`bill_detail_id`, `bill_id`, `item_id`, `quantity`, `price`, `total_price`) VALUES
(11, 15, 12, 1, 30490000.00, 30490000.00);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(3) NOT NULL DEFAULT 1,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `item_type`
--

DROP TABLE IF EXISTS `item_type`;
CREATE TABLE IF NOT EXISTS `item_type` (
  `id_type` char(10) NOT NULL,
  `name_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_type`
--

INSERT INTO `item_type` (`id_type`, `name_type`) VALUES
('T1', 'khuyen mai hot'),
('T2', 'san pham moi');

-- --------------------------------------------------------

--
-- Table structure for table `item_type_detail`
--

DROP TABLE IF EXISTS `item_type_detail`;
CREATE TABLE IF NOT EXISTS `item_type_detail` (
  `item_id` mediumint(9) NOT NULL,
  `id_type` char(10) NOT NULL,
  PRIMARY KEY (`item_id`,`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_type_detail`
--

INSERT INTO `item_type_detail` (`item_id`, `id_type`) VALUES
(1, 'T2'),
(3, 'T2'),
(5, 'T1'),
(6, 'T1'),
(8, 'T1'),
(9, 'T1'),
(12, 'T2'),
(13, 'T1'),
(14, 'T2'),
(15, 'T2');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_decription` varchar(500) DEFAULT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_decription`, `item_image`, `item_register`) VALUES
(1, 'Samsung', 'Samsung Galaxy A31', 5840000.00, 'Galaxy A31 là mẫu smartphone tầm trung mới ra mắt đầu năm 2020 của Samsung. Thiết bị gây ấn tượng mạnh với ngoại hình thời trang, cụm 4 camera đa chức năng, vân tay dưới màn hình và viên pin khủng lên đến 5000 mAh.', 'assets/products/samsung-galaxy-a31-(15).jpg', '2020-07-10 00:00:00'),
(2, 'Samsung', 'Samsung Galaxy A51', 7790000.00, 'Galaxy A51 8GB là phiên bản nâng cấp RAM của smartphone tầm trung đình đám Galaxy A51 từ Samsung. Sản phẩm nổi bật với thiết kế sang trọng, màn hình Infinity-O cùng cụm 4 camera đột phá.', 'assets/products/samsung-galaxy-a51-8gb-(13).jpg', '2020-07-10 00:00:00'),
(3, 'Samsung', 'Samsung Galaxy Fold', 50000000.00, 'Sau rất nhiều chờ đợi thì Samsung Galaxy Fold - chiếc smartphone màn hình gập đầu tiên của Samsung cũng đã chính thức trình làng với thiết kế mới lạ.', 'assets/products/samsung-galaxy-fold-black-600x600.jpg', '2020-07-10 00:00:00'),
(4, 'Samsung', 'Samsung Galaxy Z Flip', 36000000.00, 'Cuối cùng sau bao nhiêu thời gian chờ đợi, chiếc điện thoại Samsung Galaxy Z Flip đã được Samsung ra mắt tại sự kiện Unpacked 2020. Siêu phẩm với thiết kế màn hình gập vỏ sò độc đáo, hiệu năng tuyệt đỉnh cùng nhiều công nghệ thời thượng, dẫn dầu 2020.', 'assets/products/samsung-galaxy-z-flip-den-600x600-600x600.jpg', '2020-07-10 00:00:00'),
(5, 'Samsung', 'Samsung Galaxy Note 10', 15990000.00, 'Nếu như từ trước tới nay dòng Galaxy Note của Samsung thường ít được các bạn nữ sử dụng bởi kích thước màn hình khá lớn khiến việc cầm nắm trở nên khó khăn thì Samsung Galaxy Note 10 sẽ là chiếc smartphone nhỏ gọn, phù hợp với cả những bạn có bàn tay nhỏ.', 'assets/products/samsung-galaxy-note-10-silver-600x600.jpg', '2020-07-10 00:00:00'),
(6, 'Samsung', 'Samsung Galaxy S10+\r\n', 19990000.00, 'Samsung Galaxy S10+ 128GB là một trong những chiếc smartphone được trông chờ nhiều nhất trong năm 2019 và không phụ sự kỳ vọng của mọi người thì chiếc Galaxy S thứ 10 của Samsung thực sự gây ấn tượng mạnh cho người dùng.', 'assets/products/samsung-galaxy-s10-plus-white-600x600.jpg', '2020-07-10 00:00:00'),
(7, 'Samsung', 'Samsung Galaxy A80', 14990000.00, 'Samsung Galaxy A80 là chiếc smartphone mang trong mình rất nhiều đột phá của Samsung và hứa hẹn sẽ là \"ngọn cờ đầu\" cho những chiếc smartphone sở hữu một màn hình tràn viền thật sự.', 'assets/products/samsung-galaxy-a80-050320-050301-600x600.jpg', '2020-07-10 00:00:00'),
(8, 'Samsung', 'Samsung Galaxy S10 Lite', 12990000.00, 'Samsung Galaxy S10 Lite là một phiên bản khác của dòng Galaxy S10 đã ra mắt trước đó nhưng mang trong mình khá nhiều khác biệt về ngoại hình cũng như bên trong.', 'assets/products/samsung-galaxy-s10-lite-blue-thumb-600x600.jpg', '2020-07-10 00:00:00'),
(9, 'Apple', 'iPhone 11 Pro Max 512GB', 39990000.00, 'Để tìm kiếm một chiếc smartphone có hiệu năng mạnh mẽ và có thể sử dụng mượt mà trong 2-3 năm tới thì không có chiếc máy nào xứng đang hơn chiếc iPhone 11 Pro Max 512GB mới ra mắt trong năm 2019 của Apple.', 'assets/products/iphone-11-pro-max-512gb-gold-600x600.jpg', '2020-07-10 00:00:00'),
(10, 'Apple', 'iPhone 11 Pro Max 256GB\r\n', 35990000.00, 'iPhone 11 Pro Max 256GB là chiếc iPhone cao cấp nhất trong bộ 3 iPhone Apple giới thiệu trong năm 2019 và quả thực chiếc smartphone này mang trong mình nhiều trang bị xứng đáng với tên gọi \"Pro\".', 'assets/products/iphone-11-pro-max-256gb-black-600x600.jpg', '2020-07-10 00:00:00'),
(11, 'Apple', 'iPhone 11 Pro 256GB\r\n', 34990000.00, 'iPhone 11 Pro 256GB có lẽ sẽ là chiếc iPhone được nhiều người dùng lựa chọn khi nó sở hữu mức giá tốt hơn chiếc iPhone 11 Pro Max nhưng vẫn sở hữu tất cả những ưu điểm trên người anh em của mình.', 'assets/products/iphone-11-pro-256gb-black-600x600.jpg', '2020-07-10 00:00:00'),
(12, 'Apple', 'iPhone 11 Pro Max 64GB\r\n', 30490000.00, 'Tong năm 2019 thì chiếc smartphone được nhiều người mong muốn sở hữu trên tay và sử dụng nhất không ai khác chính là iPhone 11 Pro Max 64GB tới từ nhà Apple.', 'assets/products/iphone-11-pro-max-(21).jpg', '2020-07-10 00:00:00'),
(13, 'Apple', 'iPhone Xs Max 256GB\r\n', 25990000.00, 'Sau 1 năm mong chờ, chiếc smartphone cao cấp nhất của Apple đã chính thức ra mắt mang tên iPhone Xs Max 256 GB. Máy các trang bị các tính năng cao cấp nhất từ chip A12 Bionic, dàn loa đa chiều cho tới camera kép tích hợp trí tuệ nhân tạo.', 'assets/products/iphone-xs-max-256gb-white-600x600.jpg', '2020-07-10 00:00:00'),
(14, 'Apple', 'iPhone 11 Pro 64GB\r\n', 30990000.00, 'Nếu như bây giờ để lựa chọn một thiết bị có thể sử dụng ổn định và được cập nhật trong khoảng 3 năm nữa thì không có sự lựa chọn nào xuất sắc hơn chiếc iPhone 11 Pro 64GB, siêu phẩm mới được giới thiệu cách đây không lâu tới từ Apple.', 'assets/products/iphone-11-pro-black-600x600.jpg', '2020-07-10 00:00:00'),
(15, 'Apple', 'iPhone 11 256GB', 24990000.00, 'iPhone 11 256GB là chiếc máy có mức giá \"dễ chịu\" trong bộ 3 iPhone vừa được Apple giới thiệu và nếu bạn muốn được trải nghiệm những nâng cấp về camera mới hay hiệu năng hàng đầu mà lại không muốn bỏ ra quá nhiều tiền thì đây thực sự là lựa chọn hàng đầu dành cho bạn.', 'assets/products/iphone-11-256gb-black-600x600.jpg', '2020-07-10 00:00:00'),
(16, 'Apple', 'iPhone 11 128GB\r\n', 22990000.00, 'Được xem là phiên bản iPhone \"giá rẻ\" trong bộ 3 iPhone mới ra mắt nhưng iPhone 11 128GB vẫn sở hữu cho mình rất nhiều ưu điểm mà hiếm có một chiếc smartphone nào khác sở hữu.', 'assets/products/iphone-11-128gb-green-600x600.jpg', '2020-07-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` tinyint(1) NOT NULL DEFAULT 0,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `first_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `register_date` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_type`, `username`, `password`, `email`, `first_name`, `last_name`, `address`, `register_date`) VALUES
(1, 1, '123', '$2y$10$Z/4TYm3e/CMQNFmtlhPCmuN9fihj0l/OL7I3ouXuR4OAtKRm9aVMy', '123@gmail.com', 'Quoc Anh', 'Tran', 'KTX Khu B', NULL),
(8, 1, 'admin', '$2y$10$aLuoxJ6.Dl3VrSnSIUxrjedmRB2RH9UMd8iC4HbsdF/.LC.P6dSK6', 'tuananh8423@gmail.com', 'Đào', 'Tuấn Anh', 'KTX Khu B', '2020-07-08 02:35:37'),
(9, 0, 'tuananh8423', '$2y$10$sO3iT27SH3ehj6Htq3lAl.UNHmgCzQkxFRXN17nQYB9.sbE8J/Ffy', 'tuananh18423@gmail.com', 'Tuấn Anh', 'Đào', 'KTX Khu B, Tô Vĩnh Diện, Đông Hòa', '2020-07-08 02:37:07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
