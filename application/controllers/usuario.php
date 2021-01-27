<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	
	public function index()
	{
		
		//$data="asdasd";
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/menu');
		$this->load->view('admin/usuario/listadoUsuarios');
		$this->load->view('admin/usuario/modalUsuario');
		$this->load->view('admin/footer');
	}

}
