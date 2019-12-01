-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-12-2019 a las 15:11:35
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `banco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajero`
--

DROP TABLE IF EXISTS `cajero`;
CREATE TABLE IF NOT EXISTS `cajero` (
  `id_cajero` int(11) NOT NULL,
  `cont` int(11) DEFAULT NULL,
  UNIQUE KEY `id_cajero` (`id_cajero`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cajero`
--

INSERT INTO `cajero` (`id_cajero`, `cont`) VALUES
(1, 23),
(2, 10),
(3, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cont`
--

DROP TABLE IF EXISTS `cont`;
CREATE TABLE IF NOT EXISTS `cont` (
  `id_cont` int(11) NOT NULL AUTO_INCREMENT,
  `id_cajero` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  UNIQUE KEY `id_cont` (`id_cont`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `contra` varchar(50) DEFAULT NULL,
  `monto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `nombre`, `contra`, `monto`) VALUES
(1, 'root', '1234', 807),
(2, 'fff', '222', 200),
(3, 'eee', '111', 100),
(4, 'yy', '888', 700),
(5, 'te', '781', 100),
(6, 'ttt', '625', 100),
(7, 'ws', '230', 180),
(8, 'tte', '181', 500),
(9, 'iie', '66', 200);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
