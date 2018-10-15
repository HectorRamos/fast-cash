<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitud extends CI_Controller {

	public function index()
	{
		$this->load->model("Solicitud_Model");
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
		$this->load->model("Solicitud_Model");
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
		$this->load->model('Solicitud_Model');
		$bool = $this->Solicitud_Model->guardarPlazo($datos);
		if ($bool == false)
		{
			echo '<script type="text/javascript">alert("Error al insertar el plazo")</script>';
		}
		else
		{
			echo '<script type="text/javascript">
				alert("El nuevo plazo fue agregado con exito !!!");
				self.location ="'.base_url().'Solicitud/gestionarPlazos"
				</script>';
		}
	}

	public function actualizarPlazo()
	{
		$datos = $this->input->post();
		$this->load->model('Solicitud_Model');
		$bool = $this->Solicitud_Model->actualizarPlazo($datos);
		if ($bool == false)
		{
			echo '<script type="text/javascript">alert("Error al actualizar el plazo")</script>';
		}
		else
		{
			echo '<script type="text/javascript">
				alert("El plazo fue actualizado con exito !!!");
				self.location ="'.base_url().'Solicitud/gestionarPlazos"
				</script>';
		}
	}

	public function eliminarPlazo()
	{
		$datos=$this->input->GET('id');
		$this->load->model('Solicitud_Model');
		$bool = $this->Solicitud_Model->eliminarPlazo($datos);
		if($bool){
			echo '<script type="text/javascript">
				
				self.location ="'.base_url().'Solicitud/gestionarPlazos"
				</script>';
		}
		else{
			echo '<script type="text/javascript">
				alert("Error al insertar la informacion");
				self.location ="'.base_url().'Solicitud/gestionarPlazos"
				</script>';

		}
	}
}
