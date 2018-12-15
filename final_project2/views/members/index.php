<?php include('views/elements/header.php'); ?>

<?php
if(is_array($users))
{
    echo '<table><tr><td>Name</td><td>Email</td></tr>';
    foreach($users as $user)
    {
        echo '<tr><td><a href="'.BASE_URL.'members/users/'.$user['uID'].'">'.$user['first_name'].' '.$user['last_name'].'</a></td><td>'.$user['email'].'</td></tr>';
        echo '<tr><td>'.$user['is-active']'</td></tr>'
    }
    echo '</table>';
}
?>
<?php include('views/elements/footer.php');?>
