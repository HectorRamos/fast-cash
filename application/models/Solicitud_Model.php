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

}

?>