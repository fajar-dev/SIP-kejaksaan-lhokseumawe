<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
    $data['title'] = "Home";
    $this->load->view('include/header', $data);
		$this->load->view('home');
    $this->load->view('include/footer');
	}
  
	public function sukses()
	{
    $data['title'] = "Home";
    $this->load->view('include/header', $data);
		$this->load->view('sukses');
    $this->load->view('include/footer');
	}

  public function tambah()
	{
    $config['upload_path']          = './file';
		$config['allowed_types']        = 'img|png|jpeg|gif|jpg|pdf|doc|docx';
		$config['encrypt_name']        = true;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('foto')){
				$this->session->set_flashdata('msg',
				'<div class="alert alert-warning d-flex align-items-center" role="alert">
        <div><strong>Gagal</strong><br>
          Pastikan foto yang anda upload berekstensi jpg/png
        </div>
      </div>
			');
				redirect(base_url());
	 }else{
					 $data = array('foto' => $this->upload->data());
					 $uploadData = $this->upload->data();
					 $hasil = $uploadData['file_name'];
					 $data = array(
						'nama' => $this->input->post('n_depan').' '.$this->input->post('n_belakang'),
						'jk' => $this->input->post('jk'),
						'nik' => $this->input->post('nik'),
						'email' => $this->input->post('email'),
						'hp' => $this->input->post('hp'),
						'alamat' => $this->input->post('alamat'),
						'id_jaksa' => $this->input->post('jaksa'),
						'pelayanan' => $this->input->post('pelayanan'),
						'tipe' => $this->input->post('tipe'),
						'tujuan' => $this->input->post('tujuan'),
						'foto' => $hasil,
				 );
 
				 $this->db->insert('tbl_pengajuan',$data);
				 redirect(base_url('sukses'));
	  }
  }
}
