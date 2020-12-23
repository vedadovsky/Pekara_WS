-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22.12, 2020 at 13:00 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pekara`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `vrsta` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ocjena` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `slika` varchar(255) NOT NULL,
  `stil1` varchar(255) NOT NULL,
  `stil2` varchar(255) NOT NULL,
  `vrijeme` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`,`vrsta`, `name`, `ocjena`, `item_price`, `slika`, `stil1`,`stil2`, `vrijeme`) VALUES
(1, 'Pizza', 'Bošnjačka','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span>', 6,  './assets/products/pizze/Bosnjacka.png','', '',NOW()), -- NOW()
(2, 'Peciva', 'Gluten free hljeb','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="far fa-star"></i></span>', 2.5,  './assets/products/peciva/gluten.png','margin-top: 40px;','margin-top: 32px;', NOW()), -- NOW()
(3, 'Pizza', '4 Vrste sira','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span>', 4,  './assets/products/pizze/4-sira.png','', '',NOW()), -- NOW()
(4, 'Pizza', 'Dimljena','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="far fa-star"></i></span> <span><i class="far fa-star"></i></span>', 3.5,  './assets/products/pizze/Dimljena.png','','', NOW()), -- NOW()
(5, 'Sendvic', 'Mozzarella sendvič','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="far fa-star"></i></span>', 2.5,  './assets/products/Sendvic/mozzarela.png','margin-top: 40px;','margin-top: 28px;', NOW()), -- NOW()
(6, 'Pizza', '4 Godišnja doba','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="far fa-star"></i></span>', 5,  './assets/products/pizze/4-god-doba.png','','', NOW()), -- NOW()
(7, 'Pizza', 'Funghi','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="far fa-star"></i></span>', 4.5,  './assets/products/pizze/Funghi.png','','', NOW()), -- NOW()
(8, 'Peciva', 'Savitak sa vanilijom i šumskim voćem','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span>', 2,  './assets/products/peciva/savitak_van_sum.png','margin-top:37px;','margin-top: 17px;', NOW()), -- NOW()
(9, 'Pizza', 'Italiano','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span>', 5,  './assets/products/pizze/Italiano.png','', '',NOW()), -- NOW()
(10, 'Peciva', 'Polubijeli hljeb','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span>', 0.8,  './assets/products/peciva/hljeb.gif','','', NOW()), -- NOW()
(11, 'Pizza', 'Mexicana','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span>', 5,  './assets/products/pizze/Mexicana.png','','', NOW()), -- NOW()
(12, 'Peciva', 'Kroasant sa džemom','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="far fa-star"></i></span> <span><i class="far fa-star"></i></span>', 1,  './assets/products/peciva/kroasan.png','margin-top:30px;','margin-top: 20px;', NOW()), -- NOW()
(13, 'Pizza', 'Margherita','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="far fa-star"></i></span> <span><i class="far fa-star"></i></span>', 3,  './assets/products/pizze/Margherita.png','','', NOW()), -- NOW()
(14, 'Sendvic', 'Đački sendvič','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="far fa-star"></i></span> <span><i class="far fa-star"></i></span>', 1,  './assets/products/Sendvic/dzacki.png','margin-top: 45px;','margin-top: 30px;', NOW()), -- NOW()
(15, 'Peciva', 'Paštetice','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span>', 1,  './assets/products/peciva/pastetice.png','margin-top: 50px;','margin-top: 55px;', NOW()), -- NOW()
(16, 'Sendvic', 'Chicken DeLux sendvič','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span>', 3,  './assets/products/Sendvic/chickenDeLux.png','margin-top: 26px;','margin-top: 38px;', NOW()),
(17, 'Pizza', 'Dimljena Željo','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span>', 4,  './assets/products/pizze/Dimljena-2.png','', '',NOW()), -- NOW()
(18, 'Pizza', 'Vegan','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span>', 5,  './assets/products/pizze/Vege.png','', '',NOW()), -- NOW()
(19, 'Peciva', 'Štrudla sa sirom','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="far fa-star"></i></span>',3 ,  './assets/products/peciva/strudla.png','margin-top: 40px;', 'margin-top: 46px;',NOW()), -- NOW()
(20, 'Pizza', 'Mozzarella','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span>', 3.5,  './assets/products/pizze/mozzarella.png','', '',NOW()), -- NOW()
(21, 'Sendvic', '4 Vrste sira sendvič','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span>', 2,  './assets/products/sendvic/4_sira.png','margin-top: 50px;', 'margin-top: 55px;',NOW()), -- NOW()
(22, 'Pizza', 'Supreme','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="far fa-star"></i></span> <span><i class="far fa-star"></i></span>', 4,  './assets/products/pizze/Supreme.png','', '',NOW()), -- NOW()
(23, 'Sendvic', 'Planinski','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span>', 3,  './assets/products/sendvic/planinski.png','', '',NOW()), -- NOW()
(24, 'Peciva', 'Pletenica sa makom','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="far fa-star"></i></span> <span><i class="far fa-star"></i></span> <span><i class="far fa-star"></i></span>', 1.5,  './assets/products/peciva/pletenica-mak-kozara.png','margin-top: 30px;', 'margin-top: 34px;',NOW()), -- NOW()
(25, 'Sendvic', 'Pogača sa kajmakom','<span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="fas fa-star"></i></span> <span><i class="far fa-star"></i></span>', 2.5,  './assets/products/sendvic/pogaca.png','margin-top: 37px;', 'margin-top: 20px;',NOW()); -- NOW()


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `vrijeme` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `vrijeme`) VALUES
(1, 'Vedad', 'Jahjaefendic', NOW()),
(2, 'Ali', 'Almisreb', NOW());

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
