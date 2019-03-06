<?php
include "db.php";
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <form action="signup.php" method="post">
                <h2>New here? Please sign up</h2>
                <div class="form-group">
                    <label for="ffirstname">First Name</label>
                    <input type="text" class="form-control" placeholder="Enter your first name" name="farstname">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" placeholder="Enter last name" name="lastname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter an unique user name" name="username">

                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control"  placeholder="Password" name="password">
                </div>

                <button type="submit" class="btn btn-primary" name="submit_signup">Sign Up</button>
            </form>
        </div>

        <div class="col-sm-12 col-md-6">
            <form action="login.php" method="post">
                <h2>Have an account? Please login</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>

                <button type="submit" class="btn btn-success" name="submit_login">Login</button>
            </form>
        </div>
    </div>
</div>




<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
</body>
</html>