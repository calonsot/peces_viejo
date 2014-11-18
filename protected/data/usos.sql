-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2014 at 10:41 AM
-- Server version: 5.5.40
-- PHP Version: 5.3.10-1ubuntu3.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `usos`
--

-- --------------------------------------------------------

--
-- Table structure for table `carta_nacional`
--

CREATE TABLE IF NOT EXISTS `carta_nacional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Nivel1` int(11) NOT NULL,
  `Nivel2` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `distribucion`
--

CREATE TABLE IF NOT EXISTS `distribucion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `estado_conservacion`
--

CREATE TABLE IF NOT EXISTS `estado_conservacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `Nivel1` int(11) NOT NULL,
  `Nivel2` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `grupo`
--

CREATE TABLE IF NOT EXISTS `grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `peces`
--

CREATE TABLE IF NOT EXISTS `peces` (
  `especie_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_comun` varchar(255) NOT NULL,
  `nombre_ingles` varchar(255) DEFAULT NULL,
  `nombre_cientifico` varchar(255) NOT NULL,
  `clase` varchar(255) DEFAULT NULL,
  `orden` varchar(255) DEFAULT NULL,
  `familia` varchar(255) DEFAULT NULL,
  `grupo_id` int(11) NOT NULL,
  `nacional_Importado` varchar(255) DEFAULT NULL,
  `tipo_imagen` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `triptico` varchar(255) DEFAULT NULL,
  `talla_captura` varchar(255) DEFAULT NULL,
  `tipo_captura` varchar(255) DEFAULT NULL,
  `arte_pesca` longtext,
  `tipo_veda_id` int(11) NOT NULL,
  `veda` varchar(255) NOT NULL COMMENT 'Meses separados por coma',
  `generalidades` longtext,
  `descripcion_distribucion` varchar(255) DEFAULT NULL,
  `cultivado_capturado` tinyint(1) DEFAULT NULL,
  `comercio` varchar(255) DEFAULT NULL,
  `pais_importacion` varchar(255) DEFAULT NULL,
  `html` longtext NOT NULL COMMENT 'Es un fragmento de html que contiene la ficha que se despliega en web',
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`especie_id`),
  KEY `fk_peces_tipo_veda_idx` (`tipo_veda_id`),
  KEY `fk_peces_grupo1_idx` (`grupo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pez_carta_nacional`
--

CREATE TABLE IF NOT EXISTS `pez_carta_nacional` (
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `peces_especie_id` int(11) NOT NULL,
  `carta_nacional_id` int(11) NOT NULL,
  PRIMARY KEY (`peces_especie_id`,`carta_nacional_id`),
  KEY `fk_pez_carta_nacional_carta_nacional1_idx` (`carta_nacional_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pez_distribucion`
--

CREATE TABLE IF NOT EXISTS `pez_distribucion` (
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `peces_especie_id` int(11) NOT NULL,
  `distribucion_id` int(11) NOT NULL,
  PRIMARY KEY (`peces_especie_id`,`distribucion_id`),
  KEY `fk_pez_distribucion_distribucion1_idx` (`distribucion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pez_estado_conservacion`
--

CREATE TABLE IF NOT EXISTS `pez_estado_conservacion` (
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `peces_especie_id` int(11) NOT NULL,
  `estado_conservacion_id` int(11) NOT NULL,
  PRIMARY KEY (`peces_especie_id`,`estado_conservacion_id`),
  KEY `fk_pez_estado_conservacion_estado_conservacion1_idx` (`estado_conservacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pez_tipo_capturas`
--

CREATE TABLE IF NOT EXISTS `pez_tipo_capturas` (
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `peces_especie_id` int(11) NOT NULL,
  `tipo_capturas_id` int(11) NOT NULL,
  PRIMARY KEY (`peces_especie_id`,`tipo_capturas_id`),
  KEY `fk_pez_tipo_capturas_tipo_capturas1_idx` (`tipo_capturas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_capturas`
--

CREATE TABLE IF NOT EXISTS `tipo_capturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_veda`
--

CREATE TABLE IF NOT EXISTS `tipo_veda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peces`
--
ALTER TABLE `peces`
  ADD CONSTRAINT `fk_peces_tipo_veda` FOREIGN KEY (`tipo_veda_id`) REFERENCES `tipo_veda` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peces_grupo1` FOREIGN KEY (`grupo_id`) REFERENCES `grupo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pez_carta_nacional`
--
ALTER TABLE `pez_carta_nacional`
  ADD CONSTRAINT `fk_pez_carta_nacional_peces1` FOREIGN KEY (`peces_especie_id`) REFERENCES `peces` (`especie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pez_carta_nacional_carta_nacional1` FOREIGN KEY (`carta_nacional_id`) REFERENCES `carta_nacional` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pez_distribucion`
--
ALTER TABLE `pez_distribucion`
  ADD CONSTRAINT `fk_pez_distribucion_peces1` FOREIGN KEY (`peces_especie_id`) REFERENCES `peces` (`especie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pez_distribucion_distribucion1` FOREIGN KEY (`distribucion_id`) REFERENCES `distribucion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pez_estado_conservacion`
--
ALTER TABLE `pez_estado_conservacion`
  ADD CONSTRAINT `fk_pez_estado_conservacion_peces1` FOREIGN KEY (`peces_especie_id`) REFERENCES `peces` (`especie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pez_estado_conservacion_estado_conservacion1` FOREIGN KEY (`estado_conservacion_id`) REFERENCES `estado_conservacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pez_tipo_capturas`
--
ALTER TABLE `pez_tipo_capturas`
  ADD CONSTRAINT `fk_pez_tipo_capturas_peces1` FOREIGN KEY (`peces_especie_id`) REFERENCES `peces` (`especie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pez_tipo_capturas_tipo_capturas1` FOREIGN KEY (`tipo_capturas_id`) REFERENCES `tipo_capturas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
