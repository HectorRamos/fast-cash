<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EstadosSolicitud extends CI_Controller {

	public function index()
	{
		$this->load->model("Estados_Model");
		$datos = $this->Estados_Model->GetEstados();
		$data = array('datos' => $datos);
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('EstadosSolicitud/Gestionar_EstadosSolicitud', $data);
		$this->load->view('Base/footer');
	}
	public function Guardar(){
		$datos=$this->input->POST();
		$this->load->model('Estados_Model');
		$bool=$this->Estados_Model->InsertarEstado($datos);
		if($bool){
			echo '<script type="text/javascript">
				alert("Informacion almacenada con exito");
				self.location ="'.base_url().'EstadosSolicitud"
				</script>';
		}
		else{
			echo '<script type="text/javascript">
				alert("Error al insertar la informacion");
				self.location ="'.base_url().'EstadosSolicitud"
				</script>';

		}

	}
	public function Editar(){
		$datos=$this->input->POST();
		$this->load->model('Estados_Model');
		$bool=$this->Estados_Model->EditarEstado($datos);
		if($bool){
			echo '<script type="text/javascript">
				
				self.location ="'.base_url().'EstadosSolicitud"
				</script>';
		}
		else{
			echo '<script type="text/javascript">
				alert("Error al insertar la informacion");
				self.location ="'.base_url().'EstadosSolicitud"
				</script>';

		}

	}
	public function Eliminar(){
		$datos=$this->input->GET('id');
		$this->load->model('Estados_Model');
		$bool=$this->Estados_Model->OcultarEstado($datos);
		if($bool){
			echo '<script type="text/javascript">
				
				self.location ="'.base_url().'EstadosSolicitud"
				</script>';
		}
		else{
			echo '<script type="text/javascript">
				alert("Error al insertar la informacion");
				self.location ="'.base_url().'EstadosSolicitud"
				</script>';

		}

	}
}