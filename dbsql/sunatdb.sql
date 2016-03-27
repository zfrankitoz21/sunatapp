SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `color` varchar(10) NOT NULL,
  `imagen` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `categorias` (`id`, `categoria`, `color`, `imagen`) VALUES
(1, 'Entretenimiento3', '#0063a7', 1),
(2, 'Belleza y Salud2', '#FFFFF', 2),
(3, 'Gastronomia3', '#525262', 8),
(4, 'En Familia', '#0063a7', 16),
(5, 'Educación', '', 0),
(6, 'Detalles y Obsequios', '', 0),
(7, 'Tiempo libre / Viajes', '', 0);

CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(11) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `imagen` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `empresas` (`id`, `empresa`, `imagen`) VALUES
(1, 'Multident', 14),
(3, 'Starbucks', 15);

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO `files` (`id`, `nombre`, `fecha`) VALUES
(1, 'salud2.jpg', 1459051372),
(2, 'regalo.jpg', 1459060561),
(3, 'impsobile.jpg', 1459061973),
(5, 'emprendedor.png', 1459062111),
(8, '12244001_10206396543085453_893107207_n.jpg', 1459062523),
(9, 'familia2.jpg', 1459067441),
(10, 'familia3.jpg', 1459067561),
(11, 'min_icon.jpg', 1459069989),
(12, 'min_icon1.jpg', 1459070004),
(13, 'starbucks-128.png', 1459070105),
(14, 'min_icon.jpg', 1459070440),
(15, 'starbucks-128.png', 1459070444),
(16, 'starbucks-128.png', 1459101637);

CREATE TABLE IF NOT EXISTS `tbl_promociones` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `empresa` varchar(150) NOT NULL,
  `desc_empresa` varchar(256) NOT NULL,
  `direccion` varchar(256) NOT NULL,
  `telefono` int(11) NOT NULL,
  `desc_descuento` varchar(256) NOT NULL,
  `desc_restriccion` varchar(256) NOT NULL,
  `imagen` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_promociones` (`id`, `titulo`, `empresa`, `desc_empresa`, `direccion`, `telefono`, `desc_descuento`, `desc_restriccion`, `imagen`) VALUES
(1, 'Título 1', 'Empresa 1', 'Desc Empresa 1', 'Direccion 1', 1234567, 'Desc Descuento 1', 'Desc Restriccion 1', 9999998),
(2, 'Titulo 2', 'Empresa 2', 'Desc Empresa 2', 'Direccion 2', 1234567, 'Desc Descuento 2', 'Desc Restriccion 2', 2),
(3, 'Titulo 3', 'Empresa 3', 'Desc Empresa 3', 'Direccion 3', 1234567, 'Desc Descuento 3', 'Desc Restriccion 3', 3),
(4, 'Titulo 4', 'Empresa 4 ', 'Desc Empresa 4', 'Direccion 4', 1234567, 'Desc Descuento 4', 'Desc Restriccion 4', 4),
(5, 'Título 5', 'Empresa 5', 'Desc Empresa 5', 'Direccion 5', 278788, 'Desc Descuento 5', 'Desc Restriccion 5', 5);


ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_promociones`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
ALTER TABLE `tbl_promociones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;