<?php

$server="localhost";
$user="root";
$password="";
$db="LMS";

$con=mysqli_connect($server,$user,$password,$db);

if(!$con)
{
   die("Could not connect to the database due to:".mysqli_connect_error());
}

else
{
   echo "Successfully connected.";
}

?>