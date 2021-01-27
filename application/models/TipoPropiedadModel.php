<?php
class TipoPropiedadModel extends CI_Model {
	//print_r($this->db->last_query()); 

	

	public function getTiposPropiedades()
	{
		$this->load->database();
        $query = $this->db->get('tipospropiedades');
        return $query->result();
	}

	public function getTipoPropiedad($id)
	{
		$this->load->database();
        $query = $this->db->get_where('tipospropiedades', array('NroTipo' => $id));
        return $query->result()[0];
	}

	public function postTipoPropiedad($data)
	{
		$this->load->database();
        $this->db->insert('tipospropiedades', $data);
	}

	public function putTipoPropiedad($id , $data)
	{
		$this->load->database();
        $this->db->where('NroTipo', $id);
		$this->db->update('tipospropiedades', $data);
	}


	

}
?>