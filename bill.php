<?php

/*$connection = mysqli_connect("localhost","root","","reg");
   
$search=$_POST['Add'];
if($search){
	$query= "select item_name ,unit_price , item_code  from item where item_name = $itemname limit 1";
	$result = mysqli_query($connection,$query);
	while($row = mysqli_fetch_array($result))
	{
		echo $row['item_code'];
		echo $row['unit_price'];
   }
}


*/
















   if(isset($_POST['Add']))
    {
        $itemname  = $_POST['item_name'];
        $connection = mysqli_connect("localhost","root","","reg");
		$query= "select unit_price , item_code ,item_name  from item where item_name = $itemname limit 1";
	
		$result = mysqli_query($connection,$query);
		if(mysqli_num_rows($result) > 0)
    	{
            while($row = mysqli_fetch_array($result))
             {
                 $itemcode =$row['item_code'];
                 $unitprice =$row['unit_price'];
            }
            
		}else
			{
    
        		echo "Undifined ID";
        		$itemcode = "";
        		$unitprice = "";
			}
    
   		 mysqli_free_result($result);
    	 mysqli_close($connection);
  
	}
	else{
   			 $itemcode = "";
   			 $unitprice = "";
		}
?>