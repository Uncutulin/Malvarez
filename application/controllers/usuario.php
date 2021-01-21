<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	
	public function index()
	{
		$modal = $this->load->view('admin/usuario/modalUsuario');
		//$data="asdasd";
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/menu');
		$this->load->view('admin/usuario/listadoUsuarios', $modal);
		$this->load->view('admin/footer');
	}

}
