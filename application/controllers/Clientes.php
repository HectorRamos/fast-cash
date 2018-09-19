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

}
