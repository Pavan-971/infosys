<?php
 require('db_connect.php');

if (isset($_POST['Money_Transffer']) and isset($_POST['balance'])){

// Assigning POST values to variables.
$Money_Transffer = $_POST['Money_Transffer'];
$balance = $_POST['balance'];

if ($Money_Transffer != null){

//echo "Login Credentials verified";
 header('Location:  firstpage.html');

}
else{
	header('Location:  firstpage.html');
}
?>

