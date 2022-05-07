<?php 
$dbhost ="localhost";
$dbuser="root";
$dbpass="";
$dbname="meterreader_db";

if(!$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("fialed to connect");
}