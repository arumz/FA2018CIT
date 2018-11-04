<?php

class LoginController extends Controller{

   public $userObject;

   public function do_login()
   {
       $this->userObject = new User();

       if($this->userObject->checkUser($_POST['email'],$_POST['password']))
       {

           $userInfo = $this->userObject->getUserFromEmail($_POST['email']);

           $_SESSION['uID'] = $userInfo['uID'];

             echo '<script>window.location.href = "http://corsair.cs.iupui.edu:23701/CIT31300/ex4/";</script>';

       }
       else
       {
           $this->set('error','Wrong Username / Email and Password Combination');
       }
   }

}
