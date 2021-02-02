<?php
class AdjuntoModel extends CI_Model {	

	public function getImagesAllByIdPropiedad($id)
	{
		$this->load->database();
        $this->db->where('IdProp', $id);
        $query = $this->db->get('images');
        return $query->result();
	}

	public function getImages($filtroActivo = false)
	{
		$this->load->database();
		if($filtroActivo){
        	$this->db->where('Activo', 1);
        }
        $query = $this->db->get('images');
        return $query->result();
	}


	public function getPropiedadbyId($id)
	{
		$this->load->database();
        $query = $this->db->get_where('propiedades', array('IdProp' => $id));
        return $query->result()[0];
	}

	public function postImage($data)
	{
		$this->load->database();
        $this->db->insert('images', $data);
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