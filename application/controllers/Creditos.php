<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creditos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Creditos_Model");
		$this->load->model("Documentos_Model");
	}
	public function index(){

		$data = $this->Creditos_Model->ObtenerCreditos();
		$datos = array('registros'=>$data);
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view("Creditos/Index", $datos);
		$this->load->view('Base/footer');
	}
	public function DetalleCredito(){
		$id=$this->input->GET('id');
		$cod=$this->input->GET('cc');
		$data=$this->Creditos_Model->ObtenerCreditoId($id);
		$data2=$this->Documentos_Model->ObtenerDocumentos($cod);
		$datos = array('registros'=>$data, "Docs"=>$data2);
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view("Creditos/ViewDetalleCredito", $datos);
		$this->load->view('Base/footer');

		//echo json_encode($data->result());



	}

}
?>