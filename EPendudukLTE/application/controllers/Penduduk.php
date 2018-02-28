<?php 
defined('BASEPATH') or exit("No direct script access allowed");

class Penduduk extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('html','url','file'));
	}

	public function index()
	{
		$this->load->view('penduduk-all');
	}

	public function showAll()
	{
		$this->load->view('penduduk-all');
	}
}

?>