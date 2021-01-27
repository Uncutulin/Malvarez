<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipoPropiedad extends CI_Controller {
	

	public function index()
	{
		$this->load->model('TipoPropiedadModel');
		$listadoTipoPropiedad = $this->TipoPropiedadModel->getTipoPropiedad();
		$datos['listadoTipoPropiedad'] = $listadoTipoPropiedad;
		/*
		echo "<pre>";
		var_dump($listadoTipoPropiedad);
		echo "</pre>";die;
		*/
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/menu');
		$this->load->view('admin/tipoPropiedad/listadoTipoPropiedad',$datos);
		$this->load->view('admin/tipoPropiedad/modalTipoPropiedad');
		$this->load->view('admin/footer');
	}

}
