<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('Base/header');
		//$this->load->view('Base/nav');
		$this->load->view('Base/index');
		$this->load->view('Base/footer');
	}

	public function Main()
	{
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('Base/content');
		$this->load->view('Base/footer');
	}
}
