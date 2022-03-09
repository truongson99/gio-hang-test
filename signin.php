<?php 
	session_start();

	if(isset($_COOKIE['ok'])) {
		$token=$_COOKIE['ok'];
		require 'admin/connect.php'; 
		$sql="select * from customers where token='$token' limit 1"; 
		$result = mysqli_query($connect,$sql); 
		$number_rows = mysqli_num_rows($result); 
			if($number_rows == 1){
			$each = mysqli_fetch_array($result); 
			$_SESSION['id'] = $each['id'];
			$_SESSION['name'] = $each['name'];
			}
		}

	if(isset($_SESSION['id'])) {
		header('location:user.php');
		exit;
		}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php require'menu.php'?>
	<?php 

	?>
		
	<h1>Day la trang dang nhap</h1>
	<form method="post" action="process_signin.php">
		Email
		<input type="email" name="email">
		<br>
		Password 
		<input type="password" name="password">
		<br>
		Ghi nho dang nhap 
		<input type="checkbox" name="remember">
		<br>
		<button>Dang khap</button>
	</form>
</body>
</html>