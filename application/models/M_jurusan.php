<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jurusan extends CI_Model {

	public function list(){
		$this->db->select('*');
		$this->db->from('tbl_jurusan');
		$this->db->order_by('id_jurusan','desc');
		return $this->db->get()->result();
}
public function add($data)
{
	$this->db->insert('tbl_jurusan', $data);
}
public function edit($data)
{
	$this->db->where('id_jurusan', $data['id_jurusan']);
	$this->db->update('tbl_jurusan', $data);
}
public function delete($data)
{
	$this->db->where('id_jurusan', $data['id_jurusan']);
	$this->db->delete('tbl_jurusan', $data);
}

}
