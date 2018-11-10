
<?php include('elements/header.php');?>
<?php
if( is_array($post) ) {
	extract($post);?>

<div class="container">
	<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

<?php echo $content;?>

</div>
<?php }?>

<?php if( is_array($posts) ) {?>
<div class="container">
<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

	<?php foreach($posts as $p){?>
    <h3><a href="<?php echo BASE_URL?>blog/view/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
	<p><?php echo $p['content'];?></p>
    <sub><?php echo $p['date'] ?> by
    <a href="<?php echo BASE_URL ?>"><?php echo $p['first_name'].' '.$p['last_name'] ?></a> in
    <a href="<?php echo BASE_URL ?>/category/view/<?php echo $p['categoryID'] ?>"><?php echo $p['name'] ?></a></sub>
<?php }?>
</div>
<?php }?>


<?php include('elements/footer.php');?>
