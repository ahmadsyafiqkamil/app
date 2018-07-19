<?php
/**
 *
 */
class Admin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

  }
  function index(){
    if($this->session->userdata('status') != "login"){
			$this->load->view('login');
		}else {
      $this->loadContent('client/dashboard','');
    }

	}

  public function loadContent($view,$data)
  {
    $this->load->view('layout/header');
    $this->load->view($view,$data);
    $this->load->view('layout/footer');
  }
}


 ?>
