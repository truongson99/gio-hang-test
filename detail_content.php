<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		#all{
			width: 100%;
			height: 700px;
		}
		#top{
			background-color: pink;
			height: 20%;
			width: 100%;
		}
		#mid {
			background-color: orange;
			height: 70%;
			width: 100%;
		}
		#footer {
			background-color: pink;
			height: 10%;
			width: 100%;
		}
	</style>
</head>
<body>	
	
	<div id="all">
		<?php require 'menu.php' ?>
		<?php require 'show_products.php' ?>
		<?php require 'footer.php' ?>
	</div>
</body>
</html>