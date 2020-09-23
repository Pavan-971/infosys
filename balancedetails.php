<?php
 require('db_connect.php');

if (isset($_POST['Account_Number'])){

// Assigning POST values to variables.
$Account_Number = $_POST['Account_Number'];


// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT Amount FROM `account` WHERE Account_Number='$Account_Number'" ;

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){


	while($row = mysqli_fetch_array($result)){
		echo '<script>alert("Account Balance: ' . $row['Amount'] . '")
			window.location.href="http://18.224.137.53/second.html"
                        
                     </script>';

	}
	
}
else{
echo "<script>
	alert('Invalid account number');
	window.location.href='http://18.224.137.53/balancepage.php.html'
      </script>";

}


}
?>

