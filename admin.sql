-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2024 a las 00:46:54
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `region_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id`, `ciudad`, `region_id`, `created_at`, `updated_at`) VALUES
(1, 'Arica', 1, NULL, NULL),
(2, 'Parinacota', 1, NULL, NULL),
(3, 'Iquique', 2, NULL, NULL),
(4, 'El Tamarugal', 2, NULL, NULL),
(5, 'Tocopilla', 3, NULL, NULL),
(6, 'El Loa', 3, NULL, NULL),
(7, 'Antofagasta', 3, NULL, NULL),
(8, 'Chañaral', 4, NULL, NULL),
(9, 'Copiapó', 4, NULL, NULL),
(10, 'Huasco', 4, NULL, NULL),
(11, 'Elqui', 5, NULL, NULL),
(12, 'Limarí', 5, NULL, NULL),
(13, 'Choapa', 5, NULL, NULL),
(14, 'Petorca', 6, NULL, NULL),
(15, 'Los Andes', 6, NULL, NULL),
(16, 'San Felipe de Aconcagua', 6, NULL, NULL),
(17, 'Quillota', 6, NULL, NULL),
(18, 'Valparaiso', 6, NULL, NULL),
(19, 'San Antonio', 6, NULL, NULL),
(20, 'Isla de Pascua', 6, NULL, NULL),
(21, 'Marga Marga', 6, NULL, NULL),
(22, 'Chacabuco', 7, NULL, NULL),
(23, 'Santiago', 7, NULL, NULL),
(24, 'Cordillera', 7, NULL, NULL),
(25, 'Maipo', 7, NULL, NULL),
(26, 'Melipilla', 7, NULL, NULL),
(27, 'Talagante', 7, NULL, NULL),
(28, 'Cachapoal', 8, NULL, NULL),
(29, 'Colchagua', 8, NULL, NULL),
(30, 'Cardenal Caro', 8, NULL, NULL),
(31, 'Curicó', 9, NULL, NULL),
(32, 'Talca', 9, NULL, NULL),
(33, 'Linares', 9, NULL, NULL),
(34, 'Cauquenes', 9, NULL, NULL),
(35, 'Diguillín', 10, NULL, NULL),
(36, 'Itata', 10, NULL, NULL),
(37, 'Punilla', 10, NULL, NULL),
(38, 'Bio Bío', 11, NULL, NULL),
(39, 'Concepción', 11, NULL, NULL),
(40, 'Arauco', 11, NULL, NULL),
(41, 'Malleco', 12, NULL, NULL),
(42, 'Cautín', 12, NULL, NULL),
(43, 'Valdivia', 13, NULL, NULL),
(44, 'Ranco', 13, NULL, NULL),
(45, 'Osorno', 14, NULL, NULL),
(46, 'Llanquihue', 14, NULL, NULL),
(47, 'Chiloé', 14, NULL, NULL),
(48, 'Palena', 14, NULL, NULL),
(49, 'Coyhaique', 15, NULL, NULL),
(50, 'Aysén', 15, NULL, NULL),
(51, 'General Carrera', 15, NULL, NULL),
(52, 'Capitán Prat', 15, NULL, NULL),
(53, 'Última Esperanza', 16, NULL, NULL),
(54, 'Magallanes', 16, NULL, NULL),
(55, 'Tierra del Fuego', 16, NULL, NULL),
(56, 'Antártica Chilena', 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunas`
--

CREATE TABLE `comunas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comuna` varchar(255) NOT NULL,
  `ciudad_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comunas`
--

INSERT INTO `comunas` (`id`, `comuna`, `ciudad_id`, `created_at`, `updated_at`) VALUES
(1, 'Arica', 1, NULL, NULL),
(2, 'Camarones', 1, NULL, NULL),
(3, 'General Lagos', 2, NULL, NULL),
(4, 'Putre', 2, NULL, NULL),
(5, 'Alto Hospicio', 3, NULL, NULL),
(6, 'Iquique', 3, NULL, NULL),
(7, 'Camiña', 4, NULL, NULL),
(8, 'Colchane', 4, NULL, NULL),
(9, 'Huara', 4, NULL, NULL),
(10, 'Pica', 4, NULL, NULL),
(11, 'Pozo Almonte', 4, NULL, NULL),
(12, 'Tocopilla', 5, NULL, NULL),
(13, 'María Elena', 5, NULL, NULL),
(14, 'Calama', 6, NULL, NULL),
(15, 'Ollague', 6, NULL, NULL),
(16, 'San Pedro de Atacama', 6, NULL, NULL),
(17, 'Antofagasta', 7, NULL, NULL),
(18, 'Mejillones', 7, NULL, NULL),
(19, 'Sierra Gorda', 7, NULL, NULL),
(20, 'Taltal', 7, NULL, NULL),
(21, 'Chañaral', 8, NULL, NULL),
(22, 'Diego de Almagro', 8, NULL, NULL),
(23, 'Copiapó', 9, NULL, NULL),
(24, 'Caldera', 9, NULL, NULL),
(25, 'Tierra Amarilla', 9, NULL, NULL),
(26, 'Vallenar', 10, NULL, NULL),
(27, 'Alto del Carmen', 10, NULL, NULL),
(28, 'Freirina', 10, NULL, NULL),
(29, 'Huasco', 10, NULL, NULL),
(30, 'La Serena', 11, NULL, NULL),
(31, 'Coquimbo', 11, NULL, NULL),
(32, 'Andacollo', 11, NULL, NULL),
(33, 'La Higuera', 11, NULL, NULL),
(34, 'Paihuano', 11, NULL, NULL),
(35, 'Vicuña', 11, NULL, NULL),
(36, 'Ovalle', 12, NULL, NULL),
(37, 'Combarbalá', 12, NULL, NULL),
(38, 'Monte Patria', 12, NULL, NULL),
(39, 'Punitaqui', 12, NULL, NULL),
(40, 'Río Hurtado', 12, NULL, NULL),
(41, 'Illapel', 13, NULL, NULL),
(42, 'Canela', 13, NULL, NULL),
(43, 'Los Vilos', 13, NULL, NULL),
(44, 'Salamanca', 13, NULL, NULL),
(45, 'La Ligua', 14, NULL, NULL),
(46, 'Cabildo', 14, NULL, NULL),
(47, 'Zapallar', 14, NULL, NULL),
(48, 'Papudo', 14, NULL, NULL),
(49, 'Petorca', 14, NULL, NULL),
(50, 'Los Andes', 15, NULL, NULL),
(51, 'San Esteban', 15, NULL, NULL),
(52, 'Calle Larga', 15, NULL, NULL),
(53, 'Rinconada', 15, NULL, NULL),
(54, 'San Felipe', 16, NULL, NULL),
(55, 'Llaillay', 16, NULL, NULL),
(56, 'Putaendo', 16, NULL, NULL),
(57, 'Santa María', 16, NULL, NULL),
(58, 'Catemu', 16, NULL, NULL),
(59, 'Panquehue', 16, NULL, NULL),
(60, 'Quillota', 17, NULL, NULL),
(61, 'La Cruz', 17, NULL, NULL),
(62, 'La Calera', 17, NULL, NULL),
(63, 'Nogales', 17, NULL, NULL),
(64, 'Hijuelas', 17, NULL, NULL),
(65, 'Valparaíso', 18, NULL, NULL),
(66, 'Viña del Mar', 18, NULL, NULL),
(67, 'Concón', 18, NULL, NULL),
(68, 'Quintero', 18, NULL, NULL),
(69, 'Puchuncaví', 18, NULL, NULL),
(70, 'Casablanca', 18, NULL, NULL),
(71, 'Juan Fernández', 18, NULL, NULL),
(72, 'San Antonio', 19, NULL, NULL),
(73, 'Cartagena', 19, NULL, NULL),
(74, 'El Tabo', 19, NULL, NULL),
(75, 'El Quisco', 19, NULL, NULL),
(76, 'Algarrobo', 19, NULL, NULL),
(77, 'Santo Domingo', 19, NULL, NULL),
(78, 'Isla de Pascua', 20, NULL, NULL),
(79, 'Quilpué', 21, NULL, NULL),
(80, 'Limache', 21, NULL, NULL),
(81, 'Olmué', 21, NULL, NULL),
(82, 'Villa Alemana', 21, NULL, NULL),
(83, 'Colina', 22, NULL, NULL),
(84, 'Lampa', 22, NULL, NULL),
(85, 'Tiltil', 22, NULL, NULL),
(86, 'Santiago', 23, NULL, NULL),
(87, 'Vitacura', 23, NULL, NULL),
(88, 'San Ramón', 23, NULL, NULL),
(89, 'San Miguel', 23, NULL, NULL),
(90, 'San Joaquín', 23, NULL, NULL),
(91, 'Renca', 23, NULL, NULL),
(92, 'Recoleta', 23, NULL, NULL),
(93, 'Quinta Normal', 23, NULL, NULL),
(94, 'Quilicura', 23, NULL, NULL),
(95, 'Pudahuel', 23, NULL, NULL),
(96, 'Providencia', 23, NULL, NULL),
(97, 'Peñalolén', 23, NULL, NULL),
(98, 'Pedro Aguirre Cerda', 23, NULL, NULL),
(99, 'Ñuñoa', 23, NULL, NULL),
(100, 'Maipú', 23, NULL, NULL),
(101, 'Macul', 23, NULL, NULL),
(102, 'Lo Prado', 23, NULL, NULL),
(103, 'Lo Espejo', 23, NULL, NULL),
(104, 'Lo Barnechea', 23, NULL, NULL),
(105, 'Las Condes', 23, NULL, NULL),
(106, 'La Reina', 23, NULL, NULL),
(107, 'La Pintana', 23, NULL, NULL),
(108, 'La Granja', 23, NULL, NULL),
(109, 'La Florida', 23, NULL, NULL),
(110, 'La Cisterna', 23, NULL, NULL),
(111, 'Independencia', 23, NULL, NULL),
(112, 'Huechuraba', 23, NULL, NULL),
(113, 'Estación Central', 23, NULL, NULL),
(114, 'El Bosque', 23, NULL, NULL),
(115, 'Conchalí', 23, NULL, NULL),
(116, 'Cerro Navia', 23, NULL, NULL),
(117, 'Cerrillos', 23, NULL, NULL),
(118, 'Puente Alto', 24, NULL, NULL),
(119, 'San José de Maipo', 24, NULL, NULL),
(120, 'Pirque', 24, NULL, NULL),
(121, 'San Bernardo', 25, NULL, NULL),
(122, 'Buin', 25, NULL, NULL),
(123, 'Paine', 25, NULL, NULL),
(124, 'Calera de Tango', 25, NULL, NULL),
(125, 'Melipilla', 26, NULL, NULL),
(126, 'Alhué', 26, NULL, NULL),
(127, 'Curacaví', 26, NULL, NULL),
(128, 'María Pinto', 26, NULL, NULL),
(129, 'San Pedro', 26, NULL, NULL),
(130, 'Isla de Maipo', 27, NULL, NULL),
(131, 'El Monte', 27, NULL, NULL),
(132, 'Padre Hurtado', 27, NULL, NULL),
(133, 'Peñaflor', 27, NULL, NULL),
(134, 'Talagante', 27, NULL, NULL),
(135, 'Codegua', 28, NULL, NULL),
(136, 'Coínco', 28, NULL, NULL),
(137, 'Coltauco', 28, NULL, NULL),
(138, 'Doñihue', 28, NULL, NULL),
(139, 'Graneros', 28, NULL, NULL),
(140, 'Las Cabras', 28, NULL, NULL),
(141, 'Machalí', 28, NULL, NULL),
(142, 'Malloa', 28, NULL, NULL),
(143, 'Mostazal', 28, NULL, NULL),
(144, 'Olivar', 28, NULL, NULL),
(145, 'Peumo', 28, NULL, NULL),
(146, 'Pichidegua', 28, NULL, NULL),
(147, 'Quinta de Tilcoco', 28, NULL, NULL),
(148, 'Rancagua', 28, NULL, NULL),
(149, 'Rengo', 28, NULL, NULL),
(150, 'Requínoa', 28, NULL, NULL),
(151, 'San Vicente de Tagua Tagua', 28, NULL, NULL),
(152, 'Chépica', 29, NULL, NULL),
(153, 'Chimbarongo', 29, NULL, NULL),
(154, 'Lolol', 29, NULL, NULL),
(155, 'Nancagua', 29, NULL, NULL),
(156, 'Palmilla', 29, NULL, NULL),
(157, 'Peralillo', 29, NULL, NULL),
(158, 'Placilla', 29, NULL, NULL),
(159, 'Pumanque', 29, NULL, NULL),
(160, 'San Fernando', 29, NULL, NULL),
(161, 'Santa Cruz', 29, NULL, NULL),
(162, 'La Estrella', 30, NULL, NULL),
(163, 'Litueche', 30, NULL, NULL),
(164, 'Marchigüe', 30, NULL, NULL),
(165, 'Navidad', 30, NULL, NULL),
(166, 'Paredones', 30, NULL, NULL),
(167, 'Pichilemu', 30, NULL, NULL),
(168, 'Curicó', 31, NULL, NULL),
(169, 'Hualañé', 31, NULL, NULL),
(170, 'Licantén', 31, NULL, NULL),
(171, 'Molina', 31, NULL, NULL),
(172, 'Rauco', 31, NULL, NULL),
(173, 'Romeral', 31, NULL, NULL),
(174, 'Sagrada Familia', 31, NULL, NULL),
(175, 'Teno', 31, NULL, NULL),
(176, 'Vichuquén', 31, NULL, NULL),
(177, 'Talca', 32, NULL, NULL),
(178, 'San Clemente', 32, NULL, NULL),
(179, 'Pelarco', 32, NULL, NULL),
(180, 'Pencahue', 32, NULL, NULL),
(181, 'Maule', 32, NULL, NULL),
(182, 'San Rafael', 32, NULL, NULL),
(183, 'Curepto', 33, NULL, NULL),
(184, 'Constitución', 32, NULL, NULL),
(185, 'Empedrado', 32, NULL, NULL),
(186, 'Río Claro', 32, NULL, NULL),
(187, 'Linares', 33, NULL, NULL),
(188, 'San Javier', 33, NULL, NULL),
(189, 'Parral', 33, NULL, NULL),
(190, 'Villa Alegre', 33, NULL, NULL),
(191, 'Longaví', 33, NULL, NULL),
(192, 'Colbún', 33, NULL, NULL),
(193, 'Retiro', 33, NULL, NULL),
(194, 'Yerbas Buenas', 33, NULL, NULL),
(195, 'Cauquenes', 34, NULL, NULL),
(196, 'Chanco', 34, NULL, NULL),
(197, 'Pelluhue', 34, NULL, NULL),
(198, 'Bulnes', 35, NULL, NULL),
(199, 'Chillán', 35, NULL, NULL),
(200, 'Chillán Viejo', 35, NULL, NULL),
(201, 'El Carmen', 35, NULL, NULL),
(202, 'Pemuco', 35, NULL, NULL),
(203, 'Pinto', 35, NULL, NULL),
(204, 'Quillón', 35, NULL, NULL),
(205, 'San Ignacio', 35, NULL, NULL),
(206, 'Yungay', 35, NULL, NULL),
(207, 'Cobquecura', 36, NULL, NULL),
(208, 'Coelemu', 36, NULL, NULL),
(209, 'Ninhue', 36, NULL, NULL),
(210, 'Portezuelo', 36, NULL, NULL),
(211, 'Quirihue', 36, NULL, NULL),
(212, 'Ránquil', 36, NULL, NULL),
(213, 'Treguaco', 36, NULL, NULL),
(214, 'San Carlos', 37, NULL, NULL),
(215, 'Coihueco', 37, NULL, NULL),
(216, 'San Nicolás', 37, NULL, NULL),
(217, 'Ñiquén', 37, NULL, NULL),
(218, 'San Fabián', 37, NULL, NULL),
(219, 'Alto Biobío', 38, NULL, NULL),
(220, 'Antuco', 38, NULL, NULL),
(221, 'Cabrero', 38, NULL, NULL),
(222, 'Laja', 38, NULL, NULL),
(223, 'Los Ángeles', 38, NULL, NULL),
(224, 'Mulchén', 38, NULL, NULL),
(225, 'Nacimiento', 38, NULL, NULL),
(226, 'Negrete', 38, NULL, NULL),
(227, 'Quilaco', 38, NULL, NULL),
(228, 'Quilleco', 38, NULL, NULL),
(229, 'San Rosendo', 38, NULL, NULL),
(230, 'Santa Bárbara', 38, NULL, NULL),
(231, 'Tucapel', 38, NULL, NULL),
(232, 'Yumbel', 38, NULL, NULL),
(233, 'Concepción', 39, NULL, NULL),
(234, 'Coronel', 39, NULL, NULL),
(235, 'Chiguayante', 39, NULL, NULL),
(236, 'Florida', 39, NULL, NULL),
(237, 'Hualpén', 39, NULL, NULL),
(238, 'Hualqui', 39, NULL, NULL),
(239, 'Lota', 39, NULL, NULL),
(240, 'Penco', 39, NULL, NULL),
(241, 'San Pedro de La Paz', 39, NULL, NULL),
(242, 'Santa Juana', 39, NULL, NULL),
(243, 'Talcahuano', 39, NULL, NULL),
(244, 'Tomé', 39, NULL, NULL),
(245, 'Arauco', 40, NULL, NULL),
(246, 'Cañete', 40, NULL, NULL),
(247, 'Contulmo', 40, NULL, NULL),
(248, 'Curanilahue', 40, NULL, NULL),
(249, 'Lebu', 40, NULL, NULL),
(250, 'Los Álamos', 40, NULL, NULL),
(251, 'Tirúa', 40, NULL, NULL),
(252, 'Angol', 41, NULL, NULL),
(253, 'Collipulli', 41, NULL, NULL),
(254, 'Curacautín', 41, NULL, NULL),
(255, 'Ercilla', 41, NULL, NULL),
(256, 'Lonquimay', 41, NULL, NULL),
(257, 'Los Sauces', 41, NULL, NULL),
(258, 'Lumaco', 41, NULL, NULL),
(259, 'Purén', 41, NULL, NULL),
(260, 'Renaico', 41, NULL, NULL),
(261, 'Traiguén', 41, NULL, NULL),
(262, 'Victoria', 41, NULL, NULL),
(263, 'Temuco', 42, NULL, NULL),
(264, 'Carahue', 42, NULL, NULL),
(265, 'Cholchol', 42, NULL, NULL),
(266, 'Cunco', 42, NULL, NULL),
(267, 'Curarrehue', 42, NULL, NULL),
(268, 'Freire', 42, NULL, NULL),
(269, 'Galvarino', 42, NULL, NULL),
(270, 'Gorbea', 42, NULL, NULL),
(271, 'Lautaro', 42, NULL, NULL),
(272, 'Loncoche', 42, NULL, NULL),
(273, 'Melipeuco', 42, NULL, NULL),
(274, 'Nueva Imperial', 42, NULL, NULL),
(275, 'Padre Las Casas', 42, NULL, NULL),
(276, 'Perquenco', 42, NULL, NULL),
(277, 'Pitrufquén', 42, NULL, NULL),
(278, 'Pucón', 42, NULL, NULL),
(279, 'Saavedra', 42, NULL, NULL),
(280, 'Teodoro Schmidt', 42, NULL, NULL),
(281, 'Toltén', 42, NULL, NULL),
(282, 'Vilcún', 42, NULL, NULL),
(283, 'Villarrica', 42, NULL, NULL),
(284, 'Valdivia', 43, NULL, NULL),
(285, 'Corral', 43, NULL, NULL),
(286, 'Lanco', 43, NULL, NULL),
(287, 'Los Lagos', 43, NULL, NULL),
(288, 'Máfil', 43, NULL, NULL),
(289, 'Mariquina', 43, NULL, NULL),
(290, 'Paillaco', 43, NULL, NULL),
(291, 'Panguipulli', 43, NULL, NULL),
(292, 'La Unión', 44, NULL, NULL),
(293, 'Futrono', 44, NULL, NULL),
(294, 'Lago Ranco', 44, NULL, NULL),
(295, 'Río Bueno', 44, NULL, NULL),
(297, 'Osorno', 45, NULL, NULL),
(298, 'Puerto Octay', 45, NULL, NULL),
(299, 'Purranque', 45, NULL, NULL),
(300, 'Puyehue', 45, NULL, NULL),
(301, 'Río Negro', 45, NULL, NULL),
(302, 'San Juan de la Costa', 45, NULL, NULL),
(303, 'San Pablo', 45, NULL, NULL),
(304, 'Calbuco', 46, NULL, NULL),
(305, 'Cochamó', 46, NULL, NULL),
(306, 'Fresia', 46, NULL, NULL),
(307, 'Frutillar', 46, NULL, NULL),
(308, 'Llanquihue', 46, NULL, NULL),
(309, 'Los Muermos', 46, NULL, NULL),
(310, 'Maullín', 46, NULL, NULL),
(311, 'Puerto Montt', 46, NULL, NULL),
(312, 'Puerto Varas', 46, NULL, NULL),
(313, 'Ancud', 47, NULL, NULL),
(314, 'Castro', 47, NULL, NULL),
(315, 'Chonchi', 47, NULL, NULL),
(316, 'Curaco de Vélez', 47, NULL, NULL),
(317, 'Dalcahue', 47, NULL, NULL),
(318, 'Puqueldón', 47, NULL, NULL),
(319, 'Queilén', 47, NULL, NULL),
(320, 'Quellón', 47, NULL, NULL),
(321, 'Quemchi', 47, NULL, NULL),
(322, 'Quinchao', 47, NULL, NULL),
(323, 'Chaitén', 48, NULL, NULL),
(324, 'Futaleufú', 48, NULL, NULL),
(325, 'Hualaihué', 48, NULL, NULL),
(326, 'Palena', 48, NULL, NULL),
(327, 'Lago Verde', 49, NULL, NULL),
(328, 'Coihaique', 49, NULL, NULL),
(329, 'Aysén', 50, NULL, NULL),
(330, 'Cisnes', 50, NULL, NULL),
(331, 'Guaitecas', 50, NULL, NULL),
(332, 'Río Ibáñez', 51, NULL, NULL),
(333, 'Chile Chico', 51, NULL, NULL),
(334, 'Cochrane', 52, NULL, NULL),
(335, 'O\'Higgins', 52, NULL, NULL),
(336, 'Tortel', 52, NULL, NULL),
(337, 'Natales', 53, NULL, NULL),
(338, 'Torres del Paine', 53, NULL, NULL),
(339, 'Laguna Blanca', 54, NULL, NULL),
(340, 'Punta Arenas', 54, NULL, NULL),
(341, 'Río Verde', 54, NULL, NULL),
(342, 'San Gregorio', 54, NULL, NULL),
(343, 'Porvenir', 55, NULL, NULL),
(344, 'Primavera', 55, NULL, NULL),
(345, 'Timaukel', 55, NULL, NULL),
(346, 'Cabo de Hornos', 56, NULL, NULL),
(347, 'Antártica', 56, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rutEmpresa` varchar(255) NOT NULL,
  `nombreEmpresa` varchar(255) NOT NULL,
  `giroEmpresa` varchar(50) NOT NULL,
  `direccionEmpresa` varchar(255) NOT NULL,
  `idComuna` int(11) NOT NULL,
  `idCiudad` int(11) NOT NULL,
  `idRegion` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `rutEmpresa`, `nombreEmpresa`, `giroEmpresa`, `direccionEmpresa`, `idComuna`, `idCiudad`, `idRegion`, `estado`, `created_at`, `updated_at`) VALUES
(2, '166091926', 'varinia paz rivera vera', 'informatica', 'san nicolas 1346 depto 1410', 24, 9, 4, 1, '2024-07-06 08:21:37', '2024-07-06 08:21:37'),
(12, '84353450', 'cecilia vera', 'dd', 'dd', 21, 8, 4, 1, '2024-07-07 06:17:10', '2024-07-07 06:17:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `nombreEstado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `nombreEstado`) VALUES
(1, 'ACTIVO'),
(2, 'SUSPENDIDO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2),
(6, '2024_06_05_000510_create_tipo_usuarios', 3),
(7, '2024_07_03_003950_s_i_s_t_e_m_a_s', 4),
(8, '2024_07_03_004400_s_i_s_t_e_m_a_s', 5),
(9, '2024_07_05_020743_region', 6),
(10, '2024_07_05_021019_ciudades', 7),
(11, '2024_07_05_021159_comunas', 7),
(12, '2024_07_05_021650_empresas', 7),
(13, '2024_07_06_022743_token_usuario', 8),
(14, '2024_07_06_050037_sistemas_empresa', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('V.RIVERA@LMBB.CL', '$2y$12$FyvzPh3aY9eEaJI2ROxmbeYwSea87TcsS6w.WTamR1fPz27tVgwzm', '2024-07-13 08:04:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `region` varchar(255) NOT NULL,
  `abreviatura` varchar(255) NOT NULL,
  `capital` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id`, `region`, `abreviatura`, `capital`, `created_at`, `updated_at`) VALUES
(1, 'Arica y Parinacota', 'AP', 'Arica', NULL, NULL),
(2, 'Tarapacá', 'TA', 'Iquique', NULL, NULL),
(3, 'Antofagasta', 'AN', 'Antofagasta', NULL, NULL),
(4, 'Atacama', 'AT', 'Copiapó', NULL, NULL),
(5, 'Coquimbo', 'CO', 'La Serena', NULL, NULL),
(6, 'Valparaiso', 'VA', 'valparaíso', NULL, NULL),
(7, 'Metropolitana de Santiago', 'RM', 'Santiago', NULL, NULL),
(8, 'Libertador General Bernardo O\'Higgins', 'OH', 'Rancagua', NULL, NULL),
(9, 'Maule', 'MA', 'Talca', NULL, NULL),
(10, 'Ñuble', 'NB', 'Chillán', NULL, NULL),
(11, 'Biobío', 'BI', 'Concepción', NULL, NULL),
(12, 'La Araucanía', 'IAR', 'Temuco', NULL, NULL),
(13, 'Los Ríos', 'LR', 'Valdivia', NULL, NULL),
(14, 'Los Lagos', 'LL', 'Puerto Montt', NULL, NULL),
(15, 'Aysén del General Carlos Ibáñez del Campo', 'AI', 'Coyhaique', NULL, NULL),
(16, 'Magallanes y de la Antártica Chilena', 'MG', 'Punta Arenas', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemas`
--

CREATE TABLE `sistemas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CODIGO_SISTEMA` varchar(255) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `DESCRIPCION_SISTEMA` varchar(255) NOT NULL,
  `ESTADO_SISTEMA` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sistemas`
--

INSERT INTO `sistemas` (`id`, `CODIGO_SISTEMA`, `NOMBRE`, `DESCRIPCION_SISTEMA`, `ESTADO_SISTEMA`, `created_at`, `updated_at`) VALUES
(1, 'DISTC', 'DISTRIBUCIÓN DE CARTAS', 'LOGISTICA CARTAS', '1', '2024-07-03 23:26:12', '2024-07-03 23:26:12'),
(3, 'LMBB', 'COLEGIOS', 'SISTEMA DE COLEGIOS', '1', '2024-07-06 08:35:11', '2024-07-06 08:35:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemasempresa`
--

CREATE TABLE `sistemasempresa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idEmpresa` int(11) NOT NULL,
  `idSistema` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sistemasempresa`
--

INSERT INTO `sistemasempresa` (`id`, `idEmpresa`, `idSistema`, `estado`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 2, '2024-07-09 07:11:26', '2024-07-09 07:11:26'),
(4, 2, 3, 2, '2024-07-10 05:04:22', '2024-07-10 05:04:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuarios`
--

CREATE TABLE `tipo_usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_usuarios`
--

INSERT INTO `tipo_usuarios` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(3, 'OWNER', NULL, NULL),
(5, 'ADMINISTRADOR', '2024-07-04 07:08:05', '2024-07-04 07:08:05'),
(6, 'SUPERVISOR', '2024-07-04 07:08:12', '2024-07-04 07:08:12'),
(9, 'SUPER ADMIN', '2024-07-15 21:54:10', '2024-07-15 21:54:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tokenusuario`
--

CREATE TABLE `tokenusuario` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(255) NOT NULL,
  `idUsuario` varchar(255) NOT NULL,
  `estado` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `idTipoUsuario` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `idTipoUsuario`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'varinia', 'la.vary18@gmail.com', NULL, '$2y$12$LjqVzL5lSH0/56HMpnrhLus5x9vT2PhHIt2JnC6kPi7axbLCQu6VO', 'XsdMa05sJTmENzYh3M1OJXIaoMoF3xcX80uYtzsWTyBxqUNKY8vj8dOkCopa', 3, 1, '2024-06-04 06:27:47', '2024-06-04 06:27:47'),
(4, 'admin', 'vari_paz@gmail.com', NULL, '$2y$12$6F2h7/j3wmtAUVYyGfzi5ewB8XZqqEI8oOb6m7Y.q9Ww78BYuC3KW', NULL, 5, 1, '2024-07-13 19:56:14', '2024-07-13 19:56:14'),
(5, 'supervisor', 'v.rivera@lmbb.cl', NULL, '$2y$12$s7ztUFHIhWRrZrxN0e304u.AUaFsZ1C0cs1c9rJ9APFZ2Tfh3hAO6', NULL, 6, 1, '2024-07-16 02:34:53', '2024-07-16 02:34:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comunas`
--
ALTER TABLE `comunas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sistemas`
--
ALTER TABLE `sistemas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sistemasempresa`
--
ALTER TABLE `sistemasempresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tokenusuario`
--
ALTER TABLE `tokenusuario`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `comunas`
--
ALTER TABLE `comunas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=348;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `sistemas`
--
ALTER TABLE `sistemas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sistemasempresa`
--
ALTER TABLE `sistemasempresa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tokenusuario`
--
ALTER TABLE `tokenusuario`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
