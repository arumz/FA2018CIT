
<?php include('views/elements/header.php');?>

<div class="container">
<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>


    <h3><a href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
	<p><?php echo $p['content'];?></p>
    <sub><?php echo $p['date'] ?> by
    <a href="<?php echo BASE_URL ?>"><?php echo $p['first_name'].' '.$p['last_name'] ?></a>

</div>


<?php include('views/elements/footer.php');?>
