<?php
class controller {
  public $load;
  public $model;

//make all magic methods
  public function __construct(){
    $this->load = new load();
    $this->model = new user();
    $this->home();
  }

  public function __set($name, $value){
  $this->$name = $value;
  }

  public function __get($name){
  return $this->$name;
  }

  public function __destruct(){
  }

  public function home(){
    //assign values to protected variables defined in model class
    $this->model->__set('userID','ajroembk');
    $this->model->__set('firstName','Andrew');
    $this->model->__set('lastName', 'Roembke');
    $this->model->__set('email', 'ajroembk@iu.edu');
    $this->model->__set('role', 'admin');
    //talks to the model
    $data = $this->model->getName();
    //talks to the view
    $this->load->view('view.php',$data);
  }
}

?>
