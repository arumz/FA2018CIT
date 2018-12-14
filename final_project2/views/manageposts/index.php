<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Manage Posts</h1>
  </div>

  <?php
	if( is_array($post) ) {
	 extract($post);
	 // $uID = $u->getUserID();
	 // $isAdmin = $u ->isAdmin();
	}
	if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert"></button>
    	<?php echo $message?>
    </div>
  <?php }?>

  <div class="row">
      <div class="span8">

				<?php foreach($posts as $p){?>
					<h3><a href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
					<div><?php echo $p['date'] ?> by
					<a href="<?php echo BASE_URL ?>"><?php echo $p['first_name'].' '.$p['last_name'] ?></a> in
					<a href="<?php echo BASE_URL ?>category/view/<?php echo $p['categoryID'] ?>"><?php echo $p['name'] ?></a></div>
					<div style="margin-top:15px;"><a href="<?php echo BASE_URL ?>manageposts/edit/<?php // echo $p['pID'] ;?>" class="btn post-loader">Edit Post</a></div>

			<?php //end php block
			}?>

<a href="<?php echo BASE_URL; ?>manageposts/add" class="btn btn-primary">Add A Post</a>


      </div>
    </div>
</div>
<?php include('views/elements/footer.php');?>
