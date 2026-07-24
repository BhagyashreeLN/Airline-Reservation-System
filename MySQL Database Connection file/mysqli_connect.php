<?php
$server="localhost";
$username="root";
$password="";
$database="airline_reservation";
$dbc=mysqli_connect($server,$username,$password,$database);
if($dbc){
	echo"";
} else{
	echo "Connection Failed";
}

?>