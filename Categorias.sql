-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2023 a las 01:46:18
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
-- Base de datos: `tienda_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Categorias`
--

INSERT INTO `Categorias` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Asus TUF Gaming A15 / FA506ICB-HN163W / AMD Ryzen 7 / NVIDIA GeForce RTX 3050 / 512GB SSD / 8GB RAM ', 'ASUS TUF Gaming A15 es una laptop gamer con Windows 11 Home diseñada para servirte la victoria en bandeja. Con hasta la nueva GPU GeForce RTX 3050 ofrece una gran fluidez gráfica en la pantalla de 144'),
(2, 'Logitech G733 LIGHTSPEED Audífonos Inalámbricos Gaming, LIGHTSPEED, RGB LIGHTSYNC, tecnología de mic', 'La tecnología inalámbrica LIGHTSPEED te proporciona más de 29 horas de duración de batería y hasta 20 metros de libertad inalámbrica confiable\r\nJuega sin enredarte con un cable. Relájate y sumérgete e'),
(3, 'Toshiba Pantalla 43&#34; Pulgadas Full HD LED Smart TV VIDAA 43V35LM (2022)\r\nToshiba Pantalla 43\" Pu', 'Presiona y pregunta a Alexa Use el Alexa Voice Remote incluido para administrar la potencia, el volumen, la navegación, la reproducción y el cambio de entrada del televisor\r\nO simplemente presione el '),
(4, '\r\n\r\n\r\n\r\n\r\n\r\n\r\nVIDEO\r\nRazer Razer Huntsman V2 Teclado Óptico Gamer, (Clicky Purple Switch) - Layout e', 'Switches ópticos Razer Clicky para una actuación ultrarrápida con retroalimentación nítida y táctil\r\nTeclas PBT Doubleshot para un acabado resistente y texturizado\r\nSound Dampening Foam: para una mejo'),
(5, 'Logitech G502 LIGHTSPEED Mouse Gaming Inalámbrico, HERO 25K, 25,600 DPI, RGB, Peso Reducido, 11 Boto', 'Diseño de Alto Rendimiento\r\nPorque el mundo entero lo estaba esperando, el mouse consentido de Logitech G ahora también es inalámbrico. Disfruta de hasta 60 horas de juego ininterrumpido, con botones ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Categorias`
--
ALTER TABLE `Categorias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Categorias`
--
ALTER TABLE `Categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
