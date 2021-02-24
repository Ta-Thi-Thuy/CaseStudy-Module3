-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th1 06, 2021 lúc 09:08 PM
-- Phiên bản máy phục vụ: 8.0.22-0ubuntu0.20.04.3
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `Case-module3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `user`, `address`, `email`, `phone`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Tạ Thị Thùy', 'Sóc Sơn', 'thuy@gmail.com', '0964290602', '$2y$10$Ufdrz173zVgvpwivtAaZ.u4EN2R1fXuO/UhVdDYiv3qez0tyxgRAq', NULL, NULL),
(2, 'Quỳnh Lee', 'Ba Vì', 'bachcongtu2904@gmail.com', '0358166796', '$2y$10$ECH7q/6qF5IUs0yRlNDs3eDsa1sjp4B46r/bp20ln8bCvN5VjFWf2', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_01_04_075004_create_products_table', 1),
(2, '2021_01_04_075028_create_product_lines_table', 1),
(3, '2021_01_04_075046_create_orders_table', 1),
(4, '2021_01_04_075056_create_orderdetails_table', 1),
(5, '2021_01_04_075109_create_customers_table', 1),
(6, '2021_01_04_075228_create_users_table', 1),
(7, '2021_01_04_093751_add_product_lines_to_products', 1),
(8, '2021_01_04_094052_add_products_lines_to_orderdetails', 1),
(9, '2021_01_04_094333_add_orders_to_orderdetails', 1),
(10, '2021_01_04_145701_add_cutomers_to_orders', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderNumber` int UNSIGNED DEFAULT NULL,
  `productCode` int UNSIGNED DEFAULT NULL,
  `quantity` int NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int UNSIGNED NOT NULL,
  `orderDate` date NOT NULL,
  `requiredDate` date NOT NULL,
  `shippedDate` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerNumber` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int UNSIGNED NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productLine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripton` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voucher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `productName`, `productLine`, `descripton`, `quantity`, `price`, `img`, `voucher`, `created_at`, `updated_at`) VALUES
(1, 'Cua hoàng đế', 'Hải sản', 'Cua hoàng đế hay còn được biết đến với tên gọi tiếng Anh là King crab là một họ cua biển. Đây là một họ cua có nhiều loài có giá trị kinh tế trong đó có loài cua Alaska hay còn gọi là cua hoàng đế Alaska là loài cua đắt tiền với chất lượng thịt thượng hạng, được ưa chuộng trong các nhà hàng, quán ăn với giá cả đắt đỏ.', 4, '1 500 000', 'cua.jpg', '10', NULL, NULL),
(2, 'Cải thảo', 'Rau củ', 'Bắp cải thảo còn được gọi là cải bao, cải cuốn, cải bắp tây, là phân loài thực vật thuộc họ Cải ăn được có nguồn gốc từ Trung Quốc, được sử dụng rộng rãi trong các món ăn ở Đông Nam Á và Đông Á.', 20, '5000', 'caithao.webp', '0', NULL, NULL),
(3, 'Dưa hấu', 'Trái cây', 'Dưa hấu là một loài thực vật thuộc họ Cucurbitaceae, một loài thực vật có hoa giống như cây nho có nguồn gốc từ Tây Phi. Nó được trồng để lấy quả. Dưa hấu là một loài dây leo xoắn và dài trong họ thực vật có hoa Cucurbitaceae. Có bằng chứng từ hạt giống dưa hấu trong các ngôi mộ Pharaoh ở Ai Cập cổ đại.', 10, '12000', 'duahau.webp', '3', NULL, NULL),
(4, 'Dừa', 'Trái cây', 'Dừa, hay cọ dừa, (danh pháp hai phần: Cocos nucifera), là một loài cây trong họ Cau (Arecaceae). Nó cũng là thành viên duy nhất trong chi Cocos và là một loại cây lớn, thân đơn trục (nhiều khi gọi là nhóm thân cau dừa) có thể cao tới 30 m, với các lá đơn xẻ thùy lông chim 1 lần, cuống và gân chính dài 4–6 m các thùy với gân cấp 2 có thể dài 60–90 cm; lá kèm thường biến thành bẹ dạng lưới ôm lấy thân; các lá già khi rụng để lại vết sẹo trên thân.', 12, '10000', 'dua.jpg', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_lines`
--

CREATE TABLE `product_lines` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_lines`
--

INSERT INTO `product_lines` (`id`, `description`, `img`, `created_at`, `updated_at`) VALUES
('Hải sản', 'Hải sản hay đồ biển với nghĩa rộng, thủy hải sản là bất kỳ sinh vật biển được sử dụng làm thực phẩm cho con người. Hải sản bao gồm các loại cá biển, động vật thân mềm, động vật giáp xác, động vật da gai. Ngoài ra, các thực vật biển ăn được, chẳng hạn như một số loài rong biển và vi tảo', 'haisan.jpg', NULL, NULL),
('Rau củ', 'Rau, có thời kỳ còn gọi là la ghim, là tên gọi chung cho những bộ phận của thực vật được con người hay động vật dùng làm thực phẩm. Ý nghĩa này hiện vẫn được sử dụng phổ biến và áp dụng cho những thực vật có bộ phận ăn được, bao gồm hoa, quả, thân, lá, rễ và hạt.', 'raucu.jpg', NULL, NULL),
('Trái cây', 'quả (phương ngữ miền Bắc) hoặc trái (phương ngữ miền Nam) là một phần của những loại thực vật có hoa, chuyển hóa từ những mô riêng biệt của hoa, có thể có một hoặc nhiều bầu nhụy và trong một số trường hợp thì là mô phụ. Quả là phương tiện để thực vật phân tán hạt của chúng.', 'traicay.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD KEY `orderdetails_productcode_foreign` (`productCode`),
  ADD KEY `orderdetails_ordernumber_foreign` (`orderNumber`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_customernumber_foreign` (`customerNumber`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_productline_foreign` (`productLine`);

--
-- Chỉ mục cho bảng `product_lines`
--
ALTER TABLE `product_lines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ordernumber_foreign` FOREIGN KEY (`orderNumber`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orderdetails_productcode_foreign` FOREIGN KEY (`productCode`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customernumber_foreign` FOREIGN KEY (`customerNumber`) REFERENCES `customers` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_productline_foreign` FOREIGN KEY (`productLine`) REFERENCES `product_lines` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
