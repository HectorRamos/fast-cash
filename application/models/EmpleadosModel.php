<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class EmpleadosModel extends CI_Model
{
	public function ListaEmpleados(){
		$sql = "SELECT * FROM tbl_empleados";
		$datos=$this->db->query($sql);
		return $datos;
	}

	public function DetalleEmpleado($id)
	{
		$sql="SELECT *FROM tbl_empleados WHERE idEmpleado = $id";
		$info = $this->db->query($sql);
		return $info->result();
	}
}
?>