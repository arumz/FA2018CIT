<?php
function autoloadApplication($className) {
  $fileName = 'application/'.$className.'.class.php';
  //using is_readable instead of file_exists because file may not have sufficient read permissions,
  //and is_readable also tests to see if the file exists.
  if(is_readable($fileName)) {
    require $fileName;
  }
}

function autoloadModel($className) {
  $fileName = 'application/models/' . $className . '.class.php';
  if(is_readable($fileName)) {
    require $fileName;
  }
}

function autoloadController($className) {
  $fileName = 'application/controllers/'.$className .'.class.php';
  if(is_readable($fileName)) {
    require $fileName;
  }
}

spl_autoload_register('autoloadApplication');
spl_autoload_register('autoloadModel');
spl_autoload_register('autoloadController');

// require_once('application/controller.class.php');
// require_once('application/load.class.php');
// require_once('application/model.class.php');

//instantiate the controller class
new controller();
