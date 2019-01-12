<?php 
	class JenisAcara_model extends CI_Model
	{
		function get_jenisacara_db(){
			$this->db->select('*');
			$this->db->from('jenis_acara');
			return $this->db->get();
		}

		function add($data){
			$this->db->insert('jenis_acara',$data);
		}

		function hapus($id){
			$this->db->where('idjenis_acara',$id);
			$this->db->delete('jenis_acara');
		}

		function edit($data,$id){ 
			$this->db->where('idjenis_acara',$id);
			$this->db->update('jenis_acara',$data);
		}

		function get_edit_db($id){
			$this->db->select('*');
			$this->db->from('jenis_acara');
			$this->db->where('idjenis_acara',$id);
			return $this->db->get()->row();
		}

		function get_jenisacara(){
		    $query = $this->db->get('jenis_acara');
		    return $query->result_array();
		}
		

	}