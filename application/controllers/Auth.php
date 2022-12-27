
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_page');
		
		if($this->session->userdata('status')=="login"){
			?>
			<script>
			window.location="<?php echo base_url('main'); ?>";
			</script>
			<?php
		}
		
	}

	public function index()
	{
    $data['title'] = "Login";
    $this->load->view('include/header', $data);
		$this->load->view('auth');
    $this->load->view('include/footer');
	}

	function login()
	{

		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		
		if($this->input->post('login') == 1){
			$where = array(
				'username_jaksa'=>$user,
				'password_jaksa'=>md5($pass)
			);
			$cek = $this->Model_page->cek_login('tbl_jaksa',$where)->num_rows();
			$hasil= $this->Model_page->cek_login('tbl_jaksa',$where)->result();
	
			if($cek > 0 ){
				foreach ($hasil as $data) {
					$sesi = array(
						'id'=>$data->id_jaksa,
						'nama'=>$data->nama_jaksa,
						'status'=>"login",
						'login'=>1,
						'role'=>1
						);
				};
				$this->session->set_userdata($sesi);
				redirect(base_url('main'));
			}else{
				$this->session->set_flashdata('msg',
				'<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<h4 class="alert-heading">Gagal !!</h4>
				<p>Username atau Password yang anda masukan salah</p>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>'
				);
				redirect(base_url('login'));
			}
		}elseif($this->input->post('login') == 2){
			$where = array(
				'user'=>$user,
				'password'=>md5($pass)
			);
			$cek = $this->Model_page->cek_login('tbl_admin',$where)->num_rows();
			$hasil= $this->Model_page->cek_login('tbl_admin',$where)->result();
	
			if($cek > 0 ){
				foreach ($hasil as $data) {
					$sesi = array(
						'nama'=>$data->nama,
						'status'=>"login",
						'login'=>1,
						'role'=>2
						);
				};
				$this->session->set_userdata($sesi);
				redirect(base_url('main'));
			}else{
				$this->session->set_flashdata('msg',
				'<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<h4 class="alert-heading">Gagal !!</h4>
				<p>Username atau Password yang anda masukan salah</p>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>'
				);
				redirect(base_url('login'));
			}
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		$this->session->userdata('status')==" ";
		redirect(base_url('login'));
	} 

}
