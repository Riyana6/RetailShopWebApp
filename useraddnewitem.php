<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .jumbotron {

            width: 450px;
            border-color: black;
            text-align: center;
            margin: auto;
            padding: 20px;

        }
    </style>

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>


    <form action = "addnewitems.php" class="jumbotron" method= "POST" >
        <h2>Add New Items</h2>
        <hr class="my-4">
        <br><br><br>

        <div class="form-group">
            <label for="inputid">Item code :</label>
            <input type="text" class="form-control" name="item_code" required />
            <small id="itemidhelp" class="form-text text-muted">Input the barcode number or specific item
                code.</small>
        </div>
        <div class="form-group">
            <label for="Name">Item name :</label>
            <input type="text" class="form-control" name="item_name" required />
            <small id="namehelp" class="form-text text-muted">Input name.</small>
        </div>
        <div class="form-group">
            <label for="unitprice">Unit price :</label>
            <input type="number" class="form-control" name="unit_price" min="0" required />
            <small id="quantityhelp" class="form-text text-muted">Input quantity of items.</small>
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit">Add item</button><br><br>
        <button type="reset" formaction="useraddnewitem.php" class="btn btn-secondary">Clear</button>
        <input type="button" class="btn btn-secondary" value="Back" onclick="history.back()">
        </div>
		</form>


</body>

</html>