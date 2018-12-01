<?php include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
        <h1>Final Project for CIT313!</h1>
    <?php
        if(isset($_GET['action']) && $_GET['action'] == 'loggedout')
        {
    ?>
           <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert">�</button>
                   Successfully logged out
           </div>
    <?php } ?>
  </div>
	<div id = "picture">
		<img src="<?php echo BASE_URL ?>luck_reich.jpg" class = "img no-repeat center top"/>
	</div>
	<div id = "text">
		<h3>This is my personalized page.</h3>
		<p>
			Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem
			Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
			Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem
			Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
			Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem
			Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
			Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem
			Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
			Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem
			Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
		</p>
	</div>
	<div id = "sidebar">
		<h4>Get your local weather</h4>
		<h6>Enter in your zip code below</h6>
		<form method="POST" action="<?php echo BASE_URL?>weather/getresults">
				 <label for "zip"> Enter Your Zip Code</label>
				 <input type="text" name="zip" id="zip" required="zip" />
				 <br/>
				 <button type="submit" class="btn">Load Results</button>
		</form>
	</div>
</div>
<?php include('views/elements/footer.php');?>
