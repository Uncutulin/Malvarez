<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adjunto extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("login")){
			redirect("../../../");
		}
	}

	public function index()
	{
		
	}

	public function SubirImagen()
	{
		//var_dump($this->input->post);
		
	/*
	 $data = $this->security->xss_clean($this->input->raw_input_stream);
   	 $items = json_decode($data);*/	

   	 var_dump("Controlador");

   	 //echo "Controlador";

		if(isset($_POST['file'])){
			echo "siiii POST Adjuntos";
		}

		if(isset($_FILE['file'])){
			echo "siiii FILE Adjuntos";
		}
		/*
		if(isset($_FILE['file'])){
			if(isset($_FILE['file']['tmp_name']) && !empty($_FILE['file']['tmp_name'])){
				echo "siiii";
				echo $_FILE['file']['tmp_name'];
			}
		}*/
	}
}