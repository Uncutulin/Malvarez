<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propiedad extends CI_Controller {
	
	public function index()
	{
		$modal = $this->load->view('admin/propiedad/modalPropiedad');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/menu');
		$this->load->view('admin/propiedad/listadoPropiedad', $modal);
		$this->load->view('admin/footer');
	}

}
