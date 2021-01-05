<?php
class Loginsiswa extends CI_Controller {
function __construct(){
    parent::__construct();
    $this->load->library('form_validation');
  }
  public function index()
  {
    $this->form_validation->set_rules('username','username','required',[
    'required' => 'Username wajib disini!'
    ]);
    $this->form_validation->set_rules('password','password','required',[
    'required' => 'Password wajib disini!'
    ]); 

    if ($this->form_validation->run()==TRUE) 
    {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $this->siswa_login->login($username,$password);
    }
    $data = array('title' => 'Student Login Page');
    $this->load->view('loginsiswa', $data,FALSE);
  }
  public function logout()
  {
    $this->siswa_login->logout();
  }
  
}
