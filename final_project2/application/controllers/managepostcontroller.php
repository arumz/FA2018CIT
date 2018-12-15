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
			$categories = $this->postObject->getCategories();
			$this->set('categories',$categories);

	}

	public function edit($pID){

			$this->postObject = new Post();
			$post = $this->postObject->getPost($pID);
                        $this->getCategories();

			$this->set('pID', $post['pID']);
			$this->set('title', $post['title']);
			$this->set('content', $post['content']);
                        $this->set('date', $post['date']);
                        $this->set('category', $post['categoryID']);
			$this->set('task', 'update');


	}

        public function getCategories()
        {

        }

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
      $this->postObject->deletePost($deleteParameter);
      }

      //FINAL STEP LOAD ALL COMMENTS FROM DATABASE
			$posts = $this->postObject->getAllPosts();


     		// Return array to view so for each loop works
     		$this->set('posts', $posts);
			}



}
