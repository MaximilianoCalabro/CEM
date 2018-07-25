-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2018 a las 18:02:32
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
  `subtitulo` varchar(250) COLLATE utf8_bin NOT NULL,
  `noticia` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticias`, `titulo`, `fecha`, `imagen`, `subtitulo`, `noticia`) VALUES
(5, 'Investigan un secuestro virtual en el centro de la ciudad', 'Miércoles 25.07.2018', '217771_1.jpg', 'Una vecina recibió un llamado en donde se le dijo que su hijo estaba secuestrado.', 'Por estas horas se investiga un caso ocurrido durante la madrugada de este miércoles en la ciudad de Santa Fe en el que se habría producido un presunto secuestro virtual.\r\n\r\nLas primeras informaciones indican que una vecina del centro de la capital provincial recibió un llamado al teléfono de su domicilio y le dijeron que tenían secuestrado a un hijo; por lo que le exigieron dinero para liberarlo.\r\n\r\nTambién se supo que la mujer dejó en la vereda de su vivienda una suma importante de dinero en pesos y dólares, como así también de algunas joyas de oro.\r\n\r\nPor último, se conoció que al poco tiempo se hizo presente el hijo de la mujer.'),
(6, 'Piden mayor intervención del municipio en la zona de countries', 'Martes 24.07.2018', '217759_1.jpg', 'Preocupan algunos casos de inseguridad y también la quema de basura, la circulación de animales por el Acceso Norte y la falta de iluminación, entre otros problemas.', 'El crecimiento demográfico de los barrios privados en la zona de countries de la autopista Santa Fe - Rosario hace más visible los problemas ambientales, de planificación urbana y también de seguridad en la zona de Santo Tomé que va desde la calle República de Chile, donde comienza el Acceso Norte, hasta los countries Altos de la Ribera, La Tatenguita y el Club de Campo El Paso.'),
(7, 'Falleció un motociclista tras siniestro vial en Monte Vera', 'Miércoles 25.07.2018', '217787_1.jpg', 'La víctima (56) intentó esquivar una bicicleta y derrapó en la Ruta 2, mil metros al norte de la intersección con la RP 5.', 'Por cuestiones que son materia de peritajes, este miércoles por la mañana se produjo un siniestro vial en la Ruta Provincial 2 que dejó como saldo un hombre fallecido.\r\n\r\n \r\n\r\nSegún se supo, el hecho tuvo lugar alrededor de las 6.30, 1000 metros al norte del cruce del mencionado camino con la Ruta Provincial 5, en el ingreso sur de la localidad de Monte Vera.Sobre los protagonistas del incidente, se supo que estuvieron involucrados una motocicleta, una bicicleta y un automóvil.  \r\n\r\n \r\n\r\nPor lo que pudo averiguar El Litoral, la víctima, un hombre de 56 años, habría intentado esquivar a una bicicleta y en esa maniobra derrapó e impactó contra la cinta asfáltica. \r\n\r\n \r\n\r\nEn el lugar trabajó personal policial y peritos, quienes interrumpieron el tránsito mientras realizaron trabajos periciales.');

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
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id_slider`, `imagen`) VALUES
(1, 'abdominoplastia.jpg'),
(2, 'facial.jpg'),
(3, 'axilas.jpg');

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
  MODIFY `id_noticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `popup`
--
ALTER TABLE `popup`
  MODIFY `id_popup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
