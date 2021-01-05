<?php
class Dasbor extends CI_Controller {

public function index()
	{
		$data = array(

			'title'  => 'Dashboard Siswa',
			'title2' => 'Halaman Utama Dashboard',
			'isi'    => 'dashboard/home'
	);
		$this->load->view('dashboard/layout/wrapper', $data,FALSE);
	}

}