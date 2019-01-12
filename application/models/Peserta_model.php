<?php 
	class Peserta_model extends CI_Model
	{
		public function buat_kode() {
		  $this->db->select('RIGHT(peserta.kode,4) as kode', FALSE);
		  $this->db->order_by('kode','DESC');    
		  $this->db->limit(1);    //menampilkan hasil 1
		  $query = $this->db->get('peserta');      //cek dulu apakah sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $kode = 1;    
		  }
		  $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $kodejadi = "EVT-2019-".$kodemax;    // hasilnya EVT-2019-0001 dst.
		  return $kodejadi;  
		}

		function get_peserta_db() {
			$this->db->select('*');
			$this->db->from('peserta');
			$this->db->join('kategori_peserta', 'kategori_peserta.idkategori_peserta = peserta.kategori_peserta_idkategori_peserta');
			$query= $this->db->get();
			return $query->result_array();
		}

		function hapus_db($id) {
			$this->db->where('id_peserta',$id);
			$this->db->delete('peserta');
		}

		function edit_db($data,$id) {
			$this->db->where('id_peserta',$id);
			$this->db->update('peserta',$data);
		}
		
		function get_edit_db($id) {
			$this->db->select('*');
			$this->db->from('peserta');
			$this->db->where('id_peserta',$id);
			return $this->db->get()->row();
		}
		function get_peserta() {
			$query=$this->db->get('peserta');
			return $query->result_array();
		}

		function get_peserta_kategori() {
			$query = $this->db->get('kategori_peserta');
    		return $query->result_array();
		}
	}