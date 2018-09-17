<?php
include_once('classes/admin.class.php');
include_once('classes/registered_user.class.php');

class User {
  protected $user_id;
  protected $user_type;
  protected $first_name;
  protected $last_name;
  protected $email_address;
  protected $user_level;

public function __construct($user_level) {
$this->user_level = $user_level;
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
