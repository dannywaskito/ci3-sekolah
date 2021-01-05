<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

public function __construct(){
	parent::__construct();
	$this->load->model('m_jurusan');
	$this->load->library('form_validation');
}
	public function index()
	{
		$data = array(

			'title'  => 'SMK Informatika',
			'title2' => 'Jurusan',
			'jurusan'=> $this->m_jurusan->list(),
			'isi'    => 'admin/jurusan'
	);
		$this->load->view('admin/layout/wrapper', $data,FALSE);
	}
	public function add()
	{
		$this->form_validation->set_rules('nama_jurusan','Nama Jurusan','required',[
		'required' => 'Jurusan wajib disini!'
		]);
		 if ($this->form_validation->run() == FALSE)
         {
              $this->load->view('jurusan/add');
         }else
         {
         	$data = array(
			'nama_jurusan' => $this->input->post('nama_jurusan') 
		);
         }
		
		$this->m_jurusan->add($data);
		$this->session->set_flashdata('jurusan','ditambah');
		redirect('jurusan');
	}
	public function edit($id_jurusan)
	{
		$data = array(
			'id_jurusan'   => $id_jurusan,
			'nama_jurusan' => $this->input->post('nama_jurusan') 
		);
		$this->m_jurusan->edit($data);
		$this->session->set_flashdata('jurusan','diedit');
		redirect('jurusan');
	}
	public function delete($id_jurusan)
	{
		$data = array(
			'id_jurusan'   => $id_jurusan,
		);
		$this->m_jurusan->delete($data);
		$this->session->set_flashdata('jurusan','dihapus');
		redirect('jurusan');
	}
}
