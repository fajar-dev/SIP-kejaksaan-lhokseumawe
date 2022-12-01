<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
  public function index()
	{
    $data['pending'] = $this->db->get_where('tbl_pengajuan', ['status' => 0])->num_rows();

    $this->db->select('*');
    $this->db->where('status', 1);
    $this->db->or_where('status', 2);
    $this->db->or_where('status', 3);
    $query = $this->db->get('tbl_pengajuan');
    $data['proses'] = $query->num_rows();

    $this->db->select('*');
    $this->db->where('status', 4);
    $this->db->or_where('status', 5);
    $query = $this->db->get('tbl_pengajuan');
    $data['selesai'] = $query->num_rows();

    $data['title'] = "Dashboard";
    $this->load->view('include/header', $data);
    $this->load->view('include/sidebar');
		$this->load->view('dashboard');
    $this->load->view('include/footer');
	}

  public function jaksa()
	{
    $data['hasil'] = $this->db->get('tbl_jaksa')->result();
    $data['title'] = "Jaksa";
    $this->load->view('include/header', $data);
    $this->load->view('include/sidebar');
		$this->load->view('jaksa');
    $this->load->view('include/footer');
	}
}
