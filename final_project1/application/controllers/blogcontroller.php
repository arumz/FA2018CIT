<?php
//
 class BlogController extends Controller{


	public $postObject;
	public $commentObject;

	public $postID;
	public $uID;

	private $commentID;
	private $commentText;
	private $date;


    	public function post($postID){


 		$this->postObject = new Post();
 		//create comment object
 		$this->commentObject = new Comment();
 		$post = $this->postObject->getPost($postID);
 	  $this->set('post',$post);

 		//$_POST is view to controller
 		if(isset($_POST['btnSubmit'])) {
 			//setting variables from view to controller
 			$commentID = $_POST['commentID'];
 			$uID = $_POST['uID'];
 			$commentText = $_POST['commentText'];
 			$date = $_POST['date'];
 			$postID = $_POST['postID'];


 			$commentArray = array($commentID, $uID, $commentText, $date, $postID);
 			//print_r() var_dump()
 			echo($commentID);
 			echo($uID);
 			echo($commentText);
 			echo($date);
 			echo($postID);
 			echo($commentArray);

 			//Adding new comment so Iron Man (model) can store data into database
 			$this->commentObject->addComment($commentArray);
 		}
 			// bring array of comments back from model to controller
 			$comments = $this->commentObject->loadComments($postID);
 			var_dump($comments);






 			//Pull all comments from database into a variable
 			//$comments = $this->commentObject->addComment();


 		// Return array to view so for each loop works
 		$this->set('comments', $comments);

    	}

 	public function index(){
		print_r($POST);

 		//controller to model
 		$this->postObject = new Post();
 		$posts = $this->postObject->getAllPosts();
 		//controller to view
 		$this->set('title', 'The Default Blog View');
 		$this->set('posts',$posts);
 	}


 }
