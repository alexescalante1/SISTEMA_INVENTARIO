-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2021 at 05:32 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mibd`
--

-- --------------------------------------------------------

--
-- Table structure for table `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `dniAdmin` text COLLATE utf8_spanish_ci NOT NULL,
  `userAdmin` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `administradores`
--

INSERT INTO `administradores` (`id`, `dniAdmin`, `userAdmin`, `nombre`, `email`, `foto`, `password`, `perfil`, `estado`, `fecha`) VALUES
(5, '12345674', '', 'Alex Escalante ONE', 'admin@gmail.com', 'vistas/img/perfiles/448.jpg', '$2a$07$asxx54ahjppf45sd87a5aunxs9bkpyGmGE/.vekdjFg83yRec789S', 'administrador', 1, '2021-01-31 02:01:50'),
(6, '12345677', '', 'Alex Escalante TWO', 'editor@gmail.com', 'vistas/img/perfiles/701.jpg', '$2a$07$asxx54ahjppf45sd87a5auBnK0T8g/TaNYrkZQmRmlyohJLox8X9S', 'laboratorista', 1, '2021-01-31 02:10:25'),
(7, '12345678', '', 'Fredy ONE', 'fredy@gmail.com', 'vistas/img/perfiles/719.jpg', '$2a$07$asxx54ahjppf45sd87a5au8yKTE0AUTJwdRPIDIsqXT2Utnq6TZtq', 'administrador', 1, '2021-01-31 01:59:29'),
(8, '12345678', '', 'Jose Marin', 'laboratorista@gmail.com', 'vistas/img/perfiles/897.jpg', '$2a$07$asxx54ahjppf45sd87a5auBMC0hyDzSIj.ET6H5mmag4zkgE6FuWe', 'laboratorista', 1, '2021-01-31 02:09:18');

-- --------------------------------------------------------

--
-- Table structure for table `articulos`
--

CREATE TABLE `articulos` (
  `idArticulo` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `idDetalleArticulo` int(11) NOT NULL,
  `codigoPatrimonial` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articulos`
--

INSERT INTO `articulos` (`idArticulo`, `estado`, `fecha`, `idDetalleArticulo`, `codigoPatrimonial`) VALUES
(74, 2, '2021-01-25 23:38:29', 160, '132321321'),
(77, 2, '2021-01-25 23:42:23', 160, '213123213'),
(78, 2, '2021-01-25 23:42:28', 160, '123123213'),
(79, 2, '2021-01-25 23:42:39', 160, '789678678'),
(80, 2, '2021-01-25 23:43:06', 160, '324234234'),
(83, 2, '2021-01-26 00:04:57', 160, '432435435'),
(84, 2, '2021-01-26 08:49:17', 160, '342524555'),
(85, 1, '2021-01-26 09:01:17', 181, '675675675'),
(86, 2, '2021-01-26 22:31:38', 164, '213432423'),
(87, 2, '2021-01-26 22:37:22', 74, '134123213'),
(88, 2, '2021-01-26 22:37:28', 74, '689678768'),
(89, 2, '2021-01-26 22:37:38', 74, '345345345'),
(90, 2, '2021-01-26 22:47:56', 160, '235245245'),
(91, 2, '2021-01-26 22:48:03', 160, '245453453'),
(92, 2, '2021-01-26 22:48:09', 160, '587568568'),
(93, 0, '2021-01-26 23:33:09', 160, '312332133'),
(94, 2, '2021-01-26 23:33:32', 160, '324434444'),
(95, 2, '2021-01-27 12:45:43', 160, '453423123'),
(96, 0, '2021-01-29 12:54:16', 175, '213214134'),
(97, 2, '2021-01-29 12:54:22', 175, '351351345'),
(98, 1, '2021-01-31 00:02:00', 162, '232132133'),
(99, 2, '2021-01-31 00:02:18', 68, '223234234'),
(100, 2, '2021-02-01 21:11:51', 175, '123456789'),
(101, 2, '2021-02-01 21:23:26', 160, '455455455'),
(102, 2, '2021-02-06 18:10:29', 213, '123456879'),
(103, 2, '2021-02-06 18:10:45', 213, '123456784'),
(104, 1, '2021-02-09 21:49:07', 72, '542453455'),
(105, 2, '2021-02-09 21:52:19', 214, '213213213'),
(106, 2, '2021-02-09 21:52:31', 214, '548645454'),
(107, 2, '2021-02-11 21:09:56', 214, '213434234'),
(108, 1, '2021-02-11 21:10:02', 214, '234234234'),
(109, 1, '2021-02-11 21:10:13', 214, '234234344'),
(110, 2, '2021-02-11 23:06:50', 216, '312321321'),
(111, 1, '2021-02-11 23:06:58', 216, '213213333'),
(112, 1, '2021-02-11 23:07:04', 216, 'qweqweqwe'),
(113, 1, '2021-02-11 23:07:38', 216, 'eqweqweee');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo` text COLLATE utf8_spanish_ci NOT NULL,
  `img` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `ruta`, `tipo`, `img`, `estado`, `fecha`) VALUES
(1, 'sin-categoria', 'sin-categoria', 'vistas/img/banner/default.jpg', 1, '2018-03-26 13:29:51'),
(4, 'calzado', 'categorias', 'vistas/img/banner/ropaHombre.jpg', 1, '2018-03-26 15:46:29');

-- --------------------------------------------------------

--
-- Table structure for table `cabeceras`
--

CREATE TABLE `cabeceras` (
  `id` int(11) NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `palabrasClaves` text COLLATE utf8_spanish_ci NOT NULL,
  `portada` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `cabeceras`
--

INSERT INTO `cabeceras` (`id`, `ruta`, `titulo`, `descripcion`, `palabrasClaves`, `portada`, `fecha`) VALUES
(1, 'inicio', 'Tienda Virtual', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam accusantium enim esse eos officiis sit officia', 'Lorem ipsum, dolor sit amet, consectetur, adipisicing, elit, Quisquam, accusantium, enim, esse', 'vistas/img/cabeceras/default.jpg', '2017-11-17 14:58:16'),
(2, 'desarrollo-web', 'Desarrollo Web', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam accusantium enim esse eos officiis sit officia', 'Lorem ipsum, dolor sit amet, consectetur, adipisicing, elit, Quisquam, accusantium, enim, esse', 'vistas/img/cabeceras/web.jpg', '2017-11-17 14:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `ruta` text NOT NULL,
  `titulo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `ruta`, `titulo`) VALUES
(1, 'equipos-electronicos', 'Equipos Electronicos'),
(2, 'moviliario', 'Moviliario'),
(3, 'conectores', 'Conectores'),
(37, 'celulares-1', 'Celulares 1'),
(38, 'laboratorio-telematica', 'Laboratorio telematica'),
(39, 'you-know', 'you know'),
(40, 'otro-lab', 'otro lab');

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `oferta` int(11) NOT NULL,
  `precioOferta` float NOT NULL,
  `descuentoOferta` int(11) NOT NULL,
  `imgOferta` text COLLATE utf8_spanish_ci NOT NULL,
  `finOferta` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `ruta`, `estado`, `oferta`, `precioOferta`, `descuentoOferta`, `imgOferta`, `finOferta`, `fecha`) VALUES
(5, 'CURSOS', 'cursos', 1, 1, 9.99, 0, 'vistas/img/ofertas/cursos.jpg', '2018-03-29 23:59:59', '2018-03-15 22:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `calificacion` float NOT NULL,
  `comentario` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_usuario`, `id_producto`, `calificacion`, `comentario`, `fecha`) VALUES
(1, 86, 496, 3.5, 'Lo mejor de PHP', '2018-02-13 16:39:25'),
(2, 86, 464, 4.5, 'Excelente', '2018-02-13 15:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `comercio`
--

CREATE TABLE `comercio` (
  `id` int(11) NOT NULL,
  `impuesto` float NOT NULL,
  `envioNacional` float NOT NULL,
  `envioInternacional` float NOT NULL,
  `tasaMinimaNal` float NOT NULL,
  `tasaMinimaInt` float NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `modoPaypal` text COLLATE utf8_spanish_ci NOT NULL,
  `clienteIdPaypal` text COLLATE utf8_spanish_ci NOT NULL,
  `llaveSecretaPaypal` text COLLATE utf8_spanish_ci NOT NULL,
  `modoPayu` text COLLATE utf8_spanish_ci NOT NULL,
  `merchantIdPayu` int(11) NOT NULL,
  `accountIdPayu` int(11) NOT NULL,
  `apiKeyPayu` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `comercio`
--

INSERT INTO `comercio` (`id`, `impuesto`, `envioNacional`, `envioInternacional`, `tasaMinimaNal`, `tasaMinimaInt`, `pais`, `modoPaypal`, `clienteIdPaypal`, `llaveSecretaPaypal`, `modoPayu`, `merchantIdPayu`, `accountIdPayu`, `apiKeyPayu`) VALUES
(1, 19, 1, 2, 10, 15, 'MX', 'sandbox', 'AecffvSZfOgj6g1MkrVmz12ACMES2-InggmWCpU5CblR-z5WwkYBYjmLsh9yPRLuRape1ahjqpcJet4N', 'EAx1SVMHGV6MJKwl-pnOSzaJASlAINZdYRdS--wkgaPYLevcGw88V0PU_W_rg00xLkBknybCjsO_xzA0', 'sandbox', 508029, 512321, '4Vj8eK4rloUd272L48hsrarnUA');

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `envio` int(11) NOT NULL,
  `metodo` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `detalle` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `pago` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `compras`
--

INSERT INTO `compras` (`id`, `id_usuario`, `id_producto`, `envio`, `metodo`, `email`, `direccion`, `pais`, `cantidad`, `detalle`, `pago`, `fecha`) VALUES
(1, 86, 496, 0, 'paypal', '', 'barranca', 'pe', 0, NULL, '50', '2018-03-27 19:18:50'),
(2, 86, 464, 2, 'payu', '', 'barranca', 'pe', 0, NULL, '40', '2018-03-27 20:44:55'),
(3, 87, 496, 0, 'paypal', '', 'urb 17 de mayo mz a lt 1-2', 'pe', 0, NULL, '70', '2018-03-27 16:08:51'),
(12, 2, 496, 0, 'paypal', 'tutorialesatualcance-buyer@hotmail.com', '1 Main St, San Jose, CA, 95131', 'US', 0, NULL, '10', '2017-07-05 22:59:10'),
(13, 2, 464, 2, 'paypal', 'tutorialesatualcance-buyer@hotmail.com', '1 Main St, San Jose, CA, 95131', 'US', 0, NULL, '10', '2018-03-27 14:13:12'),
(14, 2, 497, 0, 'paypal', 'tutorialesatualcance-buyer@hotmail.com', '1 Main St, San Jose, CA, 95131', 'US', 0, NULL, '10', '2017-08-21 22:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `deseos`
--

CREATE TABLE `deseos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `deseos`
--

INSERT INTO `deseos` (`id`, `id_usuario`, `id_producto`, `fecha`) VALUES
(1, 9, 469, '2018-03-26 22:03:34'),
(2, 9, 469, '2018-03-26 22:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `detallearticulo`
--

CREATE TABLE `detallearticulo` (
  `idDetalleArticulo` int(11) NOT NULL,
  `ruta` text NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  `portada` text NOT NULL,
  `multimedia` text NOT NULL,
  `prestados` int(11) NOT NULL,
  `peso` float NOT NULL,
  `precio` float NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `palabrasClave` text NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detallearticulo`
--

INSERT INTO `detallearticulo` (`idDetalleArticulo`, `ruta`, `titulo`, `descripcion`, `disponible`, `portada`, `multimedia`, `prestados`, `peso`, `precio`, `idCategoria`, `palabrasClave`, `fecha`) VALUES
(68, 'data-display', 'Data Display', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 1, 'vistas/img/productos/data-display.png', '[{\"foto\":\"vistas/img/multimedia/data-display/data2.png\"},{\"foto\":\"vistas/img/multimedia/data-display/data1.png\"}]', 0, 1, 1500, 1, 'proyector', '2021-01-23 09:32:00'),
(72, 'laptop-hp', 'Laptop HP', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 1, 'vistas/img/productos/laptop-hp.jpg', '[{\"foto\":\"vistas/img/multimedia/laptop-hp/5_27.jpg\"},{\"foto\":\"vistas/img/multimedia/laptop-hp/6_23_1.jpg\"},{\"foto\":\"vistas/img/multimedia/laptop-hp/16963488_2.jpg\"}]', 50, 2, 1550, 1, 'ordenador fdg', '2021-01-23 09:32:33'),
(74, 'monitor-asus', 'Monitor Asus', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 1, 'vistas/img/productos/monitor-asus.jpg', '[{\"foto\":\"vistas/img/multimedia/monitor-asus/monitor2.jpg\"},{\"foto\":\"vistas/img/multimedia/monitor-asus/monitor1.jpg\"}]', 0, 2, 1000, 1, 'pantalla', '2021-01-23 09:32:33'),
(93, 'mesa', 'Mesa', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 1, 'vistas/img/productos/mesa.jpg', '[{\"foto\":\"vistas/img/multimedia/mesa/mesa2.jpg\"},{\"foto\":\"vistas/img/multimedia/mesa/mesa1.jpg\"}]', 0, 1, 120, 2, 'asdasd asdas', '2021-01-23 09:32:33'),
(130, 'arduino-uno', 'Arduino Uno', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 1, 'vistas/img/productos/arduino-uno.png', '[{\"foto\":\"vistas/img/multimedia/arduino-uno/arduino2.png\"},{\"foto\":\"vistas/img/multimedia/arduino-uno/arduino1.png\"}]', 0, 0.1, 40, 1, 'asasd', '2021-01-23 09:32:33'),
(160, 'arduino-nano', 'Arduino Nano', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 1, 'vistas/img/productos/arduino-nano.jpg', '[{\"foto\":\"vistas/img/multimedia/arduino-nano/arduino2.jpg\"},{\"foto\":\"vistas/img/multimedia/arduino-nano/arduino1.jpg\"}]', 800, 0.2, 25, 1, 'asd', '2021-01-23 09:32:33'),
(162, 'cable-vga', 'Cable VGA', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 1, 'vistas/img/productos/cable-vga.jpg', '[{\"foto\":\"vistas/img/multimedia/cable-vga/dsffsdf.jpg\"},{\"foto\":\"vistas/img/multimedia/cable-vga/trdfdsf.jpg\"}]', 82, 0, 0, 3, 'as', '2021-01-23 09:32:33'),
(164, 'cable-hdmi', 'Cable HDMI', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 1, 'vistas/img/productos/cable-hdmi.jpg', '[{\"foto\":\"vistas/img/multimedia/cable-hdmi/dsffsdf.jpg\"},{\"foto\":\"vistas/img/multimedia/cable-hdmi/trdfdsf.jpg\"}]', 0, 0, 0, 3, 'sad', '2021-01-23 09:32:33'),
(175, 'laptop-asus', 'Laptop ASUS', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 1, 'vistas/img/productos/laptop-asus.jpg', '[{\"foto\":\"vistas/img/multimedia/laptop-asus/6_23_1.jpg\"},{\"foto\":\"vistas/img/multimedia/laptop-asus/16963488_2.jpg\"}]', 1420, 2, 4000, 1, 'pc', '2021-01-23 09:32:33'),
(181, 'computadora-gaming', 'Computadora Gaming', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 0, 'vistas/img/productos/computadora-gaming.jpg', '[{\"foto\":\"vistas/img/multimedia/computadora-gaming/images.jpg\"},{\"foto\":\"vistas/img/multimedia/computadora-gaming/ef416153a7c3d69e3f09cfbcbc2e2359.jpg\"}]', 0, 4, 5000, 1, 'jaja', '2021-01-23 09:32:33'),
(213, 'dada', 'dada', 'zas', 1, 'vistas/img/productos/dada.jpg', '[{\"foto\":\"vistas/img/multimedia/dada/e66bd27867a1695d5acb79107be4fe69405438228f14566622cc5b2983b8be87.jpg\"},{\"foto\":\"vistas/img/multimedia/dada/images.jpg\"},{\"foto\":\"vistas/img/multimedia/dada/El-negocio-de-hardware-para-PC-Gamer-aumentará-en-3.600-millones-de-dólares-en-2020-debido-a-la-pandemia-de-COVID-19-2-1000x576.jpg\"}]', 8, 33, 12, 38, 'paspas', '2021-02-06 18:09:28'),
(214, 'mouse', 'mouse', 'xd', 1, 'vistas/img/productos/mouse.jpg', '[{\"foto\":\"vistas/img/multimedia/mouse/7391dbb71127bb931b5320d644766fdd.jpg\"},{\"foto\":\"vistas/img/multimedia/mouse/6451f32062ae5487a44a107d63f2cbde-daptv54.jpg\"},{\"foto\":\"vistas/img/multimedia/mouse/20329-sasuke-uchiha-naruto-1920x1080-anime-wallpaper.jpg\"}]', 0, 2, 123123, 38, 'will', '2021-02-09 21:51:53'),
(215, 'asddasd', 'asddasd', 'asdasd', 1, 'vistas/img/productos/asddasd.jpg', '[{\"foto\":\"vistas/img/multimedia/asddasd/icono.png\"},{\"foto\":\"vistas/img/multimedia/asddasd/El-negocio-de-hardware-para-PC-Gamer-aumentará-en-3.600-millones-de-dólares-en-2020-debido-a-la-pandemia-de-COVID-19-2-1000x576.jpg\"},{\"foto\":\"vistas/img/multimedia/asddasd/f1a81ad0a1b15ca68c74b41ae5f649ac31bf95e8bdcb9167ce09b35ba401b89b.jpg\"},{\"foto\":\"vistas/img/multimedia/asddasd/EJ348zYXkAEgmIq.jpg\"}]', 0, 0, 0, 38, 'asdasd', '2021-02-11 08:05:12'),
(216, 'asdasd', 'asdasd', 'asdfasd', 1, 'vistas/img/productos/asdasd.png', '[{\"foto\":\"vistas/img/multimedia/asdasd/monitor2.jpg\"},{\"foto\":\"vistas/img/multimedia/asdasd/monitor1.jpg\"},{\"foto\":\"vistas/img/multimedia/asdasd/Logo_UNAP.png\"}]', 0, 202, 12, 40, 'asdasd', '2021-02-11 23:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `notificacion`
--

CREATE TABLE `notificacion` (
  `idNotificacion` int(11) NOT NULL,
  `tipoDocTitular` int(11) NOT NULL,
  `numDocTitular` text NOT NULL,
  `nombreTitular` text NOT NULL,
  `apellidoTitular` text NOT NULL,
  `cantidad` int(11) NOT NULL,
  `dias` int(11) NOT NULL,
  `detalle` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `visto` int(11) NOT NULL,
  `idDetalleArticulo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notificacion`
--

INSERT INTO `notificacion` (`idNotificacion`, `tipoDocTitular`, `numDocTitular`, `nombreTitular`, `apellidoTitular`, `cantidad`, `dias`, `detalle`, `fecha`, `visto`, `idDetalleArticulo`) VALUES
(105, 0, '162894', 'Alex escalante maron', '', 1, 3, 'sadasd', '2021-02-12 04:05:53', 1, 160),
(113, 0, '12345678', 'Docente Xd', '', 1, 3, 'a', '2021-02-12 04:05:50', 1, 160),
(114, 0, '12345678', 'Docente Xd', '', 1, 12, 'as', '2021-02-12 04:05:48', 1, 160),
(115, 0, '12345678', 'Docente Xd', '', 1, 3, 'xd pw', '2021-02-12 04:05:46', 1, 74),
(117, 0, '162894', 'Alex escalante maron', '', 1, 3, 'onegai', '2021-02-12 03:25:41', 1, 160),
(118, 0, '162894', 'Alex escalante maron', '', 1, 6, 'a', '2021-02-12 04:02:22', 1, 74),
(119, 0, '162894', 'Alex escalante maron', '', 1, 3, 'yolo', '2021-02-12 04:04:36', 1, 74),
(120, 0, '162894', 'Alex escalante maron', '', 1, 3, 'fgsdfdsf', '2021-02-12 03:55:48', 1, 160),
(121, 0, '162894', 'Alex escalante maron', '', 1, 3, 'trabajos', '2021-02-12 03:55:40', 1, 160);

-- --------------------------------------------------------

--
-- Table structure for table `notificaciones`
--

CREATE TABLE `notificaciones` (
  `id` int(11) NOT NULL,
  `nuevosUsuarios` int(11) NOT NULL,
  `nuevasVentas` int(11) NOT NULL,
  `nuevasVisitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `notificaciones`
--

INSERT INTO `notificaciones` (`id`, `nuevosUsuarios`, `nuevasVentas`, `nuevasVisitas`) VALUES
(1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `plantilla`
--

CREATE TABLE `plantilla` (
  `id` int(11) NOT NULL,
  `barraSuperior` text COLLATE utf8_spanish_ci NOT NULL,
  `textoSuperior` text COLLATE utf8_spanish_ci NOT NULL,
  `colorFondo` text COLLATE utf8_spanish_ci NOT NULL,
  `colorTexto` text COLLATE utf8_spanish_ci NOT NULL,
  `logo` text COLLATE utf8_spanish_ci NOT NULL,
  `icono` text COLLATE utf8_spanish_ci NOT NULL,
  `redesSociales` text COLLATE utf8_spanish_ci NOT NULL,
  `apiFacebook` text COLLATE utf8_spanish_ci NOT NULL,
  `pixelFacebook` text COLLATE utf8_spanish_ci NOT NULL,
  `googleAnalytics` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `plantilla`
--

INSERT INTO `plantilla` (`id`, `barraSuperior`, `textoSuperior`, `colorFondo`, `colorTexto`, `logo`, `icono`, `redesSociales`, `apiFacebook`, `pixelFacebook`, `googleAnalytics`, `fecha`) VALUES
(1, '#000000', '#ffffff', '#000000', '#ffffff', 'vistas/img/plantilla/logo.png', 'vistas/img/plantilla/icono.png', '[{\"red\":\"fa-facebook\",\"estilo\":\"facebookBlanco\",\"url\":\"http://facebook.com/\",\"activo\":1},{\"red\":\"fa-youtube\",\"estilo\":\"youtubeBlanco\",\"url\":\"http://youtube.com/\",\"activo\":1},{\"red\":\"fa-twitter\",\"estilo\":\"twitterBlanco\",\"url\":\"http://twitter.com/\",\"activo\":1},{\"red\":\"fa-google-plus\",\"estilo\":\"google-plusBlanco\",\"url\":\"http://google.com/\",\"activo\":1},{\"red\":\"fa-instagram\",\"estilo\":\"instagramBlanco\",\"url\":\"http://instagram.com/\",\"activo\":1}]', '\r\n      		<script>   window.fbAsyncInit = function() {     FB.init({       appId      : \'131737410786111\',       cookie     : true,       xfbml      : true,       version    : \'v2.10\'     });            FB.AppEvents.logPageView();             };    (function(d, s, id){      var js, fjs = d.getElementsByTagName(s)[0];      if (d.getElementById(id)) {return;}      js = d.createElement(s); js.id = id;      js.src = \"https://connect.facebook.net/en_US/sdk.js\";      fjs.parentNode.insertBefore(js, fjs);    }(document, \'script\', \'facebook-jssdk\'));  </script>\r\n      		', '\r\n  			<!-- Facebook Pixel Code --> 	<script> 	  !function(f,b,e,v,n,t,s) 	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod? 	  n.callMethod.apply(n,arguments):n.queue.push(arguments)}; 	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\'; 	  n.queue=[];t=b.createElement(e);t.async=!0; 	  t.src=v;s=b.getElementsByTagName(e)[0]; 	  s.parentNode.insertBefore(t,s)}(window, document,\'script\', 	  \'https://connect.facebook.net/en_US/fbevents.js\'); 	  fbq(\'init\', \'131737410786111\'); 	  fbq(\'track\', \'PageView\'); 	</script> 	<noscript><img height=\"1\" width=\"1\" style=\"display:none\" 	  src=\"https://www.facebook.com/tr?id=149877372404434&ev=PageView&noscript=1\" 	/></noscript> <!-- End Facebook Pixel Code -->    \r\n  			', '  \r\n  				<!-- Global site tag (gtag.js) - Google Analytics --> 	<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-999999-1\"></script> 	<script> 	  window.dataLayer = window.dataLayer || []; 	  function gtag(){dataLayer.push(arguments);} 	  gtag(\'js\', new Date());  	  gtag(\'config\', \'UA-9999999-1\'); 	</script>      \r\n            \r\n            \r\n            \r\n      ', '2021-02-06 05:41:28');

-- --------------------------------------------------------

--
-- Table structure for table `prestamos`
--

CREATE TABLE `prestamos` (
  `idPrestamo` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `numDocTitular` text NOT NULL,
  `nombreTitular` text NOT NULL,
  `plazoDias` int(11) NOT NULL,
  `idAdmin` int(11) NOT NULL,
  `nombrePrestamista` text NOT NULL,
  `idDetalleArticulo` int(11) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestamos`
--

INSERT INTO `prestamos` (`idPrestamo`, `estado`, `numDocTitular`, `nombreTitular`, `plazoDias`, `idAdmin`, `nombrePrestamista`, `idDetalleArticulo`, `fecha`) VALUES
(145, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', NULL, '2021-02-07 03:23:23'),
(146, 1, '162584', 'usuariotwo', 3, 0, 'Alex Escalante ONE', NULL, '2021-02-07 03:25:37'),
(147, 1, '12345678', 'Docente Xd', 12, 0, 'Alex Escalante ONE', NULL, '2021-02-07 03:33:39'),
(148, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', NULL, '2021-02-08 00:41:10'),
(149, 1, '162894', 'Alex escalante maron', 9, 0, 'Alex Escalante ONE', NULL, '2021-02-08 00:41:59'),
(150, 1, '162895', 'Axel One Escalante', 3, 0, 'Alex Escalante ONE', NULL, '2021-02-09 03:30:26'),
(151, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', NULL, '2021-02-10 02:38:06'),
(152, 1, '162894', 'Alex escalante maron', 12, 0, 'Alex Escalante ONE', NULL, '2021-02-10 02:52:57'),
(153, 1, '162894', 'Alex escalante maron', 6, 0, 'Alex Escalante ONE', NULL, '2021-02-12 00:06:41'),
(154, 1, '162894', 'Alex escalante maron', 15, 0, 'Alex Escalante ONE', NULL, '2021-02-12 00:51:42'),
(155, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', NULL, '2021-02-12 01:05:14'),
(156, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', NULL, '2021-02-12 01:31:20'),
(157, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', NULL, '2021-02-12 01:31:42'),
(158, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', NULL, '2021-02-12 01:31:55'),
(159, 1, '162894', 'Alex escalante maron', 6, 0, 'Alex Escalante ONE', 160, '2021-02-12 01:38:54'),
(160, 1, '162894', 'Alex escalante maron', 15, 0, 'Alex Escalante ONE', 160, '2021-02-12 01:41:04'),
(161, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', 160, '2021-02-12 01:42:04'),
(162, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', 160, '2021-02-12 01:42:23'),
(163, 1, '162894', 'Alex escalante maron', 9, 0, 'Alex Escalante ONE', 160, '2021-02-12 01:52:59'),
(164, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', 160, '2021-02-12 01:54:22'),
(165, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', 160, '2021-02-12 01:54:44'),
(166, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', 160, '2021-02-12 01:55:33'),
(167, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', 160, '2021-02-12 01:56:35'),
(168, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', 160, '2021-02-12 01:57:33'),
(169, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', 160, '2021-02-12 02:00:52'),
(170, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', 160, '2021-02-12 02:02:11'),
(171, 1, '162894', 'Alex escalante maron', 15, 0, 'Alex Escalante ONE', 160, '2021-02-12 02:06:39'),
(172, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', 160, '2021-02-12 02:07:02'),
(173, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', 160, '2021-02-12 02:07:53'),
(174, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', 160, '2021-02-12 02:08:31'),
(175, 1, '162894', 'Alex escalante maron', 12, 0, 'Alex Escalante ONE', 160, '2021-02-12 02:08:47'),
(176, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', 175, '2021-02-12 02:09:00'),
(177, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', 175, '2021-02-12 02:09:17'),
(178, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', 214, '2021-02-12 02:10:36'),
(179, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', 160, '2021-02-12 02:12:07'),
(180, 1, '162894', 'Alex escalante maron', 12, 0, 'Alex Escalante ONE', 74, '2021-02-12 02:13:30'),
(181, 1, '162894', 'Alex escalante maron', 12, 0, 'Alex Escalante ONE', 160, '2021-02-12 03:26:44'),
(182, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', 74, '2021-02-12 03:26:55'),
(183, 1, '12345678', 'Docente Xd', 3, 0, 'Alex Escalante ONE', 68, '2021-02-12 03:27:29'),
(184, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', 164, '2021-02-12 03:32:34'),
(185, 1, '162894', 'Alex escalante maron', 9, 0, 'Alex Escalante ONE', 216, '2021-02-12 04:08:37'),
(186, 1, '162894', 'Alex escalante maron', 3, 0, 'Alex Escalante ONE', 216, '2021-02-12 04:13:31');

-- --------------------------------------------------------

--
-- Table structure for table `prestamos-articulos`
--

CREATE TABLE `prestamos-articulos` (
  `id` int(11) NOT NULL,
  `idPrestamo` int(11) NOT NULL,
  `idArticulo` int(11) NOT NULL,
  `codigoPatrimonial` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prestamosarticulos`
--

CREATE TABLE `prestamosarticulos` (
  `idPrestamosArt` int(11) NOT NULL,
  `idPrestamo` int(11) NOT NULL,
  `idArticulo` int(11) NOT NULL,
  `codigoPatrimonial` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestamosarticulos`
--

INSERT INTO `prestamosarticulos` (`idPrestamosArt`, `idPrestamo`, `idArticulo`, `codigoPatrimonial`) VALUES
(54, 145, 74, '132321321'),
(55, 145, 77, '213123213'),
(56, 146, 78, '123123213'),
(57, 146, 84, '342524555'),
(58, 147, 80, '324234234'),
(59, 147, 83, '432435435'),
(60, 147, 92, '587568568'),
(61, 148, 89, '345345345'),
(62, 149, 79, '789678678'),
(63, 150, 90, '235245245'),
(64, 151, 94, '324434444'),
(65, 151, 91, '245453453'),
(66, 152, 106, '548645454'),
(67, 152, 105, '213213213'),
(68, 153, 78, '123123213'),
(69, 153, 79, '789678678'),
(70, 153, 80, '324234234'),
(71, 154, 90, '235245245'),
(72, 154, 95, '453423123'),
(73, 154, 91, '245453453'),
(74, 154, 83, '432435435'),
(75, 155, 84, '342524555'),
(76, 156, 77, '213123213'),
(77, 157, 92, '587568568'),
(78, 158, 94, '324434444'),
(79, 159, 101, '455455455'),
(80, 160, 74, '132321321'),
(81, 160, 78, '123123213'),
(82, 160, 77, '213123213'),
(83, 160, 79, '789678678'),
(84, 161, 80, '324234234'),
(85, 162, 83, '432435435'),
(86, 163, 84, '342524555'),
(87, 164, 91, '245453453'),
(88, 165, 94, '324434444'),
(89, 166, 90, '235245245'),
(90, 167, 92, '587568568'),
(91, 168, 95, '453423123'),
(92, 169, 74, '132321321'),
(93, 170, 77, '213123213'),
(94, 171, 78, '123123213'),
(95, 171, 79, '789678678'),
(96, 171, 80, '324234234'),
(97, 172, 83, '432435435'),
(98, 173, 84, '342524555'),
(99, 174, 90, '235245245'),
(100, 175, 91, '245453453'),
(101, 176, 97, '351351345'),
(102, 177, 100, '123456789'),
(103, 178, 107, '213434234'),
(104, 179, 92, '587568568'),
(105, 179, 94, '324434444'),
(106, 179, 101, '455455455'),
(107, 180, 88, '689678768'),
(108, 180, 87, '134123213'),
(109, 181, 95, '453423123'),
(110, 182, 89, '345345345'),
(111, 183, 99, '223234234'),
(112, 184, 86, '213432423'),
(113, 185, 0, 'qweqweqwe'),
(114, 186, 110, '312321321');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_subcategoria` int(11) NOT NULL,
  `tipo` text COLLATE utf8_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `titular` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `multimedia` text COLLATE utf8_spanish_ci NOT NULL,
  `detalles` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  `portada` text COLLATE utf8_spanish_ci NOT NULL,
  `vistas` int(11) NOT NULL,
  `ventas` int(11) NOT NULL,
  `vistasGratis` int(11) NOT NULL,
  `ventasGratis` int(11) NOT NULL,
  `ofertadoPorCategoria` int(11) NOT NULL,
  `ofertadoPorSubCategoria` int(11) NOT NULL,
  `oferta` int(11) NOT NULL,
  `precioOferta` float NOT NULL,
  `descuentoOferta` int(11) NOT NULL,
  `imgOferta` text COLLATE utf8_spanish_ci NOT NULL,
  `finOferta` datetime NOT NULL,
  `peso` float NOT NULL,
  `entrega` float NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `id_categoria`, `id_subcategoria`, `tipo`, `ruta`, `estado`, `titulo`, `titular`, `descripcion`, `multimedia`, `detalles`, `precio`, `portada`, `vistas`, `ventas`, `vistasGratis`, `ventasGratis`, `ofertadoPorCategoria`, `ofertadoPorSubCategoria`, `oferta`, `precioOferta`, `descuentoOferta`, `imgOferta`, `finOferta`, `peso`, `entrega`, `fecha`) VALUES
(392, 5, 18, 'virtual', 'curso-de-jquery-45', 1, 'Curso de jQuery', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate minus, consectetur beatae fugit odio iure repudiandae quia distinctio, id ducimus molestiae. Obcaecati, unde. Illo molestiae dolorum, saepe nisi enim iusto.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto maxime quas modi, eveniet fugiat. Alias voluptatem cum consectetur nobis quod, excepturi recusandae, itaque facere minima officiis autem illum, perferendis provident! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto maxime quas modi, eveniet fugiat. Alias voluptatem cum consectetur nobis quod, excepturi recusandae, itaque facere minima officiis autem illum, perferendis provident!', 'N4aY6yX-MaM', '{ \"Clases\": \"121 Clases\",\"Tiempo\": \"24 horas de estudio\",\"Nivel\": \"Nivel Básico\", \"Acceso\": \"Acceso de por vida\",\"Dispositivo\": \"Acceso en dispositivos móviles y TV\",\"Certificado\": \"Certificado de finalización\"}', 100, 'vistas/img/productos/cursos/curso03.jpg', 395, 13, 0, 0, 1, 0, 1, 9.99, 90, 'vistas/img/ofertas/cursos.jpg', '2018-03-29 23:59:59', 0, 0, '2021-01-05 02:17:09'),
(394, 5, 18, 'virtual', 'curso-de-bootstrap-47', 1, 'Curso de Bootstrap', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate minus, consectetur beatae fugit odio iure repudiandae quia distinctio, id ducimus molestiae. Obcaecati, unde. Illo molestiae dolorum, saepe nisi enim iusto.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto maxime quas modi, eveniet fugiat. Alias voluptatem cum consectetur nobis quod, excepturi recusandae, itaque facere minima officiis autem illum, perferendis provident! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto maxime quas modi, eveniet fugiat. Alias voluptatem cum consectetur nobis quod, excepturi recusandae, itaque facere minima officiis autem illum, perferendis provident!', 'N4aY6yX-MaM', '{ \"Clases\": \"121 Clases\",\"Tiempo\": \"24 horas de estudio\",\"Nivel\": \"Nivel Básico\", \"Acceso\": \"Acceso de por vida\",\"Dispositivo\": \"Acceso en dispositivos móviles y TV\",\"Certificado\": \"Certificado de finalización\"}', 100, 'vistas/img/productos/cursos/curso05.jpg', 394, 11, 0, 0, 1, 0, 1, 9.99, 90, 'vistas/img/ofertas/cursos.jpg', '2018-03-29 23:59:59', 0, 0, '2018-03-16 01:25:20'),
(395, 5, 18, 'virtual', 'crea-aplicaciones-con-php-46', 1, 'Crea aplicaciones con PHP', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate minus, consectetur beatae fugit odio iure repudiandae quia distinctio, id ducimus molestiae. Obcaecati, unde. Illo molestiae dolorum, saepe nisi enim iusto.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto maxime quas modi, eveniet fugiat. Alias voluptatem cum consectetur nobis quod, excepturi recusandae, itaque facere minima officiis autem illum, perferendis provident! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto maxime quas modi, eveniet fugiat. Alias voluptatem cum consectetur nobis quod, excepturi recusandae, itaque facere minima officiis autem illum, perferendis provident!', 'N4aY6yX-MaM', '{ \"Clases\": \"121 Clases\",\"Tiempo\": \"24 horas de estudio\",\"Nivel\": \"Nivel Básico\", \"Acceso\": \"Acceso de por vida\",\"Dispositivo\": \"Acceso en dispositivos móviles y TV\",\"Certificado\": \"Certificado de finalización\"}', 100, 'vistas/img/productos/cursos/curso01.jpg', 396, 10, 0, 0, 1, 0, 1, 9.99, 90, 'vistas/img/ofertas/cursos.jpg', '2018-03-29 23:59:59', 0, 0, '2021-01-04 13:06:56'),
(397, 5, 18, 'virtual', 'curso-de-jquery-46', 1, 'Curso de jQuery', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate minus, consectetur beatae fugit odio iure repudiandae quia distinctio, id ducimus molestiae. Obcaecati, unde. Illo molestiae dolorum, saepe nisi enim iusto.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto maxime quas modi, eveniet fugiat. Alias voluptatem cum consectetur nobis quod, excepturi recusandae, itaque facere minima officiis autem illum, perferendis provident! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto maxime quas modi, eveniet fugiat. Alias voluptatem cum consectetur nobis quod, excepturi recusandae, itaque facere minima officiis autem illum, perferendis provident!', 'N4aY6yX-MaM', '{ \"Clases\": \"121 Clases\",\"Tiempo\": \"24 horas de estudio\",\"Nivel\": \"Nivel Básico\", \"Acceso\": \"Acceso de por vida\",\"Dispositivo\": \"Acceso en dispositivos móviles y TV\",\"Certificado\": \"Certificado de finalización\"}', 100, 'vistas/img/productos/cursos/curso03.jpg', 398, 8, 0, 0, 1, 0, 1, 9.99, 90, 'vistas/img/ofertas/cursos.jpg', '2018-03-29 23:59:59', 0, 0, '2021-01-04 13:48:03'),
(399, 5, 18, 'virtual', 'curso-de-bootstrap-48', 1, 'Curso de Bootstrap', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate minus, consectetur beatae fugit odio iure repudiandae quia distinctio, id ducimus molestiae. Obcaecati, unde. Illo molestiae dolorum, saepe nisi enim iusto.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto maxime quas modi, eveniet fugiat. Alias voluptatem cum consectetur nobis quod, excepturi recusandae, itaque facere minima officiis autem illum, perferendis provident! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto maxime quas modi, eveniet fugiat. Alias voluptatem cum consectetur nobis quod, excepturi recusandae, itaque facere minima officiis autem illum, perferendis provident!', 'N4aY6yX-MaM', '{ \"Clases\": \"121 Clases\",\"Tiempo\": \"24 horas de estudio\",\"Nivel\": \"Nivel Básico\", \"Acceso\": \"Acceso de por vida\",\"Dispositivo\": \"Acceso en dispositivos móviles y TV\",\"Certificado\": \"Certificado de finalización\"}', 100, 'vistas/img/productos/cursos/curso05.jpg', 401, 6, 0, 0, 1, 0, 1, 9.99, 90, 'vistas/img/ofertas/cursos.jpg', '2018-03-29 23:59:59', 0, 0, '2021-01-04 13:45:29'),
(400, 5, 18, 'virtual', 'crea-aplicaciones-con-php-47', 1, 'Crea aplicaciones con PHP', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate minus, consectetur beatae fugit odio iure repudiandae quia distinctio, id ducimus molestiae. Obcaecati, unde. Illo molestiae dolorum, saepe nisi enim iusto.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto maxime quas modi, eveniet fugiat. Alias voluptatem cum consectetur nobis quod, excepturi recusandae, itaque facere minima officiis autem illum, perferendis provident! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto maxime quas modi, eveniet fugiat. Alias voluptatem cum consectetur nobis quod, excepturi recusandae, itaque facere minima officiis autem illum, perferendis provident!', 'N4aY6yX-MaM', '{ \"Clases\": \"121 Clases\",\"Tiempo\": \"24 horas de estudio\",\"Nivel\": \"Nivel Básico\", \"Acceso\": \"Acceso de por vida\",\"Dispositivo\": \"Acceso en dispositivos móviles y TV\",\"Certificado\": \"Certificado de finalización\"}', 100, 'vistas/img/productos/cursos/curso01.jpg', 403, 5, 0, 0, 1, 0, 1, 9.99, 90, 'vistas/img/ofertas/cursos.jpg', '2018-03-29 23:59:59', 0, 0, '2021-01-07 16:15:26'),
(402, 5, 18, 'virtual', 'curso-de-jquery-47', 1, 'Curso de jQuery', 'sad...', 'sad', 'N4aY6yX-MaM', '{\"Clases\":\"121 Clases\",\"Tiempo\":\"24 horas de estudio\",\"Nivel\":\"Nivel Básico\",\"Acceso\":\"Acceso de por vida\",\"Dispositivo\":\"Acceso en dispositivos móviles y TV\",\"Certificado\":\"Certificado de finalización\"}', 100, 'vistas/img/productos/curso-de-jquery-47.jpg', 402, 3, 0, 0, 1, 0, 1, 9.99, 90, 'vistas/img/ofertas/curso-de-jquery-47.jpg', '2018-03-29 23:59:59', 0, 0, '2021-01-16 20:41:57'),
(522, 5, 18, 'fisico', 'dddddddd', 1, 'Alfred Schmidt', 'HELLO WORD...', 'HELLO WORD', '[{\"foto\":\"vistas/img/multimedia/dddddddd/104159.jpg\"},{\"foto\":\"vistas/img/multimedia/dddddddd/25627becf63b169d19af7efee6122e791555537428_full.jpg\"},{\"foto\":\"vistas/img/multimedia/dddddddd/20329-sasuke-uchiha-naruto-1920x1080-anime-wallpaper.jpg\"},{\"foto\":\"vistas/img/multimedia/dddddddd/6451f32062ae5487a44a107d63f2cbde-daptv54.jpg\"},{\"foto\":\"vistas/img/multimedia/dddddddd/1920x1080-2630-asus-republic-of-gamers-wallpaper-1080p.jpg\"},{\"foto\":\"vistas/img/multimedia/dddddddd/1080p-digital-universo-Hd-Hd-Fondos-de-pantalla.jpg\"}]', '{\"Talla\":[\"sds\"],\"Color\":[\"asd\"],\"Marca\":[\"das\"]}', 2, 'vistas/img/productos/dddddddd.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, '2021-01-25 05:14:03');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `imgFondo` text COLLATE utf8_spanish_ci NOT NULL,
  `tipoSlide` text COLLATE utf8_spanish_ci NOT NULL,
  `imgProducto` text COLLATE utf8_spanish_ci NOT NULL,
  `estiloImgProducto` text COLLATE utf8_spanish_ci NOT NULL,
  `estiloTextoSlide` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo1` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo2` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo3` text COLLATE utf8_spanish_ci NOT NULL,
  `boton` text COLLATE utf8_spanish_ci NOT NULL,
  `url` text COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `nombre`, `imgFondo`, `tipoSlide`, `imgProducto`, `estiloImgProducto`, `estiloTextoSlide`, `titulo1`, `titulo2`, `titulo3`, `boton`, `url`, `orden`, `fecha`) VALUES
(1, 'ZAPATOS AMARILLOS', 'vistas/img/slide/default/back_default.jpg', 'slideOpcion2', 'vistas/img/slide/slide1/calzado.png', '{\"top\":\"5\",\"right\":\"\",\"left\":\"5\",\"width\":\"50\"}', '{\"top\":\"20\",\"right\":\"10\",\"left\":\"\",\"width\":\"40\"}', '{\"texto\":\"Lorem Ipsum\",\"color\":\"#333\"}', '{\"texto\":\"Lorem ipsum dolor sit\",\"color\":\"#777\"}', '{\"texto\":\"Lorem ipsum dolor sit\",\"color\":\"#888\"}', 'VER PRODUCTO', '#', 1, '2018-01-31 22:46:41');

-- --------------------------------------------------------

--
-- Table structure for table `subcategorias`
--

CREATE TABLE `subcategorias` (
  `id` int(11) NOT NULL,
  `subcategoria` text COLLATE utf8_spanish_ci NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ofertadoPorCategoria` int(11) NOT NULL,
  `oferta` int(11) NOT NULL,
  `precioOferta` float NOT NULL,
  `descuentoOferta` int(11) NOT NULL,
  `imgOferta` text COLLATE utf8_spanish_ci NOT NULL,
  `finOferta` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `subcategorias`
--

INSERT INTO `subcategorias` (`id`, `subcategoria`, `id_categoria`, `ruta`, `estado`, `ofertadoPorCategoria`, `oferta`, `precioOferta`, `descuentoOferta`, `imgOferta`, `finOferta`, `fecha`) VALUES
(1, 'Ropa para dama', 1, 'ropa-para-dama', 1, 0, 1, 0, 40, 'vistas/img/ofertas/Ropa-para-dama.jpg', '2017-11-24 23:59:59', '2018-03-13 21:12:47'),
(2, 'Ropa para hombre', 1, 'ropa-para-hombre', 1, 0, 1, 0, 40, 'vistas/img/ofertas/Ropa-para-hombre.jpg', '2017-11-24 23:59:59', '2018-03-13 21:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `user` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `modo` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `verificacion` int(11) NOT NULL,
  `emailEncriptado` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `codigo`, `nombre`, `user`, `password`, `email`, `modo`, `foto`, `verificacion`, `emailEncriptado`, `fecha`) VALUES
(34, '162584', 'usuariotwo', 'usuarioPrueba', '$2a$07$asxx54ahjppf45sd87a5au6fTot89fSFmws3JZ.tmrrNPgMS2pkt6', 'usuario@gmail.com', 'directo', 'vistas/img/usuarios/34/213.jpg', 1, '926e57bdcca18a1cffcf9d80651893dc', '2021-02-12 03:51:51'),
(47, '162894', 'Alex escalante maron', 'alexescalante2020', '$2a$07$asxx54ahjppf45sd87a5au8yKTE0AUTJwdRPIDIsqXT2Utnq6TZtq', 'alexescalante@gmail.com', 'directo', 'vistas/img/usuarios/47/604.jpg', 0, 'a090e5266ceecd6caa3e44d295de8652', '2021-02-12 04:12:15'),
(49, '123456', 'Axel One', 'fredy2020', '$2a$07$asxx54ahjppf45sd87a5au8yKTE0AUTJwdRPIDIsqXT2Utnq6TZtq', 'fredy@gmail.com', 'directo', '', 0, '1b6113a146ba93a43311cc83bd8a4ed2', '2021-01-31 01:19:01'),
(51, '12345678', 'Docente Xd', 'docente2020', '$2a$07$asxx54ahjppf45sd87a5au8yKTE0AUTJwdRPIDIsqXT2Utnq6TZtq', 'docente@gmail.com', 'directo', 'vistas/img/usuarios/51/857.jpg', 0, '33ff7d62b29b24e8bca8af8531159ea9', '2021-01-31 04:58:33'),
(52, '162895', 'Axel One Escalante', 'axelone2020', '$2a$07$asxx54ahjppf45sd87a5au8yKTE0AUTJwdRPIDIsqXT2Utnq6TZtq', 'axel@gmail.com', 'directo', '', 0, '3218da89280d03db1d26f8622068665b', '2021-02-11 00:09:59');

-- --------------------------------------------------------

--
-- Table structure for table `visitaspaises`
--

CREATE TABLE `visitaspaises` (
  `id` int(11) NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `visitaspaises`
--

INSERT INTO `visitaspaises` (`id`, `pais`, `codigo`, `cantidad`, `fecha`) VALUES
(1, 'United States', 'US', 2, '2017-12-05 21:02:46'),
(2, 'Japan', 'JP', 72, '2021-01-02 18:47:47'),
(3, 'Spain', 'ES', 10, '2017-12-05 21:02:53'),
(8, 'Spain', 'ES', 10, '2017-12-05 21:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `visitaspersonas`
--

CREATE TABLE `visitaspersonas` (
  `id` int(11) NOT NULL,
  `ip` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `visitas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `visitaspersonas`
--

INSERT INTO `visitaspersonas` (`id`, `ip`, `pais`, `visitas`, `fecha`) VALUES
(1, '153.202.197.216', 'Japan', 1, '2017-11-08 18:37:07'),
(3, '249.170.168.184', 'Spain', 1, '2017-11-28 19:16:16'),
(5, '249.170.168.184', 'Spain', 1, '2017-11-28 19:16:19'),
(6, '234.13.198.119', 'Colombia', 1, '2017-11-28 19:16:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`idArticulo`),
  ADD KEY `idDetalleArticulo` (`idDetalleArticulo`) USING BTREE;

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabeceras`
--
ALTER TABLE `cabeceras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comercio`
--
ALTER TABLE `comercio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deseos`
--
ALTER TABLE `deseos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detallearticulo`
--
ALTER TABLE `detallearticulo`
  ADD PRIMARY KEY (`idDetalleArticulo`),
  ADD KEY `detalle-categoria` (`idCategoria`);

--
-- Indexes for table `notificacion`
--
ALTER TABLE `notificacion`
  ADD PRIMARY KEY (`idNotificacion`),
  ADD KEY `notf-art` (`idDetalleArticulo`);

--
-- Indexes for table `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plantilla`
--
ALTER TABLE `plantilla`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`idPrestamo`);

--
-- Indexes for table `prestamos-articulos`
--
ALTER TABLE `prestamos-articulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPrestamo` (`idPrestamo`) USING BTREE,
  ADD KEY `idArticulo` (`idArticulo`) USING BTREE;

--
-- Indexes for table `prestamosarticulos`
--
ALTER TABLE `prestamosarticulos`
  ADD PRIMARY KEY (`idPrestamosArt`),
  ADD KEY `prestamosart` (`idPrestamo`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitaspaises`
--
ALTER TABLE `visitaspaises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitaspersonas`
--
ALTER TABLE `visitaspersonas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `articulos`
--
ALTER TABLE `articulos`
  MODIFY `idArticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cabeceras`
--
ALTER TABLE `cabeceras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comercio`
--
ALTER TABLE `comercio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `deseos`
--
ALTER TABLE `deseos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `detallearticulo`
--
ALTER TABLE `detallearticulo`
  MODIFY `idDetalleArticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `idNotificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plantilla`
--
ALTER TABLE `plantilla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `idPrestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `prestamos-articulos`
--
ALTER TABLE `prestamos-articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prestamosarticulos`
--
ALTER TABLE `prestamosarticulos`
  MODIFY `idPrestamosArt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=523;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `visitaspaises`
--
ALTER TABLE `visitaspaises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `visitaspersonas`
--
ALTER TABLE `visitaspersonas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `articulos-detalle` FOREIGN KEY (`idDetalleArticulo`) REFERENCES `detallearticulo` (`idDetalleArticulo`);

--
-- Constraints for table `detallearticulo`
--
ALTER TABLE `detallearticulo`
  ADD CONSTRAINT `detalle-categoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON UPDATE CASCADE;

--
-- Constraints for table `notificacion`
--
ALTER TABLE `notificacion`
  ADD CONSTRAINT `notf-art` FOREIGN KEY (`idDetalleArticulo`) REFERENCES `detallearticulo` (`idDetalleArticulo`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `prestamos-articulos`
--
ALTER TABLE `prestamos-articulos`
  ADD CONSTRAINT `articulo-prestamo` FOREIGN KEY (`idArticulo`) REFERENCES `articulos` (`idArticulo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestamo-articulo` FOREIGN KEY (`idPrestamo`) REFERENCES `prestamos` (`idPrestamo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prestamosarticulos`
--
ALTER TABLE `prestamosarticulos`
  ADD CONSTRAINT `prestamosart` FOREIGN KEY (`idPrestamo`) REFERENCES `prestamos` (`idPrestamo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
