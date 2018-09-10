<?php
include("elements/header.php");
?>



<?php
$a = array('Your Name', 'Favorite Color', 'Favorite Movie', 'Favorite Book', 'Favorite Website');
$b = array('Andrew Roembke', 'Blue', 'The Dark Knight', 'Hunger Games', 'Youtube');
$c = array_combine($a, $b);
print_r($c);

?>

<h1><?php echo($b[0])?></h1>



/* function echoValuesExceptName() {
  if ($b[0] != NULL) {
    echo($b[1]);
  }
}

<ul>
  <li>
echoValuesExceptName()
  </li>
</ul>









<?php
include("elements/footer.php");
?>
