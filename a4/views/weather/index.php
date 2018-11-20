<?php include('views/elements/header.php');?>
<?php if(!$result) {?>
<div class="container" id="wx">
    <div class="page-header">
         <h1>Weather</h1>
    </div>
    <form method="POST" action="<?php echo BASE_URL?>weather/getresults">
         <label for "zip"> Enter Your Zip Code</label>
         <input type="text" name="zip" id="zip" required="zip" />
         <br/>
         <button type="submit" class="btn">Load Results</button>
    </form>

<?php
}
else
{

?>
</div>
<div class="container">
	<div class="page-header">
        <h1>Weather for <?php echo $weather->request->query; ?></h1>
        <h5>High of <?php echo $weather->weather->maxtempF; ?></h5>
        <h5>Low of <?php echo $weather->weather->mintempF; ?></h5>
        </div>
</div>
<?php }
?>
<?php include('views/elements/footer.php');?>
