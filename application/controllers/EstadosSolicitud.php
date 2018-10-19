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
			// echo '<script type="text/javascript">
			// 	alert("Informacion almacenada con exito");
			// 	self.location ="'.base_url().'EstadosSolicitud"
			// 	</script>';
			$this->session->set_flashdata("guardar","El registro a sido guardar con exito.");
			redirect(base_url()."EstadosSolicitud");
		}
		else{
			// echo '<script type="text/javascript">
			// 	alert("Error al insertar la informacion");
			// 	self.location ="'.base_url().'EstadosSolicitud"
			// 	</script>';
			$this->session->set_flashdata("errorr","Error el registro no se pudo guardar.");
			redirect(base_url()."EstadosSolicitud");
		}

	}
	public function Editar(){
		$datos=$this->input->POST();
		$this->load->model('Estados_Model');
		$bool=$this->Estados_Model->EditarEstado($datos);
		if($bool){
			// echo '<script type="text/javascript">
				
			// 	self.location ="'.base_url().'EstadosSolicitud"
			// 	</script>';
				$this->session->set_flashdata("actualizado","Registro a sido actualizado con exito.");
				redirect(base_url()."EstadosSolicitud");
		}
		else{
			// echo '<script type="text/javascript">
			// 	alert("Error al insertar la informacion");
			// 	self.location ="'.base_url().'EstadosSolicitud"
			// 	</script>';
				$this->session->set_flashdata("errorr","Error el registro no pudo ser actualizado.");
				redirect(base_url()."EstadosSolicitud");
		}

	}
	public function Eliminar(){
		$datos=$this->input->GET('id');
		$this->load->model('Estados_Model');
		$bool=$this->Estados_Model->OcultarEstado($datos);
		if($bool){
			// echo '<script type="text/javascript">
				
			// 	self.location ="'.base_url().'EstadosSolicitud"
			// 	</script>';
				$this->session->set_flashdata("informa","El registro a sido eliminado con exito.");
				redirect(base_url()."EstadosSolicitud");
		}
		else{
			// echo '<script type="text/javascript">
			// 	alert("Error al insertar la informacion");
			// 	self.location ="'.base_url().'EstadosSolicitud"
			// 	</script>';
			    $this->session->set_flashdata("errorr","Error el registro no pudo ser eliminado.");
			    redirect(base_url()."EstadosSolicitud");
		}

	}
}