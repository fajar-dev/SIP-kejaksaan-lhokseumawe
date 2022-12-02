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

    $data['title'] = "Pending";
    $this->load->view('include/header', $data);
    $this->load->view('include/sidebar');
		$this->load->view('pending');
    $this->load->view('include/footer');
	}

}
