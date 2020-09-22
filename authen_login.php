<?php
if(isset($_POST['submit'])){
$selected_val = $_POST['opt'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value
if ($selected_val == "Money_Transffer")
{
	header('Location:  firstpage.html');


}

else{
        header('Location:   balancepage.php');
}
}
?>
