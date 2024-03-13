-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 13, 2024 lúc 04:08 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mvc_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `username`, `password`) VALUES
(1, 'hieuadmin', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'hieuuser', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'duyadmin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_post`
--

CREATE TABLE `tbl_category_post` (
  `id_category_post` int(11) NOT NULL,
  `title_category_post` varchar(255) NOT NULL,
  `desc_category_post` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_post`
--

INSERT INTO `tbl_category_post` (`id_category_post`, `title_category_post`, `desc_category_post`) VALUES
(2, 'Luật pháp', 'Luật pháp trong nước và quốc tế'),
(5, 'Tin tức hot !!!', 'Tập hợp những tin tức mới nhất');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `id_category_product` int(11) NOT NULL,
  `title_category_product` varchar(100) NOT NULL,
  `desc_category_product` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`id_category_product`, `title_category_product`, `desc_category_product`) VALUES
(33, 'Điện thoại', 'Điện thoại giá rẻ cực tốt'),
(39, 'Iphone', 'Iphone cũ giá rẻ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `order_code` varchar(100) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `order_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `order_code`, `order_date`, `order_status`) VALUES
(2, '1775', '09/03/2024 11:53:02pm', 1),
(3, '1265', '09/03/2024 11:57:09pm', 1),
(4, '7282', '12/03/2024 11:22:26am', 1),
(5, '3896', '12/03/2024 01:25:37pm', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_code` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_code`, `product_id`, `product_quantity`, `name`, `phone`, `email`, `address`, `content`) VALUES
(1, '1775', 24, 2, 'Bùi Tấn Trường', '0203040534', 'truong@gmail.com', 'Phường 13', 'Ship nhanh nha shop'),
(2, '1775', 26, 2, 'Bùi Tấn Trường', '0203040534', 'truong@gmail.com', 'Phường 13', 'Ship nhanh nha shop'),
(3, '1775', 25, 1, 'Bùi Tấn Trường', '0203040534', 'truong@gmail.com', 'Phường 13', 'Ship nhanh nha shop'),
(4, '1265', 24, 2, 'Nguyễn Đức Minh', '0987665432', 'ducminhnguyen@gmail.com', 'Phường 8, Quận Bình Thạnh', 'Giao hàng nhanh, tôi cần gấp'),
(5, '1265', 26, 2, 'Nguyễn Đức Minh', '0987665432', 'ducminhnguyen@gmail.com', 'Phường 8, Quận Bình Thạnh', 'Giao hàng nhanh, tôi cần gấp'),
(6, '1265', 25, 1, 'Nguyễn Đức Minh', '0987665432', 'ducminhnguyen@gmail.com', 'Phường 8, Quận Bình Thạnh', 'Giao hàng nhanh, tôi cần gấp'),
(7, '7282', 24, 5, 'Trần Duy', '0976554748', 'tranduy@gmail.com', 'Quận 3', 'Trần Duy mua hàng'),
(8, '3896', 26, 5, 'Trần Nguyên', '0987665432', 'nguyentran@gmail.com', 'Quận 7', 'Hàng chuẩn, nếu không tôi trả lại.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id_post` int(11) NOT NULL,
  `title_post` varchar(255) NOT NULL,
  `content_post` text NOT NULL,
  `image_post` varchar(255) NOT NULL,
  `id_category_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_post`
--

INSERT INTO `tbl_post` (`id_post`, `title_post`, `content_post`, `image_post`, `id_category_post`) VALUES
(7, 'Quần áo thời trang mới ', 'quần áo của thương hiệu remind mới ra mắt đã tạo tiếng vang rất lớn với thiết kế độc đáo.', 'remind1708695732.jpg', 5),
(8, 'Đối tượng sử dụng quần áo thương hiệu fake', 'Ngày hôm qua (Mùng 6 Tết), đối tượng T.T.D đã có hành vi sử dụng hàng fake để đi chơi Tết', 'anhdaidien1708695845.jpg', 2),
(9, 'Iphone 15 vừa ra mắt', 'Apple vừa cho ra mắt mẫu Iphone mới nhất trong năm 2024', 'iphone 15PROMAX1709737866.jpg', 5),
(10, 'Facebook mất kết nối, cả nước hoang mang', 'Khoảng 22h20 phút ngày 5/3, mạng xã hội Facebook, WhatsApp, Instagram cùng ứng dụng nhắn tin Messenger đều ngừng hoạt động trên toàn thế giới. Diễn biến này đã gây ảnh hưởng không hề nhỏ cho những người sử dụng dịch vụ của Facebook.\r\n\r\nGần 15 năm phát triển bùng nổ, mạng xã hội lớn nhất hành tinh đã không ít lần trải qua sự cố sập trên toàn cầu. Tuy nhiên, lỗi người dùng bị \"văng\" ra khỏi tài khoản của mình vào tối nay (5/3) là một trong những sự cố khiến nhiều người hoảng hốt nhất.', 'fb1202403052358101709737317.jpg', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(11) NOT NULL,
  `title_product` varchar(255) NOT NULL,
  `price_product` varchar(100) NOT NULL,
  `desc_product` text NOT NULL,
  `quantity_product` int(11) NOT NULL,
  `image_product` varchar(100) NOT NULL,
  `id_category_product` int(11) NOT NULL,
  `product_hot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `title_product`, `price_product`, `desc_product`, `quantity_product`, `image_product`, `id_category_product`, `product_hot`) VALUES
(24, 'Iphone 15 ProMax', '26490000', '<p>M&agrave;n h&igrave;nh: 6.7 inches, 120Hz<br />\r\n<br />\r\nCamera trước: 12 MP<br />\r\n<br />\r\nCamera sau: 48 MP &amp; 12 MP, 12 MP<br />\r\n<br />\r\nChipset: Apple A17 Pro<br />\r\n<br />\r\nRAM: 8 GB<br />\r\n<br />\r\nBộ nhớ trong: 256GB</p>\r\n', 45, 'iphone 15PROMAX1709741588.jpg', 39, 1),
(25, 'Samsung S24 Ultra', '23990000', '<p>Chip Exynos 2400.<br />\r\n<br />\r\nRAM: 8 GB.<br />\r\n<br />\r\nDung lượng: 256 GB.<br />\r\n<br />\r\nCamera sau: Ch&iacute;nh 50 MP &amp; Phụ 12 MP, 10 MP.<br />\r\n<br />\r\nCamera trước: 12 MP.<br />\r\n<br />\r\nPin 4000 mAh, Sạc 25 W.</p>\r\n', 1190, 'S24ultra1709741620.jpg', 33, 1),
(26, 'Redmi Note 13 Pro Plus', '6990000', '<p>Thẻ SIM: 2 SIM, Nano SIM<br />\r\n<br />\r\nM&agrave;n h&igrave;nh: 6.67 inches, OLED<br />\r\n<br />\r\nĐộ ph&acirc;n giải: 1080 x 2400 pixels<br />\r\n<br />\r\nCPU: Mediatek Dimensity 7200 Ultra (4 nm)<br />\r\n<br />\r\nRAM: 8GB/12GB<br />\r\n<br />\r\nBộ nhớ/ Thẻ nhớ: 128GB/256GB/512GB</p>\r\n', 36, 'redmi-note-13-pro-plus1709741731.jpg', 33, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_category_post`
--
ALTER TABLE `tbl_category_post`
  ADD PRIMARY KEY (`id_category_post`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`id_category_product`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Chỉ mục cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id_post`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_category_post`
--
ALTER TABLE `tbl_category_post`
  MODIFY `id_category_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `id_category_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
