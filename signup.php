<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php require'menu.php'?>
	
	<h1>Day la trang dang ky</h1>
	<form method="post" action="process_signup.php">
		Ten 
		<input type="text" name="name">
		<br>
		Email
		<input type="email" name="email">
		<br>
		Password
		<input type="password" name="password">
		<br>
		<button>Dang ky</button>
	</form>
</body>
</html>