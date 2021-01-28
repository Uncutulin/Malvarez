<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	
	public function index()
	{
		$this->load->model('UsuarioModel');
		$listadoUsuario = $this->UsuarioModel->getUsuarios();
		$datos['listadoUsuario'] = $listadoUsuario;
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/menu');
		$this->load->view('admin/usuario/listadoUsuarios',$datos);
		$this->load->view('admin/usuario/modalUsuario');
		$this->load->view('admin/footer');
	}
	
	public function postUsuario(){

		$this->load->model('UsuarioModel');
		$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
		$id = isset($_POST['id']) ? $_POST['id'] : NULL;
		
		if($nombre!=NULL)
		{
			$data = array(
        		'Descripcion' => $nombre,
			);
			if($id!=NULL)
			{
				$this->UsuarioModel->putUsuario($id, $data);		
			}else{
				$this->UsuarioModel->postUsuario($data);				
			}
		}
		redirect("../../Usuario");	
	}

	public function getUsuario($id){
		$this->load->model('UsuarioModel');
		$Usuario=NULL;
		if($id!=NULL){			
			$Usuario = $this->UsuarioModel->getUsuario($id);			
		}
		//var_dump($Usuario);
		echo $Usuario->Descripcion;
	}

	public function putUsuario(){
		
		$this->load->model('UsuarioModel');
		$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;

		if($nombre!=NULL){
			$data = array(
        	'Descripcion' => $nombre,
			);
			$this->UsuarioModel->putUsuario($data);	
			redirect("../../Usuario");
		}
		
	}

	public function putEnabledDisabledUsuario($id){
		
		$this->load->model('UsuarioModel');
		$activo = isset($_POST['Activo']) ? $_POST['Activo'] : NULL;
		if($activo!=NULL){
			if($activo==1){
				$this->UsuarioModel->disabledUsuario($id);	
			}elseif($activo==0){
				$this->UsuarioModel->enabledUsuario($id);	
			}
			echo true;
		}
		echo false;
		
	}
}
