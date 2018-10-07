<?php 

class Clientes_Model extends CI_Model{

	public function obtenerDepartamentos()
	{
		$departamentos= $this->db->get("tbl_departamentos");
		return $departamentos;
	}

	public function obtenerMunicipios($id)
	{
		$sql = "SELECT * from tbl_municipios WHERE Fk_Id_Departamento='$id'";
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
				'Fk_Id_Municipio'=>$datos['cbbMunicipios'],
				'Tipo_Cliente'=>$datos['Tipo_Cliente']

				);
			if($this->db->insert('tbl_clientes', $data)){
				$sql2="SELECT Id_Cliente, Nombre_Cliente, Apellido_Cliente, Codigo_Cliente, Tipo_Cliente FROM tbl_Clientes WHERE Id_Cliente IN (SELECT MAX(Id_Cliente) FROM tbl_Clientes)";
				$id=$this->db->query($sql2);
				return $id;
			}
			else{
				return false;
			}
		}
	}
	public function CargarClientes(){
		$sql = "SELECT * FROM tbl_clientes";
		$datos=$this->db->query($sql);
		return $datos;
	}
	public function Cliente($id){
		$sql = "SELECT c.*, d.Nombre_Departamento, m.Nombre_Municipio FROM tbl_clientes AS c INNER JOIN tbl_departamentos AS d ON c.Fk_Id_Departamento=d.Id_Departamento INNER JOIN tbl_municipios AS m ON c.Fk_Id_Municipio = m.Id_Municipio WHERE Id_Cliente = '$id'";
		$respuesta = $this->db->query($sql);
		return $respuesta;
	}
	public function Eliminar($id){
		$sql ="DELETE  FROM tbl_clientes WHERE Id_Cliente='$id'";
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
				'Fk_Id_Municipio'=>$datos['municipio'],
				'Tipo_Cliente'=>$datos['Tipo_Cliente']
				);
			$this->db->where('Id_Cliente', $id);
			if($this->db->update('tbl_clientes', $data))
			{
				if($datos['Tipo_Cliente']=="Empleado"){
						$sql = "SELECT c.Id_Cliente, c.Codigo_Cliente, c.Tipo_Cliente, l.* FROM tbl_datos_laborales as l INNER JOIN  tbl_clientes AS c ON l.Fk_Id_Cliente = c.Id_Cliente WHERE l.Fk_Id_Cliente=$id";
						$info = $this->db->query($sql);
						return $info;
				}
				else if($datos['Tipo_Cliente']=="Empresario")
				{
					$sql = "SELECT c.Id_Cliente, c.Codigo_Cliente, c.Tipo_Cliente, l.* FROM tbl_datos_negocio as l INNER JOIN  tbl_clientes AS c ON l.Fk_Id_Cliente = c.Id_Cliente WHERE l.Fk_Id_Cliente=$id";
						$info = $this->db->query($sql);
						return $info;
				}
				
			}
			else{
				return false;
			}
		}
	}

	public function InsertarDatosLaborales($datos =null){
		if($datos!=null){
			if($this->db->insert('tbl_datos_laborales', $datos)){
				return true;
			}
			else{
				return  false;
			}
		}
	}

	public function InsertarDatosNegocio($datos =null){
		if($datos!=null){
			if($this->db->insert('tbl_datos_negocio', $datos)){
				return true;
			}
			else{
				return  false;
			}
		}
	}
	public function EditarDatosLaborales($datos=null){
		if($datos!=null){
			$id = $datos['Fk_Id_Cliente'];
			$this->db->where('Fk_Id_Cliente', $id);
			if($this->db->update('tbl_datos_laborales', $datos))
			{
				return true;

			}
			else{
				return false;
			}
	}
}
public function EditarDatosNegocio($datos= null){
	if($datos!=null){
			$id = $datos['Fk_Id_Cliente'];
			$this->db->where('Fk_Id_Cliente', $id);
			if($this->db->update('tbl_datos_Negocio', $datos))
			{
				return true;
			}
			else{
				return false;
			}
	}
}
public function obtenerInfoCliente($id, $tipo){

	if($tipo=="Empresario"){
		$sql="SELECT n.*,c.*, d.*, m.* FROM tbl_datos_negocio AS n INNER JOIN tbl_clientes AS c ON n.Fk_Id_Cliente=c.Id_Cliente INNER JOIN tbl_departamentos AS d ON c.Fk_Id_Departamento= d.Id_Departamento INNER JOIN tbl_municipios AS m ON c.Fk_Id_Municipio = m.Id_Municipio WHERE n.Fk_Id_Cliente=$id";
		$info = $this->db->query($sql);
		return $info->result();
	}
	else
	{
		$sql="SELECT n.*,c.*, d.*, m.* FROM tbl_datos_laborales AS n INNER JOIN tbl_clientes AS c ON n.Fk_Id_Cliente=c.Id_Cliente INNER JOIN tbl_Departamentos AS d ON c.Fk_Id_Departamento= d.Id_Departamento INNER JOIN tbl_municipios AS m ON c.Fk_Id_Municipio = m.Id_Municipio WHERE n.Fk_Id_Cliente=$id";
		$info = $this->db->query($sql);
		return $info->result();

	}

}
public function dCliente(){
	$sql="SELECT * FROM tbl_clientes";
	$d = $this->db->query();
	return $d;
}
}

?>