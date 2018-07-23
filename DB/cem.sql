-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-07-2018 a las 17:12:35
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `background`
--

CREATE TABLE `background` (
  `id_background` int(11) NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL,
  `texto` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `background`
--

INSERT INTO `background` (`id_background`, `imagen`, `texto`) VALUES
(1, 'fondo.png', 'CUANDO LAS IDEAS SE FUSIONAN, EL TRABAJO ARGENTINO SUMA VALOR.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticias` int(11) NOT NULL,
  `titulo` varchar(250) COLLATE utf8_bin NOT NULL,
  `fecha` varchar(250) COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL,
  `subtitulo` varchar(100) COLLATE utf8_bin NOT NULL,
  `noticia` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticias`, `titulo`, `fecha`, `imagen`, `subtitulo`, `noticia`) VALUES
(5, 'NOTICIA N°1', '23 JULIO, 2018', 'img-thumb-1.jpg', 'SUBTITULO N°1', 'MUCHAS NOTICIASMUCHAS NOTICIASMUCHAS NOTICIASMUCHAS NOTICIASMUCHAS NOTICIASMUCHAS NOTICIASMUCHAS NOTICIASMUCHAS NOTICIASMUCHAS NOTICIASMUCHAS NOTICIASMUCHAS NOTICIASMUCHAS NOTICIAS'),
(6, 'NOTICIA N°2', '24 JULIO, 2018', 'img-thumb-1.jpg', 'Hoy es 23/07, Hoy es 23/07,', 'Hoy es 23/07, Hoy es 23/07, Hoy es 23/07, Hoy es 23/07, Hoy es 23/07, Hoy es 23/07, Hoy es 23/07, Hoy es 23/07,'),
(7, 'NOTICIA N°3', '1 MAYO, 1989', 'av-2.jpg', '', ''),
(8, 'NOTICIA N°4', 'ALGUN DIA DE ALGUN AÑO', 'img-lg-1.jpg', '', ''),
(9, 'asdasdas', 'fasfasfasf', 'img-lg-2.jpg', '', ''),
(10, 'gdfsgdsh', 'fdhdfhdf', 'img-md-3.jpg', '', ''),
(11, 'jyt', 'tyktyktykty', 'img-widget-7.jpg', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `popup`
--

CREATE TABLE `popup` (
  `id_popup` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_bin NOT NULL,
  `subtitulo` varchar(100) COLLATE utf8_bin NOT NULL,
  `noticia` text COLLATE utf8_bin NOT NULL,
  `imagen_slider` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `popup`
--

INSERT INTO `popup` (`id_popup`, `titulo`, `subtitulo`, `noticia`, `imagen_slider`) VALUES
(1, 'TITULO N°1', 'SUBTITULO N°1', 'NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA - NOTICIA -', 'img-lg-1.jpg'),
(2, 'Mañana es MARTES!!!', 'Hoy es lunes', 'Son las 11:46 am, faltan 1 hora y cuarto para irme a casa, no me sale lo de las foreing keys... y solo me falta eso para terminar esta pagina, y la de Paillet', 'img-thumb-3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id_background`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticias`);

--
-- Indices de la tabla `popup`
--
ALTER TABLE `popup`
  ADD PRIMARY KEY (`id_popup`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `background`
--
ALTER TABLE `background`
  MODIFY `id_background` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `popup`
--
ALTER TABLE `popup`
  MODIFY `id_popup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
