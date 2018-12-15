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
					//controller to model
					$this->postObject = new Post();
					$posts = $this->postObject->getAllPosts();
					//controller to view
					$this->set('posts',$posts);

					//view to controller adding new post
					if(isset($_POST['btn-add'])) {

						$data = array('title'=>$_POST['title'],'content'=>$_POST['content'],'categoryID'=>$_POST['category'],'date'=>$_POST['date'],'uID'=>$_SESSION['uID']);
						$result = $this->postObject->addPost($data);

						$this->set('message', $result);
					}
				}


}
