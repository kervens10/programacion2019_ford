-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2019 a las 18:27:37
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `app123`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`id`, `nombre`, `apellido`) VALUES
(123456, 'kervens', 'ford'),
(123457, 'kervens', 'ford'),
(123458, 'kervens', 'ford'),
(123459, 'kervens', 'ford'),
(123460, 'kervens', 'ford'),
(123461, 'kervens', 'ford'),
(123462, 'kervens', 'ford'),
(123463, 'kervens', 'ford'),
(123464, 'kervens', 'ford'),
(123465, 'kervens', 'ford'),
(123466, 'kervens', 'ford'),
(123467, 'kervens', 'ford'),
(123468, 'kervens', 'ford'),
(123469, 'kervens', 'ford'),
(123470, 'kervens', 'ford');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `usuario` varchar(80) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `contrasena`) VALUES
(1234, 'Ford', '2121', '11111'),
(5678, 'Kervens', '2222', '33333'),
(90123, 'Norbin', '3333', '44444');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `participantes`
--
ALTER TABLE `participantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123471;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
