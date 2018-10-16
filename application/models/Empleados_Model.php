<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Empleados_Model extends CI_Model
{
	public function ListaEmpleados()
	{
		$sql = "SELECT * FROM tbl_empleados";
		$datos=$this->db->query($sql);
		return $datos;
	}

	public function InsertarEmleados($datos)
	{
		if($datos != null)
		{
			$data =array(
				'nombreEmpleado'=> $datos['txtNombre'],
				'apellidoEmpleado' => $datos['txtApellido'],
				'fechaNacimientoEmpleado' => $datos['txtFechaNacimiento'],
				'genero' => $datos['cboGenero'],
				'dui'=>$datos['txtDui'],
				'nit'=>$datos['txtNit'],
				'direccion'=>$datos['txtDireccion'],
				'telefono'=>$datos['txtTelefono'],
				'email'=>$datos['txtEmail'],
				'cargo'=>$datos['txtCargo'],
				'profesion'=>$datos['txtProfesion'],			
				'estado'=>1,			
				'fechaRegistroEmpleado'=>'NOW()'			
				);

			if($this->db->insert('tbl_empleados', $data))
			{				
				return true;
			}
			else
			{
				return false;
			}
		}
	}

	public function DetalleEmpleado($id)
	{
		$sql="SELECT *FROM tbl_empleados WHERE idEmpleado = $id";
		$info = $this->db->query($sql);
		return $info->result();
	}
}
?>