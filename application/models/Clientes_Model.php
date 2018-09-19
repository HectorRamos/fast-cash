<?php 

class Clientes_Model extends CI_Model{

	public function obtenerDepartamentos()
	{
		$departamentos= $this->db->get("tbl_Departamentos");
		return $departamentos;
	}

	public function obtenerMunicipios($id)
	{
		$sql = "SELECT * from tbl_Municipios WHERE Fk_Id_Departamento='$id'";
		$municipios = $this->db->query($sql);
		return $municipios->result();
	}

}


?>