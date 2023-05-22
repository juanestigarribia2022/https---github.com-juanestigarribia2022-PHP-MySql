-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2023 a las 22:49:48
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `creditos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `whatsapp` text NOT NULL,
  `msj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `nombre`, `apellido`, `whatsapp`, `msj`) VALUES
(15, '5', '5', '5', '55555555555'),
(16, '5', '5', '5', '55555555555'),
(17, '66', '66', '66', '66'),
(18, 'JUAN ESTEBAN', 'ESTIGARRIBIA', '+5493517910065', 'po'),
(19, '7', '7', '7', '7'),
(20, '7', '7', '7', '7'),
(21, '888', '888', '8888', ' 8888888'),
(22, '888', '888', '8888', '999999999'),
(23, 'JUAN ESTEBAN', 'ESTIGARRIBIA', '+5493517910065', 'qwerty'),
(24, 'personal', 'prueba', '1171241576', 'ULTIMO REGISTRO\r\n'),
(25, 'PRUEBA ', 'FINAL ', '554689872', 'Con dia y horario del comentario'),
(26, 'JUAN ESTEBAN', 'ESTIGARRIBIA', '+5493517910065', 'Por favor llámame, ES URGENTE.'),
(27, 'Diego', 'Ayala', '3704241007', 'Llamameeeee');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
