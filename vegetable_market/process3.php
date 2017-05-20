<?php
	#include the connection string
	include('connection.inc');
?>
<?php

// create a variable
$firstname = $_POST['Name'];
$lastname = $_POST['Mobile'];
$department = $_POST['Email'];

$department1 = $_POST['Message'];

// Now() )


$sql= mysqli_query($conn,"INSERT INTO feedback (name,mobile,email,feedback)
		        VALUES ('$firstname','$lastname','$department','$department1')");

	if(mysqli_affected_rows($conn) > 0){
	echo "<table border='1' width='100%' align='center'><tr><td align='center'>registered successfully</td></tr></table>";
header('Location: afeedback.html');
exit;

} else {
	echo "error<br />";
	echo mysqli_error ($conn);
}
?>
