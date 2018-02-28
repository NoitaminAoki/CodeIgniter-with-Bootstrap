<?php
defined('BASEPATH') or exit("No script access allowed");

class ModelPen extends CI_Model
{
	
	public function getData()
	{
		return $this->db->get('penduduk')->result();
	}

	public function insertData($data,$table)
	{
		$this->db->insert($table,$data);
		return $this->db->affected_rows();
	}

	public function getDataByNik($table,$nik)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('nik',$nik);

		$query = $this->db->get()->row();
		return $query;
	}

	public function updateData($nik,$data,$table)
	{
		$this->db->where('nik', $nik);
		$this->db->update($table,$data);
		return $this->db->affected_rows();
		
	}

	public function deleteData($nik,$table)
	{
		$this->db->where('nik',$nik);
		$this->db->delete($table);
	}
}


?>