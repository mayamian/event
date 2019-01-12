<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginAdmin_model extends CI_Model {

	public function proseslogin($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('admin')->row();
	}

	function cek_login($table,$where){    
    return $this->db->get_where($table,$where);
  }

}
