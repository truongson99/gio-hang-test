<?php 
	require 'admin/connect.php'; 
	$id = $_GET['id'];
	$sql = "select * from products where id='$id'"; 
	$result = mysqli_query ($connect,$sql); 
	$each = mysqli_fetch_array ($result); 
?>
<div id="mid"> 
	<h1><?php echo $each['name'] ?> </h1>
	<p><?php echo $each['description'] ?></p>
	<img src="admin/products/photos/<?php echo $each['photo'] ?>" height="400px">

</div>