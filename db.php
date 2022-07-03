<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "advertise_me";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn)
{
	echo "not connected";
}
?>