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
          //CODE FOR ADDING COMMENTS TO DATABASE
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

        //CODE FOR DELETING COMMENTS FROM DATABASE
        if(isset($_POST['btnDelete'])) {
        //setting variables from view to controller
         $commentID = $_POST['commentID'];
         $pID = $_POST['pID'];


       $deleteArray = array($pID, $commentID);
       //print_r() var_dump()

       //Deleting comment so Iron Man (model) can delete data into database based on commentID and pID
      $this->commentObject->deleteComment($deleteArray);
      }

      //FINAL STEP LOAD ALL COMMENTS FROM DATABASE
     			// bring array of comments back from model to controller
     			$comments = $this->commentObject->loadComments($pID);
          // var_dump($comments);


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
