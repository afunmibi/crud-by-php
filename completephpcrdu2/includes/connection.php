<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';
$db_name = 'completephpcrdu2';

$con = new mysqli($servername, $username,$password, $db_name);
if(!$con){
	echo'Not connected'.mysqli_error($con); 
}