<?php
$connection = mysqli_connect('localhost', 'user','password', 'webHosting');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'webHosting');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}