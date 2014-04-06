<?php

class Administrator extends DataMapper {

  public $validation = array(
    'name' => array(
      'label' => 'Name',
      'rules' => array('required', 'max_length' => 40)
    ),
    'email' => array(
      'label' => 'E-mail',
      'rules' => array('required', 'max_length' => 225, 'valid_email')
    ),
    'password' => array(
      'label' => 'Password',
      'rules' => array('min_length' => 6, 'encrypt')
    ),
    'token' => array(
      'label' => 'Token',
      'rules' => array()
    ),
    'active' => array(
      'label' => 'Active',
      'rules' => array('required', 'max_length' => 1)
    )
  );
  private $CI;

  public function __construct($id = NULL)
  {
    parent::__construct($id);
    $this->CI =& get_instance();
  }

  public function do_login()
  {
    $uemail = $this->email;
    $user = new Administrator();
    $user->where('email', $uemail);
    $user->where('active', 1);
    $user->get();

    $this->salt = $user->salt;
    $this->validate()->get();

    if ( $this->exists() )
    {
      return TRUE;
    }
    else
    {
      $this->error_message('login', 'Credentials invalid');
      $this->email = $uemail;
      return FALSE;
    }
  }

  public function _encrypt($field)
  {
    // Don't encrypt an empty string
    if (!empty($this->{$field}))
    {
      // Generate a random salt if empty
      if (empty($this->salt))
      {
        $this->salt = md5(uniqid(rand(), true));
      }

      $this->{$field} = sha1($this->salt . $this->{$field});
    }
  }
}
