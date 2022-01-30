<?php
$dbhost = "localhost";
$dbuser = "id18354666_admin";
$dbpass = "HRgq95Sc(\=HoWRX";
$dbname = "id18354666_usersdb";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("Failed to connect!");
}  