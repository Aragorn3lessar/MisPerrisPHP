-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-09-2018 a las 00:14:52
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `misperris`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE IF NOT EXISTS `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `id_region` int(11) NOT NULL,
  PRIMARY KEY (`id_ciudad`),
  KEY `ciudad_region_fk` (`id_region`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `descripcion`, `id_region`) VALUES
(1, 'Puente Alto', 1),
(2, 'Maipu', 1),
(3, 'Nuñoa', 1),
(4, 'Las Condes', 1),
(5, 'Vitacura', 1),
(6, 'Colina', 1),
(7, 'Cerro Navia', 1),
(8, 'Estacion Central', 1),
(9, 'Santiago', 1),
(10, 'El Bosque', 1),
(11, 'Viña del Mar', 2),
(12, 'Quintero', 2),
(13, 'Quilpue', 2),
(14, 'San Felipe', 2),
(15, 'San Antonio', 2),
(16, 'Quintero', 2),
(17, 'Catemu', 2),
(18, 'Putaendo', 2),
(19, 'Algarrobo', 2),
(20, 'Concon', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `run` varchar(15) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` int(11) NOT NULL,
  `id_vivienda` int(11) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `id_region` int(11) NOT NULL,
  PRIMARY KEY (`run`),
  KEY `cliente_ciudad_fk` (`id_ciudad`),
  KEY `cliente_region_fk` (`id_region`),
  KEY `cliente_tipo_vivienda_fk` (`id_vivienda`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`run`, `correo`, `nombre_completo`, `fecha_nacimiento`, `telefono`, `id_vivienda`, `id_ciudad`, `id_region`) VALUES
('20188409', 'as.romero', 'asbiel', '1999-06-11', 12345678, 2, 11, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perro`
--

DROP TABLE IF EXISTS `perro`;
CREATE TABLE IF NOT EXISTS `perro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `raza` varchar(100) NOT NULL,
  `tamano` int(11) NOT NULL,
  `color` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perro`
--

INSERT INTO `perro` (`id`, `nombre`, `raza`, `tamano`, `color`) VALUES
(4, 'xolo', 'kiltro', 139, 'piel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `id_region` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_region`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id_region`, `descripcion`) VALUES
(1, 'Metropolitana'),
(2, 'Valparaiso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vivienda`
--

DROP TABLE IF EXISTS `tipo_vivienda`;
CREATE TABLE IF NOT EXISTS `tipo_vivienda` (
  `id_vivienda` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_vivienda`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_vivienda`
--

INSERT INTO `tipo_vivienda` (`id_vivienda`, `descripcion`) VALUES
(1, 'Casa con patio Grande'),
(2, 'Casa con patio Pequeño'),
(3, 'Casa sin patio'),
(4, 'Departamento');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
