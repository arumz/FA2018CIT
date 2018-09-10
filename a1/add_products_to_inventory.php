<?php

	//this page will accept the information from the inventory form and create an object for each inventory item.  Once the object is created, it is added to an inventory array stored in Session
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

<?php

//unset the current product array in session and start fresh
unset($_SESSION['aryProductArray']);

$aryProductArray = array();

//loop through the 8 sets of fields on the initial form to process all of the products

for ($x=0; $x<=7; $x++) {

	//first, see if the product's name has been set.  If not, skip processing this product.
	if (!empty($_POST['productname' . $x]))  {

		//produce item's name is not empty, so process this item



		$thisProductName = $_POST['productname' . $x];
		$thisProduceType = $_POST['producetype' . $x];
		$thisProductPriceType = $_POST['pricetype' . $x];
		$thisProductPrice = $_POST['productprice' . $x];

		echo "Added " . $thisProductName . "<br />";

		//create an empty produceItem variable
		$produceItem;

		switch ($thisProduceType) {
			case "f": //fruit
				//create fruit object
				$produceItem = new fruit($x, $thisProductName, $thisProductPriceType, $thisProductPrice);
				$typeType = "Fruit";
				break;

			case "v": //veg
				//create veggie object

				$produceItem = new veggie($x, $_thisProductName, $thisProductPriceType, $thisProductPrice);
				$typeType = "Veggie";
				break;

		}

		if($produceItem->price_type == 2) {
			//added semicolon
			$pType = "Each";
		}

		else {
			$pType = "Per Lb";
		}


		echo "Product ID: " . $produceItem->product_id . "<br />";
		echo "Product Name: " . $produceItem->product_name . "<br />";
		echo "Product Type: ". $typeType . "<br />";
		echo "Product Price: $". $produceItem->product_price . " ".$pType."<br /><hr/>";

		//add object to the array
		array_push($aryProductArray, $produceItem);

	}
	else {
		//stop the loop at the first empty product name
		break;
	}

}

//if the array is not empty, put it into the Session
$_SESSION['aryProductArray'] = serialize($aryProductArray);
session_write_close();

//links
?>
<p>
	<!-- added URL_ROOT php tag -->
<a href="<?php echo URL_ROOT  . '/view_products.php'?>">View your Produce Store</a><br /><br />
<a href="<?php echo URL_ROOT  . '/index.php'?>">Go back to Inventory input screen (this will reset your current inventory)</a><br />
</p>


<?php
include_once(ABSOLUTE_PATH .'/includes/footer.php');
?>
