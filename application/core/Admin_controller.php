<?php

class Admin_controller extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->_check_login();
  }

  private function _check_login()
  {
    if ( ! $this->session->userdata('admin_id') )
    {
      redirect('admin/login');
    }
  }
}
