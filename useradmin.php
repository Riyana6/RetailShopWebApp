<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .admin {
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



    <form action="addnewitems.php" class="admin">
        <div class="jumbotron">
            <h2>You have log in as admin</h2>
            <hr class="my-4">
            <br><br><br>
            <a href="useraddnewitem.php"><button type="button" class="btn btn-primary btn-lg btn-block">Add new
                    items</button></a><br>
			<a href="userupdateitem.php"><button type="button" class="btn btn-primary btn-lg btn-block">Update items</button></a><br>
            <a href="userhomepage.php"><button type="button" class="btn btn-primary btn-lg btn-block">Logout </button></a><br>
            
        </div>
    </form>
</body>

</html>