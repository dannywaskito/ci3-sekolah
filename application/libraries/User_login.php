<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_login
{
	protected $ci;
	public function __construct()
	{
		$this->ci =&get_instance();
		$this->ci->load->model('m_login');
	}
	public function login($username, $password)
	{

	$cek=$this->ci->m_login->login($username, $password);
	if ($cek) {
		$username  = $cek->username;
		$nama_user = $cek->nama_user;
		$level     = $cek->level;

		//session
		$this->ci->session->set_userdata('username', $username);
		$this->ci->session->set_userdata('nama_user', $nama_user);
		$this->ci->session->set_userdata('level', $level);
		redirect('admin');
	}else{
		$this->ci->session->set_flashdata('error','username atau password salah');
		redirect('login');
	}

	}
	public function ceklogin()
	{
		if ($this->ci->session->userdata('username')=="")
		 {
			$this->ci->session->set_flashdata('warning','anda belum login');
			redirect('login');
		}
	}
	public function validasi()
	{
		if ($this->ci->session->userdata('username')=="")
		 {
			// $this->ci->session->set_flashdata('warning','anda belum login');
			redirect('admin');
		}
	}
	public function logout(){
		$this->ci->session->unset_userdata('username');
		$this->ci->session->unset_userdata('nama_user');
		$this->ci->session->unset_userdata('level');
		$this->ci->session->set_flashdata('pesan','logout berhasil');
			redirect('login');
	}
}
