<?php
class TipoPropiedad extends CI_Model {
	
	public function getTipoPropiedad()
	{
        $query = $this->db->get('TipoPropiedad');
        return $query->result();
	}

}
?>