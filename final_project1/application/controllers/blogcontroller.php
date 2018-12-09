<?php
//
 class BlogController extends Controller{


	public $postObject;
	public $commentObject;

	public $pID;
	public $uID;
	public $commentText;



    	public function post($pID){


 		$this->postObject = new Post();
 		//create comment object
 		$this->commentObject = new Comment();
 		$post = $this->postObject->getPost($pID);
 	  $this->set('post',$post);

 		//$_POST is view to controller
 		if(isset($_POST['btnSubmit'])) {
 			//setting variables from view to controller
 			$uID = $_POST['uID'];
 			$commentText = $_POST['commentText'];
 			$pID = $_POST['pID'];
      // Current date
      $date = date('Y-m-d H:i:s');




 			$commentArray = array($uID, $commentText, $pID, $date);
 			//print_r() var_dump()

 			//Adding new comment so Iron Man (model) can store data into database
 			$this->commentObject->addComment($commentArray);
 		}
 			// bring array of comments back from model to controller
 			$comments = $this->commentObject->loadComments($pID);
      // var_dump($comments);

 			//Pull all comments from database into a variable
 			//$comments = $this->commentObject->addComment();


 		// Return array to view so for each loop works
 		$this->set('comments', $comments);

    	}

 	public function index(){
 		//controller to model
 		$this->postObject = new Post();
 		$posts = $this->postObject->getAllPosts();
 		//controller to view
 		$this->set('title', 'The Default Blog View');
 		$this->set('posts',$posts);
 	}


 }
