<?php 
	class Tiket_model extends CI_Model
	{
		function get_tiket_db(){
			$this->db->select('*');
			$this->db->from('tiket');
			$this->db->join('acara', 'acara.id_acara = tiket.acara_id_acara', 'left');
			$this->db->join('kategori_peserta', 'kategori_peserta.idkategori_peserta = tiket.kategori_peserta_idkategori_peserta', 'left');
			$query = $this->db->get();
			return $query->result_array();
		}

		function add($data){
			$this->db->insert('tiket',$data);
		}

		function hapus($id){
			$this->db->where('id_tiket',$id);
			$this->db->delete('tiket');
		}

		function edit($data,$id){ 
			$this->db->where('id_tiket',$id);
			$this->db->update('tiket',$data);
		}

		function get_edit_db($id){
			$this->db->select('*');
			$this->db->from('tiket');
			$this->db->where('id_tiket',$id);
			return $this->db->get()->row();
		}
	}