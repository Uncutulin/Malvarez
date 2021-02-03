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

		$this->load->library('ImageResize');
	}

	public function index()
	{
		
	}

	public function SubirImagen($id)
	{		
		var_dump($_FILES);
		if(isset($_FILES['file']))
		{	
			$base ="";


		    //$base = $this->redimensionar_imagen($_FILES['file']['tmp_name'], $_FILES['file']['type'], $_FILES["file"]["size"]);
		    $base = $this->redimensionar_imagen2($_FILES['file']['tmp_name'], $_FILES['file']['type'], $_FILES["file"]["size"],$_FILES['file']['name']);

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


	 function redimensionar_imagen2($tmp_name, $type, $size, $name)
	 {

	 	$viejaImagen = imagecreatefromjpeg($tmp_name);
	 	$image = new ImageResize($viejaImagen);
		$image->resizeToWidth(180);
		
		if ($extension == "jpg" || $extension == "jpeg") {
			$image->quality_jpg = 100; //La mejor calidad
		} else if ($extension == "png") {
			$image->quality_png = 9; //La mejor compresión
		}
		
		//Guardar miniatura en la carpeta correspondiente
		var_dump($Imagen);die;

		$image->save($carpetaUploads."thumbnails/".$nombreImagen);
		
		header("HTTP/1.1 200 OK");
		header('Content-Type: application/json');
		$datos = array('estado' => '200');
		die(json_encode($datos, JSON_FORCE_OBJECT));













	 	/*
	 	$ancho = 120;
	 	$info = pathinfo($name);

	 	if($info['extension'] == 'jpg'){

	 	}
	 	$tamano = getimagesize($tmp_name);

	 	$anchoImg = $tamano[0];
	 	$altoImg = $tamano[1];


	 	$alto = intval($altoImg * $ancho / $anchoImg);

	 	$viejaImagen = imagecreatefromjpeg($tmp_name);
	 	$nuevaImagen = imagecreatetruecolor($ancho, $alto);
		imagecopyresampled($nuevaImagen,$viejaImagen,0,0,0,0,$ancho, $alto,$anchoImg,$altoImg);
	 	ob_start();

		imagejpeg($nuevaImagen, null, 100);
		$resource = ob_get_contents();
		ob_end_flush();
		return base64_encode($resource);
		*/
	 }









	//Como redimensionar una imagen con php

    function redimensionar_imagen($tmp_name, $type, $size){  
        //Imagen original
		$rtOriginal=$tmp_name;

		$imagen = getimagesize($tmp_name);//Sacamos la información
		$ancho = $imagen[0];
		$alto = $imagen[1];

		//Ancho y alto máximo
		$max_ancho =1024; $max_alto = 768;
		if($alto>$max_alto || $ancho>$max_ancho)
		{
			//Crear variable
			/*
			$original = imagecreatefrompng($rtOriginal);

			$original = imagecreatefromjpeg($rtOriginal);*/
			 
			//Medir la imagen
			list($alto,$ancho)=getimagesize($rtOriginal);

			//Ratio
			$x_ratio = $max_ancho / $ancho;
			$y_ratio = $max_alto / $alto;

			//Proporciones
			if(($ancho <= $max_ancho) && ($alto <= $max_alto) ){
			    $ancho_final = $ancho;
			    $alto_final = $alto;
			}
			/*
			else if(($x_ratio * $alto) < $max_alto){
			    $alto_final = ceil($x_ratio * $alto);
			    $ancho_final = $max_ancho;
			}*/
			else {
			    //$ancho_final = ceil($y_ratio * $ancho);
			    //$alto_final = $max_alto;

			    $ancho_final = $max_ancho;
			    $alto_final = $max_alto;
			}
/*
			//Crear un lienzo
			$lienzo=imagecreatetruecolor($ancho_final,$alto_final); 

			//Copiar original en lienzo
			imagecopyresampled($lienzo,$original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
			 
			//Destruir la original
			imagedestroy($original);

			ob_start();*/

			if($type=='image/jpeg' || $type=='image/jpg'){
				echo "- jpg o jpeg -";

				$original = imagecreatefromjpeg($rtOriginal);
				//Crear un lienzo
				$lienzo=imagecreatetruecolor($ancho_final,$alto_final); 

				//Copiar original en lienzo
				imagecopyresampled($lienzo,$original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
				//imagecopyresampled($lienzo,$original,0,0,0,0,$alto_final, $ancho_final,$alto,$ancho);
				 
				//Destruir la original
				imagedestroy($original);

				ob_start();

				imagejpeg($lienzo, null, 100);
			
			}else{
			/*				
				echo "- png -";
				$original = imagecreatefrompng($rtOriginal);

				//Crear un lienzo
				$lienzo=imagecreatetruecolor($ancho_final,$alto_final); 

				//Copiar original en lienzo
				imagecopyresampled($lienzo,$original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
				 
				//Destruir la original
				imagedestroy($original);

				ob_start();

				imagepng($lienzo, null, );
			}*/
			}
			$resource = ob_get_contents();

			ob_end_flush();
		 
		}else{

	        $f1= fopen($tmp_name,"rb");
	        $foto_reconvertida = fread($f1, $size);
	        $resource = $foto_reconvertida;
	        fclose($f1);
		}
		return base64_encode($resource);
    }

}