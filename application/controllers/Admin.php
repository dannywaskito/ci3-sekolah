<?php
class Admin extends CI_Controller {
public function __construct(){
	parent::__construct();
	$this->load->model('m_login');
	$this->load->model('model_jumlah');
}
	public function index()
	{
		$data = array(

			'title'  => 'SMK Informatika',
			'title2' => 'Dashboard Administrator',
			'isi'    => 'admin/home'
	);

		$this->load->view('admin/layout/wrapper', $data,FALSE);
	}

	
	// public function profil()
	// {
	// 	$data = array(

	// 		'title'  => 'SMK Informatika',
	// 		'title2' => 'Profil Admin',
	// 		'isi'    => 'admin/profil'
	// );
	// 	$this->load->view('admin/layout/wrapper', $data,FALSE);
	// }
	public function list_admin()
	{
		$data = array(

			'title' => 'SMK Informatika',
			'title2' => 'List Admin',
			'admin'=> $this->m_login->list(),
			'isi' => 'admin/list_admin'
	);
		$this->load->view('admin/layout/wrapper', $data,FALSE);
	}
	public function add()
	{
		$data = array(
			'nama_user' => $this->input->post('nama_user'),
			'username'  => $this->input->post('username'),
			'password'  => $this->input->post('password'),
		);
		$this->m_login->add($data);
		$this->session->set_flashdata('admin','ditambah');
		redirect('admin/list_admin');
	}
	public function edit($id_user)
	{
		$data = array(
			'id_user'   => $id_user,
			'nama_user' => $this->input->post('nama_user'),
			'username' => $this->input->post('username'), 
			'password' => $this->input->post('password') 
		);
		$this->m_login->edit($data);
		$this->session->set_flashdata('admin','diedit');
		redirect('admin/list_admin');
	}
	public function delete($id_user)
	{
		$data = array(
			'id_user'   => $id_user,
		);
		$this->m_login->delete($data);
		$this->session->set_flashdata('admin','dihapus');
		redirect('admin/list_admin');
	}
}
