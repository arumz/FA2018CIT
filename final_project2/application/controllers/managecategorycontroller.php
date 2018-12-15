<?php

class ManageCategoryController extends Controller
{

        public function index(){


                if(isset($_POST['btn-add'])) {
                $this->categoryObject = new Category;
                $message = $this->categoryObject->addCategory($_POST['categoryName']);
                $this->set('message',$message);
                }

                
                if(isset($_POST['btn-c-update'])) {
                  var_dump($_POST);
                      $this->categoryObject = new Category;
                      $message = $this->categoryObject->update($_POST['categoryID'],$_POST['categoryName']);
                      $this->set('message',$message);
              }

                $outcome = $this->getCategories();
                $this->set('outcome',$outcome);
        }

        // public function edit(){
        //
        //           $this->categoryObject = new Category;
        //           $outcome = $this->categoryObject->getCategory($categoryID);
        //           $this->set('outcome',$outcome);
        //         }
        // }

	public function getCategories(){

		$this->categoryObject = new Category;
		$outcome = $this->categoryObject->getCategories();
                return $outcome;
	}

        public function edit()
        {

        }

        public function add()
        {
                $this->categoryObject = new Category;
                $message = $this->categoryObject->addCategory($_POST['categoryName']);
                $this->set('message',$message);
        }

}

?>
