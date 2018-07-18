<?php
/**
 *
 */
class Admin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
  }
  function index(){
		$this->loadContent('layout/content','');
	}

  public function loadContent($view,$data)
  {
    $this->load->view('layout/header');
    $this->load->view($view,$data);
    $this->load->view('layout/footer');
  }
}


 ?>
