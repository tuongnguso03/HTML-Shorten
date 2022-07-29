<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "shorten_link_db"; ///Paste link cho db ở đây///

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
