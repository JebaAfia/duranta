-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2023 at 09:59 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duranta`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `cat_details` text NOT NULL,
  `category_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categories`, `image`, `cat_details`, `category_type`) VALUES
(1, 'JUNIOR BIKES', '1769598001cat1.jpg', 'Remember the freedom, fun, and sense of accomplishment that your first bike gave you? Well, these days, kids can get rolling at an even earlier age with toddler-friendly walk bikes and coaster-brake-equipped 20-inch models that are ideal for neighborhood adventures. Even better, the fun of our kids bikes is equally matched with the quality and value that parents appreciate\r\n\r\n', 'bike'),
(2, 'MTB DUAL SUSPENSION BIKES', '455891276cat2.jpg', 'Remember the freedom, fun, and sense of accomplishment that your first bike gave you? Well, these days, kids can get rolling at an even earlier age with toddler-friendly walk bikes and coaster-brake-equipped 20-inch models that are ideal for neighborhood adventures. Even better, the fun of our kids bikes is equally matched with the quality and value that parents appreciate', 'bike'),
(3, 'KIDS BIKES', '1417845874cat3.jpg', 'Remember the freedom, fun, and sense of accomplishment that your first bike gave you? Well, these days, kids can get rolling at an even earlier age with toddler-friendly walk bikes and coaster-brake-equipped 20-inch models that are ideal for neighborhood adventures. Even better, the fun of our kids bikes is equally matched with the quality and value that parents appreciate\r\n\r\n', 'bike'),
(4, 'ROAD/RACING BIKES', '1520660134cat4.jpg', 'Remember the freedom, fun, and sense of accomplishment that your first bike gave you? Well, these days, kids can get rolling at an even earlier age with toddler-friendly walk bikes and coaster-brake-equipped 20-inch models that are ideal for neighborhood adventures. Even better, the fun of our kids bikes is equally matched with the quality and value that parents appreciate\r\n\r\n', 'bike'),
(5, 'MTB BIKES', '1334920684cat5.jpg', 'Remember the freedom, fun, and sense of accomplishment that your first bike gave you? Well, these days, kids can get rolling at an even earlier age with toddler-friendly walk bikes and coaster-brake-equipped 20-inch models that are ideal for neighborhood adventures. Even better, the fun of our kids bikes is equally matched with the quality and value that parents appreciate\r\n\r\n', 'bike'),
(6, 'CLASSIC BIKES', '407960712cat6.jpg', 'Remember the freedom, fun, and sense of accomplishment that your first bike gave you? Well, these days, kids can get rolling at an even earlier age with toddler-friendly walk bikes and coaster-brake-equipped 20-inch models that are ideal for neighborhood adventures. Even better, the fun of our kids bikes is equally matched with the quality and value that parents appreciate\r\n\r\n', 'bike'),
(7, 'FAT BIKES', '1933514799flatbike.jpg', 'Remember the freedom, fun, and sense of accomplishment that your first bike gave you? Well, these days, kids can get rolling at an even earlier age with toddler-friendly walk bikes and coaster-brake-equipped 20-inch models that are ideal for neighborhood adventures. Even better, the fun of our kids bikes is equally matched with the quality and value that parents appreciate\r\n\r\n', 'bike'),
(8, 'FRAME', '811991058racingbike.jpg', 'Experience the best quality of Frame.\r\n\r\n', 'accessories'),
(9, 'FORK', '1410771392racingbike.jpg', 'Remember the freedom, fun, and sense of accomplishment that your first bike gave you? Well, these days, kids can get rolling at an even earlier age with toddler-friendly walk bikes and coaster-brake-equipped 20-inch models that are ideal for neighborhood adventures. Even better, the fun of our kids bikes is equally matched with the quality and value that parents appreciate\r\n\r\n', 'accessories'),
(10, 'HANDLEBAR', '946181739racingbike.jpg', 'Remember the freedom, fun, and sense of accomplishment that your first bike gave you? Well, these days, kids can get rolling at an even earlier age with toddler-friendly walk bikes and coaster-brake-equipped 20-inch models that are ideal for neighborhood adventures. Even better, the fun of our kids bikes is equally matched with the quality and value that parents appreciate\r\n\r\n', 'accessories'),
(11, 'SADDLE', '1214235000racingbike.jpg', 'Remember the freedom, fun, and sense of accomplishment that your first bike gave you? Well, these days, kids can get rolling at an even earlier age with toddler-friendly walk bikes and coaster-brake-equipped 20-inch models that are ideal for neighborhood adventures. Even better, the fun of our kids bikes is equally matched with the quality and value that parents appreciate\r\n\r\n', 'accessories');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_details` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_category`, `product_details`, `image`, `date`) VALUES
(1, 'Duranta Steel 1-Spd Scool-M-20.01-Black', '1', 'Product Details\r\nFrame Size: Steel TIG Welded Frame\r\nFork Steel Suspension Fork\r\nSaddle: Pu Foam\r\nDecals Under Clear\r\nBrake Set: Double Disk Brake\r\nRim: High Wall Alloy Rim\r\nStem Ahead Types Alloy Stem\r\nChain Wheel: Cotterless Chain Wheel With Plastic Guard\r\nBrake Lever: Alloy Brake Lever And Plastic Resign\r\nAccessories Steel Gear Bell BCP/Soft Grip/Down Hill Mud', '1925648236804091.jpg', '2022-12-03 09:20:47'),
(2, 'Duranta Steel 7-Spd Hulk Folding 20 Blue', '1', 'Frame Size: Steel TIG Welded Foldable Frame\r\nFork Steel Rigid Fork\r\nSaddle: Pu Foam\r\nCarrier: Steel MTB Carrier\r\nBrake Set: Steel V Brake\r\nRim: Double Wall Alloy Rim\r\nStem Adjustable Stem With Fork\r\nChain Wheel: Cotterless Chain Wheel\r\nBrake Lever: Alloy Brake Lever And Plastic Resign\r\nAccessories Steel Gear Bell BCP/Soft Grip', '1818207752804781.jpg', '2022-12-03 09:35:59'),
(3, 'Duranta Steel 7-Spd Recoil 20 Black', '1', 'Product Details\r\nFrame Size: Suspension Frame\r\nFork Steel Suspension Fork\r\nSaddle: Pu Foam\r\nDecals SKC Decals\r\nBrake Set: V Brake\r\nRim: Double Wall Alloy Rim\r\nStem Ahead Types Alloy Stem\r\nChain Wheel: Cotterless Chain Wheel With Plastic Guard\r\nBrake Lever: Alloy Brake Lever And Plastic Resign\r\nAccessories Steel Gear Bell BCP/Soft Grip', '975692899804255.jpg', '2022-12-03 09:37:32'),
(4, 'Duranta Steel 7-Spd Recoil 20 Red', '1', 'Product Details\r\nFrame Size: Suspension Frame\r\nFork Steel Suspension Fork\r\nSaddle: Pu Foam\r\nDecals SKC Decals\r\nBrake Set: V Brake\r\nRim: Double Wall Alloy Rim\r\nStem Ahead Types Alloy Stem\r\nChain Wheel: Cotterless Chain Wheel With Plastic Guard\r\nBrake Lever: Alloy Brake Lever And Plastic Resign\r\nAccessories Steel Gear Bell BCP/Soft Grip', '1678517588804254.jpg', '2022-12-03 09:39:24'),
(5, 'Duranta Gladiator Gents bicycle -26\"(MTB Dual)', '2', 'Product Details\r\nFRAME SIZE: 26\"X18\"Duel Sus\r\nMATERIALS: STEEL\r\nWHEEL SIZE: 26\"\r\nSADDLE: PU FOAM\r\nBRAKE SET: V BRAKE\r\nHANDLE BAR: Raise 30 Mm ; 600 MmL\r\nRIM: ALLOY Double WALL\r\nHUB: FRONT AND REAR 36 HOLES\r\nFREEWHEEL: 7 Speed Index 14-28 T\r\nCHAIN: 108 LINK\r\nCHAIN WHEEL: 42 TEETH\r\nFRONT DERAILLEUR: Index Type, Downpull\r\nREAR DERAILLEUR: TOURNEY TX 6/7-SPEED\r\nSTEM: STEEL 22.2x1.4Tx150mmL ; 25Â°', '113623106804114.jpg', '2022-12-03 09:41:42'),
(6, 'Duranta Recoils Gents Bicycle Red -24â€(MTB Dual)', '2', 'Product Details\r\nFRAME SIZE: 24\"X17\" Steel Duel Sus\r\nMATERIALS: STEEL\r\nWHEEL SIZE: 24\"\r\nSADDLE: PU FOAM\r\nBRAKE SET: V BRAKE\r\nHANDLE BAR:;Rise: 30mm;520mmL; 6Â°\r\nRIM: ALLOY SINGLE WALL\r\nHUB: FRONT AND REAR 36 HOLES\r\nMUDGUARD & CHAIN COVER: PLASTIC\r\nFREEWHEEL: 6 Speed Index 14-28 T\r\nCHAIN: Steel 1/2\' X 3/32\' Links\r\nCHAIN WHEEL: 42 TEETH\r\nBRAKE LEVER: 3 Finger Lever\r\nSTEM: STEEL 22.2X30X150mmL HEB, 25 Degree', '1016489023804257.jpg', '2022-12-03 09:44:30'),
(7, 'Duranta Recoils Gents Bicycle Red -24â€(MTB Dual)', '2', 'Product Details\r\nFRAME SIZE: 24\"X17\" Steel Duel Sus\r\nMATERIALS: STEEL\r\nWHEEL SIZE: 24\"\r\nSADDLE: PU FOAM\r\nBRAKE SET: V BRAKE\r\nHANDLE BAR:;Rise: 30mm;520mmL; 6Â°\r\nRIM: ALLOY SINGLE WALL\r\nHUB: FRONT AND REAR 36 HOLES\r\nMUDGUARD & CHAIN COVER: PLASTIC\r\nFREEWHEEL: 6 Speed Index 14-28 T\r\nCHAIN: Steel 1/2\' X 3/32\' Links\r\nCHAIN WHEEL: 42 TEETH\r\nBRAKE LEVER: 3 Finger Lever\r\nSTEM: STEEL 22.2X30X150mmL HEB, 25 Degree', '1331282014804256.jpg', '2022-12-03 10:06:59'),
(8, 'Duranta Steel 1-Spd Ryan 14 Black', '3', 'Product Details\r\nFrame Size: Steel TIG Welded Frame\r\nFork Steel Rigid Fork\r\nSaddle: Pu Foam\r\nCarrier: Steel MTB Carrier\r\nBrake Set: Caliper\r\nRim: Alloy Single Wall 16 Holes\r\nMudguard: Steel Mudgaurd\r\nChain Wheel: Cotterless Chain Wheel\r\nBrake Lever: Full Resin Plastic Bracket\r\nAccessories Color Full Bell/Basket/Training Wheel', '1981773023847192.jpg', '2022-12-03 10:09:44'),
(9, 'Duranta Steel 1-Spd Premier-M-14.01-Orange', '3', 'Product Details\r\nFrame Size: Steel\r\nFork Steel Rigid Fork\r\nSaddle: Pu Foam\r\nCarrier: Steel MTB Carrier\r\nBrake Set: Caliper\r\nRim: Alloy Single Wall Rim\r\nMudguard: Steel Mudgaurd\r\nChain Wheel: Cotterless Chain Wheel\r\nBrake Lever: Full Resin Plastic Bracket\r\nAccessories Color Full Bell/Basket/Training Wheel', '134207218185487.jpg', '2022-12-03 10:16:45'),
(10, 'Duranta Allan Furious 700C Racing Bike(Road/Racing Bike)', '4', 'Product Details\r\nFRAME SIZE: 700C\r\nMATERIALS: ALLOY\r\nWHEEL SIZE: 28\"\r\nSADDLE: PU FOAM\r\nBRAKE SET: V BRAKE\r\nHANDLE BAR:;Rise: 30mm;520mmL; 6Â°\r\nRIM: ALLOY SINGLE WALL\r\nHUB: FRONT AND REAR 36 HOLES\r\nFREEWHEEL: 6 Speed Index 14-28 T\r\nREAR DERAILLEUR:TZ-50 6/7-SPEED\r\nCHAIN: Steel 1/2\' X 3/32\' Links\r\nCHAIN WHEEL: 42 TEETH\r\nBRAKE LEVER: 3 Finger Lever\r\nSTEM: STEEL 22.2X30X150mmL HEB, 25 Degree', '1028033221804479.jpg', '2022-12-03 10:17:47'),
(11, 'Traditional Frame 28\"', '8', '', '58992876770123.jpg', '2022-12-03 10:20:59'),
(12, 'MTB Steel Frame 26\"', '8', '', '159444635370051.jpg', '2022-12-03 10:21:35'),
(13, 'MTB Steel Fork 26\"', '9', '', '189489427278704.jpg', '2022-12-03 10:22:56'),
(14, 'MTB Steel Fork 20\"', '9', '', '40429998378741.jpg', '2022-12-03 10:23:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact_number`, `created_at`) VALUES
(5, 'JebaAfia', 'jeba@gmail.com', '123456', '01900000001', '2022-11-14 01:20:42'),
(7, 'nywe@mailinator.comjunysuh@mailinator.com', 'xomively@mailinator.com', 'Pa$$w0rd!', 'wuca@mailinator.com', '2022-11-18 21:21:40'),
(8, 'zityxonyw@mailinator.compiwojanyr@mailinator.com', 'ticaxoco@mailinator.com', 'Pa$$w0rd!', 'wuvitiq@mailinator.com', '2022-11-18 21:31:43'),
(9, 'qigo@mailinator.comsonisexag@mailinator.com', 'nagehexasa@mailinator.com', 'Pa$$w0rd!', 'gacazoqik@mailinator.com', '2022-11-18 21:44:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
