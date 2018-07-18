<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  /**
  * Index Page for this controller.
  *
  * Maps to the following URL
  * 		http://example.com/index.php/welcome
  *	- or -
  * 		http://example.com/index.php/welcome/index
  *	- or -
  * Since this controller is set as the default controller in
  * config/routes.php, it's displayed at http://example.com/
  *
  * So any other public methods not prefixed with an underscore will
  * map to /index.php/welcome/<method_name>
  * @see https://codeigniter.com/user_guide/general/urls.html
  */
  public function __construct()
  {
    parent::__construct();
    $this->load->model('client_model');
  }
  public function index()
  {
    $this->load->view('login');

  }
  public function login(){
  		$username = $this->input->post('username');
  		$password = $this->input->post('password');
  		$where = array(
  			'username' => $username,
  			'password' => md5($password)
  			);
  		$cek = $this->client_model->login("user",$where)->num_rows();
  		if($cek > 0){

  			$data_session = array(
  				'nama' => $username,
  				'status' => "login"
  				);

  			$this->session->set_userdata($data_session);

  			redirect(base_url("index.php/admin"));

  		}else{
  			echo "Username dan password salah !";
        echo "username : ".$username;
        echo "password : ".$password;
  		}
  	}

  	public function logout(){
  		$this->session->sess_destroy();
  		redirect(base_url('login'));
  	}

  public function coba()
  {
    $this->load->view('coba');
  }
}
