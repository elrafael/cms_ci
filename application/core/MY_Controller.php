<?php

class MY_Controller extends MX_Controller {

  public $data = array();

  public function __construct()
  {
    parent::__construct();
    $this->_meta_tags();
  }

  private function _meta_tags()
  {
    $this->data['meta_description'] = '';
    $this->data['meta_keywords'] = '';
    $this->data['meta_title'] = '';
  }
}
