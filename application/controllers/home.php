<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('TipoPropiedadModel');

		$listadoTipoPropiedad = $this->TipoPropiedadModel->getTiposPropiedades();
		$datos['listadoTipoPropiedad'] = $listadoTipoPropiedad;

		$this->load->view('sidebar/menu');
		$this->load->view('home/inicio', $datos);
	}

}
