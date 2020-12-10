-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2020 a las 22:21:02
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `silvina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `is_active`) VALUES
(8, 'SilvinaAdmin', '75tano.richi@gmail.com', '$2y$10$Vgam/FmOu8eFC7OwARs6Q.mFt49H626I8tmiS7n6hsH8CpxgwIyZK', '0'),
(9, 'SilvinaAdmin2', 'silvina.noemi@yahoo.com.ar', '$2y$10$ciFeUyMt2T/Z23pOyWwasufxMRsjIEVy2OKc4pD9f1jQkVbt9kkPC', '0'),
(10, 'silvina', 'almabru1310@gmail.com', '$2y$10$tegLogT7k6YPz7b3yldmweu7nG9C9vlDgWUnM.Eqmc5RlhaGsv81C', '0'),
(11, 'silvina2', 'admin@admin.com.ar', '$2y$10$/w3m1BHYpDKvlZQvB2ZfyOrG1X4xtbyvVOkqXe6YRwV/nFLH.A9tC', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, '$ 300 a 700'),
(2, '$ 701 a 1000'),
(3, '$ 1001 a 1500'),
(4, '$ 1501 a 2000'),
(5, 'Más de $ 2000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(19, 2, '::1', 4, 1),
(20, 8, '::1', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(2, 'Deco Interior'),
(3, 'Figuras Jardín'),
(4, 'Porta Maceta'),
(5, 'Porta Macetas '),
(6, 'Porta Velas'),
(12, 'Tutores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `name` varchar(70) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `message` varchar(350) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`) VALUES
(1, 1, 1, 1, '9L434522M7706801A', 'Completed'),
(2, 1, 2, 1, '9L434522M7706801A', 'Completed'),
(3, 1, 3, 1, '9L434522M7706801A', 'Completed'),
(4, 1, 1, 1, '8AT7125245323433N', 'Completed');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_qty`, `product_desc`, `product_image`, `product_keywords`) VALUES
(2, 6, 4, 'Porta vela (1)', 1500, 20, '15 cm de alto', '1vela.png', 'vela, portavela'),
(3, 2, 2, 'Caballo', 1000, 15, 'Realizado en herramientas de metal recuperadas', 'caballo.jpg', '$ 700 a 1000, Decoración Interior, Caballo'),
(4, 2, 3, 'Pez', 1400, 10, 'Pez realizado con fundición de metal recuperado', 'pez.jpg', 'Más de $ 2000, Decoración Interior, pez'),
(5, 12, 3, 'Tucán', 1100, 20, 'Realizado con hierro dulce', 'tucan.jpg', '$ 1001 a 1500, Figuras para Macetas, Tucán'),
(6, 2, 4, 'Guitarra', 1550, 1, '25 cm, hierro recuperado', 'guitarra.jpg', '$ 1501 a 2000, Decoración Interior, Guitarra'),
(7, 5, 5, 'Mesa para 3 macetas', 2500, 2, '50 cm de ancho x 40 cm profundo y 50 cm de alto.', 'mesa3macetas.jpg', 'Más de $ 2000, Porta Macetas múltiple, Mesa para 3 macetas'),
(8, 5, 5, 'Monociclo', 2500, 2, 'Porta 3 macetas', 'monociclo.jpg', 'Más de $ 2000, Porta Macetas múltiple, Monociclo'),
(10, 2, 2, 'Pareja', 800, 3, '20 cm de alto', 'pareja.jpg', '$ 701 a 1000, Decoración Interior, Pareja'),
(11, 2, 2, 'Perro Perchero', 1000, 5, '40 cmm x 40 cm', 'percheroperro.jpg', 'perchero, Decoración Interior, Perro'),
(12, 3, 4, 'Robot', 1900, 3, '30 cm de alto x 20 cm de ancho', 'robot.jpg', '$ 1501 a 2000, Figuras para Jardín, Robot'),
(13, 2, 3, 'Pareja N° 2', 1500, 2, '20 cm x 10 cm', 'pareja2.jpg', 'adorno'),
(14, 6, 4, 'Porta velas de pared', 1900, 3, '60 cm x 40 cm', '5velas.jpg', ''),
(15, 3, 4, 'Araña', 1900, 4, '60 cm x 40 cm', 'arania.jpg', ''),
(16, 3, 3, 'Bicicleta', 1000, 2, '50 cm x 50 cm', 'bicicleta.jpg', 'bicicleta, jardin'),
(17, 3, 4, 'Cangrejo', 1900, 2, '70 cm x 40 cm', 'cangrejo.jpg', 'jardín, animales, cangrejo'),
(18, 3, 4, 'Caracol', 1550, 10, '30 cm 20 cm', 'caracol.jpg', 'caracol, animales, jardin'),
(19, 6, 5, 'Corazón Porta 2 Velas ', 2600, 3, '80 mc x 60 cm', 'corazon2velas.jpg', 'corazon, velas, portavelas'),
(20, 2, 5, 'Decoración pared', 3000, 2, '70 cm x 50 cm', 'decoracionpared.jpg', 'pared, interior, adorno'),
(21, 2, 1, 'Gato', 650, 15, '20 cm x 10 cm', 'gato.jpg', 'gato, adorno, interior'),
(22, 2, 3, 'Gimnasio', 1100, 10, '20 cm x 20 cm', 'gimnasio.jpg', 'gimnasio, interior, adorno'),
(23, 3, 5, 'Toro', 4000, 3, '1,5 m x 1 m', 'toro.jpg', 'toro, animales, jardin'),
(24, 5, 5, 'Porta 5 macetas', 2500, 20, '1 m x 70 cm', 'porta5macetas.jpg', 'porta macetas, macetas, jardin'),
(25, 12, 1, 'Tutor con frase', 650, 50, '1 metro de alto', 'tutorfrase.jpg', 'tutor, maceta, jardin'),
(26, 4, 5, 'Porta Maceta Interior', 2500, 20, '1 metro de alto x 60 cm de ancho', 'portamaceta1.jpg', 'porta maceta, maceta, interior'),
(27, 4, 4, 'Porta maceta-Base Cuadrada', 2000, 100, '1 metro de alto x 50 cm de ancho', 'portamaceta2.jpg', 'maceta, porta maceta'),
(28, 4, 3, 'Porta maceta - Pared', 1200, 100, '30 cm x 30 cm', 'portamaceta3.jpg', 'pared, maceta, porta maceta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(6, 'Bruno', 'Riscica', 'brunoblox0304@gmail.com', '7f8399b92707f104fe524e8b36f301aa', '1134282033', 'Unquera 1974', 'Caba');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indices de la tabla `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_product_cat` (`product_cat`),
  ADD KEY `fk_product_brand` (`product_brand`);

--
-- Indices de la tabla `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_brand` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `fk_product_cat` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
