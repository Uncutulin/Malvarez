<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adjunto extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("login")){
			redirect("../../../");
		}
		$this->load->model('AdjuntoModel');
	}

	public function index()
	{
		
	}

	public function SubirImagen($id)
	{		
		if(isset($_FILES['file']))
		{	
			/*
			var_dump($_FILES);
	        $f1= fopen($_FILES['file']['tmp_name'],"rb");
	        $foto_size= $_FILES["file"]["size"];

	        $foto_reconvertida = fread($f1, $foto_size);
			//$foto_reconvertida->adaptiveResizeImage(1024,768);
	        $foto_reconvertida = base64_encode($foto_reconvertida);
	        fclose($f1);*/

	        $base = $this->redimensionar_imagen($_FILES['file']['tmp_name']);

	        $data = array(				
				'IdProp' => $id,
				'Img' => $base,
				'Activo' => 1
			);

	        $this->AdjuntoModel->postImage($data);	

			
		}else{
			echo "nada";
		}
	}






	//Como redimensionar una imagen con php

    function redimensionar_imagen($tmp_name){  
    	//var_dump("asdasd");
        //Imagen original
		$rtOriginal=$tmp_name;

		//Crear variable
		$original = imagecreatefromjpeg($rtOriginal);

		//Ancho y alto máximo
		$max_ancho = 1024; $max_alto = 768;
		 
		//Medir la imagen
		list($ancho,$alto)=getimagesize($rtOriginal);

		//Ratio
		$x_ratio = $max_ancho / $ancho;
		$y_ratio = $max_alto / $alto;

		//Proporciones
		if(($ancho <= $max_ancho) && ($alto <= $max_alto) ){
		    $ancho_final = $ancho;
		    $alto_final = $alto;
		}
		else if(($x_ratio * $alto) < $max_alto){
		    $alto_final = ceil($x_ratio * $alto);
		    $ancho_final = $max_ancho;
		}
		else {
		    $ancho_final = ceil($y_ratio * $ancho);
		    $alto_final = $max_alto;
		}

		//Crear un lienzo
		$lienzo=imagecreatetruecolor($ancho_final,$alto_final); 

		//Copiar original en lienzo
		imagecopyresampled($lienzo,$original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
		 
		//Destruir la original
		imagedestroy($original);

		ob_start();
		// output the image - since ob is on: buffer it
		imagejpeg($lienzo, null, 100);
		// this break could be a problem - if this is in a control structure, remove it
		// save the ob in $resouce
		$resource = ob_get_contents();
		// here is the image now in $resource AND in the output buffer since you didn't clean it (the ob)
		// end ob and flush (= send the ob)
		ob_end_flush();

		return base64_encode($resource);
    }

}