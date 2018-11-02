<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentos extends CI_Controller {

	public function ViewInsertarDocumento(){
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view("Pruebas");
		$this->load->view('Base/footer');
	}
	public function SubirDocumentos(){
		$data = $this->input->POST();
		$c =$data["codigo"];
		$file = $_FILES["file"]["name"];
		$filetype = $_FILES["file"]["type"];
		$filesize = $_FILES["file"]["size"];
		move_uploaded_file($_FILES["file"]["tmp_name"], "plantilla/Docs/".$c.$file);
		
	}

}
?>