<?php 
class dashboard extends CI_Controller
{
	function __contruct()
	{
		parent:: __contruct();

		if ($this->session->userdata('status_login') != 'sukses') {
			redirect('auth');
		}
	}
	public function dash()
	{
		$data['judul']='Dashboard';
		$this->load->view('halaman', $data);
	}

	function admin()
	{
		$this->load->model('Topup_model');
		$data['judul']='Menampilkan Data Pajak';
		$data['akun']=$this->topup_model->get_user_all();
		$this->load->view('akun', $data);
	}

	function delete_user($id_user)
	{
		$where = array('id_user'=>$id_user);
		$this->topup_model->delete_user($where,$id_user);
		redirect('dashboard/admin');
	}

	function order()
	{
		$this->load->model('Topup_model');
		$data['judul']='Menampilkan Data Pajak';
		$data['order']=$this->topup_model->get_user_all2();
		$this->load->view('order', $data);
	}

	function delete_order($id_pengguna)
	{
		$where = array('id_pengguna'=>$id_pengguna);
		$this->topup_model->delete_order($where,$id_pengguna);
		redirect('dashboard/order');
	}
}