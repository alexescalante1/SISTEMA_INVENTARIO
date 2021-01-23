-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 11:47 PM
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
-- Table structure for table `accesorapido`
--

CREATE TABLE `accesorapido` (
  `idacceso` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `ruta` text NOT NULL,
  `portada` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accesorapido`
--

INSERT INTO `accesorapido` (`idacceso`, `titulo`, `ruta`, `portada`) VALUES
(2, 'Equipos Electronicos', 'equipos-electronicos', '');

-- --------------------------------------------------------

--
-- Table structure for table `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
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

INSERT INTO `administradores` (`id`, `nombre`, `email`, `foto`, `password`, `perfil`, `estado`, `fecha`) VALUES
(1, 'Tienda Virtual', 'admin@tiendavirtual.com', 'vistas/img/perfiles/499.png', '$2a$07$asxx54ahjppf45sd87a5aunxs9bkpyGmGE/.vekdjFg83yRec789S', 'administrador', 1, '2021-01-10 05:24:03'),
(2, 'Editor de la Tienda', 'editor@tiendavirtual.com', 'vistas/img/perfiles/477.png', '$2a$07$asxx54ahjppf45sd87a5auBnK0T8g/TaNYrkZQmRmlyohJLox8X9S', 'editor', 1, '2021-01-10 05:23:29'),
(5, 'Alex Escalante ONE', 'admin@gmail.com', 'vistas/img/perfiles/448.jpg', '$2a$07$asxx54ahjppf45sd87a5aunxs9bkpyGmGE/.vekdjFg83yRec789S', 'administrador', 1, '2021-01-10 05:23:28');

-- --------------------------------------------------------

--
-- Table structure for table `articulos`
--

CREATE TABLE `articulos` (
  `idArticulo` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idDetalleArticulo` int(11) NOT NULL,
  `codigoPatrimonial` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articulos`
--

INSERT INTO `articulos` (`idArticulo`, `codigo`, `estado`, `fecha`, `idDetalleArticulo`, `codigoPatrimonial`) VALUES
(7, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(8, '00010003', 1, '2021-01-21 17:07:38', 160, 'ARD123457'),
(9, '00010004', 0, '2021-01-21 17:07:34', 164, 'ARD123132'),
(10, '00010007', 1, '2021-01-21 17:11:57', 74, 'ARD251522'),
(11, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(12, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(13, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(14, '00010003', 1, '2021-01-21 17:07:38', 160, 'ARD123457'),
(15, '00010004', 0, '2021-01-21 17:07:34', 164, 'ARD123132'),
(16, '00010007', 1, '2021-01-21 17:11:57', 74, 'ARD251522'),
(17, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(18, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(19, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(20, '00010003', 1, '2021-01-21 17:07:38', 160, 'ARD123457'),
(21, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(22, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(23, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(24, '00010003', 1, '2021-01-21 17:07:38', 160, 'ARD123457'),
(25, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(26, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(27, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(28, '00010003', 1, '2021-01-21 17:07:38', 160, 'ARD123457'),
(29, '00010004', 0, '2021-01-21 17:07:34', 164, 'ARD123132'),
(30, '00010007', 1, '2021-01-21 17:11:57', 74, 'ARD251522'),
(31, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(32, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(33, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(34, '00010003', 1, '2021-01-21 17:07:38', 160, 'ARD123457'),
(35, '00010004', 0, '2021-01-21 17:07:34', 164, 'ARD123132'),
(36, '00010007', 1, '2021-01-21 17:11:57', 74, 'ARD251522'),
(37, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(38, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(39, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(40, '00010003', 1, '2021-01-21 17:07:38', 160, 'ARD123457'),
(41, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(42, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(43, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(44, '00010003', 1, '2021-01-21 17:07:38', 160, 'ARD123457'),
(45, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456'),
(46, '00010002', 1, '2021-01-20 16:40:56', 160, 'ARD123456');

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
(31, 'casa', 'Casa');

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
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detallearticulo`
--

INSERT INTO `detallearticulo` (`idDetalleArticulo`, `ruta`, `titulo`, `descripcion`, `disponible`, `portada`, `multimedia`, `prestados`, `peso`, `precio`, `idCategoria`, `palabrasClave`, `fecha`) VALUES
(68, 'data-display', 'Data Display', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 1, 'vistas/img/productos/data-display.png', '[{\"foto\":\"vistas/img/multimedia/data-display/data2.png\"},{\"foto\":\"vistas/img/multimedia/data-display/data1.png\"}]', 0, 1, 1500, 1, 'proyector', '2021-01-23 14:32:33'),
(72, 'laptop-hp', 'Laptop HP', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 1, 'vistas/img/productos/laptop-hp.jpg', '[{\"foto\":\"vistas/img/multimedia/laptop-hp/5_27.jpg\"},{\"foto\":\"vistas/img/multimedia/laptop-hp/6_23_1.jpg\"},{\"foto\":\"vistas/img/multimedia/laptop-hp/16963488_2.jpg\"}]', 0, 2, 1550, 1, 'ordenador', '2021-01-23 14:32:33'),
(74, 'monitor-asus', 'Monitor Asus', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 1, 'vistas/img/productos/monitor-asus.jpg', '[{\"foto\":\"vistas/img/multimedia/monitor-asus/monitor2.jpg\"},{\"foto\":\"vistas/img/multimedia/monitor-asus/monitor1.jpg\"}]', 0, 2, 1000, 1, 'pantalla', '2021-01-23 14:32:33'),
(93, 'mesa', 'Mesa', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 1, 'vistas/img/productos/mesa.jpg', '[{\"foto\":\"vistas/img/multimedia/mesa/mesa2.jpg\"},{\"foto\":\"vistas/img/multimedia/mesa/mesa1.jpg\"}]', 0, 1, 120, 2, 'asdasd', '2021-01-23 14:32:33'),
(130, 'arduino-uno', 'Arduino Uno', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 1, 'vistas/img/productos/arduino-uno.png', '[{\"foto\":\"vistas/img/multimedia/arduino-uno/arduino2.png\"},{\"foto\":\"vistas/img/multimedia/arduino-uno/arduino1.png\"}]', 0, 0.1, 0, 1, 'as', '2021-01-23 14:32:33'),
(160, 'arduino-nano', 'Arduino Nano', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 1, 'vistas/img/productos/arduino-nano.jpg', '[{\"foto\":\"vistas/img/multimedia/arduino-nano/arduino2.jpg\"},{\"foto\":\"vistas/img/multimedia/arduino-nano/arduino1.jpg\"}]', 0, 0, 0, 1, 'asd', '2021-01-23 14:32:33'),
(162, 'cable-vga', 'Cable VGA', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 1, 'vistas/img/productos/cable-vga.jpg', '[{\"foto\":\"vistas/img/multimedia/cable-vga/dsffsdf.jpg\"},{\"foto\":\"vistas/img/multimedia/cable-vga/trdfdsf.jpg\"}]', 0, 0, 0, 3, 'as', '2021-01-23 14:32:33'),
(164, 'cable-hdmi', 'Cable HDMI', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 1, 'vistas/img/productos/cable-hdmi.jpg', '[{\"foto\":\"vistas/img/multimedia/cable-hdmi/dsffsdf.jpg\"},{\"foto\":\"vistas/img/multimedia/cable-hdmi/trdfdsf.jpg\"}]', 0, 0, 0, 3, 'sad', '2021-01-23 14:32:33'),
(175, 'laptop-asus', 'Laptop ASUS', 'asd', 1, 'vistas/img/productos/laptop-asus.jpg', '[{\"foto\":\"vistas/img/multimedia/laptop-asus/6_23_1.jpg\"},{\"foto\":\"vistas/img/multimedia/laptop-asus/16963488_2.jpg\"}]', 0, 2, 4000, 1, 'pc', '2021-01-23 14:32:33'),
(181, 'computadora-gaming', 'Computadora Gaming', 'lorem', 1, 'vistas/img/productos/computadora-gaming.jpg', '[{\"foto\":\"vistas/img/multimedia/computadora-gaming/images.jpg\"},{\"foto\":\"vistas/img/multimedia/computadora-gaming/ef416153a7c3d69e3f09cfbcbc2e2359.jpg\"},{\"foto\":\"vistas/img/multimedia/computadora-gaming/360c4822e04f1606b975b170e1af0891.jpg\"},{\"foto\":\"vistas/img/multimedia/computadora-gaming/El-negocio-de-hardware-para-PC-Gamer-aumentará-en-3.600-millones-de-dólares-en-2020-debido-a-la-pandemia-de-COVID-19-2-1000x576.jpg\"}]', 0, 4, 5000, 3, 'jaja', '2021-01-23 14:32:33'),
(185, 'new-item', 'new item', 'sad qda', 0, 'vistas/img/productos/new-item.jpg', '[{\"foto\":\"vistas/img/multimedia/new-item/38984.jpg\"},{\"foto\":\"vistas/img/multimedia/new-item/38979.jpg\"},{\"foto\":\"vistas/img/multimedia/new-item/38980.jpg\"},{\"foto\":\"vistas/img/multimedia/new-item/38977.jpg\"}]', 400, 0.2, 8000, 1, 'tv', '2021-01-23 16:31:04'),
(189, 'otro', 'otro', 'ssss', 1, 'vistas/img/productos/otro.jpg', '[{\"foto\":\"vistas/img/multimedia/otro/21231264_1425337020867966_2743322337299293899_n.jpg\"},{\"foto\":\"vistas/img/multimedia/otro/El-negocio-de-hardware-para-PC-Gamer-aumentará-en-3.600-millones-de-dólares-en-2020-debido-a-la-pandemia-de-COVID-19-2-1000x576.jpg\"},{\"foto\":\"vistas/img/multimedia/otro/EJ348zYXkAEgmIq.jpg\"}]', 0, 12, 112, 1, 'asd', '2021-01-23 17:53:15');

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
  `idDetalleArticulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notificacion`
--

INSERT INTO `notificacion` (`idNotificacion`, `tipoDocTitular`, `numDocTitular`, `nombreTitular`, `apellidoTitular`, `cantidad`, `dias`, `detalle`, `fecha`, `visto`, `idDetalleArticulo`) VALUES
(24, 1, '162984', 'Alex Fredy', 'Escalante Maron', 2, 2, 'Trabajos en la U', '2021-01-20 01:43:28', 0, 72),
(26, 0, '73104795', 'Luz Maria', 'Quispe Quispe', 3, 4, 's', '2021-01-22 01:07:15', 0, 181),
(30, 0, '78526498', 'Lourdes Maria', 'Maron Mamani', 2, 2, 'no se tu dime', '2021-01-22 20:32:07', 0, 74),
(74, 0, '2131231', 'Marco', 'Quispe Quispe', 2, 2, 'sad', '2021-01-22 21:29:07', 0, 185),
(77, 0, '12458965', 'Johel Vordigold', 'Aroapaza Tello', 2, 2, 'desconocido', '2021-01-23 16:33:03', 0, 74),
(78, 0, '12365487', 'Boran Yenco', 'Usumaki Tukasa', 3, 3, 'tu dime', '2021-01-23 16:34:30', 0, 68);

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
(1, '#000000', '#ffffff', '#47bac1', '#ffffff', 'vistas/img/plantilla/logo.png', 'vistas/img/plantilla/icono.png', '[{\"red\":\"fa-facebook\",\"estilo\":\"facebookBlanco\",\"url\":\"http://facebook.com/\",\"activo\":1},{\"red\":\"fa-youtube\",\"estilo\":\"youtubeBlanco\",\"url\":\"http://youtube.com/\",\"activo\":1},{\"red\":\"fa-twitter\",\"estilo\":\"twitterBlanco\",\"url\":\"http://twitter.com/\",\"activo\":1},{\"red\":\"fa-google-plus\",\"estilo\":\"google-plusBlanco\",\"url\":\"http://google.com/\",\"activo\":1},{\"red\":\"fa-instagram\",\"estilo\":\"instagramBlanco\",\"url\":\"http://instagram.com/\",\"activo\":1}]', '\r\n      		<script>   window.fbAsyncInit = function() {     FB.init({       appId      : \'131737410786111\',       cookie     : true,       xfbml      : true,       version    : \'v2.10\'     });            FB.AppEvents.logPageView();             };    (function(d, s, id){      var js, fjs = d.getElementsByTagName(s)[0];      if (d.getElementById(id)) {return;}      js = d.createElement(s); js.id = id;      js.src = \"https://connect.facebook.net/en_US/sdk.js\";      fjs.parentNode.insertBefore(js, fjs);    }(document, \'script\', \'facebook-jssdk\'));  </script>\r\n      		', '\r\n  			<!-- Facebook Pixel Code --> 	<script> 	  !function(f,b,e,v,n,t,s) 	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod? 	  n.callMethod.apply(n,arguments):n.queue.push(arguments)}; 	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\'; 	  n.queue=[];t=b.createElement(e);t.async=!0; 	  t.src=v;s=b.getElementsByTagName(e)[0]; 	  s.parentNode.insertBefore(t,s)}(window, document,\'script\', 	  \'https://connect.facebook.net/en_US/fbevents.js\'); 	  fbq(\'init\', \'131737410786111\'); 	  fbq(\'track\', \'PageView\'); 	</script> 	<noscript><img height=\"1\" width=\"1\" style=\"display:none\" 	  src=\"https://www.facebook.com/tr?id=149877372404434&ev=PageView&noscript=1\" 	/></noscript> <!-- End Facebook Pixel Code -->    \r\n  			', '  \r\n  				<!-- Global site tag (gtag.js) - Google Analytics --> 	<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-999999-1\"></script> 	<script> 	  window.dataLayer = window.dataLayer || []; 	  function gtag(){dataLayer.push(arguments);} 	  gtag(\'js\', new Date());  	  gtag(\'config\', \'UA-9999999-1\'); 	</script>      \r\n            \r\n            \r\n            \r\n      ', '2018-02-02 15:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `prestamos`
--

CREATE TABLE `prestamos` (
  `idPrestamo` int(11) NOT NULL,
  `tipoDocTitular` int(11) NOT NULL,
  `numDocTitular` text NOT NULL,
  `nombreTitular` text NOT NULL,
  `apellidoTitular` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `plazoDias` int(11) NOT NULL,
  `idAdmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestamos`
--

INSERT INTO `prestamos` (`idPrestamo`, `tipoDocTitular`, `numDocTitular`, `nombreTitular`, `apellidoTitular`, `fecha`, `plazoDias`, `idAdmin`) VALUES
(1, 1, '162892', 'Alex Fredy', 'Escalante Maron', '2021-01-04 19:36:36', 2, 5),
(2, 1, '162893', 'Fredy', 'Soto', '2021-01-04 19:39:32', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `prestamos-articulos`
--

CREATE TABLE `prestamos-articulos` (
  `id` int(11) NOT NULL,
  `idPrestamo` int(11) NOT NULL,
  `idArticulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(522, 5, 18, 'fisico', 'dddddddd', 1, 'dddddddd', 'HELLO WORD...', 'HELLO WORD', '[{\"foto\":\"vistas/img/multimedia/dddddddd/104159.jpg\"},{\"foto\":\"vistas/img/multimedia/dddddddd/25627becf63b169d19af7efee6122e791555537428_full.jpg\"},{\"foto\":\"vistas/img/multimedia/dddddddd/20329-sasuke-uchiha-naruto-1920x1080-anime-wallpaper.jpg\"},{\"foto\":\"vistas/img/multimedia/dddddddd/6451f32062ae5487a44a107d63f2cbde-daptv54.jpg\"},{\"foto\":\"vistas/img/multimedia/dddddddd/1920x1080-2630-asus-republic-of-gamers-wallpaper-1080p.jpg\"},{\"foto\":\"vistas/img/multimedia/dddddddd/1080p-digital-universo-Hd-Hd-Fondos-de-pantalla.jpg\"}]', '{\"Talla\":[\"sds\"],\"Color\":[\"asd\"],\"Marca\":[\"das\"]}', 2, 'vistas/img/productos/dddddddd.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 0, '2021-01-16 18:55:46');

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
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
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

INSERT INTO `usuarios` (`id`, `nombre`, `password`, `email`, `modo`, `foto`, `verificacion`, `emailEncriptado`, `fecha`) VALUES
(2, 'Francisco gomez', '$2a$07$asxx54ahjppf45sd87a5auxq/SS293XhTEeizKWMnfhnpfay0AALe', 'pepe@gmail.com', 'directo', '', 1, '6b0becddecd5a06042b3f8078c97f2e0', '2020-12-24 03:14:07'),
(23, 'axel', '$2a$07$asxx54ahjppf45sd87a5auBfG/7KkYv5vtcvFUlYe.DaloBK759v.', 'asdsd@asdasd.com', 'directo', '', 0, 'd892d767dcd46401f4819212a4b4cf82', '2021-01-09 04:05:24'),
(34, 'usuariotwo', '$2a$07$asxx54ahjppf45sd87a5au6fTot89fSFmws3JZ.tmrrNPgMS2pkt6', 'usuario@gmail.com', 'directo', 'vistas/img/usuarios/34/213.jpg', 0, '926e57bdcca18a1cffcf9d80651893dc', '2021-01-23 21:31:06');

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
-- Indexes for table `accesorapido`
--
ALTER TABLE `accesorapido`
  ADD PRIMARY KEY (`idacceso`);

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
  ADD KEY `notificar-articulo` (`idDetalleArticulo`);

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
  ADD PRIMARY KEY (`idPrestamo`),
  ADD KEY `idAdmin` (`idAdmin`) USING BTREE;

--
-- Indexes for table `prestamos-articulos`
--
ALTER TABLE `prestamos-articulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPrestamo` (`idPrestamo`) USING BTREE,
  ADD KEY `idArticulo` (`idArticulo`) USING BTREE;

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
-- AUTO_INCREMENT for table `accesorapido`
--
ALTER TABLE `accesorapido`
  MODIFY `idacceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `articulos`
--
ALTER TABLE `articulos`
  MODIFY `idArticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
  MODIFY `idDetalleArticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `idNotificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

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
  MODIFY `idPrestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prestamos-articulos`
--
ALTER TABLE `prestamos-articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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
  ADD CONSTRAINT `articulos-detalle` FOREIGN KEY (`idDetalleArticulo`) REFERENCES `detallearticulo` (`idDetalleArticulo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detallearticulo`
--
ALTER TABLE `detallearticulo`
  ADD CONSTRAINT `detalle-categoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON UPDATE CASCADE;

--
-- Constraints for table `notificacion`
--
ALTER TABLE `notificacion`
  ADD CONSTRAINT `notificar-articulo` FOREIGN KEY (`idDetalleArticulo`) REFERENCES `detallearticulo` (`idDetalleArticulo`);

--
-- Constraints for table `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos-admin` FOREIGN KEY (`idAdmin`) REFERENCES `administradores` (`id`);

--
-- Constraints for table `prestamos-articulos`
--
ALTER TABLE `prestamos-articulos`
  ADD CONSTRAINT `articulo-prestamo` FOREIGN KEY (`idArticulo`) REFERENCES `articulos` (`idArticulo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestamo-articulo` FOREIGN KEY (`idPrestamo`) REFERENCES `prestamos` (`idPrestamo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
