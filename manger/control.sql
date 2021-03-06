-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2021 a las 18:29:58
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ad`
--

CREATE TABLE `ad` (
  `id_admin` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `Paterno` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `Materno` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `NoEmpleado` int(11) DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `contrasenia` varchar(30) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `id_usuario`
--

CREATE TABLE `id_usuario` (
  `id_usuario` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `Paterno` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `Materno` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `NoEmpleado` int(11) DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `contrasenia` varchar(30) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `nombre` text COLLATE utf8_bin NOT NULL,
  `Noserie` text COLLATE utf8_bin NOT NULL,
  `idProg` int(11) NOT NULL,
  `ubicacion` text COLLATE utf8_bin NOT NULL,
  `tipo` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vales`
--

CREATE TABLE `vales` (
  `area` text COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL,
  `folio` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `id_usuario`
--
ALTER TABLE `id_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `vales`
--
ALTER TABLE `vales`
  ADD PRIMARY KEY (`folio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ad`
--
ALTER TABLE `ad`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `id_usuario`
--
ALTER TABLE `id_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
