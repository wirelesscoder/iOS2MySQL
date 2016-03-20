<?php
  // db constant
  define('DB_USER', 'web235');
  define('DB_PASSWORD','Salome45');
  define('DB_NAME','web235_db1');
  define('DB_HOST', 'localhost');

  $tableName = 'tbl_user';
  
  //Connection to MySQL-database
  $dbcon = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) OR die('Could not connect to MySQL ' . mysqli_connect_error());
  
?>

