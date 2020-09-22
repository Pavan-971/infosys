<?php
 require('db_connect.php');

if (isset($_POST['Account_Number']) and isset($_POST['Account_Holder_Name']) and  isset($_POST['IFSC_Code']) and isset($_POST['Amount'])){

// Assigning POST values to variables.
$Account_Number = $_POST['Account_Number'];
$Account_Holder_Name = $_POST['Account_Holder_Name'];
$IFSC_Code = $_POST['IFSC_Code'];
$Amount = $_POST['Amount'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `account` WHERE Account_Number='$Account_Number' and Account_Holder_Name='$Account_Holder_Name' and IFSC_Code='$IFSC_Code'" ;

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

if ($Amount > 1000){
echo "<script>
	alert('Amount Transffered');
	window.location.href='http://18.189.20.36/firstpage.html'
      </script>";
}
else{
echo "<script>
	alert('Amount exceeds than your balance');
	window.location.href='http://18.189.20.36/firstpage.html'
      </script>";

}

}else{
echo "<script>
        alert('Invalid account details');
        window.location.href='http://18.189.20.36/firstpage.html'
        </script>";


//echo "Invalid Login Credentials";
}
}
?>

