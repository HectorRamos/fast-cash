<?php 

class User_Model extends CI_Model{

	public function obtenerEmpleados()
	{
		$empleados= $this->db->get("tbl_empleados");
		return $empleados;
	}


	public function obtenerRol()
	{
		$rol= $this->db->get("tbl_accesos");
		return $rol;
	}


	public function obtenerUser()
	{
		$this->db->select("
							tbl_users.idUser, 
							tbl_users.user, 
							tbl_accesos.tipoAcceso, 
							tbl_accesos.descripcion"
						);
		$this->db->from("tbl_users");
		$this->db->join("tbl_accesos", "tbl_users.idAcceso = tbl_accesos.idAcceso");
		$this->db->where("tbl_users.estado", 1);
		$this->db->order_by("idUser", "desc");
		$user = $this->db->get();
		return $user;
	}

	public function InsertarUser($datos=null){
		if($datos!=null){
			$fecha = date("Y/m/d");
			$data =array(
				'user' => $datos['txtUsuario'],
				'pass' => $datos['txtpass'],
				'idEmpleado' => $datos['cbbEmpleados'],
				'idAcceso' => $datos['cbbRol'],
				'estado'=>1,
				'fechaRegistro' => $fecha
				);
			if($this->db->insert('tbl_users', $data)){
				return true;
			}
			else{
				return false;
				}

			}
			else{
				return false;
			}

	}
	// public function EditarAcceso($datos=null){
	// 	if($datos!=null){
	// 		//$fecha = date("Y/m/d");
	// 		$id = $datos['idAcceso'];
	// 		$this->db->where('idAcceso', $id);
	// 		if($this->db->update('tbl_accesos', $datos)){
	// 			return true;
	// 		}
	// 		else{
	// 			return false;
	// 		}

	// 	}
	// 	else{
	// 		return false;
	// 	}

	// }
	// public function ocultarAcceso($id){
	
			
	// 		$datos = array('estado'=>2);
	// 		$this->db->where('idAcceso', $id);
	// 		if($this->db->update('tbl_accesos', $datos))
	// 		{
	// 			return true;
	// 		}
	// 		else{
	// 			return false;
	// 		}

	// 	}
}
?>