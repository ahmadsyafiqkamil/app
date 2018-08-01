<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

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
    if($this->session->userdata('status') != "login"){
      $header = '	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/forms/styling/uniform.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>assets/js/core/app.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>assets/js/pages/login.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/ui/ripple.min.js"></script>';

      $this->loadContent('login','',$header);
    }else {
      $header = '	<script type="text/javascript" src="assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
      <script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
      <script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
      <script type="text/javascript" src="assets/js/plugins/ui/fullcalendar/fullcalendar.min.js"></script>
      <script type="text/javascript" src="assets/js/plugins/ui/fullcalendar/lang/ar.js"></script>

      <script type="text/javascript" src="assets/js/core/app.js"></script>
      <script type="text/javascript" src="assets/js/pages/extra_fullcalendar_advanced.js"></script>

      <script type="text/javascript" src="assets/js/plugins/ui/ripple.min.js"></script>';
      $this->loadContent('client/dashboard','',$header);
    }
  }
  public function login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $where = array(
      'username' => $username,
      'password' => md5($password)
    );
    $cek = $this->client_model->login("users",$where)->num_rows();
    if($cek > 0){

      $data_session = array(
        'nama' => $username,
        'status' => "login"
      );

      $this->session->set_userdata($data_session);

      redirect(base_url("index.php/admin"));

    }else{

      $header = '	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/forms/styling/uniform.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>assets/js/core/app.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>assets/js/pages/login.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/ui/ripple.min.js"></script>';
      $msg = 'username dan password salah '.$username.' '.$password;
      $articles = 'hahahaha';
      $this->loadContent('login',array(
        "msg" => $msg,
        "articles" => $articles),
        $header);
      }
    }

    public function logout(){
      $this->session->sess_destroy();
      redirect(base_url());
    }
    public function register(){
      $this->loadContent('register','','');
    }

    public function loadContent($view,$dataa= array( ),$header)
    {
      $data['header']=$header;
      $data['data']=$dataa;
      $this->load->view('layout/header',$data);
      $this->load->view($view,$data,true);
      $this->load->view('layout/footer');
    }

  }
