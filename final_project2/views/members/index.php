<?php include('views/elements/header.php'); ?>

<?php if($message){?>
  <div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert"></button>
    <?php echo $message?>
  </div>
<?php }?>

<?php
if(is_array($users))
{
?>
    <table><tr><td>Name</td><td>Email</td><td>Active Status</td><td>Activate</td></tr>
  <?php  foreach($users as $user)
    {
  ?>
        <tr><td><a href="<?php echo BASE_URL ?>'members/users/'<?php echo $user['uID']?>"><?php echo $user['first_name'].' '.$user['last_name']?></a></td><td><?php echo $user['email']?></td><td><?php echo $user['active']?></td>
        <td>
        <form method = "post" action = "<?php echo BASE_URL ?>members/index" >
        <input type = "hidden" name = 'uID' value="<?php echo $user['uID']?>"/>
        <input type = "hidden" name = 'active' value="<?php echo $user['active']?>"/>

        <button name = "btn-activate" class="btn" type="submit">Activate</button>
        </form></td></tr>
    <?php
    }?>

  <?php  echo '</table>';
}
?>
<?php include('views/elements/footer.php');?>
