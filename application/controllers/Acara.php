<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acara extends CI_Controller { 

	function __construct(){
		parent::__construct();
		//load model
		$this->load->model('Acara_model');
		$this->load->model('JenisAcara_model');
		$this->load->model('KategoriAcara_model');
		$this->load->model('Penyelenggara_model');
		$this->load->model('Tempat_model');

		//load library
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url')); 
	}
 
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/dashboard');
		$this->load->view('templates/footer');
	} 

	public function lihat()
	{
		$data['list_acara']=$this->Acara_model->get_acara_db();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/acara/lihat',$data);
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$data['list_acara']=$this->Acara_model->get_acara_db();
		$data['jenis_acara']=$this->JenisAcara_model->get_jenisacara();
		$data['kategori_acara']=$this->KategoriAcara_model->get_kategoriacara();
		$data['penyelenggara']=$this->Penyelenggara_model->get_penyelenggara();
		$data['tempat']=$this->Tempat_model->get_tempat();
		$this->load->view('index/buat_event', $data);
		// $this->load->view('templates/header');
		// $this->load->view('templates/aside');
		// $this->load->view('pages/acara/add',$data);
		// $this->load->view('templates/footer');
	}

	public function add_proses(){ 
		// $data['list_acara']=$this->Acara_model->get_acara_db();
		$this->form_validation->set_rules('nama_acara','Nama Acara','required');
		$this->form_validation->set_rules('jenis_acara_idjenis_acara','Jenis Acara','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');
		$this->form_validation->set_rules('tanggal_mulai','Tanggal Mulai','required');
		$this->form_validation->set_rules('waktu_mulai','Waktu Mulai','required');
		$this->form_validation->set_rules('tanggal_akhir','Tanggal Akhir','required');
		$this->form_validation->set_rules('waktu_akhir','Waktu Akhir','required');
		$this->form_validation->set_rules('kategori_acara_idkategori_acara','Kategori Acara','required');
		$this->form_validation->set_rules('penyelenggara_id_penyelenggara','Penyelenggara','required');
		$this->form_validation->set_rules('gambar','gambar','required');
		$this->form_validation->set_rules('tempat_id_tempat','tempat','required');
		// $this->form_validation->set_rules('status','status','required');
		$this->form_validation->set_rules('kouta_peserta','kouta_peserta','required');
		$this->form_validation->set_rules('harga','harga','required');

			$config['upload_path'] = "./uploads/";
		    $config['allowed_types'] = 'gif|jpeg|png|jpg';
		    $config['max_height'] = '20000';
		    $config['max_width'] = '2048';
		    $config['max_size'] = '2048';
		    $this->load->library('upload',$config);
		    $this->path = './uploads/';
   
   			$this->upload->initialize($config);
		     	if ($this->form_validation->run() == FALSE && ! $this->upload->do_upload('gambar')) {
		     		
					
					$data['jenis_acara']=$this->JenisAcara_model->get_jenisacara();
					$data['kategori_acara']=$this->KategoriAcara_model->get_kategoriacara();
					$data['penyelenggara']=$this->Penyelenggara_model->get_penyelenggara();
					$data['tempat']=$this->Tempat_model->get_tempat();
					$data['gambar']=$this->upload->display_errors();
					$this->load->view('index/buat_event', $data);
					// $this->load->view('templates/header');
					// $this->load->view('templates/aside');
					// $this->load->view('pages//acara/add',$data);
					// $this->load->view('templatesfooter');	
				}
				else{
					$dataUpload = $this->upload->data();

					$data=array(
						'nama_acara'=>$this->input->post('nama_acara'),
						'jenis_acara_idjenis_acara'=>$this->input->post('jenis_acara_idjenis_acara'),
						'deskripsi'=>$this->input->post('deskripsi'),
						'tanggal_mulai' => date_format(date_create($this->input->post('tanggal_mulai')), 'Y-m-d'),
						'waktu_mulai'=>$this->input->post('waktu_mulai'),
						'tanggal_akhir' => date_format(date_create($this->input->post('tanggal_akhir')), 'Y-m-d'),
						'waktu_akhir'=>$this->input->post('waktu_akhir'),
						'kategori_acara_idkategori_acara'=>$this->input->post('kategori_acara_idkategori_acara'),
						'penyelenggara_id_penyelenggara'=>$this->input->post('penyelenggara_id_penyelenggara'),
						'gambar'=> $dataUpload['file_name'],
						 'tempat_id_tempat'=>$this->input->post('tempat_id_tempat'),
						 'status'=>$this->input->post('status'),
						 'kouta_peserta'=>$this->input->post('kouta_peserta'),
						 'harga'=>$this->input->post('harga'),
						
					);   	
				$this->Acara_model->add($data);
				redirect('Acara/add');
			}
	}


	function hapus($id){
		$this->Acara_model->hapus($id);
		redirect('Acara/lihat');	
	}

	public function edit($id)
	{

		$data['acara']=$this->Acara_model->get_edit_db($id);
		$data['jenis_acara']=$this->JenisAcara_model->get_jenisacara();
		$data['kategori_acara']=$this->KategoriAcara_model->get_kategoriacara();
		$data['penyelenggara']=$this->Penyelenggara_model->get_penyelenggara();
		$data['tempat']=$this->Tempat_model->get_tempat();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/acara/edit', $data);
		$this->load->view('templates/footer');

	}

	public function edit_proses()
	{
		$this->form_validation->set_rules('nama_acara','Nama Acara','required');
		$this->form_validation->set_rules('jenis_acara_idjenis_acara','Jenis Acara','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');
		$this->form_validation->set_rules('tanggal_mulai','Tanggal Mulai','required');
		$this->form_validation->set_rules('waktu_mulai','Waktu Mulai','required');
		$this->form_validation->set_rules('tanggal_akhir','Tanggal Akhir','required');
		$this->form_validation->set_rules('waktu_akhir','Waktu Akhir','required');
		$this->form_validation->set_rules('kategori_acara_idkategori_acara','Kategori Acara','required');
		$this->form_validation->set_rules('penyelenggara_id_penyelenggara','Penyelenggara','required');
		$this->form_validation->set_rules('gambar','gambar','required');
		$this->form_validation->set_rules('tempat_id_tempat','tempat','required');
		$this->form_validation->set_rules('kouta_peserta','Kouta Peserta','required');
		$this->form_validation->set_rules('harga','Harga','required');

			$config['upload_path'] = "./uploads/";
		    $config['allowed_types'] = 'gif|jpeg|png|jpg';
		    $config['max_height'] = '20000';
		    $config['max_width'] = '2048';
		    $config['max_size'] = '2048';
		    $this->load->library('upload',$config);
		    $this->path = './uploads/';
   
   			$this->upload->initialize($config);
		     	if ($this->form_validation->run() == FALSE && ! $this->upload->do_upload('gambar')) {
		     		$id = $this->input->post('id');
		     		$data['acara']=$this->Acara_model->get_edit_db($id);
		     		$data['jenis_acara']=$this->JenisAcara_model->get_jenisacara();
					$data['kategori_acara']=$this->KategoriAcara_model->get_kategoriacara();
					$data['penyelenggara']=$this->Penyelenggara_model->get_penyelenggara();
					$data['tempat']=$this->Tempat_model->get_tempat();
					$data['gambar']=$this->upload->display_errors();
					$this->load->view('templates/header');
					$this->load->view('templates/aside');
					$this->load->view('pages/acara/edit', $data);
					$this->load->view('templates/footer');
				
				}
				else{
					$id=$this->input->post('id_acara');
					$dataUpload = $this->upload->data();

					$data=array(
						'id_acara'=>$this->input->post('id_acara'),
						'nama_acara'=>$this->input->post('nama_acara'),
						'jenis_acara_idjenis_acara'=>$this->input->post('jenis_acara_idjenis_acara'),
						'deskripsi'=>$this->input->post('deskripsi'),
						'tanggal_mulai' => date_format(date_create($this->input->post('tanggal_mulai')), 'Y-m-d'),
						'waktu_mulai'=>$this->input->post('waktu_mulai'),
						'tanggal_akhir' => date_format(date_create($this->input->post('tanggal_akhir')), 'Y-m-d'),
						'waktu_akhir'=>$this->input->post('waktu_akhir'),
						'kategori_acara_idkategori_acara'=>$this->input->post('kategori_acara_idkategori_acara'),
						'penyelenggara_id_penyelenggara'=>$this->input->post('penyelenggara_id_penyelenggara'),
						'gambar'=> $dataUpload['file_name'],
						'tempat_id_tempat'=>$this->input->post('tempat_id_tempat'),
						'status'=>$this->input->post('status'),
						'kouta_peserta'=>$this->input->post('kouta_peserta'),
						'harga'=>$this->input->post('harga'),
						
					);   	
				$this->Acara_model->edit($data,$id);
				redirect('Acara/add');
			}
		
		}
		public function update_status($status, $id){
			if ($this->Acara_model->update_status($status, $id)) {
				redirect('Acara/lihat');
			}else{
				redirect('Acara/lihat');
			}
		}
} 
