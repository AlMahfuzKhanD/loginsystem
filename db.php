<?php
/**
 * Created by PhpStorm.
 * User: MAHFUZ
 * Date: 3/5/19
 * Time: 8:13 PM
 */


$servername = "localhost";
$username = "root";
$password = "";
$db_name = "loginsystem";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


/*$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "loginsystem";

foreach ($db as $key => $value){
    define(strtoupper($key),$value);
}*/

############################################################

/*$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());}*/

?>