-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-12-2020 a las 05:07:43
-- Versión del servidor: 10.3.24-MariaDB-2
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webHosting`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE `oferta` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `espacio` int(16) NOT NULL,
  `transferencia` int(16) NOT NULL,
  `sitio` int(3) NOT NULL,
  `registro` int(4) NOT NULL,
  `cuentas` int(4) NOT NULL,
  `bases` int(4) NOT NULL,
  `subdominios` int(4) NOT NULL,
  `garantia` varchar(50) NOT NULL,
  `panel` varchar(50) NOT NULL,
  `tecnologia` varchar(50) NOT NULL,
  `soporte` varchar(50) NOT NULL,
  `vencimiento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`id`, `nombre`, `precio`, `espacio`, `transferencia`, `sitio`, `registro`, `cuentas`, `bases`, `subdominios`, `garantia`, `panel`, `tecnologia`, `soporte`, `vencimiento`) VALUES
(3, 'premium', '100', 1000, 100, 10, 10, 10, 10, 10, 'lo mejor', 'cpanel', 'intel', '24/7', '365'),
(4, 'platinumX', '300', 10000, 10000, 20, 20, 20, 20, 20, 'siempre', 'el que quieras', 'intel', '24/7/365', '365'),
(13, 'basico 1 ', '20', 30, 30, 1, 1, 3, 1, 1, '30 dias', 'cpanel', 'amd', '24/7', '182'),
(14, 'basico 2', '25', 50, 30, 1, 1, 3, 1, 1, '60 dias', 'cpanel', 'amd', '24/7', '365'),
(15, 'basico 3', '30', 80, 80, 3, 3, 5, 3, 3, '30 dias', 'c panel', 'amd', '24/7', '365'),
(16, 'basico 4', '50', 100, 100, 5, 5, 10, 5, 5, '30 dias', 'c panel o plesk', 'intel', '24/7', '365'),
(17, 'basico 5', '150', 150, 150, 10, 10, 10, 10, 10, '2 meses', 'c pane o plesk', 'intel', '24/7', '365'),
(18, 'medio 1', '200', 200, 200, 20, 20, 20, 20, 20, '30 dias', 'cpanel', 'intel', '24/7', '365'),
(19, 'medio 2', '250', 250, 250, 20, 30, 30, 30, 30, '30 dias', 'cpanel', '5g', '24/7', '365'),
(20, 'medio 2', '300', 300, 300, 30, 30, 30, 30, 30, '60 dias', 'cpanel o plesk', '5g', '24/7', '365'),
(21, 'basico 3', '350', 500, 500, 50, 50, 50, 50, 50, '60 dias', 'cpanel o plesk', '5g', '24/7', '365'),
(22, 'plus', '900', 1024, 500, 5, 10, 10, 10, 10, 'lo mejor del mundo', 'cpanel', '5g', '27/7', '365'),
(23, 'servicioPrueba1', '1', 1, 1, 1, 1, 1, 1, 1, '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE `planes` (
  `id` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idoferta` int(11) NOT NULL,
  `inicio` datetime NOT NULL,
  `fin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`id`, `idusuario`, `idoferta`, `inicio`, `fin`) VALUES
(1, 1, 3, '2019-12-01 22:21:10', '2020-12-05 22:21:10'),
(2, 2, 3, '2019-12-01 22:21:10', '2020-12-16 22:21:10'),
(3, 3, 4, '2020-12-01 22:22:58', '2021-12-01 22:22:58'),
(4, 4, 14, '2019-12-06 22:22:58', '2020-12-06 22:22:58'),
(7, 2, 3, '2020-12-01 22:25:37', '2021-12-01 22:25:37'),
(8, 3, 14, '2020-12-01 22:25:37', '2021-12-01 22:25:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencias`
--

CREATE TABLE `sugerencias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `sugerencia` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sugerencias`
--

INSERT INTO `sugerencias` (`id`, `nombre`, `email`, `sugerencia`) VALUES
(1, 'ivan', 'ivan@correo.com', 'hola tengo una queja						'),
(2, 'ivan', 'ivan@correo.com', 'hola tengo una queja						'),
(3, 'ivan', 'ivan@ivan.com', 'que onda						'),
(4, 'prueba', 'prueba@pruebas.com', 'probando						');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIOS`
--

CREATE TABLE `USUARIOS` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `USUARIOS`
--

INSERT INTO `USUARIOS` (`id`, `nombre`, `clave`) VALUES
(1, 'ivan', 'JUAN'),
(2, 'diana', 'caro'),
(3, 'diana', 'caro'),
(4, 'juan', 'caro'),
(5, 'juan1', 'caro'),
(6, 'Ivan0', 'ayuda'),
(7, 'Ivan2', 'a'),
(8, 'carlos', 'carlos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_oferta` (`idoferta`),
  ADD KEY `fk_usuario` (`idusuario`);

--
-- Indices de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `USUARIOS`
--
ALTER TABLE `USUARIOS`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oferta`
--
ALTER TABLE `oferta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `planes`
--
ALTER TABLE `planes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `USUARIOS`
--
ALTER TABLE `USUARIOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `planes`
--
ALTER TABLE `planes`
  ADD CONSTRAINT `fk_oferta` FOREIGN KEY (`idoferta`) REFERENCES `oferta` (`id`),
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`idusuario`) REFERENCES `USUARIOS` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
