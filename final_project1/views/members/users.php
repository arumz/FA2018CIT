<?php include('views/elements/header.php'); ?>
<?php
if(is_array($user)) {
    extract($user);
    echo '<table><tr><td>Name</td><td>Email</td></tr>';
    echo '<tr><td><a href="'.BASE_URL.'members/view/'.$user['uID'].'">'.$user['first_name'].' '.$user['last_name'].'</a></td><td>'.$user['email'].'</tr>';
}?>

<?php include('views/elements/footer.php');?>
