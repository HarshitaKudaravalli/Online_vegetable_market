<?php
	#include the connection string
	include('connection.inc');
?>
<?php

// create a variable
$firstname = $_POST['email'];
$lastname = $_POST['pass'];

// Now() )


$sql= mysqli_query($conn,"SELECT * from regform where email='$firstname' and password='$lastname'");

	if(mysqli_affected_rows($conn) > 0){
	echo "<table border='1' width='100%' align='center'><tr><td align='center'>registered successfully</td></tr></table>";
header('Location: aacount.html');
exit;


} else {
	echo "Employee NOT Added<br />";
header('Location: error.html');
exit;
	echo mysqli_error ($conn);
}
?>
