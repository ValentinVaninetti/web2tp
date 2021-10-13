-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2021 at 01:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(60) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `description`) VALUES
(13, 'Surf Tables ', 'Different types of surf tables!'),
(14, 'Surf Suits', 'Different types and sizes of surf suits! '),
(15, 'Surf Accesories', 'SurfBoard Wax, Fins, Cords and more!');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_price` int(255) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `product_name`, `category_id`, `product_price`, `product_img`, `product_description`) VALUES
(18, 'Hyperlite Wingman Jr', 13, 580, 'https://www.miamiskinautiques.com/v/vspfiles/photos/Q5AlXotym7-3T.png?v-cache=1616062852', 'Scott Bouchard has shaped a board that drives speed and creates lift for airs, all wrapped up in a compact size for maximum mobility. Meant to be ridden as a twin fin in the forward placements or as a quad fin with smaller fin sets. The fin placements mirror high performance surfboards, delivering great tracking and speed with explosive acceleration. \"Go Big or Go Home\" Butch says with respects to his latest creation. The compact outline is very manoeuvrable thanks to its hard wing rear outline and it has enough width and volume to provide a stable ride for beginners. The Wingman\'s deep single concave bottom with vented tail channel gives it tons of drive even when riding straight towards the boat. Grab the Wingman for driving into the air section and going huge.'),
(19, 'Hyperlite Automatic', 13, 750, 'https://www.miamiskinautiques.com/v/vspfiles/photos/WJL8ah5BjZ-2T.png', 'Another brainchild from Scott Bouchard, the Automatic delivers a floaty surf vibe spawned from the beaches and wakes of Florida. Featuring our all new Full Carbon DuraShell Construction, the Automatic looks and surfs better than the rest. DuraShell includes top and bottom carbon laminates and is finished with seamless edges eliminating flash lines, rolling smooth from edge to edge. With a Full Bamboo Base Inlay the Automatic has a lively feel when snapping turns and popping airs. The single concave running through the midsection delivers great push in the wake. Customize your ride with four Futures Fin Boxes including 2 Flux Fins and 2 Minis for a loose or solid feel.'),
(20, 'Camaro Blacktec Overall 2.0mm Full Wetsuit', 14, 250, 'https://www.miamiskinautiques.com/v/vspfiles/photos/camaro2full-2T.jpg?v-cache=1616062852', 'The Camaro neoprene, and its exterior coating, which contribute to comfort, flexibility, and warmth is highly specific, and can be somewhat FRAGILE. Please be very carful with it. Do not pull material excessively, especially with fingertips and fingernails, as potential tears or punctures are not covered by Camaro’s Manufacture Warranty policy. If your item does not fit, and you need to return it, that is fine. For an exchange or credit, please be sure your item is free of rips, tears, or punctures.'),
(21, ' Camaro Titanium pro mono 0.5mm Wetsuit', 14, 280, 'https://www.miamiskinautiques.com/v/vspfiles/photos/camaro-titaniumpr-mono-wetsuit-2T.png?v-cache=1616062852', 'The Camaro neoprene, and its exterior coating, which contribute to comfort, flexibility, and warmth is highly specific, and can be somewhat FRAGILE. Please be very carful with it. Do not pull material excessively, especially with fingertips and fingernails, as potential tears or punctures are not covered by Camaro’s Manufacture Warranty policy. If your item does not fit, and you need to return it, that is fine. For an exchange or credit, please be sure your item is free of rips, tears, or punctures.'),
(22, 'Inspired Florida Board Black Dart Surfboard', 13, 850, 'https://cdn.shopify.com/s/files/1/0003/1902/9309/products/inspired_fl_board_blu_5000x.png?v=1631549648', 'Excellent quality surfboard.'),
(23, 'Sex Wax Original Surf Wax - Cold', 15, 2, 'https://cdn.shopify.com/s/files/1/0003/1902/9309/products/SexWaxOriginalSurfWaxCold_549281bd-9f08-49eb-90f9-606ccbd9dd42_5000x.jpg?v=1610126469', 'Originally formulated in 1972 these \"old school\" wax formulas are still relatively popular and provide effective levels of traction.'),
(24, 'Sex Wax Original Surf Wax - Warm', 15, 2, 'https://cdn.shopify.com/s/files/1/0003/1902/9309/products/SexWaxOriginalSurfWaxWarm_5000x.jpg?v=1610123257', 'Originally formulated in 1972 these \"old school\" wax formulas are still relatively popular and provide effective levels of traction.'),
(25, 'Channel Islands Mid Spine-Tek Surfboard', 13, 1595, 'https://cdn.shopify.com/s/files/1/0003/1902/9309/products/ci_mid_spine_grn_5000x.jpg?v=1624032974', 'The Channel Islands Mid Surfboard is a modern classic design resulting from a fun collaboration with Devon Howard, a southern California surfer that has spent the past two decades riding and refining boards of this genre.'),
(26, 'Oneill Wetsuit', 14, 320, 'https://e7.pngegg.com/pngimages/83/395/png-clipart-o-neill-wetsuit-surfing-rash-guard-scuba-diving-surfing.png', 'Classic wetsuit.'),
(27, 'Abahub Premium Coil SUP Leash', 15, 14, 'https://http2.mlstatic.com/D_NQ_NP_889288-MLA46078665755_052021-O.webp', 'Durable and Tangle Free: This surfboard leash uses a 7mm TPU cord for optimum strength and durability. The featured double anti-corrosive steel swivels can keep the leash spinning smoothly to avoid getting tangled. It\'s an all-round leash, designed for small to medium waves. ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `pass`, `isAdmin`) VALUES
(1, 'Mario', 'mario@gmail.com', '123456', 0),
(2, 'algo', 'algo@gmail.com', '12345', 0),
(16, 'fidelo', 'fidelo@gmail.com', 'fidexo', 0),
(19, 'Valentin', 'valentin@gmail.com', 'valentin', 0),
(20, 'aaaaaa', 'aaaaaaaaaaaa@gmail.com', '$2y$10$c2k18Rgmp6QN/ZbATbzpSuChx9tiPHcVTkSfAyhNJHwNzGwda8Av.', 0),
(21, 'hola', 'hola@gmail.com', '$2y$10$IohN.1jyXiUgknLndZAHzOZYD7ebYSdsO1Iqq18CLZL9AHDkoJUmG', 0),
(22, 'admin', 'admin@admin.com', '$2y$10$vGPWgVye0wly59tKZLgJ9.x4JBHhfxiihkGNA8BgzshXtKQFnxZH.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`),
  ADD KEY `FK_category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
