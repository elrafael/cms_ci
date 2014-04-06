<?php

class MY_Controller extends MX_Controller {

  public $data = array();

  public function __construct()
  {
    parent::__construct();
    $this->_meta_tags();
    $this->_migration();
  }

  private function _meta_tags()
  {
    $this->data['meta_description'] = '';
    $this->data['meta_keywords'] = '';
    $this->data['meta_title'] = '';
  }

  private function _migration()
  {
    $this->load->library('migration');
    if ( ! $this->migration->current() )
    {
    	show_error($this->migration->error_string());
    }
  }
}
