<?php
 require('db_connect.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){

// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `user_login` WHERE username='$username' and Password='$password'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
 header('Location:  second.html');

}else{
        echo "<script>
        alert('Invalid Login Credentials');
        window.location.href='http://18.189.20.36/';
        </script>";

//echo "Invalid Login Credentials";
}
}
?>

