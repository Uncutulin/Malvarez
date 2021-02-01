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
		
		if(isset($_FILES['file']))
		{
			//var_dump($_FILES);


			$mi_archivo = $_FILES['file']['tmp_name'];
	        $config['upload_path'] = base_url("../../../assets/uploads/");
	        $config['file_name'] = "nombre_archivo";
	        $config['allowed_types'] = "*";
	        $config['max_size'] = "50000";
	        $config['max_width'] = "2000";
	        $config['max_height'] = "2000";
	        $config['file_name'] = $_FILES['file']['name'];

	        $this->load->library('upload', $config);

	        var_dump($mi_archivo);
	        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
	            $data['uploadError'] = $this->upload->display_errors();
	            echo $this->upload->display_errors();
	            return;
	        }

	        $data['uploadSuccess'] = $this->upload->data();

			/*
			if(isset($_FILES['file']['tmp_name']) && !empty($_FILES['file']['tmp_name'])){
				echo "siiii";
				echo $_FILES['file']['tmp_name'];
			}*/
		}
	}
}