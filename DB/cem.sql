-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2018 a las 13:48:40
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(21, 'Multa millonaria y cárcel para CR7', '26-07-2018', '1.jpg', 'Cristiano llegó a un acuerdo con el fisco español por las deudas que mantenía. Fue condenado a pagar y a dos años de cárcel, aunque sin prisión efectiva.', 'Mucho se dijo de que la llegada de Cristiano Ronaldo a la Juventus tuvo que ver más con los problemas tributarios del crack portugués en España que realmente con la búsqueda de un nuevo desafío deportivo. Finalmente, pactó con la Hacienda para saldar sus deudas que le trajeron más de una crítica y varios dolores de cabeza.'),
(22, 'Multitudinaria marcha en contra de la reforma militar', 'Jueves 26.07.2018', 'marcha_1.jpg', 'Rechazo al decreto de Macri que habilita a los militares a participar en cuestiones de seguridad interior.', 'Una multitud se congregó hoy en la Plaza de Mayo de Buenos Aires y marchó hacia el Ministerio de Defensa para repudiar la reforma del sistema de defensa que dispuso la participación de las Fuerzas Armadas en cuestiones de seguridad interior.\r\n\r\n\r\nCon la consigna \"Fuerzas Armadas represivas, ¡nunca más!\", la marcha fue convocada por la asociación Abuelas de Plaza de Mayo, que advirtió que involucrar a los militares \"en seguridad interior genera muertes, tortura y desapariciones\", es anticonstitucional y \"viola los acuerdos que está obligado a cumplir el Estado argentino\". \r\n\r\n\r\nTambién adhieren a la marcha las Madres de Plaza de Mayo Línea Fundadora, la Asamblea Permanente por los Derechos Humanos, el Centro de Estudios Legales y Sociales y la Confederación General del Trabajo, entre otros organismos.'),
(23, 'Al filo de la tragedia por un incendio en una casa', 'Jueves 26.07.2018', 'casa_1.jpg', 'Ocurrió durante la tarde de este jueves, en la esquina de Dr. Zavalla y Crespo. Una mujer, sus dos hijos y su mascota fueron rescatados de entre las llamas por vecinos y bomberos.', 'Un incendio de proporciones se desató este jueves por la tarde en una vivienda de barrio Roma y puso en peligro la vida de una mujer y sus dos hijos menores de edad.\r\n\r\n\r\nLa casa está ubicada en una de las esquinas que forman las calles Dr. Zavalla y Crespo, en la planta alta, sobre una conocida clínica de rehabilitación.\r\n\r\n\r\nLas llamas comenzaron aproximadamente a las 15, aparentemente por un desperfecto eléctrico, y rápidamente se propagaron por el inmueble.\r\n\r\n\r\n“Nosotros, con mi mamá, estábamos limpiando el negocio cuando sentimos el alboroto de gente, escuchamos los gritos y al salir vimos cómo emanaba mucho fuego de dos de las cuatro ventanas de la casa”, relató Daniela, quien atiende un pequeño almacén en la esquina opuesta.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `imagen_slider` varchar(250) COLLATE utf8_bin NOT NULL,
  `id_noticias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id_slider`, `imagen_slider`, `id_noticias`) VALUES
(41, '5ad9e2715ddd3_750x423.jpg', 22),
(42, 'd1a6712ffeceee007bd894b731eacc71.jpg', 22),
(44, '217925_casa_2.jpg', 23),
(45, '217926_casa_3.jpg', 23),
(46, 'cristiano-ronaldo2-1440x864_c.jpg', 21),
(47, 'GettyImages-660076378-670x385.jpg', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'cem', '$2y$10$NK./lDEzpUpxLOUR9U59zO6Ob81kpTg51y98zwL4rPAIEz2zFwtcO', '1DU6dZbNexXYqixwTyZqDngOTA8Uy4jLfrijwyBIfaC4lNyiPVvg7UUDH9Pc', '2018-07-27 07:05:24', '2018-07-27 07:05:24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id_background`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticias`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `background`
--
ALTER TABLE `background`
  MODIFY `id_background` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
