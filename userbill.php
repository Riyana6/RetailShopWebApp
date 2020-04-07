<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    <script src="js/jquery.min.js"></script><script src="js/bootstrap.min.js"></script><script src="js/jquery.dataTables.min.js"></script><script src="js/dataTables.bootstrap.min.js"></script><link rel="stylesheet"href="css/dataTables.bootstrap.min.css">
    </style>
</head>

<body>
    <link rel="stylesheet" href="css/datepicker.css">
    <script src="js/bootstrap-datepicker1.js"></script>
    <div class="row">
        <div class="col-sm-4">

            <h2 align="center">ABC Supermart</h2>
            <div>
                <img src="image2.jpg" class="card-img-top" alt="...">
                <center>
                    <button type="submit" class="btn btn-dark width=" 70%"><a href="userlogin.php"
                            style="color:white;">Logout</a></button>
                </center>
            </div>
        </div>
        <div class="col-sm-8">

            <div class="card">
                <h2 class="card-title" align="center">Create A Bill</h2>
                <div class="card-body">
                    <form method="post" id="invoice_form">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <td colspan="2">
                                        <div class="row">
                                            <div class="col-md-4">

                                                <b>RECEIVER (BILL TO)</b><br />
                                                <input type="text" name="order_receiver_name" id="order_receiver_id"
                                                    class="form-control input-sm" placeholder="Enter Reciever ID" />

                                            </div>
                                            <div class="col-md-4">

                                                <b>Bill Details</b><br />
                                                <input type="text" name="order_no" id="order_no"
                                                    class="form-control input-sm" readonly placeholder="Bill No" />
                                            </div>
                                            <div class="col-md-4">
                                                <b>Date</b><br />

                                                <label id="order_date"> </label>

                                            </div>
                                        </div>
                                        <br />
                                        <table id="invoice-item-table" class="table table-bordered">
                                            <tr>
                                                <th width="6%">Sr No.</th>
                                                <th width="18%">Item Code</th>
                                                <th width="20%">Item Name</th>
                                                <th width="4%">Quantity</th>
                                                <th width="10%">Price</th>
                                                <th width="11%">Amount</th>


                                            </tr>

                                            <tr>
                                                <td><span id="sr_no">1</span></td>
                                                <td><input type="text" name="item_code[]" id="item_code1"
                                                        class="form-control input-sm" /></td>
                                                <td><input type="text" name="item_name[]" id="item_name1"
                                                        class="form-control input-sm" readonly /></td>

                                                <td><input type="text" name="order_item_quantity[]"
                                                        id="order_item_quantity1" data-srno="1"
                                                        class="form-control input-sm order_item_quantity" /></td>
                                                <td><input type="text" name="order_item_price[]" id="order_item_price1"
                                                        class="form-control input-sm" readonly /></td>
                                                <td><input type="text" name="order_item_amount[]"
                                                        id="order_item__amount1" data-srno="1"
                                                        class="form-control input-sm order_item_actual_amount"
                                                        readonly /></td>

                                            </tr>

                                        </table>
                                        <div align="right">
                                            <button type="button" name="add_row" id="add_row"
                                                class="btn btn-success btn-xs">+</button>
                                        </div>
                                    </td>
                                </tr>
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
                                            value="Cancel" />
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