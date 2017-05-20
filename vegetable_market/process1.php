<?php
	#include the connection string
	include('connection.inc');
?>
<?php

// create a variable
$firstname = $_POST['name'];
$lastname = $_POST['gender'];
$department = $_POST['ename'];
$email=$_POST['pass'];
$department1 = $_POST['addr'];
$email1=$_POST['pno'];
// Now() )


$sql= mysqli_query($conn,"INSERT INTO regform (name,gender,email,password,address,phone)
		        VALUES ('$firstname','$lastname','$department','$email','$department1','$email1')");

	if(mysqli_affected_rows($conn) > 0){
	echo "<table border='1' width='100%' align='center'><tr><td align='center'>registered successfully</td></tr></table>";
header('Location: aregister.html');
exit;
	
} else {
	echo "Employee NOT Added<br />";
	echo mysqli_error ($conn);
}
?>
