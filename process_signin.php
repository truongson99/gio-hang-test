<?php 

	$email = $_POST['email']; 
	$password = $_POST['password']; 

	if(isset($_POST['remember'])) {
		$remember = true; 
	}
	else {
		$remember = false; 
	}


	require 'admin/connect.php';
	$sql= "select * from customers where email='$email' and password='$password'";
	$result = mysqli_query($connect,$sql); 
	$number_rows = mysqli_num_rows($result); 

	if($number_rows==1) {
		header('location:user.php');
		session_start(); 
		$each = mysqli_fetch_array($result); 
		$id=$each['id'];
		$_SESSION['id'] = $id; 
		$_SESSION['name'] = $each['name']; 

		if($remember) {
			$token = uniqid('user_', true);
			$sql="update customers set token ='$token' where id='$id'";
			$result=mysqli_query($connect,$sql);
			setcookie('ok', $token, time() +60*60*60*24 );
		}
		exit; 
	}

	header('location:signin.php?error= Email hoac mat khau khong dung, vui long dang nhap lai'); 

