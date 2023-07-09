<?php 
class Topup_controller extends CI_Controller{
	function _Contruct()
	{
		parent:: _contruct();
	}
	
	function home()
	{
		$data['judul']='PawTopia';
		$this->load->view('home', $data);
	}

	function ml()
	{
		$data['judul']='Mobile-Legend';
		$this->load->view('ml', $data);
	}

	function games()
	{
		$data['judul']='Pilihan-Games';
		$this->load->view('games', $data);
	}

	function hsr()
	{
		$data['judul']='Honkai-Starrail';
		$this->load->view('hsr', $data);
	}

	function gi()
	{
		$data['judul']='Genshin-Impact';
		$this->load->view('genshin', $data);
	}

	function proses()
	{
		$this->load->model('Topup_model');
		$this->topup_model->proses();
		$data['judul']='Pesanan';
		$this->load->view('proses', $data);
	}

	function buat_akun()
	{
		$this->load->model('Topup_model');
		$this->topup_model->buat_akun();
		$data['judul']='Login';
		$this->load->view('form_login', $data);
	}

	function log()
	{
		$data['judul']='Login';
		$this->load->view('form_login', $data);
	}

	function buat()
	{
		$data['judul']='Buat Akun';
		$this->load->view('buat_akun', $data);
	}

	function logout()
	{
		$this->session->sess_destroy();
		$data['judul']='Login';
		$this->load->view('form_login', $data);
	}
}
?>