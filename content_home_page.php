<?php 
	require 'admin/connect.php'; 
	$sql="select * from products"; 
	$result=mysqli_query($connect,$sql);
?>
<style type="text/css">
	#products {
		border: 2px solid black;
		height: 250px; 
		width :33%; 
		float: left;
		background-color: orange;
	}
</style>
<div id="mid">
	<?php foreach($result as $each) { ?> 
		<div id="products">
			<a href="detail_content.php?id=<?php echo $each['id'] ?>"><?php echo $each['name'] ?> </a>
			<br>
			Gia:<?php echo $each['price'] ?> $
			<br>
			<br>
			<img src="admin/products/photos/<?php echo $each['photo']?>" height="160px">
			<br>
			<?php 
				if(!empty($_SESSION['id'])) { ?>
					<a href="add_to_cart.php?id=<?php echo $each['id'] ?>">Them vao gio hang</a>
			<?php } ?>
			
		</div>
	<?php }?>
</div>