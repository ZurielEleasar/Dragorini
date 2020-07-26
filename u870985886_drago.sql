-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-08-2019 a las 09:26:14
-- Versión del servidor: 10.1.40-MariaDB
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
-- Base de datos: `u870985886_drago`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `titulo`) VALUES
(3, 'logo8.png'),
(5, 'logo10.png'),
(6, 'logo11.png'),
(8, 'logo13.png'),
(10, 'logo3.png'),
(11, 'logo4.png'),
(12, '300 x 300 _300x300 copia 2.png'),
(13, '300 x 300 _300x300 copia 3.png'),
(14, '300 x 300 _300x300 copia 4.png'),
(15, '300 x 300 _300x300 copia.png'),
(16, '300 x 300 _300x300.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientesslider`
--

CREATE TABLE `clientesslider` (
  `id` int(11) NOT NULL,
  `imagen1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen3` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen4` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen5` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen6` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen7` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen8` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen9` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen10` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen11` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen12` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `titulo`, `imagen`, `telefono`, `correo`) VALUES
(1, '', '', '998705382', 'tech@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contentmarketing`
--

CREATE TABLE `contentmarketing` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contentmarketing`
--

INSERT INTO `contentmarketing` (`id`, `titulo`, `imagen`, `contenido`) VALUES
(1, '', 'Landing_550 copia 2-min.png', 'Nuestro equipo creativo de Content Marketing evoluciona tus<br />contenidos hasta convertirte en un comunicador efectivo, creando<br />nuevas formas para que el público se identifique e interactúe con<br />los mensajes.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disenoweb`
--

CREATE TABLE `disenoweb` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `disenoweb`
--

INSERT INTO `disenoweb` (`id`, `titulo`, `imagen`, `contenido`) VALUES
(1, '', 'Landing_450-04-min.png', 'Desarrollamos sitios web acompañados de una estrategia de<br />experiencia de usuario orientada a cumplir tus objetivos de<br />marketing en especifico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotografiaproduccionmultimedia`
--

CREATE TABLE `fotografiaproduccionmultimedia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `fotografiaproduccionmultimedia`
--

INSERT INTO `fotografiaproduccionmultimedia` (`id`, `titulo`, `imagen`, `contenido`) VALUES
(1, '', 'Landing_550 copia 5-min.png', '- Videos Corporativos<br />- Fotografía de Producto <br />- Video Marketing<br />- Motion Graphics');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE `inicio` (
  `id` int(11) NOT NULL,
  `imagen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`id`, `imagen`, `titulo`, `contenido`) VALUES
(1, 'Landing_FotoInicio-min.png', 'Marketing que<br />transforma', 'Creamos estrategias transmedia que posicionará tu<br />marca en los canales de comunicación correcto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `correo` varchar(123) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `clave` varchar(200) NOT NULL
) ENGINE=MEMORY DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `correo`, `usuario`, `clave`) VALUES
(8, 'stdigital@outlook.com', 'admin', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85'),
(9, 'zurieleleasar@gmail.com', 'Zuriel', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mediosdecomunicacion`
--

CREATE TABLE `mediosdecomunicacion` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido1` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mediosdecomunicacion`
--

INSERT INTO `mediosdecomunicacion` (`id`, `titulo`, `imagen`, `contenido1`) VALUES
(1, '', 'Landing_550 copia 4-min.png', '- Elaboración de discursos<br />- Convocatoria de prensa<br />- Boletines de prensa<br />- Redacción de artículos para medios impresos o digitales.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personalbranding`
--

CREATE TABLE `personalbranding` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personalbranding`
--

INSERT INTO `personalbranding` (`id`, `titulo`, `imagen`, `contenido`) VALUES
(1, '', 'Landing_550 copia 3-min.png', 'Desarrollo personal que consiste en considerar a una persona como una marca, que al igual que las marcas comerciales, debe ser elaborada, transmitida y protegida, con ánimo de diferenciarse y conseguir mayor éxito en las relaciones sociales ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `titulo`, `imagen`, `contenido`) VALUES
(1, '', '', 'En una época en la que todos los usuarios conectados, las empresas<br />no pueden ser la excepción. Consulta nuestra sección de Servicios<br />para saber cómo podemos llevarte al siguiente nivel.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `titulo`, `imagen`, `contenido`) VALUES
(1, '', 'Landing_450-03-min.png', 'Creamos contenido visualmente atractivo, pero principalmente buscamos la forma de tener un impacto positivo en tus resultados de negocio.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `correo`, `password`, `status`) VALUES
(1, 'sergiotadeo', 'stdigital@outlook.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 1),
(2, 'sergiotadeo1', 'stdigitalk@outlook.com', '25f9e794323b453885f5181f1b624d0b', 1),
(3, 'prueba1', 'prueba1@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 1),
(4, 'prueba2', 'prueba2@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 1),
(5, 'prueba3', 'prueba3@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 1),
(6, 'sadasd', 'asdasd@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 1),
(7, 'sergio', 'sergio@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 1),
(8, 'sergio', 'sergio@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 1),
(9, 'sergio', 'stdigital@outlook.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientesslider`
--
ALTER TABLE `clientesslider`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contentmarketing`
--
ALTER TABLE `contentmarketing`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `disenoweb`
--
ALTER TABLE `disenoweb`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fotografiaproduccionmultimedia`
--
ALTER TABLE `fotografiaproduccionmultimedia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inicio`
--
ALTER TABLE `inicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `mediosdecomunicacion`
--
ALTER TABLE `mediosdecomunicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personalbranding`
--
ALTER TABLE `personalbranding`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `clientesslider`
--
ALTER TABLE `clientesslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contentmarketing`
--
ALTER TABLE `contentmarketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `disenoweb`
--
ALTER TABLE `disenoweb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `fotografiaproduccionmultimedia`
--
ALTER TABLE `fotografiaproduccionmultimedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `inicio`
--
ALTER TABLE `inicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `mediosdecomunicacion`
--
ALTER TABLE `mediosdecomunicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `personalbranding`
--
ALTER TABLE `personalbranding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
