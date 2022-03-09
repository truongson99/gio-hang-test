<div id="top">
	<?php
	if(empty($_SESSION['id'])) { ?> 
		<a href="signup.php">Dang ky</a>
		<br>
		<a href="signin.php">Dang nhap</a>
		<br>
	<?php }  else { ?> 
		<p>Xin chao <?php echo $_SESSION['name'];?> </p>
		<a href="index.php">Trang chu</a>
		<br>
		<a href="user.php">Trang ca nhan</a>
		<br>
		<a href="view_cart.php">Xem gio hang</a>
		<br>
		<a href="signout.php">Dang xuat</a>
		<br>
	<?php } ?>

	

	<?php 
		if(isset($_GET['error'])) {	?>
			<p style="color:red"><?php echo $_GET['error'] ?> </p>
	<?php } ?>
	<?php 
		if(isset($_GET['success'])) { ?> 
			<p style="color:green"><?php echo $_GET['success'] ?></p>
	<?php } ?>
	
</div>
