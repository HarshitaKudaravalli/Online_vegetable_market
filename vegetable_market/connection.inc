<?php

$servername='localhost'; 
$username='cs641hk'; 
$password='Usa@1234'; 
$dbname='cs641kt'; 

$conn= mysqli_connect($servername,$username, $password,$dbname) OR DIE ('Unable to connect to database! Please try again later.');
 $rs = @mysqli_select_db($conn, $dbname);
if (!$conn){
    die('Could not connect: ' . mysql_error());
}
?>
