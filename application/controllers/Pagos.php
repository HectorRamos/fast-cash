<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagos extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Pagos_Model");
		$this->load->model("Creditos_Model");
	}
	public function index(){
		$data = $this->Creditos_Model->ObtenerCreditos();
		$datos = array('creditos'=>$data);
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('Pagos/InsertarPagos', $datos);
		$this->load->view('Base/footer');
	}
	public function CargarDetallePago(){
		$id= $this->input->GET('Id');
		$data = $this->Creditos_Model->obtenerDetalleCredito($id);
		echo json_encode($data);
	}
	public function CargarUltimoPago(){
		$id= $this->input->GET('Id');
		$data = $this->Pagos_Model->obtenerUltimoPago($id);
		echo json_encode($data->result());
	}
	public function InsertarPago(){
		$datos = $this->input->post();
		$bool=$this->Pagos_Model->InsertarPago($datos);
		if($bool){
			$this->session->set_flashdata("guardar","Pago insertado con exito.");
			redirect(base_url()."Creditos");
		}
		else{
			$this->session->set_flashdata("errorr","Error el registro no se pudo guardar.");
			redirect(base_url()."Creditos/");

		}
	}
}
?>