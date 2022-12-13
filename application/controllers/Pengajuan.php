<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengajuan extends CI_Controller {

  function __construct(){
		parent::__construct();
    $this->config->load('mail');
    if($this->session->userdata('status') != "login"){
      redirect(base_url('login'));
    }
	}

  public function index()
	{
    $q = $this->db->select('*')->from('tbl_pengajuan')->join('tbl_jaksa', 'tbl_jaksa.id_jaksa=tbl_pengajuan.id_jaksa', 'left')->where('status', 0)->get();
    $data['hasil'] = $q->result();
    // print_r($data);die;
    $data['title'] = "Pending";
    $this->load->view('include/header', $data);
    $this->load->view('include/sidebar');
		$this->load->view('pending');
    $this->load->view('include/footer');
	}

  public function add_disposisi_1()
	{
		$data = array(
						'id_pengajuan' => $this->input->post('id'),
						'urut' => 1,
						'tanggal_pertemuan' => $this->input->post('tgl'),
						'isi' => $this->input->post('isi'),
		);
		$this->db->insert('tbl_disposisi',$data);
    $this->db->set('status', 1);
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('tbl_pengajuan');
    $this->_sendEmail($this->input->post('id'), $this->input->post('tgl'), 'acc');
		redirect(base_url('pengajuan'));
  }

  public function tolak_pending($id)
	{
    $this->db->set('status', 5);
    $this->db->where('id', $id);
    $this->db->update('tbl_pengajuan');
    $this->_sendEmail($id, 0, 'tolak');
		redirect(base_url('pengajuan'));
  }


  public function disposisi_1()
	{
    $q = $this->db->select('*')->from('tbl_pengajuan')->join('tbl_jaksa', 'tbl_jaksa.id_jaksa=tbl_pengajuan.id_jaksa', 'left')->join('tbl_disposisi', 'tbl_disposisi.id_pengajuan=tbl_pengajuan.id', 'left')->where('status', 1)->where('urut', 1)->get();
    $data['hasil'] = $q->result();
    // print_r($data);die;
    $data['title'] = "Disposisi 1";
    $this->load->view('include/header', $data);
    $this->load->view('include/sidebar');
		$this->load->view('disposisi_1');
    $this->load->view('include/footer');
	}

  public function add_disposisi_2()
	{
		$data = array(
						'id_pengajuan' => $this->input->post('id'),
						'urut' => 2,
						'tanggal_pertemuan' => $this->input->post('tgl'),
						'isi' => $this->input->post('isi'),
		);
		$this->db->insert('tbl_disposisi',$data);
    $this->db->set('status', 2);
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('tbl_pengajuan');
    $this->_sendEmail($this->input->post('id'), $this->input->post('tgl'), 'acc');
		redirect(base_url('pengajuan/disposisi_1'));
  }

  public function selesai_disposisi_1($id)
	{
    $this->db->set('status', 4);
    $this->db->where('id', $id);
    $this->db->update('tbl_pengajuan');
    $this->_sendEmail($id, 0, 'selesai');
		redirect(base_url('pengajuan/disposisi_1'));
  }

  public function disposisi_2()
	{
    $q = $this->db->select('*')->from('tbl_pengajuan')->join('tbl_jaksa', 'tbl_jaksa.id_jaksa=tbl_pengajuan.id_jaksa', 'left')->join('tbl_disposisi', 'tbl_disposisi.id_pengajuan=tbl_pengajuan.id', 'left')->where('status', 2)->where('urut', 2)->get();
    $data['hasil'] = $q->result();
    $data['title'] = "Disposisi 2";
    $this->load->view('include/header', $data);
    $this->load->view('include/sidebar');
		$this->load->view('disposisi_2');
    $this->load->view('include/footer');
	}

  public function add_disposisi_3()
	{
		$data = array(
						'id_pengajuan' => $this->input->post('id'),
						'urut' => 3,
						'tanggal_pertemuan' => $this->input->post('tgl'),
						'isi' => $this->input->post('isi'),
		);
		$this->db->insert('tbl_disposisi',$data);
    $this->db->set('status', 3);
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('tbl_pengajuan');
    $this->_sendEmail($this->input->post('id'), $this->input->post('tgl'), 'acc');
		redirect(base_url('pengajuan/disposisi_2'));
  }

  public function selesai_disposisi_2($id)
	{
    $this->db->set('status', 4);
    $this->db->where('id', $id);
    $this->db->update('tbl_pengajuan');
    $this->_sendEmail($id, 0, 'selesai');
		redirect(base_url('pengajuan/disposisi_2'));
  }


  public function disposisi_3()
	{
    $q = $this->db->select('*')->from('tbl_pengajuan')->join('tbl_jaksa', 'tbl_jaksa.id_jaksa=tbl_pengajuan.id_jaksa', 'left')->join('tbl_disposisi', 'tbl_disposisi.id_pengajuan=tbl_pengajuan.id', 'left')->where('status', 3)->where('urut', 3)->get();
    $data['hasil'] = $q->result();
    $data['title'] = "Disposisi 3";
    $this->load->view('include/header', $data);
    $this->load->view('include/sidebar');
		$this->load->view('disposisi_3');
    $this->load->view('include/footer');
	}

  public function selesai_disposisi_3($id)
	{
    $this->db->set('status', 4);
    $this->db->where('id', $id);
    $this->db->update('tbl_pengajuan');
    $this->_sendEmail($id, 0, 'selesai');
		redirect(base_url('pengajuan/disposisi_3'));
  }


  public function selesai()
	{
    $q = $this->db->select('*')->from('tbl_pengajuan')->join('tbl_jaksa', 'tbl_jaksa.id_jaksa=tbl_pengajuan.id_jaksa', 'left')->where('status', 4)->or_where('status', 5)->get();
    $data['hasil'] = $q->result();
    // print_r($data);die();
    $data['title'] = "Selesai";
    $this->load->view('include/header', $data);
    $this->load->view('include/sidebar');
		$this->load->view('selesai');
    $this->load->view('include/footer');
	}

  public function detail($id)
	{
    $q = $this->db->select('*')->from('tbl_disposisi')->where('id_pengajuan', $id)->get();
    $data['hasil'] = $q->result();
    $q = $this->db->select('*')->from('tbl_pengajuan')->where('id', $id)->get();
    $data['data'] = $q->row_array();
    $q = $this->db->select('*')->from('tbl_jaksa')->where('id_jaksa', $data['data']['id_jaksa'])->get();
    $data['jaksa'] = $q->row_array();
    $data['title'] = "Detail Disposisi";
      // print_r($data);die();
    $this->load->view('include/header', $data);
    $this->load->view('include/sidebar');
		$this->load->view('detail');
    $this->load->view('include/footer');
	}

  private function _sendEmail($id, $tgl, $type)
  {
      $user = $this->db->get_where('tbl_pengajuan', ['id' => $id])->row();
      $this->load->library('email');
      $config = $this->config->item('mail');
      $addreas = $this->config->item('addreas');
      $this->email->initialize($config);
      $this->email->set_newline("\r\n");
      $this->email->from($addreas, 'Kejati-Lhokseumawe');
      $this->email->to($user->email);
      if ($type == 'acc') {
          $this->email->subject('Notifikasi');
          $this->email->message('
          <p>pertemuan anda dengan jaksa akan dilakukan pada tanggal :</p>
          <h1>'.date('d F Y', strtotime($tgl)).'</h1>
          ');
      } elseif ($type == 'tolak') {
        $this->email->subject('Notifikasi');
        $this->email->message('
        <p>Maaf, Status Pengajuan anda :</p>
        <h1>DITOLAK</h1>
        ');
      } 
      elseif ($type == 'selesai') {
        $this->email->subject('Notifikasi');
        $this->email->message('
        <p>Maaf, Status Pengajuan anda :</p>
        <h1>SELESAI</h1>
        ');
      } 
      if ($this->email->send()) {
          return true;
      } else {
          echo $this->email->print_debugger();
          die;
      }
  }
}
