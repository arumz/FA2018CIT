<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
  </div>

	<?php if($message){?>
		<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert"></button>
			<?php echo $message?>
		</div>
	<?php }?>

  <div class="row">
      <div class="span8">
         <?php
            foreach($outcome as $category)
            {
				?>
							<form action="<?php echo BASE_URL?>managecategory/edit" method="post" >
								<input type = 'hidden' name = 'categoryID' value = '<?php echo $category['categoryID']?>'/>
								<input name = 'name' value = '<?php echo $category['name']?>'/>
								<button id="submit" type="submit" name = 'btn-c-edit' class="btn btn-primary" >Edit Category</button>
							</form>
						<?php
            }
         		?>
      </div>
    </div>
    <br>
    <form action="<?php echo BASE_URL.'managecategory/index' ?>" method="POST">
        Add Category Name<br>
        <input type="text" name="categoryName"><br>
        <button type="submit" name = 'btn-add' class="btn">Add Category</button>
    </form>
</div>
<?php include('views/elements/footer.php');?>
