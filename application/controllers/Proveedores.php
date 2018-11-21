<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Proveedores_Model");
	}
	public function index()
	{
		$datos = $this->Proveedores_Model->ObtenerProveedores();
		$data = array('datos' => $datos );
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view("Proveedores/index", $data);
		$this->load->view('Base/footer');
	}

	public function GuardarProveedor()
	{
		$datos = $this->input->post();
		$bool = $this->Proveedores_Model->GuardarProveedor($datos);
		if($bool){
				$this->session->set_flashdata("informa","Se guardaron los datos del proveedor !!!");
				redirect(base_url()."Proveedores/"); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al guardar los datos del proveedor");
			redirect(base_url()."Proveedores/");

		}
	}

	public function ActualizarProveedor()
	{
		$datos = $this->input->post();
		$bool = $this->Proveedores_Model->ActualizarProveedor($datos);
		if($bool){
				$this->session->set_flashdata("informa","Se actualizo los datos del proveedor !!!");
				redirect(base_url()."Proveedores/"); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al actualizar los datos del proveedor");
			redirect(base_url()."Proveedores/");

		}
	}

	public function EliminarProveedor()
	{
		$id = $_GET['id'];
		$bool = $this->Proveedores_Model->EliminarProveedor($id);
		if($bool){
				$this->session->set_flashdata("informa","Se elimino el proveedor !!!");
				redirect(base_url()."Proveedores/"); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al eliminar el proveedor");
			redirect(base_url()."Proveedores/");

		}
	}

}
?>