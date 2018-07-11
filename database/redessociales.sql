-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2018 a las 20:39:41
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pasteleria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redessociales`
--

CREATE TABLE `redessociales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cuenta` varchar(255) NOT NULL,
  `estado` enum('activo','inactivo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `redessociales`
--

INSERT INTO `redessociales` (`id`, `nombre`, `cuenta`, `estado`) VALUES
(1, 'Facebook', 'mi_pagina', 'inactivo'),
(2, 'Instagram', 'mi_pagina', 'inactivo'),
(3, 'Gmail', 'mi_pagina', 'inactivo'),
(4, 'Outlook', 'mi_pagina', 'inactivo'),
(5, 'YouTube', 'mi_pagina', 'inactivo'),
(6, 'Yahoo', 'mi_pagina', 'inactivo'),
(7, 'Pinterest', 'mi_pagina', 'inactivo'),
(8, 'Twitter', 'mi_pagina', 'inactivo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `redessociales`
--
ALTER TABLE `redessociales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `redessociales`
--
ALTER TABLE `redessociales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
