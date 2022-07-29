<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
<<<<<<< HEAD
$dbname = "login_sample_db";
=======
$dbname = "shorten_link_db"; ///Paste link cho db ở đây///
>>>>>>> 4e5456f (login main file)

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
