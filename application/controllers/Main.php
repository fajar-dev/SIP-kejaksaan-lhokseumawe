<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {

  function __construct(){
		parent::__construct();
    if($this->session->userdata('status') != "login"){
      redirect(base_url('login'));
    } 
	}

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

  public function tambah_jaksa()
	{
    $config['upload_path']          = './file';
		$config['allowed_types']        = 'img|png|jpeg|gif|jpg';
		$config['encrypt_name']        = true;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('foto')){
				$this->session->set_flashdata('msg',
				'<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill me-2" viewBox="0 0 16 16">
               <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            <div>
               <strong>Gagal !! </strong> Pastikan foto yang anda upload berekstensi jpg/png
            </div>
       </div>
			');
				redirect(base_url('main/jaksa'));
	 }else{
					 $data = array('foto' => $this->upload->data());
					 $uploadData = $this->upload->data();
					 $hasil = $uploadData['file_name'];
					 $data = array(
						'nama_jaksa' => $this->input->post('nama'),
						'nip_jaksa' => $this->input->post('nip'),
						'email_jaksa' => $this->input->post('email'),
						'hp_jaksa' => $this->input->post('hp'),
						'foto_jaksa' => $hasil,
				 );
				 $this->db->insert('tbl_jaksa',$data);
				 redirect(base_url('main/jaksa'));
	  }
  }

  public function edit_jaksa(){
		if(empty($_FILES['foto']['name'])){
      $data = array(
        'nama_jaksa' => $this->input->post('nama'),
        'nip_jaksa' => $this->input->post('nip'),
        'email_jaksa' => $this->input->post('email'),
        'hp_jaksa' => $this->input->post('hp'),
			);
        $this->db->where('id_jaksa', $this->input->post('id'));
				$this->db->update('tbl_jaksa',$data);
				redirect(base_url('main/jaksa'));
		}else{
			$config['upload_path']        = './file';
      $config['allowed_types']       = 'img|png|jpeg|gif|jpg';
      $config['encrypt_name']        = true;
      $this->load->library('upload', $config);
		  if ( ! $this->upload->do_upload('foto')){
        $this->session->set_flashdata('msg',
        '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill me-2" viewBox="0 0 16 16">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            <div>
              <strong>Gagal !! </strong> Pastikan foto yang anda upload berekstensi jpg/png
            </div>
      </div>
      ');
      redirect(base_url('main/jaksa'));
			}else{
							$data = array('foto' => $this->upload->data());
							$uploadData = $this->upload->data();
							$hasil = $uploadData['file_name'];
              $data = array(
                'nama_jaksa' => $this->input->post('nama'),
                'nip_jaksa' => $this->input->post('nip'),
                'email_jaksa' => $this->input->post('email'),
                'hp_jaksa' => $this->input->post('hp'),
                'foto_jaksa' => $hasil,
              );
              $this->db->where('id_jaksa', $this->input->post('id'));
              $this->db->update('tbl_jaksa',$data);
              redirect(base_url('main/jaksa'));
			}
		}
  } 

  public function hapus_jaksa($id)
	{
    $this->db->where('id_jaksa', $id);
    $this->db->delete('tbl_jaksa');
		redirect(base_url('main/jaksa')); 
	}


  public function admin()
	{
    $data['hasil'] = $this->db->get('tbl_admin')->result();
    $data['title'] = "Admin";
    $this->load->view('include/header', $data);
    $this->load->view('include/sidebar');
		$this->load->view('admin');
    $this->load->view('include/footer');
	}

  public function tambah_admin()
	{
		$data = array(
						'nama' => $this->input->post('nama'),
						'nip' => $this->input->post('nip'),
						'user' => $this->input->post('user'),
						'password' => md5($this->input->post('password')),
		);
		$this->db->insert('tbl_admin',$data);
		redirect(base_url('main/admin'));
  }

  public function edit_admin()
	{
    if(empty($this->input->post('pass'))){
      $data = array(
        'nama' => $this->input->post('nama'),
        'nip' => $this->input->post('nip'),
        'user' => $this->input->post('user'),
      );
    }else{
      $data = array(
        'nama' => $this->input->post('nama'),
        'nip' => $this->input->post('nip'),
        'user' => $this->input->post('user'),
        'password' => md5($this->input->post('pass')),
      );
    }
    $this->db->where('id', $this->input->post('id'));
		$this->db->update('tbl_admin',$data);
		redirect(base_url('main/admin'));
  }

  public function hapus_admin($id)
	{
    $this->db->where('id', $id);
    $this->db->delete('tbl_admin');
		redirect(base_url('main/admin')); 
	}
}
