<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propiedad extends CI_Controller {
	
	public function index()
	{
		$this->load->model('TipoPropiedadModel');
		$this->load->model('PropiedadModel');
		$listadoTipoPropiedad = $this->TipoPropiedadModel->getTiposPropiedades(true);		
		$listadoPropiedad = $this->PropiedadModel->getPropiedades(true);

		$data['listadoTipoPropiedad'] = $listadoTipoPropiedad;
		$data['listadoPropiedad'] = $listadoPropiedad;

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/menu');
		$this->load->view('admin/propiedad/listadoPropiedad',$data);
		$this->load->view('admin/propiedad/modalAdjunto');	
		$this->load->view('admin/propiedad/modalPropiedad');
		$this->load->view('admin/footer');
	}

	public function ListadoAdjuntos($id)
	{
		$this->load->model('PropiedadModel');

		$Propiedad = $this->PropiedadModel->getPropiedadbyId($id);
		$data['Propiedad'] = $Propiedad;

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/menu');
		$this->load->view('admin/propiedad/listadoAdjunto',$data);
		$this->load->view('admin/propiedad/modalAdjunto');	
		$this->load->view('admin/footer');
	}


	public function postPropiedad(){

		$this->load->model('PropiedadModel');

		if(isset($_POST)){
			$Id = isset($_POST['id']) ? $_POST['id'] : NULL;
			$data = array(				
        		'IdTipo' => $_POST['TipoPropiedad'],
				'IdBarrio' => $_POST['Barrio'],
				'Ubicacion' => $_POST['Ubicacion'],
				'Ambientes' => $_POST['Ambientes'],
				'Dormitorios' => $_POST['Dormitorios'],
				'Banos' => $_POST['Bano'],
				'Cocheras' => $_POST['Cochera'],
				'Pisos' => $_POST['Pisos'],
				'Antiguedad' => $_POST['Antiguedad'],
				'Situacion' => $_POST['Situacion'],
				'Expensas' => $_POST['Expensas'],
				'Orientacion' => $_POST['Orientacion'],
				'Disposicion	' => $_POST['Disposicion'],
				'Condicion' => $_POST['Estado'],
				//'fecha' => $_POST['Descripcion'],
			);

			if($Id!=NULL)
			{
				$this->PropiedadModel->putPropiedad($id, $data);		
			}else{
				$this->PropiedadModel->postPropiedad($data);				
			}
		}	
		redirect("../../Propiedad");	
	}


}
