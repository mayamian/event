<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Profil extends CI_Controller
	{
		
		public function index ()
		{
			//ketika menggunakan base_url harus menggunakan helper
			// $this->load->helper('url'); //untuk banyaknya function maka helper di taruh di autoload

			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/profil');
			$this->load->view('templates/footer');
		}
	}
 ?>