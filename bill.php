<?php
if(isset($_POST['add']))
    {
        $itemname  = $_POST['item_name'];
		$connection = mysqli_connect("localhost","root","","reg");
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
		
		$query= "select unit_price , item_code  from item where item_name = '$itemname' order by item_code desc limit 1";
	
		$result = mysqli_query($connection,$query);
		if(mysqli_num_rows($result)>=0)
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
		echo "error";
   			 $itemcode = "";
   			 $unitprice = "";
		}
?>