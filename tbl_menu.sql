-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2018 a las 06:57:18
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

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
(1, 'Clientes', '<li class=\'has_sub\'>                                 \r\n  <a href=\'#\' class=\'waves-effect\'><i class=\'fa fa-user-o fa-lg\'></i><span>Clientes</span><span class=\'pull-right\'><i class=\'md md-keyboard-arrow-down\'></i></span></a>                                 \r\n  <ul class=\'list-unstyled\'>                                     \r\n    <li><a href=\'http://localhost/Trabajo_Fast_Cash/fast-cash/Clientes/\'>Nuevo cliente</a></li>\r\n    <li><a href=\'http://localhost/Trabajo_Fast_Cash/fast-cash/Clientes/gestionarCliente\'>Clientes</a></li>                    \r\n  </ul>\r\n</li>', 1, '2018-11-21 20:56:45'),
(2, 'Solicitud', '<li class=\"has_sub\">\r\n    <a href=\"#\" class=\"waves-effect\"><i class=\"fa fa-book fa-lg\"></i><span>Solicitud</span><span class=\"pull-right\"><i class=\"md  md-keyboard-arrow-down\"></i></span></a>\r\n    <ul class=\"list-unstyled\">\r\n        <li><a href=\"#\" data-toggle=\"modal\" data-target=\".modal_opcion_solicitud\">Nueva solicitud</a></li>\r\n        <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/Solicitud/\">Solicitudes</a></li>\r\n        <!-- <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/EstadosSolicitud/\">Gesctionar estados de la solicitud</a></li> -->\r\n        <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/Solicitud/gestionarPlazos\">Plazos</a></li>\r\n    </ul>\r\n</li>', 1, '2018-11-21 21:02:26'),
(3, 'Creditos', '<li class=\"has_sub\">\r\n   <a href=\"#\" class=\"waves-effect\"><i class=\"fa fa-usd fa-lg\"></i><span>Créditos</span><span class=\"pull-right\"><i class=\"md  md-keyboard-arrow-down\"></i></span></a>\r\n    <ul class=\"list-unstyled\">\r\n        <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/Creditos\">Créditos</a></li>\r\n        <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/Pagos/\">Pago</a></li>\r\n    </ul>\r\n</li>', 1, '2018-11-21 21:03:21'),
(4, 'Empleados', '<li class=\"has_sub\">\r\n    <a href=\"#\" class=\"waves-effect\"><i class=\"fa fa-user-plus fa-lg\" ></i><span>Empleados</span><span class=\"pull-right\"><i class=\"md  md-keyboard-arrow-down\"></i></span></a>\r\n    <ul class=\"list-unstyled\">\r\n        <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/Empleados/ViewInsertarEmpleados\">Nuevo empleado</a></li>\r\n        <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/Empleados/Index\">Empleados</a></li>\r\n    </ul>\r\n</li>', 1, '2018-11-21 21:04:48'),
(5, 'Caja Chica', '<li class=\"has_sub\">\r\n    <a href=\"#\" class=\"waves-effect\"><i class=\"fa fa-cube fa-lg\" ></i><span>Caja chica</span><span class=\"pull-right\"><i class=\"md  md-keyboard-arrow-down\"></i></span></a>\r\n    <ul class=\"list-unstyled\">\r\n        <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/CajaChica/\" class=\"waves-effect\"><span>Realizar procesos</span></a></li>\r\n        <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/CajaChica/HistorialCajas\" class=\"waves-effect\"><span>Historial</span></a></li>\r\n    </ul>\r\n</li>', 1, '2018-11-21 21:19:25'),
(6, 'Proveedores', '<li>\r\n    <a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/Proveedores/\" class=\"waves-effect\"><i class=\"ion-android-contacts\"></i><span> Proveedores </span></a>\r\n</li>', 1, '2018-11-21 21:19:25'),
(7, 'Configuración', '<li class=\"has_sub\">\r\n    <a href=\"#\" class=\"waves-effect\"><i class=\"fa fa-cog\" ></i><span>Configuración</span><span class=\"pull-right\"><i class=\"md  md-keyboard-arrow-down\"></i></span></a>\r\n    <ul class=\"list-unstyled\">\r\n        <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/User/\">Usuarios</a></li>\r\n        <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/Accesos/\">Roles</a></li>\r\n         <li><a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/Rol/\">Permisos</a></li>\r\n    </ul>\r\n</li>', 1, '2018-11-21 21:05:53'),
(8, 'Empresa', '<li>\r\n    <a href=\"http://localhost/Trabajo_Fast_Cash/fast-cash/Empresa/\" class=\"waves-effect\"><i class=\"fa fa-university fa-lg\"></i><span> Empresa </span></a>\r\n</li>', 1, '2018-11-21 21:19:45');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`idMenu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `idMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
