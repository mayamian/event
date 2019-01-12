<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this->load->model('Kategorip_model');
	$this->load->model('Kategori_model');
	}

	public function index()
	{
		$this->load->view('index/home');
	}

	public function login_penyelenggara(){
		$data['kategori_penyelenggara']=$this->Kategori_model->get_kategorip();
		$this->load->view('index/login_penyelenggara',$data);
	}

	public function data_event(){
		$this->load->view('index/list_event');
	}

	public function login_peserta(){
		$data['kategori_peserta']=$this->Kategorip_model->get_kategorip();
		$this->load->view('index/login_peserta', $data);
	}

	public function konfirmasi_event(){
		$this->load->view('index/konfirmasi_event');
	}

	public function home_peserta(){
		$this->load->view('index/home_peserta');
	}

	public function kelola_acara(){
		$this->load->view('index/manage_event');
	}

	public function statistik(){
		$this->load->view('index/statistik');
	}
}