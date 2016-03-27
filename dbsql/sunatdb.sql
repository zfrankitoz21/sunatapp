-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-03-2016 a las 22:09:21
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sunatdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `color` varchar(10) NOT NULL,
  `imagen` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `color`, `imagen`) VALUES
(1, 'Entretenimiento', '#0063a7', 0),
(2, 'Belleza y Salud', '', 0),
(3, 'Gastronomia', '', 0),
(4, 'En Familia', '', 0),
(5, 'Educación', '', 0),
(6, 'Detalles y Obsequios', '', 0),
(7, 'Tiempo libre / Viajes', '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


--
-- Estructura de tabla para la tabla `tbl_promociones`
--

CREATE TABLE IF NOT EXISTS `tbl_promociones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `empresa` varchar(150) NOT NULL,
  `desc_empresa` varchar(256) NOT NULL,
  `direccion` varchar(256) NOT NULL,
  `telefono` int(11) NOT NULL,
  `desc_descuento` varchar(256) NOT NULL,
  `desc_restriccion` varchar(256) NOT NULL,
  `imagen` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `tbl_promociones`
--

INSERT INTO `tbl_promociones` (`id`, `titulo`, `empresa`, `desc_empresa`, `direccion`, `telefono`, `desc_descuento`, `desc_restriccion`, `imagen`) VALUES
(1, 'Título 1', 'Empresa 1', 'Desc Empresa 1', 'Direccion 1', 1234567, 'Desc Descuento 1', 'Desc Restriccion 1', 9999998),
(2, 'Titulo 2', 'Empresa 2', 'Desc Empresa 2', 'Direccion 2', 1234567, 'Desc Descuento 2', 'Desc Restriccion 2', 2),
(3, 'Titulo 3', 'Empresa 3', 'Desc Empresa 3', 'Direccion 3', 1234567, 'Desc Descuento 3', 'Desc Restriccion 3', 3),
(4, 'Titulo 4', 'Empresa 4 ', 'Desc Empresa 4', 'Direccion 4', 1234567, 'Desc Descuento 4', 'Desc Restriccion 4', 4),
(5, 'Título 5', 'Empresa 5', 'Desc Empresa 5', 'Direccion 5', 278788, 'Desc Descuento 5', 'Desc Restriccion 5', 5);

