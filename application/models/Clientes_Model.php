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
	public function Insertar($datos=null){
		if($datos!=null){
			$data =array(
				'Codigo_Cliente'=> '000123',
				'Nombre_Cliente' => $datos['Nombre_Cliente'],
				'Apellido_Cliente' => $datos['Apellido_Cliente'],
				'Condicion_Actual_Cliente' => $datos['Condicion_Cliente'],
				'Estado_Civil_Cliente'=>$datos['Estado_Cliente'],
				'Genero_Cliente'=>$datos['Genero_Cliente'],
				'Telefono_Fijo_Cliente'=>$datos['Telefono_Cliente'],
				'Telefono_Celular_Cliente'=>$datos['Celular_Cliente'],
				'Domicilio_Cliente'=>$datos['Domicilio_Cliente'],
				'Fecha_Nacimiento_Cliente'=>$datos['Fecha_Nacimiento'],
				'Zona_Cliente'=>$datos['Zona'],
				'DUI_Cliente'=>$datos['Dui_Cliente'],
				'NIT_Cliente'=>$datos['Nit_Cliente'],
				'Fecha_Registro_Cliente'=>$datos['Fecha_Registro'],
				'Observaciones_Cliente'=>$datos['Observaciones'],
				'Profesion_Cliente'=>$datos['Profesion_Cliente'],
				'Fk_Id_Departamento'=>$datos['cbbDepartamentos'],
				'Fk_Id_Municipio'=>$datos['cbbMunicipios']
				);
			if($this->db->insert('tbl_Clientes', $data)){
				return true;
			}
			else{
				return false;
			}
		}
	}
	public function CargarClientes(){
		$sql = "SELECT * FROM tbl_Clientes";
		$datos=$this->db->query($sql);
		return $datos;
	}
	public function Cliente($id){
		$sql = "SELECT c.*, d.Nombre_Departamento, m.Nombre_Municipio FROM tbl_Clientes AS c INNER JOIN tbl_Departamentos AS d ON c.Fk_Id_Departamento=d.Id_Departamento INNER JOIN tbl_Municipios AS m ON c.Fk_Id_Municipio = m.Id_Municipio WHERE Id_Cliente = '$id'";
		$respuesta = $this->db->query($sql);
		return $respuesta;
	}
	public function Eliminar($id){
		$sql ="DELETE  FROM tbl_Clientes WHERE Id_Cliente='$id'";
		if($this->db->query($sql)){
			return true;
		}
		else
		{
			return false;
		}

	}
	public function Editar($datos=null){
		if($datos!=null){
			$id = $datos['id_cliente'];
			$data =array(
				
				'Nombre_Cliente' => $datos['Nombre_Cliente'],
				'Apellido_Cliente' => $datos['Apellido_Cliente'],
				'Condicion_Actual_Cliente' => $datos['condicion'],
				'Estado_Civil_Cliente'=>$datos['estado_civil'],
				'Genero_Cliente'=>$datos['Genero_Cliente'],
				'Telefono_Fijo_Cliente'=>$datos['Telefono_Cliente'],
				'Telefono_Celular_Cliente'=>$datos['Celular_Cliente'],
				'Domicilio_Cliente'=>$datos['Domicilio_Cliente'],
				'Fecha_Nacimiento_Cliente'=>$datos['Fecha_Nacimiento'],
				'Zona_Cliente'=>$datos['Zona'],
				'DUI_Cliente'=>$datos['Dui_Cliente'],
				'NIT_Cliente'=>$datos['Nit_Cliente'],
				'Fecha_Registro_Cliente'=>$datos['Fecha_Registro'],
				'Observaciones_Cliente'=>$datos['Observaciones'],
				'Profesion_Cliente'=>$datos['Profesion_Cliente'],
				'Fk_Id_Departamento'=>$datos['departamento'],
				'Fk_Id_Municipio'=>$datos['municipio']
				);
			$this->db->where('Id_Cliente', $id);
			if($this->db->update('tbl_Clientes', $data)){
				return true;
			}
			else{
				return false;
			}
		}
	}
}


?>