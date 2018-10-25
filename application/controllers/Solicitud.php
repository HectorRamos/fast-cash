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
		$this->load->model('Solicitud_Model');
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
		$this->load->model('Solicitud_Model');
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
		$solicitud = $this->input->post();
		//var_dump($solicitud);


		$datosSolicitud = array(
					   'codigoSolicitud' => $solicitud['numero_solicitud'],
					   'fechaRecibido' => $solicitud['fecha_recibido'],
					   'observaciones' => $solicitud['observaciones'],
					   'estado' => 1,
					   'fechaRegistro' => null,
					   'idCliente' => $solicitud['id_cliente'],
					   'idLineaPlazo' => $solicitud['tipo_prestamo'],
					   'idFiador' => null,
					   'idGarantia' => null,
					   'idEstadoSolicitud' => '1',
					   'idDocumento' => null);


		//echo json_encode($datosSolicitud);

		$datosAmortizacion = array(
					   'tasaInteres' => $solicitud['tasa_interes'],
					   'capital' => $solicitud['monto_dinero'],
					   'totalInteres' => $solicitud['intereses_pagar'],
					   'totalIva' => $solicitud['iva_pagar'],
					   'ivaInteresCapital' => $solicitud['total_pagar'],
					   'plazoMeses' => $solicitud['numero_meses'],
					   'pagoCuota' => $solicitud['cuota_diaria'],
					   'cantidadCuota' => $solicitud['numero_cuotas'],
					   'estado' => 1,
					   'fechaRegistro' => null,
					   'idSolicitud' => null,
					   );
		echo json_encode($datosSolicitud);
		echo json_encode($datosAmortizacion);

		/*$bool = $this->Solicitud_Model->GuardarSolicitud($datos);
		if($bool){
				$this->session->set_flashdata("informa","Se creo exitosamente la solicitud !!!");
				redirect(base_url()."Solicitud/CrearSolicitud"); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al crear la solicitud");
			redirect(base_url()."Solicitud/CrearSolicitud");

		}*/

	}
}
