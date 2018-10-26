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
	   $sql = "INSERT INTO tbl_solicitudes(codigoSolicitud, fechaRecibido, observaciones, estado, idCliente, idLineaPlazo, idEstadoSolicitud)
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
			$sql3 = "INSERT INTO tbl_amortizaciones(tasaInteres, capital, totalInteres, totalIva, ivaInteresCapital, plazoMeses, pagoCuota, cantidadCuota, estado, idSolicitud)
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

}

?>