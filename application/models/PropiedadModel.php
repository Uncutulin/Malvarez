<?php
class PropiedadModel extends CI_Model {	

	public function getPropiedades($filtroActivo = false)
	{
		$this->load->database();
		if($filtroActivo){
        	$this->db->where('Activo', 1);
        }
        $query = $this->db->get('propiedades');
        return $query->result();
	}

	public function getPropiedadbyId($id)
	{
		$this->load->database();
        $query = $this->db->get_where('propiedades', array('IdProp' => $id));
        return $query->result()[0];
	}

	public function postPropiedad($data)
	{
		$this->load->database();
        $this->db->insert('propiedades', $data);
	}

	public function putPropiedad($id , $data)
	{
		$this->load->database();
        $this->db->where('Id', $id);
		$this->db->update('propiedades', $data);
	}

	public function disabledPropiedad($id)
	{
		$this->load->database();
        $this->db->where('Id', $id);
		$this->db->update('propiedades', array('Activo' =>0));
	}

	public function enabledPropiedad($id)
	{
		$this->load->database();
        $this->db->where('Id', $id);
		$this->db->update('propiedades', array('Activo' =>1));
	}
}