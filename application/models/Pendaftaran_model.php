<?php 
	class Pendaftaran_model extends CI_Model
	{
		public function buat_kode()   {
		  $this->db->select('RIGHT(pendaftaran.kode,4) as kode', FALSE);
		  $this->db->order_by('kode','DESC');    
		  $this->db->limit(1);    //menampilkan hasil 1
		  $query = $this->db->get('pendaftaran');      //cek dulu apakah sudah ada kode di tabel.    
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

		function get_pendaftaran_db(){
			$this->db->select('*');
			$this->db->from('pendaftaran');
			return $this->db->get();
		}

		function tambah_db($data){
			$this->db->insert('pendaftaran',$data);
		}

		function hapus_db($id){
			$this->db->where('kode',$id);
			$this->db->delete('pendaftaran');
		}

		function edit_db($data,$id){
			$this->db->where('kode',$id);
			$this->db->update('pendaftaran',$data);
		}

		function get_edit_db($id){
			$this->db->select('*');
			$this->db->from('pendaftaran');
			$this->db->where('kode',$id);
			return $this->db->get()->row();
		}
	}




	