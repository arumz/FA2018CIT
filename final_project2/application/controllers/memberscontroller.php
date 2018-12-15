<?php

class MembersController extends Controller {

        public $userObject;


        public function users($uID){

             $this->userObject = new User();
             $user = $this->userObject->getUser($uID);
             $this->set('user',$user);

        }

	public function index(){

		$this->userObject = new User();
    if (isset($_POST["btn-activate"])) {
      $uID = $_POST['uID'];
      $active = $_POST['active'];
      $message = $this->userObject->updateUser($uID, $active);
    }
		$users = $this->userObject->getAllUsers();
                $this->set('title','The Members View');
                $this->set('users',$users);
                $this->set('first_name',$first_name);
                $this->set('last_name',$last_name);
                $this->set('email',$email);
                $this->set('active',$active);
                $this->set('message',$message);


	}

}

?>
