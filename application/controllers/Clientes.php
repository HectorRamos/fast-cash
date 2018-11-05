<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function index()
	{
		$this->load->model("Clientes_Model");
		$datos = $this->Clientes_Model->obtenerDepartamentos();
		$data = array('datos' => $datos);
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('Clientes/InsertarCliente', $data);
		$this->load->view('Base/footer');
	}
	public function InsertarCliente(){
		$datos=$this->input->POST();
		$this->load->model("Clientes_Model");
		$id=$this->Clientes_Model->Insertar($datos);
		if($id){			
			$this->session->set_flashdata("guardar","El registro a sido guardar con exito.");
			$data=$id;
			echo json_encode($data);
		}
		else
		{
			$this->session->set_flashdata("errorr","Error el registro no se pudo guardar.");
			redirect(base_url()."Clientes/");
		}
	}
	public function datosLaborales(){
		$datos=$this->input->POST();
		$this->load->model("Clientes_Model");
		$bool=$this->Clientes_Model->InsertarDatosLaborales($datos);
		if($bool){
			$this->session->set_flashdata("guardar","El registro a sido guardar con exito.");
			redirect(base_url()."Clientes/gestionarCliente");
		}
		else
		{
			$this->session->set_flashdata("errorr","Error el registro no se pudo guardar.");
			redirect(base_url()."Clientes/");
		}
	}
		public function datosNegocio(){
		$datos=$this->input->POST();
		$this->load->model("Clientes_Model");
		$bool=$this->Clientes_Model->InsertarDatosNegocio($datos);
		if($bool){
			$this->session->set_flashdata("guardar","El registro a sido guardar con exito.");
			redirect(base_url()."Clientes/gestionarCliente");
		}
		else
		{
			$this->session->set_flashdata("errorr","Error el registro no se pudo guardar.");
			redirect(base_url()."Clientes/");
		}
	}
	public function obtenerMunicipios()
	{
		if($this->input->is_ajax_request())
		{
			$id =$this->input->get("ID");
			$this->load->model("Clientes_Model");
			$datos = $this->Clientes_Model->obtenerMunicipios($id);
			echo json_encode($datos);
		}
		else
		{
			echo "error";
		}
	}
	public function gestionarCliente(){
		$this->load->model('Clientes_Model');
		$registro=$this->Clientes_Model->CargarClientes();
		$data = array('registro'=>$registro);
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view("Clientes/Gestionar_Cliente", $data);
		$this->load->view('Base/footer');
	}
	public function Eliminar(){
		if(isset($_GET["id"])){ 
            $id=(int)$_GET["id"]; 
        }
		$this->load->model("Clientes_Model");
		$bool=$this->Clientes_Model->Eliminar($id);
		if ($bool) {
			$this->session->set_flashdata("informa","El registro a sido eliminado con exito.");
			redirect(base_url()."Clientes/gestionarCliente"); 
		}
		else
		{
			$this->session->set_flashdata("errorr","Error el registro no pudo ser eliminado.");
			redirect(base_url()."Clientes/gestionarCliente");
		}
	}
	public function Editar(){
		$id = $this->input->GET('id');
		$this->load->model("Clientes_Model");
		$datos = $this->Clientes_Model->obtenerDepartamentos();
		$datos_cliente=$this->Clientes_Model->Cliente($id);
		$data = array('datos' => $datos, 'cliente'=>$datos_cliente);
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view("Clientes/Editar_Cliente", $data);
		$this->load->view('Base/footer');
	}
	public function editarCliente(){
		$datos=$this->input->POST();
		$this->load->model("Clientes_Model");
		$bool=$this->Clientes_Model->Editar($datos);		
		$this->session->set_flashdata("actualizado","El registro a sido actualizado con exito.");
		echo json_encode($bool);		
	}
	public function TomarFoto(){

		$imagenCodificada = file_get_contents("php://input"); //Obtener la imagen
		$dui = $this->input->GET('dui');

		if(strlen($imagenCodificada) <= 0) exit("No se recibió ninguna imagen");
		//La imagen traerá al inicio data:image/png;base64, cosa que debemos remover
		$imagenCodificadaLimpia = str_replace("data:image/png;base64,", "", urldecode($imagenCodificada));
		//Venía en base64 pero sólo la codificamos así para que viajara por la red, ahora la decodificamos y
		//todo el contenido lo guardamos en un archivo
		$imagenDecodificada = base64_decode($imagenCodificadaLimpia);
		//Calcular un nombre único
		$ruta= "plantilla/Fotos";
		$nombreImagenGuardada ="plantilla/Fotos/foto_" .$dui. ".png";

		//Escribir el archivo
		file_put_contents($nombreImagenGuardada, $imagenDecodificada);

		//Terminar y regresar el nombre de la foto
		exit($nombreImagenGuardada);
	}
	public function EditardatosLaborales(){
		$datos=$this->input->POST();
		$this->load->model("Clientes_Model");
		$accion =$datos['Accion'];
		$data = array(
			'Fk_Id_Cliente'=>$datos['Fk_Id_Cliente'],
			'Nombre_Empresa'=>$datos['Nombre_Empresa'],
			'Cargo'=>$datos['Cargo'],
			'Telefono'=>$datos['Telefono'],
			'Direccion'=>$datos['Direccion'],
			'Rubro'=>$datos['Rubro'],
			'Observaciones'=>$datos['Observaciones']
			);
		if($accion==1){
		$bool=$this->Clientes_Model->EditarDatosLaborales($data);
		if($bool){
			$this->session->set_flashdata("actualizado","Registro a sido actualizado con exito.");
			redirect(base_url()."Clientes/gestionarCliente");
		}
		else{
			$this->session->set_flashdata("errorr","Error el registro no pudo ser actualizado.");
			redirect(base_url()."Clientes/gestionarCliente");
		}
		
		}
		else if($accion==2){
			$bool=$this->Clientes_Model->InsertarDatosLaborales($data);
			if($bool){
				$this->session->set_flashdata("actualizado","El registro a sido guardar con exito.");
				redirect(base_url()."Clientes/gestionarCliente");
			}
			else
			{
				$this->session->set_flashdata("errorr","Error el registro no se pudo guardar.");
				redirect(base_url()."Clientes/");
			}
				
		}
		
	}
	public function EditarDatosNegocio(){
		
		$datos=$this->input->POST();
		$accion =$datos['Accion'];
		$data = array(
			'Fk_Id_Cliente'=>$datos['Fk_Id_Cliente'],
			'Nombre_Negocio'=>$datos['Nombre_Negocio'],
			'NIT'=>$datos['NIT'],
			'NRC'=>$datos['NRC'],
			'Giro'=>$datos['Giro'],
			'Tipo_Factura'=>$datos['Tipo_Factura']
			);
		$this->load->model("Clientes_Model");
		if($accion==1){
		$bool=$this->Clientes_Model->EditarDatosNegocio($data);
		if($bool){
			$this->session->set_flashdata("actualizado","Registro a sido actualizado con exito.");
			redirect(base_url()."Clientes/gestionarCliente");
		}
		else{
			$this->session->set_flashdata("errorr","Error el registro no pudo ser actualizado.");
			redirect(base_url()."Clientes/gestionarCliente");
		}


		}
		else if($accion==2){
		$bool=$this->Clientes_Model->InsertarDatosNegocio($data);
		if($bool){
			$this->session->set_flashdata("actualizado","El registro a sido guardar con exito.");
			redirect(base_url()."Clientes/gestionarCliente");
		}
		else
		{
			$this->session->set_flashdata("errorr","Error el registro no se pudo guardar.");
			redirect(base_url()."Clientes/");
		}
			
		}
		
	}
	public function obtenerInfoCliente(){

		if($this->input->is_ajax_request())
		{
			$id = $this->input->POST("ID");
			$tipo = $this->input->POST("tipo");
			$this->load->model("Clientes_Model");
			$datos = $this->Clientes_Model->obtenerInfoCliente($id, $tipo);
			echo json_encode($datos);
		}
		else
		{
			echo "error";
		}

	}
}
?>
