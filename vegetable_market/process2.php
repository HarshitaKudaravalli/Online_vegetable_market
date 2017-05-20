<?php
	#include the connection string
	include('connection.inc');
?>
<?php

// create a variable
$firstname = $_POST['Name'];
$lastname = $_POST['Mobile'];
$department = $_POST['Email'];
$email=$_POST['City'];
$department1 = $_POST['Message'];

// Now() )


$sql= mysqli_query($conn,"INSERT INTO contactus (name,mobile,email,address,message)
		        VALUES ('$firstname','$lastname','$department','$email','$department1')");

	if(mysqli_affected_rows($conn) > 0){
	echo "<table border='1' width='100%' align='center'><tr><td align='center'>registered successfully</td></tr></table>";
header('Location: acontact.html');
exit;
        
} else {
	echo "Employee NOT Added<br />";
	echo mysqli_error ($conn);
}
?>
