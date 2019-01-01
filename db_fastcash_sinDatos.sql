-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-12-2018 a las 01:00:27
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_fastcash`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_accesos`
--

CREATE TABLE `tbl_accesos` (
  `idAcceso` int(11) NOT NULL,
  `tipoAcceso` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(1) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla para el manejo de accesos';

--
-- Volcado de datos para la tabla `tbl_accesos`
--

INSERT INTO `tbl_accesos` (`idAcceso`, `tipoAcceso`, `descripcion`, `estado`, `fechaRegistro`) VALUES
(5, 'Administrador', 'Acceso total al sistema', 1, '2018-12-01 00:11:05'),
(6, 'USUARIO BASICO', 'ESTE TIPO DE USUARIO TENDRA ACCESO A REPORTE DE CREDITOS', 0, '2018-12-01 06:00:00'),
(7, 'Cajero', 'Este tipo de usuario solo tiene acceso ha los creditos', 0, '2018-12-08 06:00:00'),
(8, 'Contador', 'Este Rol solo puede registrar y controlar estados contables etc', 0, '2018-12-15 06:00:00'),
(9, 'test', 'test', 1, '2018-12-15 06:00:00'),
(10, 'Auxiliar contador', 'descripcion', 1, '2018-12-15 06:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_amortizaciones`
--

CREATE TABLE `tbl_amortizaciones` (
  `idAmortizacion` int(11) NOT NULL,
  `tasaInteres` decimal(10,2) NOT NULL,
  `capital` decimal(10,2) NOT NULL,
  `totalInteres` decimal(10,2) NOT NULL,
  `totalIva` decimal(10,2) NOT NULL,
  `ivaInteresCapital` decimal(10,2) NOT NULL,
  `plazoMeses` int(11) NOT NULL,
  `pagoCuota` decimal(10,2) NOT NULL,
  `cantidadCuota` int(11) NOT NULL,
  `estadoAmortizacion` int(1) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idSolicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_aranceles`
--

CREATE TABLE `tbl_aranceles` (
  `idArancel` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `porcentaje` double NOT NULL,
  `estado` int(1) NOT NULL,
  `fechaRegistro` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cajachica_procesos`
--

CREATE TABLE `tbl_cajachica_procesos` (
  `idProceso` int(11) NOT NULL,
  `detalleProceso` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fechaProceso` date NOT NULL,
  `entrada` float DEFAULT NULL,
  `salida` float DEFAULT NULL,
  `saldo` float NOT NULL,
  `idCajaChica` int(11) NOT NULL,
  `idTipoPago` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_caja_chica`
--

CREATE TABLE `tbl_caja_chica` (
  `idCajaChica` int(11) NOT NULL,
  `estadoCajaChica` int(11) NOT NULL,
  `fechaCajaChica` date NOT NULL,
  `cantidadApertura` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clientes`
--

CREATE TABLE `tbl_clientes` (
  `Id_Cliente` int(11) NOT NULL,
  `Codigo_Cliente` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre_Cliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido_Cliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Estado_Civil_Cliente` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Genero_Cliente` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono_Fijo_Cliente` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Telefono_Celular_Cliente` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Domicilio_Cliente` text COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_Nacimiento_Cliente` date NOT NULL,
  `Zona_Cliente` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `DUI_Cliente` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `NIT_Cliente` varchar(18) COLLATE utf8_spanish_ci NOT NULL,
  `urlImg` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `ingreso` decimal(10,2) NOT NULL,
  `Observaciones_Cliente` text COLLATE utf8_spanish_ci NOT NULL,
  `Profesion_Cliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(1) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Fk_Id_Departamento` int(11) NOT NULL,
  `Fk_Id_Municipio` int(11) NOT NULL,
  `Tipo_Cliente` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`Id_Cliente`, `Codigo_Cliente`, `Nombre_Cliente`, `Apellido_Cliente`, `Estado_Civil_Cliente`, `Genero_Cliente`, `email`, `Telefono_Fijo_Cliente`, `Telefono_Celular_Cliente`, `Domicilio_Cliente`, `Fecha_Nacimiento_Cliente`, `Zona_Cliente`, `DUI_Cliente`, `NIT_Cliente`, `urlImg`, `ingreso`, `Observaciones_Cliente`, `Profesion_Cliente`, `estado`, `fechaRegistro`, `Fk_Id_Departamento`, `Fk_Id_Municipio`, `Tipo_Cliente`) VALUES
(9, '1', 'Evelin Elizabeth ', 'Ortega de Granados', 'Casado/a', 'Femenino', '', '', '78931556', 'B. el centro 3. AV. SUR. ', '1979-02-27', 'Urbana', '0193733-8', '0601-270279-102-2', 'plantilla/Fotos/foto_0193733-8.png', '300.00', 'TRAVAJA INFORALMENTE.', 'Dr.en cirugia dental', 1, '2018-12-01 00:52:03', 11, 43, 'Empresario'),
(10, 'INML047119052', 'Imelda Noemi', 'Morales Lopez', 'Soltero/a', 'Femenino', '', '', '78589652', 'Hacienda Santa Anita Mercedes Umaña', '1977-05-12', 'Rural', '04711905-2', '1219-120577-102-1', 'plantilla/Fotos/foto_04711905-2.png', '300.00', '', 'Comerciante', 1, '2018-12-15 20:18:18', 11, 52, 'Empresario'),
(11, 'MMGG64654654', 'MARVIN', 'GOMEZ', 'Soltero/a', 'Masculino', 'marvin@gmail.com', '', '75869858', 'nada', '2018-12-25', 'Rural', '6465465-4', '4565-461929-894-9', '', '9000.00', 'nada', 'ING', 1, '2018-12-25 23:46:00', 1, 4, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_creditos`
--

CREATE TABLE `tbl_creditos` (
  `idCredito` int(11) NOT NULL,
  `codigoCredito` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tipoCredito` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `codigoTipoCredito` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `montoTotal` decimal(10,2) NOT NULL,
  `totalAbonado` decimal(10,2) NOT NULL,
  `estadoCredito` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fechaApertura` date NOT NULL,
  `fechaVencimiento` date NOT NULL,
  `estado` int(1) NOT NULL,
  `fechaRegistro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idAmortizacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_datos_laborales`
--

CREATE TABLE `tbl_datos_laborales` (
  `Cargo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre_Empresa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Rubro` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `Fk_Id_Cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_datos_negocio`
--

CREATE TABLE `tbl_datos_negocio` (
  `Id_Negocio` int(11) NOT NULL,
  `Fk_Id_Cliente` int(11) NOT NULL,
  `Nombre_Negocio` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `NIT` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `NRC` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Giro` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Direccion_Negocio` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Tipo_Factura` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_departamentos`
--

CREATE TABLE `tbl_departamentos` (
  `Id_Departamento` int(11) NOT NULL,
  `Nombre_Departamento` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_departamentos`
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
-- Estructura de tabla para la tabla `tbl_detallepagos`
--

CREATE TABLE `tbl_detallepagos` (
  `idDetallePago` int(11) NOT NULL,
  `totalPago` decimal(10,2) NOT NULL,
  `iva` decimal(10,2) NOT NULL,
  `interes` decimal(10,2) NOT NULL,
  `abonoCapital` decimal(10,2) NOT NULL,
  `capitalPendiente` decimal(10,0) NOT NULL,
  `interesPendiente` decimal(10,2) NOT NULL,
  `diasPagados` int(11) NOT NULL,
  `mora` decimal(10,2) NOT NULL,
  `fechaPago` date NOT NULL,
  `estado` int(1) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idCredito` int(11) NOT NULL,
  `idFactura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='tabla para registros de pagos de cada cliente';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_documentos`
--

CREATE TABLE `tbl_documentos` (
  `idDocumento` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `tipoDocumento` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(1) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='tabla para gestinonar copiar de documentos y fotos de perfil';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empleados`
--

CREATE TABLE `tbl_empleados` (
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
  `cargo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `profesion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(1) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_empleados`
--

INSERT INTO `tbl_empleados` (`idEmpleado`, `nombreEmpleado`, `apellidoEmpleado`, `fechaNacimientoEmpleado`, `genero`, `dui`, `nit`, `direccion`, `telefono`, `email`, `cargo`, `profesion`, `estado`, `fechaRegistro`) VALUES
(5, 'Elizardo', 'Alvarenga', '1990-10-02', 'Masculino', '45362598-2', '123-253565-265-1', 'Mercedes Umaña', '7586-5689', 'prueba@gmail.com', 'Gerente', 'Licenciado Contaduría Publica', 1, '2018-12-01 00:10:25'),
(6, 'JONATAN EDGARDO', 'ALVARENGA RIVAS', '1994-09-11', 'Masculino', '05058339-1', '1102-110994-102-5', 'BERLIN, USULUTAN', '74928029', 'JHONATANALVARENGA96@GMAIL.COM', 'EJECUTIVO DE CREDITOS', 'ESTUDIANTE', 1, '2018-12-01 00:26:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empresa`
--

CREATE TABLE `tbl_empresa` (
  `idEmpresa` int(11) NOT NULL,
  `nombreEmpresa` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `giro` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `nrc` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_empresa`
--

INSERT INTO `tbl_empresa` (`idEmpresa`, `nombreEmpresa`, `giro`, `email`, `telefono`, `direccion`, `nrc`, `estado`, `fechaRegistro`) VALUES
(1, 'Fast Cash', 'Financiero', 'fastcash.sa@gmail.com', '26295217', 'Mercedes Umaña', '', 1, '2018-11-30 23:46:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estados_solicitud`
--

CREATE TABLE `tbl_estados_solicitud` (
  `id_estado` int(11) NOT NULL,
  `nombreEstado` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(1) NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_estados_solicitud`
--

INSERT INTO `tbl_estados_solicitud` (`id_estado`, `nombreEstado`, `estado`, `fecha_registro`) VALUES
(1, 'Nueva', 1, '2018-11-02'),
(2, 'En Proceso', 1, '0000-00-00'),
(3, 'Aprobada', 1, '0000-00-00'),
(4, 'Denegada', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_fiadores`
--

CREATE TABLE `tbl_fiadores` (
  `idFiador` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dui` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(17) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `ingreso` decimal(10,2) NOT NULL,
  `idSolicitud` int(11) NOT NULL,
  `estado` int(1) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla para los Fiadores';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_garantias`
--

CREATE TABLE `tbl_garantias` (
  `idGarantia` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `valorado` decimal(10,2) NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `idSolicitud` int(11) NOT NULL,
  `estado` int(1) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idDocumento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla para la Garantía';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `idMenu` int(11) NOT NULL,
  `menu` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `html` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(1) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_menu`
--

INSERT INTO `tbl_menu` (`idMenu`, `menu`, `html`, `estado`, `fechaRegistro`) VALUES
(1, 'Clientes', '<li class=\'has_sub\'>                                 \r\n\r\n  <a href=\'#\' class=\'waves-effect\'><i class=\'fa fa-user-o fa-lg\'></i><span>Clientes</span><span class=\'pull-right\'><i class=\'md md-keyboard-arrow-down\'></i></span></a>                                 \r\n\r\n  <ul class=\'list-unstyled\'>                                     \r\n\r\n    <li><a href=\'http://localhost/Trabajo_Fast_Cash/fast-cash/Clientes/\'>Nuevo cliente</a></li>\r\n\r\n    <li><a href=\'http://localhost/Trabajo_Fast_Cash/fast-cash/Clientes/gestionarCliente\'>Clientes</a></li>                    \r\n\r\n  </ul>\r\n\r\n</li>', 1, '2018-11-21 20:56:45'),
(2, 'Solicitud', '<li class=\"has_sub\">\r\n    <a href=\"#\" class=\"waves-effect\"><i class=\"fa fa-book fa-lg\"></i><span>Solicitud</span><span class=\"pull-right\"><i class=\"md  md-keyboard-arrow-down\"></i></span></a>\r\n    <ul class=\"list-unstyled\">\r\n        <li><a href=\"#\" data-toggle=\"modal\" data-target=\".modal_opcion_solicitud\">Nueva solicitud</a></li>\r\n        <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/Solicitud/\">Solicitudes</a></li>\r\n        <!-- <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/EstadosSolicitud/\">Gesctionar estados de la solicitud</a></li> -->\r\n        <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/Solicitud/gestionarPlazos\">Plazos</a></li>\r\n    </ul>\r\n</li>', 1, '2018-11-21 21:02:26'),
(3, 'Creditos', '<li class=\"has_sub\">\r\n   <a href=\"#\" class=\"waves-effect\"><i class=\"fa fa-usd fa-lg\"></i><span>Créditos</span><span class=\"pull-right\"><i class=\"md  md-keyboard-arrow-down\"></i></span></a>\r\n    <ul class=\"list-unstyled\">\r\n        <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/Creditos\">Créditos</a></li>\r\n        <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/Pagos/\">Pago</a></li>\r\n    </ul>\r\n</li>', 1, '2018-11-21 21:03:21'),
(4, 'Empleados', '<li class=\"has_sub\">\r\n    <a href=\"#\" class=\"waves-effect\"><i class=\"fa fa-user-plus fa-lg\" ></i><span>Empleados</span><span class=\"pull-right\"><i class=\"md  md-keyboard-arrow-down\"></i></span></a>\r\n    <ul class=\"list-unstyled\">\r\n        <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/Empleados/ViewInsertarEmpleados\">Nuevo empleado</a></li>\r\n        <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/Empleados/Index\">Empleados</a></li>\r\n    </ul>\r\n</li>', 1, '2018-11-21 21:04:48'),
(5, 'Caja Chica', '<li class=\"has_sub\">\r\n    <a href=\"#\" class=\"waves-effect\"><i class=\"fa fa-cube fa-lg\" ></i><span>Caja chica</span><span class=\"pull-right\"><i class=\"md  md-keyboard-arrow-down\"></i></span></a>\r\n    <ul class=\"list-unstyled\">\r\n        <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/CajaChica/\" class=\"waves-effect\"><span>Realizar procesos</span></a></li>\r\n        <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/CajaChica/HistorialCajas\" class=\"waves-effect\"><span>Historial</span></a></li>\r\n    </ul>\r\n</li>', 1, '2018-11-21 21:19:25'),
(6, 'Proveedores', '<li>\r\n    <a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/Proveedores/\" class=\"waves-effect\"><i class=\"ion-android-contacts\"></i><span> Proveedores </span></a>\r\n</li>', 1, '2018-11-21 21:19:25'),
(7, 'Configuración', '<li class=\"has_sub\">\r\n    <a href=\"#\" class=\"waves-effect\"><i class=\"fa fa-cog\" ></i><span>Configuración</span><span class=\"pull-right\"><i class=\"md  md-keyboard-arrow-down\"></i></span></a>\r\n    <ul class=\"list-unstyled\">\r\n        <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/User/\">Usuarios</a></li>\r\n        <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/Accesos/\">Roles</a></li>\r\n         <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/Rol/\">Permisos</a></li>\r\n    </ul>\r\n</li>', 1, '2018-11-21 21:05:53'),
(8, 'Empresa', '<li>\r\n    <a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/Empresa/\" class=\"waves-effect\"><i class=\"fa fa-university fa-lg\"></i><span> Empresa </span></a>\r\n</li>', 1, '2018-11-21 21:19:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_municipios`
--

CREATE TABLE `tbl_municipios` (
  `Id_Municipio` int(11) NOT NULL,
  `Nombre_Municipio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Fk_Id_Departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_municipios`
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
(91, 'El Rosario (\'razán)', 12),
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
(262, 'Verapaz', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_permisos`
--

CREATE TABLE `tbl_permisos` (
  `idPermiso` int(11) NOT NULL,
  `permiso` int(1) NOT NULL,
  `estado` int(1) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idMenu` int(11) NOT NULL,
  `idAcceso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_permisos`
--

INSERT INTO `tbl_permisos` (`idPermiso`, `permiso`, `estado`, `fechaRegistro`, `idMenu`, `idAcceso`) VALUES
(19, 1, 1, '2018-12-01 00:12:26', 1, 5),
(20, 1, 1, '2018-12-01 00:13:16', 5, 5),
(21, 1, 1, '2018-12-01 00:16:05', 2, 5),
(22, 1, 1, '2018-12-01 00:16:05', 3, 5),
(23, 1, 1, '2018-12-01 00:16:05', 4, 5),
(24, 1, 1, '2018-12-01 00:16:05', 6, 5),
(25, 1, 1, '2018-12-01 00:16:05', 7, 5),
(26, 1, 1, '2018-12-01 00:16:05', 8, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_plazos_prestamos`
--

CREATE TABLE `tbl_plazos_prestamos` (
  `id_plazo` int(11) NOT NULL,
  `tiempo_plazo` int(11) NOT NULL,
  `fechaRegistro` date NOT NULL,
  `estado_plazo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_plazos_prestamos`
--

INSERT INTO `tbl_plazos_prestamos` (`id_plazo`, `tiempo_plazo`, `fechaRegistro`, `estado_plazo`) VALUES
(1, 1, '2018-11-02', 1),
(2, 2, '2018-11-02', 1),
(3, 3, '2018-11-02', 1),
(4, 4, '2018-11-02', 1),
(5, 5, '2018-11-02', 1),
(6, 6, '2018-11-02', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proveedores`
--

CREATE TABLE `tbl_proveedores` (
  `idProveedor` int(11) NOT NULL,
  `nombreCompleto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombreEmpresa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `rubro` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `direccionEmpresa` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_solicitudes`
--

CREATE TABLE `tbl_solicitudes` (
  `idSolicitud` int(11) NOT NULL,
  `codigoSolicitud` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fechaRecibido` datetime NOT NULL,
  `observaciones` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `estadoSolicitud` int(1) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cobraMora` int(11) NOT NULL,
  `tipoCredito` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idLineaPlazo` int(11) NOT NULL,
  `idEstadoSolicitud` int(11) NOT NULL,
  `idDocumento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='tabla para la gestion de solicitudes';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_pago`
--

CREATE TABLE `tbl_tipo_pago` (
  `idTipo` int(11) NOT NULL,
  `detalle` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_tipo_pago`
--

INSERT INTO `tbl_tipo_pago` (`idTipo`, `detalle`) VALUES
(1, 'Efectivo'),
(2, 'Cheque'),
(3, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_users`
--

CREATE TABLE `tbl_users` (
  `idUser` int(11) NOT NULL,
  `user` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `idAcceso` int(11) NOT NULL,
  `estado` int(1) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='usuarios del sistema';

--
-- Volcado de datos para la tabla `tbl_users`
--

INSERT INTO `tbl_users` (`idUser`, `user`, `pass`, `idEmpleado`, `idAcceso`, `estado`, `fechaRegistro`) VALUES
(4, 'admin', 'admin', 5, 5, 1, '2018-12-01 00:11:34');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_accesos`
--
ALTER TABLE `tbl_accesos`
  ADD PRIMARY KEY (`idAcceso`);

--
-- Indices de la tabla `tbl_amortizaciones`
--
ALTER TABLE `tbl_amortizaciones`
  ADD PRIMARY KEY (`idAmortizacion`),
  ADD KEY `idSolicitud` (`idSolicitud`);

--
-- Indices de la tabla `tbl_aranceles`
--
ALTER TABLE `tbl_aranceles`
  ADD PRIMARY KEY (`idArancel`);

--
-- Indices de la tabla `tbl_cajachica_procesos`
--
ALTER TABLE `tbl_cajachica_procesos`
  ADD PRIMARY KEY (`idProceso`),
  ADD KEY `idCajaChica` (`idCajaChica`),
  ADD KEY `tipoPago` (`idTipoPago`);

--
-- Indices de la tabla `tbl_caja_chica`
--
ALTER TABLE `tbl_caja_chica`
  ADD PRIMARY KEY (`idCajaChica`);

--
-- Indices de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  ADD PRIMARY KEY (`Id_Cliente`),
  ADD KEY `Fk_Id_Departamento` (`Fk_Id_Departamento`),
  ADD KEY `Fk_Id_Municipio` (`Fk_Id_Municipio`),
  ADD KEY `Fk_Id_Municipio_2` (`Fk_Id_Municipio`),
  ADD KEY `Fk_Id_Municipio_3` (`Fk_Id_Municipio`),
  ADD KEY `Fk_Id_Departamento_2` (`Fk_Id_Departamento`),
  ADD KEY `Fk_Id_Municipio_4` (`Fk_Id_Municipio`),
  ADD KEY `Fk_Id_Municipio_5` (`Fk_Id_Municipio`),
  ADD KEY `Fk_Id_Municipio_6` (`Fk_Id_Municipio`);

--
-- Indices de la tabla `tbl_creditos`
--
ALTER TABLE `tbl_creditos`
  ADD PRIMARY KEY (`idCredito`),
  ADD KEY `idAmortizacion` (`idAmortizacion`);

--
-- Indices de la tabla `tbl_datos_laborales`
--
ALTER TABLE `tbl_datos_laborales`
  ADD KEY `Fk_Id_Cliente` (`Fk_Id_Cliente`);

--
-- Indices de la tabla `tbl_datos_negocio`
--
ALTER TABLE `tbl_datos_negocio`
  ADD KEY `Fk_Id_Cliente` (`Fk_Id_Cliente`);

--
-- Indices de la tabla `tbl_departamentos`
--
ALTER TABLE `tbl_departamentos`
  ADD PRIMARY KEY (`Id_Departamento`);

--
-- Indices de la tabla `tbl_detallepagos`
--
ALTER TABLE `tbl_detallepagos`
  ADD PRIMARY KEY (`idDetallePago`),
  ADD KEY `idCredito` (`idCredito`),
  ADD KEY `idFactura` (`idFactura`);

--
-- Indices de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
  ADD PRIMARY KEY (`idDocumento`);

--
-- Indices de la tabla `tbl_empleados`
--
ALTER TABLE `tbl_empleados`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `tbl_empresa`
--
ALTER TABLE `tbl_empresa`
  ADD PRIMARY KEY (`idEmpresa`);

--
-- Indices de la tabla `tbl_estados_solicitud`
--
ALTER TABLE `tbl_estados_solicitud`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `tbl_fiadores`
--
ALTER TABLE `tbl_fiadores`
  ADD PRIMARY KEY (`idFiador`),
  ADD KEY `idSolicitud` (`idSolicitud`);

--
-- Indices de la tabla `tbl_garantias`
--
ALTER TABLE `tbl_garantias`
  ADD PRIMARY KEY (`idGarantia`),
  ADD KEY `idDocumento` (`idDocumento`),
  ADD KEY `idSolicitud` (`idSolicitud`);

--
-- Indices de la tabla `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`idMenu`);

--
-- Indices de la tabla `tbl_municipios`
--
ALTER TABLE `tbl_municipios`
  ADD PRIMARY KEY (`Id_Municipio`),
  ADD KEY `Fk_Id_Departamento` (`Fk_Id_Departamento`);

--
-- Indices de la tabla `tbl_permisos`
--
ALTER TABLE `tbl_permisos`
  ADD PRIMARY KEY (`idPermiso`),
  ADD KEY `idAcceso` (`idAcceso`),
  ADD KEY `idMenu` (`idMenu`);

--
-- Indices de la tabla `tbl_plazos_prestamos`
--
ALTER TABLE `tbl_plazos_prestamos`
  ADD PRIMARY KEY (`id_plazo`);

--
-- Indices de la tabla `tbl_proveedores`
--
ALTER TABLE `tbl_proveedores`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `tbl_solicitudes`
--
ALTER TABLE `tbl_solicitudes`
  ADD PRIMARY KEY (`idSolicitud`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idLineaPlazo` (`idLineaPlazo`),
  ADD KEY `idEstadoSolicitud` (`idEstadoSolicitud`),
  ADD KEY `idDocumento` (`idDocumento`);

--
-- Indices de la tabla `tbl_tipo_pago`
--
ALTER TABLE `tbl_tipo_pago`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indices de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idEmpleado` (`idEmpleado`),
  ADD KEY `idAcceso` (`idAcceso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_accesos`
--
ALTER TABLE `tbl_accesos`
  MODIFY `idAcceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tbl_amortizaciones`
--
ALTER TABLE `tbl_amortizaciones`
  MODIFY `idAmortizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `tbl_aranceles`
--
ALTER TABLE `tbl_aranceles`
  MODIFY `idArancel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_cajachica_procesos`
--
ALTER TABLE `tbl_cajachica_procesos`
  MODIFY `idProceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `tbl_caja_chica`
--
ALTER TABLE `tbl_caja_chica`
  MODIFY `idCajaChica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  MODIFY `Id_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tbl_creditos`
--
ALTER TABLE `tbl_creditos`
  MODIFY `idCredito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tbl_departamentos`
--
ALTER TABLE `tbl_departamentos`
  MODIFY `Id_Departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tbl_detallepagos`
--
ALTER TABLE `tbl_detallepagos`
  MODIFY `idDetallePago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
  MODIFY `idDocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_empleados`
--
ALTER TABLE `tbl_empleados`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_empresa`
--
ALTER TABLE `tbl_empresa`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_estados_solicitud`
--
ALTER TABLE `tbl_estados_solicitud`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_fiadores`
--
ALTER TABLE `tbl_fiadores`
  MODIFY `idFiador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_garantias`
--
ALTER TABLE `tbl_garantias`
  MODIFY `idGarantia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `idMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_municipios`
--
ALTER TABLE `tbl_municipios`
  MODIFY `Id_Municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT de la tabla `tbl_permisos`
--
ALTER TABLE `tbl_permisos`
  MODIFY `idPermiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `tbl_plazos_prestamos`
--
ALTER TABLE `tbl_plazos_prestamos`
  MODIFY `id_plazo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tbl_proveedores`
--
ALTER TABLE `tbl_proveedores`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_solicitudes`
--
ALTER TABLE `tbl_solicitudes`
  MODIFY `idSolicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_pago`
--
ALTER TABLE `tbl_tipo_pago`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_amortizaciones`
--
ALTER TABLE `tbl_amortizaciones`
  ADD CONSTRAINT `tbl_amortizaciones_ibfk_1` FOREIGN KEY (`idSolicitud`) REFERENCES `tbl_solicitudes` (`idSolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_cajachica_procesos`
--
ALTER TABLE `tbl_cajachica_procesos`
  ADD CONSTRAINT `tbl_cajachica_procesos_ibfk_1` FOREIGN KEY (`idCajaChica`) REFERENCES `tbl_caja_chica` (`idCajaChica`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_cajachica_procesos_ibfk_2` FOREIGN KEY (`idTipoPago`) REFERENCES `tbl_tipo_pago` (`idTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  ADD CONSTRAINT `tbl_clientes_ibfk_1` FOREIGN KEY (`Fk_Id_Municipio`) REFERENCES `tbl_municipios` (`Id_Municipio`);

--
-- Filtros para la tabla `tbl_creditos`
--
ALTER TABLE `tbl_creditos`
  ADD CONSTRAINT `tbl_creditos_ibfk_1` FOREIGN KEY (`idAmortizacion`) REFERENCES `tbl_amortizaciones` (`idAmortizacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_datos_laborales`
--
ALTER TABLE `tbl_datos_laborales`
  ADD CONSTRAINT `tbl_datos_laborales_ibfk_1` FOREIGN KEY (`Fk_Id_Cliente`) REFERENCES `tbl_clientes` (`Id_Cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_datos_negocio`
--
ALTER TABLE `tbl_datos_negocio`
  ADD CONSTRAINT `tbl_datos_negocio_ibfk_1` FOREIGN KEY (`Fk_Id_Cliente`) REFERENCES `tbl_clientes` (`Id_Cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_detallepagos`
--
ALTER TABLE `tbl_detallepagos`
  ADD CONSTRAINT `tbl_detallePagos_ibfk_2` FOREIGN KEY (`idCredito`) REFERENCES `tbl_creditos` (`idCredito`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_fiadores`
--
ALTER TABLE `tbl_fiadores`
  ADD CONSTRAINT `tbl_fiadores_ibfk_1` FOREIGN KEY (`idSolicitud`) REFERENCES `tbl_solicitudes` (`idSolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_garantias`
--
ALTER TABLE `tbl_garantias`
  ADD CONSTRAINT `tbl_garantias_ibfk_2` FOREIGN KEY (`idSolicitud`) REFERENCES `tbl_solicitudes` (`idSolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_municipios`
--
ALTER TABLE `tbl_municipios`
  ADD CONSTRAINT `tbl_municipios_ibfk_1` FOREIGN KEY (`Fk_Id_Departamento`) REFERENCES `tbl_departamentos` (`Id_Departamento`);

--
-- Filtros para la tabla `tbl_solicitudes`
--
ALTER TABLE `tbl_solicitudes`
  ADD CONSTRAINT `tbl_solicitudes_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `tbl_clientes` (`Id_Cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_solicitudes_ibfk_2` FOREIGN KEY (`idDocumento`) REFERENCES `tbl_documentos` (`idDocumento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_solicitudes_ibfk_3` FOREIGN KEY (`idLineaPlazo`) REFERENCES `tbl_plazos_prestamos` (`id_plazo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_solicitudes_ibfk_6` FOREIGN KEY (`idEstadoSolicitud`) REFERENCES `tbl_estados_solicitud` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `tbl_empleados` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_users_ibfk_2` FOREIGN KEY (`idAcceso`) REFERENCES `tbl_accesos` (`idAcceso`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
