<?php
$products = simplexml_load_file('product.xml');

if(isset($_POST['submitSave'])) {

	foreach($products->product as $product){
		if($product['id']==$_POST['id']){
			$product->name = $_POST['name'];
			$product->price = $_POST['price'];
			break;
		}
	}
	file_put_contents('product.xml', $products->asXML());
	header('location:produkti.php');
}

foreach($products->product as $product){
	if($product['id']==$_GET['id']){
		$id = $product['id'];
		$name = $product->name;
		$price = $product->price;
		break;
	}
}

?>
