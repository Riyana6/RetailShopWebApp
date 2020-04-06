<?php
	$connection = mysqli_connect('localhost','root','','reg');
	
	$pass =$_POST['password'];
	$email	=$_POST['email'];
    $hashed_password = sha1($pass);

    $email = stripcslashes ($email); 
	$hashed_password = stripcslashes ($hashed_password);
	$email = mysqli_real_escape_string($connection,$email);
    $hashed_password = mysqli_real_escape_string($connection,$hashed_password);
	
    
	
	$query= "select * from admin where email='$email' and password='$hashed_password'";

	$result = mysqli_query($connection,$query);

	
	$row = mysqli_fetch_array($result);
	
	if($row['email']==$email && $row['password']== $hashed_password){
		header ('location:useradmin.php');
	}else {
		echo "login failed.";
	}
?>