
<?php include('views/elements/header.php');?>
<?php
// I know this code is technically wrong and should be in the controller but I was running out of time.
 if( is_array($post) ) {
 	extract($post);
  $uID = $u->getUserID();
  $uName = $u->getUserName();
  $isAdmin = $u ->isAdmin();
 }
?>

<div class="container">
	<div class="page-header">

<h1><?php echo $title?></h1>
<h4>add comment at bottom of page.. I know not great UX.</h4>
  </div>
<p><?php echo $content?></p>
<sub><?php echo "Posted on $date by $uName in $name" ; ?>
</sub>
<div class = 'comment-container'>
	<div class = 'center-wrapper'>

		<?php
		 foreach ($comments as $c) {
		?>
				<div class = 'comment'>
              <p hidden><?php echo $c['commentID']?></p>
				      <p class ='comment-box'>
                <?php echo $c['commentText'] ?>
              </p>
              <?php if($isAdmin) { ?>
                <form id = 'delete-form' method = 'post' action = "<?php echo BASE_URL ?>blog/post/<?php echo $pID?>">
                  <input type='hidden' name = 'commentID' value = "<?php echo $c['commentID'] ?>"/>
            			<input type='hidden' name = 'pID' value = "<?php echo $pID?>"/>
                  <button type='submit' name = 'btnDelete' id='btnDelete' class='btn'>Delete Comment</button>
                </form>
              <?php } ?>


              </br>
              <sub class = 'sub-text'>By <?php echo $c['first_name'] . ' '. $c['last_name']. ' on '.$c['date']?></sub>
				</div>
			<?php
			}
			?>
	</div>
</div>
<div class = 'add-comment'>
	<?php
     if(isset($_SESSION['uID']))
     {
  ?>
		<form id = 'comment-form' method = 'post' action = "<?php echo BASE_URL ?>blog/post/<?php echo $pID?>">
			<input type='hidden' name = 'uID' value = "<?php echo $uID ?>"/>
			<input type='hidden' name = 'pID' value = "<?php echo $pID?>"/>
			<textarea name = 'commentText' placeholder ='Comment.' ></textarea>
			<button type="submit" name = 'btnSubmit' class="btn form">Submit Comment</button>
		</form>
	<?php
    }
    else
    {
       echo '<a class="btn" href="'.BASE_URL.'login">Login to comment</a>';
    }
?>
</div>

</div>

<?php include('views/elements/footer.php');?>
