<?php 
	class Kategorip_model extends CI_Model
	{
		function get_kategorip_db(){
			$this->db->select('*');
			$this->db->from('kategori_peserta');
			return $this->db->get();
		}

		function tambah_db($data){
			$this->db->insert('kategori_peserta',$data);
		}

		function hapus_db($id){
			$this->db->where('idkategori_peserta',$id);
			$this->db->delete('kategori_peserta');
		}

		function edit_db($data,$id){
			$this->db->where('idkategori_peserta',$id);
			$this->db->update('kategori_peserta', $data);
		}

		function get_edit_db($id){
			$this->db->select('*');
			$this->db->from('kategori_peserta');
			$this->db->where('idkategori_peserta',$id);
			return $this->db->get()->row();
		}
		function get_kategorip(){
			$query = $this->db->get('kategori_peserta');
			return $query->result_array();
		}
	}