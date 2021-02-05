<?php
class PropiedadModel extends CI_Model {	

	function __construct()
	{
	    parent::__construct();
	    $this->load->database();
	}

	public function getPropiedades($filtroActivo = false)
	{
		if($filtroActivo){
        	$this->db->where('activo', 1);
        }
        $query = $this->db->get('propiedades');
        return $query->result();
	}

	public function getPropiedadbyId($id)
	{
        $query = $this->db->get_where('propiedades', array('id_propiedad' => $id));
        return $query->result()[0];
	}

	public function postPropiedad($data)
	{
        $this->db->insert('propiedades', $data);
	}

	public function putPropiedad($id , $data)
	{
        $this->db->where('id_propiedad', $id);
		$this->db->update('propiedades', $data);
	}

	public function disabledPropiedad($id)
	{
        $this->db->where('id_propiedad', $id);
		$this->db->update('propiedades', array('activo' =>0));
	}

	public function enabledPropiedad($id)
	{
        $this->db->where('id_propiedad', $id);
		$this->db->update('propiedades', array('Activo' =>1));
	}

	public function getDepartamentos()
	{

        $this->db->where("id_provincia",2)->or_where("id_provincia",6);
        $query = $this->db->get('departamento');        
        return $query->result();
	}

	public function getCiudades($id)
	{
        $this->db->where('id_ciudad', $id);
        $query = $this->db->get('ciudad');
        return $query->result();
	}
}