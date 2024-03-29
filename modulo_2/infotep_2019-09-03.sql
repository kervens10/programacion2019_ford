-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-09-2019 a las 18:14:11
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
-- Base de datos: `infotep`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decimales_2`
--

CREATE TABLE `decimales_2` (
  `_float` float DEFAULT NULL,
  `_double` double(6,2) DEFAULT NULL,
  `_decimal` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) DEFAULT NULL,
  `nombre` text,
  `pais` text,
  `fecha_nacimiennto` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `pais`, `fecha_nacimiennto`) VALUES
(NULL, 'Kervens Ford', 'Ing', NULL),
(NULL, 'Wentchelle volo', 'HT', NULL),
(NULL, 'Norbin', 'HT', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numericos_con_decimal`
--

CREATE TABLE `numericos_con_decimal` (
  `_float` float DEFAULT NULL,
  `_double` double DEFAULT NULL,
  `_decimal` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numericos_enteros`
--

CREATE TABLE `numericos_enteros` (
  `_tinyint` tinyint(4) DEFAULT NULL,
  `_smallint` smallint(6) DEFAULT NULL,
  `_mediumint` mediumint(9) DEFAULT NULL,
  `_int` int(11) DEFAULT NULL,
  `_bigint` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `numericos_enteros`
--

INSERT INTO `numericos_enteros` (`_tinyint`, `_smallint`, `_mediumint`, `_int`, `_bigint`) VALUES
(127, 32767, 8338607, 2147483647, 9223372036854775807),
(127, 32767, 13134, 2147483647, 9223372036854775807),
(127, 32767, 8338607, 2147483647, 9223372036854775807),
(127, 32767, 13134, 2147483647, 9223372036854775807),
(127, 32767, 8338607, 2147483647, 9223372036854775807),
(127, 32767, 13134, 2147483647, 9223372036854775807);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numericos_enteros_sin_signos`
--

CREATE TABLE `numericos_enteros_sin_signos` (
  `_tinyint` int(10) UNSIGNED DEFAULT NULL,
  `_smallint` smallint(5) UNSIGNED DEFAULT NULL,
  `_mediumint` mediumint(8) UNSIGNED DEFAULT NULL,
  `_int` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `numericos_enteros_sin_signos`
--

INSERT INTO `numericos_enteros_sin_signos` (`_tinyint`, `_smallint`, `_mediumint`, `_int`) VALUES
(200, 65535, 16777215, 16777215);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `texto`
--

CREATE TABLE `texto` (
  `_char` char(12) DEFAULT NULL,
  `_varchar` varchar(12) DEFAULT NULL,
  `_text` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `texto`
--

INSERT INTO `texto` (`_char`, `_varchar`, `_text`) VALUES
('kervens', 'kervens', 'kervens'),
('kervens ford', 'kervens ford', 'kervens ford');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
