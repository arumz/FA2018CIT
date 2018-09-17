<?php
include_once('classes/user.class.php');

class Registered_User extends User {

public function __construct($user_level, $user_id) {
parent::__construct($user_level);
$this->user_type = 1;
$this->user_id = $user_id;
}

public function __set($name, $value) {
  $this->$name = $value;
  return;
}

public function __get($name) {
  return $this->$name;
}

public function __destruct() {

}

}
?>
