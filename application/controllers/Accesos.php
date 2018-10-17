<?php 
class Accesos extends CI_Controller {


	public function index()
	{
		$this->load->model("Accesos_Model");
		$datos = $this->Accesos_Model->obtenerAccesos();
		$data = array('datos' => $datos);
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('Accesos/Gestionar_Accesos', $data);
		$this->load->view('Base/footer');
	}
	public function Guardar(){
		$datos=$this->input->POST();
		$this->load->model('Accesos_Model');
		$bool=$this->Accesos_Model->InsertarAcceso($datos);
		if($bool){
			// echo '<script type="text/javascript">
			// 	alert("Informacion almacenada con exito");
			// 	self.location ="'.base_url().'Accesos"
			// 	</script>';
		    $this->session->set_flashdata("guardar","El registro a sido guardar con exito.");
			redirect(base_url()."Accesos");
		}
		else{
			// echo '<script type="text/javascript">
			// 	alert("Error al insertar la informacion");
			// 	self.location ="'.base_url().'Accesos"
			// 	</script>';
			$this->session->set_flashdata("errorr","Error el registro no se pudo guardar.");
			redirect(base_url()."Accesos");
		}

	}
	public function Editar(){
		$datos=$this->input->POST();
		$this->load->model('Accesos_Model');
		$bool=$this->Accesos_Model->EditarAcceso($datos);
		if($bool){
			// echo '<script type="text/javascript">
			// 	self.location ="'.base_url().'Accesos"
			// 	</script>';
			$this->session->set_flashdata("actualizado","Registro a sido actualizado con exito.");
			redirect(base_url()."Accesos");
		}
		else{
			// echo '<script type="text/javascript">
			// 	alert("Error al insertar la informacion");
			// 	self.location ="'.base_url().'Accesos"
			// 	</script>';
			$this->session->set_flashdata("errorr","Error el registro no pudo ser actualizado.");
			redirect(base_url()."Accesos");
		}

	}
	public function Eliminar(){
		$datos=$this->input->GET('id');
		$this->load->model('Accesos_Model');
		$bool=$this->Accesos_Model->OcultarAcceso($datos);
		if($bool){
			// echo '<script type="text/javascript">
			// 	self.location ="'.base_url().'Accesos"
			// 	</script>';
			$this->session->set_flashdata("informa","El registro a sido eliminado con exito.");
			redirect(base_url()."Accesos");
		}
		else{
			// echo '<script type="text/javascript">
			// 	alert("Error al insertar la informacion");
			// 	self.location ="'.base_url().'Accesos"
			// 	</script>';
			$this->session->set_flashdata("errorr","Error el registro no pudo ser eliminado.");
			redirect(base_url()."Accesos");
		}

	}

}

?>