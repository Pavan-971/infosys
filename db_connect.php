<?php
$connection = mysqli_connect('youtube.cxtbv5qezsu9.us-east-2.rds.amazonaws.com', 'admin', 'sqladmin');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'mashlog_demo');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

