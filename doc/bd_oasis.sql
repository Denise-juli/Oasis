-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2023 a las 16:58:34
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_oasis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `usuario_id` int(11) NOT NULL,
  `servicio_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `contenido` text NOT NULL,
  `calificacion` int(11) NOT NULL,
  `fecha_comentario` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `servicio_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `contenido`, `calificacion`, `fecha_comentario`, `servicio_id`, `usuario_id`) VALUES
(1, 'este tratamiento muuuy bueno', 9, '2022-12-23 00:20:10', 1, 0),
(8, 'esta re lindo el lugar!', 7, '2022-12-24 00:20:16', 2, 0),
(9, 'no me gusto la atencion del personal', 3, '2022-12-25 00:20:21', 11, 0),
(14, 'me encanto', 8, '2022-12-26 00:22:29', 6, 0),
(15, 'la calidad no es tan buena', 5, '2022-12-27 00:23:28', 9, 0),
(16, 'que relajaciooon', 7, '2022-12-28 00:26:04', 10, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `compra_id` int(11) NOT NULL,
  `fecha_compra` datetime NOT NULL,
  `total` float NOT NULL,
  `servicio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`compra_id`, `fecha_compra`, `total`, `servicio_id`) VALUES
(1, '2022-11-27 07:02:41', 5200, 1),
(2, '2022-11-27 07:02:41', 5200, 1),
(3, '2022-11-27 07:03:50', 6000, 3),
(4, '2022-11-27 07:04:33', 8050, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntos`
--

CREATE TABLE `puntos` (
  `usuario_id` int(11) NOT NULL,
  `servicio_id` int(11) NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `servicio_id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`servicio_id`, `nombre`, `descripcion`, `precio`, `foto`) VALUES
(1, 'Dia Spa - Básico', 'sauna, masajes y pedicure', 7000, 'public/img/c1.jpg'),
(2, 'Dia Spa - Relax', 'sauna, masajes y piedras calientes', 7500, 'public/img/c2.jpg'),
(3, 'Dia Spa - Parejas', 'sauna, masajes y piscina', 8000, 'public/img/c3.jpg'),
(4, 'Dia Spa - Regalo', 'sauna, masajes, manicure y pedicure', 8200, 'public/img/c4.jpg'),
(5, 'CIRCUITO HIDRICO', 'relax en duchas escosesas', 6000, 'public/img/c5.png'),
(6, 'SAUNA', 'sauna y masajes al completo', 7000, 'public/img/c6.jpg'),
(7, 'MANOS Y PIES', 'masajes, manicure y pedicure', 3500, 'public/img/c7.jpg'),
(8, 'MASAJES', 'masajes al completo, incluye piedras calientes', 6000, 'public/img/c8.jpg'),
(9, 'FANGOTERAPIA', 'tratamiento dermo-relajante', 5500, 'public/img/c9.jpg'),
(10, 'AROMATERAPIA', 'tratamiento para relajar los sentidos', 2500, 'public/img/c10.jpg'),
(11, 'LIMPIEZA FACIAL', 'tratamiento revitalizante facial', 7000, 'public/img/c11.png'),
(12, 'DRENAJE LINFATICO', 'masajes y tratamientos que estimularan tu circulación', 7500, 'public/img/c12.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `tipo_id` int(11) NOT NULL,
  `caracteristica` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`tipo_id`, `caracteristica`) VALUES
(1, 'admin'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `turno_id` int(11) NOT NULL,
  `caracteristica` varchar(100) NOT NULL,
  `fecha_res` datetime NOT NULL,
  `fk_usuario_id` int(11) NOT NULL,
  `fk_compra_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`turno_id`, `caracteristica`, `fecha_res`, `fk_usuario_id`, `fk_compra_id`) VALUES
(1, 'pago con efectivo', '2022-11-27 07:05:10', 1, 1),
(2, 'pago con tarjeta de credito', '2022-11-27 07:06:00', 3, 4),
(3, 'pago con cheque', '2022-11-27 07:06:35', 5, 2),
(4, 'pago con tarjeta de debito', '2022-11-27 07:07:05', 5, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `telefono` varchar(11) DEFAULT NULL,
  `fecha_nac` datetime DEFAULT NULL,
  `fk_tipo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `nombre`, `apellido`, `email`, `password`, `telefono`, `fecha_nac`, `fk_tipo_id`) VALUES
(1, 'Vanesa', 'Martinez', 'vanmar@gmail.com', '1234', '1254-4789', '1980-11-01 03:00:28', 1),
(3, 'Matias', 'Artiga', 'matiart@gmail.com', '1234', '1254-4756', '1956-10-05 00:00:00', 1),
(5, 'Camila', 'Estuardo', 'camiestuardo@gmail.com', '1234', '1254-1259', '1999-08-17 00:00:00', 2),
(8, 'valeria', '', 'vanmar@gmail.com', '1234', NULL, NULL, NULL),
(9, 'valeria', '', 'vanmar@gmail.com', '1234', NULL, NULL, NULL),
(10, 'valeria', '', 'vanmar@gmail.com', '1234', NULL, NULL, NULL),
(11, 'valeria', '', 'vanmar@gmail.com', '1234', NULL, NULL, NULL),
(12, 'valeria', '', 'vanmar@gmail.com', '1234', NULL, NULL, NULL),
(13, 'valeria', '', 'vanmar@gmail.com', '1234', NULL, NULL, NULL),
(14, '', '', 'vanmar@gmail.com', '1234', NULL, NULL, NULL),
(15, 'vanea', '', 'vanmar@gmail.com', '1234', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `servicio_fk` (`servicio_id`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`compra_id`),
  ADD KEY `fk_servicio_id` (`servicio_id`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`servicio_id`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`tipo_id`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`turno_id`),
  ADD KEY `fk_usuario_id` (`fk_usuario_id`),
  ADD KEY `fk_compra_id` (`fk_compra_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`),
  ADD KEY `fk_tipo_id` (`fk_tipo_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `compra_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `servicio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `tipo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `turno_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `servicio_fk` FOREIGN KEY (`servicio_id`) REFERENCES `servicio` (`servicio_id`);

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`servicio_id`) REFERENCES `servicio` (`servicio_id`);

--
-- Filtros para la tabla `turno`
--
ALTER TABLE `turno`
  ADD CONSTRAINT `turno_ibfk_1` FOREIGN KEY (`fk_usuario_id`) REFERENCES `usuario` (`usuario_id`),
  ADD CONSTRAINT `turno_ibfk_2` FOREIGN KEY (`fk_compra_id`) REFERENCES `compra` (`compra_id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`fk_tipo_id`) REFERENCES `tipo` (`tipo_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
