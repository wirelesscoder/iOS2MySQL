<?php

//Connection to MySQL-database
$con=mysqli_connect("dbHost","userName","passWord",dbName");

//if Connection failed print error message
if (mysqli_connect_errorno()) 
{
  echo "Connection to database failled with error:" . mysqli_connect_error()
}

//SQL statement 



//close connection

?>

