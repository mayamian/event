<?php 
	class Kategori_model extends CI_Model
	{
		function get_kategori_db(){
			$this->db->select('*');
			$this->db->from('kategori_penyelenggara');
			return $this->db->get();
		}

		function tambah_db($data){
			$this->db->insert('kategori_penyelenggara',$data);
		}

		function hapus_db($id){
			$this->db->where('idkategori_penyelenggara',$id);
			$this->db->delete('kategori_penyelenggara');
		}

		function edit_db($data,$id){
			$this->db->where('idkategori_penyelenggara',$id);
			$this->db->update('kategori_penyelenggara',$data);
		}

		function get_edit_db($id){
			$this->db->select('*');
			$this->db->from('kategori_penyelenggara');
			$this->db->where('idkategori_penyelenggara',$id);
			return $this->db->get()->row();
		}

		function get_kategorip(){
			$query = $this->db->get('kategori_penyelenggara');
    		return $query->result_array();
		}

	}