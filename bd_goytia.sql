-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2023 a las 14:33:26
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `goytia_jeremias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(1, 'Bebidas'),
(2, 'Almacen'),
(3, 'Lacteos'),
(4, 'golosinas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `id_consulta` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `mensaje` varchar(500) NOT NULL,
  `leido` varchar(11) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`id_consulta`, `nombre`, `apellido`, `email`, `telefono`, `mensaje`, `leido`) VALUES
(7, 'Jeremias', 'goytia', 'jeremias_99@gmail.com', '2147483647', 'Hola! compre y no me llegaron algunos productos, que solucion me pueden brindar?', 'SI'),
(8, 'Maria', 'Perez', 'Mari_44@gmail.com', '2147483647', 'Hola! quisiera saber si estan necesitando personal.', 'NO'),
(9, 'Jose', 'Gomez', 'Jose_22@gmail.com', '2147483647', 'Holaa, quisiera saber si hacen envios a todo el pasi.', 'NO'),
(10, 'Facundo', 'Rebollo', 'facu@gmail.com', '2147483647', 'Buenas tardes, para cuando van a tener stock de Monster?', 'NO'),
(11, 'Nicolas', 'Krivenki', 'nicolas_a2@gmail.com', '2147483647', 'Hola buen dia! trabajan en navidad?\r\n', 'NO'),
(13, 'Jeremias', 'goytia', 'jeremiasjg99@gmail.com', '2147483647', 'Prueba email\r\n', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre_prod` varchar(100) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `precio` float NOT NULL,
  `precio_vta` float NOT NULL,
  `stock` int(11) NOT NULL,
  `stock_min` int(11) NOT NULL,
  `eliminado` varchar(20) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre_prod`, `imagen`, `categoria_id`, `precio`, `precio_vta`, `stock`, `stock_min`, `eliminado`) VALUES
(6, 'Chocolate Aguila Para Taza 150 Gr.', '1685267587_f4e8c3e27e15d4a89703.png', 4, 350, 350, 23, 24, 'NO'),
(7, 'Chocolate Cofler Block Con Leche 300 Gr.', '1685267619_30d2aea0c96aaf944622.png', 4, 1300, 1300, 21, 24, 'NO'),
(8, 'Galletitas Dulces Rellenas Con Crema Oreo 118g.', '1685267641_53639d6b2344ed84e853.png', 4, 320, 320, 21, 24, 'NO'),
(9, 'Queso Cremon Cremoso La Serenisima 1Kg', '1685267696_989139b7edb28157a939.png', 2, 900, 900, 24, 24, 'NO'),
(10, 'Nescafe Dolca Suave Doypack X170gr', '1685267726_d1adcdb1c4bade4cf5ee.png', 2, 1310, 1310, 24, 24, 'NO'),
(11, 'Café La Planta De Café Molido 500 Gr', '1685267752_dc3d15814543c2186353.png', 2, 1540, 1540, 24, 24, 'NO'),
(12, 'Galletitas De Agua Criollitas Originales 300 Gr', '1685267782_19dce626f2f4eb387e78.png', 2, 245, 245, 24, 24, 'NO'),
(13, 'Yerba Mate Playadito Suave X1kg', '1685267817_62ae44b441adc99d3b5d.png', 2, 970, 970, 23, 24, 'NO'),
(14, 'Leche Entera Uat Tregar 1 L', '1685267844_a39d169a954fbba7011e.png', 3, 230, 230, 24, 24, 'NO'),
(15, 'Leche Chocolatada Cindor 1Lt', '1685267885_277aa424a05ebecf149b.png', 3, 620, 620, 24, 24, 'NO'),
(16, 'Leche Uat Entera Ls 3carton 1l', '1685267941_fa15b58eea1a7942c75e.png', 3, 250, 250, 24, 24, 'NO'),
(17, 'Leche Descremada La Serenisima Zero Lactosa 1l', '1685267972_bc2e3fcd7ef1b76b2f4b.png', 3, 350, 350, 24, 24, 'NO'),
(18, 'Leche Uat Descremada La Serenisima Botella 1', '1685267996_1b280051310e92062a42.png', 3, 365, 365, 23, 24, 'NO'),
(22, 'Coca 1.5l Ret.', '1686745347_807e796c47598c7d9383.jpg', 1, 300, 350, 24, 24, 'NO'),
(23, 'Fanta 2l. Ret', '1686745459_7665e9a654acdd580243.png', 1, 350, 400, 24, 24, 'NO'),
(24, 'Pepsi 1.5l ', '1686745523_58e218bc485313a06e86.png', 1, 400, 470, 24, 24, 'NO'),
(25, 'Mirinda 2.25l Pomelo', '1686745550_e7bcf10982c8a962b9af.png', 1, 450, 500, 24, 24, 'NO'),
(26, 'Sprite 2l. Ret', '1686745838_9fec10b8ada8221f3921.png', 1, 300, 350, 24, 24, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(10) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `email`, `pass`, `perfil_id`, `baja`) VALUES
(1, 'Juan', 'Espindola', 'Juanse', 'juanse@gmail.com', '$2y$10$27xiZuDI1hphIXxn4hoajuJM6ECGn0SkKGYXNtWq2GEEh/0lnTH16', 1, 'NO'),
(2, 'Jeremias Jesus', 'Goytia', 'Jeremias', 'jeremias@gmail.com', '$2y$10$h0KF/pmEjDAPNMBBXMYTZuhQqFNMn3TGYbG.FsRY3vkN.CxriW8Cq', 2, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_cabecera`
--

CREATE TABLE `ventas_cabecera` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `usuario_id` int(11) NOT NULL,
  `total_venta` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_detalle`
--

CREATE TABLE `ventas_detalle` (
  `id` int(11) NOT NULL,
  `venta_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_consulta`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perfil_id` (`perfil_id`);

--
-- Indices de la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `venta_id` (`venta_id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id`);

--
-- Filtros para la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  ADD CONSTRAINT `ventas_cabecera_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD CONSTRAINT `ventas_detalle_ibfk_1` FOREIGN KEY (`venta_id`) REFERENCES `ventas_cabecera` (`id`),
  ADD CONSTRAINT `ventas_detalle_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
