-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2022 lúc 04:40 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoe`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shoe_id` int(11) NOT NULL,
  `shoe_color` varchar(255) NOT NULL,
  `shoe_size` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `shoe_id`, `shoe_color`, `shoe_size`, `status`) VALUES
(35, 19, 28, 'Đen', 40, 3),
(36, 19, 32, 'Yellow/Bliss', 40, 2),
(37, 19, 35, 'Màu đỏ rượu vang nhạt/Hải quân Armory/Màu bạc hà', 38, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Converse'),
(2, 'Reebok'),
(3, 'MLB'),
(4, 'Nike'),
(5, 'Adidas');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `cart_id`, `date`) VALUES
(24, 33, '2022-11-30'),
(25, 35, '2022-11-30'),
(26, 36, '2022-12-12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoe`
--

CREATE TABLE `shoe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` bigint(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `review` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `shoe`
--

INSERT INTO `shoe` (`id`, `name`, `price`, `sale`, `size`, `category_id`, `color`, `review`) VALUES
(29, 'Giày cổ thấp Forum', 1200000, 10, '38,39,40', 5, 'Trắng', 'Có dây buộc Thân giày bằng da và da lộn Đế ngoài bằng cao su Màu sản phẩm: Cloud White / Acid Orange / Crew Blue Mã sản phẩm: FY4967'),
(30, 'Giày Forum Low', 2500000, 15, '38,39,40', 5, 'Trắng', 'Dáng regular fit Có dây buộc Thân giày bằng da tổng hợp Lớp lót bằng vải dệt Đế ngoài bằng cao su Primegreen Màu sản phẩm: WHITE/BLUE Mã sản phẩm: FY7756'),
(31, 'Giày Nizza', 1800000, 5, '38,39,40', 5, 'Xanh', 'Giày Adidas Nizza chính hãng Đức. Thế giới giày Adidas Nizza Nam Nữ cao cấp, đa dạng Nizza Flatform, Trefoil, Blackpink, Pride, Hi,…phiên bản mới nhất, dáng thể thao Sneakers trẻ trung, nâng đỡ chuyển động ✓ Giao hàng toàn quốc ✓ Đa dạng màu sắc ✓ Đủ Size ✓ Giảm giá tới 20%. .   Giày Adidas Nizza  Giày Adidas Nizza Oversize Heel Logo EF5714 Màu Trắng XámHẾT HÀNG 16% OFF Giày Adidas Nizza Oversize Heel Logo EF5714 Màu Trắng Xám (59) 1.600.000 ₫ 1.900.000 ₫'),
(32, 'Giày ZX 8000 Lego', 240000, 0, '38,39,40', 5, 'Yellow/Bliss', 'ZX 8000 Lego sẽ được phát hành với 6 phiên bảng màu khác nhau. Đôi giày sẽ được thiết kế chỉnh sữa ở phần gót để phù hợp với các miếng lắp Lego khác nhau. Cùng đó chiếc hộp cũng được thiết kế trông giống với hộp đồ chơi Lego kích thước lớn. Bộ ZX 8000 sẽ được phát hành với 6 phiên bản màu đen, xanh biển, đỏ, vàng, xanh lá và xám vào ngày 08 tháng 05 năm 2021 '),
(33, 'Giày Air Jordan 1 Elevated High', 5590000, 0, '38,39,40', 4, 'Trắng/Xanh', 'Nike Air Jordan 1 với lịch sử hơn 30 năm luôn được nhìn nhận như một trong những dòng sản phẩm thành công nhất của Nike. Nike Jordan 1 luôn bán hết một cách nhanh chóng ngay từ khi ra mắt đến nay, luôn là sản phẩm được các tín đồ thời trang chú ý hàng đầu. Air Jordan được đặt dựa theo ngôi sao bóng rổ lừng danh Michael Jordan – huyền thoại của NBA.'),
(34, 'EP LeBron XX', 5869000, 0, '38,39,40', 4, 'Hồng', 'Gần 2 thập kỷ trong sự nghiệp vượt qua mọi kỳ vọng cao cả, LeBron James đã từ chối giải quyết bất cứ điều gì thấp hơn sự vĩ đại, ngay cả khi anh là người đặt ra tiêu chuẩn cho các thế hệ sau. Giờ đây, chiếc giày đặc trưng mới nhất của anh ấy nhẹ hơn, thấp sát đất và giống như động cơ turbo. Nó không giống bất kỳ thiết kế nào mà LeBron đã mặc trước đây—thoải mái và hỗ trợ, nhưng cắt thấp, nhanh như lông và được tạo ra để dẫn đầu phong cách chơi điên cuồng ngày nay. Phiên bản này được sản xuất để '),
(35, 'Giày Nike Air Max 90 NRG', 7428000, 30, '38,39,40', 4, 'Màu đỏ rượu vang nhạt/Hải quân Armory/Màu bạc hà', 'Đăng ký và cảm nhận di sản. Được sản xuất tại nơi giao thoa của nghệ thuật, âm nhạc và văn hóa, đôi giày chạy bộ vô địch này đã góp phần định hình thập niên 90. Được các tổng thống đeo, được cách mạng hóa thông qua các lần hợp tác và được tôn vinh bằng những đường phối màu hiếm có, hình ảnh nổi bật, đế ngoài Waffle và đệm Không khí lộ ra ngoài giúp nó tồn tại và hoạt động tốt.  Hiển thị: Màu đỏ rượu vang nhạt/Hải quân Armory/Màu bạc hà tươi/Trắng Phong cách: DM0035-500'),
(36, 'Giày Nike Dunk High Retro SE ‘Honeydew Melon Green', 5499000, 0, '38,39,40', 4, 'Xám', 'Nike Dunk High Retro SE ‘Honeydew Melon Green’  hiện đã có sẵn tại Sneaker Daily Shop với mức giá hấp dẫn, đừng bỏ lỡ cơ hội của mình nhé!  Cập nhật nhanh nhất lịch ra mắt của các mẫu giày mới nhất và tin tức thời trang trong nước và trên thế giới bằng cách theo dõi Sneaker Daily trên Facebook hoặc Instagram.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoe_image`
--

CREATE TABLE `shoe_image` (
  `id` int(11) NOT NULL,
  `shoe_id` int(11) NOT NULL,
  `link_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `shoe_image`
--

INSERT INTO `shoe_image` (`id`, `shoe_id`, `link_image`) VALUES
(40, 28, 'imageShoe/nike1.jpg'),
(41, 29, 'imageShoe/GIÀY CỔ THẤP FORUM.jpg'),
(42, 30, 'imageShoe/GIÀY FORUM LOW CL.jpg'),
(43, 31, 'imageShoe/GIÀY NIZZA.jpg'),
(44, 32, 'imageShoe/ZX 8000 LEGO.jpg'),
(45, 33, 'imageShoe/Air Jordan 1 Elevate High.jpg'),
(46, 34, 'imageShoe/LeBron XX EP.jpg'),
(47, 35, 'imageShoe/Nike Air Max 90 G NRG.jpg'),
(48, 36, 'imageShoe/Nike Dunk High Retro.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `gender` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `dob`, `address`, `role`, `gender`, `email`, `phone`) VALUES
(19, 'baodan2k3', 'af211260e72d5cd796d03b87880ab3d1', 'nguyen bao dan', '2003-07-30', 'Đức Phú - Mộ Đức - Quảng Ngãi', 1, 1, 'baodan307@gmail.com', '+849830238'),
(21, 'users', 'af211260e72d5cd796d03b87880ab3d1', 'users', '2022-12-05', 'phuoc Thuan', 0, 1, 'baodan027@gmail.com', '+849830238');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `shoe`
--
ALTER TABLE `shoe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `shoe_image`
--
ALTER TABLE `shoe_image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `shoe`
--
ALTER TABLE `shoe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `shoe_image`
--
ALTER TABLE `shoe_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
