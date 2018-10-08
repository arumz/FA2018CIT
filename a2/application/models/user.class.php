<?php
class user extends model {
  public function __construct() {
    parent::__construct();
  }

  public function __set($name,$value) {
    $this->$name = $value;
  }

  public function __get($name) {
    return $this->$name;
  }

  public function __destruct() {

  }

  public function getName() {
    $data = array('userid' => $this->__get('userID'),
    'firstname' => $this->__get('firstName'),
    'lastname' => $this->__get('lastName'),
    'email' => $this->__get('email'),
    'role' => $this->__get('role'));
    return $data;
  }

}
