<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

  public function __construct(){
    parent::__construct();

  }

  public function index(){
    // $this->load->view('front/atas');
    $this->load->view('front/index');
  }

  public function showEvent(){
    $tgl_mulai=$this->input->post('tanggal_mulai');
    $tgl_sampai=$this->input->post('tanggal_sampai');
    if($tgl_mulai<>"" AND $tgl_sampai<>""){
      $where_tgl="AND DATE_FORMAT(tgl_event, '%d-%b-%Y') >= '".$this->input->post('tanggal_mulai')."'
                  AND DATE_FORMAT(tgl_event, '%d-%b-%Y') <= '".$this->input->post('tanggal_sampai')."'";
    }
    $rows = $this->db->query("
        SELECT id_event, nm_event, DATE_FORMAT(tgl_event, '%d-%b-%Y') tgl_event, 
        CONCAT(DATE_FORMAT(tgl_start_pendaftaran, '%d-%b-%y %H:%i'), ' - ', DATE_FORMAT(tgl_selesai_pendaftaran, '%d-%b-%y %H:%i')) tgl_pendaftaran,
        status, biaya_pendaftaran
        FROM tb_event
        WHERE 
        status LIKE '%".$this->input->post('status')."%' 
        ".@$where_tgl."
        ORDER BY tgl_event ASC
    ")->result_array();
    $i=0;
    foreach($rows as $row){
      $data[$i]['id_event'] = $row['id_event'];
      $data[$i]['nm_event'] = $row['nm_event'];
      $data[$i]['tgl_event'] = $row['tgl_event'];
      $data[$i]['tgl_pendaftaran'] = $row['tgl_pendaftaran'];
      $data[$i]['biaya_pendaftaran'] = number_format($row['biaya_pendaftaran'],2,',','.');
      $i++;
    }

  	echo json_encode($data);
  }

  public function addTeam(){
    $this->load->view('front/addTeam');
  }

}