-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2025 a las 15:32:03
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `project_madera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event_calendar`
--

CREATE TABLE `event_calendar` (
  `id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `event_calendar`
--

INSERT INTO `event_calendar` (`id`, `start`, `end`, `title`, `description`) VALUES
(56, '2025-01-08 09:00:00', '2025-01-08 13:00:00', 'Inicio del curso', 'Sesión introductoria y presentación del programa de FP Madera y Corcho'),
(57, '2025-01-10 09:00:00', '2025-01-10 13:00:00', 'Taller: Herramientas básicas', 'Práctica en taller: uso seguro de herramientas manuales'),
(58, '2025-01-15 09:00:00', '2025-01-15 12:00:00', 'Clase teórica: Tipos de madera', 'Propiedades físicas y clasificación de maderas'),
(59, '2025-02-03 09:00:00', '2025-02-03 13:00:00', 'Taller: Corte y ensamblado', 'Técnicas básicas de corte, unión y ensamblado de piezas de madera'),
(60, '2025-02-14 10:00:00', '2025-02-14 13:00:00', 'Evaluación parcial', 'Evaluación teórico-práctica del primer módulo'),
(61, '2025-02-28 09:00:00', '2025-02-28 12:00:00', 'Visita técnica: Aserradero local', 'Visita a empresa de transformación de madera en la región'),
(62, '2025-03-05 09:00:00', '2025-03-05 13:00:00', 'Clase: Madera y sostenibilidad', 'Impacto ambiental del sector maderero y gestión sostenible de bosques'),
(63, '2025-03-20 09:00:00', '2025-03-20 13:00:00', 'Taller: Tratamiento de la madera', 'Aplicación de tratamientos protectores y acabados'),
(64, '2025-04-08 09:00:00', '2025-04-08 13:00:00', 'Taller: Corcho y sus usos', 'Aplicaciones del corcho en carpintería y aislamiento'),
(65, '2025-04-24 09:00:00', '2025-04-24 12:00:00', 'Clase: Normativa de seguridad', 'Normas de seguridad laboral en el trabajo con madera'),
(66, '2025-05-06 10:00:00', '2025-05-06 13:00:00', 'Proyecto final: Presentación inicial', 'Asignación de temas y objetivos de los proyectos finales'),
(67, '2025-05-21 09:00:00', '2025-05-21 13:00:00', 'Asesoramiento técnico', 'Sesiones individuales para seguimiento de proyectos'),
(68, '2025-06-10 09:00:00', '2025-06-10 14:00:00', 'Entrega y presentación de proyectos', 'Presentación de trabajos finales ante jurado'),
(69, '2025-06-18 09:00:00', '2025-06-18 11:00:00', 'Clausura del curso', 'Acto de cierre, entrega de diplomas y feedback final');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `event_calendar`
--
ALTER TABLE `event_calendar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `event_calendar`
--
ALTER TABLE `event_calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
