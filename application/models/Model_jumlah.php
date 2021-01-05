<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jumlah extends CI_Model {
public function get_siswa(){

	echo $this->db->count_all('tbl_siswa');
}
public function get_jurusan(){

	echo $this->db->count_all('tbl_jurusan');
}
public function get_mapel(){

	echo $this->db->count_all('tbl_mapel');
}
public function get_guru(){

	echo $this->db->count_all('tbl_guru');
}
public function get_admin(){

	echo $this->db->count_all('tbl_user');
}

}