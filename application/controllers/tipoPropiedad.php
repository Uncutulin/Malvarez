<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipoPropiedad extends CI_Controller {
	
	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/menu');
		$this->load->view('admin/tipoPropiedad/listadoTipoPropiedad');
		$this->load->view('admin/footer');
	}

}
