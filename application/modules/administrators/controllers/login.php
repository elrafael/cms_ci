<?php

class Login extends Public_controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $l = new Administrator();
    $l->do_login();
    $this->template->load('templates/admin_login', 'login', $this->data);
  }
}
