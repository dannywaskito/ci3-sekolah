<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function login($username, $password){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where($array = array(

			'username' => $username, 
			'password' => $password, 
	));
		return $this->db->get()->row();
}
public function list(){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->order_by('id_user','desc');
		return $this->db->get()->result();
}
public function add($data)
{
	$this->db->insert('tbl_user', $data);
}
public function edit($data)
{
	$this->db->where('id_user', $data['id_user']);
	$this->db->update('tbl_user', $data);
}
public function delete($data)
{
	$this->db->where('id_user', $data['id_user']);
	$this->db->delete('tbl_user', $data);
}
}
