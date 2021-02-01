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
		$this->load->view('admin/propiedad/modalAdjunto');	
		$this->load->view('admin/propiedad/modalPropiedad',$data);
		$this->load->view('admin/footer');
	}

	public function ListadoAdjuntos()
	{
		$this->load->model('TipoPropiedadModel');

		$listadoTipoPropiedad = $this->TipoPropiedadModel->getTiposPropiedades(true);
		$data['listadoTipoPropiedad'] = $listadoTipoPropiedad;

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/menu');
		$this->load->view('admin/propiedad/listadoAdjunto');
		$this->load->view('admin/propiedad/modalAdjunto');	
		//$this->load->view('admin/propiedad/modalPropiedad',$data);
		$this->load->view('admin/footer');
	}


	public function postPropiedad(){

		$this->load->model('UsuarioModel');

		if(isset($_POST)){
			$data = array(
        		'email' => $email,
				'nombre' => $nombre,
				'tel' => $tel,
				'clave' => $clave,
				'fecha' => $fecha,
			);

		}
		/*
		$email = isset($_POST['email']) ? $_POST['email'] : NULL;
		$id = isset($_POST['id']) ? $_POST['id'] : NULL;
		$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
		$tel = isset($_POST['tel']) ? $_POST['tel'] : NULL;
		$clave = isset($_POST['clave']) ? $_POST['clave'] : NULL;
		date_default_timezone_set('America/Argentina/Buenos_Aires');
		$fecha = date("Y-m-d H:i:s"); */
		/*
		if($email!=NULL)
		{
			$data = array(
        		'email' => $email,
				'nombre' => $nombre,
				'tel' => $tel,
				'clave' => $clave,
				'fecha' => $fecha,
			);
			if($id!=NULL)
			{
				$this->UsuarioModel->putUsuario($id, $data);		
			}else{
				$this->UsuarioModel->postUsuario($data);				
			}
		}*/
		redirect("../../Usuario");	
	}


}
