<?php
$connection = mysqli_connect('localhost','root','','reg');
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    <script src="js/jquery.min.js"></script><script src="js/bootstrap.min.js"></script><script src="js/jquery.dataTables.min.js"></script><script src="js/dataTables.bootstrap.min.js"></script><link rel="stylesheet"href="css/dataTables.bootstrap.min.css">.content>* {
        padding-left: 12px;
    }

    .billcard>* {
        padding: 1px;
    }
    </style>
</head>

<body>
    <link rel="stylesheet" href="css/datepicker.css">
    <script src="js/bootstrap-datepicker1.js"></script>

    <div class="row">
        <div class="col-sm-3">

            <h2 align="center">ABC SUPERMART</h2>
            <div>
                <img src="image2.jpg" class="card-img-top" alt="...">
                <center><button type="submit" class="btn btn-primary"><a href="userlogin.php"
                            style="color:white;">Logout</a></button>
                </center>

            </div>
        </div>
        <div class="col-sm-8">

            <div class="billcard">
                <h2 class="card-title" align="center">Create A Bill</h2>
                <div class="card-body">
                    <form action="" method="POST" id="invoice_form">
                        <div class="">
                            <table class="table table-bordered">
                                <tr>
                                    <td colspan="2">
                                        <div class="row">
                                            <div class="col-md-4">

                                                <b>Customer Contact No:</b><br />
                                                <input type="text" name="order_receiver_name" id="order_receiver_id"
                                                    class="form-control input-sm" placeholder="Customer contact no:" />

                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <table class="table table-bordered " id="invoiceItem">
                                                        <tr>
                                                            <th width="2%"><input id="checkAll" class="formcontrol"
                                                                    type="checkbox"></th>
                                                            <th width="15%">Item No</th>
                                                            <th width="38">Item Name</th>
                                                            <th width="15%">Quantity</th>
                                                            <th width="15%">Price</th>
                                                            <th width="15%">Total</th>
                                                        </tr>


                                                        <?php


 if(isset($_POST["Add"]))
 {
 	 echo'
	  <tr>
      <td><input class="itemRow" type="checkbox"></td>

      <td><input type="text" name="item_code"  class="form-control"  value=""></td>
      <td><input type="text" name="item_name"  class="form-control"  value=""></td>
      <td><input type="number" name="item_quantity"  class="form-control quantity" autocomplete="off"></td>
      <td><input type="number" name="unit_price"  class="form-control price" value=""></td>
      <td><input type="number" name="total"  class="form-control total" autocomplete="off"></td>
    </tr>';
  } ?>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="content">


                                                <input type="submit" name="delete" id="delete"
                                                    class="btn btn-secondary btn-sm" value="Delete Row" />

                                                <input type="submit" name="Add" id="Add" class="btn btn-info btn-sm"
                                                    value="Add" />
                                            </div>
                                <tr>
                                    <td width="64%" align="right" style="color:red"><b>Discount (%)</td>
                                    <td><input type="text" name="item_discount[]" id="item_discount1"
                                            class="form-control input-sm" /></td>
                                </tr>

                                <tr>
                                    <td align="right" style="color:darkblue"><b>Total</td>
                                    <td align="right"><b><span id="final_total_amt"></span></b></td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                </tr>


                                <tr>
                                    <td>
                                        <textarea name="order_notes" id="order_notes" class="form-control"
                                            placeholder="Additional Notes..."></textarea>

                                    </td>
                                    <td colspan="3" align="center">
                                        <input type="hidden" name="total_item" id="total_item" value="1" />
                                        <input type="submit" name="create_ebill" id="create_ebill"
                                            class="btn btn-secondary btn-sm" value="E-Bill" />
                                        <input type="button" name="print" id="print" class="btn btn-info btn-sm"
                                            value="Print" />
                                        <input type="button" name="text_msg" id="text_msg"
                                            class="btn btn-success btn-sm" value="Text" />
                                        <input type="reset" name="cancel" id="cancel" class="btn btn-danger btn-sm"
                                            value="Cancel"><a href="userbill.php"
                                            style="color:white;">Cancel</a></input>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                    </p>

                </div>
            </div>
        </div>
    </div>

    <script>
    var d = new Date();
    document.getElementById("order_date").innerHTML = d;
    </script>

</body>

</html>