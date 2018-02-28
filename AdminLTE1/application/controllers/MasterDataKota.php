<?php
defined('BASEPATH') or exit("No direct script access allowed");

/**
* 
*/
class MasterDataKota extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelKota');
		$this->load->helper(array('html','url','file'));

	}

	public function index()
	{
		echo "work";
	}

	public function showAll()
	{
		$data = $this->ModelKota->getData();

		$this->load->view('headerAdminLTE');
		$this->load->view('master_Kota',$data);
		$this->load->view('footerAdminLTE');
	}
}

?>