<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EmpleadosController extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("EmpleadosModel");
	}

	public function Index()
	{
		$registros=$this->EmpleadosModel->ListaEmpleados();
		$datos = array('registros'=>$registros);
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view("Empleados/Index", $datos);
		$this->load->view('Base/footer');
	}

	public function FormCrearEmpleado()
	{
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('Empleados/CrearEmpleado');
		$this->load->view('Base/footer');
	}

	public function CrearEmpleado()
	{
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('Empleados/nuevoEmpleado');
		$this->load->view('Base/footer');
	}

	public function DetalleEmpleado()
	{
		if($this->input->is_ajax_request())
		{
			$id = $this->input->POST("id");
			$datos = $this->EmpleadosModel->DetalleEmpleado($id);
			echo json_encode($datos);
		}
		else
		{
			echo "error";
		}
	}
}
?>
