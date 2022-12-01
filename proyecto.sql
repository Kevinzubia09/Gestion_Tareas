-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
<<<<<<< Updated upstream
-- Tiempo de generación: 28-11-2022 a las 01:40:12
=======
-- Tiempo de generación: 01-12-2022 a las 01:19:11
>>>>>>> Stashed changes
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
<<<<<<< Updated upstream
=======
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `rol_id` int(11) NOT NULL DEFAULT 1,
  `correo` int(11) NOT NULL,
  `contraseña` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `nombre`, `rol_id`, `correo`, `contraseña`, `status`) VALUES
(1, 'kevinzubia', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lector`
--

CREATE TABLE `lector` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `rol_id` int(1) NOT NULL DEFAULT 3,
  `correo` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lector`
--

INSERT INTO `lector` (`id`, `nombre`, `rol_id`, `correo`, `contraseña`, `status`) VALUES
(1, 'brayan', 3, '0', '0', 0);

-- --------------------------------------------------------

--
>>>>>>> Stashed changes
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
<<<<<<< Updated upstream
  `Nombre` varchar(40) NOT NULL
=======
  `nombre` varchar(40) NOT NULL
>>>>>>> Stashed changes
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias`
--

<<<<<<< Updated upstream
INSERT INTO `materias` (`id`, `Nombre`) VALUES
=======
INSERT INTO `materias` (`id`, `nombre`) VALUES
>>>>>>> Stashed changes
(1, 'Base De datos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `tarea` varchar(40) NOT NULL,
  `categoria` int(11) NOT NULL,
<<<<<<< Updated upstream
  `descripcion` varchar(200) NOT NULL,
  `Hora de registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
=======
  `asigando` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `hora-de-registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL,
  `Fecha-de-vencimiento` date NOT NULL,
  `tiempo` varchar(50) NOT NULL
>>>>>>> Stashed changes
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

<<<<<<< Updated upstream
INSERT INTO `proyectos` (`id`, `tarea`, `categoria`, `descripcion`, `Hora de registro`, `status`) VALUES
(1, 'Gestionar un Repositorio en Github', 1, 'Gestionar un repositorio en Github antes de las 12.00Am', '2022-11-27 23:56:12', 0);
=======
INSERT INTO `proyectos` (`id`, `tarea`, `categoria`, `asigando`, `descripcion`, `hora-de-registro`, `status`, `Fecha-de-vencimiento`, `tiempo`) VALUES
(1, 'Gestionar un Repositorio en Github', 1, '', 'Gestionar un repositorio en Github antes de las 12.00Am', '2022-11-27 23:56:12', 0, '2022-11-30', ''),
(3, 'checar base de datos', 1, '', 'vigilar la base de datos', '2022-11-30 22:43:39', 0, '2022-12-03', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'administrador'),
(2, 'usuario'),
(3, 'lector');
>>>>>>> Stashed changes

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
<<<<<<< Updated upstream
  `ID` int(11) NOT NULL,
  `Usuarios` varchar(60) NOT NULL
=======
  `id` int(11) NOT NULL,
  `usuarios` varchar(60) NOT NULL,
  `rol_id` int(1) NOT NULL DEFAULT 2,
  `correo` varchar(70) NOT NULL,
  `contraseña` varchar(60) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
>>>>>>> Stashed changes
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

<<<<<<< Updated upstream
INSERT INTO `usuarios` (`ID`, `Usuarios`) VALUES
(1, 'Kevin'),
(2, 'Alejandro');
=======
INSERT INTO `usuarios` (`id`, `usuarios`, `rol_id`, `correo`, `contraseña`, `status`) VALUES
(1, 'Kevin', 2, '', '', 0),
(2, 'Alejandro', 2, '', '', 0);
>>>>>>> Stashed changes

--
-- Índices para tablas volcadas
--

--
<<<<<<< Updated upstream
=======
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- Indices de la tabla `lector`
--
ALTER TABLE `lector`
  ADD PRIMARY KEY (`id`);

--
>>>>>>> Stashed changes
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< Updated upstream
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);
=======
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);
>>>>>>> Stashed changes

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
<<<<<<< Updated upstream
=======
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `lector`
--
ALTER TABLE `lector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
>>>>>>> Stashed changes
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
<<<<<<< Updated upstream
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
>>>>>>> Stashed changes

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
<<<<<<< Updated upstream
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
>>>>>>> Stashed changes
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
