<?php
/**
 * Created by PhpStorm.
 * User: MAHFUZ
 * Date: 3/5/19
 * Time: 9:36 PM
 */

include "db.php";

session_start();

if(isset($_POST['submit_login'])){

    $username = $_POST['username'];

    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '{$username}'";
    $select_user_querey = mysqli_query($conn,$query);
    if(!$select_user_querey){
        die("QUERY FAILED". mysqli_error($conn));
    }




    while ($row = mysqli_fetch_array($select_user_querey)){
        $db_username = $row['username'];
        $db_user_password = $row['password'];
        $db_user_firstname = $row['first_name'];
        $db_user_lastname = $row['last_name'];


    }


    if($username == $db_username && $password == $db_user_password ){

        $_SESSION['username'] = $db_username;
        $_SESSION['first_name'] = $db_user_firstname;
        $_SESSION['lastname'] = $db_user_lastname;




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
                    <h1>Welcome <?php echo $db_user_firstname." ".$db_user_lastname; ?></h1>
                    <h3>You have logged in successfully</h3>
                    <a class="btn btn-success" name="submit_logout" href="logout.php">Logout</a>

                </div>
            </div>
        </div>




        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.js"></script>
        </body>
        </html>

<?php
    }else{
        header("Location:index.php");
    }



}


?>