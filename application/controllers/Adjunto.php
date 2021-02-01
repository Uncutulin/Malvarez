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

   	 //echo "Controlador";

   	 //echo "Controlador";
/*
		if(isset($_POST['Files'])){
			var_dump("siiii POST Adjuntos");
		}

		if(isset($_FILES['Files'])){
			var_dump("siiii FILE Adjuntos");
		}*/
		
		if(isset($_FILES['file'])){
			if(isset($_FILES['file']['tmp_name']) && !empty($_FILES['file']['tmp_name'])){
				echo "siiii";
				echo $_FILES['file']['tmp_name'];
			}
		}
	}
}