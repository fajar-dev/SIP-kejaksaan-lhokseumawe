<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengajuan extends CI_Controller {

  function __construct(){
		parent::__construct();
    if($this->session->userdata('status') != "login"){
      redirect(base_url('login'));
    }
	}

  public function index()
	{
    $q = $this->db->select('*')->from('tbl_pengajuan')->join('tbl_jaksa', 'tbl_jaksa.id=tbl_pengajuan.id_jaksa', 'left')->where('status', 0)->get();
    $data['hasil'] = $q->result();
    // print_r($data);die;
    $data['title'] = "Pending";
    $this->load->view('include/header', $data);
    $this->load->view('include/sidebar');
		$this->load->view('pending');
    $this->load->view('include/footer');
	}

  public function disposisi_1()
	{
    $q = $this->db->select('*')->from('tbl_pengajuan')->join('tbl_jaksa', 'tbl_jaksa.id=tbl_pengajuan.id_jaksa', 'left')->where('status', 0)->get();
    $data['hasil'] = $q->result();
    // print_r($data);die;
    $data['title'] = "Disposisi 1";
    $this->load->view('include/header', $data);
    $this->load->view('include/sidebar');
		$this->load->view('pending');
    $this->load->view('include/footer');
	}

  public function disposisi_2()
	{
    $q = $this->db->select('*')->from('tbl_pengajuan')->join('tbl_jaksa', 'tbl_jaksa.id=tbl_pengajuan.id_jaksa', 'left')->where('status', 0)->get();
    $data['hasil'] = $q->result();
    $data['title'] = "Disposisi 2";
    $this->load->view('include/header', $data);
    $this->load->view('include/sidebar');
		$this->load->view('pending');
    $this->load->view('include/footer');
	}

}
