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

  public function getEventPertandingan(){
    $data['data'] = $this->db->query("SELECT a.id_event, a.nm_event, 
    DATE_FORMAT(a.tgl_event, '%d-%b-%Y') tgl_event, a.status
    FROM tb_event a 
    WHERE id_event IN(
      SELECT DISTINCT id_event FROM tb_jadwal_grup
    )
    AND id_event NOT IN(
      SELECT DISTINCT id_event FROM tb_pertandingan
    )
    ORDER BY tgl_event DESC")->result();
  	echo json_encode($data);
  }

  public function PembagianGrup(){

    $this->db->where('id_event', $this->input->post('id_event'));
    $this->db->delete('tb_jadwal_grup');

    $team = $this->db->query("SELECT b.id_team, b.nm_team FROM tb_pendaftaran a, tb_team b
    WHERE a.id_team=b.id_team
    AND a.id_event='".$this->input->post('id_event')."'
    AND a.status_pendaftaran='AKTIF'")->result_array();
    shuffle($team);

    $grup = $this->db->query("SELECT * FROM tb_grup 
              ORDER BY id_grup
              LIMIT ".$this->input->post('jmlGrup'))->result_array();

    $j = 0;
    $batas = $this->input->post('jmlTeamGrup');
    foreach($grup as $dtGrup){
      
      for($i=0;$i<$batas;$i++){

        $data = array(
          "id_team" => $team[$j]['id_team'],
          "id_event" => $this->input->post('id_event'),
          "id_grup" => $dtGrup['id_grup'],
        );
        $this->db->insert('tb_jadwal_grup', $data);

        $j++;
      }
      $i=0;
    }

    $output = array("status" => "success", "message" => "Pembagian Grup Berhasil");
    echo json_encode($output);
  }

  public function getPembagianGrup(){
    $data['data'] = $this->db->query("SELECT a.*, b.nm_team, c.nm_grup FROM tb_jadwal_grup a, tb_team b, tb_grup c
    WHERE a.id_team=b.id_team
    AND a.id_grup=c.id_grup
    AND a.id_event='".$this->input->post('id_event')."'
    ORDER BY a.id_grup")->result();
  	echo json_encode($data);
  }

  public function pertandingan(){
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/pertandingan');
    $this->load->view('template/footer');
  }

  public function showJadwal(){
    $id_event = $this->input->post('id_event');
    $arr=array();
    $i=0;
    $j=0;
    $dtGrup = $this->db->query("
        SELECT * FROM tb_grup WHERE id_grup IN(
          SELECT DISTINCT id_grup FROM tb_jadwal_grup WHERE id_event='".$id_event."'
        )
        ORDER BY id_grup
    ")->result_array();

    foreach($dtGrup as $grup){
      $dtTeam = $this->db->query("
        SELECT id_team, nm_team FROM tb_team WHERE id_team IN(
          SELECT id_team FROM tb_jadwal_grup WHERE id_event='".$id_event."'
          AND id_grup='".$grup['id_grup']."'
        )
      ")->result_array();

      foreach ($dtTeam as $team) {
        foreach ($dtTeam as $teams) {
          if ($team <> $teams) {
            $unik = 'VS'.date('Ym');
            $kode = $this->db->query("select MAX(id_pertandingan) LAST_NO from tb_pertandingan WHERE id_pertandingan LIKE '".$unik."%'")->row()->LAST_NO;
            
            $urutan = (int) substr($kode, -5);
            $urutan++;
            $kode = $unik . sprintf("%05s", $urutan);

            $data = array(
                      "id_pertandingan" => $kode,
                      "id_grup" => $grup['id_grup'],
                      "id_event" => $id_event,
                    );
            $this->db->insert('tb_pertandingan', $data);

            $data = array(
                      "id_pertandingan" => $kode,
                      "id_team" => $team['id_team'],
                    );
            $this->db->insert('tb_dtl_pertandingan', $data);

            $data = array(
                      "id_pertandingan" => $kode,
                      "id_team" => $teams['id_team'],
                    );
            $this->db->insert('tb_dtl_pertandingan', $data);
            
            
            $arr[$j]['id_grup']=$grup['id_grup'];
            $arr[$j]['nm_grup']=$grup['nm_grup'];
            $arr[$j]['detail'][$i]['id_pertandingan']=$kode;
            $arr[$j]['detail'][$i]['id_team1']=$team['id_team'];
            $arr[$j]['detail'][$i]['nm_team1']=$team['nm_team'];
            $arr[$j]['detail'][$i]['id_team2']=$teams['id_team'];
            $arr[$j]['detail'][$i]['nm_team2']=$teams['nm_team'];
            $i++;
          }
          
        }
      }
      $j++;
    }

    echo json_encode($arr);

  }

  public function updateJadwal(){

    foreach($this->input->post('id_pertandingan') as $key => $each){
      $data = array(
        "tgl_pertandingan" => date("Y-m-d H:i:s", strtotime($this->input->post('tgl_pertandingan')[$key].' '.$this->input->post('waktu_pertandingan')[$key])),
      );
      $this->db->where('id_pertandingan', $this->input->post('id_pertandingan')[$key]);
      $this->db->update('tb_pertandingan', $data);
      // echo date("Y-m-d H:i:s", strtotime($this->input->post('tgl_pertandingan')[$key].' '.$this->input->post('waktu_pertandingan')[$key]));
    }

    $output = array("status" => "success", "message" => "Jadwal Berhasil di Update");
    echo json_encode($output);

  }

  public function jadwalPertandingan(){
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/jadwalPertandingan');
    $this->load->view('template/footer');
  }

  public function getJadwalPertandingan(){
    $data['data'] = $this->db->query("
        SELECT TB1.id_pertandingan, TB1.id_event, TB1.id_grup, TB1.nm_grup, 
        DATE_FORMAT(TB1.tgl_pertandingan, '%d-%b-%Y') tgl_pertandingan,
        DATE_FORMAT(TB1.tgl_pertandingan, '%H:%i') waktu_pertandingan,
        CONCAT(TB2.nm_team,' VS ',TB3.nm_team) nm_team FROM(
          SELECT a.id_pertandingan, a.tgl_pertandingan, a.id_grup,b.nm_grup, a.id_event,
          (SELECT id_team FROM tb_dtl_pertandingan WHERE id_pertandingan=a.id_pertandingan limit 1) team1,
          (SELECT id_team FROM tb_dtl_pertandingan WHERE id_pertandingan=a.id_pertandingan limit 1,1) team2
          FROM tb_pertandingan a, tb_grup b
          WHERE a.id_grup=b.id_grup
        ) TB1, tb_team TB2, tb_team TB3
        WHERE TB1.team1=TB2.id_team
        AND TB1.team2=TB3.id_team
        AND TB1.id_event='".$this->input->post('id_event')."'
    ")->result();
  	echo json_encode($data);
  }

  public function getEventTanding(){
    $data['data'] = $this->db->query("SELECT a.id_event, a.nm_event, 
    DATE_FORMAT(a.tgl_event, '%d-%b-%Y') tgl_event, a.status
    FROM tb_event a 
    WHERE id_event IN(
      SELECT DISTINCT id_event FROM tb_pertandingan
    )
    ORDER BY tgl_event DESC")->result();
  	echo json_encode($data);
  }

  public function updateJadwalPertandingan(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('id_pertandingan', 'ID Pertandingan', 'required');
    $this->form_validation->set_rules('tgl_pertandingan', 'Tanggal Pertandingan', 'required');
    $this->form_validation->set_rules('waktu_pertandingan', 'Waktu Pertandingan', 'required');

    if($this->form_validation->run() == FALSE){
      // echo validation_errors();
      $output = array("status" => "error", "message" => validation_errors());
      echo json_encode($output);
      return false;
    }

    $data = array(
      "tgl_pertandingan" => date("Y-m-d H:i:s", strtotime($this->input->post('tgl_pertandingan').' '.$this->input->post('waktu_pertandingan'))),
    );
    $this->db->where('id_pertandingan', $this->input->post('id_pertandingan'));
    $this->db->update('tb_pertandingan', $data);
    if($this->db->error()['message'] != ""){
      $output = array("status" => "error", "message" => $this->db->error()['message']);
      echo json_encode($output);
      return false;
    }
    $output = array("status" => "success", "message" => "Data Berhasil di Update");
    echo json_encode($output);
  }

  public function HasilPertandingan(){
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/hasilPertandingan');
    $this->load->view('template/footer');
  }

  public function getHasilPertandingan(){
    $data['data'] = $this->db->query("
        SELECT TB1.id_pertandingan, TB1.id_event, TB1.id_grup, TB1.nm_grup, 
        DATE_FORMAT(TB1.tgl_pertandingan, '%d-%b-%Y') tgl_pertandingan,
        DATE_FORMAT(TB1.tgl_pertandingan, '%H:%i') waktu_pertandingan,
        CONCAT(TB2.nm_team,' VS ',TB3.nm_team) nm_team, 
        TB2.nm_team nm_team1, TB3.nm_team nm_team2,
        TB1.team1, TB1.team2,
        (SELECT CASE WHEN dtl.hasil='SERI' THEN 'SERI' ELSE (SELECT nm_team FROM tb_team WHERE id_team=dtl.id_team)  END FROM tb_dtl_pertandingan dtl WHERE dtl.id_pertandingan=TB1.id_pertandingan AND dtl.hasil IN ('MENANG','SERI') limit 1) HASIL
        FROM(
          SELECT a.id_pertandingan, a.tgl_pertandingan, a.id_grup,b.nm_grup, a.id_event,
          (SELECT id_team FROM tb_dtl_pertandingan WHERE id_pertandingan=a.id_pertandingan limit 1) team1,
          (SELECT id_team FROM tb_dtl_pertandingan WHERE id_pertandingan=a.id_pertandingan limit 1,1) team2
          FROM tb_pertandingan a, tb_grup b
          WHERE a.id_grup=b.id_grup
        ) TB1, tb_team TB2, tb_team TB3
        WHERE TB1.team1=TB2.id_team
        AND TB1.team2=TB3.id_team
        AND TB1.id_event='".$this->input->post('id_event')."'
    ")->result();
  	echo json_encode($data);
  }

}