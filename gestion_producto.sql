-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2026 a las 00:39:28
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
-- Base de datos: `gestion_producto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `descripcion`) VALUES
(1, 'Cuidado personal', 'Productos destinados al cuidado y bienestar personal'),
(2, 'Higiene', 'Productos para la limpieza e higiene corporal'),
(3, 'Cuidado facial', 'Productos destinados al cuidado de la piel del rostro'),
(4, 'Bebidas naturales', 'Bebidas elaboradas con ingredientes naturales'),
(5, 'Nutrición', 'Productos relacionados con alimentación y nutrición'),
(6, 'Alimentos naturales', 'Alimentos elaborados a partir de ingredientes naturales'),
(7, 'Cuidado personal', 'Productos destinados al cuidado y bienestar personal'),
(8, 'Higiene', 'Productos para la limpieza e higiene corporal'),
(9, 'Cuidado facial', 'Productos destinados al cuidado de la piel del rostro'),
(10, 'Bebidas naturales', 'Bebidas elaboradas con ingredientes naturales'),
(11, 'Nutrición', 'Productos relacionados con alimentación y nutrición'),
(12, 'Alimentos naturales', 'Alimentos de origen natural');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `documento` varchar(20) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `documento`, `correo`, `telefono`) VALUES
(1, 'Carlos Rodriguez', '1234567890', 'carlos@gmail.com', '3001234567'),
(2, 'Maria Lopez', '9876543210', 'maria@gmail.com', '3109876543'),
(3, 'Juan Perez', '4567891230', 'juan@gmail.com', '3204567891'),
(4, 'Laura Martinez', '1122334455', 'laura@gmail.com', '3151234567'),
(5, 'Andres Gomez', '5566778899', 'andres@gmail.com', '3009876543'),
(6, 'Sofia Ramirez', '1020304050', 'sofia@gmail.com', '3184567890'),
(7, 'Daniel Torres', '2030405060', 'daniel@gmail.com', '3123456789'),
(8, 'Camila Castro', '3040506070', 'camila@gmail.com', '3167890123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `categoria`, `valor`, `id_proveedor`, `id_categoria`) VALUES
(1, 'Crema de Aloe', 'Cuidado personal', 15000.00, 1, 1),
(2, 'Aceite Natural', 'Cuidado personal', 22000.00, 2, 1),
(3, 'Jabon Natural', 'Higiene', 8000.00, 3, 2),
(4, 'Balsamo de Romero', 'Cuidado personal', 18000.00, 4, 1),
(5, 'Arcilla Facial Natural', 'Cuidado facial', 12000.00, 5, 3),
(6, 'Te Verde Natural', 'Bebidas naturales', 10000.00, 1, 4),
(7, 'Proteina Vegetal', 'Nutricion', 35000.00, 2, 5),
(8, 'Miel Pura de Abeja', 'Alimentos naturales', 20000.00, 3, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cuidad` varchar(100) NOT NULL,
  `direccion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `cuidad`, `direccion`) VALUES
(1, 'Proveedor Natural', 'Bogotá', 'Calle 10 # 20-30'),
(2, 'Vida Sana', 'La Dorada', 'Carrera 5 # 12-25'),
(3, 'Eco Productos', 'Medellín', 'Calle 50 # 40-15'),
(4, 'Naturaleza Viva', 'Manizales', 'Carrera 23 # 45-18'),
(5, 'Productos del Valle', 'Cali', 'Calle 15 # 30-22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `documento` (`documento`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_productos_proveedores` (`id_proveedor`),
  ADD KEY `fk_producto_categoria` (`id_categoria`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_producto_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`),
  ADD CONSTRAINT `fk_producto_proveedor` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id`),
  ADD CONSTRAINT `fk_productos_proveedores` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
