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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO `destacadas` (`id`, `promoid`, `provid`, `imagen`, `weight`) VALUES
(5, 1, 1, 0, 1),
(7, 2, 1, 40, 0),
(12, 5, 2, 0, 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

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
(34, 'maxresdefault.jpg', 1459218310),
(35, 'Och_15324_Fl-220-Txoko-Fg(3)09.jpg', 1459234789),
(36, 'Och_15324_Fl-220-Txoko-Fg(3)09.jpg', 1459234814),
(37, '12903484_1753579744875634_378723448_o.jpg', 1459234831),
(38, 'regalo.jpg', 1459234923),
(39, '12244001_10206396543085453_893107207_n.jpg', 1459235364),
(40, 'maxresdefault1.jpg', 1459238974);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `promociones` (`id`, `titulo`, `bajada`, `descripcion`, `restriccion`, `direcciones`, `descuento`, `empresaid`, `categoriaid`, `nuevo`, `imagen`, `created`, `mod_created`) VALUES
(1, 'Profilaxis y Fluorización', 'Evaluación gratuita', 'Realizar una cita previa y mostrar cupón para acceder al descuento\r\nEvaluación Gratis, tarifa regular S/.60\r\nProfilaxis S/.33, tarifa regular S/.60\r\nFluorización S/.30, tarifa regular S/.60\r\nPeriodo de validez: Hasta 2016 en la sedes mencionadas.', 'Realizar una cita previa y mostrar cupón para acceder al descuento\r\nEvaluación Gratis, tarifa regular S/.60\r\nProfilaxis S/.33, tarifa regular S/.60\r\nFluorización S/.30, tarifa regular S/.60\r\nPeriodo de validez: Hasta 2016 en la sedes mencionadas.', 'Miraflores / surco\r\nAv. La Merced 227,377-0510 / 2733-3333\r\nMiraflores / surco\r\nAv. La Merced 227,377-0510 / 2733-3333\r\nMiraflores / surco\r\nAv. La Merced 227,377-0510 / 2733-3333\r\nMiraflores / surco\r\nAv. La Merced 227,377-0510 / 2733-3333\r\nMiraflores / surco\r\nAv. La Merced 227,377-0510 / 2733-3333\r\nMiraflores / surco\r\nAv. La Merced 227,377-0510 / 2733-3333', '24', 1, 1, 1, 28, 1459202544, 1459234939),
(2, 'Royal Decameron', 'Descuento Exclusivo', 'TEST', 'TEST', 'TEST', '80', 4, 7, 1, 30, 1459204255, 1459234942),
(3, 'Cafecito Express', 'expresito', 'Test', 'test', 'test', '15', 3, 3, 1, 36, 1459234789, 1459234814),
(5, 'test', 'test', 'gdfgdgdgd', 'gdgdsgsd', 'gsdgsdgsd', '34', 5, 3, 1, 39, 1459235364, 1459238837);

CREATE TABLE IF NOT EXISTS `promociones_provincias` (
  `promoid` int(11) NOT NULL,
  `provid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `promociones_provincias` (`promoid`, `provid`) VALUES
(3, 1),
(3, 2),
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(4, 1),
(6, 1),
(5, 2);

CREATE TABLE IF NOT EXISTS `provincias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `ndestacadas` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `provincias` (`id`, `nombre`, `ndestacadas`) VALUES
(1, 'Lima', 4),
(2, 'Huancayo', 2),
(4, 'Cuzco', 1);


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


ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
ALTER TABLE `destacadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
ALTER TABLE `promociones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
ALTER TABLE `provincias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
