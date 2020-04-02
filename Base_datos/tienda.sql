-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-03-2020 a las 18:58:27
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'asier', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `Id` int(11) NOT NULL,
  `id_productos` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `id_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`) VALUES
(1, 'equipaciones_futsal'),
(2, 'zapatillas_futsal'),
(3, 'futbol femenino'),
(4, 'futbol'),
(5, 'botas_futbol'),
(6, 'complementos'),
(7, 'arbitraje'),
(8, 'balones'),
(9, 'material');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `descripcion` varchar(600) NOT NULL,
  `precio` float(7,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `imagen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id`, `id_categoria`, `marca`, `descripcion`, `precio`, `cantidad`, `imagen`) VALUES
(1, 1, 'joma', 'camiseta inter movistar', 39.40, 70, 'inter.jpg'),
(2, 1, 'hummel', 'camiseta osasuna magna', 32.00, 50, 'osasuna.jpg'),
(3, 1, 'nike', 'camiseta fc barcelona futsal', 42.00, 72, 'barsa.jpg'),
(4, 1, 'kelme', 'camiseta el pozo murcia', 38.00, 35, 'pozo.jpg'),
(5, 1, 'umbro', 'camiseta palma futsal', 32.85, 15, 'palma.jpg'),
(6, 1, 'mercury', 'camiseta o parrulo ferrol', 22.00, 28, 'parrulo.jpg'),
(7, 1, 'kelme', 'camiseta aspil vidal ribera de navarra', 28.00, 60, 'aspil.jpg'),
(8, 1, 'hummel', 'camiseta viña albali valdepeñas', 25.00, 63, 'viña.jpg'),
(9, 1, 'macron', 'camiseta levante ud', 25.00, 53, 'levante.jpg'),
(10, 1, 'luanvi', 'camiseta jimbee cartagena', 17.90, 45, 'cartagena.jpg'),
(11, 1, 'adidas', 'camiseta cordoba fs', 32.00, 82, 'cordoba.jpg'),
(12, 1, 'adidas', 'camiseta futbol emotion zaragoza sala 10', 15.70, 10, 'zaragoza.jpg'),
(13, 1, 'kelme', 'camiseta industrias santa coloma', 29.55, 12, 'coloma.jpg'),
(14, 1, 'joma', 'camiseta burela pescados ruben', 18.75, 22, 'pescados.jpg'),
(15, 1, 'kromex', 'camiseta servigroup peñiscola fs', 17.00, 28, 'peñiscola.jpg'),
(16, 1, 'luanvi', 'camiseta jaen paraiso interior', 19.75, 32, 'jaen.jpg'),
(17, 2, 'nike', 'zapatillas nike read gato negras', 123.43, 100, 'nike1.jpg'),
(18, 2, 'nike', 'zapatillas nike read gato blancas', 123.43, 100, 'nike2.jpg'),
(19, 2, 'nike', 'zapatillas nike lunar gato 2', 85.45, 98, 'nike3.jpg'),
(20, 2, 'nike', 'zapatillas nike lunar gato 2 ic', 85.45, 100, 'nike4.jpg'),
(21, 2, 'nike', 'zapatillas nike lunar gato 2', 85.45, 70, 'nike5.jpg'),
(22, 2, 'adidas', 'zapatillas adidas top sala lux', 85.45, 50, 'adidas1.jpg'),
(23, 2, 'adidas', 'zapatillas adidas top sala lux', 85.45, 70, 'adidas2.jpg'),
(24, 2, 'adidas', 'zapatillas adidas top sala lux', 85.45, 80, 'adidas3.jpg'),
(25, 2, 'adidas', 'zapatillas adidas super sala rojas ', 85.45, 80, 'adidas4.jpg'),
(26, 2, 'adidas', 'zaptillas adidas super sala amarillas', 85.45, 80, 'adidas5.jpg'),
(27, 2, 'adidas', 'zapatillas adidas super sala pro', 90.00, 80, 'adidas5.jpg'),
(28, 2, 'adidas', 'zapatillas adidas copa tango 18:3', 37.66, 10, 'adidas6.jpg'),
(29, 2, 'adidas', 'zapatillas adidas copa tango 18:3 blanco', 37.66, 27, 'adidas7.jpg'),
(30, 2, 'munich', 'zapatillas munich continental rojas', 86.11, 50, 'munich1.jpg'),
(31, 2, 'munich', 'zapatillas munich gresca azul', 71.96, 50, 'munich2.jpg'),
(32, 2, 'munich', 'zapatillas munich gresca blanco', 71.96, 50, 'munich3.jpg'),
(33, 2, 'munich', 'zapatillas munich continental azul', 86.11, 50, 'munich4.jpg'),
(34, 2, 'lotto', 'zapatillas lotto  solista 700II turf', 31.96, 36, 'lotto1.jpg'),
(35, 2, 'lotto', 'zapatillas lotto maestro 700II turf', 37.96, 37, 'lotto2.jpg'),
(36, 2, 'umbro', 'zapatillas umbro chaleira II pro', 68.76, 14, 'umbro1.jpg'),
(37, 2, 'nike', 'zapatillas mike mercurial superfly VII', 147.96, 25, 'nike_mer.jpg'),
(38, 2, 'kelme', 'zapatillas kelme lnfs', 44.95, 82, 'kelme.jpg'),
(39, 2, 'new balance', 'zapatillas new balance audazo v4 pro', 64.60, 43, 'nb.jpg'),
(40, 2, 'penalty', 'zapatillas penalty futsal', 64.60, 52, 'penal.jpg'),
(41, 3, 'nike', 'camiseta fc barcelona femenino', 85.00, 100, 'barsa.jpg'),
(42, 3, 'nike', 'camiseta atletico de madrid femenino', 65.60, 100, 'atletico.jpg'),
(43, 3, 'kappa', 'camiseta real betis femenino', 42.75, 100, 'betis.jpg'),
(44, 3, 'nike', 'camiseta sevilla cf femenino', 40.66, 100, 'sevilla.jpg'),
(45, 3, 'luanvi', 'camiseta atletico granadilla femenino', 25.00, 100, 'granadilla.jpg'),
(46, 3, 'macron', 'camiseta real sociedad femenino', 47.00, 90, 'real.jpg'),
(47, 3, 'new balance', 'camiseta athletic club de bilbao femenino', 52.00, 90, 'bilbao.jpg'),
(48, 3, 'joma', 'camiseta edf logroño', 27.90, 90, 'logroño.jpg'),
(49, 3, 'kelme', 'camiseta rayo vallecano femenino', 35.00, 90, 'rayo.jpg'),
(50, 3, 'adidas', 'camiseta cd tacon femenino', 30.50, 90, 'tacon.jpg'),
(51, 3, 'hummel', 'camiseta sporting huelva femenino', 25.66, 90, 'huelva.jpg'),
(52, 3, 'nike', 'camiseta cff madrid femenino', 21.50, 90, 'madrid.png'),
(53, 3, 'kelme', 'camiseta rsd espanyol femenino', 36.50, 100, 'español.jpg'),
(54, 3, 'puma', 'camiseta valencia cf femenino', 39.45, 100, 'valencia.jpg'),
(55, 3, 'macron', 'camiseta deportivo de la coruña femenino', 40.00, 100, 'depor.jpg'),
(56, 3, 'macron', 'camiseta levante ud femenino', 40.52, 100, 'levante.jpg'),
(57, 4, 'nike', 'camiseta fc barcelona', 95.45, 150, 'barsa.jpg'),
(58, 4, 'nike', 'camiseta atletico de madrid', 89.00, 150, 'atletico.png'),
(59, 4, 'adidas', 'camiseta real madrid', 92.00, 150, 'madrid.jpg'),
(60, 4, 'nike', 'camiseta sevilla cf ', 53.45, 150, 'sevilla.png'),
(61, 4, 'hummel', 'camiseta ca osasuna', 63.00, 150, 'osasuna.jpg'),
(62, 4, 'puma', 'camiseta valencia cf', 85.00, 150, 'valencia.jpg'),
(63, 4, 'kappa', 'camiseta real betis balonpie', 70.00, 150, 'betis.jpg'),
(64, 4, 'macron', 'camiseta levante ud', 59.00, 150, 'levante.jpg'),
(65, 4, 'macron', 'camiseta real sociedad', 49.90, 150, 'sociedad.jpg'),
(66, 4, 'nike', 'camiseta granada cf', 57.00, 150, 'granada.jpg'),
(67, 4, 'kelme', 'camiseta rsd espanyol', 69.95, 150, 'español.jpg'),
(68, 4, 'joma', 'camiseta sd eibar', 48.99, 150, 'eibar.jpg'),
(69, 4, 'joma', 'camiseta getafe cf', 55.40, 150, 'getafe.jpg'),
(70, 4, 'adidas', 'camiseta rc celta de vigo', 67.40, 150, 'celta.jpg'),
(71, 4, 'joma', 'camiseta villareal cf', 59.00, 150, 'villareal.jpg'),
(72, 4, 'joma', 'camiseta cd leganes', 47.00, 150, 'leganes.jpg'),
(73, 4, 'adidas', 'camiseta real valladoliz', 61.90, 150, 'valladoliz.jpg'),
(74, 4, 'kelme', 'camiseta deportivo alaves', 70.00, 150, 'alaves.jpg'),
(75, 4, 'new balance', 'camiseta athletic club de bilbao', 80.00, 150, 'bilbao.jpg'),
(76, 4, 'umbro', 'camiseta cd mallorca', 53.49, 150, 'mallorca.jpg'),
(77, 5, 'adidas', 'botas de futbol adidas predator mania', 349.00, 50, 'adidas1.jpg'),
(78, 5, 'adidas', 'botas de futbol adidas predator 20 + f6', 225.00, 70, 'adidas2.jpg'),
(79, 5, 'adidas', 'botas de futbol adidas copa mundial', 112.15, 100, 'adidas3.jpg'),
(80, 5, 'adidas', 'botas de futbol adidas predator 20.3', 62.95, 150, 'adidas4.jpg'),
(81, 5, 'adidas', 'botas de futbol adidas nemeziz 19.1', 153.90, 90, 'adidas5.jpg'),
(82, 5, 'adidas', 'botas de futbol adidas x19.1', 153.45, 90, 'adidas6.jpg'),
(83, 5, 'adidas', 'botas de futbol adidas predator mutator 20.1', 156.00, 90, 'adidas7.jpg'),
(84, 5, 'nike', 'botas de futbol nike mecurial vapor 13 elite', 250.00, 100, 'nike1.jpg'),
(85, 5, 'nike', 'botas de futbol nike phanton vision 2 elite', 189.00, 100, 'nike2.jpg'),
(86, 5, 'nike', 'botas de futbol nike superfly 7 elite', 203.00, 100, 'nike3.jpg'),
(87, 5, 'nike', 'botas de futbol nike phanton venon academy', 175.00, 100, 'nike4.jpg'),
(88, 5, 'nike', 'botas de futbol nike tiempo legend 8', 49.00, 100, 'nike5.jpg'),
(89, 5, 'nike', 'botas de futbol nike premier 2 5g-pro', 84.00, 100, 'nike6.jpg'),
(90, 5, 'nike', 'botas de futbol nike superfly 7 elite rosa', 189.00, 100, 'nike7.jpg'),
(91, 5, 'puma', 'botas de futbol puma one 20.1', 157.00, 60, 'puma1.jpg'),
(92, 5, 'puma', 'botas de futbol puma future 5.2', 97.50, 60, 'puma2.jpg'),
(93, 5, 'puma', 'botas de futbol puma spirit 2', 36.00, 100, 'puma3.jpg'),
(94, 5, 'umbro ', 'botas de futbol umbro speciale ethernal', 63.00, 100, 'umbro1.jpg'),
(95, 5, 'umbro', 'botas de futbol umbro meduse 3 elite', 170.00, 100, 'umbro2.jpg'),
(96, 5, 'umbro', 'botas de futbol umbro velocita 4', 112.00, 100, 'umbro3.jpg'),
(97, 5, 'new balance', 'botas de futbol new balance 442 team', 65.50, 100, 'nb1.jpg'),
(98, 5, 'new balance', 'botas de futbol new balance furan v6', 100.00, 100, 'nb2.jpg'),
(99, 5, 'mizuno', 'botas de futbol mizuno morelia 2', 127.00, 100, 'mizuno1.jpg'),
(100, 5, 'mizuno', 'botas de futbol mizuno monerdida noe select', 46.60, 100, 'mizuno2.jpg'),
(101, 5, 'lotto', 'botas de futbol lotto stadio 45', 145.00, 100, 'lotto1.jpg'),
(102, 5, 'patrick', 'botas de futbol patrick gold cup', 61.30, 100, 'patrick1.jpg'),
(103, 5, 'patrick', 'botas de futbol patrick excellent', 48.50, 100, 'patrick2.jpg'),
(104, 6, 'nike', 'espinilleras nike mercurial fc barcelona', 13.47, 35, 'espinilleras1.jpg'),
(105, 6, 'puma', 'espinilleras puma futures 19.2', 14.97, 35, 'espinilleras2.jpg'),
(106, 6, 'adidas', 'espinilleras adidas x pro', 12.48, 35, 'espinilleras3.jpg'),
(107, 6, 'joma', 'espinilleras joma spartan', 9.98, 35, 'espinilleras4.jpg'),
(108, 6, 'ho soccer', 'espinilleras ho soccer titan 2', 9.95, 35, 'espinilleras5.jpg'),
(109, 6, 'adidas', 'espinilleras adidas x foil', 29.98, 35, 'espinilleras6.jpg'),
(110, 6, 'uhlsport', 'espinillleras uhlsport pro flex', 8.98, 35, 'espinilleras7.jpg'),
(111, 6, 'munich', 'espinilleras munich outbust', 7.95, 35, 'espinilleras8.jpg'),
(112, 6, 'nike', 'espinilleras nike mercurial', 24.00, 35, 'espinilleras9.jpg'),
(113, 6, 'nike', 'espinilleras nike mercurial CR7', 27.00, 35, 'espinilleras10.jpg'),
(114, 6, 'adidas', 'mochila adidas gymsack', 5.23, 25, 'mochila1.jpg'),
(115, 6, 'umbro', 'mochila umbro zapatillero', 6.95, 25, 'mochila2.jpg'),
(116, 6, 'munich', 'mochila munich portabalones', 10.98, 25, 'mochila3.jpg'),
(117, 6, 'new balance', 'mochila new balance zapatillero', 7.50, 25, 'mochila4.jpg'),
(118, 6, 'joma', 'kit de brazaletes joma', 1.90, 50, 'brazalete.jpg'),
(119, 6, '', 'brazalete capitan multicolor', 0.75, 50, 'brazalete2.jpg'),
(120, 6, 'umbro ', 'chanclas umbro', 16.95, 60, 'chanclas1.jpg'),
(121, 6, 'nike', 'chanclas nike', 28.00, 60, 'chanclas2.jpg'),
(122, 6, 'adidas', 'chanclas adidas', 22.00, 60, 'chanclas3.jpg'),
(123, 6, 'munich', 'chanclas munich', 18.75, 60, 'chanclas4.jpg'),
(124, 6, '', 'cinta sujeta espinilleras', 3.59, 60, 'sujeta1.jpg'),
(125, 6, '', 'tacos de recambio', 11.00, 60, 'tacos.jpg'),
(126, 6, '', 'tobillera cromer support', 20.95, 100, 'tobillera.jpg'),
(127, 6, 'st sport', 'chaleco st sport GPS', 199.99, 20, 'chaleco1.jpg'),
(128, 6, 'cataput', 'chaleco cataput PLAYER GPS', 255.00, 20, 'chaleco2.jpg'),
(129, 7, 'kelme', 'kelme equipación arbitro amarillo', 19.95, 30, 'equi1.jpg'),
(130, 7, 'kelme', 'kelme aquipación arbitro negro', 19.95, 30, 'equi2.jpg'),
(131, 7, '', 'camiseta arbitro salmón', 12.51, 30, 'equi3.jpg'),
(132, 7, '', 'camiseta arbitro rayas', 18.90, 30, 'equi4.jpg'),
(133, 7, '', 'camiseta arbitro manga larga amarilla', 10.90, 30, 'equip5.jpg'),
(134, 7, '', 'camiseta arbitro manga larga negro', 10.90, 30, 'equip6.jpg'),
(135, 7, 'patrick', 'patrick set arbitro naranja', 23.40, 30, 'equi8.jpg'),
(136, 7, 'kelme', 'kelme equipación arbitro violeta', 22.95, 30, 'equi9.jpg'),
(137, 7, 'kelme', 'kelme equipación arbitro amarilla', 22.95, 30, 'equi10.jpg'),
(138, 7, 'patrick', 'patrick set arbitro verde', 23.40, 30, 'equi11.jpg'),
(139, 7, 'adidas', 'zapatillas adidas copa mundial multitaco', 149.90, 50, 'zap1.jpg'),
(140, 7, 'adidas', 'zapatillas adidas mundial team turf', 94.99, 50, 'zap2.jpg'),
(141, 7, 'adidas', 'zapatillas adidas copa mundial aluminio', 159.99, 50, 'zap3.jpg'),
(142, 7, 'joma', 'zapatillas joma aguila gol multitaco', 49.50, 50, 'zap4.jpg'),
(143, 7, 'patrick', 'zapatillas patrick gold cup', 79.50, 50, 'zap5.jpg'),
(144, 7, '', 'set de 2 banderines liga C', 12.90, 10, 'banderas1.jpg'),
(145, 7, '', 'set de 2 banderines linier con funda', 14.95, 10, 'banderas2.jpg'),
(146, 7, '', 'set de 2 banderines giratorios con funda', 29.90, 10, 'banderas3.jpg'),
(147, 7, 'casio', 'casio reloj amarillo', 29.90, 25, 'reloj.jpg'),
(148, 7, 'casio', 'casio reloj azul', 29.90, 25, 'reloj1.jpg'),
(149, 7, '', 'spray marcador de posicón', 12.40, 100, 'spray.jpg'),
(150, 7, '', 'monedas para sorteo', 2.50, 80, 'monedas.jpg'),
(151, 7, '', 'tarjetero arbitro club', 3.80, 80, 'set_targetas.jpg'),
(152, 7, '', 'tarjetero arbitro rule ', 2.70, 80, 'set_targetas1.jpg'),
(153, 7, '', 'tarjeta arbitro amarilla', 0.70, 80, 'amarilla.jpg'),
(154, 7, '', 'tarjeta arbitro roja', 0.70, 80, 'roja.jpg'),
(155, 7, '', 'tarjetas arbitro amarilla y roja', 1.70, 80, 'targeta.jpg'),
(156, 7, '', 'silbato fox 40 classic', 5.50, 15, 'silb1.jpg'),
(157, 7, '', 'silbato classic', 1.90, 15, 'silb2.jpg'),
(158, 7, '', 'pack dos cordones para silbato', 0.70, 15, 'cordon_silbato.jpg'),
(159, 7, '', 'pack dos silbatos con cordón', 3.30, 15, 'silb4.jpg'),
(160, 8, 'adidas', 'balón adidas UCL finale estambul 2020', 34.95, 20, 'balon_cham.jpg'),
(161, 8, 'puma', 'baloón Laliga 2020', 35.95, 20, 'balon_laliga.jpg'),
(162, 8, 'adidas', 'balón adidas eurocup 2020', 30.90, 20, 'balon_eurocup.jpg'),
(163, 8, 'derbystar', 'balón derbystar bundesliga 2020', 15.90, 20, 'balon_bundesliga.jpg'),
(164, 8, 'adidas', 'balón adidas eurocup 2008', 37.89, 20, 'balon_eurocup_2.jpg'),
(165, 8, 'adidas', 'balón adidas mundia rusia 2018', 14.75, 20, 'balon_mundial.jpg'),
(166, 8, 'adidas', 'balón adidas mundial 2002', 45.00, 20, 'balon_mundial_2.jpg'),
(167, 8, 'nike', 'balón nike premier league 2020', 25.00, 20, 'balon_premier.jpg'),
(168, 8, 'joma', 'balón joma LNFS 2020', 35.00, 20, 'balon_futsal_lnfs.jpg'),
(169, 8, 'nike', 'balón nike maestro futsal', 19.95, 20, 'balon_futsal_nike.jpg'),
(170, 8, 'adidas', 'balón adidas futsal', 49.95, 20, 'balon_futsal_adidas.jpg'),
(171, 8, 'micasa', 'balón micasa futsal', 20.90, 20, 'balon_futsal_micasa.jpg'),
(172, 9, '', 'pizarra táctica magnética (45x60)', 39.95, 10, 'pizarra1.jpg'),
(173, 9, '', 'carpeta JIM sport táctica', 15.75, 10, 'pizarra2.jpg'),
(174, 9, '', 'carpeta con pizarra magnética', 19.95, 10, 'pizarra3.jpg'),
(175, 9, 'rucanor', 'rucanor-coachingboard', 18.99, 15, 'pizarra4.jpg'),
(176, 9, '', 'cargador de botellines azul 10unds', 18.99, 25, 'botellines1.jpg'),
(177, 9, 'adidas', 'adidas performance botellin 750ml', 5.94, 15, 'botellin2.jpg'),
(178, 9, '', 'sportect 10 botellines', 14.95, 15, 'botellin3.jpg'),
(179, 9, 'nike', 'botellín nike hyperfuel 532ml', 20.90, 17, 'botellin4.jpg'),
(180, 9, '', 'paquete de entrenamiento', 27.95, 22, 'img1.jpg'),
(181, 9, '', 'set de salto', 30.75, 35, 'img2.jpg'),
(182, 9, '', 'pack de picas slalom 8unds', 29.99, 40, 'img3.jpg'),
(183, 9, '', 'disco de señal de entrenamiento', 12.45, 35, 'img11.jpg'),
(184, 9, '', 'set de conos de entrenamiento', 7.95, 35, 'img12.jpg'),
(185, 9, 'forza', 'forza vallas de seguridad 15cm', 24.99, 35, 'img6.jpg'),
(186, 9, '', 'pure 2 imprude red de rebote futbol', 84.51, 40, 'img7.jpg'),
(187, 9, '', 'petos rojos 10unds', 14.00, 40, 'img8.jpg'),
(188, 9, 'umbro', 'umbro peto 1 und', 2.50, 40, 'img9.jpg'),
(189, 9, '', 'carro de barrera ', 70.12, 3, 'img10.jpg'),
(190, 5, 'mizuno', 'botas de futbol mizuno morelia 2', 127.00, 100, 'mizuno1.jpg'),
(192, 0, 'joma', 'joma camiseta', 1.40, 23, 'atletico.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_venta`
--

CREATE TABLE `productos_venta` (
  `Id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_productos` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `precio` double NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `nombre`, `apellidos`, `correo`, `username`, `password`) VALUES
(4, 'lucas', 'perez garcia', 'perez@gmail.es', 'lucas89', '142536'),
(5, 'maria', 'fernandez mangado', 'maria@hotmail.com', 'maria16', 'solanadwqdewf'),
(6, 'jesus', 'gonzalez iriarte', 'jgonzalez12@gmail.com', 'jesusgonz', '7412'),
(7, 'carmen', 'lopez gonzalez', 'carmen43@gmail.com', 'carmenlopez', 'lopez12'),
(8, 'naike', 'prieto', 'naike@hotmail.com', 'naike', '1234'),
(9, 'marcos', 'sevilla sanchez', 'marcossevilla@hotmail.com', 'marcosevilla', 'abcd123'),
(10, 'paco', 'hernandez jean', 'hernandez@gmail.com', 'pacoher', 'paquito'),
(11, 'lola', 'iriarte', 'loga@gamil.com', 'lola', 'lola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `Id` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL,
  `total` double NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_productos` (`id_productos`,`id_usuarios`),
  ADD KEY `id_usuarios` (`id_usuarios`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `categoria` (`id_categoria`),
  ADD KEY `categoria_2` (`id_categoria`);

--
-- Indices de la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_venta` (`id_venta`,`id_productos`),
  ADD KEY `id_productos` (`id_productos`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_usuarios` (`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT de la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`Id`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`Id`);

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`id`) REFERENCES `productos` (`id_categoria`);

--
-- Filtros para la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  ADD CONSTRAINT `productos_venta_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`Id`),
  ADD CONSTRAINT `productos_venta_ibfk_2` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`Id`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
