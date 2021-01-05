<?php
class Home extends CI_Controller {

	public function index()
	{
		$data = array(

			'title' => 'SMK Informatika - Halaman Utama',
			'isi' => 'home'
	);
		$this->load->view('layout/wrapper', $data,FALSE);
	}
}
