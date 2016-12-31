-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2016 a las 05:26:16
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbsys`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `inventario1` int(20) DEFAULT NULL,
  `inventario2` int(20) DEFAULT NULL,
  `descripcion` varchar(30) DEFAULT NULL,
  `marca` varchar(10) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `serie` varchar(40) NOT NULL,
  `nomusrespo` varchar(40) NOT NULL,
  `apellusrespo` varchar(40) NOT NULL,
  `ubicacion` varchar(40) NOT NULL,
  `centrocostos` varchar(20) NOT NULL,
  `telefono` int(20) DEFAULT NULL,
  `comentario` varchar(40) DEFAULT NULL,
  `enviado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`inventario1`, `inventario2`, `descripcion`, `marca`, `modelo`, `serie`, `nomusrespo`, `apellusrespo`, `ubicacion`, `centrocostos`, `telefono`, `comentario`, `enviado`) VALUES
(1234, 123456, 'monitor', 'compaq', '12345', '12345678', 'yo soy', 'apellido', 'ubicado', '123456', 12345678, 'Guardado', 'qw;kjljghd'),
(123456, 654321, 'cpu', 'hp', '800 g1', '1234567890', 'david', 'coronado', 'centro sur', '1234', 12345678, 'Guardado', 'jajajajajj'),
(123456, 1267, 'Mouse', 'HP', 'N/A', 'N/A', 'David', 'Davila', 'Guatemala, Centrica plaza', '12345', 12345678, 'Guardado', 'N/A'),
(0, 4321, 'CPU', 'das', 'fast', 'q23r4567gt7gdf', 'sara', 'stics', 'Super_Sencillo', '12345', 12345678, 'Guardado', 'qweqw'),
(0, 1234, 'CPU', 'fg', 'das', 'qw23ewq456y', 'sara', 'astics', 'El_Naranjo', '2112', 12345678, 'Guardado', 'asdasasa a'),
(123456, 4321, '2', 'hp', 'le1711', 'qwerty12345', 'adrian', 'conde', 'Guatemala', '1234', 20129312, 'Guardado', 'sin coment'),
(987653, 1267, 'Scanner', 'jitsajay', 'mp4xd', 'XDXD007jaja', 'tu tata', 'soy yo', 'que no se', '1234', 19765432, 'Guardado', 'jajajaja e');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `soid` varchar(20) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `area` varchar(20) NOT NULL,
  `ubicacion` varchar(25) DEFAULT NULL,
  `centrocostos` int(15) NOT NULL,
  `telefono` int(8) DEFAULT NULL,
  `enviado` varchar(20) NOT NULL,
  `password` varchar(40) CHARACTER SET utf8 NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`soid`, `nombre`, `apellido`, `email`, `area`, `ubicacion`, `centrocostos`, `telefono`, `enviado`, `password`, `fecha`) VALUES
('nt06201', 'Nery', 'Torres', 'neryetv@gmail.com', 'IT', 'centrica plaza', 2114, 12345678, 'Guardar', '', '0000-00-00'),
('Rt06201', 'Ricardo', 'Torres', 'neryetv@gmail.com', 'cti', 'centrica plaza', 1221, 12345678, 'Guardar', '', '0000-00-00'),
('eje123', 'ejemplo1', 'ejemplo1', 'ejemplo@gmail.com', 'de', 'UBICACION', 12345, 12345678, 'Guardar', '123', '2016-05-10'),
('et101', 'Nery Eduardo', 'Torres Villagran', 'neryetv@gmail.com', 'depa', 'centrica plaza', 2114, 12345678, 'Guardar', '123456', '1994-02-24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`serie`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`soid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
