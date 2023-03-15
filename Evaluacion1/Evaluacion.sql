-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2023 a las 01:56:10
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda nicofa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logra`
--

CREATE TABLE `logra` (
  `Tarjeta` int(16) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Sexo` int(11) NOT NULL,
  `Fecha de nacimiento` date NOT NULL,
  `Presupuesto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `logra`
--

INSERT INTO `logra` (`Tarjeta`, `Nombre`, `Correo`, `Sexo`, `Fecha de nacimiento`, `Presupuesto`) VALUES
(65471234, 'Brunette Sofia Lopez Chavira', '12bslc@gmail.com', 1, '0000-00-00', 3000000),
(65471234, 'Brunette Sofia Lopez Chavira', '12bslc@gmail.com', 1, '0000-00-00', 3000000),
(876555555, 'Nicolas felix Aguilasocho', 'nicofa@gmail.com', 0, '1990-03-15', 2000000),
(876543764, 'Melissa Chavez', 'melirisita@gmail.com', 1, '1998-08-22', 4500000),
(65471234, 'Jimena Lara', 'jimenita@gmail.com', 1, '1999-05-07', 3000000),
(328738978, 'Jorge Ibarra', 'ibarrageorge@hotmail.com', 0, '1968-01-11', 6250000),
(324738928, 'Ruben Rocha Magaña', 'rubencito@gmail.com', 0, '2005-05-11', 7400000),
(234567890, 'Kenia Guerrero', 'keni234@gmail.com', 1, '2000-04-13', 4000000),
(65471234, 'Luis Angel Castro', 'luisa54@gmail.com', 0, '2002-06-06', 2000000),
(381928915, 'Joseph Meza', 'josepheloir@gmail.com', 0, '2005-05-20', 7400000),
(245678976, 'Yuleini Lora', 'yulelor@gmail.com', 1, '2000-07-20', 4000000),
(234567890, 'Itzel Serrano', 'itsiser@gmail.com', 1, '2001-08-11', 5000000),
(87654323, 'Johnadab Espinoza', 'johnies@gmail.com', 1, '2003-01-06', 6000000),
(7654321, 'Giselle Lopez', 'gisilo@gmail.com', 1, '2002-02-17', 5000000),
(765439896, 'Sofia Chavira', 'sofisla@gmail.com', 1, '2004-03-30', 10000000),
(1235667897, 'Mariana Gastelum', 'marianiita@gmail.com', 1, '2003-03-17', 5000000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logra2`
--

CREATE TABLE `logra2` (
  `Nombre` varchar(200) NOT NULL,
  `Fecha de nacimiento` date NOT NULL,
  `Precio` int(11) NOT NULL,
  `Producto` varchar(200) NOT NULL,
  `Tamaño` int(11) NOT NULL,
  `sexo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `logra2`
--

INSERT INTO `logra2` (`Nombre`, `Fecha de nacimiento`, `Precio`, `Producto`, `Tamaño`, `sexo`) VALUES
('Dulce nuñez', '1998-08-22', 400, 'Bolsa rosa', 5, 1),
('ana rodelo', '2005-05-11', 7000, 'dUlces', 488, 1),
('Miguel Angel', '2000-07-20', 500, 'botas rojas', 27, 0),
('Rogelio camacho', '2001-08-11', 800, 'audifonos', 0, 0),
('carlos soto', '2003-01-06', 8900, 'bicicleta', 98, 0),
('hector campos', '2002-02-17', 9876, 'Celular', 0, 0),
('Braulio rodelo', '2004-03-30', 4000, 'Tenis', 26, 0),
('Brianda fernandez', '2003-03-17', 98700, 'computadora', 34, 1),
('Jesus valdez', '2003-03-09', 45678, 'television', 55, 0),
('angel revilla', '1990-06-08', 20, 'agua', 1, 0),
('melanie hernandez', '2005-02-01', 567, 'camisa', 6, 1),
('Julian juarez', '2003-06-08', 5000, 'tenis', 28, 0),
('julia lopez', '2001-03-01', 56789, 'computadora', 0, 0),
('william bustamante', '2002-04-28', 345, 'proteina', 1, 0),
('oscar leon', '1997-03-09', 234, 'camisa', 8, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
