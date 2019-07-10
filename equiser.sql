-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2019 a las 03:01:31
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
-- Base de datos: `equiser`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venezuela` tinyint(1) NOT NULL,
  `colombia` tinyint(1) NOT NULL,
  `panama` tinyint(1) NOT NULL,
  `usa` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `name`, `name_en`, `subtitle`, `subtitle_en`, `description`, `description_en`, `slug`, `venezuela`, `colombia`, `panama`, `usa`, `created_at`, `updated_at`) VALUES
(1, 'DEMAG CC 2800-1', 'DEMAG CC 2800-1', 'GRÚAS SOBRE ORUGA', 'CRANES ON CATERPILLAR', 'Demag CC 2800-1 tiene una capacidad de elevación de 660 toneladas con una longitud máxima de 275 pies de auge, y hasta 591 pies con una extensión de plumín.', 'Demag CC 2800-1 tiene una capacidad de aumento de 660 toneladas con una longitud máxima de 275 pies de auge, y hasta 591 pies con una extensión de plumín.', 'demag-cc-2800-1', 1, 0, 0, 0, '2019-06-11 00:24:20', '2019-06-11 00:25:00'),
(2, 'LIEBHERR LTM1800', 'LIEBHERR LTM1800', 'GRÚAS TELÉSCOPICAS SOBRE CAMIÓN', 'TRUCK TELESCOPIC CRANES', 'Grúa sobre camión, todo terreno de rápida intervención, con una capacidad de carga de hasta 880 toneladas.', 'Truck crane, all-terrain quick intervention, with a load capacity of up to 880 tons.', 'liebherr-ltm1800', 1, 0, 0, 0, '2019-06-11 00:27:31', '2019-06-11 00:27:31'),
(3, 'DEMAG AC1300', 'DEMAG AC1300', 'GRÚAS TELESCÓPICAS SOBRE CAMIÓN', 'TRUCK TELESCOPIC CRANES', 'Grúa telescópica sobre camión.', 'Telescopic crane on truck.', 'demag-ac1300', 1, 0, 0, 0, '2019-06-11 00:28:58', '2019-06-11 00:28:58'),
(4, 'ZOOMLION QUY 200', 'ZOOMLION QUY 200', 'ZOOMLION QUY 200', 'ZOOMLION QUY 200', 'CAPACIDAD: 220 TON.\r\nLONGITUD DE PLUMA: 20 – 83 m.', 'CAPACITY: 220 TON.\r\nLENGTH OF BOOM: 20 - 83 m.', 'zoomlion-quy-200', 0, 1, 0, 0, '2019-06-13 19:24:14', '2019-06-13 19:24:14'),
(5, 'LT 1130', 'LT 1130', 'LT 1130', 'LT 1130', 'CAPACIDAD: 130 TON.\r\nLONGITUD DE BOOM: 49 m.', 'CAPACITY: 130 TON.\r\nBOOM LENGTH: 49 m', 'lt-1130', 1, 1, 0, 0, '2019-06-13 19:25:10', '2019-06-17 22:02:35'),
(6, 'LIEBHERR LTM 1060-2', 'LIEBHERR LTM 1060-2', 'LIEBHERR LTM 1060-2', 'LIEBHERR LTM 1060-2', 'CAPACIDAD: 60 TON.\r\nLONGITUD DE BOOM: 42 m.', 'CAPACITY: 60 TON.\r\nBOOM LENGTH: 42 m.', 'liebherr-ltm-1060-2', 0, 1, 0, 0, '2019-06-13 19:26:02', '2019-06-13 19:26:02'),
(7, 'DEMAG AC 55 L', 'DEMAG AC 55 L', 'DEMAG AC 55 L', 'DEMAG AC 55 L', 'CAPACIDAD: 60 TON.\r\nLONGITUD DE BOOM: 44 m.', 'CAPACITY: 60 TON.\r\nBOOM LENGTH: 44 m.', 'demag-ac-55-l', 0, 1, 0, 0, '2019-06-13 19:27:59', '2019-06-13 19:27:59'),
(8, 'MONTACARGAS CAT DP150', 'MONTACARGAS CAT DP150', 'MONTACARGAS CAT DP150', 'MONTACARGAS CAT DP150', 'CAPACIDAD: 16 TON.', 'CAPACITY: 16 TON.', 'montacargas-cat-dp150', 0, 1, 0, 0, '2019-06-13 19:31:30', '2019-06-13 19:31:30'),
(9, 'TRACTOCAMION KENTWORTH (6)', 'TRACTOCAMION KENTWORTH (6)', 'TRACTOCAMION KENTWORTH (6)', 'TRACTOCAMION KENTWORTH (6)', 'Trailer extensible camabaja. Capacidad 50 ton. Camabaja 50 ton.', 'Extendable trailer bed. 50 ton capacity Camao 50 ton.', 'tractocamion-kentworth-6', 0, 1, 0, 0, '2019-06-13 19:32:54', '2019-06-13 19:32:54'),
(10, 'LINK-BELT', 'LINK-BELT', 'LINK-BELT', 'LINK-BELT', 'SERIE: F3JI5057 <br>\r\nMARCA: LINK-BELT <br>\r\nMODELO: HTC11100 <br>\r\nCAPACIDAD: 100 TON <br>\r\nAÑO: 2002<br>', 'SERIE: F3JI5057 <br>\r\nMARCA: LINK-BELT <br>\r\nMODEL: HTC11100 <br>\r\nCAPACITY: 100 TON <br>\r\nYear: 2002<br>', 'link-belt', 0, 0, 1, 0, '2019-06-13 19:41:33', '2019-06-13 20:17:08'),
(11, 'TEREX RT 780', 'TEREX', 'TEREX RT 780', 'TEREX', 'CAPACIDAD: 80 TON <br>', 'CAPACITY: 80 TON <br>', 'terex-rt-780', 0, 0, 1, 0, '2019-06-13 19:58:16', '2019-06-13 20:11:48'),
(12, 'GROVE RT 700E', 'GROVE RT 700E', 'GROVE RT 700E', 'GROVE RT 700E', 'SERIE: 224707 <br>\r\n MARCA: GROVE <br>\r\n MODELO: RT700E <br>\r\n CAPACIDAD: 70 TON <br>\r\n AÑO: 2006<br>', 'SERIE: 224707 <br>\r\n MARCA: GROVE <br>\r\n MODEL: RT700E <br>\r\n CAPACITY: 70 TON <br>\r\n YEAR: 2006<br>', 'grove-rt-700e', 0, 0, 1, 0, '2019-06-13 19:59:58', '2019-06-13 19:59:58'),
(13, 'GROVE RT 865B', 'GROVE RT 865B', 'GROVE RT 865B', 'GROVE RT 865B', 'SERIE: 83866 <br>\r\n MARCA: GROVE <br>\r\n MODELO: RT865B <br>\r\n CAPACIDAD: 65 TON <br>\r\n AÑO: 1996<br>\r\n\r\n(3 Unidades).', 'SERIE: 83866 <br>\r\n MARCA: GROVE <br>\r\n MODEL: RT865B <br>\r\n CAPACITY: 65 TON <br>\r\n YEAR: 1996<br>\r\n\r\n(3 Units).', 'grove-rt-865b', 0, 0, 1, 0, '2019-06-13 20:01:18', '2019-06-13 20:12:33'),
(14, 'GROVE RT 865BXL', 'GROVE RT 865BXL', 'GROVE RT 865BXL', 'GROVE RT 865BXL', 'SERIE: 86142 <br>\r\n MARCA: GROVE <br>\r\n MODELO: RT865BXL <br>\r\n CAPACIDAD: 65 TON <br>\r\n AÑO: 1996', 'SERIE: 86142 <br>\r\n MARCA: GROVE <br>\r\n MODEL: RT865BXL <br>\r\n CAPACITY: 65 TON <br>\r\n YEAR: 1996', 'grove-rt-865bxl', 0, 0, 1, 0, '2019-06-13 20:02:55', '2019-06-13 20:02:55'),
(15, 'GMK 5200 GROVE', 'GMK 5200 GROVE', 'GMK 5200 GROVE', 'GMK 5200 GROVE', '<b>SERIE:</b> WG12206 <br>\r\n<b>MARCA:</b> GROVE <br>\r\n<b>MODELO:</b> GMK 5200 <br>\r\n<b>CAPACIDAD:</b> 200 TON <br>\r\n<b>AÑO:</b> 2010', '<b>SERIE:</b> WG12206 <br>\r\n<b>MARCA:</b> GROVE <br>\r\n<b>MODEL:</b> GMK 5200 <br>\r\n<b>CAPACITY:</b> 200 TON <br>\r\n<b>YEAR:</b> 2010', 'gmk-5200-grove', 0, 0, 1, 1, '2019-06-13 20:04:15', '2019-06-18 23:12:13'),
(16, 'GROVE RT 530E', 'GROVE RT 530E', 'GROVE RT 530E', 'GROVE RT 530E', 'SERIE: 224572 <br>\r\n MARCA: GROVE <br>\r\n MODELO: RT530 <br>\r\n CAPACIDAD: 30 TON <br>\r\n AÑO: 2005<br>', 'SERIE: 224572 <br>\r\n MARCA: GROVE <br>\r\n MODEL: RT530 <br>\r\n CAPACITY: 30 TON <br>\r\n YEAR: 2005<br>', 'grove-rt-530e', 0, 0, 1, 0, '2019-06-13 20:05:35', '2019-06-13 20:05:35'),
(17, 'ALTEC PETERBILT', 'ALTEC PETERBILT', 'ALTEC PETERBILT', 'ALTEC PETERBILT', 'SERIE: G0053 <br>\r\n MARCA: ALTEC <br>\r\n MODELO: AC38-127S <br>\r\n CAPACIDAD: 38 TON<br>\r\n AÑO: 2005<br>', 'SERIE: G0053 <br>\r\n MARCA: ALTEC <br>\r\n MODEL: AC38-127S <br>\r\n CAPACITY: 38 TON<br>\r\n YEAR: 2005<br>', 'altec-peterbilt', 0, 0, 1, 0, '2019-06-13 20:06:55', '2019-06-13 20:06:55'),
(18, 'SANY STC 1000C', 'SANY STC 1000C', 'SANY STC 1000C', 'SANY STC 1000C', '<b>SERIE:</b> 2185<br>\r\n<b>MARCA:</b> SANY<br>\r\n<b>MODELO:</b> STC 1000C<br>\r\n<b>CAPACIDAD:</b> 150 TON<br>\r\n<b>AÑO:</b> 2014', '<b>SERIE:</b> 2185<br>\r\n<b>MARCA:</b> SANY<br>\r\n<b>MODEL:</b> STC 1000C<br>\r\n<b>CAPACITY:</b> 150 TON<br>\r\n<b>YEAR:</b> 2014', 'sany-stc-1000c', 1, 0, 1, 0, '2019-06-13 20:11:28', '2019-06-17 22:34:52'),
(19, 'CAMIÓN GRÚA ALTEC', 'TRUCK CRANE ALTEC', 'CAMIÓN GRÚA ALTEC', 'TRUCK CRANE ALTEC', 'CAPACIDAD: (38 Ton).', 'CAPACITY: (38 Ton).', 'camion-grua-altec', 0, 0, 1, 0, '2019-06-13 20:14:45', '2019-06-13 20:14:45'),
(20, 'GRÚA SAC 2200', 'CRANE SAC 2200', 'GRÚA SAC 2200', 'CRANE SAC 2200', 'CAPACIDAD: (275 Ton).', 'CAPACITY: (275 Ton).', 'grua-sac-2200', 0, 0, 1, 0, '2019-06-13 20:16:33', '2019-06-13 20:16:33'),
(21, 'KRUPP KMK6200', 'KRUPP KMK6200', 'GRÚAS TELESCÓPICAS SOBRE CAMIÓN', 'TRUCK TELESCOPIC CRANES', '<b>Modelo:</b> KMK6200 YOM<br>\r\n<b>Marca:</b> Krupp Capacidad<br>\r\n<b>Max:</b> 200T Max<br>\r\n<b>Radio:</b> 52.8M<br>\r\n<b>Longitud de la pluma principal:</b> 14,8 —- 52.8M <br>', '<b>Model:</b> KMK6200 YOM<br>\r\n<b>Marca:</b> Krupp Capacidad<br>\r\n<b>Max:</b> 200T Max<br>\r\n<b>Radio:</b> 52.8M<br>\r\n<b>Length of the main boom:</b> 14,8 —- 52.8M<br>', 'krupp-kmk6200', 1, 0, 0, 0, '2019-06-17 21:51:31', '2019-06-17 22:49:38'),
(22, 'GROVE AT1500', 'GROVE AT1500', 'GRÚAS TELESCÓPICAS SOBRE CAMIÓN', 'TRUCK TELESCOPIC CRANES', 'GROVE AT1500', 'GROVE AT1500', 'grove-at1500', 1, 0, 0, 0, '2019-06-17 21:56:40', '2019-06-17 21:56:40'),
(23, 'LIEBHERR LTM1200', 'LIEBHERR LTM1200', 'GRÚAS TELESCÓPICAS SOBRE CAMIÓN', 'TRUCK TELESCOPIC CRANES', 'LIEBHERR LTM1200', 'LIEBHERR LTM1200', 'liebherr-ltm1200', 1, 0, 0, 0, '2019-06-17 21:59:14', '2019-06-17 21:59:14'),
(24, 'GANTRY MODELO L900-4-34', 'GANTRY MODEL L900-4-34', 'GRÚA TIPO PÓRTICO', 'PORCH TYPE CRANE', 'GANTRY MODELO L900-4-34', 'GANTRY MODEL L900-4-34', 'gantry-modelo-l900-4-34', 1, 0, 0, 0, '2019-06-17 22:05:11', '2019-06-17 22:05:11'),
(25, 'EQUIPOS DE TRANSPORTE', 'TRANSPORTATION EQUIPMENT', 'MODULARES HIDRÁULICOS', 'MODULARES HYDRAULIC', 'TRANSPORT  FRAME', 'TRANSPORT  FRAME', 'equipos-de-transporte', 1, 0, 0, 0, '2019-06-17 22:10:25', '2019-06-17 22:10:25'),
(26, 'HYBUR TRADER', 'HYBUR TRADER', 'CHARTEO DE BUQUES – FLETAMENTO MARÍTIMO', 'CHARTER OF SHIPS - MARITIME FLETAMENTO', 'A través de asociaciones estratégicas con agentes extranjeros podemos ofrecer, los servicios de Charter y /o fletamentos de buques confiables e itinerarios a satisfacción, el contrato puede efectuarse para carga solida o liquida y puede ser general o parcial de acuerdo a los requerimientos. Cubrimos varias rutas desde cualquier puerto del mundo. <br><br>\r\n<b>M/N HYBUR TRADER</b> <br><br>\r\n<b>Nombre:</b> Hybur Trader Bandera: Venezolana<br>\r\n<b>Construido:</b> Abril 1969 Reconstruido 1982/1995/2007<br>\r\n<b>Sociedad Clasificadora:</b> Bureau Veritas<br>\r\n<b>Tipo:</b> LANDING CRAFT – ROLL ON ROLL OFF<br>\r\n<b>Velocidad:</b> 10 a 11 nudos.<br>\r\n<b>Eslora:</b> 81,52 mts.<br>\r\n<b>Manga:</b> 15,35 mts.<br>\r\n<b>Puntal:</b> 4,83 mts.<br>\r\n<b>Calado máx.:</b> 3,00 mts.<br>\r\n<b>Capacidad de carga:</b> 2030 TON<br>\r\n<b>Área de carga:</b> 1231 m2<br>\r\n<b>Arqueo Bruto:</b> 2035 NRT<br>\r\n<b>Arqueo Neto:</b> 2271 GRT<br>', 'Through strategic partnerships with foreign agents we can offer, charter services and / or charter of reliable vessels and itineraries to satisfaction, the contract can be made for solid or liquid cargo and can be general or partial according to requirements. We cover several routes from any port in the world. <br> <br>\r\n<b>M/N HYBUR TRADER</b> <br><br>\r\n<b>Name:</b> Hybur Trader Flag: Venezuelan<br>\r\n<b>Built:</b> April 1969 Rebuilt 1982/1995/2007<br>\r\n<b>Classification Society:</b> Bureau Veritas<br>\r\n<b>Type:</b> LANDING CRAFT – ROLL ON ROLL OFF<br>\r\n<b>Velocity:</b> 10 to 11 knots.<br>\r\n<b>Length:</b> 81,52 mts.<br>\r\n<b>Sleeve:</b> 15,35 mts.<br>\r\n<b>Strut:</b> 4,83 mts.<br>\r\n<b>Draft max.:</b> 3,00 mts.<br>\r\n<b>Loading capacity:</b> 2030 TON<br>\r\n<b>Loading area:</b> 1231 m2<br>\r\n<b>Gross Armor:</b> 2035 NRT<br>\r\n<b>Net Mail:</b> 2271 GRT<br>', 'hybur-trader', 1, 0, 0, 0, '2019-06-17 22:23:12', '2019-06-17 22:26:38'),
(27, 'MANITOWOC M18000', 'MANITOWOC M18000', 'GRÚAS SOBRE ORUGA', 'CRANES ON CATERPILLAR', 'El Modelo M18000 fue la respuesta a la demanda de muchos clientes de contar con una avanzada Manitowoc capaz de elevar hasta 660 t, sin necesidad de contrapeso. <br><br>\r\nLa nueva M18000 es una espléndida combinación de fuerza bruta con facilidad de desplazamiento, en una unidad de alta capacidad y compacta.', 'The Model M18000 was the answer to the demand of many customers to have an advanced Manitowoc capable of raising up to 660 t, without the need for a counterweight. <br> <br>\r\nThe new M18000 is a splendid combination of brute force with ease of movement, in a high capacity and compact unit.', 'manitowoc-m18000', 1, 0, 0, 0, '2019-06-17 22:37:13', '2019-06-17 22:37:13'),
(28, 'KRUPP KMK8400', 'KRUPP KMK8400', 'GRÚAS TELESCÓPICAS SOBRE CAMIÓN', 'TRUCK TELESCOPIC CRANES', 'KRUPP KMK8400', 'KRUPP KMK8400', 'krupp-kmk8400', 1, 0, 0, 0, '2019-06-17 22:41:45', '2019-06-17 22:41:45'),
(29, 'LINK BELT 8090', 'LINK BELT 8090', 'LINK BELT 8090', 'LINK BELT 8090', 'LINK BELT 8090 de 90ton', 'LINK BELT 8090 90ton', 'link-belt-8090', 0, 0, 0, 1, '2019-06-18 23:14:09', '2019-06-18 23:14:09'),
(30, 'DEMAG AC 650', 'DEMAG AC 650', 'GRÚAS TELESCÓPICAS SOBRE CAMIÓN', 'TRUCK TELESCOPIC CRANES', 'DEMAG AC 650', 'DEMAG AC 650', 'demag-ac-650', 1, 0, 0, 0, '2019-06-25 22:24:03', '2019-06-25 22:24:03'),
(31, 'GRÚAS LIEBHERR LTM 1450', 'LIEBHERR CRANES LTM 1450', 'GRÚAS LIEBHERR LTM 1450', 'LIEBHERR CRANES LTM 1450', 'Fabricado en 2018', 'Manufacture 2018', 'gruas-liebherr-ltm-1450', 0, 0, 1, 0, '2019-06-28 23:41:50', '2019-06-28 23:41:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_images`
--

CREATE TABLE `equipo_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `equipo_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `equipo_images`
--

INSERT INTO `equipo_images` (`id`, `image`, `featured`, `equipo_id`, `created_at`, `updated_at`) VALUES
(1, '5cfef4f2280b21.jpg', 0, 1, '2019-06-11 00:25:22', '2019-06-28 23:44:39'),
(2, '5cfef4f8011f72.png', 0, 1, '2019-06-11 00:25:28', '2019-06-28 23:44:39'),
(3, '5cfef4fd570a23.png', 0, 1, '2019-06-11 00:25:33', '2019-06-28 23:44:39'),
(4, '5cfef64a360d3equiser_gruas001-15-600x600.png', 0, 2, '2019-06-11 00:31:06', '2019-06-11 00:31:24'),
(5, '5cfef64f6fbb8equiser_gruas002-13.png', 0, 2, '2019-06-11 00:31:11', '2019-06-11 00:31:24'),
(6, '5cfef657d51d7equiser_gruas003-6.png', 1, 2, '2019-06-11 00:31:19', '2019-06-11 00:31:24'),
(7, '5cfef6ba9d0c5equiser_gruas001-14.png', 1, 3, '2019-06-11 00:32:58', '2019-06-11 00:33:15'),
(8, '5cfef6c0480beequiser_gruas002-12.png', 0, 3, '2019-06-11 00:33:04', '2019-06-11 00:33:15'),
(9, '5d080c6e80b40equiser_gruas001-6.png', 0, 21, '2019-06-17 21:55:58', '2019-06-17 21:55:58'),
(10, '5d080cd6215f6equiser_gruas001-7.png', 0, 22, '2019-06-17 21:57:42', '2019-06-17 21:57:42'),
(11, '5d080dc76bc21equiser_gruas001-8.png', 1, 23, '2019-06-17 22:01:43', '2019-06-17 22:01:59'),
(12, '5d080dcc1c8acequiser_gruas002-7.png', 0, 23, '2019-06-17 22:01:48', '2019-06-17 22:01:59'),
(13, '5d080e3db1270equiser_gruas001-9.png', 0, 5, '2019-06-17 22:03:41', '2019-06-17 22:03:52'),
(14, '5d080e421deebequiser_gruas002-8.png', 1, 5, '2019-06-17 22:03:46', '2019-06-17 22:03:52'),
(15, '5d080f344ecddequiser_gruas001-10.png', 1, 24, '2019-06-17 22:07:48', '2019-06-17 22:08:01'),
(16, '5d080f390fe50equiser_gruas002-9.png', 0, 24, '2019-06-17 22:07:53', '2019-06-17 22:08:01'),
(17, '5d080f3d72993equiser_gruas003-4.png', 0, 24, '2019-06-17 22:07:57', '2019-06-17 22:08:01'),
(18, '5d081019657f2equiser_gruas001-11.png', 0, 25, '2019-06-17 22:11:37', '2019-06-17 22:12:57'),
(19, '5d08101e167caequiser_gruas002-10.png', 1, 25, '2019-06-17 22:11:42', '2019-06-17 22:12:57'),
(20, '5d08146c4a13eequiser_gruas001-12.png', 1, 26, '2019-06-17 22:30:04', '2019-06-17 22:30:58'),
(21, '5d0814709016bequiser_gruas002-11.png', 0, 26, '2019-06-17 22:30:08', '2019-06-17 22:30:58'),
(22, '5d0814754e1feequiser_gruas003-5.png', 0, 26, '2019-06-17 22:30:13', '2019-06-17 22:30:58'),
(23, '5d08147a5f452equiser_gruas004.png', 0, 26, '2019-06-17 22:30:18', '2019-06-17 22:30:58'),
(24, '5d08148006cc8equiser_gruas005.png', 0, 26, '2019-06-17 22:30:24', '2019-06-17 22:30:58'),
(25, '5d08148696003equiser_gruas006.png', 0, 26, '2019-06-17 22:30:30', '2019-06-17 22:30:58'),
(26, '5d0814905fd11equiser_gruas007.png', 0, 26, '2019-06-17 22:30:40', '2019-06-17 22:30:58'),
(27, '5d081495e80c1equiser_gruas008.png', 0, 26, '2019-06-17 22:30:45', '2019-06-17 22:30:58'),
(28, '5d0815ba5467dequiser_gruas001-13.png', 0, 18, '2019-06-17 22:35:38', '2019-06-29 00:32:09'),
(29, '5d081677a842bequiser_gruas001-1.png', 1, 27, '2019-06-17 22:38:47', '2019-06-17 22:39:06'),
(30, '5d08167c3e546equiser_gruas002-1.png', 0, 27, '2019-06-17 22:38:52', '2019-06-17 22:39:06'),
(31, '5d081680776ffequiser_gruas003-1.png', 0, 27, '2019-06-17 22:38:56', '2019-06-17 22:39:06'),
(32, '5d0817a486e84equiser_gruas001-4.png', 1, 28, '2019-06-17 22:43:48', '2019-06-17 22:44:05'),
(33, '5d0817a9c2389equiser_gruas002-4.png', 0, 28, '2019-06-17 22:43:53', '2019-06-17 22:44:05'),
(34, '5d0817ae2af56equiser_gruas003-3.png', 0, 28, '2019-06-17 22:43:58', '2019-06-17 22:44:05'),
(35, '5d129f5d914b5equiser_gruas001-3.png', 1, 30, '2019-06-25 22:25:33', '2019-06-25 22:25:41'),
(36, '5d129f624f8c3equiser_gruas002-3.png', 0, 30, '2019-06-25 22:25:38', '2019-06-25 22:25:41'),
(37, '5d16a6065db40Captura.PNG', 1, 31, '2019-06-28 23:43:02', '2019-06-28 23:43:06'),
(38, '5d16a6615cf11Captura.PNG', 1, 1, '2019-06-28 23:44:33', '2019-06-28 23:44:39'),
(39, '5d16af75bdfe0Captura.PNG', 1, 16, '2019-06-29 00:23:17', '2019-06-29 00:23:24'),
(40, '5d16af83a3df4Captura.PNG', 1, 12, '2019-06-29 00:23:31', '2019-06-29 00:23:34'),
(41, '5d16afd2a0556Captura.PNG', 1, 13, '2019-06-29 00:24:50', '2019-06-29 00:24:54'),
(42, '5d16b058cc66bCaptura.PNG', 1, 15, '2019-06-29 00:27:04', '2019-06-29 00:27:10'),
(43, '5d16b0bfe0573Captura.PNG', 1, 11, '2019-06-29 00:28:47', '2019-06-29 00:29:23'),
(44, '5d16b183ea9e7Captura.PNG', 1, 18, '2019-06-29 00:32:03', '2019-06-29 00:32:09'),
(45, '5d16b2994db82Captura.PNG', 1, 19, '2019-06-29 00:36:41', '2019-06-29 00:36:51'),
(46, '5d16b2fcb2612Captura.PNG', 1, 20, '2019-06-29 00:38:20', '2019-06-29 00:38:28'),
(47, '5d16b36bbbf5cCaptura.PNG', 1, 10, '2019-06-29 00:40:11', '2019-06-29 00:40:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(37, '2014_10_12_000000_create_users_table', 1),
(38, '2014_10_12_100000_create_password_resets_table', 1),
(39, '2019_05_29_092538_create_obras_table', 1),
(40, '2019_05_29_093255_create_equipos_table', 1),
(41, '2019_06_03_095107_create_equipo_images_table', 1),
(42, '2019_06_03_095127_create_obra_images_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras`
--

CREATE TABLE `obras` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venezuela` tinyint(1) NOT NULL,
  `colombia` tinyint(1) NOT NULL,
  `panama` tinyint(1) NOT NULL,
  `usa` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `obras`
--

INSERT INTO `obras` (`id`, `name`, `name_en`, `subtitle`, `subtitle_en`, `project`, `project_en`, `equipos`, `slug`, `venezuela`, `colombia`, `panama`, `usa`, `created_at`, `updated_at`) VALUES
(1, 'CPF-WHP (Golfo de Paria)', 'CPF-WHP (Gulf of Paria)', 'Montaje Puente Interconexión CPF-WHP (Golfo de Paria)', 'Assembly Bridge Interconnection CPF-WHP (Gulf of Paria)', 'Suministro de equipo de izamiento para el montaje del puente de interconexión entre plataformas CPF y WHP en el golfo de paria (140 TON)', 'Supply of lifting equipment for the assembly of the interconnection bridge between CPF and WHP platforms in the Gulf of Paria (140 TON)', 'Grúa de celosía sobre oruga de 800 Ton, <br> MANITOWOC M18000.', 'cpf-whp-golfo-de-paria', 1, 0, 0, 0, '2019-06-10 23:59:01', '2019-06-11 00:44:43'),
(2, 'CCCT', 'CCCT', 'Montaje de Generador en CCCT', 'Generator assembly in CCCT', 'Montaje de generador de 260 Ton dentro del edificio de generación con uso de Gantry.', 'Assembly of 260 Ton generator inside the generation building with use of Gantry.', 'Grúa Pórtico tipo Gantry de 450Ton.', 'ccct', 1, 0, 0, 0, '2019-06-11 00:35:41', '2019-06-11 00:45:38'),
(3, 'PDVSA GAS (Montaje Utility Flare)', 'PDVSA GAS (Mounting Utility Flare)', 'PDVSA GAS (Montaje Utility Flare)', 'PDVSA GAS (Mounting Utility Flare)', 'Montaje Utility Flare en la Planta de fraccionamiento PDVSA GAS Jose Estado Anzoátegui (35 TON)', 'Utility Flare Assembly in the fractionation plant PDVSA GAS Jose Estado Anzoátegui (35 TON)', 'Grúa DEMAG AC 1300 (500 TON), <br> Gruas KRUPP GMT 350 (450 TON)', 'pdvsa-gas-montaje-utility-flare', 1, 0, 0, 0, '2019-06-11 00:37:31', '2019-06-11 00:46:44'),
(4, 'PROYECTO DE CENTRAL ELÉCTRICA DE GAS NATURAL, AES PANAMÁ.', 'NATURAL GAS POWER PLANT PROJECT, AES PANAMA.', 'PROYECTO DE CENTRAL ELÉCTRICA DE GAS NATURAL', 'NATURAL GAS POWER PLANT PROJECT', 'TEREX DEMAG CC 2800-1, PROYECTO DE CENTRAL ELÉCTRICA DE GAS NATURAL, AES PANAMÁ.', 'TEREX DEMAG CC 2800-1, NATURAL GAS POWER PLANT PROJECT, AES PANAMA.', 'TEREX DEMAG CC 2800-1', 'proyecto-de-central-electrica-de-gas-natural-aes-panama', 0, 0, 1, 0, '2019-06-13 17:10:23', '2019-06-28 23:34:27'),
(5, 'Proyecto Panamá, Aeropuerto de Tocumen', 'Project Panama,Tocumen Airport', 'Proyecto Panamá, Aeropuerto de Tocumen', 'Project Panama,Tocumen Airport,', 'Proyecto Panamá, Aeropuerto Tocumen, grúa TEREX DEMAC CC 2800', 'Project Panama,Tocumen Airport, crane TEREX DEMAC CC 2800', 'Crane TEREX DEMAC CC 2800', 'proyecto-panama-aeropuerto-de-tocumen', 0, 0, 1, 0, '2019-06-13 17:12:06', '2019-06-13 17:12:06'),
(6, 'PROYECTO COSTA NORTE PANAMÁ', 'PROJECT COSTA NORTE PANAMÁ', 'COSTA NORTE PANAMÁ', 'COSTA NORTE PANAMÁ', 'PROYECTO COSTA NORTE PANAMÁ, ABRIL 2017', 'PROJECT COSTA NORTE PANAMÁ, APRIL 2017', 'LIEBHERR CRANES LTM 1450  MANUFACTURED 2018<br>Crane Terex DEMAG CC2800-1 (800 TON)<br>Descarga de generador peso 240 ton<br>Planta GAS AES COLON, PANAMÁ, 2017', 'proyecto-costa-norte-panama', 0, 0, 1, 0, '2019-06-13 17:14:10', '2019-06-13 20:22:14'),
(7, 'Proyecto Termoeléctrica AES COLÓN', 'AES COLÓN Thermoelectric Project', 'Termoeléctrica AES COLÓN', 'Thermoelectric Project', 'Listas para izaje de módulos de calderas.', 'Lists for lifting boiler modules.', 'Grúas CC 2800', 'proyecto-termoelectrica-aes-colon', 0, 0, 1, 0, '2019-06-13 17:16:23', '2019-06-13 17:16:23'),
(8, 'Linea 2 del metro de Panamá', 'Line 2 of the Panama metro', 'Proyecto Linea 2 del metro de Panamá', 'Project Line 2 of the Panama metro', 'Izaje de estructura de techo de estaciones 2', 'Loosening of roof structure of stations 2 cranes', 'Grúas  GMK 5200 Y LTM 1220', 'linea-2-del-metro-de-panama', 0, 0, 1, 0, '2019-06-13 17:17:47', '2019-06-13 17:17:47'),
(9, 'Termoelectrica', 'Thermoelectric', 'Proyecto Termoelectrica', 'Thermoelectric Project', 'Izaje de chimeneas, izaje de cubierta tanques de GNL', 'Lifting of chimneys, hoisting of cover tanks of GNL.', 'AES COLÓN CC 2800 <br>SANY SAC 2200', 'termoelectrica', 0, 0, 1, 0, '2019-06-13 17:23:40', '2019-06-13 17:23:40'),
(10, 'Desmontaje de grúa torre en Ave Balboa', 'Dismantling tower crane at Ave Balboa', 'Proyecto Desmontaje de grúa torre en  Ave Balboa', 'Project Dismantling crane tower in Ave Balboa', 'Proyecto: Desmontaje de grúa torre en Ave Balboa, previo a JMJ.', 'Project: Disassembly of tower crane in Ave Balboa, prior to JMJ.', '2 SANY SAC 2000', 'desmontaje-de-grua-torre-en-ave-balboa', 0, 0, 1, 0, '2019-06-13 17:34:51', '2019-06-13 17:34:51'),
(11, 'Instalación de grúas torre', 'Installation of tower cranes', 'Proyecto Instalación de grúas torre', 'Project Installation of tower cranes', 'Proyecto Instalación de grúas torre Panamá.', 'Project for the installation of tower cranes Panama.', 'GMK 5200 Y SANY SAC 2200', 'instalacion-de-gruas-torre', 0, 0, 1, 0, '2019-06-13 17:36:56', '2019-06-13 17:36:56'),
(12, 'Ampliación de Aeropuerto de Tocumen', 'Expansion of Tocumen Airport', 'Proyecto Ampliación de Aeropuerto de Tocumen', 'Expansion Project of Tocumen Airport', 'Armado de grúa CC 2800 para maniobra más crítica de la obra. Izaje de Ring Bean peso 35 ton a un radio de 102 mts.', 'Armed with CC 2800 crane for more critical maneuvering of the work. Ring Bean weighing 35 ton at a radius of 102 meters.', 'Grúa CC 2800 <br>Izaje de Ring Bean peso 35 ton a un radio de 102 mts', 'ampliacion-de-aeropuerto-de-tocumen', 0, 0, 1, 0, '2019-06-13 17:41:51', '2019-06-13 17:41:51'),
(13, 'Instalación de chimeneas', 'Installation of chimneys', 'Ampliación Aeropuerto de Tocumen', 'Tocumen Airport Expansion', 'Instalación de chimeneas en techo de Proyecto Ampliación Aeropuerto de Tocumen.', 'Installation of roof chimneys for the Tocumen Airport Expansion Project.', 'LTM 1220 con jib', 'instalacion-de-chimeneas', 0, 0, 1, 0, '2019-06-13 17:52:00', '2019-06-13 17:52:00'),
(14, 'Instalación de puentes de abordaje', 'Installation of boarding bridges', 'Aeropuerto de Tocumen', 'Tocumen Airport', 'Instalación de puentes de abordaje Proyecto de Expansión Aeropuerto de Tocumen.', 'Installation of boarding bridges Expansion Project Tocumen Airport.', '....', 'instalacion-de-puentes-de-abordaje', 0, 0, 1, 0, '2019-06-13 17:59:12', '2019-06-13 17:59:12'),
(15, 'Ingeniería de izaje con tecnología animada', 'Hoisting engineering with animated technology', 'Ingeniera 3D', '3D Engineer', 'Ingeniería de izaje con tecnología animada.', 'Lifting engineering with animated technology.', '3D Model', 'ingenieria-de-izaje-con-tecnologia-animada', 0, 0, 1, 0, '2019-06-13 18:10:48', '2019-06-13 18:10:48'),
(16, 'Experiencia segura y divertida Dinner in the Sky', 'Safe and fun experience Dinner in the Sky', 'Dinner in the Sky', 'Dinner in the Sky', 'Panamá, enero 2019.', 'Panama, January 2019.', 'Grúa LTM 1250', 'experiencia-segura-y-divertida-dinner-in-the-sky', 0, 0, 1, 0, '2019-06-13 18:12:44', '2019-06-13 18:12:44'),
(17, 'Línea 2 del Metro de Panamá Instalación de pasarela', 'Line 2 of the Panama Metro Gateway installation', 'Proyecto Línea 2 del Metro de Panamá', 'Line 2 Project of the Panama Metro', 'Instalación de pasarela con peso de 300 ton. Se utilizarón 2 grúas CC 2800, culminando con éxito la maniobra más crítica de esta obra.', 'Gateway installation with 300 ton weight. Two CC 2800 cranes were used, successfully completing the most critical maneuver of this work.', 'Grrúas CC 2800', 'linea-2-del-metro-de-panama-instalacion-de-pasarela', 0, 0, 1, 0, '2019-06-13 18:16:12', '2019-06-13 18:16:12'),
(18, 'Papelera Istmeña', 'Istmeña wastebasket', 'Montaje de 5 Calderas', 'Assembly of 5 Boilers', 'Papelera Istmeña, S. A.', 'Papelera Istmeña, S. A.', 'Grúa GMK 5200 (220 Ton.)', 'papelera-istmena', 0, 0, 1, 0, '2019-06-13 18:33:24', '2019-06-13 18:33:24'),
(19, 'Esclusas de Cocoli y Gatun', 'Locks of Cocoli and Gatun', 'Montaje de Estructura en Torre de Esclusas', 'Structure Assembly in Locks Tower', 'Esclusas de Cocoli y Gatun.', 'Locks of Cocoli and Gatun.', 'Grúa Grove RT 530E ( 30 Ton.) <br> Grúa Grove RT 700E (70 Ton.)', 'esclusas-de-cocoli-y-gatun', 0, 0, 1, 0, '2019-06-13 18:34:54', '2019-06-13 18:34:54'),
(20, 'Carretera Vigui -Santiago Provincia de Veraguas', 'Vigui Highway -Santiago Province of Veraguas', 'Desmontaje de Planta de Asfalto', 'Dismantling of Asphalt Plant', 'Ampliación Carretera Vigui -Santiago Provincia de Veraguas.', 'Expansion of the Vigui Highway -Santiago Province of Veraguas.', 'Grúas Sany STC1000C (150 Ton.)', 'carretera-vigui-santiago-provincia-de-veraguas', 0, 0, 1, 0, '2019-06-13 18:37:17', '2019-06-13 18:37:17'),
(21, 'Puente Santa Clara', 'Santa Clara Bridge', 'Montaje de Vigas en Puente Santa Clara', 'Assembly of Beams in Santa Clara Bridge', 'Ampliación Carretera Vigui -Santiago Provincia de Veraguas.', 'Expansion of the Vigui Highway -Santiago Province of Veraguas.', 'Grúa GMK 5200 (220 Ton.) <br>Grúa Sany STC1000C (150 Ton.)', 'puente-santa-clara', 0, 0, 1, 0, '2019-06-13 18:39:27', '2019-06-13 18:39:27'),
(22, 'Muelle en Puerto Bahía', 'Pier in Puerto Bahia', 'Hincado de pilotes para construcción de Muelle en Puerto Bahía', 'Pile driving for the construction of a pier in Puerto Bahia', 'Construcción muelle liquido y seco Puerto Bahía.', 'Construction of liquid and dry dock Puerto Bahia.', 'Grúa ZoomLion QUY200 (220 Ton.) <br>Grua Terex Demag AC 55L (60 Ton) <br>Grua Liebherr LTM 1030-2 (35 Ton)', 'muelle-en-puerto-bahia', 0, 1, 0, 0, '2019-06-13 18:56:25', '2019-06-13 19:19:35'),
(23, 'Muelle de regasificación el Callao', 'Regasification quay El Callao', 'Hincado de pilotes para construcción de Muelle de regasificación el Callao', 'Pile driving for construction of the regasification dock El Callao', 'Construcción de muelle de regasificación El Callao', 'Construction of the regasification dock El Callao.', 'Grúa ZoomLion QUY200 (220 Ton) <br>Grúa LT 1130 (130 Ton)', 'muelle-de-regasificacion-el-callao', 0, 1, 0, 0, '2019-06-13 19:00:54', '2019-06-13 19:19:57'),
(24, 'Planta de cal Pacific Stone', 'Lime plant Pacific Stone', 'Montaje de silos, banda transportadora y tubería para planta de cal Pacific Stone', 'Assembly of silos, conveyor belt and pipeline for lime plant Pacific Stone', 'Construcción de planta de cal Pacific Stone Cartagena.', 'Construction of lime plant Pacific Stone Cartagena.', 'Grúa Grove GMK 5200 (220 Ton)', 'planta-de-cal-pacific-stone', 0, 1, 0, 0, '2019-06-13 19:09:45', '2019-06-13 19:20:10'),
(25, 'Planta Trituradora Colon – Cartagena', 'Colon Crushing Plant - Cartagena', 'Montaje de bandas, sarandas para planta Trituradora Colon – Cartagena', 'Assembly of bands, sarandas for the Colon Crusher plant - Cartagena', 'Construcción de planta trituradora de piedra Colon – Cartagena.', 'Construction of stone crushing plant Colon - Cartagena.', 'Grua Grove Rt 530E (30 Ton)', 'planta-trituradora-colon-cartagena', 0, 1, 0, 0, '2019-06-13 19:14:06', '2019-06-13 19:20:44'),
(26, 'Laydown 1 y 2 en Casablanca', 'Laydown 1 and 2 in Casablanca', 'Suministro de Gruas para las areas Laydown 1 y 2 en Casablanca', 'Supply of cranes for Laydown areas 1 and 2 in Casablanca', 'Ampliación de la Refinería de Cartagena.', 'Expansion of the Cartagena Refinery.', 'Grove RT 530E (30 Ton.) <br>Grua Grove RT 700E (55 Ton)<br> Grua Liebherr LTM 1030-2 (35 Ton) <br>Grúa Liebherr LTM 1060-2 (60 Ton) <br>Grúa Terex Demag AC 55L (60 Ton)', 'laydown-1-y-2-en-casablanca', 0, 1, 0, 0, '2019-06-13 19:18:15', '2019-06-13 19:20:57'),
(27, 'PETROMONAGAS', 'PETROMONAGAS', 'Montaje de Válvulas deslizantes en el área de Coker en PETROMONAGAS', 'Mounting of sliding valves in the area of ​​Coker in PETROMONAGAS', 'Servicio de izaje con equipos pesados para la parada mayor en PETROMONAGAS', 'Lifting service with heavy equipment for the main stop in PETROMONAGAS', 'Grúa LIEBHERR LTM 1800 (800 TON)', 'petromonagas', 1, 0, 0, 0, '2019-06-25 22:31:37', '2019-06-25 22:31:37'),
(28, 'PEOTROPIAR (desgasificador)', 'PEOTROPIAR (degasser)', 'Desmontaje y montaje de desgasificador en PEOTROPIAR', 'Disassembly and assembly of degasser in PEOTROPIAR', 'Servicio de alquiler de gruas y equipos pesados para la ejecución de actividades durante PRAC 2012 del mejorador de crudo PETROPIAR', 'Service of rental of cranes and heavy equipment for the execution of activities during PRAC 2012 of the crude improver PETROPIAR', 'Grúa TEREX DEMAG CC 2800-1', 'peotropiar-desgasificador', 1, 0, 0, 0, '2019-06-25 22:34:26', '2019-06-25 22:34:26'),
(29, 'PDVSA GAS', 'PDVSA GAS', '(Montaje de brazo de carga marino)', '(Assembly of marine load arm)', 'Montaje de Brazo de Carga Marino en Muelle de la Planta de fraccionamiento de PDVSA GAS Jose Estado Anzoategui (30 TON)', 'Assembly of Marine Load Arm on the Dock of the PDVSA GAS fractionation plant Jose Estado Anzoategui (30 TON)', 'Grúa DEMAG AC 1300 (500 TON)<br> Buque HYYBUR TRADER (2014 TON)', 'pdvsa-gas', 1, 0, 0, 0, '2019-06-25 22:37:15', '2019-06-25 22:37:15'),
(30, 'Termoelectrica Termocentro', 'Termoelectrica Termocentro', 'Transporte Pesado de Equipos para Central Termoelectrica Termocentro.', 'Heavy Equipment Transport for Termoelectrica Central Termocentro.', 'Traslado de 4 Generadores Eléctricos de 250 Ton para Planta termoeléctrica Termocentro.', 'Transfer of 4 Electric Generators of 250 Ton for Termocentro Thermoelectric Plant.', 'Transport Frame <br>Remolque modular hidráulico COMETTO <br>Chutos remolcadores MACK y MAN', 'termoelectrica-termocentro', 1, 0, 0, 0, '2019-06-25 22:41:32', '2019-06-25 22:41:32'),
(31, 'Montaje de Turbinas Termocentro', 'Assembly of Termocentro Turbines', 'Montaje de Turbinas', 'Assembly of Turbines', 'Suministro de grúa para el montaje de 4 Turbinas (197Ton) en la Central Térmica de Ciclo Combinado en Termocentro.', 'Supply of crane for the assembly of 4 Turbines (197Ton) in the Thermal Power Plant of Combined Cycle in Termocentro.', 'Grúa LIEBHERR LTM1800 (800 TON)<br> Grua LT 1130 (130 TON)', 'montaje-de-turbinas-termocentro', 1, 0, 0, 0, '2019-06-25 22:45:12', '2019-06-25 22:45:12'),
(32, 'Central termoeléctrica Termocentro', 'Termocentro thermoelectric power plant', 'Central termoeléctrica', 'Thermal Power Plant', 'Traslado de 4 Turbinas de 197 Ton para Planta termoeléctrica Termocentro.', 'Transfer of 4 Turbines of 197 Ton for Termocentro Thermoelectric Plant.', 'Transport Frame<br> Remolque modular hidráulico SCHEURLE<br> Chutos remolcadores MACK y MAN', 'central-termoelectrica-termocentro', 1, 0, 0, 0, '2019-06-25 22:47:59', '2019-06-25 22:47:59'),
(33, 'Montaje de Generador Termocentro', 'Thermocenter Generator Assembly', 'Central Térmica de Ciclo Combinado de Termocentro.', 'Thermocenter Combined Cycle Thermal Power Plant.', 'Suministro de grúa para el montaje de 4 generadores Eléctricos (250Ton) en la Central Térmica de Ciclo Combinado de Termocentro.', 'Supply of crane for the assembly of 4 Electric generators (250Ton) in the Thermocenter Combined Cycle Power Plant.', 'Grua LIEBHERR LTM1800 (800 TON)<br> Grua LT 1130 (130 TON)', 'montaje-de-generador-termocentro', 1, 0, 0, 0, '2019-06-28 22:04:27', '2019-06-28 22:04:27'),
(34, 'Izamientos Mayores Proyecto RECA', 'Major Leftings RECA Project', 'Proyecto RECA', 'RECA project', 'Izamientos mayores asociados al Proyecto RECA y mantenimiento general del Convertidor D-1 (170 TON)', 'Major leaks associated with the RECA Project and general maintenance of the D-1 Converter (170 TON)', 'Grua MANITOWOC M18000<br> Grúa KRUPP KMK 8400', 'izamientos-mayores-proyecto-reca', 1, 0, 0, 0, '2019-06-28 22:13:13', '2019-06-28 22:13:13'),
(35, 'Hincado de Pilotes Plataforma Deltana', 'Pile driving Platform Deltana', 'Hincado de Pilotes Plataforma Deltana', 'Pile driving Platform Deltana', 'Instalación de 8 pilotes y cabezales de Ø 60, 85 TON\r\n<br>Instalación de 16 pilotes y cabezales de Ø 26, 64 TON', 'Installation of 8 piles and heads Ø 60, 85 TON\r\n<br> Installation of 16 piles and Ø 26, 64 TON heads', 'Grúa DEMAG CC 2800-1', 'hincado-de-pilotes-plataforma-deltana', 1, 0, 0, 0, '2019-06-28 22:22:13', '2019-06-28 22:22:13'),
(36, 'Montaje de Equipos en Nueva Planta de Urea', 'Assembly of Equipment in New Urea Plant', 'Montaje de Equipos', 'Assembly of Equipment', 'Suministro de grúas para el montaje de equipos en nueva planta de Urea Complejo Petroquímico Morón. Julio 2009.', 'Supply of cranes for the assembly of equipment in the new plant of Urea Complejo Petroquímico Morón. July 2009.', 'Grua DEMAG CC 2800-1<br> Grúa LIEBHERR LTM 1800 (800 TON)<br> Grua LT 1130 (130 TON)', 'montaje-de-equipos-en-nueva-planta-de-urea', 1, 0, 0, 0, '2019-06-28 22:26:46', '2019-06-28 22:26:46'),
(37, 'CRP (Transporte Terrestre y Maritimo)', 'CRP (Land and Maritime Transport)', 'Transporte Terrestre y Marítima de Equipos para el CRP', 'Land and Maritime Equipment Transport for the CRP', 'Suministro de equipos para el transporte terrestre y marítimo de los intercambiadores E2103 A/B y tambor V-5103 pertenecientes al CRP, Pto. Fijo Edo Falcón.', 'Supply of equipment for land and sea transport of exchangers E2103 A / B and drum V-5103 belonging to the CRP, Pto. Fijo Edo Falcón.', 'Equipos modulares de 200 Ton de capacidad.<br> Sheurle, Capperi, Cometto.', 'crp-transporte-terrestre-y-maritimo', 1, 0, 0, 0, '2019-06-28 22:29:59', '2019-06-28 22:29:59'),
(38, 'Modulos en Termozulia', 'Modules in Termozulia', 'Termozulia', 'Termozulia', 'Suministro de grúas para montaje de módulos de haces tubulares en Termozulia II (200 TON)', 'Supply of cranes for assembly of tubular bundle modules in Termozulia II (200 TON)', 'Grúa DEMAG CC2800-1 (800 TON)<br> Grúa MANITOWOC M18000 (800 TON)', 'modulos-en-termozulia', 1, 0, 0, 0, '2019-06-28 22:38:03', '2019-06-28 22:38:03'),
(39, 'CRP Cardón', 'CRP Cardon', 'Remoción e instalación de tambor en el área De Alquilación II en CRP Cardón', 'Removal and installation of drum in the area of ​​Alkylation II in CRP Cardón', 'Para este servicio Equiser presto el servicio de Alquiler de Gruas y se ocupo del traslado de la misma hasta el lugar del trabajo, realizo con apoyo de un personal especializado la remoción y la instalación del Tambor en el área de Alquilación en CRP Cardón.', 'For this service, Equiser provided the service of Rental of Cranes and took care of the transfer of the same to the place of work, performed with the support of a specialized staff the removal and installation of the Drum in the area of ​​Alkylation in CRP Cardón.', 'Grúa TEREX DEMAG CC 2800-1 (800Ton)', 'crp-cardon', 1, 0, 0, 0, '2019-06-28 22:42:41', '2019-06-28 22:42:41'),
(40, 'PETROPIAR (tip de flare )', 'PETROPIAR (tip of flare)', 'Montaje y desmontaje de tip de flare en PETROPIAR', 'Assembly and disassembly of flare tip in PETROPIAR', 'Servicio de alquiler de equipos pesados para la ejecución de actividades durante PRAC 2012 del mejorador de crudo PETROPIAR', 'Rental service of heavy equipment for the execution of activities during PRAC 2012 of the crude oil improver PETROPIAR', 'Grúa LIEBHERR LTM 1800 (800 TON)<br> Grúa DEMAG AC 650 (750 TON)', 'petropiar-tip-de-flare', 1, 0, 0, 0, '2019-06-28 22:44:45', '2019-06-28 22:44:45'),
(41, 'Planta Termoeléctrica El Palito (Turbinas)', 'El Palito Thermoelectric Plant (Turbines)', 'Planta Termoeléctrica', 'Thermoelectric Plant', 'Suministro de grúa para el montaje de 4 Turbinas (190 Ton) en Nueva Planta Termoeléctrica El Palito.', 'Supply of crane for the assembly of 4 Turbines (190 Ton) in New El Palito Thermoelectric Plant.', 'Grúa MANITOWOC M18000 (800 TON)<br> Grúa LIEBHERR LTM1800 (800 TON)', 'planta-termoelectrica-el-palito-turbinas', 1, 0, 0, 0, '2019-06-28 22:48:41', '2019-06-28 22:48:41'),
(42, 'Aerogeneradores Parque Eólico', 'Wind Farm Wind Turbines', 'Montaje de Aerogeneradores Parque Eólico Paraguaná', 'Wind Turbine Assembly Paraguaná Wind Farm', 'Suministro de grúa para el montaje de Aerogeneradores en Parque eólico de Paraguaná.', 'Supply of crane for the assembly of wind turbines in Paraguaná wind farm.', 'Grúa DEMAG CC2800-1 (800 TON)', 'aerogeneradores-parque-eolico', 1, 0, 0, 0, '2019-06-28 22:52:19', '2019-06-28 22:52:19'),
(43, 'Planta Termoeléctrica (Generadores)', 'Thermoelectric Plant (Generators)', 'Planta Termoeléctrica', 'Thermoelectric Plant', 'Suministro de grúa para el montaje de 4 generadores (240 Ton) en Nueva Planta Termoeléctrica El Palito.', 'Supply of crane for the assembly of 4 generators (240 Ton) in New El Palito Thermoelectric Plant.', 'Grúa MANITOWOC M18000 (800 TON)<br> Grúa LIEBHERR LTM1800 (800 TON)', 'planta-termoelectrica-generadores', 1, 0, 0, 0, '2019-06-28 22:54:44', '2019-06-28 22:54:44'),
(44, 'Estadio José Antonio Anzoátegui', 'José Antonio Anzoátegui Stadium', 'Grúas en Estadio José Antonio Anzoátegui Copa América', 'Cranes in Estadio José Antonio Anzoátegui Copa América', 'Instalación de Arco Principal para techo del Estadio de Fútbol de Barcelona, Anzoátegui.', 'Installation of the Main Arch for the roof of the Football Stadium of Barcelona, ​​Anzoátegui.', 'Grúa LTM 1800 (800 Ton)<br> Grúa KMK 8400 (500 Ton)<br> Grúa 350 GMT (450 Ton)<br> Grúa LTM 1200 (20 Ton)<br> LIMA 1500 C', 'estadio-jose-antonio-anzoategui', 1, 0, 0, 0, '2019-06-28 22:57:42', '2019-06-28 22:57:42'),
(45, 'Gruas en Izamiento de Asta de la Bandera en Potocos', 'Cranes in Flagstaff lifting in Potocos', 'Gruas en Izamiento de Asta de la Bandera en Potocos, Barcelona', 'Cranes in Flagstaff lifting in Potocos, Barcelona', 'Montaje de poste para bandera de Venezuela en peaje de POTOCOS – Barcelona.', 'Post assembly for the Venezuelan flag at the POTOCOS - Barcelona tollbooth.', 'Grúa DEMAG AC 1300 (500 Ton)<br> Grúa KMK 8400 (500 Ton)<br> Grúa 350 GMT (450 Ton)', 'gruas-en-izamiento-de-asta-de-la-bandera-en-potocos', 1, 0, 0, 0, '2019-06-28 23:00:11', '2019-06-28 23:00:11'),
(46, 'Planta GAS AES COLON', 'GAS AES COLON Plant', 'Descarga de generador peso 240 ton', 'Generator discharge weight 240 ton', 'Planta GAS AES COLON, PANAMÁ, 2017', 'GAS Plant AES COLON, PANAMA, 2017', 'Crane Terex DEMAG CC2800-1 (800 TON)', 'planta-gas-aes-colon', 0, 0, 1, 0, '2019-06-28 23:47:25', '2019-06-28 23:47:25'),
(47, 'Izajes ruta crítica Termoeléctrica', 'Izajes critical route Thermoelectric', 'Izajes ruta crítica Termoeléctrica AES, Panamá', 'Izajes critical route Termoeléctrica AES, Panamá', 'Izajes ruta crítica Termoeléctrica AES, Panamá', 'Izajes critical route Termoeléctrica AES, Panamá', 'Izajes ruta crítica Termoeléctrica AES, Panamá', 'izajes-ruta-critica-termoelectrica', 0, 0, 1, 0, '2019-06-28 23:53:09', '2019-06-28 23:53:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obra_images`
--

CREATE TABLE `obra_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `obra_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `obra_images`
--

INSERT INTO `obra_images` (`id`, `image`, `featured`, `obra_id`, `created_at`, `updated_at`) VALUES
(1, '5cfeef940ec6707-01-37imagen20imagen20.jpg', 1, 1, '2019-06-11 00:02:28', '2019-06-11 00:05:13'),
(2, '5cfeef98e655607-01-37imagen21imagen21.jpg', 0, 1, '2019-06-11 00:02:32', '2019-06-11 00:05:13'),
(3, '5cfeef9d2aa6607-01-37imagen22imagen22.jpg', 0, 1, '2019-06-11 00:02:37', '2019-06-11 00:05:13'),
(4, '5cfef851e9411ccct1.jpg', 1, 2, '2019-06-11 00:39:45', '2019-06-11 00:40:27'),
(5, '5cfef856e8af0ccct2.jpg', 0, 2, '2019-06-11 00:39:50', '2019-06-11 00:40:27'),
(6, '5cfef8652ecdd04-01-02imagen16imagen16.jpg', 0, 3, '2019-06-11 00:40:05', '2019-06-11 00:40:16'),
(7, '5cfef86a86f7304-01-02imagen17imagen17.jpg', 1, 3, '2019-06-11 00:40:10', '2019-06-11 00:40:16'),
(8, '5d0299c5bcaf0equiser_gruas001-2.png', 1, 18, '2019-06-13 18:45:25', '2019-06-13 18:45:29'),
(9, '5d0299ef26f74equiser_gruas002-3.png', 1, 19, '2019-06-13 18:46:07', '2019-06-13 18:46:12'),
(10, '5d029a6e9e6b6equiser_gruas004.png', 1, 20, '2019-06-13 18:48:14', '2019-06-13 18:48:17'),
(11, '5d029a8826810equiser_gruas002-2.png', 1, 21, '2019-06-13 18:48:40', '2019-06-13 18:48:42'),
(12, '5d029ce251cacequiser_gruas001.png', 1, 22, '2019-06-13 18:58:42', '2019-06-13 18:59:02'),
(13, '5d029eb5e9eacequiser_gruas002x.png', 1, 23, '2019-06-13 19:06:29', '2019-06-13 19:06:45'),
(14, '5d02a0056b12dequiser_gruas003.png', 1, 24, '2019-06-13 19:12:05', '2019-06-13 19:12:08'),
(15, '5d02a0c2ad2abequiser_gruas001-1.png', 1, 25, '2019-06-13 19:15:14', '2019-06-13 19:15:17'),
(16, '5d02a1a17195dImagen2.png', 1, 26, '2019-06-13 19:18:57', '2019-06-13 19:19:01'),
(17, '5d12a0f17f58306-01-38img_1844img_1844.jpg', 0, 27, '2019-06-25 22:32:17', '2019-06-25 22:32:54'),
(18, '5d12a0f6216cc06-01-38img_1849img_1849.jpg', 0, 27, '2019-06-25 22:32:22', '2019-06-25 22:32:54'),
(19, '5d12a0fb6898e06-01-38img_1850img_1850.jpg', 0, 27, '2019-06-25 22:32:27', '2019-06-25 22:32:54'),
(20, '5d12a1028cce506-01-38img_1911-copia.jpg', 0, 27, '2019-06-25 22:32:34', '2019-06-25 22:32:54'),
(21, '5d12a1088953d06-01-38img_1935-copia.jpg', 0, 27, '2019-06-25 22:32:40', '2019-06-25 22:32:54'),
(22, '5d12a10d76ebaequiser-gruas-petronomanas8.jpg', 1, 27, '2019-06-25 22:32:45', '2019-06-25 22:32:54'),
(23, '5d12a1b77118b11-01-44imagen8imagen8.jpg', 1, 28, '2019-06-25 22:35:35', '2019-06-25 22:35:44'),
(24, '5d12a1bc1e1fd11-01-44imagen9imagen9.jpg', 0, 28, '2019-06-25 22:35:40', '2019-06-25 22:35:44'),
(25, '5d12a2752d7d1pdvsa.jpg', 0, 29, '2019-06-25 22:38:45', '2019-06-25 22:39:11'),
(26, '5d12a279d95e7pdvsa1.jpg', 0, 29, '2019-06-25 22:38:49', '2019-06-25 22:39:11'),
(27, '5d12a27e573f8pdvsa2.jpg', 0, 29, '2019-06-25 22:38:54', '2019-06-25 22:39:11'),
(28, '5d12a28326458pdvsa3.jpg', 1, 29, '2019-06-25 22:38:59', '2019-06-25 22:39:11'),
(29, '5d12a3715b62dequiser_gruas001.png', 0, 30, '2019-06-25 22:42:57', '2019-06-25 22:43:23'),
(30, '5d12a376c3fe3equiser_gruas002.png', 1, 30, '2019-06-25 22:43:02', '2019-06-25 22:43:23'),
(31, '5d12a37ba557cequiser_gruas003.png', 0, 30, '2019-06-25 22:43:07', '2019-06-25 22:43:23'),
(32, '5d12a3818603cequiser_gruas004.png', 0, 30, '2019-06-25 22:43:13', '2019-06-25 22:43:23'),
(33, '5d12a385c091dequiser_gruas005.png', 0, 30, '2019-06-25 22:43:17', '2019-06-25 22:43:23'),
(34, '5d12a42d6c0f6equiser_gruas001 (1).png', 0, 31, '2019-06-25 22:46:05', '2019-06-25 22:46:24'),
(35, '5d12a43185db3equiser_gruas002.png', 0, 31, '2019-06-25 22:46:09', '2019-06-25 22:46:24'),
(36, '5d12a4354b7e4equiser_gruas003.png', 1, 31, '2019-06-25 22:46:13', '2019-06-25 22:46:24'),
(37, '5d12a4c8e4dfcequiser_gruas001.png', 1, 32, '2019-06-25 22:48:40', '2019-06-25 22:48:59'),
(38, '5d12a4cd7a53cequiser_gruas002.png', 0, 32, '2019-06-25 22:48:45', '2019-06-25 22:48:59'),
(39, '5d12a4d185b15equiser_gruas003.png', 0, 32, '2019-06-25 22:48:49', '2019-06-25 22:48:59'),
(40, '5d16906095f48equiser_gruas001.png', 0, 33, '2019-06-28 22:10:40', '2019-06-28 22:11:02'),
(41, '5d1690651fea8equiser_gruas002-6.png', 0, 33, '2019-06-28 22:10:45', '2019-06-28 22:11:02'),
(42, '5d16906a70539equiser_gruas003.png', 1, 33, '2019-06-28 22:10:50', '2019-06-28 22:11:02'),
(43, '5d16919701f5fequiser_gruas003.png', 1, 34, '2019-06-28 22:15:51', '2019-06-28 22:16:14'),
(44, '5d16919bcb65fequiser_gruas002.png', 0, 34, '2019-06-28 22:15:55', '2019-06-28 22:16:14'),
(45, '5d1691a01a7afequiser_gruas001 (1).png', 0, 34, '2019-06-28 22:16:00', '2019-06-28 22:16:14'),
(46, '5d16936905d5fequiser_gruas003.png', 0, 35, '2019-06-28 22:23:37', '2019-06-28 22:25:12'),
(47, '5d16936cce770equiser_gruas002.png', 0, 35, '2019-06-28 22:23:40', '2019-06-28 22:25:12'),
(48, '5d1693706c667equiser_gruas001.png', 1, 35, '2019-06-28 22:23:44', '2019-06-28 22:25:12'),
(49, '5d16946325fc2equiser_gruas003.png', 1, 36, '2019-06-28 22:27:47', '2019-06-28 22:28:30'),
(50, '5d169466f0344equiser_gruas002.png', 0, 36, '2019-06-28 22:27:50', '2019-06-28 22:28:30'),
(51, '5d16946bd6f49equiser_gruas001 (1).png', 0, 36, '2019-06-28 22:27:55', '2019-06-28 22:28:30'),
(52, '5d16951b02c8aequiser_gruas004.png', 1, 37, '2019-06-28 22:30:51', '2019-06-28 22:31:04'),
(53, '5d16951f1ed86equiser_gruas002 (1).png', 0, 37, '2019-06-28 22:30:55', '2019-06-28 22:31:04'),
(54, '5d169741790f5equiser_gruas002.png', 0, 38, '2019-06-28 22:40:01', '2019-06-28 22:40:35'),
(55, '5d169745dde54equiser_gruas003.png', 0, 38, '2019-06-28 22:40:05', '2019-06-28 22:40:35'),
(56, '5d16974a23968equiser_gruas004.png', 0, 38, '2019-06-28 22:40:10', '2019-06-28 22:40:35'),
(57, '5d16974e7f6feequiser_gruas005.png', 0, 38, '2019-06-28 22:40:14', '2019-06-28 22:40:35'),
(58, '5d16975350f08equiser_gruas006.png', 0, 38, '2019-06-28 22:40:19', '2019-06-28 22:40:35'),
(59, '5d1697582ea66modulos en termozulia.png', 1, 38, '2019-06-28 22:40:24', '2019-06-28 22:40:35'),
(60, '5d1698115cab205-01-40imagen1imagen1.jpg', 0, 39, '2019-06-28 22:43:29', '2019-06-28 22:43:41'),
(61, '5d169814cbcd005-01-40imagen2imagen2.jpg', 1, 39, '2019-06-28 22:43:32', '2019-06-28 22:43:41'),
(62, '5d16988a62ed105-01-33imagen5imagen5.jpg', 1, 40, '2019-06-28 22:45:30', '2019-06-28 22:46:04'),
(63, '5d16988ef359b05-01-33imagen4imagen4.jpg', 0, 40, '2019-06-28 22:45:35', '2019-06-28 22:46:04'),
(64, '5d1698949e09305-01-33imagen3imagen3.jpg', 0, 40, '2019-06-28 22:45:40', '2019-06-28 22:46:04'),
(65, '5d169993d177eequiser_gruas002.png', 0, 41, '2019-06-28 22:49:55', '2019-06-28 22:50:08'),
(66, '5d16999789bdaequiser_gruas001.png', 1, 41, '2019-06-28 22:49:59', '2019-06-28 22:50:08'),
(67, '5d169a58400efequiser_gruas001.png', 0, 42, '2019-06-28 22:53:12', '2019-06-28 22:53:28'),
(68, '5d169a5c0ace8equiser_gruas002-9.png', 1, 42, '2019-06-28 22:53:16', '2019-06-28 22:53:28'),
(69, '5d169adf0c1e8equiser_gruas002.png', 1, 43, '2019-06-28 22:55:27', '2019-06-28 22:55:36'),
(70, '5d169ae22ad22equiser_gruas001 (1).png', 0, 43, '2019-06-28 22:55:30', '2019-06-28 22:55:36'),
(71, '5d169b95d662dequiser_gruas002.png', 1, 44, '2019-06-28 22:58:29', '2019-06-28 22:58:40'),
(72, '5d169b9aa6aafequiser_gruas003.png', 0, 44, '2019-06-28 22:58:34', '2019-06-28 22:58:40'),
(73, '5d169c3811436equiser_gruas003.png', 1, 45, '2019-06-28 23:01:12', '2019-06-28 23:01:28'),
(74, '5d169c3bb0b73equiser_gruas002.png', 0, 45, '2019-06-28 23:01:15', '2019-06-28 23:01:28'),
(75, '5d169c4069726equiser_gruas001.png', 0, 45, '2019-06-28 23:01:20', '2019-06-28 23:01:28'),
(76, '5d16a3e29c756Captura.PNG', 1, 4, '2019-06-28 23:33:54', '2019-06-28 23:33:59'),
(77, '5d16a492957fdproyecto panama aeropuerto de tocumen.PNG', 1, 5, '2019-06-28 23:36:50', '2019-06-28 23:36:56'),
(78, '5d16a4eb67d4cCaptura.PNG', 1, 6, '2019-06-28 23:38:19', '2019-06-28 23:38:30'),
(79, '5d16a4efa52c6Captura2.PNG', 0, 6, '2019-06-28 23:38:23', '2019-06-28 23:38:30'),
(80, '5d16a720d069eCaptura.PNG', 1, 46, '2019-06-28 23:47:44', '2019-06-28 23:47:48'),
(81, '5d16a8dd59558Captura.PNG', 0, 47, '2019-06-28 23:55:09', '2019-06-28 23:55:20'),
(82, '5d16a8e21ac93Captura2.PNG', 1, 47, '2019-06-28 23:55:14', '2019-06-28 23:55:20'),
(83, '5d16a93b94568Captura.PNG', 1, 7, '2019-06-28 23:56:43', '2019-06-28 23:56:47'),
(84, '5d16a9bb40d7c2.PNG', 1, 8, '2019-06-28 23:58:51', '2019-06-28 23:59:10'),
(85, '5d16a9c89b70bCaptura.PNG', 0, 8, '2019-06-28 23:59:04', '2019-06-28 23:59:10'),
(86, '5d16aa3c5b433Captura.PNG', 0, 9, '2019-06-29 00:01:00', '2019-06-29 00:01:17'),
(87, '5d16aa4281345Captura2.PNG', 1, 9, '2019-06-29 00:01:06', '2019-06-29 00:01:17'),
(88, '5d16aa848a889Captura.PNG', 1, 10, '2019-06-29 00:02:12', '2019-06-29 00:02:16'),
(89, '5d16aaf126b8bCaptura.PNG', 1, 11, '2019-06-29 00:04:01', '2019-06-29 00:04:13'),
(90, '5d16aaf611e3dCaptura2.PNG', 0, 11, '2019-06-29 00:04:06', '2019-06-29 00:04:13'),
(91, '5d16ab9d23bddCaptura.PNG', 1, 12, '2019-06-29 00:06:53', '2019-06-29 00:06:58'),
(92, '5d16ac15c6533Captura2.PNG', 0, 12, '2019-06-29 00:08:53', '2019-06-29 00:08:53'),
(93, '5d16ac1a96baeCaptura3.PNG', 0, 12, '2019-06-29 00:08:58', '2019-06-29 00:08:58'),
(94, '5d16ac5d08b32Captura.PNG', 1, 13, '2019-06-29 00:10:05', '2019-06-29 00:10:09'),
(95, '5d16aca819b6fCaptura.PNG', 1, 14, '2019-06-29 00:11:20', '2019-06-29 00:11:26'),
(96, '5d16ad58034dfCaptura.PNG', 0, 15, '2019-06-29 00:14:16', '2019-06-29 00:14:43'),
(97, '5d16ad5bcd836Captura2.PNG', 1, 15, '2019-06-29 00:14:19', '2019-06-29 00:14:43'),
(98, '5d16ad5fddb52Captura3.PNG', 0, 15, '2019-06-29 00:14:23', '2019-06-29 00:14:43'),
(99, '5d16ad64058d6Captura4.PNG', 0, 15, '2019-06-29 00:14:28', '2019-06-29 00:14:43'),
(100, '5d16b3d133ae0Captura.PNG', 1, 16, '2019-06-29 00:41:53', '2019-06-29 00:42:01'),
(101, '5d16b453d678fCaptura.PNG', 0, 17, '2019-06-29 00:44:03', '2019-06-29 00:44:13'),
(102, '5d16b45800292Captura12.PNG', 1, 17, '2019-06-29 00:44:08', '2019-06-29 00:44:13'),
(103, '5d16b477b5c71Captura3.PNG', 0, 17, '2019-06-29 00:44:39', '2019-06-29 00:44:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Geraldine', 'gericyber@gmail.com', '2019-06-10 23:56:19', '$2y$10$O/tu55LYTl.8zabilXdVZuJzEr3mgCH516LlrXKi4xDt/a0s/OYPq', 'bD4Thip0S61rGnDZiX2D8mmVf41tuhHNwYBwgTt5HcvsVzVpg7zBwS0AWg9L', '2019-06-10 23:56:19', '2019-06-10 23:56:19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `equipos_slug_unique` (`slug`);

--
-- Indices de la tabla `equipo_images`
--
ALTER TABLE `equipo_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipo_images_equipo_id_foreign` (`equipo_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `obras`
--
ALTER TABLE `obras`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `obras_slug_unique` (`slug`);

--
-- Indices de la tabla `obra_images`
--
ALTER TABLE `obra_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `obra_images_obra_id_foreign` (`obra_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `equipo_images`
--
ALTER TABLE `equipo_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `obras`
--
ALTER TABLE `obras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `obra_images`
--
ALTER TABLE `obra_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipo_images`
--
ALTER TABLE `equipo_images`
  ADD CONSTRAINT `equipo_images_equipo_id_foreign` FOREIGN KEY (`equipo_id`) REFERENCES `equipos` (`id`);

--
-- Filtros para la tabla `obra_images`
--
ALTER TABLE `obra_images`
  ADD CONSTRAINT `obra_images_obra_id_foreign` FOREIGN KEY (`obra_id`) REFERENCES `obras` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
