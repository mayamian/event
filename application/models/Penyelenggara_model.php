<?php 
	class Penyelenggara_model extends CI_Model
	{
		function get_penyelenggara_db(){
			$this->db->select('*');
			$this->db->from('penyelenggara');
			$this->db->join('kategori_penyelenggara', 'kategori_penyelenggara.idkategori_penyelenggara = penyelenggara.kategori_penyelenggara ');
			$query= $this->db->get();
			return $query->result_array();
		}

		function add($data){
			$this->db->insert('penyelenggara',$data);
		}

		function hapus_db($id){
			$this->db->where('id_penyelenggara',$id);
			$this->db->delete('penyelenggara');
		}

		function edit_db($data,$id){
			$this->db->where('id_penyelenggara',$id);
			$this->db->update('penyelenggara',$data);
		}

		function get_edit_db($id){
			$this->db->select('*');
			$this->db->from('penyelenggara');
			$this->db->where('id_penyelenggara',$id);
			return $this->db->get()->row();
		}

		function get_penyelenggara(){
			$query = $this->db->get('penyelenggara');
    		return $query->result_array();
		}

		function get_penyelenggara_kategori(){
			$query = $this->db->get('kategori_penyelenggara');
    		return $query->result_array();
		}

		public function _uploadImage()
		{
		    $config['upload_path']          = './asset/img/logo_orma/';
		    $config['allowed_types']        = 'gif|jpgx|png|jpeg';
		    // $config['file_name']            = $this->db->get('acara');
		    $config['overwrite']			= true;
		    $config['max_size']             = 1024; // 1MB
		    // $config['max_width']            = 1024;
		    // $config['max_height']           = 768;

		    $this->load->library('upload', $config);

		    if ($this->upload->do_upload('logo')) {
		        return $this->upload->data();
		    }
		}
	}




	