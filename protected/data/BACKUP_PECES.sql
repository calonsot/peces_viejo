-- phpMyAdmin SQL Dump
-- version 4.2.9deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-11-2014 a las 14:27:11
-- Versión del servidor: 5.5.39-1
-- Versión de PHP: 5.6.0-1+b1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `peces`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carta_nacional`
--

CREATE TABLE IF NOT EXISTS `carta_nacional` (
`id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `nivel1` int(11) NOT NULL,
  `nivel2` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carta_nacional`
--

INSERT INTO `carta_nacional` (`id`, `nombre`, `nivel1`, `nivel2`, `fecha_creacion`) VALUES
(1, 'Carta Nacional Pesquera (2012) Pacífico zona 1', 1, 0, '2014-11-03 19:19:30'),
(2, 'Con potencial de desarrollo', 1, 1, '2014-11-03 19:19:30'),
(3, 'Desconocida', 1, 2, '2014-11-03 19:19:30'),
(4, 'Máximo aprovechamiento permisible', 1, 3, '2014-11-03 19:19:30'),
(5, 'Máximo aprovechamiento sustentable', 1, 4, '2014-11-03 19:19:30'),
(6, 'Sin datos', 1, 5, '2014-11-03 19:19:30'),
(7, 'Carta Nacional Pesquera (2012) Pacífico zona 2', 2, 0, '2014-11-03 19:19:30'),
(8, 'Con potencial de desarrollo', 2, 1, '2014-11-03 19:19:30'),
(9, 'Desconocida', 2, 2, '2014-11-03 19:19:30'),
(10, 'Máximo aprovechamiento permisible', 2, 3, '2014-11-03 19:19:30'),
(11, 'Máximo aprovechamiento sustentable', 2, 4, '2014-11-03 19:19:30'),
(12, 'Sin datos', 2, 5, '2014-11-03 19:19:30'),
(13, 'Carta Nacional Pesquera (2012) Pacífico zona 3 ', 3, 0, '2014-11-03 19:19:30'),
(14, 'Con potencial de desarrollo', 3, 1, '2014-11-03 19:19:30'),
(15, 'Desconocida', 3, 2, '2014-11-03 19:19:30'),
(16, 'Máximo aprovechamiento permisible', 3, 3, '2014-11-03 19:19:30'),
(17, 'Máximo aprovechamiento sustentable', 3, 4, '2014-11-03 19:19:30'),
(18, 'Sin datos', 3, 5, '2014-11-03 19:19:30'),
(19, 'Carta Nacional Pesquera (2012) Golfo Mex y Caribe zona 1 ', 4, 0, '2014-11-03 19:19:30'),
(20, 'Desconocida', 4, 1, '2014-11-03 19:19:30'),
(21, 'Deterioro ', 4, 2, '2014-11-03 19:19:30'),
(22, 'Máximo aprovechamiento permisible', 4, 3, '2014-11-03 19:19:30'),
(23, 'Máximo aprovechamiento permisible/ Deterioro', 4, 4, '2014-11-03 19:19:30'),
(24, 'Sin datos', 4, 5, '2014-11-03 19:19:30'),
(25, 'Carta Nacional Pesquera (2012) Golfo Mex y Caribe zona 2 ', 5, 0, '2014-11-03 19:19:30'),
(26, 'Desconocida', 5, 1, '2014-11-03 19:19:30'),
(27, 'Deterioro ', 5, 2, '2014-11-03 19:19:30'),
(28, 'Máximo aprovechamiento permisible', 5, 3, '2014-11-03 19:19:30'),
(29, 'Sin datos', 5, 4, '2014-11-03 19:19:30'),
(30, 'Carta Nacional Pesquera (2012) Golfo Mex y Caribe zona 3 ', 6, 0, '2014-11-03 19:19:30'),
(31, 'Desconocida', 6, 1, '2014-11-03 19:19:30'),
(32, 'Deterioro ', 6, 2, '2014-11-03 19:19:30'),
(33, 'Máximo aprovechamiento permisible', 6, 3, '2014-11-03 19:19:30'),
(34, 'Sin datos', 6, 4, '2014-11-03 19:19:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distribucion`
--

CREATE TABLE IF NOT EXISTS `distribucion` (
`id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET latin1 NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `distribucion`
--

INSERT INTO `distribucion` (`id`, `nombre`, `fecha_creacion`) VALUES
(1, 'Golfo', '2014-11-03 20:25:17'),
(2, 'Mar Caribe', '2014-10-24 18:14:03'),
(3, 'Pacífico ', '2014-11-03 19:38:01'),
(4, 'Fuera del país ', '2014-11-03 19:38:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_conservacion`
--

CREATE TABLE IF NOT EXISTS `estado_conservacion` (
`id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `Nivel1` int(11) NOT NULL,
  `Nivel2` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_conservacion`
--

INSERT INTO `estado_conservacion` (`id`, `nombre`, `Nivel1`, `Nivel2`, `fecha_creacion`) VALUES
(1, 'Casi amenazada', 1, 1, '2014-11-03 19:31:45'),
(2, 'En peligro', 1, 2, '2014-11-03 19:31:45'),
(3, 'En peligro crítico', 1, 3, '2014-11-03 19:31:45'),
(4, 'Lista roja IUCN', 1, 0, '2014-11-03 19:31:45'),
(5, 'permisible', 1, 4, '2014-11-03 19:31:45'),
(6, 'Vulnerable', 1, 5, '2014-11-03 19:31:45'),
(7, 'Apéndice I', 2, 1, '2014-11-03 19:31:45'),
(8, 'Apéndice II', 2, 2, '2014-11-03 19:31:45'),
(9, 'CITES', 2, 0, '2014-11-03 19:31:45'),
(10, 'Amenazada', 3, 1, '2014-11-03 19:31:45'),
(11, 'En peligro crítico', 3, 2, '2014-11-03 19:31:45'),
(12, 'Extinto en vida silvestre', 3, 3, '2014-11-03 19:31:45'),
(13, 'NOM-059-SEMARNAT-2010', 3, 0, '2014-11-03 19:31:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE IF NOT EXISTS `grupos` (
`id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `nombre`, `fecha_creacion`) VALUES
(1, 'Anchovetas ', '2014-11-03 19:35:24'),
(2, 'Atunes', '2014-11-03 19:35:24'),
(3, 'Bacalaos', '2014-11-03 19:35:24'),
(4, 'Bagres', '2014-11-03 19:35:24'),
(5, 'Baqueta', '2014-11-03 19:35:24'),
(6, 'Barriletes', '2014-11-03 19:35:24'),
(7, 'Berrugata', '2014-11-03 19:35:24'),
(8, 'Berrugatas', '2014-11-03 19:35:24'),
(9, 'Besugo ', '2014-11-03 19:35:24'),
(10, 'Bonitos', '2014-11-03 19:35:24'),
(11, 'Botetes ', '2014-11-03 19:35:24'),
(12, 'Cabrillas', '2014-11-03 19:35:24'),
(13, 'Cazones ', '2014-11-03 19:35:24'),
(14, 'Chile', '2014-11-03 19:35:24'),
(15, 'Cintillas', '2014-11-03 19:35:24'),
(16, 'Corvinas ', '2014-11-03 19:35:24'),
(17, 'Escama', '2014-11-03 19:35:24'),
(18, 'Esmedregal ', '2014-11-03 19:35:24'),
(19, 'Gallineta', '2014-11-03 19:35:24'),
(20, 'Garropas', '2014-11-03 19:35:24'),
(21, 'Grupo ', '2014-11-03 19:35:24'),
(22, 'Huachinangos', '2014-11-03 19:35:24'),
(23, 'Jureles ', '2014-11-03 19:35:24'),
(24, 'Lebranchas', '2014-11-03 19:35:24'),
(25, 'Lenguados', '2014-11-03 19:35:24'),
(26, 'Lisas', '2014-11-03 19:35:24'),
(27, 'Macarela', '2014-11-03 19:35:24'),
(28, 'Marlíns ', '2014-11-03 19:35:24'),
(29, 'Meros', '2014-11-03 19:35:24'),
(30, 'Mojarras ', '2014-11-03 19:35:24'),
(31, 'Otros', '2014-11-03 19:35:24'),
(32, 'Pámpanos', '2014-11-03 19:35:24'),
(33, 'Papagallos', '2014-11-03 19:35:24'),
(34, 'Pargos', '2014-11-03 19:35:24'),
(35, 'Peces importados ', '2014-11-03 19:35:24'),
(36, 'Peces vela', '2014-11-03 19:35:24'),
(37, 'Petos', '2014-11-03 19:35:24'),
(38, 'Piernas', '2014-11-03 19:35:24'),
(39, 'Rayas y similares ', '2014-11-03 19:35:24'),
(40, 'Robalo', '2014-11-03 19:35:24'),
(41, 'Ronco', '2014-11-03 19:35:24'),
(42, 'Rubia-Villajaiba', '2014-11-03 19:35:24'),
(43, 'Rubio', '2014-11-03 19:35:24'),
(44, 'Sardinas', '2014-11-03 19:35:24'),
(45, 'Sierras', '2014-11-03 19:35:24'),
(46, 'Tiburones', '2014-11-03 19:35:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peces`
--

CREATE TABLE IF NOT EXISTS `peces` (
`especie_id` int(11) NOT NULL,
  `nombre_comun` varchar(255) NOT NULL,
  `nombre_ingles` varchar(255) DEFAULT NULL,
  `nombre_cientifico` varchar(255) NOT NULL,
  `clase` varchar(255) DEFAULT NULL,
  `orden` varchar(255) DEFAULT NULL,
  `familia` varchar(255) DEFAULT NULL,
  `grupo_id` int(11) DEFAULT NULL,
  `nacional_importado` varchar(255) DEFAULT NULL,
  `tipo_imagen` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `triptico` varchar(255) DEFAULT NULL,
  `talla_captura` varchar(255) DEFAULT NULL,
  `arte_pesca` longtext,
  `tipo_veda_id` int(11) NOT NULL,
  `veda` varchar(255) NOT NULL,
  `generalidades` longtext,
  `descripcion_distribucion` varchar(255) DEFAULT NULL,
  `cultivado_capturado` tinyint(1) DEFAULT NULL,
  `comercio` varchar(255) DEFAULT NULL,
  `pais_importacion` varchar(255) DEFAULT NULL,
  `html` longtext NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_actualizacion` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=480 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peces`
--

INSERT INTO `peces` (`especie_id`, `nombre_comun`, `nombre_ingles`, `nombre_cientifico`, `clase`, `orden`, `familia`, `grupo_id`, `nacional_importado`, `tipo_imagen`, `imagen`, `triptico`, `talla_captura`, `arte_pesca`, `tipo_veda_id`, `veda`, `generalidades`, `descripcion_distribucion`, `cultivado_capturado`, `comercio`, `pais_importacion`, `html`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(1, 'Cirujano aleta amarilla', 'Yellowfin Surgeonfish', 'Acanthurus xanthopterus', 'Actinopterygii', 'Perciformes', 'Acanthuridae', 17, 'Nacional', '', '', '', '25-60', 'LÃ­nea de mano o cuerda, red agallera de fondo y palangre escamero (cimbra).', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en arrecifes coralinos y rocosos. Se alimenta de algas microscÃ³picas (diatomeas) y detritus.', 'Se distribuye en el Indo PacÃ­fico y PacÃ­fico Oriental, desde el este de Ãfrica, Australia, JapÃ³n, Golfo de California, PanamÃ¡ e Islas GalÃ¡pagos.', 0, 'Se utiliza la carne.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(2, 'Cirujano pardo', '', 'Acanthurus bahianus ', 'Peces Ã³seos', 'Perciformes', 'Acanthuridae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(3, 'Cirujano rayado', '', 'Acanthurus chirurgus ', 'Peces Ã³seos', 'Perciformes', 'Acanthuridae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(4, 'Cirujano azul', '', 'Acanthurus coeruleus ', 'Peces Ã³seos', 'Perciformes', 'Acanthuridae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(5, 'MacabÃ­ de hebra', 'Shafted Bonefish', 'Albula nemoptera', 'Actinopterygii', 'Albuliformes', 'Albulidae', 17, 'Nacional', '', '', '', '30-50', 'Red de enmalle o chinchorro lisero.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en estuarios y en la boca de los rÃ­os. Se alimenta de peces y crustÃ¡ceos.   ', 'Se distribuye en las costas de Chiapas, Nicaragua, Costa Rica y PanamÃ¡ en ambas cotas, PacÃ­fico y AtlÃ¡ntico.', 0, 'Se utiliza la carne.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(6, 'MacabÃ­', 'Bonefish Macabi', 'Albula vulpes', 'Actinopterygii', 'Albuliformes', 'Albulidae', 17, 'Nacional', '', '', '', '20-40', 'Red de enmalle o chinchorro lisero.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en estuarios y en la boca de los rÃ­os. Se alimenta de peces y crustÃ¡ceos.   ', 'Se distribuye en el ocÃ©ano PacÃ­fico y AtlÃ¡ntico.', 0, 'Se utiliza la carne.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(7, 'Zorro pelÃ¡gico', 'Pelagic Thresher', 'Alopias pelagicus', 'Chondrichthyes', 'Lamniformes', 'Alopiidae', 46, 'Nacional', '', '', '', '160-360', 'Palangres y redes de enmalle establecidos en la NOM-029-PESCA 2006 de Tiburones y Rayas.  ', 3, '(PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos pelÃ¡gicos y altamente migratorios. Se alimenta principalmente de calamares.', 'Se distribuye casi en todo el PacÃ­fico. ', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(8, 'TiburÃ³n zorro ojÃ³n', 'Bigeye Thresher', 'Alopias superciliosus', 'Chondrichthyes', 'Lamniformes', 'Alopiidae', 46, 'Nacional', '', '', '', '140-460', 'Palangres y redes de enmalle establecidos en la NOM-029-PESCA 2006 de Tiburones y Rayas.  ', 3, '(PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos pelÃ¡gicos y costeros. Se alimenta de peces y cefalÃ³podos.', 'Se distribuye casi en todos los mares.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(9, 'TiburÃ³n zorro comÃºn', 'Thresher Shark', 'Alopias vulpinus', 'Chondrichthyes', 'Lamniformes', 'Alopiidae', 46, 'Nacional', '', '', '', '160-600', 'Palangres y redes de enmalle establecidos en la NOM-029-PESCA 2006 de Tiburones y Rayas.  ', 3, '(PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos pelÃ¡gicos y a veces costeros. Se alimenta de peces, cefalÃ³podos, crustÃ¡ceos y aves.', 'Se distribuye casi en todos los mares.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(10, 'Anguila europea', 'European Eel', 'Anguilla anguilla', 'Actinopterygii', 'Anguilliformes', 'Anguillidae', 35, 'Importado ', '', '', '', '30-130', 'Cultivos de engorda.', 0, '', 'Especie de agua dulce y salada. Se alimenta de invertebrados y pequeÃ±os peces. ', 'Se distribuye en rÃ­os que desembocan en el AtlÃ¡ntico Norte, el Mar BÃ¡ltico y el MediterrÃ¡neo. Vive a lo largo de las costas de Europa, desde el Mar Negro hasta el Mar Blanco.', 0, 'Fresco, congelado. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(11, 'Bacalao Negro', 'Sablefish', 'Anoplopoma fimbria ', 'Actinopterygii', 'Scorpaeniformes ', 'Anoplopomatidae', 3, 'Nacional', '', '', '', '50-100', 'LÃ­nea de trampa y palangre de anzuelo cebado.', 0, '', 'Especie marina de hÃ¡bitos bentÃ³nicos. Vive a profundidades que van de los 300 a 600 metros. Se alimenta de crustÃ¡ceos, poliquetos y pequeÃ±os peces.   ', 'Se distribuye en el PacÃ­fico Norte, desde JapÃ³n, Mar de Bering, hasta Baja California Sur.', 0, 'Se utiliza la carne y su aceite de hÃ­gado. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(12, 'Bagre maya', '', 'Ariopsis assimillis', 'Peces Ã³seos', 'Siluriformes', 'Ariidae', 4, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(13, 'Bagre', '', 'Ariopsis felis', 'Peces Ã³seos', 'Siluriformes', 'Ariidae', 4, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(14, 'Bagre cuatete', 'Widehead Sea Catfish', 'Ariopsis guatemalensis', 'Actinopterygii', 'Siluriformes', 'Ariidae', 4, 'Nacional', '', '', '', '20-40', 'Red de enmalle o chinchorro lisero.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en fondos fangosos. Se alimenta de peces e invertebrados.', 'Se distribuye en el PacÃ­fico Oriental, desde MÃ©xico a Costa Rica.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(15, 'Bagre tete', 'Tete Sea Catfish', 'Ariopsis seemanni', 'Actinopterygii', 'Siluriformes', 'Ariidae', 4, 'Nacional', '', '', '', '15-35', 'Red de enmalle de superficie tipo agallera, lÃ­nea de mano y arpÃ³n.   ', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en fondos fangosos. Se alimenta de peces e invertebrados.', 'Se distribuye en el PacÃ­fico Oriental, desde el Golfo de California hasta PerÃº.    ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(16, 'Bagre bandera', 'Gafftopsail Catfish', 'Bagre marinus', 'Actinopterygii', 'Siluriformes', 'Ariidae', 4, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '25-70', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie predominantemente marina. Vive en estuarios y manglares a profundidades menores de los 50 metros. Se alimenta de pequeÃ±os peces e invertebrados. Desova de mayo a agosto en la zona norte del Golfo de MÃ©xico.', 'Se distribuye en la costa del AtlÃ¡ntico, desde Estados Unidos a Brasil. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(17, 'Bagre chihuil', 'Chihuil Bagre', 'Bagre panamensis', 'Actinopterygii', 'Siluriformes', 'Ariidae', 4, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '22-40', 'Redes de arrastre, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en fondos fangosos. Se alimenta de peces e invertebrados.', 'Se distribuye en el PacÃ­fico Oriental, desde California a PerÃº.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(18, 'Bagre barbÃ³n', 'Long-Barbeled Sea Catfish', 'Bagre pinnimaculatus', 'Actinopterygii', 'Siluriformes', 'Ariidae', 4, 'Nacional', '', '', '', '30-90', 'Red de enmalle de superficie tipo agallera, lÃ­nea de mano y arpÃ³n.   ', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en fondos fangosos. Se alimenta de peces e invertebrados.', 'Se distribuye en el PacÃ­fico Oriental, desde California a PerÃº.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(19, 'Bagre prieto', '', 'Cathorops melanopus', 'Peces Ã³seos', 'Siluriformes', 'Ariidae', 4, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(20, 'Cochi', 'Finescale Triggerfish', 'Balistes polylepis', 'Actinopterygii', 'Tetraodontiformes', 'Balistidae', 17, 'Nacional', '', '', '', '40-70', 'LÃ­nea de mano, red agallera de fondo, palangre escamero.     ', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en arrecifes rocosos y de coral. Se alimenta de erizos, pequeÃ±os crustÃ¡ceos y moluscos.      ', 'Se distribuye en casi todo el OcÃ©ano PacÃ­fico.       ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(21, 'Cochito bota', 'Blunthead Triggerfish', 'Pseudobalistes naufragium', 'Actinopterygii', 'Tetraodontiformes', 'Balistidae', 17, 'Nacional', '', '', '', '40-100', 'LÃ­nea de mano, red agallera de fondo, palangre escamero.     ', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en arrecifes rocosos y de coral. Se alimenta de erizos, pequeÃ±os crustÃ¡ceos y moluscos.      ', 'Se distribuye en el PacÃ­fico Oriental, desde Baja California, Golfo de California, hasta Chile e Islas GalÃ¡pagos.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(22, 'Cochito naranja', 'Orangeside Triggerfish', 'Sufflamen verres', 'Actinopterygii', 'Tetraodontiformes', 'Balistidae', 17, 'Nacional', '', '', '', '25-40', 'LÃ­nea de mano, red agallera de fondo, palangre escamero.     ', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en arrecifes rocosos y de coral. Se alimenta de erizos, pequeÃ±os crustÃ¡ceos y moluscos.      ', 'Se distribuye en el PacÃ­fico Oriental, desde California a PerÃº.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(23, 'AgujÃ³n californiano', 'California Needlefish', 'Strongylura exilis', 'Actinopterygii', 'Beloniformes', 'Belonidae', 17, 'Nacional', '', '', '', '30-90', 'Red de enmalle de superficie tipo agallera, lÃ­nea de mano y arpÃ³n.   ', 0, '', 'Especie marina de hÃ¡bitos pelÃ¡gicos y costeros. Vive en zonas cerca de manglares, bahÃ­as y puertos. Se alimenta de pequeÃ±os peces.   ', 'Se distribuye en el PacÃ­fico Oriental, desde California, PerÃº e Islas GalÃ¡pagos.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(24, 'Lenguado', '', 'Bothus ocellatus', 'Peces Ã³seos', 'Pleuronectiformes', 'Bothidae ', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(25, 'Lenguado', '', 'Bothus robinsi', 'Peces Ã³seos', 'Pleuronectiformes', 'Bothidae ', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(26, 'Esmedregal ', '', 'Seriola dumerili', 'Peces Ã³seos', 'Perciformes', 'Carangidae', 18, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(27, 'Medregal fortuno', 'Fortune Jack', 'Seriola peruana', 'Actinopterygii', 'Perciformes', 'Carangidae', 18, 'Nacional', '', '', '', '40-60', 'Red agallera de superficie, chinchorro playero, almadraba y curricÃ¡n.', 0, '', 'Especie marina de hÃ¡bitos pelÃ¡gicos y costeros. Vive cerca de los arrecifes rocosos. Se alimenta de peces y crustÃ¡ceos.  ', 'Se distribuye en el PacÃ­fico Oriental, desde MÃ©xico hasta Ecuador e Islas GalÃ¡pagos. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(28, 'Esmedregal/Medregal limÃ³n ', 'Almaco Jack', 'Seriola rivoliana', 'Actinopterygii', 'Perciformes', 'Carangidae', 18, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '90-150', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa, red agallera para escama pelÃ¡gica.', 0, '', 'Especie marina de hÃ¡bitos pelÃ¡gicos. Vive cerca de la costa y sobre la plataforma continental. Se alimenta de peces y camarones.', 'Se distribuye en el AtlÃ¡ntico occidental, desde Nueva Escocia (CanadÃ¡), hasta Brasil. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(29, 'Coronado esmedregal ', 'Banded Rudderfish', 'Seriola zonata', 'Actinopterygii', 'Perciformes', 'Carangidae', 18, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '50-75', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa, red agallera para escama pelÃ¡gica. ', 0, '', 'Especie marina que vive asociada a arrecifes. Se alimenta de peces e invertebrados.', 'Se distribuye en todo el AtlÃ¡ntico y PacÃ­fico.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(30, 'Jureles ', 'Mackereles', 'Trachurus spp.', 'Peces Ã³seos', 'Perciformes', 'Carangidae', 35, '', '', '', '', '', '', 0, '', '', '', 0, 'Congelado. ', 'Estados Unidos, Canada.', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(31, 'Jurel de hebra', 'Threadfin Jack', 'Caranx otrynter', 'Actinopterygii', 'Perciformes', 'Carangidae', 23, 'Nacional', '', '', '', '30-60', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa, red agallera para escama pelÃ¡gica.', 0, '', 'Especie marina de hÃ¡bitos pelÃ¡gicos. Se alimenta de peces y camarones.  ', 'Se distribuye en el PacÃ­fico Oriental, desde MÃ©xico hasta Ecuador e Islas GalÃ¡pagos.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(32, 'Cocinero', 'Cocinero', 'Caranx vinctus', 'Actinopterygii', 'Perciformes', 'Carangidae', 17, 'Nacional', '', '', '', '20-40', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa, red agallera para escama pelÃ¡gica.', 0, '', 'Especie marina de hÃ¡bitos pelÃ¡gicos. Vive cerca de la costa y sobre la plataforma continental. Se alimenta de peces y camarones.', 'Se distribuye en el PacÃ­fico Oriental, desde el sur de California, Golfo de California, Ecuador e Islas Malpelo. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(33, 'Jurel bonito', 'Green Jack', 'Caranx caballus', 'Actinopterygii', 'Perciformes', 'Carangidae', 23, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '40-55', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa, red agallera para escama pelÃ¡gica.', 0, '', 'Especie marina de hÃ¡bitos pelÃ¡gicos. Vive en la zona de la plataforma continental y cerca de la costa. Se alimenta de peces, calamares, camarones y otros invertebrados. ', 'Se distribuye en el PacÃ­fico Oriental, desde California hasta PerÃº.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(34, 'Jurel toro', 'Pacific Crevalle Jack', 'Caranx caninus', 'Actinopterygii', 'Perciformes', 'Carangidae', 23, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '60-100', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa, red agallera para escama pelÃ¡gica.', 0, '', 'Especie marina de hÃ¡bitos pelÃ¡gicos. Vive en aguas costeras y oceÃ¡nicas. Se alimenta de peces, camarones y otros invertebrados.', 'Se distribuye en el PacÃ­fico Oriental, desde el sur de California hasta PerÃº.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(35, 'Jurel comÃºn', 'Crevalle Jack', 'Caranx hippos', 'Actinopterygii', 'Perciformes', 'Carangidae', 23, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '74-124', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa, red agallera para escama pelÃ¡gica. ', 0, '', 'Especie totalmente marina. Los adultos viven en las bocas de los rÃ­os, los juveniles viven en estuarios y cerca de los fondos fangosos, playas y pastos marinos. Se alimentan de peces, camarones y otros invertebrados.', 'Se distribuye en las costas del AtlÃ¡ntico oriental, desde Portugal hasta Angola, incluyendo el oeste del Mar MediterrÃ¡neo y en el AtlÃ¡ntico occidental, desde Nueva Escocia, Golfo de MÃ©xico y Uruguay.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(36, 'Jurel blanco', 'Horse Eye Jack', 'Caranx latus', 'Actinopterygii', 'Perciformes', 'Carangidae', 23, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '34-101', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa, red agallera para escama pelÃ¡gica.', 0, '', 'Especie marina que vive en el mar abierto y en los arrecifes. Los juveniles viven cerca de las costas, en fondos arenosos y fangosos. Pueden vivir hasta 140 m de profundidad. ', 'Se distribuye desde las costas del AtlÃ¡ntico occidental (Costa norte de los Estados Unidos, Bermudas, Golfo de MÃ©xico y Brasil.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(37, 'Jurel negro', '', 'Caranx lugubris', 'Peces Ã³seos', 'Perciformes', 'Carangidae', 23, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(38, 'Jurel vorÃ¡z', 'Bigeye Trevally', 'Caranx sexfasciatus', 'Actinopterygii', 'Perciformes', 'Carangidae', 23, 'Nacional', '', '', '', '50-120', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa, red agallera para escama pelÃ¡gica.', 0, '', 'Especie marina. Vive en aguas costeras y cerca de los arrecifes rocosos y de coral. Se alimenta de peces y crustÃ¡ceos. ', 'Se distribuye en el PacÃ­fico Oriental e Indo PacÃ­fico, desde el sur de California a Ecuador.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(39, 'Jurel de castilla', 'Pacific Bumper', 'Chloroscombrus orqueta', 'Actinopterygii', 'Perciformes', 'Carangidae', 23, 'Nacional', '', '', '', '15-30', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa, red agallera para escama pelÃ¡gica.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en aguas poco profundas en lagunas costeras y estuarios comÃºnmente en zonas de manglar. Se alimenta de peces y crustÃ¡ceos.', 'Se distribuye en el PacÃ­fico Oriental, desde el sur de California a PerÃº.  ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(40, 'Macarela salmÃ³n ', 'Rainbow Runner', 'Elagatis bipinnulata', 'Actinopterygii', 'Perciformes', 'Carangidae', 17, 'Nacional', '', '', '', '90-180', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa, red agallera para escama pelÃ¡gica.', 0, '', 'Especie marina de hÃ¡bitos oceÃ¡nicos y costeros. Vive cerca de los arrecifes o en el mar abierto alrededor de objetos flotantes. Se alimenta de crustÃ¡ceos y peces pequeÃ±os.   ', 'Se distribuye desde el AtlÃ¡ntico Occidental y norte del Golfo de MÃ©xico, AtlÃ¡ntico Oriental y Mar MediterrÃ¡neo, Indo PacÃ­fico y PacÃ­fico Oriental, Golfo de California, Ecuador e Islas GalÃ¡pagos.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(41, 'Jurelito chocho', 'Blackfin Jack', 'Hemicaranx zelotes', 'Actinopterygii', 'Perciformes', 'Carangidae', 17, 'Nacional', '', '', '', '20-40', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa, red agallera para escama pelÃ¡gica.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive cerca de los fondos y comÃºnmente penetra en los rÃ­os. Se alimenta de peces y crustÃ¡ceos.     ', 'Se distribuye en el PacÃ­fico Oriental, desde Baja California a PerÃº.      ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(42, 'Chicharro ojÃ³n', 'Bigeye Scad', 'Selar crumenophthalmus', 'Actinopterygii', 'Perciformes', 'Carangidae', 23, 'Nacional', '', '', '', '30-70', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa, red agallera para escama pelÃ¡gica.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive cerca de las islas y arrecifes. Se alimenta de peces y crustÃ¡ceos planctÃ³nicos y bentÃ³nicos.      ', 'Se distribuye desde el AtlÃ¡ntico Occidental y norte del Golfo de MÃ©xico, AtlÃ¡ntico Oriental y Mar MediterrÃ¡neo, Indo PacÃ­fico y PacÃ­fico Oriental, Golfo de California, Ecuador e Islas GalÃ¡pagos.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(43, 'Cojinuda', '', 'Carangoides bartholomaei', 'Peces Ã³seos', 'Perciformes', 'Carangidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(44, 'Cojiduda carbonera', '', 'Carangoides ruber', 'Peces Ã³seos', 'Perciformes', 'Carangidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(45, 'Cojinuda', '', 'Caranx crysos', 'Peces Ã³seos', 'Perciformes', 'Carangidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(46, 'Macarela mexicana', 'Amberstripe Scad', 'Decapterus muroadsi', 'Actinopterygii', 'Perciformes', 'Carangidae', 17, 'Nacional', '', '', '', '30-50', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa, red agallera para escama pelÃ¡gica.', 0, '', 'Especie marina de hÃ¡bitos oceÃ¡nicos y costeros. Se alimenta de invertebrados planctÃ³nicos.       ', 'Se distribuye en el Indo PacÃ­fico y PacÃ­fico Oriental, desde el Golfo de California hasta PerÃº.        ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(47, 'Macarella caballa', 'Mackerel Scad', 'Decapterus macarellus', 'Actinopterygii', 'Perciformes', 'Carangidae', 17, 'Nacional', '', '', '', '30-50', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa, red agallera para escama pelÃ¡gica.', 0, '', 'Especie marina de hÃ¡bitos oceÃ¡nicos. Vive cerca de las islas a profundidades que van de los 40 a 200 metros. Se alimenta del zooplancton.      ', 'Se distribuye casi en todos los mares.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(48, 'PiÃ±a bocona', 'Longjaw Leatherjack', 'Oligoplites altus', 'Actinopterygii', 'Perciformes', 'Carangidae', 17, 'Nacional', '', '', '', '30-60', 'Red de enmalle y red agallera de deriva.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en estuarios y lagunas costeras. Se alimenta de peces e invertebrados. ', 'Se distribuye en el PacÃ­fico Oriental, desde MÃ©xico a PerÃº.  ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(49, 'PiÃ±a flaca', 'shortjaw Leatherjack', 'Oligoplites refulgens', 'Actinopterygii', 'Perciformes', 'Carangidae', 44, 'Nacional', '', '', '', '20-30', 'Red de cerco con jareta y pangÃ³n.    ', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en estuarios y desembocaduras de los rÃ­os. Se alimenta de peces e invertebrados.     ', 'Se distribuye en el PacÃ­fico Oriental, desde MÃ©xico a PerÃº.  ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(50, 'PiÃ±a sietecueros', 'Leatherjack', 'Oligoplites saurus', 'Actinopterygii', 'Perciformes', 'Carangidae', 17, 'Nacional', '', '', '', '25-35', 'Red de enmalle o chinchorro lisero.      ', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive cerca de las playas en bahÃ­as, ensenadas y estuarios. Se alimenta de peces y crustÃ¡ceos.      ', 'Se distribuye en el OcÃ©ano AtlÃ¡ntico desde Maine, EE.UU, Golfo de MÃ©xico hasta Uruguay. En el OcÃ©ano PacÃ­fico desde Baja California a Ecuador.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(51, 'Jorobado mexicano', 'Mexican Lookdown', 'Selene brevoortii', 'Actinopterygii', 'Perciformes', 'Carangidae', 17, 'Nacional', '', '', '', '25-40', 'Red de enmalle o chinchorro lisero.      ', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive cerca de las playas en bahÃ­as, ensenadas y estuarios. Se alimenta de peces, crustÃ¡ceos, calamares y poliquetos.', 'Se distribuye en el PacÃ­fico Oriental, desde Baja California Sur a Ecuador.  ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(52, 'Medregal cola amarilla', 'Yellowtail Jack', 'Seriola lalandi', 'Actinopterygii', 'Perciformes', 'Carangidae', 23, 'Nacional', '', '', '', '80-250', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa, red agallera para escama pelÃ¡gica.', 0, '', 'Especie marina de hÃ¡bitos costeros y oceÃ¡nicos. Vive en las praderas de algas marinas, zonas rocosas y estuarios. Se alimenta de peces, calamares y crustÃ¡ceos.', 'Se distribuye casi en todos los mares.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(53, 'Charrito chÃ­charo', 'Jack Mackerel', 'Trachurus symmetricus', 'Actinopterygii', 'Perciformes', 'Carangidae', 17, 'Nacional', '', '', '', '30-80', 'Red de enmalle y red agallera de deriva.', 0, '', 'Especie marina de hÃ¡bitos oceÃ¡nicos.  Se alimenta de peces y crustÃ¡ceos.   ', 'Se distribuye en el PacÃ­fico Oriental, desde Alaska a Islas GalÃ¡pagos.    ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(54, 'PÃ¡mpano amarillo', 'Florida Pompano', 'Trachinotus carolinus', 'Actinopterygii', 'Perciformes', 'Carangidae', 0, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '25-64', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa, red agallera para escama pelÃ¡gica.', 0, '', 'Especie marina de aguas costeras, vive asociada a bahÃ­as y estuarios, principalmente en playas arenosas. Se alimenta de moluscos, crustÃ¡ceos, y pequeÃ±os peces.', 'Se distribuye en el AtlÃ¡ntico occidental, desde Massachusetts, hasta Argentina.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(55, 'PÃ¡mpano palometa', 'Permit', 'Trachinotus falcatus', 'Actinopterygii', 'Perciformes', 'Carangidae', 0, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '48-122', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa, red agallera para escama pelÃ¡gica.', 0, '', 'Especie marina que vive en zonas arrecifales y en fondos fangosos y arenosos. Se alimenta de moluscos, crustÃ¡ceos, y pequeÃ±os peces.', 'Se distribuye en el AtlÃ¡ntico occidental, desde Massachusetts, hasta Brasil.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(56, 'PÃ¡mpano paloma', 'Paloma Pompano', 'Trachinotus paitensis', 'Actinopterygii', 'Perciformes', 'Carangidae', 0, 'Nacional', '', '', '', '30-50', 'Red de enmalle y red agallera de deriva.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en zonas arenosas poco profundas. Se alimenta de moluscos, peces y crustÃ¡ceos.     ', 'Se distribuye en el PacÃ­fico Oriental, desde el sur de California a PerÃº.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(57, 'PÃ¡mpano fino', 'Gafftopsail Pompano', 'Trachinotus rhodopus', 'Actinopterygii', 'Perciformes', 'Carangidae', 0, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '20-60', 'Chinchorro playero, red agallera, red de cerco.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en las rompientes, en playas arenosas, arrecifes y zonas rocosas. Se alimenta de peces e invertebrados.', 'Se distribuye en el PacÃ­fico Oriental, desde el sur de California hasta PerÃº.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(58, 'PÃ¡mpano de hebra', '', 'Alectis ciliaris ', 'Peces Ã³seos', 'Perciformes', 'Carangidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(59, 'Jorobado ', '', 'Selene brownii', 'Peces Ã³seos', 'Perciformes', 'Carangidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(60, 'Jorobado', '', 'Selene setapinnis ', 'Peces Ã³seos', 'Perciformes', 'Carangidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(61, 'Jorobado', '', 'Selene vomer ', 'Peces Ã³seos', 'Perciformes', 'Carangidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(62, 'PÃ¡mpano', '', 'Trachinotus goodei', 'Peces Ã³seos', 'Perciformes', 'Carangidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(63, 'TiburÃ³n canguay', 'Blacknose Shark', 'Carcharhinus acronotus', 'Chondrichthyes', 'Carcharhiniformes', 'Carcharhinidae', 13, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '103-200', 'Red de enmalle para tiburones y rayas en embarcaciones menores, palangre para tiburÃ³n oceÃ¡nico y pez espada.', 3, '(Golfo de MÃ©xico y Caribe) del 1 de mayo al 29 de agosto. ', 'Especie marina que vive en la zona costera preferentemente en aguas tropicales y templadas cÃ¡lidas con fondos de arena y coral. Se alimenta de peces pequeÃ±os.', 'Se distribuye por todo el AtlÃ¡ntico occidental, desde Carolina del Norte, Florida, Bahamas, Golfo de MÃ©xico, Venezuela y sur de Brasil.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(64, 'CazÃ³n poroso', 'Smalltail Shark', 'Carcharhinus porosus', 'Chondrichthyes', 'Carcharhiniformes', 'Carcharhinidae', 13, 'Nacional', '', '', '', '80-150', 'Red de enmalle para tiburones y rayas en embarcaciones menores, palangre para tiburÃ³n oceÃ¡nico y pez espada.', 3, '(Golfo de MÃ©xico y Caribe) del 1 de mayo al 29 de agosto.  (PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina que vive en la zona costera preferentemente en aguas tropicales y templadas cÃ¡lidas con fondos de arena y coral. Se alimenta de peces pequeÃ±os.', 'Se distribuye por todo el AtlÃ¡ntico occidental, desde Carolina del Norte, Florida, Bahamas, Golfo de MÃ©xico, Venezuela y sur de Brasil. PacÃ­fico centro occidental y Sur. ', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(65, 'CazÃ³n bironche', 'Pacific Sharpnose Shark', 'Rhizoprionodon longurio', 'Chondrichthyes', 'Carcharhiniformes', 'Carcharhinidae', 13, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '60-100', 'Chinchorro playero, red de enmalle para tiburones y rayas en embarcaciones menores.', 3, '(PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos costeros y poco profundos. Vive en fondos arenosos y fangosos. Se alimenta de peces, moluscos y crustÃ¡ceos.', 'Se distribuye en el PacÃ­fico Oriental, desde Baja California a PerÃº. ', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(66, 'CazÃ³n de ley', 'Atlantic Sharpnose Shark', 'Rhizoprionodon terraenovae', 'Chondrichthyes', 'Carcharhiniformes', 'Carcharhinidae', 13, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '85-110', 'Red de enmalle para tiburones y rayas en embarcaciones menores, palangre para tiburÃ³n oceÃ¡nico y pez espada.', 3, '(Golfo de MÃ©xico y Caribe) del 1 de mayo al 29 de agosto. ', 'Especie marina de aguas continentales. Vive en la zona intermareal y aguas profundas. Se alimenta de peces, crustÃ¡ceos, gusanos y moluscos. ', 'Se distribuye en el AtlÃ¡ntico occidental, desde Canada hasta Brasil.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(67, 'Coyotito', 'Whitenose shark', 'Nasolamia velox', 'Chondrichthyes', 'Carcharhiniformes', 'Carcharhinidae', 46, 'Nacional', '', '', '', '90-150', 'Red de enmalle para tiburones y rayas en embarcaciones menores, palangre para tiburÃ³n oceÃ¡nico y pez espada.', 3, '(PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos costeros y poco profundos. Vive en fondos arenosos y fangosos. Se alimenta de peces, moluscos y crustÃ¡ceos.', 'Se distribuye en el PacÃ­fico Oriental, desde Baja California a PerÃº. ', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(68, 'TiburÃ³n curro', 'Spinner shark', 'Carcharhinus brevipinna', 'Chondrichthyes', 'Carcharhiniformes', 'Carcharhinidae', 46, 'Nacional', '', '', '', '170-260', 'Red de enmalle para tiburones y rayas en embarcaciones menores, palangre para tiburÃ³n oceÃ¡nico y pez espada.', 3, '(Golfo de MÃ©xico y Caribe) del 1 de mayo al 29 de agosto. ', 'Especie marina de hÃ¡bitos oceÃ¡nicos y costeros. Vive cerca de islas y mar adentro. Se alimenta de pequeÃ±os tiburones y peces.', 'Se distribuye en el Golfo de MÃ©xico y Mar Caribe. ', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(69, 'TiburÃ³n piloto', 'Silky shark', 'Carcharhinus falciformis', 'Chondrichthyes', 'Carcharhiniformes', 'Carcharhinidae', 46, 'Nacional', '', '', '', '80-330', 'Palangres y redes de enmalle establecidos en la NOM-029-PESCA 2006 de Tiburones y Rayas.  ', 3, '(Golfo de MÃ©xico y Caribe) del 1 de mayo al 29 de agosto.  (PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos oceÃ¡nicos y costeros. Vive cerca de islas y mar adentro. Se alimenta de pequeÃ±os tiburones y peces.', 'Se distribuye casi en todos los mares.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(70, 'TiburÃ³n dentiliso', 'Finetooth Shark', 'Carcharhinus isodon', 'Chondrichthyes', 'Carcharhiniformes', 'Carcharhinidae', 46, 'Nacional', '', '', '', '130-190', 'Red de enmalle para tiburones y rayas en embarcaciones menores, palangre para tiburÃ³n oceÃ¡nico y pez espada.', 3, '(Golfo de MÃ©xico y Caribe) del 1 de mayo al 29 de agosto. ', 'Especie marina de hÃ¡bitos costeros y poco profundos. Vive en fondos arenosos y fangosos. Se alimenta de peces, moluscos y crustÃ¡ceos.', 'Se distribuye en el Golfo de MÃ©xico y Mar Caribe. ', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(71, 'TiburÃ³n toro ', 'Bull Shark', 'Carcharhinus leucas', 'Chondrichthyes', 'Carcharhiniformes', 'Carcharhinidae', 46, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '180-360', 'Red de enmalle para tiburones y rayas en embarcaciones menores, palangre para tiburÃ³n oceÃ¡nico y pez espada.', 3, '(Golfo de MÃ©xico y Caribe) del 1 de mayo al 29 de agosto.  (PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos dulceacuÃ­colas. Vive en aguas poco profundas principalmente en bahÃ­as, estuarios y rÃ­os. Se alimenta de mamÃ­feros, tortugas, peces, tiburones, rayas e invertebrados.', 'Su distribuciÃ³n es mundial, se encuentra en el OcÃ©ano AtlÃ¡ntico y PacÃ­fico.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(72, 'TiburÃ³n volador', 'Blacktip Shark ', 'Carcharhinus limbatus', 'Chondrichthyes', 'Carcharhiniformes', 'Carcharhinidae', 46, 'Nacional', '', '', '', '120-270', 'Red de enmalle para tiburones y rayas en embarcaciones menores, palangre para tiburÃ³n oceÃ¡nico y pez espada.', 3, '(Golfo de MÃ©xico y Caribe) del 1 de mayo al 29 de agosto.  (PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos oceÃ¡nicos y costeros. Vive cerca de islas y mar adentro. Se alimenta de pequeÃ±os tiburones y peces.', 'Su distribuciÃ³n es mundial, se encuentra en el OcÃ©ano AtlÃ¡ntico y PacÃ­fico.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(73, 'TiburÃ³n oceÃ¡nico', 'Oceanic whitetip shark', 'Carcharhinus longimanus', 'Chondrichthyes', 'Carcharhiniformes', 'Carcharhinidae', 46, 'Nacional', '', '', '', '180-390', 'Palangre para la pesca de tiburones pelÃ¡gicos del PacÃ­fico.', 3, '(PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina, de hÃ¡bitos oceÃ¡nicos y aguas profundas. Se alimenta de peces, tortugas, manta rayas, aves, calamares y de mamÃ­feros muertos. ', 'Su distribuciÃ³n es mundial, se encuentra en el OcÃ©ano AtlÃ¡ntico y PacÃ­fico.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(74, 'TiburÃ³n gambuso', 'Dusky Shark', 'Carcharhinus obscurus', 'Chondrichthyes', 'Carcharhiniformes', 'Carcharhinidae', 46, 'Nacional', '', '', '', '100-400', 'Red de enmalle para tiburones y rayas en embarcaciones menores, palangre para tiburÃ³n oceÃ¡nico y pez espada.', 3, '  (PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos costeros. Vive en estuarios y fondos arenosos o fangosos. Se alimenta de otros tiburones y peces. ', 'Su distribuciÃ³n es mundial, se encuentra en el OcÃ©ano AtlÃ¡ntico y PacÃ­fico.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(75, 'TiburÃ³n aleta de cartÃ³n ', 'Sandbar Shark', 'Carcharhinus plumbeus', 'Chondrichthyes', 'Carcharhiniformes', 'Carcharhinidae', 46, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '126-250', 'Red de enmalle para tiburones y rayas en embarcaciones menores, palangre para tiburÃ³n oceÃ¡nico y pez espada.', 3, '(Golfo de MÃ©xico y Caribe) del 1 de mayo al 29 de agosto.  ', 'Especie marina de hÃ¡bitos costeros. Vive en estuarios y fondos arenosos o fangosos. Se alimenta de lenguados, rayas, cangrejos, caracoles y calamares.', 'Se distribuye casi en todos los mares.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(76, 'TiburÃ³n nocturno', 'Shark Night', 'Carcharhinus signatus', 'Chondrichthyes', 'Carcharhiniformes', 'Carcharhinidae', 46, 'Nacional', '', '', '', '60-280', 'Red de enmalle para tiburones y rayas en embarcaciones menores, palangre para tiburÃ³n oceÃ¡nico y pez espada.', 3, '(Golfo de MÃ©xico y Caribe) del 1 de mayo al 29 de agosto. ', 'Especie marina de hÃ¡bitos oceÃ¡nicos y costeros. Vive cerca de islas y mar adentro. Se alimenta de pequeÃ±os tiburones y peces.', 'Se distribuye en el Golfo de MÃ©xico y Mar Caribe. ', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(77, 'Tintorera', 'Tiger Shark', 'Galeocerdo cuvier', 'Chondrichthyes', 'Carcharhiniformes', 'Carcharhinidae', 46, 'Nacional', '', '', '', '100-400', 'Palangre para la pesca de tiburones pelÃ¡gicos del PacÃ­fico.', 3, '(Golfo de MÃ©xico y Caribe) del 1 de mayo al 29 de agosto.  (PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos costeros. Vive en estuarios y fondos arenosos o fangosos. Se alimenta de peces, tortugas, manta rayas, aves, calamares y de mamÃ­feros muertos. ', 'Se distribuye casi en todos los mares.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(78, 'TiburÃ³n limÃ³n', 'Lemon Shark', 'Negaprion brevirostris', 'Chondrichthyes', 'Carcharhiniformes', 'Carcharhinidae', 46, 'Nacional', '', '', '', '100-340', 'Red de enmalle para tiburones y rayas en embarcaciones menores, palangre para tiburÃ³n oceÃ¡nico y pez espada.', 3, '(PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos costeros. Vive en estuarios y fondos arenosos o fangosos.  Se alimenta de peces y crustaceos.', 'Su distribuciÃ³n es mundial, se encuentra en el OcÃ©ano AtlÃ¡ntico y PacÃ­fico.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(79, 'TiburÃ³n azul ', 'Blue Shark', 'Prionace glauca', 'Chondrichthyes', 'Carcharhiniformes', 'Carcharhinidae', 46, 'Nacional', '', '', '', '150-400', 'Red de enmalle para tiburones y rayas en embarcaciones menores, palangre para tiburÃ³n oceÃ¡nico y pez espada.', 3, '(PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina, de hÃ¡bitos oceÃ¡nicos y aguas profundas.  Se alimenta de peces, tortugas, manta rayas, aves, calamares y de mamÃ­feros muertos.  ', 'Se distribuye casi en todos los mares.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(80, 'Chucumite ', 'Smallscale Fat', 'Centropomus parallelus', 'Actinopterygii', 'Perciformes', 'Centropomidae', 40, 'Nacional', '', '', '', '20-70', 'Redes de enmalle.', 3, '(Golfo de MÃ©xico) del 15 de mayo al 15 de agosto).', 'Especie marina de hÃ¡bitos costeros. Vice en zonas estuarinas y lagunas costeras. Se alimenta de peces y crustÃ¡ceos. ', 'Se distribuye en el AtlÃ¡ntico occidental, desde el sur de Florida hasta Brasil.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(81, 'Robalo espina larga', '', 'Centropomus armatus', 'Peces Ã³seos', 'Perciformes', 'Centropomidae', 40, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(82, 'Robalo aleta prieta', 'Blackfin Snook', 'Centropomus medius', 'Actinopterygii', 'Perciformes', 'Centropomidae', 40, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '30-65', 'LÃ­nea de mano para peces pelÃ¡gicos y demersales, curricÃ¡n para pesca de especies pelÃ¡gicas.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en zonas estuarinas, manglares, bahÃ­as y en las boca de los rÃ­os. Se alimenta de peces y crustÃ¡ceos.', 'Se distribuye en el PacÃ­fico Oriental, desde Baja California a Colombia.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(83, 'Robalo prieto ', 'Black Snook', 'Centropomus nigrescens', 'Actinopterygii', 'Perciformes', 'Centropomidae', 40, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '45-120', 'LÃ­nea de mano para peces pelÃ¡gicos y demersales, curricÃ¡n para pesca de especies pelÃ¡gicas.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en zonas estuarinas, manglares, bahÃ­as y en las boca de los rÃ­os. Se alimenta de peces y crustÃ¡ceos.', 'Se distribuye en el PacÃ­fico Oriental, desde Baja California a Ecuador.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(84, 'Robalo prieto', 'Mexican Snook', 'Centropomus poeyi', 'Actinopterygii', 'Perciformes', 'Centropomidae', 40, 'Nacional', '', '', '', '40-90', 'Redes de enmalle.', 3, '(Golfo de MÃ©xico) del 15 de mayo al 15 de agosto).', 'Especie marina de hÃ¡bitos costeros. Vice en zonas estuarinas y lagunas costeras. Se alimenta de peces y crustÃ¡ceos. ', 'Se distribuye en el AtlÃ¡ntico central y Golfo de MÃ©xico. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(85, 'Robalo aleta amarilla', 'Yellowfin Snook', 'Centropomus robalito', 'Actinopterygii', 'Perciformes', 'Centropomidae', 40, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '25-35', 'LÃ­nea de mano para peces pelÃ¡gicos y demersales, curricÃ¡n para pesca de especies pelÃ¡gicas.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en zonas estuarinas, manglares, bahÃ­as y en las boca de los rÃ­os. Se alimenta de peces y crustÃ¡ceos.', 'Se distribuye en el PacÃ­fico Oriental, desde Baja California a Ecuador.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(86, 'Robalo blanco', 'Common Snook', 'Centropomus undecimalis', 'Actinopterygii', 'Perciformes', 'Centropomidae', 40, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '50-96', 'Redes de enmalle.', 3, '(Golfo de MÃ©xico) del 15 de mayo al 15 de agosto).', 'Especie marina de hÃ¡bitos costeros. Vice en zonas estuarinas y lagunas costeras. Se alimenta de peces y crustÃ¡ceos.', 'Se distribuye en el AtlÃ¡ntico occidental, desde el sur de Florida hasta Brasil.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(87, 'Robalo plateado ', '', 'Centropomus viridis', 'Peces Ã³seos', 'Perciformes', 'Centropomidae', 40, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(88, 'Robalo constantino', 'Tarpon Snook', 'Centropomus pectinatus ', 'Actinopterygii', 'Perciformes', 'Centropomidae', 17, 'Nacional', '', '', '', '40-55', 'Redes de enmalle.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vice en zonas estuarinas y lagunas costeras. Se alimenta de peces y crustÃ¡ceos.', 'Se distribuye en el AtlÃ¡ntico occidental, desde el sur de Florida hasta Brasil.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(89, 'Sabalote', '', 'Chanos chanos', 'Peces Ã³seos', 'Gonorynchiformes', 'Chanidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(90, 'Aranque del AtlÃ¡ntico ', 'Atlantic Herring', 'Clupea harengus', 'Actinopterygii', 'Clupeiformes', 'Clupeidae', 35, 'Importado ', '', '', '', '20-25', 'Redes de enmalle, redes de cerco de playa y pesca de arrastre de fondo. ', 0, '', 'Especie marina  de hÃ¡bitos costeros. Se alimenta de crustÃ¡ceos planctÃ³nicos, pequeÃ±os peces e invertebrados.', 'Se distribuye en el AtlÃ¡ntico Norte. ', 0, 'Congelado. ', 'Estados Unidos, Canada.', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(91, 'Arenque del PacÃ­fico', 'Pacific Herring', 'Clupea pallasii', 'Actinopterygii', 'Clupeiformes', 'Clupeidae', 35, 'Importado ', '', '', '', '20-35', 'Redes de enmalle, redes de cerco de playa y pesca de arrastre de fondo. ', 0, '', 'Especie marina  de hÃ¡bitos costeros. Se alimenta de crustÃ¡ceos planctÃ³nicos, pequeÃ±os peces e invertebrados.', 'Se distribuye en el PacÃ­fico Norte', 0, 'Congelado. ', 'Estados Unidos, Canada.', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(92, 'Sardina', 'True Sardina ', 'Sardina pilchardus', 'Actinopterygii', 'Clupeiformes', 'Clupeidae', 35, 'Importado ', '', '', '', '20-25', 'Redes de enmalle, redes de cerco de playa y pesca de arrastre de fondo. ', 0, '', 'Especie marina de hÃ¡bitos pelÃ¡gicos y oceÃ¡nicos. Se alimenta principalmente de crustÃ¡ceos planctÃ³nicos. ', 'Se distribuye en el AtlÃ¡ntico nororiental, Mar MediterrÃ¡neo y Mar Negro. ', 0, 'Fresco, congelado. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(93, 'Sardina ', 'European Sprat', 'Sprattus sprattus', 'Actinopterygii', 'Clupeiformes', 'Clupeidae', 35, 'Importado ', '', '', '', '20-25', 'Redes de arrastre y redes de deriva. ', 0, '', 'Especie marina de hÃ¡bitos pelÃ¡gicos, a veces se encuentra en estuarios. Se alimenta principalmente de crustÃ¡ceos planctÃ³nicos. ', 'Se distribuye en el AtlÃ¡ntico nororiental, Mar MediterrÃ¡neo y Mar Negro. ', 0, 'Fresco, congelado. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(94, 'Sardina de escama fina ', '', 'Brevoortia gunteri', 'Peces Ã³seos', 'Clupeiformes', 'Clupeidae', 44, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(95, 'Sardina lacha', '', 'Brevoortia patronus', 'Peces Ã³seos', 'Clupeiformes', 'Clupeidae', 44, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(96, 'Sardina carapachona', '', 'Harengula clupeola', 'Peces Ã³seos', 'Clupeiformes', 'Clupeidae', 44, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(97, 'Sardina vivita escamuda', 'Scaled Sardine', 'Harengula jaguana', 'Actinopterygii', 'Clupeiformes', 'Clupeidae', 44, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '12-21 cm ', 'Chinchorro playero, red agallera para escama pelÃ¡gica, red agallera para escama de fondo.', 0, '', 'Especie marina y costera, vive en fondos de arena y fango. Se alimenta de pequeÃ±os invertebrados.', 'Se distribuye en el AtlÃ¡ntico occidental, desde New Jersey a Brasil.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(98, 'Sardine crinuda azul', '', 'Opisthonema bulleri', 'Peces Ã³seos', 'Clupeiformes', 'Clupeidae', 44, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(99, 'Sardina crinuda', '', 'Opisthonema libertate', 'Peces Ã³seos', 'Clupeiformes', 'Clupeidae', 44, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(100, 'Sardina crinuda machete', '', 'Opisthonema medirastre', 'Peces Ã³seos', 'Clupeiformes', 'Clupeidae', 44, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(101, 'Sardina vivita de hebra', 'Atlantic Thread Herring', 'Opisthonema oglinum', 'Actinopterygii', 'Clupeiformes', 'Clupeidae', 44, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '14-38', 'Chinchorro playero, red agallera para escama pelÃ¡gica, red agallera para escama de fondo.', 0, '', 'Especie marina de aguas poco profundas. Vive en zonas costeras y cerca de los puertos. Se alimenta de plancton, de pequeÃ±os peces y crustÃ¡ceos.', 'Se distribuye en el AtlÃ¡ntico occidental, desde Estados Unidos hasta Brasil.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00');
INSERT INTO `peces` (`especie_id`, `nombre_comun`, `nombre_ingles`, `nombre_cientifico`, `clase`, `orden`, `familia`, `grupo_id`, `nacional_importado`, `tipo_imagen`, `imagen`, `triptico`, `talla_captura`, `arte_pesca`, `tipo_veda_id`, `veda`, `generalidades`, `descripcion_distribucion`, `cultivado_capturado`, `comercio`, `pais_importacion`, `html`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(102, 'Sardina Monterrey', 'Pacific Sardine', 'Sardinops sagax', 'Actinopterygii', 'Clupeiformes', 'Clupeidae', 44, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '13-40', 'Red de cerco regulada por la Norma Oficial Mexicana 003-PESC-1993.', 0, '', 'Especie marina de hÃ¡bitos costeros y pelÃ¡gicos. Viven la columna de agua. Se alimenta de crustÃ¡ceos planctÃ³nicos.  ', 'Se distribuye en todo el PacÃ­fico Oriental e Indo PacÃ­fico. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(103, 'Dorado', '', 'Coryphaena hippurus', 'Peces Ã³seos', 'Perciformes', 'Coryphaenidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(104, 'Raya lÃ¡tigo blanca', 'Southern Stingray', 'Dasyatis americana', 'Chondrichthyes', 'Rajiformes', 'Dasyatidae', 39, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '90-200', 'Red de enmalle para tiburones y rayas en embarcaciones menores.', 3, '(Golfo de MÃ©xico) del 15 de mayo al 15 de agosto).', 'Especie marina tolerante a cambios de salinidad y temperatura. Vive en zonas arenosas, praderas de pastos marinos, lagunas y zonas arrecifales. Se alimenta de grandes invertebrados y peces. ', 'Se distribuye en el AtlÃ¡ntico occidental, desde Nueva Jersey, Golfo de MÃ©xico, Brasil y Antillas. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(105, 'Raya lÃ¡tigo redonda  ', 'Whiptail Stingray', 'Dasyatis brevis', 'Chondrichthyes', 'Rajiformes', 'Dasyatidae', 39, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '120-190', 'Chinchorro playero, red de enmalle para tiburones y rayas en embarcaciones menores, red agallera para escama pelÃ¡gica.', 3, ' (PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos costeros. Vive asociado a manglares, praderas de pastos marinos, praderas de algas, arrecifes de coral y fondos arenosos y fangosos. Se alimenta de peces, crustÃ¡ceos y moluscos.', 'Se distribuye en el PacÃ­fico Oriental, desde California a PerÃº.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(106, '', '', 'Dasyatis guttata', 'Rayas y similares ', 'Rajiformes', 'Dasyatidae', 39, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(107, 'Mantarraya ', 'Longtail Stingray', 'Dasyatis longa', 'Chondrichthyes', 'Rajiformes', 'Dasyatidae', 39, 'Nacional', '', '', '', '90-150', 'Chinchorro playero, red de enmalle para tiburones y rayas en embarcaciones menores, red agallera para escama pelÃ¡gica.', 3, ' (PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos costeros. Vive asociado a manglares, praderas de pastos marinos, praderas de algas, arrecifes de coral y fondos arenosos y fangosos. Se alimenta de peces, crustÃ¡ceos y moluscos.', 'Se distribuye desde Baja California Sur hasta las Islas GalÃ¡pagos. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(108, 'Raya LÃ¡tigo de espina', 'Atlantic Stingray', 'Dasyatis sabina', 'Chondrichthyes', 'Rajiformes', 'Dasyatidae', 39, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '27-60', 'Red de enmalle para tiburones y rayas en embarcaciones menores.', 3, '(Golfo de MÃ©xico) del 15 de mayo al 15 de agosto).', 'Especie marina de aguas costeras. Vive en estuarios y lagunas costeras. Se alimenta de pequeÃ±os invertebrados. ', 'Se distribuye en el AtlÃ¡ntico occidental, desde Chesapeake Bay, sur de Florida y Golfo de MÃ©xico.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(109, 'Raya coluda del PacÃ­fico', 'Pacific Whiptail Stingray', 'Himantura pacifica', 'Chondrichthyes', 'Rajiformes', 'Dasyatidae', 39, 'Nacional', '', '', '', '90-150', 'Red de enmalle para tiburones y rayas en embarcaciones menores.', 3, ' (PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos costeros. Vive asociado a manglares, praderas de pastos marinos, praderas de algas, arrecifes de coral y fondos arenosos y fangosos. Se alimenta de peces, crustÃ¡ceos y moluscos.', 'Se distribuye desde Baja California Sur hasta las Islas GalÃ¡pagos. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(110, 'Raya coluda del AtlÃ¡ntico', '', 'Himantura schmardae', 'Rayas y similares ', 'Rajiformes', 'Dasyatidae', 39, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(111, 'Sardina japonesa', '', 'Etrumeus teres', 'Peces Ã³seos', 'Clupeiformes', 'Dussumieriidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(112, 'TiburÃ³n espinoso', 'Prickly Shark', 'Echinorhinus cookei ', 'Chondrichthyes', 'Squaliformes', 'Echinorhinidae', 46, 'Nacional', '', '', '', '100-400', 'Palangre para la pesca de tiburones pelÃ¡gicos del PacÃ­fico.', 3, '(PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos oceÃ¡nicos y costeros. Vive cerca de islas y mar adentro. Se alimenta de pequeÃ±os tiburones, peces y calamares.', 'Se distribuye en el PacÃ­fico Oriental, desde Baja California a PerÃº. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(113, 'Guabina de rÃ­o', '', 'Eleotris pisonis', 'Peces Ã³seos', 'Perciformes', 'Eleotridae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(114, 'Macabi', '', 'Elops affinis', 'Peces Ã³seos', 'Elopiformes', 'Elopidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(115, 'Macabi', '', 'Elops saurus', 'Peces Ã³seos', 'Elopiformes', 'Elopidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(116, 'Anchoa legÃ­tima', '', 'Anchoa hepsetus', 'Peces Ã³seos', 'Clupeiformes', 'Engraulidae', 1, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(117, 'Anchoveta ', '', 'Anchoa ischana', 'Peces Ã³seos', 'Clupeiformes', 'Engraulidae', 1, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(118, 'Anchoa ojuda', '', 'Anchoa lamprotaenia', 'Peces Ã³seos', 'Clupeiformes', 'Engraulidae', 1, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(119, 'Anchoa caleta', '', 'Anchoa mitchilli', 'Peces Ã³seos', 'Clupeiformes', 'Engraulidae', 1, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(120, 'Anchoa ojuda', '', 'Cetengraulis edentulus', 'Peces Ã³seos', 'Clupeiformes', 'Engraulidae', 1, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(121, 'Sardina bocona', '', 'Cetengraulis mysticetus', 'Peces Ã³seos', 'Clupeiformes', 'Engraulidae', 1, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(122, 'Anchoveta ', '', 'Engraulis mordax', 'Peces Ã³seos', 'Clupeiformes', 'Engraulidae', 1, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(123, 'Zopilote', '', 'Chaetodipterus zonatus', 'Peces Ã³seos', 'Perciformes', 'Ephippidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(124, 'Trompeta ', '', 'Fistularia commersonii', 'Peces Ã³seos', 'Syngnathiformes', 'Fistulariidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(125, 'Bacalao del PacÃ­fico', 'Pacific Cod', 'Gadus macrocephalus', 'Actinopterygii', 'Gadiformes', 'Gadidae', 35, 'Importado ', '', '', '', '20-100', 'Redes de arrastre de fondo, redes de arrastre pelÃ¡gico, redes de enmalle, palangre, redes de cerco. ', 0, '', 'Especie marina de amplia distribuciÃ³n desde la plataforma continental hasta las costas. Se alimenta copÃ©podos y otros crustÃ¡ceos.', 'Se distribuye en el PacÃ­fico Norte, Desde California, Estrecho de Bering y JapÃ³n. ', 0, 'Congelado, ahumado, salado. ', 'EspaÃ±a, Estados Unidos. ', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(126, 'Bacalao del AtlÃ¡ntico', 'Atlantic Cod', 'Gadus morhua', 'Actinopterygii', 'Gadiformes', 'Gadidae', 35, 'Importado ', '', '', '', '100-200', 'Redes de arrastre de fondo, redes de arrastre pelÃ¡gicol, redes de enmalle, palangre, redes de cerco. ', 0, '', 'Especie marina de amplia distribuciÃ³n desde la plataforma continental hasta las costas. Se alimenta copÃ©podos y otros crustÃ¡ceos.', 'Se distribuye en el AtlÃ¡ntico Norte. ', 0, 'Congelado, ahumado, salado. ', 'EspaÃ±a, Estados Unidos. ', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(127, 'Bacalao de Groenlandia ', 'Greenland Cod', 'Gadus ogac', 'Actinopterygii', 'Gadiformes', 'Gadidae', 35, 'Importado ', '', '', '', '50-80', 'Redes de arrastre de fondo, redes de arrastre pelÃ¡gicol, redes de enmalle, palangre, redes de cerco. ', 0, '', 'Especie marina de amplia distribuciÃ³n desde la plataforma continental hasta las costas. Se alimenta copÃ©podos y otros crustÃ¡ceos.', 'Se distribuye en todo el Ãrtico. ', 0, 'Congelado, ahumado, salado. ', 'EspaÃ±a, Estados Unidos. ', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(128, 'Mojarra plateada ', '', 'Diapterus argentus', 'Peces Ã³seos', 'Perciformes', 'Gerreidae', 30, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(129, 'Mojarra blanca/Mojarra gaucha', 'Irish Pompano', 'Diapterus auratus', 'Actinopterygii', 'Perciformes', 'Gerreidae', 30, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '20-34', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina de aguas poco profundas. Vive en las bocas de los rÃ­os y en las lagunas costeras principalmente manglares y praderas de pastos marinos. Se alimenta de pequeÃ±os invertebrados bentÃ³nicos.', 'Se distribuye en el AtlÃ¡ntico occidental, desde Carolina del Norte hasta Brasil.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(130, 'Mojarra palometa', 'Golden Mojarra', 'Diapterus aureolus', 'Actinopterygii', 'Perciformes', 'Gerreidae', 30, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '15-40', 'Red agallera para escama pelÃ¡gica, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina de hÃ¡bitos costeros y de bajas profundidades. Vive en fondos arenosos y fangosos. Se alimenta de partÃ­culas del sustrato.', 'Se distribuye en el PacÃ­fico Oriental, desde el Golfo de California a PerÃº.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(131, 'Mojarra aletas amarillas', 'Peruvian Mojarra', 'Diapterus peruvianus', 'Actinopterygii', 'Perciformes', 'Gerreidae', 30, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '15-30', 'Red agallera para escama pelÃ¡gica, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina de hÃ¡bitos costeros y de bajas profundidades. Vive en manglares y fondos arenosos y fangosos. Se alimenta de partÃ­culas del sustrato.', 'Se distribuye en el PacÃ­fico Oriental, desde Baja California a PerÃº.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(132, 'Mojarra plateada ', '', 'Eucinostomus argenteus', 'Peces Ã³seos', 'Perciformes', 'Gerreidae', 30, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(133, 'Mojarra tricolor', '', 'Eucinostomus currani', 'Peces Ã³seos', 'Perciformes', 'Gerreidae', 30, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(134, 'Mojarra cantileÃ±a', '', 'Eucinostomus dowii', 'Peces Ã³seos', 'Perciformes', 'Gerreidae', 30, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(135, 'Mojarra charrita', '', 'Eucinostomus gracilis', 'Peces Ã³seos', 'Perciformes', 'Gerreidae', 30, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(136, 'Mojarra de rÃ­o', '', 'Eucinostomus gula', 'Peces Ã³seos', 'Perciformes', 'Gerreidae', 30, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(137, 'Mojarra mancha negra', 'Darkspot Mojarra', 'Eucinostomus entomelas', 'Peces Ã³seos', 'Perciformes', 'Gerreidae', 30, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(138, 'Mojarra rayada', ' Striped Mojarra', 'Eugerres plumieri', 'Actinopterygii', 'Perciformes', 'Gerreidae', 30, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '18-40', 'Chinchorro playero, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina de aguas poco profundas. Vive en fondos fangosos, bocas de los rÃ­os y lagunas costeras que presentan bosques de manglar. Se alimenta de insectos acuÃ¡ticos, crustÃ¡ceos, moluscos y detritus.', 'Se distribuye en el AtlÃ¡ntico occidental, desde Carolina del Sur a Brasil.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(139, 'Mojarra malacapa', 'Black Axillary', 'Eugerres axillaris', 'Peces Ã³seos', 'Perciformes', 'Gerreidae', 30, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(140, 'Mojarra aleta corta', 'Shortfin Mojarra', 'Eugerres brevimanus', 'Peces Ã³seos', 'Perciformes', 'Gerreidae', 30, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(141, 'Mojarra china', 'Streaked Mojarra', 'Eugerres lineatus', 'Peces Ã³seos', 'Perciformes', 'Gerreidae', 30, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(142, 'Mojarra bandera ', '', 'Gerres cinereus', 'Peces Ã³seos', 'Perciformes', 'Gerreidae', 30, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(143, 'Mojarrita', '', 'Eucinostomus lefroyi', 'Peces Ã³seos', 'Perciformes', 'Gerreidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(144, 'TiburÃ³n gata', '', 'Ginglymostoma cirratum', 'Tiburones ', 'Orectolobiformes', 'Ginglymostomatidae', 46, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(145, 'Raya de papel', '', 'Gymnura altavela', 'Rayas y similares ', 'Rajiformes', 'Gymnuridae', 39, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(146, 'Raya mariposa ', 'Longsnout Butterfly Ray', 'Gymnura crebripunctata', 'Chondrichthyes', 'Rajiformes', 'Gymnuridae', 39, 'Nacional', '', '', '', '20-30', 'Chinchorro playero, red de enmalle para tiburones y rayas en embarcaciones menores, red agallera para escama pelÃ¡gica.', 3, ' (PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de aguas costeras. Vive en estuarios y lagunas costeras. Se alimenta de pequeÃ±os invertebrados. ', 'Se distribuye en el PacÃ­fico Oriental, desde Baja California a PanamÃ¡.  ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(147, 'Raya mariposa ', 'California Butterfly Ray', 'Gymnura marmorata', 'Chondrichthyes', 'Rajiformes', 'Gymnuridae', 39, 'Nacional', '', '', '', '30-100', 'Chinchorro playero, red de enmalle para tiburones y rayas en embarcaciones menores, red agallera para escama pelÃ¡gica.', 3, ' (PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de aguas costeras. Vive en estuarios y lagunas costeras. Se alimenta de pequeÃ±os invertebrados. ', 'Se distribuye en el PacÃ­fico Oriental, desde Baja California a PerÃº. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(148, 'Raya mariposa ', 'Smooth Butterfly Ray', 'Gymnura micrura', 'Chondrichthyes', 'Rajiformes', 'Gymnuridae', 39, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '90-137', 'Red de enmalle para tiburones y rayas en embarcaciones menores.', 0, '', 'Especie marina y costera. Vive en fondos lodosos y fangosos y en estuarios. Se alimenta de peces y crustÃ¡ceos.', 'Especie de amplia distribuciÃ³n se encuentra en el AtlÃ¡ntico occidental y oriental.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(149, 'Burro bacoco', '', 'Anisotremus interruptus', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(150, 'Barriquete', '', 'Anisotremus surinamensis', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(151, 'Burro rasposo ', '', 'Haemulon maculicauda', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(152, 'Boquilla ', '', 'Haemulon plumieri', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(153, 'Burro almejero', '', 'Haemulon sexfasciatum', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(154, 'Burrito corcovado', '', 'Orthopristis chalceus', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(155, 'Armado ', '', 'Orthopristis chrysoptera', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(156, 'Burro croco', '', 'Pomadasys crocro', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(157, 'Chula', '', 'Xenichthys xanti', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(158, 'Ronco', '', 'Conodon nobilis', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 41, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(159, 'Ronco jeniguaro ', '', 'Haemulon aurolineatum', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 41, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(160, 'Ronco prieto', '', 'Haemulon bonariense', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 41, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(161, 'Ronco chano ', '', 'Haemulon flaviguttatum', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 41, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(162, 'Ronco condenado ', 'French Grunt', 'Haemulon flavolineatum', 'Actinopterygii', 'Perciformes', 'Haemulidae', 41, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '17-30', 'LÃ­nea de mano para peces pelÃ¡gicos y demersales. ', 0, '', 'Especie marina de aguas poco profundas. Vive en zonas arrecifales y los juveniles  en praderas de pastos marinos. Se alimenta de pequeÃ±os crustÃ¡ceos.', 'Se distribuye en el AtlÃ¡ntico occidental, desde Carolina del Sur a AmÃ©rica Central.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(163, 'Ronco caritÃ©', '', 'Haemulon sciurus ', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 41, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(164, 'Ronco roncacho', '', 'Haemulopsis leuciscus', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 41, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(165, 'Ronco rayado', '', 'Microlepidotus brevipinnis', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 41, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(166, 'Ronco rayadito', '', 'Microlepidotus inornatus', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 41, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(167, 'Burrito ', '', 'Orthopristis reddingi', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 41, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(168, 'Roncacho gordo', 'Longspine grunt', 'Pomadasys macracanthus', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 41, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(169, 'Ronco mapache', '', 'Pomadasys panamensis', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 41, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(170, 'Ronco boquichica', 'Smallmouth Grunt', 'Haemulon chrysargyreum ', 'Actinopterygii', 'Perciformes', 'Haemulidae', 41, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '17-23', 'LÃ­nea de mano para peces pelÃ¡gicos y demersales. ', 0, '', 'Especie marina de aguas poco profundas. Vive en zonas arrecifales. Los juveniles viven en praderas de pastos marinos. Se alimenta de pequeÃ±os invertebrados.', 'Se distribuye en el AtlÃ¡ntico occidental, desde el sur de Florida hasta Brasil.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(171, 'Burro', '', 'Haemulon macrostomum', 'Peces Ã³seos', 'Perciformes', 'Haemulidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(172, 'Lingcod ', '', 'Ophiodon elongatus ', 'Peces Ã³seos', 'Scorpaeniformes', 'Hexagrammidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(173, 'Pez vela', '', 'Istiophorus albicans', 'Peces Ã³seos', 'Perciformes', 'Istiophoridae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(174, 'Pez vela', 'Sailfish', 'Istiophorus platypterus', 'Actinopterygii', 'Perciformes', 'Istiophoridae', 36, 'Nacional', '', '', '', '170-200', 'Pesca con caÃ±a. ', 0, 'Todo el aÃ±o ', 'Especie marina de hÃ¡bitos oceÃ¡nicos, vive cerca de la costa e islas. Se alimenta de peces pequeÃ±os, crustÃ¡ceos y cefalÃ³podos.   ', 'Se distribuye todo el PacÃ­fico. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(175, 'MarlÃ­n negro', 'Black Marlin', 'Makaira indica', 'Actinopterygii', 'Perciformes', 'Istiophoridae', 0, 'Nacional', '', '', '', '180-210', 'Pesca con caÃ±a. ', 0, 'Todo el aÃ±o ', 'Especie marina de hÃ¡bitos oceÃ¡nicos, vive cerca de la costa e islas. Se alimenta de peces pequeÃ±os, crustÃ¡ceos y cefalÃ³podos.   ', 'Se distribuye casi en todos los mares.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(176, 'Marlin azul del PacÃ­fico', '', 'Makaira mazara', 'Peces Ã³seos', 'Perciformes', 'Istiophoridae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(177, 'Aguja corta', 'Shortbill Spearfish', 'Tetrapturus angustirostris  ', 'Actinopterygii', 'Perciformes', 'Istiophoridae', 0, 'Nacional', '', '', '', '150-190', 'Pesca con caÃ±a.', 0, 'Todo el aÃ±o ', 'Especie marina de hÃ¡bitos oceÃ¡nicos, vive cerca de la costa e islas. Se alimenta de peces pequeÃ±os, crustÃ¡ceos y cefalÃ³podos.   ', 'Se distribuyeen todo el PacÃ­fico. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(178, 'MarlÃ­n rayado', 'Striped Marlin', 'Tetrapturus audax ', 'Actinopterygii', 'Perciformes', 'Istiophoridae', 0, 'Nacional', '', '', '', '150-290', 'Pesca con caÃ±a.', 0, 'Todo el aÃ±o ', 'Especie marina de hÃ¡bitos oceÃ¡nicos, vive cerca de la costa e islas. Se alimenta de peces pequeÃ±os, crustÃ¡ceos y cefalÃ³podos.   ', 'Se distribuyeen todo el PacÃ­fico. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(179, 'MarlÃ­n azul del AtlÃ¡ntico', 'Blue Marlin', 'Makaira nigricans', 'Actinopterygii', 'Perciformes', 'Istiophoridae', 0, 'Nacional', '', '', '', '150-300', 'Pesca con caÃ±a.', 0, 'Todo el aÃ±o ', 'Especie marina de hÃ¡bitos oceÃ¡nicos. Se alimenta de pulpos, calamares y peces.    ', 'Se distribuye casi en todos los mares.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(180, 'MarlÃ­n blanco', 'White Marlin', 'Tetrapturus albidus', 'Actinopterygii', 'Perciformes', 'Istiophoridae', 0, 'Nacional', '', '', '', '150-300', 'Pesca con caÃ±a.', 0, 'Todo el aÃ±o ', 'Especie marina de hÃ¡bitos oceÃ¡nicos. Se alimenta de pulpos, calamares y peces.    ', 'Se distribuye en el AtlÃ¡ntico occidental, desde el sur de Florida hasta Brasil.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(181, 'Chopa rayada', '', 'Kyphosus analogus', 'Peces Ã³seos', 'Perciformes', 'Kyphosidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(182, 'Chopa de CortÃ©s', '', 'Kyphosus elegans', 'Peces Ã³seos', 'Perciformes', 'Kyphosidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(183, 'Chopa amarilla', '', 'Kyphosus incisor', 'Peces Ã³seos', 'Perciformes', 'Kyphosidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(184, 'Chopa negra', '', 'Kyphosus sectatrix', 'Peces Ã³seos', 'Perciformes', 'Kyphosidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(185, 'Chopa salema', '', 'Sectator ocyurus', 'Peces Ã³seos', 'Perciformes', 'Kyphosidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(186, 'Chopa bonita', 'Zebra Perch Sea Chub', 'Hermosilla azurea ', 'Peces Ã³seos', 'Perciformes', 'Kyphosidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(187, 'Vieja mexicana', '', 'Bodianus diplotaenia', 'Peces Ã³seos', 'Perciformes', 'Labridae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(188, 'Boquinete', '', 'Lachnolaimus maximus', 'Peces Ã³seos', 'Perciformes', 'Labridae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(189, 'Vieja californiana', '', 'Semicossyphus pulcher', 'Peces Ã³seos', 'Perciformes', 'Labridae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(190, 'Vieja lomo negro', '', 'Bodianus pulchellus', 'Peces Ã³seos', 'Perciformes', 'Labridae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(191, 'Vieja espaÃ±ola', '', 'Bodianus rufus ', 'Peces Ã³seos', 'Perciformes', 'Labridae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(192, 'TiburÃ³n mako', 'Shortfin Mako', 'Isurus oxyrinchus', 'Chondrichthyes', 'Lamniformes', 'Lamnidae', 46, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '275-400', 'Palangre para la pesca de tiburones pelÃ¡gicos del PacÃ­fico.', 3, ' (PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos oceÃ¡nicos y costeros. Vive en mares tropicales y de aguas templado â€“cÃ¡lidas. Se alimenta de peces y pequeÃ±os tiburones.', 'Se distribuye casi en todos los mares.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(193, 'Chopa', '', 'Lobotes surinamensis', 'Peces Ã³seos', 'Perciformes', 'Lobotidae ', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(194, 'Besugo ', 'Vermilion Snapper', 'Rhomboplites aurorubens', 'Actinopterygii', 'Perciformes', 'Lutjanidae', 9, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '20-60', 'Chinchorro playero, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina de aguas moderadamente profundas. Vive en zonas rocosas o de arena. Se alimenta de peces, crustÃ¡ceos, gusanos y moluscos. ', 'Se distribuye en el AtlÃ¡ntico occidental, desde Carolina del Norte en Estados Unidos hasta Brasil.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(195, 'Huachinango seda ', '', 'Etelis oculatus', 'Peces Ã³seos', 'Perciformes', 'Lutjanidae', 22, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(196, 'Huachinando aleta negra ', '', 'Lutjanus buccanella', 'Peces Ã³seos', 'Perciformes', 'Lutjanidae', 22, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(197, 'Huachinango del Golfo', 'Red Snapper', 'Lutjanus campechanus', 'Actinopterygii', 'Perciformes', 'Lutjanidae', 22, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '25-100', 'Chinchorro playero, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina que vive en fondos rocosos. Los juveniles viven a poca profundidad y en fondos arenosos y fangosos. Se alimenta de crustÃ¡ceos, moluscos, poliquetos y peces. ', 'Se distribuye en el AtlÃ¡ntico occidental, desde Massachusetts hasta el Golfo de MÃ©xico y Caribe.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(198, 'Huachinango del PacÃ­fico', 'Pacific Red Snapper', 'Lutjanus peru', 'Actinopterygii', 'Perciformes', 'Lutjanidae', 22, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '50-95', 'Redes de arrastre, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en fondos rocosos y arrecifales. Se alimenta de peces e invertebrados.', 'Se distribuye en el PacÃ­fico Oriental, desde California a PerÃº.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(199, 'Huachinango ojo amarillo', 'Silk Snapper', 'Lutjanus vivanus', 'Actinopterygii', 'Perciformes', 'Lutjanidae', 22, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '50-83', 'Chinchorro playero, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina de aguas profundas. Se alimenta de peces, crustÃ¡ceos, moluscos y otros invertebrados.', 'Se distribuye en el AtlÃ¡ntico occidental, desde Carolina del Norte en Estados Unidos hasta Brasil.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(200, 'Cubera ', '', 'Lutjanus cyanopterus', 'Peces Ã³seos', 'Perciformes', 'Lutjanidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(201, 'Pargo coconaco', ' Barred Pargo', 'Hoplopagrus guentherii', 'Actinopterygii', 'Perciformes', 'Lutjanidae', 34, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '50-90', 'Chinchorro playero, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en arrecifes rocosos y de coral. Se alimenta de peces e invertebrados. ', 'Se distribuye en el PacÃ­fico Oriental, desde Baja California a Ecuador.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(202, 'Pargo criollo', 'Mutton Snapper', 'Lutjanus analis', 'Actinopterygii', 'Perciformes', 'Lutjanidae', 34, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '52-94', 'Chinchorro playero, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina que vive asociada a arrecifes rocosos y coralinos. Los juveniles viven en praderas de pastos marinos. Se alimenta de peces, crustÃ¡ceos y moluscos.', 'Se distribuye en el AtlÃ¡ntico occidental, desde Massachusetts hasta Brasil. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(203, 'Pargo canchix', 'Schoolmaster', 'Lutjanus apodus', 'Actinopterygii', 'Perciformes', 'Lutjanidae', 34, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '26-67', 'Chinchorro playero, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina de aguas poco profundas. Los adultos viven en zonas arrecifales y los juveniles en praderas de pastos marinos. Su alimentaciÃ³n consta de crustÃ¡ceos, moluscos, gusanos y peces.', 'Se distribuye en el AtlÃ¡ntico occidental, desde Massachusetts hasta Brasil. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(204, 'Pargo raicero', '', 'Lutjanus aratus', 'Peces Ã³seos', 'Perciformes', 'Lutjanidae', 34, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(205, 'Pargo amarillo', 'Yellow Snapper', 'Lutjanus argentiventris', 'Actinopterygii', 'Perciformes', 'Lutjanidae', 34, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '20-70', 'Redes de arrastre, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina de hÃ¡bitos costeros. Los adultos viven en zonas arrecifales y los juveniles en manglares. Se alimenta de peces e invertebrados.', 'Se distribuye en el PacÃ­fico Oriental, desde California a PerÃº.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(206, 'Pargo colorado', 'Colorado Snapper', 'Lutjanus colorado', 'Actinopterygii', 'Perciformes', 'Lutjanidae', 34, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '35-70', 'Redes de arrastre, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en zonas arrecifales y rocosas. Se alimenta de peces e invertebrados.', 'Se distribuye en el PacÃ­fico Oriental, desde California a Ecuador.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(207, 'Pargo mulato', 'Gray Snapper', 'Lutjanus griseus', 'Actinopterygii', 'Perciformes', 'Lutjanidae', 34, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '32-89', 'Chinchorro playero, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina que vive en arrecifes, zonas rocosas, estuarios y manglares. Los juveniles viven en las bocas de los rÃ­os. Se alimenta de pequeÃ±os peces, crustÃ¡ceos y moluscos.', 'Se distribuye en el AtlÃ¡ntico occidental, desde Massachusetts hasta Brasil. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(208, 'Pargo lunarejo', 'Spotted Rose', 'Lutjanus guttatus', 'Actinopterygii', 'Perciformes', 'Lutjanidae', 34, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '35-80', 'Redes de arrastre, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en zonas arrecifales y rocosas. Se alimenta de peces e invertebrados.', 'Se distribuye en el PacÃ­fico Oriental, desde California a PerÃº.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(209, 'Pargo caballera', '', 'Lutjanus jocu', 'Peces Ã³seos', 'Perciformes', 'Lutjanidae', 34, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(210, 'Pargo rojo ', '', 'Lutjanus jordani', 'Peces Ã³seos', 'Perciformes', 'Lutjanidae', 34, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(211, 'Pargo mulato', 'Pacific Dog Snapper', 'Lutjanus novemfasciatus', 'Actinopterygii', 'Perciformes', 'Lutjanidae', 34, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '40-170', 'Redes de arrastre, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive fondos rocosos y arrecifales. Se alimenta de peces e invertebrados.', 'Se distribuye en el PacÃ­fico Oriental, desde California a PerÃº.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(212, 'Pargo rojo ', '', 'Lutjanus purpureus', 'Peces Ã³seos', 'Perciformes', 'Lutjanidae', 34, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(213, 'Pargo azul-dorado', 'Blue and Gold snapper', 'Lutjanus viridis', 'Actinopterygii', 'Perciformes', 'Lutjanidae', 34, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '15-30', 'Redes de arrastre, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive asociada a fondos rocosos y arrecifales. Se alimenta de peces e invertebrados.', 'Se distribuye en el PacÃ­fico Oriental, desde Baja California a Ecuador.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(214, 'Pargo rabirrubia', '', 'Lutjanus inermis', 'Peces Ã³seos', 'Perciformes', 'Lutjanidae', 42, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(215, 'Pargo biajaiba', '', 'Lutjanus synagris', 'Peces Ã³seos', 'Perciformes', 'Lutjanidae', 42, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(216, 'Rubia ', 'Yellowtail Snapper', 'Ocyurus chrysurus', 'Actinopterygii', 'Perciformes', 'Lutjanidae', 42, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '29-86', 'Chinchorro playero, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina que vive en zonas arrecifales. Se alimenta de plancton, animales bentÃ³nicos y peces.', 'Se distribuye en el AtlÃ¡ntico occidental, desde Massachusetts hasta Brasil. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(217, 'Lamparita', '', 'Apsilus dentatus', 'Peces Ã³seos', 'Perciformes', 'Lutjanidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(218, 'Conejo amarillo', '', 'Lopholatilus chamaeleonticeps', 'Peces Ã³seos', 'Perciformes', 'Malacanthidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(219, 'Conejo ', '', 'Caulolatilus affinis', 'Peces Ã³seos', 'Perciformes', 'Malacanthidae', 38, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(220, 'Pierna', 'Ocean Whitefish', 'Caulolatilus princeps', 'Actinopterygii', 'Perciformes', 'Malacanthidae', 38, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '30-100', 'Chinchorro playero, red agallera, red de arrastre. ', 0, '', 'Especie marina que vive en los arrecifes y en zonas de fondo rocoso. ', 'Se distribuye en el PacÃ­fico Oriental desde CanadÃ¡ hasta PerÃº.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(221, 'Blanquillo ojo amarillo', '', 'Caulolatilus chrysops', 'Peces Ã³seos', 'Perciformes', 'Malacanthidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(222, 'Blanquillo payaso', '', 'Caulolatilus intermedius', 'Peces Ã³seos', 'Perciformes', 'Malacanthidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(223, 'Blanquillo lucio', '', 'Caulolatilus microps', 'Peces Ã³seos', 'Perciformes', 'Malacanthidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(224, 'Merluza', 'European hake', 'Merluccius spp.', 'Actinopterygii', 'Gadiformes', 'Merlucciidae', 35, 'Importado ', '', '', '', '30-60', 'Redes de arrastre, redes de cerco danesas y palangres.', 0, '', 'Especie marina. Vive cerca de los fondos a profundidades que van de los 70 a 1000 metros. Se alimenta principalmente de peces pequeÃ±os y calamares.', 'Se distribuye en la costa atlÃ¡ntica de Europa y al oeste de Ãfrica del Norte, Mar MediterrÃ¡neo y en la costa sur del Mar Negro.', 0, 'Congelado. ', 'EspaÃ±a.', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(225, 'Merluza norteÃ±a', '', 'Merluccius productus', 'Peces Ã³seos', 'Gadiformes', 'Merlucciidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(226, 'Lija garrapatera', '', 'Aluterus scriptus', 'Peces Ã³seos', 'Tetraodontiformes', 'Monocanthidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(227, 'Lubina', 'European seabass', 'Dicentrarchus spp.', 'Actinopterygii', 'Perciformes', 'Moronidae', 35, 'Importado ', '', '', '', '50-100', 'Redes de arrastre de fondo, redes de playa, anzuelos y lÃ­neas.', 0, '', 'Especie marina de aguas costeras. Vive en estuarios y en las bocas de los rÃ­os. Se alimenta de peces pequeÃ±os e invertebrados.', 'Se distribuye en el AtlÃ¡ntico Norte. Noruega, Islas BritÃ¡nicas, Mar MediterrÃ¡neo, Mar Negro y sur de Senegal. ', 0, 'Congelado. ', 'EspaÃ±a, Nicaragua', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(228, 'Lisa blanca', 'White Mullet', 'Mugil curema', 'Actinopterygii', 'Mugiliformes', 'Mugilidae', 24, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '24-90', 'Red agallera para lisa y liseta o lebrancha.', 3, '(PacÃ­fico) Del 1 de abril al 15 de julio. (Golfo de MÃ©xico) del 1 de diciembre al 28 de febrero.   ', 'Especie marina de aguas poco profundas. Vive en fondos arenosos y en zonas de arrecife. Se alimenta de algas y organismos planctÃ³nicos.', 'Se distribuye en todo el AtlÃ¡ntico y PacÃ­fico.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(229, 'Lisa rayada', 'Striped Mullet', 'Mugil cephalus', 'Actinopterygii', 'Mugiliformes', 'Mugilidae', 26, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '30-90', 'Red agallera para lisa y liseta o lebrancha.', 3, '(PacÃ­fico) 1 de noviembre al 31 de diciembre. (Golfo de MÃ©xico) del 1 de diciembre al  28 de febrero.  ', 'Especie marina que vive en las bocas de los rÃ­os y estuarios con fondos arenosos y fangosos. Se alimenta de microalgas, pequeÃ±os organismos bentÃ³nicos, zooplancton y detritus.', ' Su distribuciÃ³n es cosmopolita en todos los mares de temperaturas tropicales.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(230, 'Lisa hospe', '', 'Mugil hospes', 'Peces Ã³seos', 'Mugiliformes', 'Mugilidae', 26, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(231, 'Chivo', '', 'Pseudupeneus grandisquamis', 'Peces Ã³seos', 'Perciformes', 'Mullidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(232, 'Chivo', '', 'Upeneus parvus', 'Peces Ã³seos', 'Perciformes', 'Mullidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(233, 'Chucho pintado', 'Spotted Eagle', 'Aetobatus narinari', 'Chondrichthyes', 'Rajiformes', 'Myliobatidae', 39, 'Nacional', '', '', '', '100-150', 'Chinchorro playero, red de enmalle para tiburones y rayas en embarcaciones menores, red agallera para escama pelÃ¡gica.', 3, ' (PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos costeros. Vive asociado a manglares, praderas de pastos marinos, praderas de algas, arrecifes de coral y fondos arenosos y fangosos. Se alimenta de crustÃ¡ceos y moluscos.', 'Se distribuye en todo el AtlÃ¡ntico y PacÃ­fico.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(234, 'Manta voladora ', 'Giant manta', 'Manta birostris', 'Rayas y similares ', 'Rajiformes', 'Myliobatidae', 39, '', '', '', '', '', '', 1, 'Todo el aÃ±o', 'Especie marina de aguas poco profundas. Vive cerca de la costa y ligada a arrecifes. Se alimenta de plancton y peces pequeÃ±os.', 'Se distribuye en todos los mares tropicales. ', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(235, 'Manta del Golfo', '', 'Mobula hypostoma', 'Rayas y similares ', 'Rajiformes', 'Myliobatidae', 39, '', '', '', '', '', '', 1, 'Todo el aÃ±o', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(236, 'Manta arpÃ³n', '', 'Mobula japanica', 'Rayas y similares ', 'Rajiformes', 'Myliobatidae', 39, '', '', '', '', '', '', 1, 'Todo el aÃ±o', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(237, 'Manta chica ', '', 'Mobula munkiana', 'Rayas y similares ', 'Rajiformes', 'Myliobatidae', 39, '', '', '', '', '', '', 1, 'Todo el aÃ±o', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(238, 'Manta cornuda ', '', 'Mobula tarapacana', 'Rayas y similares ', 'Rajiformes', 'Myliobatidae', 39, '', '', '', '', '', '', 1, 'Todo el aÃ±o', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(239, 'Manta cubana ', '', 'Mobula thurstoni', 'Rayas y similares ', 'Rajiformes', 'Myliobatidae', 39, '', '', '', '', '', '', 1, 'Todo el aÃ±o', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(240, '', '', 'Mobula lucasana', '', '', '', 0, '', '', '', '', '', '', 1, 'Todo el aÃ±o', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(241, 'Gavilan ', '', 'Myliobatis californica ', 'Rayas y similares ', 'Rajiformes', 'Myliobatidae', 39, '', '', '', '', '', '', 3, ' (PacÃ­fico) del 1 de mayo al 31 de julio.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(242, 'Pejechucho', '', 'Myliobatis goodei', 'Rayas y similares ', 'Rajiformes', 'Myliobatidae', 39, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(243, 'Raya Ã¡guila', '', 'Myliobatis longirostris ', 'Rayas y similares ', 'Rajiformes', 'Myliobatidae', 39, '', '', '', '', '', '', 3, ' (PacÃ­fico) del 1 de mayo al 31 de julio.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(244, 'Manta cubanita', '', 'Rhinoptera bonasus', 'Rayas y similares ', 'Rajiformes', 'Myliobatidae', 39, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(245, 'Manta comÃºn', '', 'Rhinoptera brasiliensis', 'Rayas y similares ', 'Rajiformes', 'Myliobatidae', 39, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(246, 'Tecolote', 'Golden Cownose Ray', 'Rhinoptera steindachneri', 'Chondrichthyes', 'Rajiformes', 'Myliobatidae', 39, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '38-90', 'Chinchorro playero, red de enmalle para tiburones y rayas en embarcaciones menores, red agallera para escama pelÃ¡gica.', 3, ' (PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos costeros y poco profundos. Vive en fondos arenosos y cerca de los arrecifes rocosos y coralinos. Se alimenta de moluscos y crustÃ¡ceos.', 'Se distribuye en el PacÃ­fico Oriental, desde Baja California a PerÃº. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(247, 'Raya elÃ©ctrica', '', 'Narcine brasiliensis', 'Rayas y similares ', 'Torpediniformes', 'Narcinidae', 39, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(248, 'Guitarra electrica ', '', 'Narcine entemedor', 'Rayas y similares ', 'Torpediniformes', 'Narcinidae', 39, '', '', '', '', '', '', 3, ' (PacÃ­fico) del 1 de mayo al 31 de julio.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(249, 'Papagallo', 'Roosterfish', 'Nematistius pectoralis', 'Peces Ã³seos', 'Perciformes', 'Nematistiidae', 33, 'Nacional', '', '', '', '60-160', 'Pesca con caÃ±a. ', 0, 'Todo el aÃ±o ', 'Especie marina de hÃ¡bitos costeros. Vive en zonas arenosas y cerca de las playas. Se alimenta de peces. ', 'Se distribuye en el PacÃ­fico Oriental, desde el sur de California hasta PerÃº.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(250, 'Austromerluza negra', 'Patagonian Toothfish', 'Dissostichus eleginoides', 'Actinopterygii', 'Perciformes', 'Nototheniidae', 35, 'Importado ', '', '', '', '70-200', 'Redes de arrastre de fondo.', 0, '', 'Especie marina que vive en profundidades que van de los 70 a 1,500 metros. Se alimenta de peces y cefalÃ³podos.  ', 'Se distribuye en el mar AntÃ¡rtico.', 0, 'Congelado, filetes.', 'Estados Unidos.', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(251, 'LairÃ³n', '', 'Ophichthus rex', 'Peces Ã³seos', 'Anguilliformes', 'Ophichthidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(252, 'Lengua ', '', 'Brotula barbata', 'Peces Ã³seos', 'Ophidiiformes', 'Ophidiidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(253, 'Lengua', '', 'Brotula clarki', 'Peces Ã³seos', 'Ophidiiformes', 'Ophidiidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00');
INSERT INTO `peces` (`especie_id`, `nombre_comun`, `nombre_ingles`, `nombre_cientifico`, `clase`, `orden`, `familia`, `grupo_id`, `nacional_importado`, `tipo_imagen`, `imagen`, `triptico`, `talla_captura`, `arte_pesca`, `tipo_veda_id`, `veda`, `generalidades`, `descripcion_distribucion`, `cultivado_capturado`, `comercio`, `pais_importacion`, `html`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(254, 'Torito', '', 'Acanthostracion quadricornis', 'Peces Ã³seos', 'Tetraodontiformes', 'Ostraciidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(255, 'Basa/ oriental ', 'Striped Catfish', 'Pangasius hypophthalmus', 'Peces Ã³seos', 'Siluriformes', 'Pangasiidae', 35, 'Importado ', '', '', '', '', '', 0, '', 'Especie de agua dulce que vive en rÃ­os. Se alimenta de algas, zooplancton e insectos. ', 'Se distribuye en Viet Nam y Tailandia.', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(256, 'Lenguado alÃ³n ', '', 'Citharichthys xanthostigma', 'Peces Ã³seos', 'Pleuronectiformes', 'Paralichthydae', 25, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(257, 'Lengado bocÃ³n', 'Bigmouth Sole', 'Hippoglossina stomata', 'Actinopterygii', 'Pleuronectiformes', 'Paralichthydae', 25, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '35-40', 'Redes de arrastre.', 0, '', 'Especie marina de hÃ¡bitos bentÃ³nicos y costeros. Vive enterrada en la arena. Se alimenta de pequeÃ±os crustÃ¡ceos que viven en la arena.', 'Se distribuye en el PacÃ­fico Oriental, desde California hasta el Golfo de California. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(258, 'Lenguado cuatro ojos', '', 'Hippoglossina tetropthalmus', 'Peces Ã³seos', 'Pleuronectiformes', 'Paralichthydae', 25, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(259, 'Lenguado de CortÃ©s', '', 'Paralichthys aestuarius', 'Peces Ã³seos', 'Pleuronectiformes', 'Paralichthydae', 25, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(260, 'Lenguado californiano', '', 'Paralichthys californicus', 'Peces Ã³seos', 'Pleuronectiformes', 'Paralichthydae', 25, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(261, 'Lenguado huarache', '', 'Paralichthys woolmani', 'Peces Ã³seos', 'Pleuronectiformes', 'Paralichthydae', 25, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(262, 'Lenguado arenoso ', '', 'Syacium gunteri', 'Peces Ã³seos', 'Pleuronectiformes', 'Paralichthydae', 25, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(263, 'Lenguado cola de abanico', 'Fantail Sole', 'Xystreurys liolepis', 'Actinopterygii', 'Pleuronectiformes', 'Paralichthydae', 25, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '20-63', 'Redes de arrastre.', 0, '', 'Especie marina costera. Vive en fondos arenosos y fangosos. Se alimente de crustÃ¡ceos.', 'Se distribuye en el PacÃ­fico Oriental, desde California hasta el Golfo de California.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(264, 'Lenguado panza blanca', '', 'Paralichthys albigutta', 'Peces Ã³seos', 'Pleuronectiformes', 'Paralichthydae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(265, 'Merluza', '', 'Urophycis spp.', 'Peces Ã³seos', 'Gadiformes', 'Phycidae', 35, '', '', '', '', '', '', 0, '', '', '', 0, 'Congelado. ', 'Canada, Peru, EspaÃ±a.', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(266, 'Lenguado tres ojos', 'Threespot Sand Flounder', 'Ancylopsetta dendritica', 'Peces Ã³seos', 'Pleuronectiformes', 'Paralichthydae', 25, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(267, 'FletÃ¡n del PacÃ­fico', 'FletÃ¡n ', 'Hippoglossus stenolepis', 'Actinopterygii', 'Pleuronectiformes', 'Pleuronectidae', 35, 'Importado ', '', '', '', '140-250', 'Pesca de arrastre y pesca con palangre demersal. ', 0, '', 'Especie de agua salada. Vive en aguas profundas con fondos arenosos y fangosos. Se alimenta de peces moluscos y crustÃ¡ceos. ', 'Se distribuye en el PacÃ­fico Norte, desde JapÃ³n, Mar de Bering, Alaska y California. ', 0, 'Fresco. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(268, 'FletÃ¡n negro', 'FletÃ¡n Negro', 'Reinhardtius hippoglossoides', 'Actinopterygii', 'Pleuronectiformes', 'Pleuronectidae', 35, 'Importado ', '', '', '', '50-80', 'Pesca de arrastre y pesca con palangre demersal. ', 0, '', 'Especie de agua salada que vive a profundidades de 500 a 1000 metros en fondos blandos y arenosos. Se alimenta de peces. ', 'Se distribuye en ambos ocÃ©anos, desde Inglaterra, Noruega, Islandia y Groenlandia en el AtlÃ¡ntico oriental. En la parte del PacÃ­fico se distribuye desde JapÃ³n hasta las costas del California. ', 0, 'Fresco. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(269, 'Lenguado diamante', '', 'Hypsopsetta guttulata', 'Peces Ã³seos', 'Pleuronectiformes', 'Pleuronectidae', 25, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(270, 'Lengado resbaloso', '', 'Microstomus pacificus', 'Peces Ã³seos', 'Pleuronectiformes', 'Pleuronectidae', 25, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(271, 'Barbudo de seis barbas', '', 'Polydactylus approximans', 'Peces Ã³seos', 'Perciformes', 'Polynemidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(272, 'RatÃ³n ', '', 'Polydactylus octonemus', 'Peces Ã³seos', 'Perciformes', 'Polynemidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(273, 'Pescara', '', 'Stereolepis gigas', 'Peces Ã³seos', 'Perciformes', 'Polyprionidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(274, 'Gallineta cafÃ©', '', 'Pomacanthus arcuatus', 'Peces Ã³seos', 'Perciformes', 'Pomacanthidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(275, 'Gallineta negra', '', 'Pomacanthus paru ', 'Peces Ã³seos', 'Perciformes', 'Pomacanthidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(276, 'OjÃ³n', '', 'Priacanthus arenatus', 'Peces Ã³seos', 'Perciformes', 'Priacanthidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(277, 'Cobia', 'Cobia', 'Rachycentrum canadum', 'Peces Ã³seos', 'Perciformes', 'Rachycentridae', 35, '', '', '', '', '', '', 0, '', 'Especie marina pelÃ¡gica. Se alimenta de peces, calamaras, camarones y cangrejos. ', 'Se distribuye casi en todos los mares acepto el PacÃ­fico Central y Oriental.', 0, 'Congelado. ', 'Estados Unidos, Canada.', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(278, 'Cobia', '', 'Rachycentrum canadum', 'Peces Ã³seos', 'Perciformes', 'Rachycentridae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(279, 'Raya de california ', '', 'Raja inornata', 'Rayas y similares ', 'Rajiformes', 'Rajidae', 39, '', '', '', '', '', '', 3, ' (PacÃ­fico) del 1 de mayo al 31 de julio.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(280, 'Raya', '', 'Raja texana', 'Rayas y similares ', 'Rajiformes', 'Rajidae', 39, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(281, 'Raya chillona ', '', 'Raja velezi', 'Rayas y similares ', 'Rajiformes', 'Rajidae', 39, '', '', '', '', '', '', 3, ' (PacÃ­fico) del 1 de mayo al 31 de julio.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(282, 'Payaso pinto', '', 'Rhinobatos glaucostigma', 'Rayas y similares ', 'Rajiformes', 'Rhinobatidae', 39, '', '', '', '', '', '', 3, ' (PacÃ­fico) del 1 de mayo al 31 de julio.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(283, 'Guitarra viola', '', 'Rhinobatos productus', 'Rayas y similares ', 'Rajiformes', 'Rhinobatidae', 39, '', '', '', '', '', '', 3, ' (PacÃ­fico) del 1 de mayo al 31 de julio.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(284, 'Pez diablo', '', 'Rhinobatus lentiginosus', 'Rayas y similares ', 'Rajiformes', 'Rhinobatidae', 39, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(285, 'Guitarra rayada ', '', 'Zapterix exasperata', 'Rayas y similares ', 'Rajiformes', 'Rhinobatidae', 39, '', '', '', '', '', '', 3, ' (PacÃ­fico) del 1 de mayo al 31 de julio.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(286, 'SalmÃ³n del Danubio ', 'Huchen ', 'Hucho hucho', 'Peces Ã³seos', 'Salmoniformes', 'Salmonidae', 35, 'Importado ', '', '', '', '', '', 0, '', 'Especie de agua dulce. Vive en los causes de los rÃ­os, en especial el Danubio. Se alimenta de peces, amfibios y pequeÃ±os reptiles. ', 'Se distribuye en Europa, principalmente en el RÃ­o Danubio ', 0, 'Fresco, congelado y ahumado. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(287, 'SalmÃ³n rosado', 'Pink Salmo', 'Oncorhynchus gorbuscha ', 'Actinopterygii', 'Salmoniformes', 'Salmonidae', 35, 'Importado ', '', '', '', '40-75', 'Red de enmalle y red de arrastre.', 0, '', 'Especie de agua dulce y marina. Vive en zonas costeras y en los rÃ­os en Ã©pocas de desove. Se alimenta de calamares, peces y plancton. ', 'Se distribuye en el PacÃ­fico norte, desde el norte de California, Alaska, CanadÃ¡ y Norte de JapÃ³n. ', 0, 'Fresco, ahumado.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(288, 'SalmÃ³n chum', 'Chum Salmo', 'Oncorhynchus keta ', 'Peces Ã³seos', 'Salmoniformes', 'Salmonidae', 35, '', '', '', '', '', '', 0, '', 'Especie de agua dulce y marina. Vive cerca de la costa y hace migraciones a los rÃ­os en epocas de desove. ', 'Se distribuye en el PacÃ­fico norte, desde el norte de California, Alaska, Canada y Norte de JapÃ³n. ', 0, 'Fresco, ahumado.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(289, 'SalmÃ³n coho', 'Coho Salmo', 'Oncorhynchus kisutch', 'Actinopterygii', 'Salmoniformes', 'Salmonidae', 35, 'Importado ', '', '', '', '50-90', 'Red de enmalle y red de arrastre.', 0, '', 'Especie de agua dulce y marina. Vive cerca de la costa y hace migraciones a los rÃ­os en Ã©pocas de desove. ', 'Se distribuye en el PacÃ­fico norte,  norte de Baja California, Alaska, CanadÃ¡ y Norte de JapÃ³n. ', 0, 'Fresco, ahumado.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(290, 'SalmÃ³n japones', 'Masu Salmon', 'Oncorhynchus masou', 'Peces Ã³seos', 'Salmoniformes', 'Salmonidae', 35, '', '', '', '', '', '', 0, '', 'Especie de agua dulce y marina. Vive cerca de la costa y hace migraciones a los rÃ­os en epocas de desove. ', 'Se distribuye en las costas de JapÃ³. ', 0, 'Fresco, ahumado.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(291, 'SalmÃ³n rojo', 'Sokeye Salmo', 'Oncorhynchus nerka ', 'Actinopterygii', 'Salmoniformes', 'Salmonidae', 35, 'Importado ', '', '', '', '60-85', 'Red de enmalle y red de arrastre.', 0, '', 'Especie de agua dulce y marina. Vive en zonas costeras y en los rÃ­os en Ã©pocas de desove. Se alimenta de calamares, peces y plancton. ', 'Se distribuye en el PacÃ­fico norte, desde el norte de California, Alaska, CanadÃ¡ y Norte de JapÃ³n. ', 0, 'Fresco, ahumado.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(292, 'SalmÃ³n real', 'Chinook Salmo', 'Oncorhynchus tschawytscha', 'Actinopterygii', 'Salmoniformes', 'Salmonidae', 35, 'Importado ', '', '', '', '40-70', 'Red de enmalle y red de arrastre.', 0, '', 'Especie de agua dulce y marina. Vive cerca de la costa y hace migraciones a los rÃ­os en Ã©pocas de desove. ', 'Se distribuye en el PacÃ­fico norte, desde el norte de California, Alaska, CanadÃ¡ y Norte de JapÃ³n. ', 0, 'Fresco, ahumado.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(293, 'SalmÃ³n del AtlÃ¡ntico', 'Atlantic Salmon ', 'Salmo salar', 'Actinopterygii', 'Salmoniformes', 'Salmonidae', 35, 'Importado ', '', '', '', '40-150', 'Red de enmalle y red de arrastre.', 0, '', 'Especie de agua dulce y marina. Vive cerca de la costa y hace migraciones a los rÃ­os en Ã©pocas de desove. ', 'Se distribuye en el AtlÃ¡ntico Norte, en las costas de Europa, CanadÃ¡ y AmÃ©rica del norte. ', 0, 'Fresco, ahumado.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(294, 'Trucha', 'Brown trout', 'Salmo trutta', 'Peces Ã³seos', 'Salmoniformes', 'Salmonidae', 35, '', '', '', '', '', '', 0, '', '', '', 0, 'Congelado. ', 'Estados Unidos.', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(295, '', '', '', 'Peces Ã³seos', 'Salmoniformes', 'Salmonidae', 35, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(296, 'Berrugata real ', '', 'Menticirrhus nasus', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 8, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(297, 'Berrugata gurrubato', 'Panama Kingcroaker', 'Menticirrhus panamensis', 'Actinopterygii', 'Perciformes', 'Sciaenidae', 8, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '30-75', 'Redes de arrastre, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina. Vive en la zona costera cerca de manglares y estuarios. Se alimenta de pequeÃ±os crustÃ¡ceos, gusanos poliquetos y moluscos.', 'Se distribuye en el PacÃ­fico Oriental, desde Baja California hasta Chile. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(298, 'Berrugata californiana', 'California Corbina', 'Menticirrhus undulatus', 'Actinopterygii', 'Perciformes', 'Sciaenidae', 8, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '32-71', 'Redes de arrastre, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina. Vive en la zona costera preferentemente con fondos arenosos. Se alimenta de cangrejos, otros pequeÃ±os crustÃ¡ceos y gusanos poliquetos.', 'Se distribuye en el PacÃ­fico Oriental, desde California hasta PerÃº.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(299, 'Berrugata aleta amarilla', 'Yellowfin Croaker', 'Umbrina roncador', 'Actinopterygii', 'Perciformes', 'Sciaenidae', 8, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '35-65', 'Chinchorro playero, red agallera, red de cerco. ', 0, '', 'Especie marina. Vive en zonas de baja profundidad principalmente fondos arenosos. Se alimenta de peces, crustÃ¡ceos, poliquetos y moluscos. ', 'Se distribuye en el PacÃ­fico Oriental, desde el Sur de California hasta el Golfo de California.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(300, 'Berrugata roncadora', '', 'Umbrina xanti', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 7, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(301, 'Corvina blanca', 'White Seabass', 'Atractoscion nobilis', 'Actinopterygii', 'Perciformes', 'Sciaenidae', 16, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '80-160', 'LÃ­nea de mano para peces pelÃ¡gicos y demersales. ', 0, '', 'Especie marina que vive asociada a fondos rocosos y a bosques de macroalgas. Se alimenta de peces y cefalÃ³podos. ', 'Se distribuye en el PacÃ­fico Oriental, desde Alaska hasta el Golfo de California.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(302, 'Corvineta armada', '', 'Bairdiella armata', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 16, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(303, 'Corvineta ronco ', '', 'Bairdiella icistia', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 16, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(304, 'Corvina chiapaneca', '', 'Cynoscion albus', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 16, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(305, 'Corvina pinta', 'Spotted Seatrout', 'Cynoscion nebulosus', 'Actinopterygii', 'Perciformes', 'Sciaenidae', 16, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '35-100', 'Chinchorro playero, red agallera para escama pelÃ¡gica.', 0, '', 'Especie marina que vive en estuarios y bocas de rÃ­os, en aguas poco profundas y costeras con fondos de arena y praderas de pastos marinos. Se alimenta de crustÃ¡ceos y peces. ', 'Se distribuye en el AtlÃ¡ntico occidental, desde Nueva York hasta el Golfo de MÃ©xico.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(306, 'Corvina golfina', 'Gulf Corvina', 'Cynoscion othonopterus', 'Actinopterygii', 'Perciformes', 'Sciaenidae', 16, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '65-90', 'LÃ­nea de mano para peces pelÃ¡gicos y demersales. ', 3, '  1 de mayo al 31 de agosto ', 'Especie marina que vive cerca de la costa. Los juveniles y los adultos apunto de desovar se encuentran cerca de los rÃ­os.', 'Especie endÃ©mica del Golfo de California.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(307, 'Corvina azul', '', 'Cynoscion parvipinnis', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 16, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(308, 'Corvina rayada', 'Striped Corvina', 'Cynoscion reticulatus', 'Actinopterygii', 'Perciformes', 'Sciaenidae', 16, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '36-90', 'Red agallera para escama pelÃ¡gica, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina que vive en zonas costeras y particularmente en estuarios con concentraciones altamente salinas. Se alimenta de peces, camarones y otros crustÃ¡ceos. ', 'Se distribuye en el PacÃ­fico Oriental, desde el Golfo de California hasta PerÃº.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(309, 'Corvina boca anaranjada', 'Orangemouth Corvina', 'Cynoscion xanthulus', 'Actinopterygii', 'Perciformes', 'Sciaenidae', 16, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '40-130', 'Red agallera para escama pelÃ¡gica, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina que vive en zonas costeras y lagunas marinas a profundidades de 50 metros preferentemente con fondos fangosos y arenosos. Se alimenta peces y crustÃ¡ceos. ', 'Se distribuye en el PacÃ­fico Oriental, desde Baja California Sur, Golfo de California, hasta Chiapas.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(310, 'Corvina', '', 'Sciaenops ocellatus', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 16, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(311, 'Boquinete chato', 'Silver Drum', 'Larimus argenteus', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 16, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(312, 'PostÃ¡', '', 'Bairdiella chrysoura', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(313, 'Ronco rayado', '', 'Bairdiella ronchus', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(314, 'Trucha blanca ', '', 'Cynoscion arenarius', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(315, 'Trucha blanca ', '', 'Cynoscion nothus', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(316, 'Ronco listado', '', 'Larimus fasciatus', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(317, 'Croca', '', 'Leiostomus xanthurus', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(318, 'Chano sureÃ±o ', '', 'Micropogonias altipinnis', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(319, 'Chano norteÃ±o ', '', 'Micropogonias megalops', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(320, 'Gurrubata', '', 'Micropogonias undulatus', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(321, 'Corvineta bizca', '', 'Ophioscion strabo', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(322, 'Tambor', '', 'Pogonias cromis', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(323, 'Corvina enana', '', 'Cynoscion nannus', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(324, 'RatÃ³n del Golfo', '', 'Menticirrhus americanus', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(325, 'Berrugato fino', '', 'Menticirrhus elongatus ', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(326, 'RatÃ³n', '', 'Menticirrhus littoralis', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(327, 'Berugato', '', 'Menticirrhus saxatilis', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(328, 'Totoaba', 'Totoaba', 'Totoaba macdonaldi ', 'Peces Ã³seos', 'Perciformes', 'Sciaenidae', 0, '', '', '', '', '', '', 1, 'Todo el aÃ±o', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(329, 'Bonito del PacÃ­fico Oriental ', '', 'Sarda chiliensis', 'Peces Ã³seos', 'Perciformes', 'Scombridae', 2, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(330, 'AtÃºn aleta amarilla', 'Yellowfin Tuna', 'Thunnus albacares', 'Actinopterygii', 'Perciformes', 'Scombridae', 2, 'Nacional e importado', 'Cartel ', '', 'TrÃ­ptico  ', '78-239', 'Red de cerco regulada por la Norma Oficial Mexicana PROY- NOM-001-SAG/PESC-2013),  pesca con vara, palangre para atÃºn y lÃ­nea de mano. ', 3, 'Actualmente no estÃ¡ establecida una veda.', 'Especie marina de hÃ¡bitos oceÃ¡nicos. Se alimenta de peces, crustÃ¡ceos y calamares.', 'Se distribute en todo el AtlÃ¡ntico y PacÃ­fico.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(331, 'Patudo', 'Bigeye Tuna', 'Thunnus obesus', 'Actinopterygii', 'Perciformes', 'Scombridae', 2, 'Nacional e importado', '', '', '', '130-200', 'Red de cerco regulada por la Norma Oficial Mexicana PROY- NOM-001-SAG/PESC-2013),  pesca con vara, palangre para atÃºn y lÃ­nea de mano. ', 3, 'Actualmente no estÃ¡ establecida una veda.', 'Especie marina de hÃ¡bitos pelÃ¡gicos y oceÃ¡nicos. Se alimenta de peces y crustÃ¡ceos.', 'Se distribuye casi en todos los mares.', 0, 'Fresco, congelado. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(332, 'AtÃºn aleta azul ', 'Bluefin Tuna', 'Thunnus orientalis ', 'Actinopterygii', 'Perciformes', 'Scombridae', 2, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '97-300', 'Red de cerco regulada por la Norma Oficial Mexicana PROY- NOM-001-SAG/PESC-2013),  pesca con vara, palangre para atÃºn y lÃ­nea de mano. ', 3, 'Actualmente no estÃ¡ establecida una veda.', 'Especie marina pelÃ¡gica y oceÃ¡nica. Se alimenta de peces, crustÃ¡ceos y cefalÃ³podos. ', 'Se distribuye en el PacÃ­fico Oriental y parte de Indo PacÃ­fico, costas de JapÃ³n, Indonesia, CanadÃ¡, Estados Unidos, Baja California y Baja California Sur. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(333, 'AtÃºn aleta azul ', 'Bluefin Tuna', 'Thunnus thynnus ', 'Actinopterygii', 'Perciformes', 'Scombridae', 2, 'Nacional e importado', '', '', '', '150-300', 'Red de cerco regulada por la Norma Oficial Mexicana PROY- NOM-001-SAG/PESC-2013),  pesca con vara, palangre para atÃºn y lÃ­nea de mano. ', 3, 'Actualmente no estÃ¡ establecida una veda.', 'Especie marina pelÃ¡gica y oceÃ¡nica. Se alimenta de peces, crustÃ¡ceos y cefalÃ³podos. ', 'Se distribute en todo el AtlÃ¡ntico y PacÃ­fico.', 0, 'Fresco, congelado. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(334, 'Barrilete negro', 'Black Skipjack', 'Euthynnus lineatus', 'Actinopterygii', 'Perciformes', 'Scombridae', 6, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '60-84', 'Red de cerco regulada por la Norma Oficial Mexicana PROY- NOM-001-SAG/PESC-2013),  pesca con vara, palangre para atÃºn y lÃ­nea de mano. ', 0, '', 'Especie marina de hÃ¡bitos pelÃ¡gicos y oceÃ¡nicos. Se alimenta principalmente de peces.', 'Se distribuye en el PacÃ­fico Oriental, desde California a PerÃº.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(335, 'Barrilete listado', 'Skipjack Tuna', 'Katsuwonus pelamis', 'Actinopterygii', 'Perciformes', 'Scombridae', 6, 'Nacional e importado', 'Cartel ', '', 'TrÃ­ptico  ', '80-110', 'Red de cerco regulada por la Norma Oficial Mexicana PROY- NOM-001-SAG/PESC-2013),  pesca con vara, palangre para atÃºn y lÃ­nea de mano. ', 3, 'Actualmente no estÃ¡ establecida una veda.', 'Especie marina de hÃ¡bitos pelÃ¡gicos y oceÃ¡nicos. Se alimenta de peces y crustÃ¡ceos.', 'Se distribuye casi en todos los mares.', 0, 'Fresco, congelado. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(336, 'Bonito ', '', 'Euthynnus alleteratus', 'Peces Ã³seos', 'Perciformes', 'Scombridae', 10, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(337, 'Macarela azul ', 'Blue Mackerel ', 'Scomber australasicus', 'Actinopterygii', 'Perciformes', 'Scombridae', 35, 'Importado ', '', '', '', '30-50', 'CurricÃ¡n, Redes de enmalle, trampas, redes de playa y redes de arrastre pelÃ¡gico. ', 0, '', 'Especie marina pelÃ¡gica y oceÃ¡nica. Se alimenta de peces, crustÃ¡ceos y cefalÃ³podos. ', 'Se distribuye en el Indo PacÃ­fico. ', 0, 'Congelado. ', 'Estados Unidos, Canada.', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(338, 'Estornido', 'Chub Mackerel', 'Scomber japonicus', 'Actinopterygii', 'Perciformes', 'Scombridae', 6, 'Nacional e importado', '', '', '', '30-50', 'CurricÃ¡n, Redes de enmalle, trampas, redes de playa y redes de arrastre pelÃ¡gico. ', 0, '', 'Especie marina pelÃ¡gica y oceÃ¡nica. Se alimenta de peces, crustÃ¡ceos y cefalÃ³podos. ', 'Se distribuye casi en todos los mares.', 0, 'Congelado. ', 'Estados Unidos, Canada.', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(339, 'Caballa del AtlÃ¡ntico', 'Atlantic Mackerel', 'Scomber scombrus', 'Actinopterygii', 'Perciformes', 'Scombridae', 35, 'Importado ', '', '', '', '30-50', 'CurricÃ¡n, Redes de enmalle, trampas, redes de playa y redes de arrastre pelÃ¡gico. ', 0, '', 'Especie marina pelÃ¡gica y oceÃ¡nica. Se alimenta de peces, crustÃ¡ceos y cefalÃ³podos. ', 'Se distribuye en el AtlÃ¡ntico Norte. ', 0, 'Congelado. ', 'Estados Unidos, Canada.', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(340, 'Macarela ', '', 'Scomber japonicus', 'Peces Ã³seos', 'Perciformes', 'Scombridae', 27, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(341, 'Melvera', 'Bullet Mackerel', 'Auxis rochei rochei', 'Actinopterygii', 'Perciformes', 'Scombridae', 10, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '15-50', 'Red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina pelÃ¡gica y oceÃ¡nica. Se alimenta de peces, crustÃ¡ceos y cefalÃ³podos. ', 'Se distribuye casi en todos los mares.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(342, 'Melva ', '', 'Auxis thazard rochei', 'Peces Ã³seos', 'Perciformes', 'Scombridae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(343, 'Bonito del AtlÃ¡ntico', '', 'Sarda sarda', 'Peces Ã³seos', 'Perciformes', 'Scombridae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(344, 'Peto/ Carito', 'King Mackerel', 'Scomberomorus cavalla', 'Actinopterygii', 'Perciformes', 'Scombridae', 37, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '50-150', 'Palangre para atÃºn.', 0, '', 'Especie marina asociada a zonas arrecifales. Se alimenta de peces, crustÃ¡ceos y moluscos.', 'Se distribuye en el AtlÃ¡ntico occidental, desde Massachusetts, hasta Brasil.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(345, 'Sierra del Golfo de CortÃ©s', 'Gulf Sierra', 'Scomberomorus concolor', 'Actinopterygii', 'Perciformes', 'Scombridae', 45, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '27-77', 'Red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina de hÃ¡bitos pelÃ¡gicos. Vive en la columna de agua. Se alimenta de peces y crustÃ¡ceos de tamaÃ±o pequeÃ±o.', 'Tiene una distribuciÃ³n muy restringida en el PacÃ­fico Oriental, costas de California y dentro del Golfo de California. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(346, 'Sierra comÃºn', 'Spanish Mackerel', 'Scomberomorus maculatus', 'Actinopterygii', 'Perciformes', 'Scombridae', 45, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '25-90', 'Red agallera para escama pelÃ¡gica.', 0, '', 'Especie marina de aguas poco profundas. Se alimenta de peces pequeÃ±os y en pocas cantidades de pequeÃ±os crustÃ¡ceos y cefalÃ³podos.', 'Se distribuye en el AtlÃ¡ntico occidental, desde CanadÃ¡ hasta el Caribe.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(347, 'Sierra del PacÃ­fico ', 'Pacific Sierra', 'Scomberomorus sierra', 'Actinopterygii', 'Perciformes', 'Scombridae', 45, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '26-100', 'Red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina de hÃ¡bitos costeros y pelÃ¡gicos. Vive en la columna de agua. Se alimenta de peces.', 'Se distribuye en el PacÃ­fico Oriental, desde California a PerÃº.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(348, 'Peto', '', 'Acanthocybium solandri', 'Peces Ã³seos', 'Perciformes', 'Scombridae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(349, 'Barrilete de diente', '', 'Sarda orientalis ', 'Peces Ã³seos', 'Perciformes', 'Scombridae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(350, 'Sierra', '', 'Scomberomorus regalis', 'Peces Ã³seos', 'Perciformes', 'Scombridae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(351, 'Albacora', 'Albacore', 'Thunnus alalunga', 'Actinopterygii', 'Perciformes', 'Scombridae', 2, 'Nacional e importado', '', '', '', '55-120', 'Red de cerco regulada por la Norma Oficial Mexicana PROY- NOM-001-SAG/PESC-2013),  pesca con vara, palangre para atÃºn y lÃ­nea de mano. ', 0, '', 'Especie marina pelÃ¡gica y oceÃ¡nica. Se alimenta de peces, crustÃ¡ceos y cefalÃ³podos. ', 'Se distribuye casi en todos los mares.', 0, 'Congelado. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(352, 'AtÃºn aleta negra', '', 'Thunnus atlanticus', 'Peces Ã³seos', 'Perciformes', 'Scombridae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(353, 'LapÃ³n californiano', '', 'Scorpaena guttata', 'Peces Ã³seos', 'Scorpaeniformes ', 'Scorpaenidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(354, 'LapÃ³n', '', 'Scorpaena mystes', 'Peces Ã³seos', 'Scorpaeniformes ', 'Scorpaenidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(355, 'LapÃ³n ', '', 'Scorpaena plumieri', 'Peces Ã³seos', 'Scorpaeniformes ', 'Scorpaenidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(356, 'Rascacio', '', 'Neomerinthe hemingwayi', 'Peces Ã³seos', 'Perciformes', 'Scorpaenidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(357, 'LopÃ³n lomo manchado', '', 'Pontinus vaughani', 'Peces Ã³seos', 'Scorpaeniformes ', 'Scorpaenidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(358, 'Rocote sapo', '', 'Scorpaena russula', 'Peces Ã³seos', 'Scorpaeniformes ', 'Scorpaenidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(359, 'Loponcito arcoiris', '', 'Scorpaenodes xyris ', 'Peces Ã³seos', 'Scorpaeniformes ', 'Scorpaenidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(360, 'Rocote sargacero', '', 'Sebastes atrovirens', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(361, 'Rocote bocaccio', '', 'Sebastes paucispinis', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(362, 'Rocote cobrizo', '', 'Sebastes caurinus', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(363, 'Rocote verde', '', 'Sebastes chlorostictus', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(364, 'Rocote mulato', '', 'Sebastes chrysomelas', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(365, 'Rocote estrellado', '', 'Sebastes constellatus', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(366, 'Rocote reyna', '', 'Sebastes elongatus', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(367, 'Rocote espada', '', 'Sebastes ensifer', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(368, 'Rocote viuda', '', 'Sebastes entomelas', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(369, 'Rocote pimiento', '', 'Sebastes goodei', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(370, 'Rocote a cuadros ', '', 'Sebastes hopkinsi', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(371, 'Rocote vaquilla', '', 'Sebastes levis ', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(372, 'Rocote mexicano', '', 'Sebastes macdonaldi', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(373, 'Rocote negro', '', 'Sebastes melanops', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(374, 'Rocote semÃ¡foro', '', 'Sebastes melanosema', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(375, 'Rocote agalla negra', '', 'Sebastes melanostomus', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(376, 'Rocote bermejo', '', 'Sebastes miniatus', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(377, 'Rocote azul', '', 'Sebastes mystinus', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(378, 'Rocote olivo', '', 'Sebastes rastrelliger', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(379, 'Rocote rosado', '', 'Sebastes rosaceus', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(380, 'Rocote motas verdes', '', 'Sebastes rosenblatti', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(381, 'Rocote bandera', '', 'Sebastes rubrivinctus', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(382, 'Rocote rojo', '', 'Sebastes rufus', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(383, 'Rocote inspector', '', 'Sebastes semicinctus', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(384, 'Rocote falsa cabrilla', '', 'Sebastes serranoides ', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(385, 'Rocote presidiario', '', 'Sebastes serriceps ', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(386, 'Rocote rosa ', '', 'Sebastes simulator', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(387, 'Rocote panal', '', 'Sebastes umbrosus', 'Peces Ã³seos', 'Scorpaeniformes ', 'Sebastidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(388, 'Cabrilla cueruda', '', 'Dermatolepis dermatolepis', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 5, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(389, 'Baya', '', 'Mycteroperca jordani', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 5, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(390, 'Cabrilla roja', '', 'Cephalopholis fulva', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 12, '', '', '', '', '', '', 3, ' (Golfo de MÃ©xico y Caribe) del 15 febrero al 15 de marzo.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(391, 'Cabrilla payaso', 'Rock Hind', 'Epinephelus adscensionis', 'Actinopterygii', 'Perciformes', 'Serranidae', 12, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '25-60', 'LÃ­nea de mano para peces pelÃ¡gicos y demersales, palangre para mero.', 3, ' (Golfo de MÃ©xico y Caribe) del 15 febrero al 15 de marzo.', 'Especie marina que vive a una profundad  de 1 a 120 metros, se encuentra en zonas rocosas y arrecifales. Se alimenta de crustÃ¡ceos y peces. ', 'Se distribuye en el AtlÃ¡ntico occidental, desde Massachusetts hasta Brasil. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(392, 'Cabilla pinta ', '', 'Epinephelus analogus', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 12, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(393, 'Cabrilla piedrera', '', 'Epinephelus labriformis', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 12, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(394, 'Cabrilla', '', 'Mycteroperca phenax', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 12, '', '', '', '', '', '', 3, ' (Golfo de MÃ©xico y Caribe) del 15 febrero al 15 de marzo.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(395, 'Cabrilla sardinera', '', 'Mycteroperca rosacea', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 12, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(396, 'Cabrilla plomuda', 'Broomtail Grouper', 'Mycteroperca xenarcha', 'Actinopterygii', 'Perciformes', 'Serranidae', 12, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '42-150', 'LÃ­nea de mano para peces pelÃ¡gicos y demersales. ', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en zonas de manglar, estuarios y fondos rocosos. Se alimenta de peces y crustÃ¡ceos.', 'Se distribuye en el PacÃ­fico Oriental, desde California a PerÃº. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(397, 'Cabrilla chiruda', 'Sawtail Grouper', 'Mycteroperca prionura', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 20, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(398, 'Cabrilla extranjera', 'Goldspotted Sand Bass', 'Paralabrax auroguttatus', 'Actinopterygii', 'Perciformes', 'Serranidae', 12, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '50-70', 'Red agallera para escama pelÃ¡gica, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en arrecifes rocosos. Se alimenta de peces y crustÃ¡ceos.', 'Se distribuye en el PacÃ­fico Oriental, desde Baja California a Nayarit.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(399, 'Cabrilla sargacera', '', 'Paralabrax clarhratus', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 12, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(400, 'Cabrilla cachete amarillo', 'Parrot Sand Bass', 'Paralabrax loro', 'Actinopterygii', 'Perciformes', 'Serranidae', 12, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '50-70', 'Red agallera para escama pelÃ¡gica, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en arrecifes rocosos. Se alimenta de peces y crustÃ¡ceos.', 'Se distribuye en el PacÃ­fico Oriental, desde el Golfo de California a PerÃº. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(401, 'Cabrilla de roca ', 'Spotted Sand Bass', 'Paralabrax maculatofasciatus', 'Actinopterygii', 'Perciformes', 'Serranidae', 12, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '15-60', 'Red agallera para escama pelÃ¡gica, red agallera para escama de fondo, red agallera para esteros y lÃ­nea de costa.', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en arrecifes rocosos, fondos arenosos, paraderas de pastos marinos. Se alimenta de peces y crustÃ¡ceos.', 'Se distribuye en el PacÃ­fico Oriental, desde California a Oaxaca.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(402, 'Verdillo ', 'Barred Sand Bass', 'Paralabrax nebulifer', 'Actinopterygii', 'Perciformes', 'Serranidae', 12, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '20-60', 'Trampa Selectiva. ', 0, '', 'Especie marina de hÃ¡bitos costeros. Vive en arrecifes rocosos y bosques de macroalgas. Se alimenta de peces y crustÃ¡ceos. ', 'Se distribuye en el PacÃ­fico Oriental, desde California a Baja California Sur.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(403, 'Lenteja', '', 'Epinephelus drummondhayi', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 29, '', '', '', '', '', '', 3, ' (Golfo de MÃ©xico y Caribe) del 15 febrero al 15 de marzo.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(404, 'Extraviado', 'Yellowedge Grouper', 'Epinephelus flavolimbatus', 'Actinopterygii', 'Perciformes', 'Serranidae', 29, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '50-115', 'LÃ­nea de mano para peces pelÃ¡gicos y demersales, palangre para mero.', 3, ' (Golfo de MÃ©xico y Caribe) del 15 febrero al 15 de marzo.', 'Especie marina que vive asociada a arrecifes rocosos y bancos de arena. Se alimenta de una gran variedad de invertebrados y peces.', 'Se distribuye en el AtlÃ¡ntico occidental, desde Carolina del Norte en Estados Unidos hasta Brasil.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(405, 'Mero guasa', 'Goliath Grouper', 'Epinephelus itajara', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 29, '', '', '', '', '', '', 3, ' (Golfo de MÃ©xico y Caribe) del 15 febrero al 15 de marzo.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(406, 'Mero/Cherna americana', 'Red Grouper', 'Epinephelus morio', 'Actinopterygii', 'Perciformes', 'Serranidae', 29, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '35-125', 'LÃ­nea de mano para peces pelÃ¡gicos y demersales, palangre para mero.', 3, ' (Golfo de MÃ©xico y Caribe) del 15 febrero al 15 de marzo.', 'Especie marina que vive en zonas arrecifales, en profundidades que van de los 70 a 330 metros. Se alimenta de peces e invertebrados.', 'Se distribuye en el AtlÃ¡ntico occidental, desde Carolina del Norte hasta Brasil.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(407, 'Mero del Caribe', 'Nassau Grouper', 'Epinephelus striatus', 'Actinopterygii', 'Perciformes', 'Serranidae', 29, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '48-122', 'LÃ­nea de mano para peces pelÃ¡gicos y demersales, palangre para mero.', 3, ' (Golfo de MÃ©xico y Caribe) del 15 febrero al 15 de marzo.', 'Especie marina de aguas poco profundas. Vive en cuevas submarinas y en arrecifes. Los juveniles viven en las praderas de pastos marinos. Se alimenta crustÃ¡ceos, pequeÃ±os invertebrados y peces.', 'Se distribuye en el AtlÃ¡ntico occidental, desde Florida al sur de Brasil.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(408, 'Mero negro', 'Warsaw Grouper', 'Hyporthodus nigritus', 'Actinopterygii', 'Perciformes', 'Serranidae', 29, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '50-230', 'LÃ­nea de mano para peces pelÃ¡gicos y demersales, palangre para mero.', 3, ' (Golfo de MÃ©xico y Caribe) del 15 febrero al 15 de marzo.', 'Especie marina, que vive en fondos rocosos. Los juveniles viven cerca de muelles y en arrecifes de poca profundidad. Se alimenta de crustÃ¡ceos y peces.', 'Se distribuye en el AtlÃ¡ntico occidental, desde Massachusetts hasta Brasil. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(409, 'Negrillo', '', 'Mycteroperca bonaci', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 29, '', '', '', '', '', '', 3, ' (Golfo de MÃ©xico y Caribe) del 15 febrero al 15 de marzo.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(410, 'Guacamayo', '', 'Mycteroperca microlepis', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 29, '', '', '', '', '', '', 3, ' (Golfo de MÃ©xico y Caribe) del 15 febrero al 15 de marzo.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(411, 'Guacamayo', '', 'Mycteroperca venenosa', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 29, '', '', '', '', '', '', 3, ' (Golfo de MÃ©xico y Caribe) del 15 febrero al 15 de marzo.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(412, 'Guaseta del PacÃ­fico', '', 'Alphestes immaculatus', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(413, 'Enjambre ', '', 'Cephalopholis panamensis', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00');
INSERT INTO `peces` (`especie_id`, `nombre_comun`, `nombre_ingles`, `nombre_cientifico`, `clase`, `orden`, `familia`, `grupo_id`, `nacional_importado`, `tipo_imagen`, `imagen`, `triptico`, `talla_captura`, `arte_pesca`, `tipo_veda_id`, `veda`, `generalidades`, `descripcion_distribucion`, `cultivado_capturado`, `comercio`, `pais_importacion`, `html`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(414, 'Serrano arenero', '', 'Diplectrum formosum', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(415, 'Serrano cabicucho', '', 'Diplectrum pacificum', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(416, 'Aguavina', '', 'Diplectrum radiale', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(417, 'Baqueta ', '', 'Epinephelus acanthistius', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(418, 'Payaso', '', 'Epinephelus guttatus', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 31, '', '', '', '', '', '', 3, ' (Golfo de MÃ©xico y Caribe) del 15 febrero al 15 de marzo.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(419, 'Baqueta ploma', '', 'Epinephelus niphobles', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(420, 'Cherna pinta', '', 'Hyporthodus niveatus', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 31, '', '', '', '', '', '', 3, ' (Golfo de MÃ©xico y Caribe) del 15 febrero al 15 de marzo.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(421, 'Chema boca amarilla', '', 'Mycteroperca interstitialis', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 31, '', '', '', '', '', '', 3, ' (Golfo de MÃ©xico y Caribe) del 15 febrero al 15 de marzo.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(422, 'SandÃ­a', '', 'Paranthias colonus', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(423, 'Serrano bandera', '', 'Serranus huascarii', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(424, 'Cherna enjambre', '', 'Cephalopholis cruentata ', 'Peces Ã³seos', 'Perciformes', 'Serranidae', 0, '', '', '', '', '', '', 3, ' (Golfo de MÃ©xico y Caribe) del 15 febrero al 15 de marzo.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(425, 'Lenguado', '', 'Solea spp', 'Peces Ã³seos', 'Pleuronectiformes', 'Soleidae', 35, '', '', '', '', '', '', 0, '', '', '', 0, 'Congelado. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(426, 'Sargo  ', '', 'Archosargus probatocephalus', 'Peces Ã³seos', 'Perciformes', 'Sparidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(427, 'Sargo amarillo ', '', 'Archosargus rhomboidalis', 'Peces Ã³seos', 'Perciformes', 'Sparidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(428, 'Pluma ', '', 'Calamus bajonado', 'Peces Ã³seos', 'Perciformes', 'Sparidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(429, 'MojarrÃ³n ', '', 'Calamus brachysomus', 'Peces Ã³seos', 'Perciformes', 'Sparidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(430, 'Xlavita ', '', 'Lagodon rhomboides', 'Peces Ã³seos', 'Perciformes', 'Sparidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(431, 'MojarrÃ³n ', '', 'Calamus arctifrons', 'Peces Ã³seos', 'Perciformes', 'Sparidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(432, 'Cachipluma', '', 'Calamus calamus', 'Peces Ã³seos', 'Perciformes', 'Sparidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(433, 'Pluma ', '', 'Calamus nodosus', 'Peces Ã³seos', 'Perciformes', 'Sparidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(434, 'Mojarra pluma', '', 'Calamus pennatula', 'Peces Ã³seos', 'Perciformes', 'Sparidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(435, 'Pluma jorobada', '', 'Calamus proridens', 'Peces Ã³seos', 'Perciformes', 'Sparidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(436, 'Sargo rojo', '', 'Pagrus pagrus', 'Peces Ã³seos', 'Perciformes', 'Sparidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(437, 'Barracuda ', '', 'Sphyraena ensis', 'Peces Ã³seos', 'Perciformes', 'Sphyraenidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(438, 'Tolete', '', 'Sphyraena guachancho', 'Peces Ã³seos', 'Perciformes', 'Sphyraenidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(439, 'Picuda', '', 'Sphyraena barracuda', 'Peces Ã³seos', 'Perciformes', 'Sphyraenidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(440, 'TiburÃ³n martillo/ Cornuda cabeza de pala', 'Bonnethead Cornuda', 'Sphyrna tiburo', 'Chondrichthyes', 'Carcharhiniformes', 'Sphyrnidae', 13, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '80-150', 'Red de enmalle para tiburones y rayas en embarcaciones menores, palangre para tiburÃ³n oceÃ¡nico y pez espada.', 3, '(Golfo de MÃ©xico y Caribe) del 1 de mayo al 29 de agosto. ', 'Especie marina que vive en zonas costeras con fondos arenosos, fangosos y en zonas arrecifales. Se alimenta de crustÃ¡ceos, moluscos y peces.', 'Se distribuye en el AtlÃ¡ntico occidental, desde Carolina del Norte en Estados Unidos hasta Brasil.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(441, 'TiburÃ³n martillo', 'Scalloped Bonnethead', 'Sphyrna corona', 'Chondrichthyes', 'Carcharhiniformes', 'Sphyrnidae', 46, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '50-90', 'Red de enmalle para tiburones y rayas en embarcaciones menores.', 3, '(PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina. Vive en la plataforma continental posiblemente cerca de la costa. Se alimenta de peces.', 'Se distribuye en el PacÃ­fico Oriental, desde el Golfo de California a PerÃº.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(442, 'Cornuda comÃºn', 'Scalloped hammerhead', 'Sphyrna lewini', 'Chondrichthyes', 'Carcharhiniformes', 'Sphyrnidae', 46, 'Nacional', '', '', '', '150-400', 'Palangre pelÃ¡gico, red de fondo, redes de arrastre. ', 3, '(Golfo de MÃ©xico y Caribe) del 1 de mayo al 29 de agosto.  (PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina. Vive en la plataforma continental posiblemente cerca de la costa. Se alimenta de peces.', 'Se distribuye casi en todos los mares.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(443, 'Cornuda gigante', 'Great hammerhead', 'Sphyrna mokarran', 'Chondrichthyes', 'Carcharhiniformes', 'Sphyrnidae', 46, 'Nacional', '', '', '', '200-300', 'Palangre pelÃ¡gico, red de fondo, redes de arrastre. ', 3, '(Golfo de MÃ©xico y Caribe) del 1 de mayo al 29 de agosto.  (PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina. Vive en la plataforma continental posiblemente cerca de la costa. Se alimenta de peces.', 'Se distribuye casi en todos los mares.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(444, 'Cornuda prieta', 'Smooth Hammerhead', 'Sphyrna zygaena', 'Chondrichthyes', 'Carcharhiniformes', 'Sphyrnidae', 46, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '200-400', 'Red de enmalle para tiburones y rayas en embarcaciones menores.', 3, '(PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos costeros. Se alimenta de peces, tiburones, rayas, crustÃ¡ceos y cefalÃ³podos.', 'Se distribuye casi en todos los mares.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(445, 'CazÃ³n espinoso', '', 'Squalus cubensis', 'Tiburones ', 'Squaliformes', 'Squalidae', 13, '', '', '', '', '', '', 3, '(Golfo de MÃ©xico y Caribe) del 1 de mayo al 29 de agosto. ', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(446, 'Angelote del PacÃ­fico', 'Pacific angel shark', 'Squatina californica', 'Tiburones ', 'Squatiniformes', 'Squatinidae', 46, '', '', '', '', '', '', 3, '(PacÃ­fico) del 1 de mayo al 31 de julio.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(447, 'TiburÃ³n Ã¡ngel', '', 'Squatina dumeril', 'Tiburones ', 'Squatiniformes', 'Squatinidae', 46, '', '', '', '', '', '', 3, '(Golfo de MÃ©xico y Caribe) del 1 de mayo al 29 de agosto. ', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(448, 'Palometa pÃ¡mpano', '', 'Peprilus paru', 'Peces Ã³seos', 'Perciformes', 'Stromateidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(449, 'Chile', '', 'Synodus foetens', 'Peces Ã³seos', 'Aulopiformes', 'Synodontidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(450, 'Chile lagarto', 'calico lizardfish', 'Synodus lacertinus', 'Peces Ã³seos', 'Aulopiformes', 'Synodontidae', 14, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(451, 'Conejo blanco', '', 'Lagocephalus laevigatus', 'Peces Ã³seos', 'Tetraodontiformes', 'Tetraodontidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(452, 'Botete diana', '', 'Sphoeroides annulatus', 'Peces Ã³seos', 'Tetraodontiformes', 'Tetraodontidae', 31, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(453, 'TamborÃ­n narizÃ³n', '', 'Canthigaster rostrata', 'Peces Ã³seos', 'Tetraodontiformes', 'Tetraodontidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(454, 'Botete jaspeado', '', 'Sphoeroides dorsalis', 'Peces Ã³seos', 'Tetraodontiformes', 'Tetraodontidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(455, 'Botete sureÃ±o', '', 'Sphoeroides nephelus', 'Peces Ã³seos', 'Tetraodontiformes', 'Tetraodontidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(456, 'Botete collarete', '', 'Sphoeroides spengleri ', 'Peces Ã³seos', 'Tetraodontiformes', 'Tetraodontidae', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(457, 'Botete panza rayada', 'Stripebelly Puffer', 'Arothron hispidus', 'Peces Ã³seos', 'Tetraodontiformes', 'Tetraodontidae', 11, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(458, 'Botete aletas punteadas ', 'Guineafowl Puffer', 'Arothron meleagris', 'Peces Ã³seos', 'Tetraodontiformes', 'Tetraodontidae', 11, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(459, 'CazÃ³n californiano', 'Gray Smoothhound', 'Mustelus californicus', 'Chondrichthyes', 'Carcharhiniformes', 'Triakidae', 13, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '35-116', 'Chinchorro playero, red de enmalle para tiburones y rayas en embarcaciones menores.', 3, '(PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos oceÃ¡nicos y costeros. Vive en mares de aguas templado â€“cÃ¡lidas y tropicales. Se alimenta principalmente de cangrejos, camarones, gusanos equiÃºridos y algunos peces.', 'Se distribuye en el PacÃ­fico Oriental, desde el norte de California hasta el Golfo de California.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(460, 'CazÃ³n mamÃ³n', '', 'Mustelus canis', 'Tiburones ', 'Carcharhiniformes', 'Triakidae', 13, '', '', '', '', '', '', 3, '(Golfo de MÃ©xico y Caribe) del 1 de mayo al 29 de agosto. ', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(461, 'CazÃ³n aleta deshilachada', 'Brown Smooth-Hound', 'Mustelus henlei', 'Chondrichthyes', 'Carcharhiniformes', 'Triakidae', 13, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '54-100', 'Chinchorro playero, red de enmalle para tiburones y rayas en embarcaciones menores.', 3, '(PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos oceÃ¡nicos y costeros. Vive desde la zona intermareal hasta los 200 metros de profundidad. Se alimenta de crustÃ¡ceos, moluscos y peces.', 'Se distribuye en el PacÃ­fico Oriental, desde California hasta PerÃº.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(462, 'CazÃ³n mamÃ³n', 'Sicklefin Smooth-Hound', 'Mustelus lunulatus', 'Chondrichthyes', 'Carcharhiniformes', 'Triakidae', 13, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '43-170', 'Chinchorro playero, red de enmalle para tiburones y rayas en embarcaciones menores.', 3, '(PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos costeros. Vive en la zona intermareal hasta los 100 metros de profundidad. Se alimenta de crustÃ¡ceos, moluscos y peces.', 'Se distribuye en el PacÃ­fico Oriental, desde California a PanamÃ¡.', 0, 'Se utiliza la carne, aceite de hÃ­gado, piel, el aleteo estÃ¡ prohibido.', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(463, 'Cintilla', 'Atlantic Cutlassfish', 'Trichiurus lepturus', 'Actinopterygii', 'Perciformes', 'Trichiuridae', 15, 'Nacional', 'Cartel ', '', 'TrÃ­ptico  ', '30-234', 'LÃ­nea de mano para peces pelÃ¡gicos y demersales. ', 0, '', 'Especie marina de aguas costeras que vive en fondos fangosos y poco profundos. Se alimenta de pequeÃ±os crustÃ¡ceos, peces pequeÃ±os y calamares. ', 'Se distribuye en todo el AtlÃ¡ntico y PacÃ­fico. ', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(464, 'Rubio volador', '', 'Prionotus evolans', 'Peces Ã³seos', 'Scorpaeniformes ', 'Triglidae', 43, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(465, 'Vaca rasposa', 'Rough Searobin', 'Prionotus ruscarius', 'Peces Ã³seos', 'Scorpaeniformes ', 'Triglidae', 19, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(466, 'Rubio volador', '', 'Prionotus punctatus', 'Peces Ã³seos', 'Scorpaeniformes ', 'Triglidae', 43, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(467, 'Raya moteada de espina', '', 'Urobatis halleri', 'Rayas y similares ', 'Rajiformes', 'Urolophidae', 39, '', '', '', '', '', '', 3, ' (PacÃ­fico) del 1 de mayo al 31 de julio.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(468, 'Raya espina de lija', '', 'Urobatis maculatus', 'Rayas y similares ', 'Rajiformes', 'Urolophidae', 39, '', '', '', '', '', '', 3, ' (PacÃ­fico) del 1 de mayo al 31 de julio.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(469, 'Raya espina de estero', '', 'Urolophus jamaicensis', 'Rayas y similares ', 'Rajiformes', 'Urotrygonidae', 39, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(470, 'Raya lisa de espina', '', 'Urotrygon maculatus', 'Rayas y similares ', 'Rajiformes', 'Urotrygonidae', 39, '', '', '', '', '', '', 3, ' (PacÃ­fico) del 1 de mayo al 31 de julio.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(471, 'Raya gris de espina ', '', 'Urotrygon rogersi', 'Rayas y similares ', 'Rajiformes', 'Urotrygonidae', 39, '', '', '', '', '', '', 3, ' (PacÃ­fico) del 1 de mayo al 31 de julio.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(472, 'Pez espada', 'Swordfish', 'Xiphias gladius', 'Peces Ã³seos', 'Perciformes', 'Xiphiidae', 35, '', '', '', '', '', '', 0, 'Todo el aÃ±o ', 'Especie marina de hÃ¡bitos oceÃ¡nicos. ', 'Se distribuye en todos los mares. ', 0, 'Congelado. ', 'Estados Unidos, Canada.', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(473, 'Pez espada', 'Swordfish', 'Xiphias gladius', 'Peces Ã³seos', 'Perciformes', 'Xiphiidae', 31, '', '', '', '', '', '', 0, 'Todo el aÃ±o ', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(474, 'Pez sierra comÃºn', 'Largetooth sawfish', 'Pristis pristis', 'Chondrichthyes', 'Pristiformes', 'Pristidae', 46, 'Nacional', '', '', '', '200-300', 'Chinchorro playero, red de enmalle para tiburones y rayas en embarcaciones menores.', 3, '(Golfo de MÃ©xico y Caribe) del 1 de mayo al 29 de agosto.  (PacÃ­fico) del 1 de mayo al 31 de julio.', 'Especie marina de hÃ¡bitos costeros. Vive en la zona intermareal hasta los 100 metros de profundidad. Se alimenta de crustÃ¡ceos, moluscos y peces.', 'Se distribuye en todos los mares.', 0, 'Se utiliza la carne. ', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(475, 'Pristis pectinata', 'Smalltooth sawfish', 'Pristis pectinata', 'Tiburones ', 'Pristiformes', 'Pristidae', 46, '', '', '', '', '200-500', '', 3, '(Golfo de MÃ©xico y Caribe) del 1 de mayo al 29 de agosto. ', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(476, 'EsturiÃ³n del AtlÃ¡ntico', 'Atlantic sturgeon', 'Acipenser oxyrinchus', 'Peces Ã³seos', 'Acipenseriformes', 'Acipenseridae', 31, '', '', '', '', '100-300', '', 0, 'Pesqueria cerrada ', 'Especie marina de aguas poco profundas. Vive en estuarios y en la boca de los rÃ­os. Se alimenta de moluscos, crustÃ¡ceos y peces. ', 'Se distribuye en el Golfo de MÃ©xico y Mar Caribe', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(477, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(478, 'Cabrilla gato', 'Tiger Grouper', 'Mycteroperca tigris', '', '', '', 0, '', '', '', '', '', '', 3, ' (Golfo de MÃ©xico y Caribe) del 15 febrero al 15 de marzo.', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00'),
(479, 'SÃ¡balo', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2014-11-03 20:26:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pez_carta_nacional`
--

CREATE TABLE IF NOT EXISTS `pez_carta_nacional` (
`especie_id` int(11) NOT NULL,
  `carta_nacional_id` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pez_distribucion`
--

CREATE TABLE IF NOT EXISTS `pez_distribucion` (
`id` int(11) NOT NULL,
  `especie_id` int(11) NOT NULL,
  `tipo_distribucion` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pez_estado_conservacion`
--

CREATE TABLE IF NOT EXISTS `pez_estado_conservacion` (
  `especie_id` int(11) NOT NULL,
  `estado_conservacion` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pez_tipo_capturas`
--

CREATE TABLE IF NOT EXISTS `pez_tipo_capturas` (
`especie_id` int(11) NOT NULL,
  `tipo_captura_id` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_captura`
--

CREATE TABLE IF NOT EXISTS `tipo_captura` (
`id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_captura`
--

INSERT INTO `tipo_captura` (`id`, `nombre`, `fecha_creacion`) VALUES
(3, 'Objetivo', '2014-10-24 18:30:24'),
(4, 'incidental', '2014-11-03 19:38:27'),
(5, 'Deportiva', '2014-10-24 18:31:05'),
(6, 'Fomento', '2014-10-24 18:31:05'),
(7, 'Cultivada', '2014-10-24 18:31:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_veda`
--

CREATE TABLE IF NOT EXISTS `tipo_veda` (
`id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_veda`
--

INSERT INTO `tipo_veda` (`id`, `nombre`, `fecha_creacion`) VALUES
(1, 'Permanente', '2014-10-27 17:33:14'),
(2, 'Permanente (solo pesca deportiva)', '2014-10-27 17:33:14'),
(3, 'Temporal fija', '2014-10-27 17:33:29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carta_nacional`
--
ALTER TABLE `carta_nacional`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `distribucion`
--
ALTER TABLE `distribucion`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_conservacion`
--
ALTER TABLE `estado_conservacion`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `peces`
--
ALTER TABLE `peces`
 ADD PRIMARY KEY (`especie_id`);

--
-- Indices de la tabla `pez_carta_nacional`
--
ALTER TABLE `pez_carta_nacional`
 ADD PRIMARY KEY (`especie_id`);

--
-- Indices de la tabla `pez_distribucion`
--
ALTER TABLE `pez_distribucion`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pez_estado_conservacion`
--
ALTER TABLE `pez_estado_conservacion`
 ADD PRIMARY KEY (`especie_id`);

--
-- Indices de la tabla `pez_tipo_capturas`
--
ALTER TABLE `pez_tipo_capturas`
 ADD PRIMARY KEY (`especie_id`);

--
-- Indices de la tabla `tipo_captura`
--
ALTER TABLE `tipo_captura`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_veda`
--
ALTER TABLE `tipo_veda`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carta_nacional`
--
ALTER TABLE `carta_nacional`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `distribucion`
--
ALTER TABLE `distribucion`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `estado_conservacion`
--
ALTER TABLE `estado_conservacion`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT de la tabla `peces`
--
ALTER TABLE `peces`
MODIFY `especie_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=480;
--
-- AUTO_INCREMENT de la tabla `pez_carta_nacional`
--
ALTER TABLE `pez_carta_nacional`
MODIFY `especie_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pez_distribucion`
--
ALTER TABLE `pez_distribucion`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pez_tipo_capturas`
--
ALTER TABLE `pez_tipo_capturas`
MODIFY `especie_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_captura`
--
ALTER TABLE `tipo_captura`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `tipo_veda`
--
ALTER TABLE `tipo_veda`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
