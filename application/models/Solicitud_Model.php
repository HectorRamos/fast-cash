<?php 

class Solicitud_Model extends CI_Model
{
	public function obtenerPlazos()
	{
		$plazos= $this->db->get("tbl_plazos_prestamos");
		return $plazos;
	}

	public function guardarPlazo($datos)
	{
		if ($datos != null)
		{
			$plazo= $datos['tiempo_plazo'];
			$sql = "INSERT INTO tbl_plazos_prestamos VALUES('', '$plazo', NOW(), '1')";
			if ($this->db->query($sql))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}

	public function actualizarPlazo($datos)
	{
		if ($datos != null)
		{
			$plazo= $datos['tiempo_plazo'];
			$idPlazo= $datos['id_plazo'];

			$sql = "UPDATE tbl_plazos_prestamos SET tiempo_plazo='$plazo' WHERE id_plazo = '$idPlazo'";
			if ($this->db->query($sql))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}

	public function eliminarPlazo($id)
	{
		if ($id != null)
		{
			$sql = "UPDATE tbl_plazos_prestamos SET estado_plazo='0' WHERE id_plazo = '$id'";
			if ($this->db->query($sql))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}

	public function obtenerClientes()
	{
		$clientes= $this->db->get("tbl_clientes");
		return $clientes;
	}

	public function GuardarSolicitud($datos)
	{
		// Datos para la solicitud
	   $codigoSolicitud = $datos['numero_solicitud'];
	   $fechaRecibido = $datos['fecha_recibido'];
	   $observaciones = $datos['observaciones'];
	   $estado = 1;
	   $idCliente = $datos['id_cliente'];
	   $idLineaPlazo = $datos['tipo_prestamo'];
	   $idEstadoSolicitud = '1';

	   // Datos Amortizacion
	   $tasaInteres = $datos['tasa_interes'];
	   $capital = $datos['monto_dinero'];
	   $totalInteres = $datos['intereses_pagar'];
	   $totalIva = $datos['iva_pagar'];
	   $ivaInteresCapital = $datos['total_pagar'];
	   $plazoMeses = $datos['numero_meses'];
	   $pagoCuota = $datos['cuota_diaria'];
	   $cantidadCuota = $datos['numero_cuotas'];
	   $estado = 1;

	   // Guardando la solicitud
	   $sql = "INSERT INTO tbl_solicitudes(codigoSolicitud, fechaRecibido, observaciones, estadoSolicitud, idCliente, idLineaPlazo, idEstadoSolicitud)
	   		   VALUES('$codigoSolicitud', '$fechaRecibido', '$observaciones', '$estado', '$idCliente', '$idLineaPlazo', '$idEstadoSolicitud')";
	    if ($this->db->query($sql))
		{
			//Buscando el ultimo Id
			$sql2 = "SELECT MAX(idSolicitud) as iSoli FROM tbl_solicitudes WHERE codigoSolicitud = '".$codigoSolicitud."' LIMIT 1";
			$resultado = $this->db->query($sql2);
			foreach ($resultado->result() as $filaResultado)
			{
				$idSoli = $filaResultado->iSoli; //Dato para la amortizacion
			}

			// Guardando datos de la amortizacion
			$sql3 = "INSERT INTO tbl_amortizaciones(tasaInteres, capital, totalInteres, totalIva, ivaInteresCapital, plazoMeses, pagoCuota, cantidadCuota, estadoAmortizacion, idSolicitud)
			VALUES('$tasaInteres', '$capital', '$totalInteres', '$totalIva', '$ivaInteresCapital', '$plazoMeses', '$pagoCuota', '$cantidadCuota', '$estado', '$idSoli')";
			if ($this->db->query($sql3))
			{
				return true;
			}
			else{
				return false;
			}
		}
		else
		{
			return false;
		}
	}

	public function ObtenerSolicitudes()
	{
		/*$datos= $this->db->get("tbl_solicitud");
		return $datos;*/
		$this->db->select('*');
		$this->db->from('tbl_solicitudes');
		$this->db->join('tbl_amortizaciones', 'tbl_amortizaciones.idSolicitud = tbl_solicitudes.idSolicitud');
		$this->db->join('tbl_clientes', 'tbl_clientes.Id_Cliente = tbl_solicitudes.idCliente');
		$this->db->join('tbl_plazos_prestamos', 'tbl_plazos_prestamos.id_plazo = tbl_solicitudes.idLineaPlazo');
		$this->db->join('tbl_estados_solicitud', 'tbl_estados_solicitud.id_estado = tbl_solicitudes.idEstadoSolicitud');
		$datos = $this->db->get();
		return $datos;
	}

	public function EliminarSolicitud($id)
	{
		$sql1 = "UPDATE tbl_solicitudes SET estadoSolicitud='0' WHERE idSolicitud='$id'";
		if ($this->db->query($sql1))
		{
			$sql2 = "UPDATE tbl_amortizaciones SET estadoAmortizacion='0' WHERE idSolicitud='$id'";
			if ($this->db->query($sql2))
			{
				return true;
			}
		}
		else
		{
			return false;
		}
	}

	public function DetalleSolicitud($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_solicitudes');
		$this->db->join('tbl_amortizaciones', 'tbl_amortizaciones.idSolicitud = tbl_solicitudes.idSolicitud');
		$this->db->join('tbl_clientes', 'tbl_clientes.Id_Cliente = tbl_solicitudes.idCliente');
		$this->db->join('tbl_plazos_prestamos', 'tbl_plazos_prestamos.id_plazo = tbl_solicitudes.idLineaPlazo');
		$this->db->join('tbl_estados_solicitud', 'tbl_estados_solicitud.id_estado = tbl_solicitudes.idEstadoSolicitud');
		$this->db->where('tbl_solicitudes.idSolicitud', $id);
		$datos = $this->db->get();
		return $datos;
	}

	public function actualizarSolicitud($datos)
	{
		// Datos para la solicitud
	   $idSolicitud = $datos['id_solicitud'];
	   $codigoSolicitud = $datos['numero_solicitud'];
	   $fechaRecibido = $datos['fecha_recibido'];
	   $observaciones = $datos['observaciones'];
	   $idLineaPlazo = $datos['tipo_prestamo'];
	   //$idCliente = $datos['id_cliente'];
	   //$estado = 1;
	  // $idEstadoSolicitud = '1';

	   // Datos Amortizacion
	   $tasaInteres = $datos['tasa_interes'];
	   $capital = $datos['monto_dinero'];
	   $totalInteres = $datos['intereses_pagar'];
	   $totalIva = $datos['iva_pagar'];
	   $ivaInteresCapital = $datos['total_pagar'];
	   $plazoMeses = $datos['numero_meses'];
	   $pagoCuota = $datos['cuota_diaria'];
	   $cantidadCuota = $datos['numero_cuotas'];
	   $estado = 1;

	   // Guardando la solicitud
	   $sql1 = "UPDATE tbl_solicitudes SET codigoSolicitud='$codigoSolicitud', fechaRecibido='$fechaRecibido', observaciones='$observaciones', idLineaPlazo = '$idLineaPlazo' WHERE idSolicitud= '$idSolicitud'";
	   if ($this->db->query($sql1))
		{
			$sql2 = "UPDATE tbl_amortizaciones SET tasaInteres='$tasaInteres', capital='$capital', totalInteres='$totalInteres',
							totalIva='$totalIva', ivaInteresCapital='$ivaInteresCapital', plazoMeses='$plazoMeses', pagoCuota='$pagoCuota',
							cantidadCuota='$cantidadCuota' WHERE idSolicitud= '$idSolicitud'";
			if ($this->db->query($sql2))
			{
				return true;
			}
		}
		else
		{
			return false;
		}
	}

	public function ActualizarEstadoSolicitud($id, $i)
	{
		switch ($i) {
			case '1':
				$sql = "UPDATE tbl_solicitudes SET idEstadoSolicitud='2' WHERE idSolicitud = '$id'";
				break;
			case '2':
				$sql = "UPDATE tbl_solicitudes SET idEstadoSolicitud='4' WHERE idSolicitud = '$id'";
				break;
			default:
				break;
		}

		if ($this->db->query($sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}


}

?>