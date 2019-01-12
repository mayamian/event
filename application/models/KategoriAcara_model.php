<?php 
	class KategoriAcara_model extends CI_Model
	{
		function get_kategoriacara_db(){
			$this->db->select('*');
			$this->db->from('kategori_acara');
			return $this->db->get();
		}

		function add($data){
			$this->db->insert('kategori_acara',$data);
		}

		function hapus($id){
			$this->db->where('idkategori_acara',$id);
			$this->db->delete('kategori_acara');
		}

		function edit($data,$id){ 
			$this->db->where('idkategori_acara',$id);
			$this->db->update('kategori_acara',$data);
		}

		function get_edit_db($id){
			$this->db->select('*');
			$this->db->from('kategori_acara');
			$this->db->where('idkategori_acara',$id);
			return $this->db->get()->row();
		}

		function get_kategoriacara(){
		    $query = $this->db->get('kategori_acara');
		    return $query->result_array();
		}
	}