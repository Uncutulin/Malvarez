<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogo extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();		
		$this->load->model('PropiedadModel');
	}

	public function index()
	{
		$array = array();
		$listadoPropiedad = $this->PropiedadModel->getPropiedades();

		foreach ($listadoPropiedad as $key => $value) {
			$PropiedadCatalogo = $this->PropiedadModel->getPropiedadCatalogo($value->id_propiedad);

			$data = array(				
        		'propiedad' => $value,
				'imagenes' => $PropiedadCatalogo,
			);

			array_push($array, $data);
		}
		$data['catalogo'] = $array;
		$this->load->view('sidebar/menu');
		$this->load->view('catalogo/listado', $data);
	}

}
