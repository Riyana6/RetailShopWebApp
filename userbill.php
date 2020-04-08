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
                <img src="image2.jpg" class="card-img-top" alt="... ">
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
                            <table class="table table-bordered table-hover" id="invoiceItem">
                                <tr>
                                    <th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
                                    <th width="15%">Item No</th>
                                    <th width="38%">Item Name</th>
                                    <th width="15%">Quantity</th>
                                    <th width="15%">Price</th>
                                    <th width="15%">Total</th>
                                </tr>

                                <tr>
                                    <td><input class="itemRow" type="checkbox"></td>
                                    <td><input type="text" value="<?php echo $invoiceItem["item_code"]; ?>"
                                            name="productCode[]" id="productCode_<?php echo $count; ?>"
                                            class="form-control" autocomplete="off"></td>
                                    <td><input type="text" value="<?php echo $invoiceItem["item_name"]; ?>"
                                            name="productName[]" id="productName_<?php echo $count; ?>"
                                            class="form-control" autocomplete="off"></td>
                                    <td><input type="number" value="<?php echo $invoiceItem["item_quantity"]; ?>"
                                            name="quantity[]" id="quantity_<?php echo $count; ?>"
                                            class="form-control quantity" autocomplete="off"></td>
                                    <td><input type="number" value="<?php echo $invoiceItem["unit_price"]; ?>"
                                            name="price[]" id="price_<?php echo $count; ?>" class="form-control price"
                                            autocomplete="off"></td>
                                    <td><input type="number"
                                            value="<?php echo $invoiceItem["order_item_final_amount"]; ?>"
                                            name="total[]" id="total_<?php echo $count; ?>" class="form-control total"
                                            autocomplete="off"></td>
                                    <input type="hidden" value="<?php echo $invoiceItem['item_code']; ?>"
                                        class="form-control" name="item_code[]">
                                </tr>
                                <?php ?>
                            </table>
                        </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <button class="btn btn-danger delete" id="removeRows" type="button">- Delete</button>
                        <button class="btn btn-success" id="addRows" type="button">+ Add More</button>
                    </div>
                </div>
                <div align="right">
                    <button type="button" name="add_row" id="add_row" class="btn btn-success btn-xs">+</button>
                </div>
                </td>
                </tr>
                <tr>
                    <td width="64%" align="right" style="color:red"><b>Discount (%)</td>
                    <td><input type="text" name="item_discount[]" id="item_discount1" class="form-control input-sm" />
                    </td>
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
                            placeholder="Additional Notes... "></textarea>

                    </td>
                    <td colspan="3" align="center">
                        <input type="hidden" name="total_item" id="total_item" value="1" />
                        <input type="submit" name="create_ebill" id="create_ebill" class="btn btn-secondary btn-sm"
                            value="E-Bill" />
                        <input type="button" name="print" id="print" class="btn btn-info btn-sm" value="Print" />
                        <input type="button" name="text_msg" id="text_msg" class="btn btn-success btn-sm"
                            value="Text" />
                        <input type="reset" name="cancel" id="cancel" class="btn btn-danger btn-sm" value="Cancel" />
                    </td>
                </tr>
                </table>
            </div>
            <table align="right">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <span class="form-inline">
                        <div class="form-group">
                            <label>Subtotal: </label>
                            <div class="input-group">
                                <div class="input-group-addon currency">$</div>
                                <input value="<?php echo $invoiceValues['order_total_before_tax']; ?>" type="number"
                                    class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tax Rate: </label>
                            <div class="input-group">
                                <input value="<?php echo $invoiceValues['order_tax_per']; ?>" type="number"
                                    class="form-control" name="taxRate" id="taxRate" placeholder="Tax Rate">
                                <div class="input-group-addon">%</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tax Amount: </label>
                            <div class="input-group">
                                <div class="input-group-addon currency">$</div>
                                <input value="<?php echo $invoiceValues['order_total_tax']; ?>" type="number"
                                    class="form-control" name="taxAmount" id="taxAmount" placeholder="Tax Amount">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Total: </label>
                            <div class="input-group">
                                <div class="input-group-addon currency">$</div>
                                <input value="<?php echo $invoiceValues['order_total_after_tax']; ?>" type="number"
                                    class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Amount Paid: </label>
                            <div class="input-group">
                                <div class="input-group-addon currency">$</div>
                                <input value="<?php echo $invoiceValues['order_amount_paid']; ?>" type="number"
                                    class="form-control" name="amountPaid" id="amountPaid" placeholder="Amount Paid">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Amount Due: </label>
                            <div class="input-group">
                                <div class="input-group-addon currency">$</div>
                                <input value="<?php echo $invoiceValues['order_total_amount_due']; ?>" type="number"
                                    class="form-control" name="amountDue" id="amountDue" placeholder="Amount Due">
                            </div>
                        </div>
                    </span>
                </div>
            </table>
        </div>

        </form>
        </p>

    </div>


    <script>
    var d = new Date();
    document.getElementById("order_date").innerHTML = d;
    </script>

</body>

</html>