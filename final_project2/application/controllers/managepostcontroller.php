<?php

class ManagePostController extends Controller{

	public $postObject;

        protected $access = 1;

	public function defaultTask(){
		$this->postObject = new Post();
                $this->getCategories();
		$this->set('task', 'add');
	}

	public function add(){
			//populate drop down menu in the view with all of the categories.
			$this->postObject = new Category();
			$categories = $this->postObject->getaegories();
			$this->set('categories',$categories);

	}

	public function edit(){


		//Step 1: Pull all categories so you can create new "edited" post
		$this->postObject = new Category();
		$categories = $this->postObject->getCategories();
		$this->set('categories',$categories);


		//Step 1.5: Pass post array from index to edit.
		$this->postObject = new Post();
		if (isset($_POST['btn-edit'])) {
			// var_dump($_POST);
			$this->postObject = new Post();
			$pID = $_POST['pID'];
			$firstTitle = $_POST['firstTitle'];
			$content = $_POST['content'];


	}
}


	// 	// Step 5: Retrieve all the posts including the new one you just made from step 2
	// 		$posts = $this->postObject->getAllPosts();
	//
	// 	// Step 6: Use magic method to allow managepost/index to use $posts
	// 			$this->set('posts',$posts);
	//
	// 			return $message;
	//
	//
	// }

        // public function getCategories()
        // {
				//
        // }

        public function update()
        {
			$this->postObject = new Post();
			$data = array('title'=>$_POST['post_title'],'content'=>$_POST['post_content'],'categoryID'=>$_POST['categoryID'],'date'=>$_POST['date']);
			$result = $this->postObject->updatePost($_POST['pID'],$data);
                        $outcome = $this->postObject->getAllPosts();
			$this->set('posts',$outcome);
			$this->set('message', $result);
                        $this->getCategories();
                        $this->set('task','update');
        }

				public function index(){
					$this->postObject = new Post();

					if (isset($_POST['btn-add'])) {
						var_dump($_POST);
						$this->postObject = new Post();
						$cID = $_POST['taskOption'];
						var_dump($cID);
						$title = $_POST['title'];
						$content = $_POST['content'];
						$uID = $_POST['uID'];
						$date = $_POST['date'];

						$newPostArray = array($title, $content, $cID, $date, $uID);
					//	var_dump($newPostArray);
						$this->postObject->addPost($newPostArray);

				}
					$posts = $this->postObject->getAllPosts();

						$this->set('posts',$posts);


				//CODE FOR DELETING POSTS FROM DATABASE
        if(isset($_POST['btn-delete'])) {
        //setting variables from view to controller
				$pID = $_POST['pID'];

       $deleteParameter = $pID;
       //print_r() var_dump()
			 // print_r($deleteArray);

       //Deleting comment so Iron Man (model) can delete data into database based on commentID and pID
      $message = $this->postObject->deletePost($deleteParameter);
      }

			//Step 2: Create a new post object.
					if (isset($_POST['btn-update'])) {
						// var_dump($_POST);
						$this->postObject = new Post();


						// $cID = $_POST['taskOption'];
						// $title = $_POST['title'];
						// $content = $_POST['content'];
						// $date = $_POST['date'];

						$data = array('title'=>$_POST['title'], 'content'=>$_POST['content'],'categoryID'=>$_POST['taskOption'],'date'=>$_POST['date'], 'pID'=>$_POST['pID']);


						// var_dump($data);
						// var_dump($newPostArray);
				// Step 3: Add new "edited" post to the database
						$message = $this->postObject->updatePost($data);


				}

      //FINAL STEP LOAD ALL COMMENTS FROM DATABASE
			$posts = $this->postObject->getAllPosts();


     		// Return array to view so for each loop works
				$this->set('message', $message);
     		$this->set('posts', $posts);
			}



}
