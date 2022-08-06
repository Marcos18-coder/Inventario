-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-12-2019 a las 22:32:19
-- Versión del servidor: 5.7.17
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `Clave` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Precio` float DEFAULT NULL,
  `Unidades` int(11) DEFAULT NULL,
  `Imagen` longblob,
  `Valor_total` varchar(30) NOT NULL,
  `Costo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos_proveedores`
--

CREATE TABLE `articulos_proveedores` (
  `Clave_A_P` int(11) NOT NULL,
  `Clave` int(11) DEFAULT NULL,
  `Clave_P` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `No_Documento` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Costo` float DEFAULT NULL,
  `Descripcion` text,
  `Clave` int(11) DEFAULT NULL,
  `id_Usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `Clave_P` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Empreza` varchar(50) DEFAULT NULL,
  `Dia_Entrega` varchar(110) DEFAULT NULL,
  `Direccion` varchar(30) DEFAULT NULL,
  `Correo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE `salidas` (
  `No_Documento` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Costo` float DEFAULT NULL,
  `Descripcion` text,
  `Clave` int(11) DEFAULT NULL,
  `id_Usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_Usuario` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Perfil` varchar(50) DEFAULT NULL,
  `Login` varchar(50) DEFAULT NULL,
  `Contrasena` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_Usuario`, `Nombre`, `Perfil`, `Login`, `Contrasena`) VALUES
(1, 'Admin', 'Desarrollador', 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`Clave`);

--
-- Indices de la tabla `articulos_proveedores`
--
ALTER TABLE `articulos_proveedores`
  ADD PRIMARY KEY (`Clave_A_P`),
  ADD KEY `Clave` (`Clave`),
  ADD KEY `Clave_P` (`Clave_P`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`No_Documento`),
  ADD KEY `Clave` (`Clave`),
  ADD KEY `id_Usuario` (`id_Usuario`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`Clave_P`);

--
-- Indices de la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD PRIMARY KEY (`No_Documento`),
  ADD KEY `Clave` (`Clave`),
  ADD KEY `id_Usuario` (`id_Usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `Clave` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `articulos_proveedores`
--
ALTER TABLE `articulos_proveedores`
  MODIFY `Clave_A_P` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `Clave_P` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos_proveedores`
--
ALTER TABLE `articulos_proveedores`
  ADD CONSTRAINT `articulos_proveedores_ibfk_1` FOREIGN KEY (`Clave`) REFERENCES `articulos` (`Clave`),
  ADD CONSTRAINT `articulos_proveedores_ibfk_2` FOREIGN KEY (`Clave_P`) REFERENCES `proveedores` (`Clave_P`);

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `entradas_ibfk_1` FOREIGN KEY (`Clave`) REFERENCES `articulos` (`Clave`),
  ADD CONSTRAINT `entradas_ibfk_2` FOREIGN KEY (`id_Usuario`) REFERENCES `usuarios` (`id_Usuario`);

--
-- Filtros para la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD CONSTRAINT `salidas_ibfk_1` FOREIGN KEY (`Clave`) REFERENCES `articulos` (`Clave`),
  ADD CONSTRAINT `salidas_ibfk_2` FOREIGN KEY (`id_Usuario`) REFERENCES `usuarios` (`id_Usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
