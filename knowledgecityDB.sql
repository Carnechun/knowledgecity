-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-01-2020 a las 10:51:25
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `knowledgecity`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `api_users`
--

CREATE TABLE `api_users` (
  `id` int(11) NOT NULL,
  `token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `api_users`
--

INSERT INTO `api_users` (`id`, `token`, `username`) VALUES
(5, '616df98d4f9af38e889231dcd854764fa96cb459', 'kctest00201');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `school`
--

INSERT INTO `school` (`id`, `name`, `city`) VALUES
(1, 'UiversitySD', 'SD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `school` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `student`
--

INSERT INTO `student` (`id`, `username`, `firstname`, `surname`, `group`, `password`, `school`) VALUES
(1, 'kctest00200', 'Jhon', 'Smith', 'Default group', 'smith123', 'UniversitySD'),
(2, 'kctest00201', 'Kane', 'Celsius', 'Default group', 'kane123', 'UniversitySD'),
(3, 'kctest00202', 'Gilbert', 'Celsius', 'Default group', 'gilbert123', 'UniversitySD'),
(4, 'kctest00203', 'Slader', 'Celsius', 'Default group', 'salder123', 'UniversitySD'),
(5, 'kctest00204', 'Silvio', 'Rodriguez', 'Default group', 'silvio123', 'UniversitySD'),
(6, 'kctest00205', 'Oliver', 'Lombardi', 'Default group', 'oliver123', 'UniversitySD'),
(7, 'kctest00206', 'Angelina', 'Lombardi', 'Default group', 'agelina123', 'UniversitySD'),
(8, 'kctest00207', 'Agela', 'Nick', 'Default group', 'angela123', 'UniversitySD'),
(9, 'kctest00208', 'Frederic', 'Hashimoto', 'Default group', 'frederic12', 'UniversitySD'),
(10, 'kctest00209', 'Michael', 'Kane', 'Default group', 'michael123', 'UniversitySD');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `api_users`
--
ALTER TABLE `api_users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `api_users`
--
ALTER TABLE `api_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
