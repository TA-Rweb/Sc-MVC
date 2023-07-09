<?php  
class Topup_model extends CI_Model{
	function proses()
	{
		$simpan_data=array(
		'email' => $this->input->post('email'),
		'id_pengguna' => $this->input->post('id_pengguna'),
		'id_zona' => $this->input->post('id_zona'),
		'jumlah' => $this->input->post('jumlah'),
		'metode' => $this->input->post('pembayaran'),
		);

	$simpan=$this->db->insert('ml',$simpan_data);
	return $simpan;
	}
	function buat_akun()
	{
		$simpan_data=array(
		'id_user' => $this->input->post('id_user'),
		'nama' => $this->input->post('nama'),
		'username' => $this->input->post('username'),
		'password' => $this->input->post('password')
		);

	$simpan=$this->db->insert('user',$simpan_data);
	return $simpan;
	}
	function get_user_all()
	{
		$query=$this->db->query("SELECT * FROM user ORDER BY id_user ASC");
		return $query->result();
	}

	function get_user_all2()
	{
		$query=$this->db->query("SELECT * FROM ml ORDER BY id_pengguna ASC");
		return $query->result();
	}

	function delete_user($where,$id_user)
	{
		$query=$this->db->query("DELETE FROM user WHERE id_user = '$id_user'");
		$this->db->where($where);
		$this->db->delete('user');
	}

	function delete_order($where,$id_pengguna)
	{
		$query=$this->db->query("DELETE FROM ml WHERE id_pengguna = '$id_pengguna'");
		$this->db->where($where);
		$this->db->delete('ml');
	}

	public function login($username, $password)
	{
		$periksa = $this->db->get_where('user', array('username' => $username, 'password' => $password));
		if ($periksa->num_rows() > 0) {
			return 1;
		} else {
			return 0;
		}
	}
}


?>