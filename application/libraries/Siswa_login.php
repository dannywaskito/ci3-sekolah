<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_login
{
	protected $ci;
	public function __construct()
	{
		$this->ci =&get_instance();
		$this->ci->load->model('m_siswa');
	}
	public function login($username, $password)
	{

	$cek=$this->ci->m_siswa->login($username, $password);
	if ($cek) {
		$nis        = $cek->username;
		$nama_siswa = $cek->nama_siswa;

		//session
		$this->ci->session->set_userdata('username', $username);
		$this->ci->session->set_userdata('nama_siswa', $nama_siswa);
		redirect('dasbor');
	}else{
		$this->ci->session->set_flashdata('error','username atau password salah');
		redirect('loginsiswa');
	}

	}
	public function ceklogin()
	{
		if ($this->ci->session->userdata('username')=="")
		 {
			$this->ci->session->set_flashdata('warning','anda belum login');
			redirect('loginsiswa');
		}
	}
	public function validasi()
	{
		if ($this->ci->session->userdata('username')=="")
		 {
			// $this->ci->session->set_flashdata('warning','anda belum login');
			redirect('dasbor');
		}
	}
	public function logout(){
		$this->ci->session->unset_userdata('username');
		$this->ci->session->unset_userdata('nama_siswa');
		$this->ci->session->set_flashdata('pesan','logout berhasil');
			redirect('loginsiswa');
	}
}
