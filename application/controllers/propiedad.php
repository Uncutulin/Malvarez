<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propiedad extends CI_Controller {
	
	public function index()
	{
		$this->load->model('TipoPropiedadModel');

		$listadoTipoPropiedad = $this->TipoPropiedadModel->getTiposPropiedades(true);
		$data['listadoTipoPropiedad'] = $listadoTipoPropiedad;

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/menu');
		$this->load->view('admin/propiedad/listadoPropiedad');
		$this->load->view('admin/propiedad/modalPropiedad',$data);
		$this->load->view('admin/footer');
	}

}
