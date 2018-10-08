<?php
abstract class model {

  protected $userID;
  protected $firstName;
  protected $lastName;
  protected $email;
  protected $role;

//we will revisit this function in a later assignment
public function __construct() {

}

public function __set($name, $value) {
$this->$name = $value;
}

public function __get($name) {
return $this->$name;
}

public function __destruct() {

}
}
