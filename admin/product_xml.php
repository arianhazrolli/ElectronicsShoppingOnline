<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        XML
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">XML</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <div class="pull-right">
              <?php
if(isset($_GET['action'])) {
	$products = simplexml_load_file('product.xml');
	$id = $_GET['id'];
	$index = 0;
	$i = 0;
	foreach($products->product as $product){
		if($product['id']==$id){
			$index = $i;
			break;
		}
		$i++;
	}
	unset($products->product[$index]);
	file_put_contents('product.xml', $products->asXML());
}
$products = simplexml_load_file('product.xml');
echo '<p style="text-align:center;">No. Product: '.count($products);
echo '<br><p style="text-align:center;">List Product Information';
?>
<br>
<a href="add.php">Add new product</a>
<br>
<table class="table">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Price</th>
		<th>Tools</th>
	</tr>
	<?php foreach($products->product as $product) 
{ 
	?>
	<tr>
		<td><?php echo $product['id']; ?></td>
		<td><?php echo $product->name; ?></td>
		<td><?php echo $product->price; ?></td>
		<td><a href="edit.php?id=<?php echo $product['id']; ?>">Edit</a> |
			<a href="product_xml.php?action=delete&id=<?php echo $product['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
	</tr>
	<?php 
												  } 
	?>
</table>

              </div>
              </div>
              </div>
              </div>
              </div>
              </section>
     <!-- END -->
  </div>
  	<?php include 'includes/footer.php'; ?>
    <?php include '../includes/profile_modal.php'; ?>

</div>
<!-- ./wrapper -->

<?php include 'includes/scripts.php'; ?>
<!-- Date Picker -->

</body>
</html>
