
<?php include('views/elements/header.php');?>
<?php
// if( is_array($post) ) {
 	extract($post);
// }
?>

<div class="container">
	<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>
<p><?php echo $content;?></p>
<sub><?php echo 'Posted on '.$date.' by <a href="'.BASE_URL.'members/view/'.$uid.'"></a>'; ?>
</sub>
<div id = 'comment-container'>

		<?php
			foreach ($comments as $c) {
		?>
				<div class = 'comment'>
					<ul>
					<?php
						echo $comments;
					?>
					<sub><?php echo 'Posted on '.date('F j, Y \a\t H:i:s A', strtotime($date)).' by <a href="'.BASE_URL.'members/view/'.$uID.'">'.$first_name.' '.$last_name.'</a>'; ?><br>
					</sub><br>
					</ul>
				</div>
			<?php
			}
			?>
</div>
<div id = add-comment>
	<?php
    if(isset($_SESSION['uID']) && is_numeric($u->uID))
    {
  ?>
		<form id = 'comment-form' method = 'post' action = "<?php echo BASE_URL ?>blog/post/<?php echo $pID?>">
			<input type='hidden' name = 'commentID' value = "<?php $_POST['commentID']?>"/>
			<input type='hidden' name = 'uID' value = "<?php $_POST['uID']?>"/>
			<input type='hidden' name = 'postID' value = "<?php $_POST['postID']?>"/>
			<textarea name = 'commentText' placeholder ='Comment.' value = "<?php $_POST['commentText']?>"></textarea>

			<button type="submit" class="btn form">Submit Comment</button>
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
