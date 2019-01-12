<?php 
	class Acara_model extends CI_Model
	{
		function get_acara_db(){
			$this->db->select('acara.id_acara, acara.nama_acara, acara.deskripsi, acara.tanggal_mulai, acara.waktu_mulai, acara.tanggal_akhir, acara.waktu_akhir, acara.gambar, acara.kategori_acara_idkategori_acara, acara.penyelenggara_id_penyelenggara, acara.tempat_id_tempat, acara.status, jenis_acara.jenis_acara, kategori_acara.kategori_acara, penyelenggara.nama_penyelenggara, tempat.nama_tempat, tempat.ruang');
			$this->db->from('acara');
			$this->db->join('jenis_acara', 'jenis_acara.idjenis_acara = acara.jenis_acara_idjenis_acara','left');
			$this->db->join('kategori_acara', 'kategori_acara.idkategori_acara = acara.kategori_acara_idkategori_acara','left');
			$this->db->join('penyelenggara', 'penyelenggara.id_penyelenggara = acara.penyelenggara_id_penyelenggara','left');
			$this->db->join('tempat', 'tempat.id_tempat = acara.tempat_id_tempat','left');
			$query = $this->db->get();
			return $query->result_array();
		}

		function add($data){
			$this->db->insert('acara',$data);
		}

		function hapus($id){
			$this->db->where('id_acara',$id);
			$this->db->delete('acara');
		}

		function edit($data,$id){
			$this->db->where('id_acara',$id);
			$this->db->update('acara',$data);
		}

		function get_edit_db($id){
			$this->db->select('*');
			$this->db->from('acara');
			$this->db->where('id_acara',$id);
			return $this->db->get()->row();
		}

		public function _uploadImage()
		{
		    $config['upload_path']          = './uploads/';
		    $config['allowed_types']        = 'gif|jpgx|png|jpeg';
		    // $config['file_name']            = $this->db->get('acara');
		    $config['overwrite']			= true;
		    $config['max_size']             = 1024; // 1MB
		    // $config['max_width']            = 1024;
		    // $config['max_height']           = 768;

		    $this->load->library('upload', $config);

		    if ($this->upload->do_upload('gambar')) {
		        return $this->upload->data();
		    }
		}

		public function get_acara(){
			$query = $this->db->get('acara');
			return $query->result_array();
		}

		public function update_status($status, $id){
			$data = array(
	        'status' => $status
		);

		$this->db->where('id_acara', $id);
		$this->db->update('acara', $data);
		}

		// public function status_active($id){
		// 	$this->db->update('acara');
		// 	$this->db->set('status', '1');
		// 	$this->db->where('id_acara',$id);
		// }

		// public function status_anvailable($id){
		// 	$this->db->update('acara');
		// 	$this->db->set('status', '0');
		// 	$this->db->where('id_acara',$id);
		// }
	}




	