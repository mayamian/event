<?php
class Auth_penyelenggaramdl extends CI_Model
{
	public function cek_penyelenggara($email, $password){
		$this->db->where('email',$email);
		$this->db->where('password', $password);
		$query = $this->db->get('penyelenggara');
		return $query->row_array();
	}
	public function register($data){
		$this->db->insert('penyelenggara', $data);
	}
	function get_register(){
		$query=$this->db->get('penyelenggara');
		return $query->result_array();
	}

	/*public function register($data){
		$this->db->insert('penyelenggara'. $data);

	}*/
/*	public function proses_login($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('penyelenggara')->row();
	}
	function cek_login($table, $where){
		return $this->db->get_where($table,$where);
	}
*/	/*public function cekUsername($username){
		return $this->db->get_where('penyelenggara', ['username' => 'username']);	
	}*/
}