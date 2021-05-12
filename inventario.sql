-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-05-2021 a las 19:26:38
-- Versión del servidor: 10.5.9-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(11) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `proveedor` varchar(50) NOT NULL,
  `descripcion` longtext NOT NULL,
  `precio` varchar(10) NOT NULL,
  `stock` int(3) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT current_timestamp(),
  `editado` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `nombre_producto`, `proveedor`, `descripcion`, `precio`, `stock`, `fecha_registro`, `editado`) VALUES
(2, 'prueba', 'provedor prueba', 'asdfghjklasdfghjkswdfghjk sdfgh asdfgh dfghjk dfghjk dfghjcv bngh j ghv ybhn vbgh bgh', '100.00', 25, '2021-05-10 15:07:31', '2021-05-10 15:07:31'),
(3, 'Pantalla PLana LCD', 'Sony', 'lololololol loololl ololo lolo l lolo', '33000', 10, '2021-05-11 13:31:57', '2021-05-11 13:31:57'),
(4, 'Pantalla PLana LCD', 'Sony', 'lololololol loololl ololo lolo l lolo', '33000', 10, '2021-05-11 13:38:09', '2021-05-11 13:38:09'),
(5, 'Laptop HP', 'HP', 'ksksksk ksksk lsls lolo ', '4899.99', 5, '2021-05-11 13:39:56', '2021-05-11 13:39:56'),
(6, ' san\'itizado', 'Sony', 'asas', '33000', 4, '2021-05-11 19:15:21', '2021-05-11 19:15:21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
