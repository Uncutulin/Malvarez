<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipoPropiedad extends CI_Controller {
	
	public function index()
	{
		$modal = $this->load->view('admin/tipoPropiedad/modalTipoPropiedad');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/menu');
		$this->load->view('admin/tipoPropiedad/listadoTipoPropiedad', $modal);
		$this->load->view('admin/footer');
	}

}
