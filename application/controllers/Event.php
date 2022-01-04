<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

  public function __construct(){
    parent::__construct();
    // if(!$this->session->userdata('id_user'))
    //   redirect('login', 'refresh');

  }

  public function index(){
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/event');
    $this->load->view('template/footer');
  }

  public function getAllData(){
  	$data['data'] = $this->db->query("
      SELECT id_event, nm_event, DATE_FORMAT(tgl_event, '%d-%b-%Y') tgl_event, 
      CONCAT(DATE_FORMAT(tgl_start_pendaftaran, '%d-%b-%Y %H:%i'), '<br>Sampai<br>', DATE_FORMAT(tgl_selesai_pendaftaran, '%d-%b-%Y %H:%i')) tgl_pendaftaran,
      status , biaya_pendaftaran
      FROM tb_event
      ORDER BY tgl_event DESC
    ")->result();
  	echo json_encode($data);
  }

  public function addData(){
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/addEvent');
    $this->load->view('template/footer');
  }

}