<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model
{		
	public function Login($user, $pass)
	{
		$this->db->where("user", $user);
		$this->db->where("pass", $pass);
		$resultado = $this->db->get("tbl_users");
		if($resultado->num_rows() > 0)
		{
			$this->db->select("tbl_accesos.idAcceso, 
							   tbl_empleados.idEmpleado, 
							   tbl_empleados.nombreEmpleado, 
							   tbl_empleados.apellidoEmpleado,
							   tbl_accesos.tipoAcceso
							   ");
			$this->db->from("tbl_users");
			$this->db->join("tbl_empleados", "tbl_users.idEmpleado = tbl_empleados.idEmpleado");
			$this->db->join("tbl_accesos", "tbl_users.idAcceso = tbl_accesos.idAcceso");
			$this->db->where("tbl_users.idEmpleado", $resultado->row()->idEmpleado);
			$this->db->where("tbl_users.idAcceso", $resultado->row()->idAcceso);
			$result = $this->db->get();
			return $result->row();
		}
		else
		{
		 	return false;
		}		
	}	
}
?>