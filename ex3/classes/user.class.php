<?php

abstract class User {
  protected $user_id;
  protected $user_type;
  protected $first_name;
  protected $last_name;
  protected $email_address;
  protected $user_level;

  abstract function __construct($user_level,$user_id);

  abstract function __set($name, $value);

  abstract function __get($name);

  abstract function __destruct();

}
?>
