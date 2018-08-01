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

  public function loadContent($view,$dataa,$header)
  {
    $data['header']=$header;
    $data['data']=$dataa;
    $this->load->view('layout/header',$data);
    $this->load->view($view,$data);
    $this->load->view('layout/footer');
  }


}


 ?>
