<?php
defined('BASEPATH') or exit("No script access allowed");

/**
* 
*/
class ModelKota extends CI_Model
{
	
	public function getData()
	{
		return $this->db->get('masterkota')->result();
	}

}

?>