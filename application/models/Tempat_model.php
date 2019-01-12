<?php  
	class Tempat_model extends CI_Model
	{
		function get_tempat_db(){
			$this->db->select('*');
			$this->db->from('tempat');
			$query = $this->db->get();
			return $query->result_array();
		}

		function tambah_db($data){
			$this->db->insert('tempat',$data);
		}

		function hapus_db($id){
			$this->db->where('id_tempat',$id);
			$this->db->delete('tempat');
		}

		function edit_db($data,$id){
			$this->db->where('id_tempat',$id);
			$this->db->update('tempat',$data);
		}

		function get_edit_db($id){
			$this->db->select('*');
			$this->db->from('tempat');
			$this->db->where('id_tempat',$id);
			return $this->db->get()->row();
		}

		public function update_status($status, $id){
			$data = array(
	        'status' => $status
		);

		$this->db->where('id_tempat', $id);
		$this->db->update('tempat', $data);
		}

		function get_tempat(){
		    $query = $this->db->get('tempat');
		    return $query->result_array();
		}
	}