<?php

class Registered_User extends User {

      function __construct($user_level,$user_id)
      {
          $this->user_level = $user_level;

          $this->user_id = $user_id;
      }

      function __set($name, $value)
      {
          $this->$name = $value;
      }

      function __get($name)
      {
          return $this->$name;
      }

      // Static Method
      static function doMath($number_1,$number_2)
      {
          if(is_numeric($number_1) && is_numeric($number_2))
          {
              return ($number_1 + $number_2) * $number_1;
          }
          else
          {
              return 'could not be calculated';
          }
      }

      // Destructor function destroys the object once it is finished being used
      function __destruct()
      {
      }
}
?>
