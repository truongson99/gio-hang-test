<?php 
	session_start(); 
	unset($_SESSION['id']); 
	unset($_SESSION['name']); 
	setcookie('ok', null, -1 );


	header('location:index.php?success=Ban da dang xuat thanh cong'); 

