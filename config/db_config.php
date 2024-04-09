<?php

$dbhost = 'localhost';
$dbuser = 'net24rdellemann_netwerken_toets_2024';
$dbpass = 'A)b@i^I$Qb3(';
$dbname = 'netwerken_2024';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>