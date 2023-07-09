<?php 

class login extends CI_Controller{
	public function proses_login()
	{
		if (isset($_POST['submit'])) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$berhasil = $this->topup_model->login($username,$password);

			if ($berhasil == 1) {
				$this->session->set_userdata(array('status_login' => 'sukses'));
				redirect('dashboard/dash');
			} else {
				$this->load->view('form_login');
			}
		}
	}
}

?>