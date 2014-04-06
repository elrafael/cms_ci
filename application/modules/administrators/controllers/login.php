<?php

class Login extends Public_controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    if ( $this->input->post() )
    {
      $user = new Administrator();
      $user->email = $this->input->post('email', TRUE);
      $user->password = $this->input->post('password', TRUE);

      if ( $user->do_login() )
      {
        $session_array = array(
          'admin_id' => $user->id,
          'admin_name' => $user->name
        );
        $this->session->set_userdata($session_array);
      }
      else
      {
        echo 'O error é: ' . $user->error->login;
      }
    }

    $this->template->load('templates/admin_login', 'login', $this->data);
  }
}
