-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2022 a las 16:07:08
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formula1`
--
CREATE DATABASE IF NOT EXISTS `formula1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `formula1`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuderia`
--

CREATE TABLE `escuderia` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `constructor` varchar(100) NOT NULL,
  `chasis` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `pais` int(10) NOT NULL,
  `piloto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `escuderia`
--

INSERT INTO `escuderia` (`id`, `nombre`, `constructor`, `chasis`, `imagen`, `pais`, `piloto`) VALUES
(1, 'Alfa Romeo Racing Orlen', 'Alfa Romeo Racing-Ferrari', 'C41', 'alfaRomeoRacingC41.jpg', 14, '1,2'),
(2, 'Scuderia AlphaTauri Honda', 'Alpha Tauri-Honda', 'AT02', 'alphaTauriAT02.jpg', 6, '3,4'),
(3, 'Alpine F1 Team', 'Alpine-Renault', 'A521', 'alpineA521.jpg', 4, '5,6'),
(4, 'Aston Martin Cognizant F1 Team', 'Aston Martin-Mercedes', 'AMR21', 'astonMartinAMR21.jpg', 15, '7,8'),
(5, 'Scuderia Ferrari Mission Winnow', 'Ferrari', 'SF21', 'ferrariSF21.jpg', 6, '9,10'),
(6, 'Uralkali Haas F1 Team', 'Haas-Ferrari', 'VF-21	', 'haasVF21.jpg', 16, '11,12'),
(7, 'Mercedes-AMG Petronas F1 Team', 'Mercedes', 'F1W12', 'mercedesW12.jpg', 5, '13,14'),
(8, 'Red Bull Racing Honda', 'Red Bull Racing Honda', 'RB16B', 'redBullRacingRB16.jpg', 1, '13,16'),
(9, 'Williams Racing', 'Williams-Mercedes', 'FW43B', 'williamsFW43.jpg', 15, '18,19'),
(10, 'McLaren F1 Team', 'McLaren-Mercedes', 'MCL35M', 'mcLarenMCL35.jpg', 15, '20,21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`, `imagen`) VALUES
(1, 'Austria', 'austria.png'),
(2, 'Canada', 'canada.png'),
(3, 'Finlandia', 'finlandia.png'),
(4, 'Francia', 'francia.png'),
(5, 'Alemania', 'alemania.png'),
(6, 'Italia', 'italia.png'),
(7, 'Japon', 'japon.png'),
(8, 'Mexico', 'mexico.png'),
(9, 'Monaco', 'monaco.png'),
(10, 'Paises Bajos', 'paisesBajos.png'),
(11, 'Polonia', 'polonia.png'),
(12, 'Rusia', 'rusia.png'),
(13, 'España', 'españa.png'),
(14, 'Suiza', 'suiza.png'),
(15, 'Reino Unido', 'reinoUnido.png'),
(16, 'Estados Unidos', 'estadosUnidos.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piloto`
--

CREATE TABLE `piloto` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `dorsal` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `pais` int(10) NOT NULL,
  `escuderia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `piloto`
--

INSERT INTO `piloto` (`id`, `nombre`, `dorsal`, `imagen`, `pais`, `escuderia`) VALUES
(1, 'Kimi Raikkonen', '7', 'kimiRaikkonen.jpg', 3, 1),
(2, 'Robert Kubica	', '88', 'robertKubica.jpg', 11, 1),
(3, 'Antonio Giovinazzi', '99', 'antonioGiovinazzi.jpg', 6, 2),
(4, 'Pierre Gasly', '10', 'pierreGasly.jpg', 4, 2),
(5, 'Yuki Tsunoda', '22', 'yukiTsunoda.jpg', 7, 3),
(6, 'Fernando Alonso', '14', 'fernandoAlonso.jpg', 13, 3),
(7, 'Esteban Ocon', '31', 'estebanOcon.jpg', 4, 4),
(8, 'Sebastian Vettel', '5', 'sebastianVettel.jpg', 5, 4),
(9, 'Lance Stroll', '18', 'lanceStroll.jpg', 2, 5),
(10, 'Charles Leclerc', '16', 'charlesLeclerc.jpg', 9, 5),
(11, 'Carlos Sainz Jr', '55', 'carlosSainzJr.jpg', 13, 6),
(12, 'Nikita Mazepin', '9', 'nikitaMazepin.jpg', 12, 6),
(13, 'Mick Schumacher', '47', 'mickSchumacher.jpg', 5, 7),
(14, 'Daniel Ricciardo', '3', 'danielRicciardo.jpg', 1, 7),
(15, 'Lando Norris', '4', 'landoNorris.jpg', 15, 8),
(16, 'Lewis Hamilton', '44', 'lewisHamilton.jpg', 15, 8),
(17, 'Valtteri Bottas', '77', 'valtteriBottas.jpg', 3, 9),
(18, 'Sergio Pérez', '11', 'sergioPerez.jpg', 8, 9),
(19, 'Max Verstappen', '33', 'maxVerstappen.jpg', 10, 10),
(20, 'Nicholas Latifi', '6', 'nicholasLatifi.jpg', 2, 10),
(21, 'George Russell', '63', 'georgeRussell.jpg', 15, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `contrasenia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `contrasenia`) VALUES
(1, 'E Olsen', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `escuderia`
--
ALTER TABLE `escuderia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pais` (`pais`) USING BTREE;

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `piloto`
--
ALTER TABLE `piloto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pais` (`pais`) USING BTREE,
  ADD KEY `escuderia` (`escuderia`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `escuderia`
--
ALTER TABLE `escuderia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `piloto`
--
ALTER TABLE `piloto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `escuderia`
--
ALTER TABLE `escuderia`
  ADD CONSTRAINT `escuderia_ibfk_1` FOREIGN KEY (`pais`) REFERENCES `pais` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `piloto`
--
ALTER TABLE `piloto`
  ADD CONSTRAINT `piloto_ibfk_1` FOREIGN KEY (`pais`) REFERENCES `pais` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
