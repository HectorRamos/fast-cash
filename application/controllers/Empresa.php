<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Empresa_Model");
	}
	public function index()
	{
		$datos = $this->Empresa_Model-> ObtenerEmpresa();
		$data = array('datos' => $datos );
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view("Empresa/index", $data);
		$this->load->view('Base/footer');
	}

	public function GuardarEmpresa()
	{
		$datos = $this->input->post();
		$bool = $this->Empresa_Model->GuardarEmpresa($datos);
		if($bool){
				$this->session->set_flashdata("informa","Se guardaron los datos de la empresa !!!");
				redirect(base_url()."Empresa/"); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al guardar los datos de las empresa");
			redirect(base_url()."Empresa/");

		}
	}

	public function ActualizarEmpresa()
	{
		$datos = $this->input->post();
		$bool = $this->Empresa_Model->ActualizarEmpresa($datos);
		if($bool){
				$this->session->set_flashdata("informa","Se actualizaron los datos de la empresa !!!");
				redirect(base_url()."Empresa/"); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al actualizar los datos de las empresa");
			redirect(base_url()."Empresa/");

		}
	}

	public function EliminarEmpresa()
	{
		$id = $_GET['idEmpresa'];
		$bool = $this->Empresa_Model->EliminarEmpresa($id);
		if($bool){
				$this->session->set_flashdata("informa","Se eliminaron los datos de la empresa !!!");
				redirect(base_url()."Empresa/"); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al eliminar los datos de las empresa");
			redirect(base_url()."Empresa/");

		}
	}

}
?>