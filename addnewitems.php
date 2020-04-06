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
	$itemcode =$_POST['item_code'];
	$itemname =$_POST['item_name'];
	$unitprice =$_POST['unit_price'];
	
	
	$query = "INSERT INTO item (item_code,item_name,unit_price)
				VALUES ('{$itemcode}','{$itemname}','{$unitprice}')";
				
	
	$result = mysqli_query($connection,$query);
	
	if($result){
		 header ('location: useraddnewitem.php');
			
		 
		}else{
			echo "database query failed.";
		}
}

?>