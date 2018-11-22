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
		$datos = $this->Solicitud_Model->ObtenerSolicitudes();
		$data = array('datos' => $datos );
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('Solicitud/ver_solicitudes', $data);
		$this->load->view('Base/footer');
	}

	public function CrearSolicitud()
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
		    $this->session->set_flashdata("guardar","El plazo a sido <b>guardado</b> con éxito.");
			redirect(base_url()."Solicitud/gestionarPlazos");
		}
		else
		{
			$this->session->set_flashdata("errorr","Error el plazo no se pudo <b>guardar</b>.");
			redirect(base_url()."Solicitud/gestionarPlazos");
		}
	}

	public function actualizarPlazo()
	{
		$datos = $this->input->post();
		$bool = $this->Solicitud_Model->actualizarPlazo($datos);
		if ($bool)
		{
				$this->session->set_flashdata("actualizado","El plazo a sido <b>actualizado</b> con éxito.");
				redirect(base_url()."Solicitud/gestionarPlazos");
		}
		else
		{
				$this->session->set_flashdata("errorr","Error el plazo no se pudo <b>actualizar</b>.");
				redirect(base_url()."Solicitud/gestionarPlazos");
		}
	}

	public function eliminarPlazo()
	{
		$datos=$this->input->GET('id');
		$bool = $this->Solicitud_Model->eliminarPlazo($datos);
		if($bool){
				$this->session->set_flashdata("informa","El plazo a sido <b>eliminado</b> con éxito.");
				redirect(base_url()."Solicitud/gestionarPlazos"); 
		}
		else{
			$this->session->set_flashdata("errorr","Error el plazo no pudo ser <b>eliminado</b>.");
			redirect(base_url()."Solicitud/gestionarPlazos");

		}
	}

// ########################### SOLICITUD ###########################
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

	public function EliminarSolicitud()
	{
		$id = $_GET['id'];
		$bool = $this->Solicitud_Model->EliminarSolicitud($id);
		if($bool){
				$this->session->set_flashdata("informa","Se elimino exitosamente la solicitud !!!");
				redirect(base_url()."Solicitud/"); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al eliminar la solicitud");
			redirect(base_url()."Solicitud/");

		}
	}


	public function DetalleSolicitud($id)
	{
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$fiadores = $this->Solicitud_Model->ObtenerFiadores($id);
		$garantias = $this->Solicitud_Model->ObtenerGarantias($id);
		$datos = $this->Solicitud_Model->DetalleSolicitud($id);
		// $data = array('datos' => $datos );
		// if (sizeof($fiadores->result() > 0))
		// {
		// 	// if (sizeof($fiadores->result()) > 0)
		// 	// {
		// 	// 	$data = array('datos' => $datos, 'fiadores' => $fiadores ,'garantias' => $garantias);
		// 	// }
		// 	// else
		// 	// {
		// 	// 	$data = array('datos' => $datos, 'fiadores' => $fiadores );
		// 	// }
		// }
		// if (sizeof($garantias->result()) > 0)
		// {
		// 	$data = array('datos' => $datos, 'garantias' => $garantias);
		// }
		$data = array('datos' => $datos, 'fiadores' => $fiadores ,'garantias' => $garantias, 'idSoli' => $id);
		$this->load->view('Solicitud/detalle_solicitud', $data);
		$this->load->view('Base/footer');
	}

	public function FrmActualizarSolicitud($id)
	{
		$plazos = $this->Solicitud_Model->obtenerPlazos();
	
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$datos = $this->Solicitud_Model->DetalleSolicitud($id);
		$data = array('datos' => $datos, 'plazos' => $plazos);
		$this->load->view('Solicitud/actualizar_solicitud', $data);
		$this->load->view('Base/footer');
	}

	public function ActualizarSolicitud($id)
	{
		$datos = $this->input->post();
		$bool = $this->Solicitud_Model->ActualizarSolicitud($datos);
		if($bool){
				$this->session->set_flashdata("informa","Se actualizo la solicitud !!!");
				redirect(base_url()."Solicitud/"); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al actualizar la solicitud");
			redirect(base_url()."Solicitud/");

		}
	}

	public function ActualizarEstadoSolicitud($i)
	{
		$id = $_GET['id'];
		$bool = $this->Solicitud_Model->ActualizarEstadoSolicitud($id, $i);
		if($bool){
				$this->session->set_flashdata("actualizado","Se actualizo el estado la solicitud !!!");
				redirect(base_url()."Solicitud/"); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al actualizar el estado la solicitud");
			redirect(base_url()."Solicitud/");

		}
	}

	public function AgregarCredito()
	{
		$id = $_GET['k'];
		$datos = $this->Solicitud_Model->obtenerSolicitud($id);
		$data = array('id' => $id, 'datos' => $datos);

		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('Solicitud/frm_agregar_credito', $data);
		$this->load->view('Base/footer');
	}

	public function GuardarCredito()
	{
		$datos = $this->input->post();
		$bool = $this->Solicitud_Model->GuardarCredito($datos);
		if($bool){
				$this->session->set_flashdata("actualizado","Operación realizada exitosamente!!!");
				redirect(base_url()."Solicitud/"); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al realizar la operacion");
			redirect(base_url()."Solicitud/");

		}
	}

	public function AgregarFiador()
	{
		$datos = $this->input->post();
		$id = $datos["id_solicitud"];
		$bool = $this->Solicitud_Model->AgregarFiador($datos);
		if($bool){
				$this->session->set_flashdata("actualizado","Operación realizada exitosamente!!!");
				redirect(base_url()."Solicitud/DetalleSolicitud/".$id); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al realizar la operacion");
			redirect(base_url()."Solicitud/");

		}
	}

	public function ActualizarFiador()
	{
		$datos = $this->input->post();
		$id = $datos["id_solicitud"];
		$bool = $this->Solicitud_Model->ActualizarFiador($datos);
		if($bool){
				$this->session->set_flashdata("actualizado","Operación realizada exitosamente!!!");
				redirect(base_url()."Solicitud/DetalleSolicitud/".$id); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al realizar la operacion");
			redirect(base_url()."Solicitud/");

		}
	}

	public function AgregarPrenda()
	{
		$datos = $this->input->post();
		$id = $datos["id_solicitud"];
		$bool = $this->Solicitud_Model->AgregarPrenda($datos);
		if($bool){
				$this->session->set_flashdata("actualizado","Operación realizada exitosamente!!!");
				redirect(base_url()."Solicitud/DetalleSolicitud/".$id); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al realizar la operacion");
			redirect(base_url()."Solicitud/");

		}
	}

	public function ActualizarPrenda()
	{
		$datos = $this->input->post();
		$id = $datos["id_solicitud"];
		$bool = $this->Solicitud_Model->ActualizarPrenda($datos);
		if($bool){
				$this->session->set_flashdata("actualizado","Operación realizada exitosamente!!!");
				redirect(base_url()."Solicitud/DetalleSolicitud/".$id); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al realizar la operacion");
			redirect(base_url()."Solicitud/");

		}
	}
}
