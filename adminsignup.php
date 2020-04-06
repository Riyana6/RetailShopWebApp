<?php


$connection = mysqli_connect('localhost','root','','reg');
	
	//mysqli_connect_error(); mysqli_connect_error();
	
	//Checking the connection
	if(mysqli_connect_error()){
		die('Database connection failed ' . mysqli_connect_error());
	}
	else{
		echo "connection successful";
	}

if(isset($_POST['submit']))
{
	$fname =$_POST['first_name'];
	$sname =$_POST['second_name'];
	$pass =$_POST['password'];
	$email	=$_POST['email'];
    $hashed_password = sha1($pass);
	
	$query = "INSERT INTO admin (first_name,last_name,email,password)
				VALUES ('{$fname}','{$sname}','{$email}','{$hashed_password}')";
				
	
	$result = mysqli_query($connection,$query);
	
	if($result){
		 header ('location:userhomepage.php');
		}else{
			echo "database query failed.";
		}
}

?>