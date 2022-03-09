<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php require 'menu.php' ?>
	<h1>Trang ca nhan</h1>
	<h3>Xin chao  <?php echo $_SESSION['name']?> day la trang ca nhan cua ban</h3>

</body>
</html>