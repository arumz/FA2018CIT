<?php include('views/elements/header.php');?>
<?php
// onsubmit="editor.post()"
?>
<div class="container">
	<div class="page-header">
   <h1>Add Post</h1>
  </div>

  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>managepost/index" method="post" >
          <label>Title</label>
          <input type="text" class="span6" name="title" placeholder="Enter a title." required>

          <label for="date">Date</label>
          <?php // set timezone
          date_default_timezone_set('America/Indiana/Indianapolis');?>
          <input name="date" id="date" size="16" type="date" value="<?php echo $date = date('Y-m-d H:i:s'); ?>" required>

          <label for="category">Category</label>
						<?php //var_dump($results[0]['name']);
						// var_dump($category);


						?>

          <select name = "taskOption" class="input-sm" id="category">
						<?php foreach($categories as $c){?>
							<option value="<?php echo $c['categoryID'];?>"><?php echo $c['name'];?></option>
						<?php }
						$selectedCategory = $_POST['taskOption'];
						?>
          </select>

          <label>Content</label>
          <textarea required id="tinyeditor" name="content" style="width:556px;height: 200px"></textarea>
    			<br/>
          <input type="hidden" name="uID" value="<?php echo $_SESSION['uID']; ?>"/>

          <button id="submit" type="submit" name = 'btn-add' class="btn btn-primary" >Submit</button>
        </form>


      </div>
    </div>
</div>
<?php include('views/elements/footer.php');?>
