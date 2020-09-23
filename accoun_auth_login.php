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
$query2 = "SELECT Amount FROM `account` WHERE Account_Number='$Account_Number'" ;
$result2 = mysqli_query($connection, $query2) or die(mysqli_error($connection));
if ($count == 1){
while($row = mysqli_fetch_array($result)){
$int = (int)$row['Amount'];
$int2 = (int)$Amount;
$int3 = $int + $int2;

$query3 = "UPDATE account SET Amount = $int3  WHERE Account_Number='$Account_Number' and Account_Holder_Name='$Account_Holder_Name' and IFSC_Code='$IFSC_Code'" ;
$result3 = mysqli_query($connection, $query3) or die(mysqli_error($connection));

echo "<script>
        alert('Amount Transffered');
        window.location.href='http://18.224.137.53/second.html'
      </script>";
}
}
else{
echo "<script>
        alert('insuuficent balancie');
        window.location.href='http://18.224.137.53/firstpage.html'
      </script>";

}








//echo $titles[]




}

?>

