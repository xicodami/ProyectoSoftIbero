-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2024 a las 04:13:04
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
-- Base de datos: `empresarial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `name_categoria` varchar(150) NOT NULL,
  `usuario_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `name_categoria`, `usuario_codigo`) VALUES
(71, 'SOFTWARE', 666666),
(72, 'HARDWARE', 666666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresoproducto`
--

CREATE TABLE `ingresoproducto` (
  `id_ingr_produc` int(11) NOT NULL,
  `cantidad_ingr_produc_KG` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `marca` varchar(111) NOT NULL,
  `numerofactura` varchar(111) NOT NULL,
  `id_proveedor` int(100) NOT NULL,
  `nit` varchar(50) NOT NULL,
  `fechafacturareal` varchar(150) NOT NULL,
  `referencia` varchar(150) NOT NULL,
  `PrecioCompra` int(150) NOT NULL,
  `IvaIncluido` int(150) NOT NULL,
  `ValorIva` int(150) NOT NULL,
  `Total` int(150) NOT NULL,
  `usuario_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ingresoproducto`
--

INSERT INTO `ingresoproducto` (`id_ingr_produc`, `cantidad_ingr_produc_KG`, `id_categoria`, `id_producto`, `fecha`, `marca`, `numerofactura`, `id_proveedor`, `nit`, `fechafacturareal`, `referencia`, `PrecioCompra`, `IvaIncluido`, `ValorIva`, `Total`, `usuario_codigo`) VALUES
(83, 10, 72, 44, '2024-05-12 03:36:26', 'HP', '1111111', 30, '74452452', '2024-05-10', 'NEGRO', 2000000, 19, 380000, 2380000, 666666);

--
-- Disparadores `ingresoproducto`
--
DELIMITER $$
CREATE TRIGGER `calcular_iva_total` BEFORE INSERT ON `ingresoproducto` FOR EACH ROW BEGIN
    DECLARE iva_incluido DECIMAL(10, 2);
    DECLARE valor_iva DECIMAL(10, 2);

    SET iva_incluido = NEW.IvaIncluido / 100; -- Convertir el porcentaje de IVA a decimal
    SET valor_iva = NEW.PrecioCompra * iva_incluido; -- Calcular el valor del IVA

    SET NEW.ValorIva = valor_iva; -- Actualizar el valor del IVA en el nuevo registro
    SET NEW.Total = NEW.PrecioCompra + valor_iva; -- Calcular el total e insertarlo en el nuevo registro
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `name_producto` varchar(100) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `name_producto`, `id_categoria`) VALUES
(43, 'SISTEMA GESTION EMPRESARIAL', 71),
(44, 'MOUSE', 72);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(100) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `name_proveedor` varchar(100) NOT NULL,
  `nit` varchar(50) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `representante` varchar(150) NOT NULL,
  `ubicacion` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `id_categoria`, `name_proveedor`, `nit`, `celular`, `representante`, `ubicacion`, `email`) VALUES
(30, 72, 'DEVESOFT D&E', '74452452', '3002311877', 'DIEGO PINZON', 'CRA 59 # 56A- 15', 'DEVESOFT@GMAIL.COM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `rol_codigo` int(11) NOT NULL,
  `rol_nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`rol_codigo`, `rol_nombre`) VALUES
(1, 'ADMINISTRADOR'),
(58, 'ENGINEER JUNIOR'),
(59, 'CANDIDATO/A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidaproducto`
--

CREATE TABLE `salidaproducto` (
  `id_salida_prod` int(11) NOT NULL,
  `cantidad_sali_prod_KG` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `marca` varchar(50) NOT NULL,
  `numerofactura` varchar(50) NOT NULL,
  `id_proveedor` int(100) NOT NULL,
  `nit` varchar(50) NOT NULL,
  `fechafacturareal` varchar(50) NOT NULL,
  `referencia` varchar(50) NOT NULL,
  `PrecioCompra` int(150) NOT NULL,
  `IvaIncluido` int(150) NOT NULL,
  `ValorIva` int(150) NOT NULL,
  `Total` int(150) NOT NULL,
  `usuario_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Disparadores `salidaproducto`
--
DELIMITER $$
CREATE TRIGGER `calcular_iva_total_salida` BEFORE INSERT ON `salidaproducto` FOR EACH ROW BEGIN
    DECLARE iva_incluido DECIMAL(10, 2);
    DECLARE valor_iva DECIMAL(10, 2);

    SET iva_incluido = NEW.IvaIncluido / 100; -- Convertir el porcentaje de IVA a decimal
    SET valor_iva = NEW.PrecioCompra * iva_incluido; -- Calcular el valor del IVA

    SET NEW.ValorIva = valor_iva; -- Actualizar el valor del IVA en el nuevo registro
    SET NEW.Total = NEW.PrecioCompra + valor_iva; -- Calcular el total e insertarlo en el nuevo registro
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `rol_codigo` int(11) NOT NULL,
  `usuario_codigo` int(11) NOT NULL,
  `usuario_nombre` varchar(45) NOT NULL,
  `usuario_apellido` varchar(45) NOT NULL,
  `usuario_correo` varchar(45) NOT NULL,
  `usuario_pass` varchar(200) NOT NULL,
  `usuario_estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`rol_codigo`, `usuario_codigo`, `usuario_nombre`, `usuario_apellido`, `usuario_correo`, `usuario_pass`, `usuario_estado`) VALUES
(1, 666666, 'DIEGO', 'PINZON', 'DIEGOPINZON@GMAIL.COM', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `usuario_codigo` (`usuario_codigo`);

--
-- Indices de la tabla `ingresoproducto`
--
ALTER TABLE `ingresoproducto`
  ADD PRIMARY KEY (`id_ingr_produc`),
  ADD KEY `id_ingr_produc` (`id_ingr_produc`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_proveedor` (`id_proveedor`),
  ADD KEY `usuario_codigo` (`usuario_codigo`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rol_codigo`);

--
-- Indices de la tabla `salidaproducto`
--
ALTER TABLE `salidaproducto`
  ADD PRIMARY KEY (`id_salida_prod`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_salida_prod` (`id_salida_prod`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_codigo`),
  ADD KEY `ind_usuarios_roles` (`rol_codigo`),
  ADD KEY `usuario_codigo` (`usuario_codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `ingresoproducto`
--
ALTER TABLE `ingresoproducto`
  MODIFY `id_ingr_produc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `rol_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `salidaproducto`
--
ALTER TABLE `salidaproducto`
  MODIFY `id_salida_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `categorias_ibfk_1` FOREIGN KEY (`usuario_codigo`) REFERENCES `usuarios` (`usuario_codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ingresoproducto`
--
ALTER TABLE `ingresoproducto`
  ADD CONSTRAINT `ingresoproducto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ingresoproducto_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ingresoproducto_ibfk_3` FOREIGN KEY (`usuario_codigo`) REFERENCES `usuarios` (`usuario_codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ingresoproducto_ibfk_4` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `proveedores_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `salidaproducto`
--
ALTER TABLE `salidaproducto`
  ADD CONSTRAINT `salidaproducto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `salidaproducto_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_roles` FOREIGN KEY (`rol_codigo`) REFERENCES `roles` (`rol_codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
