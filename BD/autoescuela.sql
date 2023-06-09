-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2023 a las 23:32:53
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `autoescuela`
--
CREATE DATABASE IF NOT EXISTS `autoescuela` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `autoescuela`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `CodigoPregunta` int(20) NOT NULL,
  `TituloPregunta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `codigoRespuesta` int(11) NOT NULL,
  `NombreRespuesta` varchar(200) NOT NULL,
  `CodigoPregunta` int(11) NOT NULL,
  `esCorrecta` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `CodigoAlumno` int(11) NOT NULL,
  `DNI` varchar(10) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Apellidos` varchar(60) NOT NULL,
  `Localidad` varchar(80) NOT NULL,
  `Provincia` varchar(80) NOT NULL,
  `CodigoPostal` int(20) NOT NULL,
  `Calle` varchar(80) NOT NULL,
  `CarnetPosesion` varchar(40) NOT NULL,
  `ProfesorAsignado` int(11) NOT NULL,
  `nombreUsuario` varchar(40) NOT NULL,
  `passwd` varchar(40) NOT NULL,
  `rol` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`CodigoAlumno`, `DNI`, `FechaNacimiento`, `Nombre`, `Apellidos`, `Localidad`, `Provincia`, `CodigoPostal`, `Calle`, `CarnetPosesion`, `ProfesorAsignado`, `nombreUsuario`, `passwd`, `rol`) VALUES
(1, '80242018D', '2001-11-27', 'Paco', 'Rodriguez López', 'Montemolin', 'badajoz', 6291, 'Llerena nº42', 'A2, B', 0, 'paco@gmail.com', '1234', 'profesor');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
