-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2022 a las 03:02:04
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_pag_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosinforma`
--

CREATE TABLE `datosinforma` (
  `nombre` varchar(40) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `cel` varchar(45) DEFAULT NULL,
  `usuarios_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datosinforma`
--

INSERT INTO `datosinforma` (`nombre`, `email`, `cel`, `usuarios_id`) VALUES
('Administrador', 'admin@admin.com', '938014569', 1),
('Marcos Fuentes Lopez', 'marcos981@mail.com', '938745920', 2),
('Ana García Mendoza', 'anagm_blue@mail.com', '938741852', 3),
('Maria Juarez Mendoza', 'marijm@mail.com', '938526341', 4),
('John Dalton Junco Chan', 'jhon_d95@mail.com', '938456752', 5),
('Ana Laura Rosales', 'ana_laro@mail.com', '938741963', 6),
('Luisa Martinez Turrubiates', 'luisa_mart85@mail.com', '938552277', 7),
('Juan Carlos Molina', 'Carlitos_m95@mail.com', '938117945', 8),
('Luis Alberto Barrientos', 'luis_barr21@mail.com', '938765331', 9),
('Ernesto Montes De Oca', 'enesto_MO9@mail.com', '938724963', 10),
('Pedro Mendoza Martinez', 'pedro09_mm@mail.com', '938714982', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `vacuna` text DEFAULT NULL,
  `opi_vacuna` text DEFAULT NULL,
  `cubrebocas` text DEFAULT NULL,
  `llev_niño` text DEFAULT NULL,
  `casa_limp` text DEFAULT NULL,
  `cont_enferme` text DEFAULT NULL,
  `estuv_saliend` text DEFAULT NULL,
  `prueb_covid` text DEFAULT NULL,
  `prob_trabaj` text DEFAULT NULL,
  `test_ayuda` text DEFAULT NULL,
  `usuarios_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`vacuna`, `opi_vacuna`, `cubrebocas`, `llev_niño`, `casa_limp`, `cont_enferme`, `estuv_saliend`, `prueb_covid`, `prob_trabaj`, `test_ayuda`, `usuarios_id`) VALUES
('Si, ya me vacuné.', 'Nos mantienen seguro.', 'Si, correctamente.', 'No tengo niños pequeños.', 'Si, todo limpio y desinfectado.', 'No, ninguno la ha contraido.', 'No, permanecí en mi hogar.', 'Si, cada que puedo me lo hago.', 'No trabajo.', 'Demasiado.', 2),
('No, pero lo haré.', 'Miedo a la reacción.', 'Salgo sin cubrebocas.', 'Si, no tengo con quien dejarlo.', 'No, no lo necesito.', 'No, ninguno la ha contraido.', 'No, permanecí en mi hogar.', 'No, nunca me lo hago.', 'Ningún problema.', 'Demasiado.', 5),
('No y no lo haré.', 'No son necesarias.', 'No porque ya me vacune.', 'No, se quedan en casa.', 'De vez en cuando.', 'Si, antes lo tuvo.', 'Un familiar estuvo saliendo por necesidad.', 'No, no cuento con la forma de hacerlo.', 'No trabajo.', 'ni mucho ni poco.', 6),
('Si, ya me vacuné.', 'Miedo a la reacción.', 'Si, correctamente.', 'Si, no tengo con quien dejarlo.', 'De vez en cuando.', 'No, ninguno la ha contraido.', 'Un familiar estuvo saliendo por necesidad.', 'No, no cuento con la forma de hacerlo.', 'Si, me despidieron.', 'Si, algo.', 7),
('No, pero lo haré.', 'No son necesarias.', 'Salgo sin cubrebocas.', 'No tengo niños pequeños.', 'De vez en cuando.', 'Si, en estos momentos la tiene.', 'No, permanecí en mi hogar.', 'Si, cada que puedo me lo hago.', 'Ningún problema.', 'Demasiado.', 8),
('No y no lo haré.', 'No son necesarias.', 'No porque ya me vacune.', 'No, se quedan en casa.', 'No, no lo necesito.', 'No, ninguno la ha contraido.', 'Si, tenía que trabajar.', 'No, nunca me lo hago.', 'No trabajo.', 'ni mucho ni poco.', 9),
('Si, ya me vacuné.', 'Nos mantienen seguro.', 'Si, correctamente.', 'No tengo niños pequeños.', 'Si, todo limpio y desinfectado.', 'Si, antes lo tuvo.', 'No, permanecí en mi hogar.', 'Si, cada que puedo me lo hago.', 'Ningún problema.', 'Demasiado.', 10),
('No, pero lo haré.', 'Miedo a la reacción.', 'Salgo sin cubrebocas.', 'No, se quedan en casa.', 'De vez en cuando.', 'No, ninguno la ha contraido.', 'Si, tenía que trabajar.', 'No, nunca me lo hago.', 'Si, me despidieron.', 'Demasiado.', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id_usuarios` int(11) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id_usuarios`, `mensaje`) VALUES
(2, 'Durante la pandemia presente algunos sintomas, asi que me hice una prueba y por suerte dio negativa.'),
(3, 'Me gustaria compartir que un familiar no creia en esta enfermedad , hasta que un dia enfermo por la misma y se puso grave, por suerte se trato a tiempo y aun sigue con nosotros. Yo creo que es importante tomar nuevos habitos y sobre todo no olvidarnos del uso del cubrebocas.'),
(4, 'Como tal no he tenido alguna experencia relacionada , gracias a dios , sin embargo creo que debemos adaptarnos a la nueva normalidad , y no dejar de lado los buenos habitos de limpieza y desinfeccion , para cuidar de nuestra salud'),
(2, 'Debido a mi experencia anterior decidi aplicarme las vacunas , ya que no me las habia aplicado por exeptisismo , pero ahora me siento mas seguro contando con estas.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(1, 'Administrador', 'password'),
(2, 'Marcos981', 'contraseña'),
(3, 'Blue_Bird', 'pajaroazul'),
(4, 'Mary82jm', 'password82'),
(5, 'Jonnie_D95', '123456'),
(6, 'Anita_LR', '456123'),
(7, 'Luisita_mt', '789456'),
(8, 'Moli_JC', '000000'),
(9, 'Beto_bar21', '111111'),
(10, 'Ernest_di_Oca', '741258963'),
(11, 'Pedrito09_mm', 'contraseña');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosinforma`
--
ALTER TABLE `datosinforma`
  ADD KEY `usuarios_id` (`usuarios_id`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD KEY `usuarios_id` (`usuarios_id`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD KEY `id_usuarios` (`id_usuarios`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD CONSTRAINT `encuesta_ibfk_1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `mensajes_ibfk_1` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
