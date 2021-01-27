<?php
class TipoPropiedadModel extends CI_Model {
	
	public function getTipoPropiedad()
	{
		//print_r($this->db->last_query());    

		$this->load->database();
        $query = $this->db->get('tipospropiedades');
        return $query->result();
	}

}
?>