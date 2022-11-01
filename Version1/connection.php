<?php

$dbhost = "localhost";
$dbuser = "u-210074349";
$dbpass = "hzft34TquhqKE7u";
$dbname = "u_210074349_business_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

