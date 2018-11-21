<?php 
class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("User_Model");
	}


	public function index()
	{
		$data = array('datosUser' => $this->User_Model->obtenerUser(), 'datosEmpleados' => $this->User_Model->obtenerEmpleados(), 'datosRol' => $this->User_Model->obtenerRol());
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('User/Gestionar_User', $data);
		$this->load->view('Base/footer');
	}
	public function Guardar(){
		$datos=$this->input->POST();
		$bool=$this->User_Model->InsertarUser($datos);
		if($bool){
		    $this->session->set_flashdata("guardar","El registro a sido guardar con exito.");
			redirect(base_url()."User");
		}
		else{
			$this->session->set_flashdata("errorr","Error el registro no se pudo guardar.");
			redirect(base_url()."User");
		}

	}
	
	public function Editar(){
		$datos=$this->input->POST();
		$bool=$this->User_Model->EditarUser($datos);
		if($bool){
			$this->session->set_flashdata("actualizado","Registro a sido actualizado con exito.");
			redirect(base_url()."Accesos");
		}
		else{
			$this->session->set_flashdata("errorr","Error el registro no pudo ser actualizado.");
			redirect(base_url()."Accesos");
		}

	}
	/*
	public function Eliminar(){
		$datos=$this->input->GET('id');
		$this->load->model('Accesos_Model');
		$bool=$this->Accesos_Model->OcultarAcceso($datos);
		if($bool){
			$this->session->set_flashdata("informa","El registro a sido eliminado con exito.");
			redirect(base_url()."Accesos");
		}
		else{
			$this->session->set_flashdata("errorr","Error el registro no pudo ser eliminado.");
			redirect(base_url()."Accesos");
		}

	}*/

}

?>