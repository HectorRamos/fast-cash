<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Leyendo el Modelo...
		$this->load->model("Solicitud_Model");
	}

	public function index()
	{
		$plazos = $this->Solicitud_Model->obtenerPlazos();
		$clientes = $this->Solicitud_Model->obtenerClientes();
		$data = array('plazos' => $plazos,'clientes' => $clientes);

		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('Solicitud/solicitud_prestamo', $data);
		$this->load->view('Base/footer');
	}

	public function gestionarPlazos()
	{
		$plazos = $this->Solicitud_Model->obtenerPlazos();
		$data = array('plazos' => $plazos );

		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('Solicitud/gestionar_plazos', $data);
		$this->load->view('Base/footer');
	}

	public function guardarPlazo()
	{
		$datos = $this->input->post();
		$bool = $this->Solicitud_Model->guardarPlazo($datos);
		if ($bool)
		{
		    $this->session->set_flashdata("guardar","El registro a sido guardar con exito.");
			redirect(base_url()."Solicitud/gestionarPlazos");
			// echo '<script type="text/javascript">alert("Error al insertar el plazo")</script>';
		}
		else
		{
			// echo '<script type="text/javascript">
			// 	alert("El nuevo plazo fue agregado con exito !!!");
			// 	self.location ="'.base_url().'Solicitud/gestionarPlazos"
			// 	</script>';
			$this->session->set_flashdata("errorr","Error el registro no se pudo guardar.");
			redirect(base_url()."Solicitud/gestionarPlazos");
		}
	}

	public function actualizarPlazo()
	{
		$datos = $this->input->post();
		$bool = $this->Solicitud_Model->actualizarPlazo($datos);
		if ($bool)
		{
			// echo '<script type="text/javascript">alert("Error al actualizar el plazo")</script>';
				$this->session->set_flashdata("actualizado","Registro a sido actualizado con exito.");
				redirect(base_url()."Solicitud/gestionarPlazos");
		}
		else
		{
			// echo '<script type="text/javascript">
			// 	alert("El plazo fue actualizado con exito !!!");
			// 	self.location ="'.base_url().'Solicitud/gestionarPlazos"
			// 	</script>';
				$this->session->set_flashdata("errorr","Error el registro no pudo ser actualizado.");
				redirect(base_url()."Solicitud/gestionarPlazos");
		}
	}

	public function eliminarPlazo()
	{
		$datos=$this->input->GET('id');
		$bool = $this->Solicitud_Model->eliminarPlazo($datos);
		if($bool){
			// echo '<script type="text/javascript">
				
			// 	self.location ="'.base_url().'Solicitud/gestionarPlazos"
			// 	</script>';
				$this->session->set_flashdata("informa","El registro a sido eliminado con exito.");
				redirect(base_url()."Solicitud/gestionarPlazos"); 
		}
		else{
			// echo '<script type="text/javascript">
			// 	alert("Error al insertar la informacion");
			// 	self.location ="'.base_url().'Solicitud/gestionarPlazos"
			// 	</script>';
			$this->session->set_flashdata("errorr","Error el registro no pudo ser eliminado.");
			redirect(base_url()."Solicitud/gestionarPlazos");

		}
	}

	public function GuardarSolicitud()
	{
		$datos = $this->input->post();
		$bool = $this->Solicitud_Model->GuardarSolicitud($datos);
		if($bool){
				$this->session->set_flashdata("informa","Se creo exitosamente la solicitud !!!");
				redirect(base_url()."Solicitud/"); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al crear la solicitud");
			redirect(base_url()."Solicitud/");

		}

	}
}
