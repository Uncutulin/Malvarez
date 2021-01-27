<?php
class LoginModel extends CI_Model {	

	public function login($email, $clave)
	{
		$this->load->database();
		$this->db->where('Email', $email);
		$this->db->where('Clave', $clave);
		$query = $this->db->get('usuarios');
		if($query->num_rows()>0){
			return $query->row();
		}else{
			return false;
		}        
	}
}
?>