<?php
$connection = mysqli_connect('localhost','root','','reg');
	
	
	
	if(isset($_POST["Addi"])){
	$itemcode =$_POST['item_code'];
	$itemname =$_POST['item_name'];
	
	$query= "select unit_price from item where item_code='$itemcode'";
	
	$result = mysqli_query($connection,$query);
	
	$row = mysqli_fetch_array($result);
	
	echo $row["unit_price"];
	}

	
?>


	
	
<?php
$found=1;
 if($found==1){
 if(isset($_POST["Add"])){ echo'
<tr>
<td><input class="itemRow" type="checkbox"></td>

<td><input type="text" name="item_code" id="item_code" class="form-control"  value='; echo $row["item_code"].'></td>
<td><input type="text" name="item_name" id="item_name" class="form-control"  value='; echo $row["item_name"].'></td>
<td><input type="number" name="item_quantity" id="item_quantity" class="form-control quantity" autocomplete="off"></td>
<td><input type="number" name="unit_price" id="unit_price" class="form-control price" value='; echo $row["unit_price"].'></td>
<td><input type="number" name="total" id="total" class="form-control total" autocomplete="off"></td>
</tr>';
 }} ?>