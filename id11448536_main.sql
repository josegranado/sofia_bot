-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-11-2019 a las 17:21:44
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id11448536_main`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesscodes`
--

CREATE TABLE `accesscodes` (
  `id` int(20) NOT NULL,
  `code` varchar(100) NOT NULL,
  `user_telegram_id` varchar(100) NOT NULL,
  `chat_telegram_id` varchar(100) NOT NULL,
  `chat_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `accesscodes`
--

INSERT INTO `accesscodes` (`id`, `code`, `user_telegram_id`, `chat_telegram_id`, `chat_id`) VALUES
(1, 'josegranado2014', '1', '2', 3),
(2, 'marisolalfonsoluis5510gw', '1021005638', '-303503519', 8),
(4, 'marisolalfonsoluis9848gw', '1021005638', '-338945679', 9),
(7, 'marisolalfonsoluis3328gw', '1021005638', '-288743445', 7),
(8, 'josegranado334gw', '914279849', '-338945679', 9),
(9, 'josegranado4492gw', '914279849', '-288743445', 7),
(10, 'josegranado4444gw', '914279849', '-303503519', 8),
(11, 'josegranado8658gw', '914279849', '-328974644', 23),
(12, 'josegranado7071gw', '914279849', '-1001325440549', 24),
(13, 'marisolalfonsoluis8862gw', '1021005638', '-1001325440549', 24),
(14, 'marisolalfonsoluis3516gw', '1021005638', '-1001348007259', 25),
(15, 'pablogargiulo3526gw', '607037670', '-1001325440549', 24),
(16, 'marisolalfonsoluis134gw', '1021005638', '-1001349050525', 26),
(17, 'marisolalfonsoluis5637gw', '1021005638', '-1001229232719', 27),
(18, 'kelviarodrigues9092gw', '899958715', '-1001325440549', 24),
(19, 'marisolalfonsoluis5055gw', '1021005638', '-1001107790440', 29),
(20, 'marisolalfonsoluis3339gw', '1021005638', '-1001223908517', 28),
(21, 'belkisrivas5290gw', '397525096', '-1001223908517', 28),
(22, 'maríaasaggesep9898gw', '1003947663', '-1001223908517', 28),
(23, 'ana4475gw', '609326706', '-1001325440549', 24),
(24, 'maríaasaggesep9157gw', '1003947663', '-1001349050525', 26),
(25, 'maríaasaggesep5471gw', '1003947663', '-1001325440549', 24),
(26, 'waltervalenciahenao1193gw', '790201964', '-1001349050525', 26),
(27, 'sara2164gw', '915216473', '-1001223908517', 28),
(28, 'marisolalfonsoluis2905gw', '1021005638', '-1001179313572', 30),
(29, 'marthareynapacheco5803gw', '983537245', '-1001349050525', 26),
(30, 'brandoncastañeda8347gw', '358655662', '-1001325440549', 24),
(31, 'analopez3351gw', '1038035106', '-1001349050525', 26),
(32, 'keykoserrano6165gw', '1002822302', '-1001349050525', 26),
(33, 'leonorcamarillo1081gw', '822348039', '-1001223908517', 28),
(34, 'leonorcamarillo197gw', '822348039', '-1001349050525', 26),
(35, 'lisu9871gw', '920942097', '-1001223908517', 28),
(36, 'trabajadesdecasa3484gw', '752720541', '-1001325440549', 24),
(37, 'trabajadesdecasa5343gw', '752720541', '-1001107790440', 29),
(38, 'darwinvalencia1815gw', '664436188', '-1001325440549', 24),
(39, 'carlos2148gw', '161292739', '-1001325440549', 24),
(40, 'danielaungida1287gw', '861436073', '-1001349050525', 26),
(41, 'iracyllinaresalves7085gw', '290398205', '-1001325440549', 24),
(42, 'javierclino3820gw', '947008404', '-1001325440549', 24),
(43, 'erikitatenemaza5755gw', '808572479', '-1001349050525', 26),
(44, 'conchigil9109gw', '858469686', '-1001325440549', 24),
(45, 'jennyraquelpaytan7747gw', '923094477', '-1001223908517', 28),
(46, 'jennyraquelpaytan2171gw', '923094477', '-1001349050525', 26),
(47, 'marianellamorales3682gw', '678892188', '-1001223908517', 28),
(48, 'jhonatanpardoj7287gw', '911241748', '-1001223908517', 28),
(49, 'sarah7697gw', '996016811', '-1001223908517', 28),
(50, 'sarah2075gw', '996016811', '-1001325440549', 24),
(51, 'carolinavásquez7495gw', '587348271', '-1001349050525', 26),
(52, 'rossetta3785gw', '529640207', '-1001223908517', 28),
(53, 'rossetta2054gw', '529640207', '-1001179313572', 30),
(54, 'rossetta390gw', '529640207', '-1001325440549', 24),
(55, 'rossetta7436gw', '529640207', '-1001348007259', 25),
(56, 'rossetta1230gw', '529640207', '-1001107790440', 29),
(57, 'hugogilmersotocristobal7961gw', '754561813', '-1001223908517', 28),
(58, 'taihémontejo9204gw', '933513335', '-1001349050525', 26),
(59, 'clevis2143gw', '1065648351', '-1001349050525', 26),
(60, 'silvia.1154gw', '769968472', '-1001348007259', 25),
(61, 'hilario6510gw', '967250899', '-1001325440549', 24),
(62, 'akashamabiocoach4584gw', '967123656', '-1001348007259', 25),
(63, 'supermagia3606gw', '746188620', '-1001223908517', 28),
(64, 'supermagia6345gw', '746188620', '-1001349050525', 26),
(65, 'marisa8213gw', '385044495', '-1001325440549', 24),
(66, 'stevenvegas770gw', '853933294', '-1001325440549', 24),
(67, 'freidad.gary4041gw', '915058543', '-1001349050525', 26),
(68, 'lucasdelorenzo3747gw', '1037145699', '-1001349050525', 26),
(69, 'lucasdelorenzo3832gw', '1037145699', '-1001325440549', 24),
(70, 'marasanchez9269gw', '745202066', '-1001223908517', 28),
(71, 'madeleinehemelberg9276gw', '511220304', '-1001223908517', 28),
(72, 'sil128gw', '761515721', '-1001325440549', 24),
(73, 'fernandoviera6572gw', '384034990', '-1001325440549', 24),
(74, 'inesrojasgonzalez8367gw', '850178930', '-1001223908517', 28),
(75, 'inesrojasgonzalez8911gw', '850178930', '-1001349050525', 26),
(76, 'arafernandez3186gw', '293298868', '-1001223908517', 28),
(77, 'arafernandez5473gw', '293298868', '-1001349050525', 26),
(78, 'alejandroariasrodríguez2334gw', '41003148', '-1001223908517', 28),
(79, 'isabel4364gw', '616875303', '-1001223908517', 28),
(80, 'brandonarceguarniz1270gw', '838777080', '-1001325440549', 24),
(81, 'gerdaseekatz4748gw', '1045418920', '-1001107790440', 29),
(82, 'angeles9174gw', '723326319', '-1001107790440', 29),
(83, 'nicoláscontinanza9778gw', '476649803', '-1001107790440', 29),
(84, 'cristinajh54gw', '419678486', '-1001107790440', 29),
(85, 'jhennerflores1820gw', '1006901377', '-1001107790440', 29),
(86, 'lorenameh9595gw', '849988432', '-1001107790440', 29),
(87, 'emanuel7017gw', '273737515', '-1001107790440', 29),
(88, 'hunter6157gw', '732280366', '-1001107790440', 29),
(89, 'maryparra6961gw', '622733050', '-1001107790440', 29),
(90, 'andresisaza6699gw', '922803788', '-1001107790440', 29),
(91, 'whistongzavaladíaz6394gw', '776779550', '-1001107790440', 29),
(92, 'franciscolara2948gw', '486141468', '-1001107790440', 29),
(93, 'natashaalmora7702gw', '954204325', '-1001107790440', 29),
(94, 'josemanuelnaranjo2970gw', '589605065', '-1001107790440', 29),
(95, 'marketingsoftware5089gw', '983075350', '-1001107790440', 29),
(96, 'alejandraperabeles6743gw', '327134359', '-1001107790440', 29),
(97, 'miguelangel8459gw', '792483041', '-1001107790440', 29),
(98, 'aliciaamor3053gw', '797468467', '-1001107790440', 29),
(99, 'fernandoalbertopérez9278gw', '799879471', '-1001107790440', 29),
(100, 'hectornurena1591gw', '633161173', '-1001107790440', 29),
(101, 'javierbustamante1123gw', '289909581', '-1001107790440', 29),
(102, 'ana777gw', '568551644', '-1001107790440', 29),
(103, 'jonsnow7759gw', '721428843', '-1001107790440', 29),
(104, 'esthersanchez7089gw', '160913063', '-1001107790440', 29),
(105, 'ignacioramirez6444gw', '513720361', '-1001107790440', 29),
(106, 'lorenaalonso5533gw', '684037479', '-1001107790440', 29),
(107, 'miguelnarváez8166gw', '719578980', '-1001107790440', 29),
(108, 'bienve985gw', '842621340', '-1001107790440', 29),
(109, 'jessaz4870gw', '755736634', '-1001107790440', 29),
(110, 'faridhammudanrodriguez6881gw', '267484785', '-1001107790440', 29),
(111, 'inesgarcía3627gw', '899742291', '-1001107790440', 29),
(112, 'ea6812gw', '969051808', '-1001107790440', 29),
(113, 'miguel8167gw', '800473298', '-1001107790440', 29),
(114, '.6693gw', '743782335', '-1001107790440', 29),
(115, 'esencia2102gw', '380818416', '-1001107790440', 29),
(116, 'belfordjaime5818gw', '384612986', '-1001107790440', 29),
(117, 'juliÁnzelada8904gw', '755114184', '-1001107790440', 29),
(118, 'marasanchez63gw', '745202066', '-1001179313572', 30),
(119, 'taliacarranza2111gw', '639497369', '-1001223908517', 28),
(120, 'm.c.c.h.7077gw', '780245099', '-1001223908517', 28),
(121, 'maryviscarri9817gw', '869001384', '-1001349050525', 26),
(122, 'maryviscarri89gw', '869001384', '-1001223908517', 28),
(123, 'geanettegarcia4433gw', '688767647', '-1001223908517', 28),
(124, 'marialazo5203gw', '913979538', '-1001223908517', 28),
(125, 'yolandapinohernandez3736gw', '549946821', '-1001349050525', 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `telegram_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `id` int(20) NOT NULL,
  `telegram_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `chat`
--

INSERT INTO `chat` (`id`, `telegram_id`) VALUES
(10, '-338945679'),
(22, '-303503519'),
(23, '-328974644'),
(24, '-1001325440549'),
(25, '-1001348007259'),
(26, '-1001349050525'),
(27, '-1001229232719'),
(28, '-1001223908517'),
(29, '-1001107790440'),
(30, '-1001179313572'),
(31, '-1001348007259');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL,
  `chat_id_telegram` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesscodes`
--
ALTER TABLE `accesscodes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesscodes`
--
ALTER TABLE `accesscodes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
