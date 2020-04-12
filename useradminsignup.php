<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .form2 {
            width: 50%;
            margin: 100px 100px 10px 390px;
        }
        
        .head {
            text-align: center;
            margin-top: 28px;
            color: rgb(61, 182, 219);
        }
    </style>
</head>

<body>
    <h1 class="head">SignUp as admin</h1>

    <form action="adminsignup.php" class="form2" method = "POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">First Name</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="First Name" name="first_name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Second Name</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Second Name" name="second_name" required>
            </div>

        </div>
        <div class="form-group">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" required>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Email</label>
            <input type="email" class="form-control" id="inputAddress2" placeholder="Email" name="email" required>
        </div>
        </br>
        <button type="submit" class="btn btn-success" name="submit">Submit</button>
        
        <button type="submit" class="btn btn-primary"><a href="useradmin.php" style="color:white;">Back to Homepage</a></button>
    </form>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>



