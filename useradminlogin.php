<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLogin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    .form1 {
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
    <h1 class="head">Admin Login</h1>

    <form class="form1" action="adminlogin.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
                required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remind me</label>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block" name="login">Login</button>



        <button type="submit" class="btn btn-secondary btn-lg btn-block"><a href="userhomepage.php"
                style="color:white;">Back to Home page</a></button>


    </form>