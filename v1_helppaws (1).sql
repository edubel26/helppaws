-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-08-2023 a las 05:18:59
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `v1_helppaws`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

DROP TABLE IF EXISTS `mascotas`;
CREATE TABLE IF NOT EXISTS `mascotas` (
  `id_mascota` int(10) NOT NULL AUTO_INCREMENT,
  `nombres_mascota` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `raza` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo_mascota` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `caracteristicas` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `foto_mascota` blob NOT NULL,
  `correo_electronico` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `codigo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id_mascota`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id_mascota`, `nombres_mascota`, `raza`, `tipo_mascota`, `caracteristicas`, `sexo`, `estado`, `foto_mascota`, `correo_electronico`, `codigo`) VALUES
(1, 'kiti', 'criollo', 'gato', 'blando y negro', 'femenino', 'vivo', '', '', ''),
(9, 'kenyi', 'criollo', 'gato', 'negro tamaño medio', 'masculino', 'con hogar', 0x7364667361646173, '', ''),
(10, 'simba', 'criollo', 'gato', 'color gris', 'masculino', 'abandono', 0x6d6170615f64655f70726f6365736f735f4a4d5f46415348494f4e2e6a7067, '', ''),
(11, 'Perronorrea', 'chandanese', 'perro', 'pulgoso', 'de vez en cuando', 'Rehabilitacion', 0x4564656d323158576f41555f6e464a2e6a7067, '', ''),
(12, 'nanis', 'criollo', 'perro', 'blanco', 'hembra', 'abandono', 0x4564656d323158576f41555f6e464a2e6a7067, '', ''),
(13, 'simba', 'criollo', 'perro', 'color gris', 'masculino', 'abandono', 0x4564656d323158576f41555f6e464a2e6a7067, '', ''),
(14, 'dasf', 'asdf', 'Perro', 'asdf', 'macho', 'Con hogar', 0x333033323341706f72746520506c616e20436f6d706c656d656e746172696f2053616c75642e706466, 'beltran502@hotmail.com', 'df'),
(15, 'wer', 'ewr', 'Perro', 'qwer', 'macho', 'Con hogar', 0x33303333323231313737303430393935383320626f727261646f722064652072656e7461204c65736c65792e706466, 'beltran502@hotmail.com', 'df45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

DROP TABLE IF EXISTS `permisos`;
CREATE TABLE IF NOT EXISTS `permisos` (
  `id_permisos` int(10) NOT NULL AUTO_INCREMENT,
  `correo_electronico` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fk_id_rol` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_permisos`)
) ENGINE=MyISAM AUTO_INCREMENT=100019 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permisos`, `correo_electronico`, `fk_id_rol`) VALUES
(100003, 'beltran502@hotmail.com', '1'),
(100006, 'cliff@cliff', '2'),
(100007, 'millergarzon12@gmail.com', '3'),
(100008, 'pacho061895@gmail.com', '3'),
(100009, 'dsfdsf@sdfdf', '3'),
(100010, 'lkjdshgfgg@lkfdhgfds', '3'),
(100011, 'milagritos@sorteresita.co', '3'),
(100012, 'cliff.tique@gmail.com', '3'),
(100013, 'et@et', '3'),
(100014, 'su@sana', '3'),
(100015, 'lauradanielamayorga14@gmail.com', '3'),
(100016, 'felipecano09@gmail.com', '3'),
(100017, 'CMARVARGASF@MSENA.EDU.CO', '3'),
(100018, 'holman@hotmail.com', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id_rol` int(10) NOT NULL AUTO_INCREMENT,
  `rol` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'administrador'),
(2, 'cliente'),
(3, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `correo_electronico` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `correo_electronico`, `contrasenia`) VALUES
(1, 'eduard andres  ', 'beltran perez', 'beltran502@hotmail.com', '761835011'),
(23, 'cliff', 'ht', 'cliff@cliff', '123'),
(24, 'miller', 'garzon', 'millergarzon12@gmail.com', 'miller1204'),
(25, 'Diegonorrea', 'Regonorria', 'pacho061895@gmail.com', '123456789'),
(26, 'dsfdsf', 'dsfdsf', 'dsfdsf@sdfdf', '123'),
(27, 'kjbdsgfñkjdbsvf', 'lj{dshfohds', 'lkjdshgfgg@lkfdhgfds', '123'),
(28, 'sor rita', 'milagros', 'milagritos@sorteresita.co', '123456'),
(29, 'cliff', 'tique', 'cliff.tique@gmail.com', 'helppaws'),
(30, 'eduard', 'tique', 'et@et', '123'),
(31, 'su', 'sana', 'su@sana', '123'),
(32, 'laura ', 'figueroa ', 'lauradanielamayorga14@gmail.com', '0074'),
(33, 'andres', 'granados', 'felipecano09@gmail.com', '123'),
(34, 'MARCELA', 'VARGAS', 'CMARVARGASF@MSENA.EDU.CO', '123'),
(35, 'holman alberto', 'beltran perez', 'holman@hotmail.com', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
