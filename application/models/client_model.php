<?php
Class Client_Model extends CI_Model {

  public function login($table,$data)
  {
    return $this->db->get_where($table,$data);
  }

}
?>
