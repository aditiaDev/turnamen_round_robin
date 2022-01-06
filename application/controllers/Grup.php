<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grup extends CI_Controller {

  public function __construct(){
    parent::__construct();
    // if(!$this->session->userdata('id_user'))
    //   redirect('login', 'refresh');

  }

  public function index(){
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/grup');
    $this->load->view('template/footer');
  }

  public function getAllData(){
  	$data['data'] = $this->db->get('tb_team')->result();
  	echo json_encode($data);
  }

}