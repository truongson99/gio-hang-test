<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		
	</title>
</head>
<body>	
	<?php require 'menu.php' ?>
	<?php 
		$cart = $_SESSION['cart']; 
	?>
		<h1>Ban dang o gio hang</h1>

	<table border="1" width="100%">
		<tr>
			<th>Anh san pham </th>
			<th>Ten san pham</th>
			<th>Gia san pham </th>
			<th>So luong san pham</th>
			<th>Tong tien </th>
			<th>Xoa</th>
		</tr>
		<?php foreach($cart as $id => $each) {  ?>
		<tr>
			<td><img src="admin/products/photos/<?php echo $each['photo'] ?>" height="100px"></td>
			<td> <?php echo $each['name'] ?></td>
			<td><?php echo $each['price'] ?></td>
			<td>
				<a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=decre"> - </a>
				<?php echo $each['quantity'] ?> 
				<a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=incre"> + </a>
			</td>
			<td><?php echo $each['price'] * $each['quantity'] ?></td>
			<td><a href="">X</a></td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>

