<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skor extends CI_Controller {

  public function __construct(){
    parent::__construct();
    // if(!$this->session->userdata('id_user'))
    //   redirect('login', 'refresh');

  }

  public function index(){
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/skorTeam');
    $this->load->view('template/footer');
  }

  public function getAllData(){
    $sql = "SELECT id_team, nm_team, SUM(MENANG) MENANG, SUM(KALAH) KALAH, SUM(SERI) SERI FROM(
                SELECT C.id_team, C.nm_team, CASE WHEN B.hasil='MENANG' THEN 1 END MENANG, 
                CASE WHEN B.hasil='KALAH' THEN 1 END KALAH, 
                CASE WHEN B.hasil='SERI' THEN 1 END SERI
                FROM tb_pertandingan A, tb_dtl_pertandingan B, tb_team C
                WHERE A.id_pertandingan=B.id_pertandingan
                AND B.id_team=C.id_team
            ) AS ASD
            GROUP BY id_team, nm_team";
  	$data['data'] = $this->db->query($sql)->result();
  	echo json_encode($data);
  }

}