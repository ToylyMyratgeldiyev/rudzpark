-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 23 2024 г., 19:16
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `products`
--

-- --------------------------------------------------------

--
-- Структура таблицы `airphone`
--

CREATE TABLE `airphone` (
  `id` int NOT NULL,
  `manufacturer` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `model` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `connect` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `color` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `warranty` int NOT NULL,
  `type` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `design` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `made_in` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `discount` int DEFAULT NULL,
  `image_name` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `product_title` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'airphone',
  `availble` int NOT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `laptop`
--

CREATE TABLE `laptop` (
  `manufacturer` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `id` int NOT NULL,
  `OS` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `color` varchar(15) COLLATE utf8mb3_unicode_ci NOT NULL,
  `diagonal` double NOT NULL,
  `screen_tech` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `memory` int NOT NULL,
  `internal_memory` int NOT NULL,
  `camera` int NOT NULL,
  `accumulator` int NOT NULL,
  `height` int NOT NULL,
  `width` int NOT NULL,
  `weight` int NOT NULL,
  `warranty` int NOT NULL,
  `price` int NOT NULL,
  `discount` int NOT NULL,
  `available` int NOT NULL,
  `image_name` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `model` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `product_title` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'laptop',
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Дамп данных таблицы `laptop`
--

INSERT INTO `laptop` (`manufacturer`, `id`, `OS`, `color`, `diagonal`, `screen_tech`, `memory`, `internal_memory`, `camera`, `accumulator`, `height`, `width`, `weight`, `warranty`, `price`, `discount`, `available`, `image_name`, `model`, `product_title`, `rating`) VALUES
('HONOR', 2, 'Windows 11', 'темно-серый', 16, 'IPS', 16, 512, 1, 60, 356, 250, 1750, 36, 2583, 0, 12, 'a3f33d677d3c7842376b44670c33954b.jpg', 'MagicBook X 16', 'laptop', 4.5),
('Infinix', 3, 'без ОС', 'серебристый', 16, 'IPS', 16, 512, 2, 70, 357, 249, 1780, 36, 1617, 0, 23, 'efb742216c230b4ae354af209ff29c20.jpg', 'Inbook Y3 Max', 'laptop', 9),
('ASUS', 4, 'без ОС', 'черный', 15.6, 'IPS', 8, 512, 2, 42, 360, 233, 1630, 12, 1719, 0, 23, '5b5ee920992ab2207a8aa54d0daa73b3.jpg', 'Vivobook Go 15', 'laptop', 9.8),
('Thunderobot', 5, ' Windows 11 Pro', 'черный', 15.6, 'IPS', 16, 512, 2, 63, 358, 258, 2300, 36, 3498, 10, 23, '62b0402e364e91c96206dae458f9c721.jpg', '911 X Wild Hunter', 'laptop', 4.5),
('HP', 6, 'Windows 11 Home', 'золотистый', 15.6, 'IPS', 16, 512, 2, 41, 360, 234, 1750, 12, 2650, 6, 32, 'abee2ebb9c6443a42e13b6e9d58faa3e.jpg', 'Pavilion 15', 'laptop', 4.5),
('HP', 7, 'без ОС', 'серый', 17.3, 'IPS', 16, 512, 2, 41, 401, 258, 2080, 12, 3675, 6, 121, '97b0b8fb24d84f3fb8be4d128d874b08.jpg', '470 G10', 'laptop', 4.5),
('HP', 8, 'без ОС', 'серебристый', 15.6, 'IPS', 16, 512, 2, 51, 359, 234, 1740, 12, 3340, 4, 2323, '18ad22bf066a1204ee3814d31cc085cb.jpg', 'EliteBook 650 G10', 'laptop', 4.5),
('Lenovo', 9, 'без ОС', 'темно-серый', 16, 'IPS', 16, 512, 2, 71, 360, 360, 2600, 12, 3497, 0, 34, 'f6164742f74d6c6a54212bc94b821db0.jpg', 'IdeaPad Gaming 3', 'laptop', 9.6),
('Lenovo', 10, 'без ОС', 'серый', 16, 'IPS', 8, 512, 2, 47, 359, 257, 1740, 12, 1697, 0, 23, '2f17df3b8d1c0709371d5e63f824e4b5.jpg', 'IdeaPad Slim 3', 'laptop', 9),
('MSI', 11, 'без ОС', 'черный', 17.3, 'IPS', 16, 512, 2, 53, 398, 273, 2600, 12, 2799, 0, 12, '23a923510d62c992f9d81dceb5da2318.jpg', 'Katana ', 'laptop', 4.5),
('ASUS', 12, ' без ОС', 'черный', 16, 'IPS', 16, 1024, 1, 52, 355, 243, 1900, 12, 4299, 6, 12, '14a1d40a43d8539bc54a6870e2a7511e.jpg', 'ROG Zephyrus M16', 'laptop', 4.5),
('Dell', 13, 'Windows 11 Pro', 'черный', 15.6, 'IPS', 16, 512, 2, 41, 359, 236, 1660, 12, 2049, 0, 132, '599dd92120fb97e620e7efeaee113246.png', 'Vostro 15', 'laptop', 9.3),
('Xiaomi', 14, 'Windows 11 pro', 'серый', 16, 'IPS', 32, 1024, 2, 99, 355, 249, 1900, 12, 4499, 0, 23, '92ef9960d3a864ee1eb777f83229eccc.jpg', 'RedmiBook Pro 16 ', 'laptop', 9.8),
('Xiaomi', 15, 'WIndows 11 pro', 'серый', 14, 'IPS', 16, 512, 2, 56, 316, 220, 1500, 12, 2950, 0, 32, 'c9629ebeedbbed820767dbf6086c659e.jpg', 'RedmiBook Pro 14', 'laptop', 9.8),
('Huawei', 16, 'Windows 11 Home', 'серебристый', 14.2, 'IPS', 16, 1024, 2, 60, 310, 221, 1260, 12, 6030, 0, 23, '2896875468778b8474a78b48f2d097da.jpg', 'MateBook X Pro', 'laptop', 4.5);

-- --------------------------------------------------------

--
-- Структура таблицы `smartphones`
--

CREATE TABLE `smartphones` (
  `id` int NOT NULL,
  `manufacturer` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `OS` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `color` varchar(15) COLLATE utf8mb3_unicode_ci NOT NULL,
  `diagonal` float NOT NULL,
  `screen_tech` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `memory` int NOT NULL,
  `internal_memory` int NOT NULL,
  `camera` int NOT NULL,
  `accumulator` int NOT NULL,
  `height` int NOT NULL,
  `width` int NOT NULL,
  `weight` int NOT NULL,
  `warranty` int NOT NULL,
  `price` float NOT NULL,
  `model` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `image_name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `discount` int DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `available` int NOT NULL,
  `product_title` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Дамп данных таблицы `smartphones`
--

INSERT INTO `smartphones` (`id`, `manufacturer`, `OS`, `color`, `diagonal`, `screen_tech`, `memory`, `internal_memory`, `camera`, `accumulator`, `height`, `width`, `weight`, `warranty`, `price`, `model`, `image_name`, `discount`, `rating`, `available`, `product_title`) VALUES
(60, 'Xiaomi', 'Android', 'нефритово-зелен', 6.36, 'IPS', 12, 512, 50, 4610, 153, 72, 193, 12, 2730, '14', '19859e9da5ecfd14ff84f85dd8f6df65.jpg', 0, 9.2, 12, ''),
(61, 'Xiaomi', 'Android', 'полуночный черн', 6.67, 'IPS', 8, 256, 108, 5000, 162, 76, 188, 12, 756, 'Redmi Note 13', 'fb2a4d553688cdb01ae046bc033c6ea7.jpg', 10, 9.5, 129, ''),
(64, 'Xiaomi', 'Android', 'белый', 6.74, 'IPS', 8, 256, 50, 5000, 168, 78, 192, 12, 490, 'Redmi 13C', '2a012cf0f6dbedde6829740a5e27742e.jpg', 0, 9.9, 34, ''),
(66, 'Infinix', 'Andoid', 'зеленый', 6.66, 'IPS', 8, 256, 50, 5000, 178, 78, 178, 12, 449, 'Note 30i', 'ee9f81885a0ea84b2569414e5d2d7f7e.jpg', 0, 9, 32, ''),
(67, 'Infinix', 'Android', 'звездный черный', 6.56, 'IPS', 8, 128, 50, 5000, 164, 76, 190, 12, 379, 'Hot 40i', '4b054ba029a58f7e6cc745ba5dbaf3da.jpg', 0, 8, 12, ''),
(68, 'Infinix', 'Android', 'золотистый', 6.78, 'IPS', 8, 256, 50, 5000, 169, 77, 196, 12, 516, 'Hot 40', '2582fcc5da70045eb019794889dbb36d.jpg', 0, 9.9, 37, ''),
(69, 'Infinix', 'Android', 'магический черн', 6.67, 'AMOLED', 8, 256, 50, 5000, 163, 76, 203, 12, 724, 'Note 30', '674ae18d13a7dd9862e02abb078d2f08.jpg', 10, 8.2, 0, ''),
(70, 'Samsung', 'Android', 'зеленый', 6.6, 'AMOLED', 8, 128, 50, 4500, 157, 76, 196, 12, 1886, 'Galaxy S22+', '5c36eb52f944c13d8721159d82048806.jpg', 22, 7, 5, ''),
(71, 'Samsung', 'Android', 'фиолетовый', 6.7, 'AMOLED', 8, 256, 12, 3700, 165, 72, 187, 12, 2000, 'Galaxy Z Flip4', '65f7a96b1720a3c8c815570f939ee91f.jpg', 10, 7, 12, ''),
(72, 'Samsung', 'Android ', 'черный', 6.5, 'TFT', 2, 32, 8, 5000, 164, 76, 211, 12, 252, 'Galaxy A03', '5538940c093cbf9cacfb256a03c9fe2e.jpg', 0, 7, 10, ''),
(73, 'Apple', 'Apple iOS', 'черный', 6.1, 'OLED', 6, 128, 48, 3349, 147, 72, 171, 12, 2760, 'iPhone 15', 'f2982bab999b35704b26b1ea76509bb0.jpg', 10, 9.4, 120, ''),
(74, 'Apple', 'Apple IOS', 'природный титан', 6.1, 'OLED', 6, 256, 48, 3349, 147, 71, 187, 36, 3900, 'iPhone 15 Pro', '5d46f564b7102f2662f22cd586b9fdb7.jpg', 6, 9, 23, ''),
(75, 'Apple', 'Apple iOS', 'природный титан', 6.7, 'OLED', 6, 256, 48, 4422, 160, 77, 221, 36, 4300, 'iPhone 15 Pro Max', 'f41edf7376dc9852763d2adca7ba792d.jpg', 6, 9.8, 12, ''),
(76, 'Apple', 'Apple IOS', 'темная ночь', 6.1, 'OLED', 4, 128, 12, 3227, 147, 72, 174, 12, 2099, 'iPhone 13', '9533a8bb320fb53ab73c0610e0acfa50.jpg', 6, 9, 12, ''),
(77, 'Samsung', 'Android', 'черный фантом', 6.1, 'AMOLED', 8, 128, 50, 3990, 146, 71, 168, 12, 2100, ' Galaxy S23', 'e8cf8c7bf5361d199b5d661364411e8c.jpg', 6, 9.8, 123, ''),
(78, 'Apple', 'Apple IOS', 'полуночный', 6.1, 'OLED', 6, 128, 12, 3900, 147, 72, 172, 12, 2326, 'iPhone 14', '1c8736f5ff6d5d68b38bb658d2b8b1f2.jpg', 0, 9, 34, ''),
(79, 'Xiaomi', 'Android', 'полуночный черн', 6.67, 'AMOLED', 8, 256, 200, 5100, 161, 74, 187, 12, 1099, 'Redmi Note 13 Pro', 'a757e4dfb4af19ad88ad157755208262.jpg', 0, 7, 34, ''),
(80, 'POCO', 'Android', 'желтый', 6.67, 'AMOLED', 12, 512, 64, 5500, 160, 74, 186, 12, 1259, 'X6 Pro', '2871aac9c91aa356ac79004b46a6711d.jpg', 0, 7.9, 343, ''),
(81, 'Samsung', 'Android', 'черный фантом', 6.8, 'AMOLED', 12, 256, 200, 5000, 163, 78, 233, 12, 2990, 'Galaxy S23 Ultra', '43c0ead1ada453611669a66fee22bd94.jpg', 6, 7, 212, '');

-- --------------------------------------------------------

--
-- Структура таблицы `tablet`
--

CREATE TABLE `tablet` (
  `id` int NOT NULL,
  `manufacturer` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `model` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `OS` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `color` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `diagonal` double NOT NULL,
  `screen_tech` int NOT NULL,
  `memory` int NOT NULL,
  `internal_memory` int NOT NULL,
  `camera` int NOT NULL,
  `accumulator` int NOT NULL,
  `height` int NOT NULL,
  `width` int NOT NULL,
  `weight` int NOT NULL,
  `warranty` int NOT NULL,
  `price` int NOT NULL,
  `discount` int NOT NULL,
  `available` int NOT NULL,
  `image_name` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `product_title` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'tablet',
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Дамп данных таблицы `tablet`
--

INSERT INTO `tablet` (`id`, `manufacturer`, `model`, `OS`, `color`, `diagonal`, `screen_tech`, `memory`, `internal_memory`, `camera`, `accumulator`, `height`, `width`, `weight`, `warranty`, `price`, `discount`, `available`, `image_name`, `product_title`, `rating`) VALUES
(3, 'HONOR', 'Pad 9', 'Android', 'зеленый', 12.1, 0, 8, 128, 24, 8300, 180, 278, 555, 12, 923, 5, 32, 'efaef9ce5ed2654b27ff063a132e8219.jpg', 'tablet', 8),
(4, 'Apple', 'iPad Air 2022', 'Apple IOS', 'темно-серый', 10.9, 0, 8, 64, 12, 4000, 248, 179, 461, 12, 1811, 0, 12, '7b48ff8a86cc3e61d78a6ac94e9d8c3a.jpg', 'tablet', 9.8),
(5, 'Xiaomi', 'Pad 6', 'Android', 'темно-серый', 11, 0, 8, 256, 12, 5000, 254, 165, 490, 12, 1207, 0, 43, 'bc1ee4f1ceff3b3a3cb6b6fc0b74cd61.jpg', 'tablet', 9.6),
(6, 'Xiaomi', 'Redmi Pad SE', 'Android', 'темно-серый', 11, 0, 8, 256, 12, 6000, 167, 256, 478, 12, 709, 0, 34, 'eacfe7a09074e2282810e1a28923d23a.jpg', 'tablet', 8.2),
(7, 'HONOR ', 'Pad X9', 'Android', 'темно-серый', 11.5, 0, 4, 128, 12, 6000, 167, 267, 499, 12, 698, 0, 43, 'c6beb18de171e77ba0f48af4cb91f186.jpg', 'tablet', 9.5),
(8, 'Xiaomi', 'Pad 5', 'Android', 'серый космос', 11, 0, 6, 128, 12, 5000, 255, 166, 511, 12, 1050, 0, 34, 'e622b8d949749a34f65cdb330e7fa52d.jpg', 'tablet', 9.8),
(9, 'Samsung', 'Galaxy Tab A9', 'Android', 'темно-серый', 8.7, 0, 8, 128, 13, 6500, 211, 125, 332, 12, 707, 0, 65, '0ad8cd80ebd6aa2ff157b956e6600ddf.jpg', 'tablet', 9.8),
(10, 'Samsung', 'Galaxy Tab A9+', 'Android', 'графит', 11, 0, 8, 256, 13, 4500, 169, 257, 480, 12, 899, 0, 45, '6f718c052ecaa95c74bcb0c5bfc44cf4.jpg', 'tablet', 9.8),
(11, 'Xiaomi', 'Pad 6S Pro', 'Android', 'черный', 12.4, 0, 12, 512, 13, 4800, 279, 192, 590, 12, 2450, 0, 45, '80281df34326b5d09e912f16d93286fd.jpg', 'tablet', 9),
(12, 'Apple', 'iPad Pro 11', 'iOS', 'серый космос', 11, 0, 8, 128, 13, 4500, 248, 179, 466, 12, 2690, 0, 34, 'fdca6e92a65c26d9836c2c9bdba7500c.jpg', 'tablet', 9.5);

-- --------------------------------------------------------

--
-- Структура таблицы `TV`
--

CREATE TABLE `TV` (
  `id` int NOT NULL,
  `manufacturer` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `model` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `OS` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `color` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `diagonal` double NOT NULL,
  `screen_tech` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `memory` int NOT NULL,
  `internal_memory` int NOT NULL,
  `camera` int NOT NULL,
  `accumulator` int NOT NULL,
  `height` int NOT NULL,
  `width` int NOT NULL,
  `weight` int NOT NULL,
  `warranty` int NOT NULL,
  `price` int NOT NULL,
  `discount` int NOT NULL,
  `available` int NOT NULL,
  `image_name` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `rating` float DEFAULT NULL,
  `product_title` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT 'TV'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Дамп данных таблицы `TV`
--

INSERT INTO `TV` (`id`, `manufacturer`, `model`, `OS`, `color`, `diagonal`, `screen_tech`, `memory`, `internal_memory`, `camera`, `accumulator`, `height`, `width`, `weight`, `warranty`, `price`, `discount`, `available`, `image_name`, `rating`, `product_title`) VALUES
(3, 'Xiaomi', 'TV Q2', 'Android TV', 'Серый', 55, 'UHD', 2, 16, 0, 0, 766, 1230, 13, 12, 1800, 0, 37, '0cd36a89ddfcaed912e21aa4000821f5.jpg', 8, 'TV'),
(4, 'Hisense', '55E7KQ PRO', 'Vidaa', 'черный', 55, 'QLED', 2, 16, 0, 0, 763, 1230, 14, 12, 1998, 5, 44, 'ab106b973975165a4372964a727d0803.jpg', 4.5, 'TV'),
(5, 'LG', 'C3 OLED65C3RLA', 'LG webOS', 'серый', 65, 'OLED', 4, 32, 0, 0, 880, 1441, 16, 12, 6330, 6, 34, '268f98a2bbb9c491eeb9b85b94fbb9a2.jpg', 9, 'TV'),
(6, 'LG', 'UR81 55UR81006LJ', 'LG webOS', 'темно-серый', 55, 'UHD', 4, 16, 0, 0, 787, 1235, 14, 12, 2007, 5, 23, '137241e58c939929d98ff98f2c69d61b.jpg', 9.3, 'TV'),
(7, 'Viomi', 'YMD43ACURUS1', 'Android TV', 'серый', 43, 'UHD', 2, 16, 0, 0, 604, 957, 7, 12, 898, 0, 43, '629a16dae1efa44c1588439b34c74273.jpg', 9.4, 'TV'),
(8, 'LG', 'B3 OLED55B3RLA', 'LG webOS', 'черный', 55, 'OLED', 4, 16, 0, 0, 744, 1228, 18, 12, 3897, 5, 23, 'b62ffb77315c3ce06d471b35cc0086af.jpg', 9.8, 'TV');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `airphone`
--
ALTER TABLE `airphone`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `smartphones`
--
ALTER TABLE `smartphones`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tablet`
--
ALTER TABLE `tablet`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `TV`
--
ALTER TABLE `TV`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `airphone`
--
ALTER TABLE `airphone`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `smartphones`
--
ALTER TABLE `smartphones`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT для таблицы `tablet`
--
ALTER TABLE `tablet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `TV`
--
ALTER TABLE `TV`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
