<?php
class UsuarioModel extends CI_Model {

	public function getUsuarios($filtroActivo = false)
	{
		$this->load->database();
		if($filtroActivo){
        	$this->db->where('Activo', 1);
        }
        $query = $this->db->get('usuarios');
        return $query->result();
	}

	public function getUsuario($id)
	{
		$this->load->database();
        $query = $this->db->get_where('usuarios', array('Id' => $id));
        return $query->result_array();
	}

	public function postUsuario($data)
	{
		$this->load->database();
        $this->db->insert('usuarios', $data);
	}

	public function putUsuario($id , $data)
	{
		$this->load->database();
        $this->db->where('Id', $id);
		$this->db->update('usuarios', $data);
	}

	public function disabledUsuario($id)
	{
		$this->load->database();
        $this->db->where('Id', $id);
		$this->db->update('usuarios', array('Activo' =>0));
	}

	public function enabledUsuario($id)
	{
		$this->load->database();
        $this->db->where('Id', $id);
		$this->db->update('usuarios', array('Activo' =>1));
	}


	

}
?>