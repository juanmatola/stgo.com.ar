-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2021 a las 15:41:35
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `belurp_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `is_post`
--

CREATE TABLE `is_post` (
  `id` int(11) NOT NULL,
  `title` varchar(512) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(512) NOT NULL,
  `startdate` date NOT NULL,
  `status` varchar(512) NOT NULL,
  `team` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `is_image`
--

CREATE TABLE `is_image` (
  `id` int(11) NOT NULL,
  `post_id` int NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `is_user`
--

CREATE TABLE `is_user` (
  `id` int(11) NOT NULL,
  `username` varchar(512) NOT NULL,
  `password` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insercion de usuario admin por defecto

INSERT INTO is_user (username, password)
VALUES ( 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec' );
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `is_post`
--
ALTER TABLE `is_post`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `is_image`
--
ALTER TABLE `is_image`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `is_user`
--
ALTER TABLE `is_user`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `is_post`
--
ALTER TABLE `is_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `is_user`
--
ALTER TABLE `is_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
