-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2021 a las 03:32:20
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `evic2021`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--
CREATE USER 'evic2021'@'localhost' IDENTIFIED BY 'y&YZ!uMQ!6k0';GRANT SELECT, INSERT, UPDATE ON *.* TO 'evic2021'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0; 
CREATE DATABASE 'evic2021';
USE 'evic2021';

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombre`) VALUES
(1, 'Arauco'),
(2, 'Unholster'),
(3, 'Anastasia'),
(4, 'Alaya ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscritos`
--

CREATE TABLE `inscritos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `region` varchar(45) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `comuna` varchar(45) DEFAULT NULL,
  `direccion` varchar(60) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `actividad` varchar(40) DEFAULT NULL,
  `carrera` varchar(45) DEFAULT NULL,
  `universidad` varchar(45) DEFAULT NULL,
  `pueblo_originario` varchar(45) DEFAULT NULL,
  `numero_ieee` int(11) DEFAULT NULL,
  `recluta` tinyint(4) DEFAULT NULL,
  `tipo_telefono` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `situacion` varchar(45) DEFAULT NULL,
  `habilidades` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscritos_has_empresa`
--

CREATE TABLE `inscritos_has_empresa` (
  `inscritos_id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `tipo_trabajo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_trabajo`
--

CREATE TABLE `tipo_trabajo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_trabajo`
--

INSERT INTO `tipo_trabajo` (`id`, `nombre`) VALUES
(1, 'trabajo full time'),
(2, 'trabajo part time'),
(3, 'práctica profesional'),
(4, 'práctica'),
(5, 'práctica 1'),
(6, 'pasantía');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscritos`
--
ALTER TABLE `inscritos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indices de la tabla `inscritos_has_empresa`
--
ALTER TABLE `inscritos_has_empresa`
  ADD KEY `fk_inscritos_has_empresa_tipo_trabajo1_idx` (`tipo_trabajo_id`),
  ADD KEY `fk_inscritos_has_empresa_inscritos1_idx` (`inscritos_id`),
  ADD KEY `fk_inscritos_has_empresa_empresa2_idx` (`empresa_id`);

--
-- Indices de la tabla `tipo_trabajo`
--
ALTER TABLE `tipo_trabajo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inscritos`
--
ALTER TABLE `inscritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inscritos_has_empresa`
--
ALTER TABLE `inscritos_has_empresa`
  ADD CONSTRAINT `fk_inscritos_has_empresa_empresa2` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_inscritos_has_empresa_inscritos1` FOREIGN KEY (`inscritos_id`) REFERENCES `inscritos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_inscritos_has_empresa_tipo_trabajo1` FOREIGN KEY (`tipo_trabajo_id`) REFERENCES `tipo_trabajo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
