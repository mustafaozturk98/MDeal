-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Ağu 2021, 06:24:24
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mobileproject`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`) VALUES
(38, 1, 2),
(41, 1, 10);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Samsung', 'Samsung S21', 256.00, './Pattern/assets/products/21.png', NULL),
(7, 'Huawei', 'Huawei Mate xs', 999.00, './Pattern/assets/products/huaweixs.png', NULL),
(8, 'Redmi', 'Redmi Note10 pro', 140.00, './Pattern/assets/products/redmi.png', NULL),
(9, 'Samsung', 'Samsung SmartNeo Qled', 8000.00, './Pattern/assets/products/tv.png', NULL),
(10, 'Samsung', 'Samsung Watch 3', 120.00, './Pattern/assets/products/watch2.png', NULL),
(11, 'Apple', 'Apple iPhone 10', 225.00, './Pattern/assets/products/17.png', '2021-07-15 03:04:47'),
(12, 'Apple', 'Apple Watch', 147.00, './Pattern/assets/products/watch.png', NULL),
(13, 'Apple', 'Apple Macbook Air', 500.00, './Pattern/assets/products/7.png', NULL),
(20, 'a', 'aa', 77.00, '', NULL),
(22, 'Apple', 'Apple iPhone 12', 999.00, './Pattern/assets/products/iPhone12.png', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`, `email`, `password`) VALUES
(1, 'mustafa', 'ozturk', '2021-08-06 02:01:51', '123@mail.com', '123'),
(4, 'ahmet', 'ahmet', NULL, 'aaa@mail.com', '1234'),
(12, 'can', 'canv', NULL, 'a@mail.com', '12345');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `wishlist`
--

INSERT INTO `wishlist` (`cart_id`, `user_id`, `item_id`) VALUES
(12, 1, 6),
(26, 1, 3),
(27, 1, 11),
(29, 1, 7),
(30, 1, 5);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Tablo için indeksler `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Tablo için AUTO_INCREMENT değeri `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
