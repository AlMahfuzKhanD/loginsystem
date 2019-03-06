<?php
/**
 * Created by PhpStorm.
 * User: MAHFUZ
 * Date: 3/6/19
 * Time: 1:14 PM
 */


session_start();

$_SESSION['username'] = null;
$_SESSION['first_name'] = null;
$_SESSION['lastname'] = null;

header("Location:index.php");

