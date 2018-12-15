<?php include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
  </div>
<?php ?>
  <div class="row">
      <div class="span8">
         <form action="<?php echo BASE_URL?>managecategory/index" method="post">
            <input required type="text" name="categoryName" value="<?php echo $_POST['name'] ?>">
            <input  type="hidden" name="categoryID" value="<?php echo $_POST['categoryID'] ?>">
            <button name = "btn-c-update" class="btn" type="submit">Edit Category</button>
         </form>
      </div>
    </div>
</div>
<?php include('views/elements/footer.php');?>
