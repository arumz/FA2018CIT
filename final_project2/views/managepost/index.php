<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Manage Posts</h1>
  </div>

	<?php if($message){?>
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
					<form action="<?php echo BASE_URL?>managepost/edit" method="post" >
						<input type = 'hidden' name = 'pID' value = '<?php echo $p['pID']?>'/>
						<input type = 'hidden' name = 'firstTitle' value = '<?php echo $p["title"]?>'/>
						<input type = 'hidden' name = 'content' value ='<?php echo $p["content"]?>' />
						<button id="submit" type="submit" name = 'btn-edit' class="btn btn-primary" >Edit Post</button>
					</form>
					<form action="<?php echo BASE_URL?>managepost/index" method="post" >
						<input type = 'hidden' name = 'pID' value = '<?php echo $p['pID']?>'/>
						<button id="submit" type="submit" name = 'btn-delete' class="btn btn-primary" >Delete Post</button>
					</form>

			<?php //end php block
			}?>

<a href="<?php echo BASE_URL; ?>managepost/add" class="btn btn-primary">Add A Post</a>


      </div>
    </div>
</div>
<?php include('views/elements/footer.php');?>
