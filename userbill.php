<?php

$connection = mysqli_connect("localhost","root","","reg");

 $number =  count($_POST["item_name"]);
if ($number > 1)
{
for ($i=0; $i<$number; $i++)
    { 
        if(trim($_POST["item_name"][$i]) != '')
        {

            $sql = "INSERT INTO table_name (item_name) VALUES ('".mysqli_real_escape_string($connect, $_POST["item_name"][$i])."')";
            mysqli_query($connect, $sql);
        }
    }
        echo 'Data Inserted';
}else
{
    echo "Enter Item name";
}
 





if(isset($_GET['add']))
    {
        $itemname  = $_GET['item_name[]'];
        $quantity  = $_GET['quantity'];
		
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
		
		$query= "select unit_price , item_code  , item_name from item where item_name = '$itemname' order by item_code desc limit 1";
	
		$result = mysqli_query($connection,$query);
		if(mysqli_num_rows($result)>=0)
    	{
            while($row = mysqli_fetch_array($result))
             {
                $itemname  = $row['item_name'];
                $itemcode =$row['item_code'];
                $unitprice =$row['unit_price'];
                $total =$row['unit_price'] * $quantity;
            }
            
		}else
			{
    
        		echo "Undifined ID";
        		$itemcode = "";
                $unitprice = "";
                $itemname  = "";
			}
    
   		 mysqli_free_result($result);
    	 mysqli_close($connection);
  
	}
	else{
		
   			    $itemcode = "";
                $unitprice = "";
                $itemname  = "";
        }
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    </style>
</head>

<body>
    <link rel="stylesheet" href="css/datepicker.css">
    <script src="js/bootstrap-datepicker1.js"></script>
    <div class="row">
        <div class="col-sm-3">

            <h2 align="center">ABC Supermart</h2>
            <div>
                <img src="image2.jpg" class="card-img-top" alt="... ">
                <center>
                    <button type="submit" class="btn btn-dark" width="70%"><a href="userlogin.php"
                            style="color:white;">Logout</a></button>
                </center>
            </div>
        </div>
        <div class="col-sm-9">
            <form action="userbill.php" method="GET" name="add_name" id="add_name">

                <div class="card">
                    <h2 class="card-title" align="center">Create A Bill</h2>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="dynamic_field">
                                <tr>Bill NO:
                                    <input type="number" class="form-control" name="billno" id="billno:">
                                </tr>
                                <tr>

                                    <th width="13%">Item Code</th>
                                    <th width="36%">Item Name</th>
                                    <th width="15%">Quantity</th>
                                    <th width="15%">Unit Price</th>
                                    <th width="15%">Total</th>
                                    <th width="6%">AddMore</th>
                                </tr>

                                <tr>

                                    <td><input type="number" name="item_code" class="form-control"
                                            value="<?php echo $itemcode ?>" />
                                    </td>
                                    <td><input type="text" name="item_name" class="form-control" autocomplete="on"
                                            value="<?php echo $itemname; ?>" />
                                    </td>
                                    <td><input type="number" name="quantity" class="form-control" autocomplete="off"
                                            value="<?php echo $quantity; ?>" />
                                    </td>
                                    <td><input type="number" name="unit_price" class="form-control"
                                            value="<?php echo $unitprice; ?>" />
                                    </td>
                                    <td><input type="number" name="total" class="form-control" autocomplete="off"
                                            value="<?php echo $total; ?>" /></td>
                                    <td><button class="btn btn-success" id="newrow" name="newrow"
                                            type="button">+</button></td>

                                </tr>
                            </table>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <button class="btn btn-success" id="add" name="add" type="submit">Add</button>
                                <button class="btn btn-success" id="end" name="end" type="submit">Submit</button>
                            </div>
                        </div>

                    </div>

                    <table cellpadding="5">
                        <tr>
                            <td><label>Subtotal: </label></td>
                            <td><input width="30" type="number" class="form-control" name="subTotal" id="subTotal"
                                    placeholder="Subtotal" value="<?php echo $total ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td><label>Discount: </label></td>
                            <td><input type="number" class="form-control" name="taxAmount" id="taxAmount"
                                    placeholder="Tax Amount"></td>
                        </tr>
                        <tr>
                            <td><label>Total: </label></td>
                            <td><input type="number" class="form-control" name="totalAftertax" id="totalAftertax"
                                    value="<?php echo $total ?>" placeholder="Total">
                            </td>
                        </tr>
                        <tr>
                            <td><label>Amount Paid: </label></td>
                            <td><input type="number" class="form-control" name="amountPaid" id="amountPaid"
                                    placeholder="Amount Paid">
                            </td>
                        </tr>
                        <tr>
                            <td><label>Balance: </label></td>
                            <td><input type="number" class="form-control" name="balance" id="balance"
                                    placeholder="Balance">
                            </td>
                        </tr>
                    </table>
                    <table cellpadding="4">
                        <tr>

                            <td colspan="3">

                                <input type="submit" name="create_ebill" id="create_ebill"
                                    class="btn btn-secondary btn-sm" value="E-Bill" />
                                <input type="button" name="print" id="print" class="btn btn-info btn-sm"
                                    value="Print" />

                                <a href="userbill.php"><input type="button" name="cancel" id="cancel"
                                        class="btn btn-danger btn-sm" value="Cancel" />
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                <script>
                $(document).ready(function() {
                            var i = 1;
                            $('#newrow').click(function() {
                                i++;
                                $('#dynamic_field').append('<tr id="row' + i +
                                    '"><td><input type = "number" name = "item_code" class = "form-control" /></td><td><input type = "text" name = "item_name[]" class = "form-control" autocomplete = "on" /></td><td><input type = "number" name = "quantity" class = "form-control" autocomplete = "off" /></td><td><input type = "number" name = "unit_price" class = "form-control" /></td><td><input type = "number" name = "total" class = "form-control" autocomplete = "off" /></td><td><button class = "btn btn-danger btn_remove" id = "' +
                                    i + '" name = "remove" type = "submit" > X </button></td></tr>');
                            });

                            $(document).on('click', '.btn_remove', function() {
                                var button_id = $(this).attr("id");
                                $("#row" + button_id + "").remove();
                            });
                            $('#submit').click(function() {
                                $.ajax({
                                    url: "userbill.php",
                                    method: "POST",
                                    data: $('#add_name').serialize(),
                                    success: function(data) {
                                        alert(data);
                                        $('#add_name')[0].reset();
                                    }

                                });

                            }):
                </script>
                });
                </script>
            </form>
        </div>
        <script>
        var d = new Date();
        document.getElementById("order_date").innerHTML = d;
        </script>
    </div>

</body>

</html>