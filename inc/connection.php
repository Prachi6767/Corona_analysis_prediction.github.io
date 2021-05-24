<?php

function connect()
{
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname="coronatracker";
	
	return mysqli_connect("127.0.0.1:3307","root","","covid");
	
	

}

?>