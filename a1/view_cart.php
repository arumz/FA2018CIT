
<?php
	//this page allows users to put items into a shopping cart
	include_once('includes/webconfig.php');
	include_once(ABSOLUTE_PATH . '/classes/product.class.php');
	include_once(ABSOLUTE_PATH . '/classes/fruit_product.class.php');
	include_once(ABSOLUTE_PATH . '/classes/veggie_product.class.php');
	session_start();
?>


<?php
//deleted html added include statement for the header

include_once(ABSOLUTE_PATH . '/includes/header.php');
?>

<p><b>Your Cart</b></p>

<?php
	//get the cart stored in session
	$aryCartArray = unserialize($_SESSION['aryCartArray']);


	//get the product array stored in session
	$aryProductsArray = unserialize($_SESSION['aryProductArray']);

  //get the product item array stored in session
  //$aryCartItemArray = unserialize($_SESSION['aryCartItemArray']);

	//for each item in the cart array, loop through and write out the quantity and item name

	for ($x=0; $x < count($aryCartArray); $x++) {

		$aryCartItemArray = $aryCartArray[$x];

    echo '<br>';
		//find the corresponding product in the product array
    //add semicolon, remove unneeded nesting, add x variable
		$thisProduct = $aryProductArray[$x];

		echo "<b>" . $thisProduct->product_name . "</b>"; //. " Qty: " . $aryCartItemArray[1] . "<br />";

	}

?>


<a href="index.php">Start all over again</a><br />
<i>This will reset your inventory.</i><strong></strong>

<?php
include_once(ABSOLUTE_PATH .'/includes/footer.php');
?>
