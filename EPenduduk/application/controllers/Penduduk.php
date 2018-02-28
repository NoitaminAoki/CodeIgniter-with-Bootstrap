	<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->Model('ModelPen');
		$this->load->helper(array('form', 'url', 'file'));
	}

	public function allPenduduk()
	{
		$data['penduduk'] = $this->ModelPen->getData();

		$this->load->view('Html_Header');
		$this->load->view('Navbar_Penduduk');
		$this->load->view('penduduk-all',$data);
		$this->load->view('view_Penduduk');
		$this->load->view('Html_Footer');
	}
	
	public function detailPenduduk($nik)
	{
		$data['penduduk'] = $this->ModelPen->getDataByNik('penduduk',$nik);

		return $data;
	}


	public function tambahPenduduk()
	{
		$this->load->view('Html_Header');
		$this->load->view('Navbar_Penduduk');
		$this->load->view('addPenduduk');
		$this->load->view('Html_Footer');
	}

	public function savePenduduk()
	{

		$config['upload_path']          = './assets/images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1920;
        $config['max_height']           = 1080;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto_ktp')){
        	$error = array('error' => $this->upload->display_errors());
        	echo $error['error'];
	}else{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$agama = $this->input->post('agama');
		$status = $this->input->post('status');
		$pekerjaan = $this->input->post('pekerjaan');
		$kewarganegaraan = $this->input->post('kewarganegaraan');
		$gol_darah = $this->input->post('gol_darah');
		$foto_ktp = $this->input->post('nama_foto');
		$password = $this->input->post('password');
		$role = "penduduk";

 
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat,
			'agama' => $agama,
			'status' => $status,
			'pekerjaan' => $pekerjaan,
			'kewarganegaraan' => $kewarganegaraan,
			'gol_darah' => $gol_darah,
			'foto_ktp' => $foto_ktp,
			'password' => $password,
			'role' => $role
			);

		$this->ModelPen->insertData($data,'penduduk');
		redirect('Penduduk/allPenduduk');
	}

		
	}

	public function editPenduduk($nik)
	{
		$get_Nik = $nik;
		$data['penduduk'] = $this->ModelPen->getDataByNik('penduduk',$get_Nik);

		$this->load->view('Html_Header');
		$this->load->view('Navbar_Penduduk');
		$this->load->view('editPenduduk', $data);
		$this->load->view('Html_Footer');

	}

	public function updatePenduduk()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$agama = $this->input->post('agama');
		$status = $this->input->post('status');
		$pekerjaan = $this->input->post('pekerjaan');
		$kewarganegaraan = $this->input->post('kewarganegaraan');
		$gol_darah = $this->input->post('gol_darah');
		$foto_ktp = $this->input->post('foto_ktp');
		$password = $this->input->post('password');
		$role = "penduduk";

 
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat,
			'agama' => $agama,
			'status' => $status,
			'pekerjaan' => $pekerjaan,
			'kewarganegaraan' => $kewarganegaraan,
			'gol_darah' => $gol_darah,
			'foto_ktp' => $foto_ktp,
			'password' => $password,
			'role' => $role
			);

		$this->ModelPen->updateData($nik,'penduduk',$data);
		redirect('Penduduk/allPenduduk');
	}

	public function hapusPenduduk($nik)
	{
		$get_Nik = $nik;

		$data['penduduk'] = $this->ModelPen->getDataByNik('penduduk',$get_Nik);

		$fotoKtp = $data['penduduk']->foto_ktp;

		unlink("assets/images/".$fotoKtp);
		

		$this->ModelPen->deleteData($get_Nik,'penduduk');
		redirect('Penduduk/allPenduduk');
	}
}







?>