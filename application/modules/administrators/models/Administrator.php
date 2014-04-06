<?php

class Administrator extends DataMapper {

  public function __construct($id = NULL)
  {
    parent::__construct($id);
  }

  public function do_login()
  {
    $obj = new $this();
    
  }
}
