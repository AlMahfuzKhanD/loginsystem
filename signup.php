<?php
/**
 * Created by PhpStorm.
 * User: MAHFUZ
 * Date: 3/5/19
 * Time: 9:36 PM
 */

include "db.php";
############## sign up ####################
if(isset($_POST['submit_signup'])){
    $first_name = $_POST['farstname'];
    $last_name = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = "SELECT * FROM users";
    $select_all_users= mysqli_query($conn,$query);
    $catagories_counts = mysqli_num_rows($select_all_users);

    while ($row = mysqli_fetch_array($select_all_users)){
        $db_username = $row['username'];


    }

    if($username == $db_username ){
        echo "user name already taken";

    }else{
        $query = "INSERT INTO users (email, username, first_name, last_name, password) VALUES ('{$email}', '{$username}', '{$first_name}', '{$last_name}', '{$password}')";

        $create_user_query = mysqli_query($conn,$query);
        if($create_user_query){
            echo "";
        }else{
            die("QUERY FAILED ".mysqli_error($conn));
        }
    }





}



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


        <div class="col-sm-12 col-md-12">
            <form action="login.php" method="post">
                <h2>Sign Up Successful. Please Login</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                </div>


                <div>

                    <button href="login.php" class="btn btn-success" name="submit_login">
                        <i class="" ></i> Login
                    </button>



                    <a href="index.php" class="btn btn-primary">Home Page</a>
                </div>


            </form>
        </div>
    </div>
</div>




<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
</body>
</html>

