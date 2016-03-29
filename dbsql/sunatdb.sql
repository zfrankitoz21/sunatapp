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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO `categorias` (`id`, `categoria`, `color`, `imagen`) VALUES
(1, 'Entretenimiento3', '#0063a7', 1),
(2, 'Belleza y Salud2', '#FFFFF', 2),
(3, 'Gastronomia3', '#525262', 8),
(4, 'En Familia', '#0063a7', 16),
(5, 'Educación', '#0063a7', 18),
(6, 'Detalles y Obsequios', '', 0),
(7, 'Tiempo libre / Viajes', '', 0);

CREATE TABLE IF NOT EXISTS `destacadas` (
  `id` int(11) NOT NULL,
  `promoid` int(11) NOT NULL,
  `provid` int(11) NOT NULL,
  `imagen` int(11) NOT NULL DEFAULT '0',
  `weight` tinyint(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `destacadas` (`id`, `promoid`, `provid`, `imagen`, `weight`) VALUES
(2, 2, 1, 34, 0),
(3, 1, 1, 0, 0),
(4, 1, 2, 0, 0);

CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(11) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `icon` int(11) NOT NULL DEFAULT '0',
  `logo` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `empresas` (`id`, `empresa`, `icon`, `logo`) VALUES
(1, 'Multident3', 24, 25),
(3, 'Starbucks', 15, 31),
(4, 'Mc Donald', 17, 0),
(5, 'Tottus', 32, 33);

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

INSERT INTO `files` (`id`, `nombre`, `fecha`) VALUES
(1, 'salud2.jpg', 1459051372),
(2, 'regalo.jpg', 1459060561),
(3, 'impsobile.jpg', 1459061973),
(4, '', 1459062019),
(5, 'emprendedor.png', 1459062111),
(6, '', 1459062354),
(7, '', 1459062493),
(8, '12244001_10206396543085453_893107207_n.jpg', 1459062523),
(9, 'familia2.jpg', 1459067441),
(10, 'familia3.jpg', 1459067561),
(11, 'min_icon.jpg', 1459069989),
(12, 'min_icon1.jpg', 1459070004),
(13, 'starbucks-128.png', 1459070105),
(14, 'min_icon.jpg', 1459070440),
(15, 'starbucks-128.png', 1459070444),
(16, 'starbucks-128.png', 1459101637),
(17, 'apps_mcdonalds.png', 1459182073),
(18, 'starbucks-128.png', 1459183901),
(19, 'Multident.png', 1459185874),
(20, 'min_icon1.jpg', 1459185881),
(21, 'Multident1.png', 1459185886),
(22, 'min_icon.jpg', 1459185948),
(23, 'Multident.png', 1459185948),
(24, 'min_icon1.jpg', 1459186017),
(25, 'Multident1.png', 1459186017),
(26, 'Multident.png', 1459202819),
(27, 'Multident1.png', 1459202883),
(28, 'thumb_promo_2.jpg', 1459202948),
(29, 'd-royal-decameron-mompiche-55fbd1b3d0.jpg', 1459204255),
(30, 'royal.jpg', 1459204340),
(31, 'starbucks_hz.png', 1459216598),
(32, 'descarga.png', 1459216736),
(33, 'logo-tottus.jpg', 1459216736),
(34, 'maxresdefault.jpg', 1459218310);

CREATE TABLE IF NOT EXISTS `promociones` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `bajada` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `restriccion` text NOT NULL,
  `direcciones` text NOT NULL,
  `descuento` varchar(3) NOT NULL,
  `empresaid` int(11) NOT NULL,
  `categoriaid` int(11) NOT NULL,
  `nuevo` tinyint(1) NOT NULL,
  `imagen` int(11) NOT NULL DEFAULT '0',
  `created` int(11) NOT NULL,
  `mod_created` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `promociones` (`id`, `titulo`, `bajada`, `descripcion`, `restriccion`, `direcciones`, `descuento`, `empresaid`, `categoriaid`, `nuevo`, `imagen`, `created`, `mod_created`) VALUES
(1, 'Profilaxis y Fluorización', 'Evaluación gratuita', 'Realizar una cita previa y mostrar cupón para acceder al descuento\r\nEvaluación Gratis, tarifa regular S/.60\r\nProfilaxis S/.33, tarifa regular S/.60\r\nFluorización S/.30, tarifa regular S/.60\r\nPeriodo de validez: Hasta 2016 en la sedes mencionadas.', 'Realizar una cita previa y mostrar cupón para acceder al descuento\r\nEvaluación Gratis, tarifa regular S/.60\r\nProfilaxis S/.33, tarifa regular S/.60\r\nFluorización S/.30, tarifa regular S/.60\r\nPeriodo de validez: Hasta 2016 en la sedes mencionadas.', 'Miraflores / surco\r\nAv. La Merced 227,377-0510 / 2733-3333\r\nMiraflores / surco\r\nAv. La Merced 227,377-0510 / 2733-3333\r\nMiraflores / surco\r\nAv. La Merced 227,377-0510 / 2733-3333\r\nMiraflores / surco\r\nAv. La Merced 227,377-0510 / 2733-3333\r\nMiraflores / surco\r\nAv. La Merced 227,377-0510 / 2733-3333\r\nMiraflores / surco\r\nAv. La Merced 227,377-0510 / 2733-3333', '24', 1, 1, 1, 28, 1459202544, 1459215859),
(2, 'Royal Decameron', 'Descuento Exclusivo', 'TEST', 'TEST', 'TEST', '80', 4, 7, 1, 30, 1459204255, 1459214187);

CREATE TABLE IF NOT EXISTS `promociones_provincias` (
  `promoid` int(11) NOT NULL,
  `provid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `promociones_provincias` (`promoid`, `provid`) VALUES
(2, 1),
(2, 2),
(1, 1),
(1, 2);

CREATE TABLE IF NOT EXISTS `provincias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `provincias` (`id`, `nombre`) VALUES
(1, 'Lima'),
(2, 'Huancayo');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_promociones` (`id`, `titulo`, `empresa`, `desc_empresa`, `direccion`, `telefono`, `desc_descuento`, `desc_restriccion`, `imagen`) VALUES
(1, 'Título 1', 'Empresa 1', 'Desc Empresa 15', 'Direccion 1', 1234567, 'Desc Descuento 1', 'Desc Restriccion 1', 0),
(2, 'Titulo 2', 'Empresa 2', 'Desc Empresa 2', 'Direccion 2', 1234567, 'Desc Descuento 2', 'Desc Restriccion 2', 2),
(3, 'Titulo 3', 'Empresa 3', 'Desc Empresa 3', 'Direccion 3', 1234567, 'Desc Descuento 3', 'Desc Restriccion 3', 3),
(4, 'Titulo 4', 'Empresa 4 ', 'Desc Empresa 4', 'Direccion 4', 1234567, 'Desc Descuento 4', 'Desc Restriccion 4', 4),
(5, 'Título 547', 'Empresa 5', 'Desc Empresa 5', 'Direccion 5', 278788, 'Desc Descuento 5', 'Desc Descuento 5', 0);

CREATE TABLE IF NOT EXISTS `variables` (
  `variable` varchar(20) NOT NULL,
  `value` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `variables` (`variable`, `value`) VALUES
('ndestacadas', '4');


ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `destacadas`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_promociones`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
ALTER TABLE `destacadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
ALTER TABLE `promociones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
ALTER TABLE `provincias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
ALTER TABLE `tbl_promociones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
