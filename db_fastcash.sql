-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2018 at 02:19 PM
-- Server version: 5.5.52-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_fastcash`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accesos`
--

CREATE TABLE IF NOT EXISTS `tbl_accesos` (
  `idAcceso` int(11) NOT NULL,
  `tipoAcceso` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(1) NOT NULL,
  `fechaRegistro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla para el manejo de accesos';

--
-- Dumping data for table `tbl_accesos`
--

INSERT INTO `tbl_accesos` (`idAcceso`, `tipoAcceso`, `descripcion`, `estado`, `fechaRegistro`) VALUES
(1, 'Admin', 'Acceso total al sistema', 1, '2018-10-06 00:00:00'),
(2, 'Basico', 'Acceso restringido ha ciertos modulos.', 1, '2018-10-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clientes`
--

CREATE TABLE IF NOT EXISTS `tbl_clientes` (
  `Id_Cliente` int(11) NOT NULL,
  `Codigo_Cliente` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre_Cliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido_Cliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Condicion_Actual_Cliente` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Estado_Civil_Cliente` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Genero_Cliente` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono_Fijo_Cliente` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Telefono_Celular_Cliente` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Domicilio_Cliente` text COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_Nacimiento_Cliente` date NOT NULL,
  `Zona_Cliente` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `DUI_Cliente` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `NIT_Cliente` varchar(18) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_Registro_Cliente` date NOT NULL,
  `Observaciones_Cliente` text COLLATE utf8_spanish_ci NOT NULL,
  `Profesion_Cliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Fk_Id_Departamento` int(11) NOT NULL,
  `Fk_Id_Municipio` int(11) NOT NULL,
  `Tipo_Cliente` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`Id_Cliente`, `Codigo_Cliente`, `Nombre_Cliente`, `Apellido_Cliente`, `Condicion_Actual_Cliente`, `Estado_Civil_Cliente`, `Genero_Cliente`, `Telefono_Fijo_Cliente`, `Telefono_Celular_Cliente`, `Domicilio_Cliente`, `Fecha_Nacimiento_Cliente`, `Zona_Cliente`, `DUI_Cliente`, `NIT_Cliente`, `Fecha_Registro_Cliente`, `Observaciones_Cliente`, `Profesion_Cliente`, `Fk_Id_Departamento`, `Fk_Id_Municipio`, `Tipo_Cliente`) VALUES
(32, '000123', 'Juan', 'Perez', 'Activo', 'Soltero/a', 'Masculino', '777-777', '22222', 'aaaa', '0000-00-00', 'Rural', '546546', '33333344', '0000-00-00', 'aaaaaaaa', 'albañil', 2, 250, 'Empresario'),
(33, '000123', 'Luiz', 'Aguilar', 'Activo', 'Soltero/a', 'Masculino', '111112', '121212', 'ssss', '2012-12-12', 'Rural', '555555', '445-455-8888-7', '0000-00-00', 'ssss', 'Empleado', 1, 1, 'Empleado'),
(35, '000123', 'sdsd', 'sdsd', 'Activo', 'Soltero/a', 'Masculino', '', '', '', '0000-00-00', 'Rural', '', '', '0000-00-00', '', '', 2, 13, NULL),
(36, '000123', 'Juana', 'Pere', 'Activo', 'Soltero/a', 'Masculino', '', '', '', '0000-00-00', 'Rural', '', '', '0000-00-00', '', '', 1, 1, 'Empleado'),
(38, '000123', 'MAria', 'Perez', 'Activo', 'Soltero/a', 'Masculino', '', '', '', '0000-00-00', 'Rural', '', '', '0000-00-00', '', '', 1, 1, 'Empleado'),
(39, '000123', 'Rosa', 'Munguia', 'Activo', 'Soltero/a', 'Masculino', '', '', '', '0000-00-00', 'Rural', '', '', '0000-00-00', '', '', 2, 13, 'Empleado'),
(40, '000123', 'Maria', 'Paiz', 'Activo', 'Soltero/a', 'Masculino', '', '', '', '0000-00-00', 'Rural', '', '', '0000-00-00', '', '', 9, 241, 'Empresario'),
(41, '000123', 'LOpez', 'SPSPS', 'Activo', 'Soltero/a', 'Masculino', '', '', '', '0000-00-00', 'Rural', '', '', '0000-00-00', '', '', 2, 13, 'Empleado'),
(42, '000123', 'jose', 'mlvin', 'Activo', 'Soltero/a', 'Masculino', '', '', '', '0000-00-00', 'Rural', '', '', '0000-00-00', '', '', 2, 13, 'Empleado'),
(43, '000123', 'Hector Javier', 'Paiz Ramos', 'Activo', 'Soltero/a', 'Masculino', '', '', '', '0000-00-00', 'Rural', '', '', '0000-00-00', '', '', 13, 65, 'Empleado'),
(44, '000123', 'Maria', 'Lopez', 'Activo', 'Soltero/a', 'Masculino', '', '', '', '0000-00-00', 'Rural', '', '', '0000-00-00', '', '', 1, 1, 'Empleado'),
(45, '000123', 'uana', 'sjsj', 'Activo', 'Soltero/a', 'Masculino', '', '', '', '0000-00-00', 'Rural', '', '', '0000-00-00', '', '', 2, 13, 'Empleado'),
(46, '000123', 'JUan', 'perez', 'Activo', 'Soltero/a', 'Masculino', '', '', '', '0000-00-00', 'Rural', '', '', '0000-00-00', '', '', 1, 1, 'Empleado'),
(48, '000123', 'Juan', 'Ramos', 'Activo', 'Soltero/a', 'Masculino', '', '', '', '0000-00-00', 'Rural', '', '', '0000-00-00', '', '', 3, 26, 'Empleado'),
(49, '000123', 'Mario', 'Belloso', 'Activo', 'Soltero/a', 'Masculino', '', '(545) 4545', '', '1900-12-07', 'Rural', '44444444-4', '4444-444444-444-4', '0000-00-00', '', 'Empleado', 2, 13, 'Empleado'),
(50, '000123', 'juana', 'ahahah', 'Activo', 'Soltero/a', 'Masculino', '', '(555) 5555', '', '0000-00-00', 'Rural', '44444444-4', '', '0000-00-00', '', 'Inge', 2, 13, 'Empleado'),
(51, '000123', 'juana8', 'hshs', 'Activo', 'Soltero/a', 'Masculino', '', '', '', '0000-00-00', 'Rural', '', '', '0000-00-00', '', '', 2, 13, 'Empresario'),
(52, '000123', 'javier', 'paiz', 'Activo', 'Soltero/a', 'Masculino', '', '', '', '0000-00-00', 'Rural', '', '', '0000-00-00', '', '', 1, 1, 'Empleado'),
(53, '000123', 'juan ', 'lopez', 'Activo', 'Soltero/a', 'Masculino', '', '', '', '0000-00-00', 'Rural', '', '', '0000-00-00', '', '', 2, 13, 'Empresario'),
(54, '000123', 'frnacisco', 'Flores', 'Activo', 'Soltero/a', 'Masculino', '', '', '', '0000-00-00', 'Rural', '', '', '0000-00-00', '', '', 1, 1, 'Empresario'),
(55, '000123', 'jose', 'robles', 'Activo', 'Soltero/a', 'Masculino', '', '', '', '0000-00-00', 'Rural', '', '', '0000-00-00', '', 'Empleado', 1, 1, 'Empresario'),
(57, '000123', '', '', 'Activo', 'Soltero/a', 'Masculino', '', '', '', '0000-00-00', 'Rural', '', '', '0000-00-00', '', '', 2, 13, 'Empleado');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_datos_laborales`
--

CREATE TABLE IF NOT EXISTS `tbl_datos_laborales` (
  `Cargo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre_Empresa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Rubro` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Ingreso_Mensual` float NOT NULL,
  `Observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `Fk_Id_Cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tbl_datos_laborales`
--

INSERT INTO `tbl_datos_laborales` (`Cargo`, `Nombre_Empresa`, `Direccion`, `Telefono`, `Rubro`, `Ingreso_Mensual`, `Observaciones`, `Fk_Id_Cliente`) VALUES
('Gerente', 'Arrocera San Fnacisco', 'San Miguel', '4444', 'Alimentos', 600, 'sin observaciones.', 49);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_datos_negocio`
--

CREATE TABLE IF NOT EXISTS `tbl_datos_negocio` (
  `Id_Negocio` int(11) NOT NULL,
  `Fk_Id_Cliente` int(11) NOT NULL,
  `Nombre_Negocio` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `NIT` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `NRC` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Giro` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Direccion_Negocio` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Ingreso_Mensual` double NOT NULL,
  `Tipo_Factura` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tbl_datos_negocio`
--

INSERT INTO `tbl_datos_negocio` (`Id_Negocio`, `Fk_Id_Cliente`, `Nombre_Negocio`, `NIT`, `NRC`, `Giro`, `Direccion_Negocio`, `Ingreso_Mensual`, `Tipo_Factura`) VALUES
(1, 55, 'ajjaja', 'jsjjj', 'jajajaj', 'jsjsjsj', 'jajaja', 4000, 'Credito fiscal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departamentos`
--

CREATE TABLE IF NOT EXISTS `tbl_departamentos` (
  `Id_Departamento` int(11) NOT NULL,
  `Nombre_Departamento` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tbl_departamentos`
--

INSERT INTO `tbl_departamentos` (`Id_Departamento`, `Nombre_Departamento`) VALUES
(1, 'Ahuachapán'),
(2, 'Santa Ana'),
(3, 'Sonsonate'),
(4, 'La Libertad'),
(5, 'Chalatenango'),
(6, 'San Salvador'),
(7, 'Cuscatlán'),
(8, 'La Paz'),
(9, 'Cabañas'),
(10, 'San Vicente'),
(11, 'Usulután'),
(12, 'Morazán'),
(13, 'San Miguel'),
(14, 'La Unión');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_empleados`
--

CREATE TABLE IF NOT EXISTS `tbl_empleados` (
  `idEmpleado` int(11) NOT NULL,
  `nombreEmpleado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidoEmpleado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fechaNacimientoEmpleado` date NOT NULL,
  `genero` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dui` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(17) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `profesion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(1) NOT NULL,
  `fechaRegistroEmpleado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tbl_empleados`
--

INSERT INTO `tbl_empleados` (`idEmpleado`, `nombreEmpleado`, `apellidoEmpleado`, `fechaNacimientoEmpleado`, `genero`, `dui`, `nit`, `direccion`, `telefono`, `email`, `profesion`, `estado`, `fechaRegistroEmpleado`) VALUES
(1, 'Melvin', 'Flores', '2018-03-05', 'Masculino', '87549659-2', '1254-253658-124-1', 'San Miguel', '7898-5868', 'melvin@gmail.com', 'Tecnico', 1, '2018-10-06 06:10:26'),
(2, 'Misael', 'Guevara', '2017-08-09', 'Masculino', '87586525-9', '1254-895865-421-5', 'San Francisco Gotera', '7852-6985', 'misa@gmail.com', 'tecnico', 1, '2018-10-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_estados_solicitud`
--

CREATE TABLE IF NOT EXISTS `tbl_estados_solicitud` (
`id_estado` int(11) NOT NULL,
  `estado` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `visible` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tbl_estados_solicitud`
--

INSERT INTO `tbl_estados_solicitud` (`id_estado`, `estado`, `fecha_registro`, `visible`) VALUES
(1, 'Nueva', '2018-10-07', 2),
(2, 'Recibida', '2018-10-07', 1),
(4, 'En proceso', '2018-10-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_municipios`
--

CREATE TABLE IF NOT EXISTS `tbl_municipios` (
  `Id_Municipio` int(11) NOT NULL,
  `Nombre_Municipio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Fk_Id_Departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tbl_municipios`
--

INSERT INTO `tbl_municipios` (`Id_Municipio`, `Nombre_Municipio`, `Fk_Id_Departamento`) VALUES
(1, 'Ahuachapán', 1),
(2, 'Jujutla', 1),
(3, 'Atiquizaya', 1),
(4, 'Concepción de Ataco', 1),
(5, 'El Refugio', 1),
(6, 'Guaymango', 1),
(7, 'Apaneca', 1),
(8, 'San Francisco Menéndez', 1),
(9, 'San Lorenzo', 1),
(10, 'San Pedro Puxtla', 1),
(11, 'Tacuba', 1),
(12, 'Turín', 1),
(13, 'Candelaria de la Frontera', 2),
(14, 'Chalchuapa', 2),
(15, 'Coatepeque', 2),
(16, 'El Congo', 2),
(17, 'El Porvenir', 2),
(18, 'Masahuat', 2),
(19, 'Metapán', 2),
(20, 'San Antonio Pajonal', 2),
(21, 'San Sebastián Salitrillo', 2),
(22, 'Santa Ana', 2),
(23, 'Santa Rosa Guachipilín', 2),
(24, 'Santiago de la Frontera', 2),
(25, 'Texistepeque', 2),
(26, 'Acajutla', 3),
(27, 'Armenia', 3),
(28, 'Caluco', 3),
(29, 'Cuisnahuat', 3),
(30, 'Izalco', 3),
(31, 'Juayúa', 3),
(32, 'Nahuizalco', 3),
(33, 'Nahulingo', 3),
(34, 'Salcoatitán', 3),
(35, 'San Antonio del Monte', 3),
(36, 'San Julián', 3),
(37, 'Santa Catarina Masahuat', 3),
(38, 'Santa Isabel Ishuatán', 3),
(39, 'Santo Domingo de Guzmán', 3),
(40, 'Sonsonate', 3),
(41, 'Sonzacate', 3),
(42, 'Alegría', 11),
(43, 'Berlín', 11),
(44, 'California', 11),
(45, 'Concepción Batres', 11),
(46, 'El Triunfo', 11),
(47, 'Ereguayquín', 11),
(48, 'Estanzuelas', 11),
(49, 'Jiquilisco', 11),
(50, 'Jucuapa', 11),
(51, 'Jucuarán', 11),
(52, 'Mercedes Umaña', 11),
(53, 'Nueva Granada', 11),
(54, 'Ozatlán', 11),
(55, 'Puerto El Triunfo', 11),
(56, 'San Agustín', 11),
(57, 'San Buenaventura', 11),
(58, 'San Dionisio', 11),
(59, 'San Francisco Javier', 11),
(60, 'Santa Elena', 11),
(61, 'Santa María', 11),
(62, 'Santiago de María', 11),
(63, 'Tecapán', 11),
(64, 'Usulután', 11),
(65, 'Carolina', 13),
(66, 'Chapeltique', 13),
(67, 'Chinameca', 13),
(68, 'Chirilagua', 13),
(69, 'Ciudad Barrios', 13),
(70, 'Comacarán', 13),
(71, 'El Tránsito', 13),
(72, 'Lolotique', 13),
(73, 'Moncagua', 13),
(74, 'Nueva Guadalupe', 13),
(75, 'Nuevo Edén de San Juan', 13),
(76, 'Quelepa', 13),
(77, 'San Antonio del Mosco', 13),
(78, 'San Gerardo', 13),
(79, 'San Jorge', 13),
(80, 'San Luis de la Reina', 13),
(81, 'San Miguel', 13),
(82, 'San Rafael Oriente', 13),
(83, 'Sesori', 13),
(84, 'Uluazapa', 13),
(85, 'Arambala', 12),
(86, 'Cacaopera', 12),
(87, 'Chilanga', 12),
(88, 'Corinto', 12),
(89, 'Delicias de Concepción', 12),
(90, 'El Divisadero', 12),
(91, 'El Rosario (''razán)', 12),
(92, 'Gualococti', 12),
(93, 'Guatajiagua', 12),
(94, 'Joateca', 12),
(95, 'Jocoaitique', 12),
(96, 'Jocoro', 12),
(97, 'Lolotiquillo', 12),
(98, 'Meanguera', 12),
(99, 'Osicala', 12),
(100, 'Perquín', 12),
(101, 'San Carlos', 12),
(102, 'San Fernando (Morazán)', 12),
(103, 'San Francisco Gotera', 12),
(104, 'San Isidro (Morazán)', 12),
(105, 'San Simón', 12),
(106, 'Sensembra', 12),
(107, 'Sociedad', 12),
(108, 'Torola', 12),
(109, 'Yamabal', 12),
(110, 'Yoloaiquín', 12),
(111, 'La Unión', 14),
(112, 'San Alejo', 14),
(113, 'Yucuaiquín', 14),
(114, 'Conchagua', 14),
(115, 'Intipucá', 14),
(116, 'San José', 14),
(117, 'El Carmen (La Unión)', 14),
(118, 'Yayantique', 14),
(119, 'Bolívar', 14),
(120, 'Meanguera del Golfo', 14),
(121, 'Santa Rosa de Lima', 14),
(122, 'Pasaquina', 14),
(123, 'Anamoros', 14),
(124, 'Nueva Esparta', 14),
(125, 'El Sauce', 14),
(126, 'Concepción de Oriente', 14),
(127, 'Polorós', 14),
(128, 'Lislique', 14),
(129, 'Antiguo Cuscatlán', 4),
(130, 'Chiltiupán', 4),
(131, 'Ciudad Arce', 4),
(132, 'Colón', 4),
(133, 'Comasagua', 4),
(134, 'Huizúcar', 4),
(135, 'Jayaque', 4),
(136, 'Jicalapa', 4),
(137, 'La Libertad', 4),
(138, 'Santa Tecla', 4),
(139, 'Nuevo Cuscatlán', 4),
(140, 'San Juan Opico', 4),
(141, 'Quezaltepeque', 4),
(142, 'Sacacoyo', 4),
(143, 'San José Villanueva', 4),
(144, 'San Matías', 4),
(145, 'San Pablo Tacachico', 4),
(146, 'Talnique', 4),
(147, 'Tamanique', 4),
(148, 'Teotepeque', 4),
(149, 'Tepecoyo', 4),
(150, 'Zaragoza', 4),
(151, 'Agua Caliente', 5),
(152, 'Arcatao', 5),
(153, 'Azacualpa', 5),
(154, 'Cancasque', 5),
(155, 'Chalatenango', 5),
(156, 'Citalá', 5),
(157, 'Comapala', 5),
(158, 'Concepción Quezaltepeque', 5),
(159, 'Dulce Nombre de María', 5),
(160, 'El Carrizal', 5),
(161, 'El Paraíso', 5),
(162, 'La Laguna', 5),
(163, 'La Palma', 5),
(164, 'La Reina', 5),
(165, 'Las Vueltas', 5),
(166, 'Nueva Concepción', 5),
(167, 'Nueva Trinidad', 5),
(168, 'Nombre de Jesús', 5),
(169, 'Ojos de Agua', 5),
(170, 'Potonico', 5),
(171, 'San Antonio de la Cruz', 5),
(172, 'San Antonio Los Ranchos', 5),
(173, 'San Fernando (Chalatenango)', 5),
(174, 'San Francisco Lempa', 5),
(175, 'San Francisco Morazán', 5),
(176, 'San Ignacio', 5),
(177, 'San Isidro Labrador', 5),
(178, 'Las Flores', 5),
(179, 'San Luis del Carmen', 5),
(180, 'San Miguel de Mercedes', 5),
(181, 'San Rafael', 5),
(182, 'Santa Rita', 5),
(183, 'Tejutla', 5),
(184, 'Cojutepeque', 7),
(185, 'Candelaria', 7),
(186, 'El Carmen (Cuscatlán)', 7),
(187, 'El Rosario (Cuscatlán)', 7),
(188, 'Monte San Juan', 7),
(189, 'Oratorio de Concepción', 7),
(190, 'San Bartolomé Perulapía', 7),
(191, 'San Cristóbal', 7),
(192, 'San José Guayabal', 7),
(193, 'San Pedro Perulapán', 7),
(194, 'San Rafael Cedros', 7),
(195, 'San Ramón', 7),
(196, 'Santa Cruz Analquito', 7),
(197, 'Santa Cruz Michapa', 7),
(198, 'Suchitoto', 7),
(199, 'Tenancingo', 7),
(200, 'Aguilares', 6),
(201, 'Apopa', 6),
(202, 'Ayutuxtepeque', 6),
(203, 'Cuscatancingo', 6),
(204, 'Ciudad Delgado', 6),
(205, 'El Paisnal', 6),
(206, 'Guazapa', 6),
(207, 'Ilopango', 6),
(208, 'Mejicanos', 6),
(209, 'Nejapa', 6),
(210, 'Panchimalco', 6),
(211, 'Rosario de Mora', 6),
(212, 'San Marcos', 6),
(213, 'San Martín', 6),
(214, 'San Salvador', 6),
(215, 'Santiago Texacuangos', 6),
(216, 'Santo Tomás', 6),
(217, 'Soyapango', 6),
(218, 'Tonacatepeque', 6),
(219, 'Zacatecoluca', 8),
(220, 'Cuyultitán', 8),
(221, 'El Rosario (La Paz)', 8),
(222, 'Jerusalén', 8),
(223, 'Mercedes La Ceiba', 8),
(224, 'Olocuilta', 8),
(225, 'Paraíso de Osorio', 8),
(226, 'San Antonio Masahuat', 8),
(227, 'San Emigdio', 8),
(228, 'San Francisco Chinameca', 8),
(229, 'San Pedro Masahuat', 8),
(230, 'San Juan Nonualco', 8),
(231, 'San Juan Talpa', 8),
(232, 'San Juan Tepezontes', 8),
(233, 'San Luis La Herradura', 8),
(234, 'San Luis Talpa', 8),
(235, 'San Miguel Tepezontes', 8),
(236, 'San Pedro Nonualco', 8),
(237, 'San Rafael Obrajuelo', 8),
(238, 'Santa María Ostuma', 8),
(239, 'Santiago Nonualco', 8),
(240, 'Tapalhuaca', 8),
(241, 'Cinquera', 9),
(242, 'Dolores', 9),
(243, 'Guacotecti', 9),
(244, 'Ilobasco', 9),
(245, 'Jutiapa', 9),
(246, 'San Isidro (Cabañas)', 9),
(247, 'Sensuntepeque', 9),
(248, 'Tejutepeque', 9),
(249, 'Victoria', 9),
(250, 'Apastepeque', 10),
(251, 'Guadalupe', 10),
(252, 'San Cayetano Istepeque', 10),
(253, 'San Esteban Catarina', 10),
(254, 'San Ildefonso', 10),
(255, 'San Lorenzo', 10),
(256, 'San Sebastián', 10),
(257, 'San Vicente', 10),
(258, 'Santa Clara', 10),
(259, 'Santo Domingo', 10),
(260, 'Tecoluca', 10),
(261, 'Tepetitán', 10),
(262, 'Verapaz', 10),
(263, 'Ahuachapán', 1),
(264, 'Jujutla', 1),
(265, 'Atiquizaya', 1),
(266, 'Concepción de Ataco', 1),
(267, 'El Refugio', 1),
(268, 'Guaymango', 1),
(269, 'Apaneca', 1),
(270, 'San Francisco Menéndez', 1),
(271, 'San Lorenzo', 1),
(272, 'San Pedro Puxtla', 1),
(273, 'Tacuba', 1),
(274, 'Turín', 1),
(275, 'Candelaria de la Frontera', 2),
(276, 'Chalchuapa', 2),
(277, 'Coatepeque', 2),
(278, 'El Congo', 2),
(279, 'El Porvenir', 2),
(280, 'Masahuat', 2),
(281, 'Metapán', 2),
(282, 'San Antonio Pajonal', 2),
(283, 'San Sebastián Salitrillo', 2),
(284, 'Santa Ana', 2),
(285, 'Santa Rosa Guachipilín', 2),
(286, 'Santiago de la Frontera', 2),
(287, 'Texistepeque', 2),
(288, 'Acajutla', 3),
(289, 'Armenia', 3),
(290, 'Caluco', 3),
(291, 'Cuisnahuat', 3),
(292, 'Izalco', 3),
(293, 'Juayúa', 3),
(294, 'Nahuizalco', 3),
(295, 'Nahulingo', 3),
(296, 'Salcoatitán', 3),
(297, 'San Antonio del Monte', 3),
(298, 'San Julián', 3),
(299, 'Santa Catarina Masahuat', 3),
(300, 'Santa Isabel Ishuatán', 3),
(301, 'Santo Domingo de Guzmán', 3),
(302, 'Sonsonate', 3),
(303, 'Sonzacate', 3),
(305, 'Berlín', 11),
(306, 'California', 11),
(307, 'Concepción Batres', 11),
(308, 'El Triunfo', 11),
(309, 'Ereguayquín', 11),
(310, 'Estanzuelas', 11),
(311, 'Jiquilisco', 11),
(312, 'Jucuapa', 11),
(313, 'Jucuarán', 11),
(314, 'Mercedes Umaña', 11),
(315, 'Nueva Granada', 11),
(316, 'Ozatlán', 11),
(317, 'Puerto El Triunfo', 11),
(318, 'San Agustín', 11),
(319, 'San Buenaventura', 11),
(320, 'San Dionisio', 11),
(321, 'San Francisco Javier', 11),
(322, 'Santa Elena', 11),
(323, 'Santa María', 11),
(324, 'Santiago de María', 11),
(325, 'Tecapán', 11),
(326, 'Usulután', 11),
(327, 'Carolina', 13),
(328, 'Chapeltique', 13),
(329, 'Chinameca', 13),
(330, 'Chirilagua', 13),
(331, 'Ciudad Barrios', 13),
(332, 'Comacarán', 13),
(333, 'El Tránsito', 13),
(334, 'Lolotique', 13),
(335, 'Moncagua', 13),
(336, 'Nueva Guadalupe', 13),
(337, 'Nuevo Edén de San Juan', 13),
(338, 'Quelepa', 13),
(339, 'San Antonio del Mosco', 13),
(340, 'San Gerardo', 13),
(341, 'San Jorge', 13),
(342, 'San Luis de la Reina', 13),
(343, 'San Miguel', 13),
(344, 'San Rafael Oriente', 13),
(345, 'Sesori', 13),
(346, 'Uluazapa', 13),
(347, 'Arambala', 12),
(348, 'Cacaopera', 12),
(349, 'Chilanga', 12),
(350, 'Corinto', 12),
(351, 'Delicias de Concepción', 12),
(352, 'El Divisadero', 12),
(353, 'El Rosario (''razán)', 12),
(354, 'Gualococti', 12),
(355, 'Guatajiagua', 12),
(356, 'Joateca', 12),
(357, 'Jocoaitique', 12),
(358, 'Jocoro', 12),
(359, 'Lolotiquillo', 12),
(360, 'Meanguera', 12),
(361, 'Osicala', 12),
(362, 'Perquín', 12),
(363, 'San Carlos', 12),
(364, 'San Fernando (Morazán)', 12),
(365, 'San Francisco Gotera', 12),
(366, 'San Isidro (Morazán)', 12),
(367, 'San Simón', 12),
(368, 'Sensembra', 12),
(369, 'Sociedad', 12),
(370, 'Torola', 12),
(371, 'Yamabal', 12),
(372, 'Yoloaiquín', 12),
(373, 'La Unión', 14),
(374, 'San Alejo', 14),
(375, 'Yucuaiquín', 14),
(376, 'Conchagua', 14),
(377, 'Intipucá', 14),
(378, 'San José', 14),
(379, 'El Carmen (La Unión)', 14),
(380, 'Yayantique', 14),
(381, 'Bolívar', 14),
(382, 'Meanguera del Golfo', 14),
(383, 'Santa Rosa de Lima', 14),
(384, 'Pasaquina', 14),
(385, 'Anamoros', 14),
(386, 'Nueva Esparta', 14),
(387, 'El Sauce', 14),
(388, 'Concepción de Oriente', 14),
(389, 'Polorós', 14),
(390, 'Lislique', 14),
(391, 'Antiguo Cuscatlán', 4),
(392, 'Chiltiupán', 4),
(393, 'Ciudad Arce', 4),
(394, 'Colón', 4),
(395, 'Comasagua', 4),
(396, 'Huizúcar', 4),
(397, 'Jayaque', 4),
(398, 'Jicalapa', 4),
(399, 'La Libertad', 4),
(400, 'Santa Tecla', 4),
(401, 'Nuevo Cuscatlán', 4),
(402, 'San Juan Opico', 4),
(403, 'Quezaltepeque', 4),
(404, 'Sacacoyo', 4),
(405, 'San José Villanueva', 4),
(406, 'San Matías', 4),
(407, 'San Pablo Tacachico', 4),
(408, 'Talnique', 4),
(409, 'Tamanique', 4),
(410, 'Teotepeque', 4),
(411, 'Tepecoyo', 4),
(412, 'Zaragoza', 4),
(413, 'Agua Caliente', 5),
(414, 'Arcatao', 5),
(415, 'Azacualpa', 5),
(416, 'Cancasque', 5),
(417, 'Chalatenango', 5),
(418, 'Citalá', 5),
(419, 'Comapala', 5),
(420, 'Concepción Quezaltepeque', 5),
(421, 'Dulce Nombre de María', 5),
(422, 'El Carrizal', 5),
(423, 'El Paraíso', 5),
(424, 'La Laguna', 5),
(425, 'La Palma', 5),
(426, 'La Reina', 5),
(427, 'Las Vueltas', 5),
(428, 'Nueva Concepción', 5),
(429, 'Nueva Trinidad', 5),
(430, 'Nombre de Jesús', 5),
(431, 'Ojos de Agua', 5),
(432, 'Potonico', 5),
(433, 'San Antonio de la Cruz', 5),
(434, 'San Antonio Los Ranchos', 5),
(435, 'San Fernando (Chalatenango)', 5),
(436, 'San Francisco Lempa', 5),
(437, 'San Francisco Morazán', 5),
(438, 'San Ignacio', 5),
(439, 'San Isidro Labrador', 5),
(440, 'Las Flores', 5),
(441, 'San Luis del Carmen', 5),
(442, 'San Miguel de Mercedes', 5),
(443, 'San Rafael', 5),
(444, 'Santa Rita', 5),
(445, 'Tejutla', 5),
(446, 'Cojutepeque', 7),
(447, 'Candelaria', 7),
(448, 'El Carmen (Cuscatlán)', 7),
(449, 'El Rosario (Cuscatlán)', 7),
(450, 'Monte San Juan', 7),
(451, 'Oratorio de Concepción', 7),
(452, 'San Bartolomé Perulapía', 7),
(453, 'San Cristóbal', 7),
(454, 'San José Guayabal', 7),
(455, 'San Pedro Perulapán', 7),
(456, 'San Rafael Cedros', 7),
(457, 'San Ramón', 7),
(458, 'Santa Cruz Analquito', 7),
(459, 'Santa Cruz Michapa', 7),
(460, 'Suchitoto', 7),
(461, 'Tenancingo', 7),
(462, 'Aguilares', 6),
(463, 'Apopa', 6),
(464, 'Ayutuxtepeque', 6),
(465, 'Cuscatancingo', 6),
(466, 'Ciudad Delgado', 6),
(467, 'El Paisnal', 6),
(468, 'Guazapa', 6),
(469, 'Ilopango', 6),
(470, 'Mejicanos', 6),
(471, 'Nejapa', 6),
(472, 'Panchimalco', 6),
(473, 'Rosario de Mora', 6),
(474, 'San Marcos', 6),
(475, 'San Martín', 6),
(476, 'San Salvador', 6),
(477, 'Santiago Texacuangos', 6),
(478, 'Santo Tomás', 6),
(479, 'Soyapango', 6),
(480, 'Tonacatepeque', 6),
(481, 'Zacatecoluca', 8),
(482, 'Cuyultitán', 8),
(483, 'El Rosario (La Paz)', 8),
(484, 'Jerusalén', 8),
(485, 'Mercedes La Ceiba', 8),
(486, 'Olocuilta', 8),
(487, 'Paraíso de Osorio', 8),
(488, 'San Antonio Masahuat', 8),
(489, 'San Emigdio', 8),
(490, 'San Francisco Chinameca', 8),
(491, 'San Pedro Masahuat', 8),
(492, 'San Juan Nonualco', 8),
(493, 'San Juan Talpa', 8),
(494, 'San Juan Tepezontes', 8),
(495, 'San Luis La Herradura', 8),
(496, 'San Luis Talpa', 8),
(497, 'San Miguel Tepezontes', 8),
(498, 'San Pedro Nonualco', 8),
(499, 'San Rafael Obrajuelo', 8),
(500, 'Santa María Ostuma', 8),
(501, 'Santiago Nonualco', 8),
(502, 'Tapalhuaca', 8),
(503, 'Cinquera', 9),
(504, 'Dolores', 9),
(505, 'Guacotecti', 9),
(506, 'Ilobasco', 9),
(507, 'Jutiapa', 9),
(508, 'San Isidro (Cabañas)', 9),
(509, 'Sensuntepeque', 9),
(510, 'Tejutepeque', 9),
(511, 'Victoria', 9),
(512, 'Apastepeque', 10),
(513, 'Guadalupe', 10),
(514, 'San Cayetano Istepeque', 10),
(515, 'San Esteban Catarina', 10),
(516, 'San Ildefonso', 10),
(517, 'San Lorenzo', 10),
(518, 'San Sebastián', 10),
(519, 'San Vicente', 10),
(520, 'Santa Clara', 10),
(521, 'Santo Domingo', 10),
(522, 'Tecoluca', 10),
(523, 'Tepetitán', 10),
(524, 'Verapaz', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `idUser` int(11) NOT NULL,
  `user` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `idAcceso` int(11) NOT NULL,
  `estado` int(1) NOT NULL,
  `fechaRegistroUser` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='usuarios del sistema';

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`idUser`, `user`, `pass`, `idEmpleado`, `idAcceso`, `estado`, `fechaRegistroUser`) VALUES
(1, 'admin', 'admin', 1, 1, 1, '2018-10-06 00:00:00'),
(2, 'base', 'base', 2, 2, 1, '2018-10-06 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accesos`
--
ALTER TABLE `tbl_accesos`
 ADD PRIMARY KEY (`idAcceso`);

--
-- Indexes for table `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
 ADD PRIMARY KEY (`Id_Cliente`), ADD KEY `Fk_Id_Departamento` (`Fk_Id_Departamento`), ADD KEY `Fk_Id_Municipio` (`Fk_Id_Municipio`), ADD KEY `Fk_Id_Municipio_2` (`Fk_Id_Municipio`), ADD KEY `Fk_Id_Municipio_3` (`Fk_Id_Municipio`), ADD KEY `Fk_Id_Departamento_2` (`Fk_Id_Departamento`), ADD KEY `Fk_Id_Municipio_4` (`Fk_Id_Municipio`), ADD KEY `Fk_Id_Municipio_5` (`Fk_Id_Municipio`), ADD KEY `Fk_Id_Municipio_6` (`Fk_Id_Municipio`);

--
-- Indexes for table `tbl_datos_laborales`
--
ALTER TABLE `tbl_datos_laborales`
 ADD KEY `Fk_Id_Cliente` (`Fk_Id_Cliente`);

--
-- Indexes for table `tbl_estados_solicitud`
--
ALTER TABLE `tbl_estados_solicitud`
 ADD PRIMARY KEY (`id_estado`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_estados_solicitud`
--
ALTER TABLE `tbl_estados_solicitud`
MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_datos_laborales`
--
ALTER TABLE `tbl_datos_laborales`
ADD CONSTRAINT `tbl_datos_laborales_ibfk_1` FOREIGN KEY (`Fk_Id_Cliente`) REFERENCES `tbl_clientes` (`Id_Cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
