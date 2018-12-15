<?php

class LoginController extends Controller{

   public $userObject;

   public function index() {
     $this->userObject = new User();
     $result = $this->userObject->isActive();

   }

   public function do_login()
   {
       $this->userObject = new User();

       if($this->userObject->checkUser($_POST['email'],$_POST['password']))
       {



           $userInfo = $this->userObject->getUserFromEmail($_POST['email']);

           $_SESSION['uID'] = $userInfo['uID'];

           $result = $this->userObject->isActive($SESSION['uID']);

           $this->set('active',$result);

           if(strlen($_SESSION['redirect']) > 0)
           {
               $view = $_SESSION['redirect'];

               header('Location: '.BASE_URL.'/addpost');
           }
           else
           {
               header('Location: '.BASE_URL);
           }

       }
       else
       {
           $this->set('error','Wrong Username / Email and Password Combination');
       }
   }

   public function logout()
   {
       unset($_SESSION['uID']);

       session_write_close();

       header('Location: '.BASE_URL.'?action=loggedout');
   }

}
