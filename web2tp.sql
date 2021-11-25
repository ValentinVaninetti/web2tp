-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2021 a las 03:48:27
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web2tp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(60) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `description`) VALUES
(13, 'Surf Tables', '	Different types of surf tables.'),
(14, 'Surf Suits', 'Different types and sizes of surf suits! '),
(15, 'Surf Accesories', 'SurfBoard Wax, Fins, Cords and more!'),
(16, 'Kite boards', 'Different types of kite boards!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment` varchar(2000) NOT NULL,
  `product_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `product_id`, `id_user`, `rating`, `date`) VALUES
(64, '22222', 25, 22, 2, '2020-11-03'),
(67, '123', 19, 22, 3, '0000-00-00'),
(69, '3454', 19, 22, 3, '2011-11-21'),
(71, 'AAAAAAA', 20, 22, 0, '0000-00-00'),
(73, 'AAAAAA', 20, 22, 0, '0000-00-00'),
(74, 'asd', 20, 22, 0, '0000-00-00'),
(76, '123', 20, 22, 2, '2021-11-23'),
(77, '111111111111', 19, 22, 2, '2021-11-23'),
(78, 'HOLA', 20, 22, 2, '2021-11-23'),
(79, 'HOLA', 20, 22, 2, '2021-11-23'),
(80, 'AAAAAAA', 20, 22, 0, '2021-11-23'),
(81, 'AAAAAA', 20, 22, 0, '1990-05-28'),
(85, 'AAAAAAA', 22, 22, 2, '2021-11-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_price` int(255) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category_id`, `product_price`, `product_img`, `product_description`) VALUES
(19, 'Hyperlite Wingman Jr', 16, 750, '619c47aca3c90.png', 'Another brainchild from Scott Bouchard, the Automatic delivers a floaty surf vibe spawned from the beaches and wakes of Florida. Featuring Hyperlite’s all new Full Carbon DuraShell Construction, the Automatic looks and surfs better than the rest. DuraShell includes top and bottom carbon laminates and is finished with seamless edges eliminating flash lines, rolling smooth from edge to edge. With a Full Bamboo Base Inlay, the Automatic has a lively feel when snapping turns and popping airs. The single concave running through the midsection delivers great push in the wake. Customize your ride with four Futures Fin Boxes including 2 Flux Fins and 2 Minis for a loose or solid feel.'),
(20, 'Camaro Blacktec Overall 2.0mm Full Wetsuit', 14, 250, '619c47f8783fa.jpg', 'The Camaro neoprene, and its exterior coating, which contribute to comfort, flexibility, and warmth is highly specific, and can be somewhat FRAGILE. Please be very carful with it. Do not pull material excessively, especially with fingertips and fingernails, as potential tears or punctures are not covered by Camaro’s Manufacture Warranty policy. If your item does not fit, and you need to return it, that is fine. For an exchange or credit, please be sure your item is free of rips, tears, or punctures.'),
(21, 'Camaro Titanium pro mono 0.5mm Wetsuit', 14, 280, '619c481bc879f.png', 'The Camaro neoprene, and its exterior coating, which contribute to comfort, flexibility, and warmth is highly specific, and can be somewhat FRAGILE. Please be very carful with it. Do not pull material excessively, especially with fingertips and fingernails, as potential tears or punctures are not covered by Camaro’s Manufacture Warranty policy. If your item does not fit, and you need to return it, that is fine. For an exchange or credit, please be sure your item is free of rips, tears, or punctures.'),
(22, 'Inspired Florida Board Black Dart Surfboard', 13, 850, '619c483f9cf92.png', 'Excellent quality surfboard.'),
(23, 'Sex Wax Original Surf Wax - Cold', 15, 2, '619c48613a577.jpg', 'Originally formulated in 1972 these \"old school\" wax formulas are still relatively popular and provide effective levels of traction.'),
(24, 'Sex Wax Original Surf Wax - Warm', 15, 2, '619c488567454.jpg', 'Originally formulated in 1972 these \"old school\" wax formulas are still relatively popular and provide effective levels of traction.'),
(25, 'Channel Islands Mid Spine-Tek Surfboard', 13, 1595, '619c48ad737fd.jpg', 'The Channel Islands Mid Surfboard is a modern classic design resulting from a fun collaboration with Devon Howard, a southern California surfer that has spent the past two decades riding and refining boards of this genre.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `pass`, `isAdmin`) VALUES
(20, 'aaaaaa', 'aaaaaaaaaaaa@gmail.com', '$2y$10$c2k18Rgmp6QN/ZbATbzpSuChx9tiPHcVTkSfAyhNJHwNzGwda8Av.', 1),
(22, 'admin', 'admin@admin.com', '$2y$10$vGPWgVye0wly59tKZLgJ9.x4JBHhfxiihkGNA8BgzshXtKQFnxZH.', 1),
(26, 'fidelo', 'fidelo@gmail.com', '$2y$10$o9qUYGzY757He4uKX2OAQe9JACOipMHApwc//fYmd4LOj8Z579.Fy', 1),
(28, 'John', 'john@gmail.com', '$2y$10$PhdBKgRpoeJ2jboEdu/u/.sYwpzuwvi8DkrDMX0r9s9x.giszB5ya', 1),
(30, '123', '123@123.com', '$2y$10$fTSbGDkIPqkdhJwLwfIycuVPGyBGtNNpmgCfRIQ7QUnEOqRpFq0qK', 0),
(31, 'aaaaaa', 'aaaaaaaaaaaa@gmail.com', '$2y$10$PPES4.d1ClDO.JSXFofI5uZI2Gtyl8UfSDtDYckJ0ZV5dn176/zR.', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `FK_id_user` (`id_user`) USING BTREE,
  ADD KEY `FK_product_id` (`product_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `FK_category_id` (`category_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
