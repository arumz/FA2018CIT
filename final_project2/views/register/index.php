<?php
include('views/elements/header.php');
?>
<form action="<?php echo BASE_URL; ?>register/add" method="POST">
    <table>
        <?php
        if($message)
        {
             echo '<tr><td colspan="2"><div class="alert alert-success"
>'.$message.'</div></td></tr>';
        }
        ?>
        <tr>
            <td>First Name: <input name="first_name" type="text" required/></td>
            <td> Last Name: <input name="last_name" type="text" required/></td>
        </tr>
        <tr>
            <td>     Email: <input name="email" type="text" required/></td>
            <td>  Password: <input name="password" type="password" required/></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Register" /></td>
        </tr>
    </table>
</form>
<?php include('views/elements/footer.php');?>
