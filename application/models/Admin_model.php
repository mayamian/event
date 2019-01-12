<?php
	class Admin_model extends CI_Model
	{
		function get_admin_db(){
			$this->db->select('*');
			$this->db->from('admin');
			return $this->db->get();
		}
		function tambah_db($data){
			$this->db->insert('admin', $data);
		}
		function hapus_db($id){
			$this->db->where('id_superadmin', $id);
			$this->db->delete('admin');
		}
		public function cek_login($username, $password){
			$this->db->where('username', $username);
			$this->db->where('password',$password);
			$query = $this->db->get('admin');
			return $query->row_array();
		}
	}