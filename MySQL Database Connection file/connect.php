<?php
$server="localhost";
$username="root";
$password="";
$database="airline_reservation";
$conn=mysqli_connect($server,$username,$password,$database);
if($conn){
	echo"Connection Established";
} else{
	echo "Connection Failed";
}
