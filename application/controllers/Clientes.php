<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function index()
	{
		$this->load->model("Clientes_Model");
		$datos = $this->Clientes_Model->obtenerDepartamentos();

		$data = array('datos' => $datos);

		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('Clientes/Agregar_Cliente', $data);
		$this->load->view('Base/footer');
	}

	public function InsertarCliente(){
		$datos=$this->input->POST();
		$this->load->model("Clientes_Model");
		$bool=$this->Clientes_Model->Insertar($datos);
		if($bool){

			echo '<script type="text/javascript">
				alert("Registro insertado correctamente");
				self.location ="'.base_url().'Clientes/gestionarCliente"
				</script>';
		}
		else
		{
			echo '<script type="text/javascript">
				alert("Registro insertado correctamente");
				self.location ="'.base_url().'Clientes/"
				</script>';
		}

	}
	public function obtenerMunicipios()
	{
		if($this->input->is_ajax_request())
		{
			$id =$this->input->get("ID");
			$this->load->model("Clientes_Model");
			$datos = $this->Clientes_Model->obtenerMunicipios($id);
			echo json_encode($datos);
		}
		else
		{
			echo "error";
		}
	}
	public function gestionarCliente(){
		$this->load->model('Clientes_Model');
		$registro=$this->Clientes_Model->CargarClientes();
		$data = array('registro'=>$registro);
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view("Clientes/Gestionar_Cliente", $data);
		$this->load->view('Base/footer');
	}
	public function Eliminar(){
		$id = $this->input->get('id');
		$this->load->model("Clientes_Model");
		//echo $id;
		$bool=$this->Clientes_Model->Eliminar($id);
		if ($bool) {
			echo '<script type="text/javascript">
				alert("El cliente a sido eliminado de la base de datos");
				self.location ="'.base_url().'Clientes/gestionarCliente"
				</script>';
			
		}
		else
		{
			echo '<script type="text/javascript">
				alert("NO, se pudo eliminar el registro");
				self.location ="'.base_url().'Clientes/gestionarCliente"
				</script>';
		}


	}
	public function Editar(){
		$id = $this->input->GET('id');
		$this->load->model("Clientes_Model");
		$datos = $this->Clientes_Model->obtenerDepartamentos();
		$datos_cliente=$this->Clientes_Model->Cliente($id);
		$data = array('datos' => $datos, 'cliente'=>$datos_cliente);
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view("Clientes/Editar_Cliente", $data);
		$this->load->view('Base/footer');
	}
	public function editarCliente(){
		$datos=$this->input->POST();
		$this->load->model("Clientes_Model");
		$bool=$this->Clientes_Model->Editar($datos);
		if($bool){

			echo '<script type="text/javascript">
				alert("Registro editado con exito");
				self.location ="'.base_url().'Clientes/gestionarCliente"
				</script>';
		}
		else
		{
			echo '<script type="text/javascript">
				alert("Error al modificar la informacion");
				self.location ="'.base_url().'Clientes/"
				</script>';
		}
	}

}
