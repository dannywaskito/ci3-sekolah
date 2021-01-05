<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {
public function login($username, $password){
		$this->db->select('*');
		$this->db->from('tbl_siswa');
		$this->db->where($array = array(

			'nis' 	   => $username, 
			'password' => $password, 
	));
		return $this->db->get()->row();
}
	public function list(){
		$this->db->select('*');
		$this->db->from('tbl_siswa');
		$this->db->join('tbl_jurusan','tbl_jurusan.id_jurusan = tbl_siswa.id_jurusan','left');
		$this->db->order_by('nis');
		return $this->db->get()->result();
	}
	public function detail($id_siswa)
	{
		$this->db->select('*');
		$this->db->from('tbl_siswa');
		$this->db->join('tbl_jurusan','tbl_jurusan.id_jurusan = tbl_siswa.id_jurusan','left');
		$this->db->where('id_siswa', $id_siswa);
		return $this->db->get()->row();

	}
	public function add($data)
{
	$this->db->insert('tbl_siswa', $data);
}
public function edit($data)
{
	$this->db->where('id_siswa', $data['id_siswa']);
	$this->db->update('tbl_siswa', $data);
}
public function delete($data)
{
	$this->db->where('id_siswa', $data['id_siswa']);
	$this->db->delete('tbl_siswa', $data);
}
}