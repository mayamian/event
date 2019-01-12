<?php
class Auth_Pesertamdl extends CI_Model
{
	//function get_peserta_db(){
	//	$this->db->select('*');
	//	$this->db->from('peserta');
	//	return $this->db->get();
	//}
	public function cek_login($email, $password){
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query = $this->db->get('peserta');
		return $query->row_array();
	}


	public function register($data){
		$this->db->insert('peserta', $data);
	}
	/*public function cekUsername($username){
		return $this->db->get_where('peserta', ['username' => 'username']);	
	}*/
	function get_register(){
		$query=$this->db->get('peserta');
		return $query->result_array();
	}

/*	public function proses_login($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('peserta')->row();
	}
		function cek_login($table, $where){
		return $this->db->get_where($table,$where);
	}*/
}