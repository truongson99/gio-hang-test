<?php 

	$name = $_POST['name']; 
	$email = $_POST['email']; 
	$password = $_POST['password']; 

	require 'admin/connect.php';
	$sql = "select * from customers where email='$email' ";
	$result = mysqli_query($connect,$sql); 
	$number_rows = mysqli_num_rows($result); 

	if($number_rows==1) {
		header('location:signin.php?error=email nay da ton tai, ban can dang nhap');
		exit;
	}
	
	$sql= "insert into customers (name, email, password) values('$name', '$email', '$password')"; 
	mysqli_query($connect,$sql); 
	header('location:signin.php?success=ban da dang ky thanh cong, dang nhap de vao tai khoan'); 
	
