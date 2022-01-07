<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

  public function __construct(){
    parent::__construct();
    // if(!$this->session->userdata('id_user'))
    //   redirect('login', 'refresh');

  }

  public function index(){
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/jadwal');
    $this->load->view('template/footer');
  }

  public function getAllData(){
  	$data['data'] = $this->db->get('tb_grup')->result();
  	echo json_encode($data);
  }

  public function getDataEvent(){
    $data['data'] = $this->db->query("SELECT a.id_event, a.nm_event, 
    DATE_FORMAT(a.tgl_event, '%d-%b-%Y') tgl_event, a.status, 
    (SELECT COUNT(*) FROM tb_pendaftaran WHERE id_event=a.id_event AND status_pendaftaran='AKTIF') jml_team
    FROM tb_event a ORDER BY tgl_event DESC")->result();
  	echo json_encode($data);
  }

  public function aturJadwal(){
    $team = $this->db->query("SELECT b.id_team, b.nm_team FROM tb_pendaftaran a, tb_team b
    WHERE a.id_team=b.id_team
    AND a.id_event='".$this->input->post('id_event')."'
    AND a.status_pendaftaran='AKTIF'")->result_array();

    $grup = $this->db->query("SELECT * FROM tb_grup 
              ORDER BY id_grup
              LIMIT ".$this->input->post('jmlGrup'))->result_array();
  }

}