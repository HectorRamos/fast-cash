<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("LoginModelo");
	}

	public function index()
	{
		$this->load->view('Base/header');
		$this->load->view('Base/index');
		$this->load->view('Base/footer');
	}

	public function Main()
	{
		if($this->session->userdata("login"))
		{
			$this->load->view('Base/header');
			$this->load->view('Base/nav');
			$this->load->view('Base/content');
			$this->load->view('Base/footer');	
		}
		else
		{
			redirect(base_url());
		}
		
	}

	public function validarLogin()
	{
		$user = $this->input->post("user");		
		$pass = $this->input->post("pass");
		$respuesta = $this->LoginModelo->login($user, $pass);
		if($respuesta)
		{
			$login  = array(
				'idEmpleado' => $respuesta->idEmpleado,
				'nombre' => $respuesta->nombreEmpleado,
				'apellido' => $respuesta->apellidoEmpleado,
				'tipoAcceso' => $respuesta->tipoAcceso,
				'login' => TRUE
			 );
			$this->session->set_userdata($login);
			redirect(base_url()."Home/Main");
		}
		else
		{
			$this->session->set_flashdata("error", "El usuario y/o contraseña son incorrecto.");
			redirect(base_url());
		}
		
	}

	public function loginOut()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
	
}
