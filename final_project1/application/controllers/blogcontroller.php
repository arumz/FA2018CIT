<?php

class BlogController extends Controller{

	public $postObject;

   	public function post($pID){

		$this->postObject = new Post();
		$post = $this->postObject->getPost($pID);
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
			echo($commentID);
			echo($uID);
			echo($commentText);
			echo($date);
			echo($postID);
			echo($commentArray);

			//Creating new comment object so Iron Man (model) can store data into database
			$this->commentObject = new Comment();
			$this->commentObject->addComment($commentArray);

			// bring array of comments back from model to controller
			$comments = $this->commentObject->loadComments();
			echo($comments);






			//Pull all comments from database into a variable
			//$comments = $this->commentObject->addComment();

		}
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
