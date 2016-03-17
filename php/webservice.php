<?php

  echo "webservice";
  
  //db constants
  
  define('DB_USER', 'web235_1');
  define('DB_PASSWORD','Salome45');
  define('DB_NAME','web235_db1');
  define('DB_HOST', 'localhost');

  //SQL statement 
  $sql = "SELECT * FROM tbl_user";
  
  //array to store result
  $arrayResult = array();
  $arrayTempResult = array();
  
  //Connection to MySQL-database
  $dbcon = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) OR die('Could not connect to MySQL ' . mysqli_connect_error());

  //store result into array 
  if ($result = mysqli_query($dbcon, $sql))
    {
        while ($row = $result->fetch_object())
        {
          $arrayTempResult = $row;
          array_push($arrayResult, $arrayTempResult);
        }
        
        //output result in JSON format
        echo json_encode($arrayResult);
    }
  
  //close connection
  mysqli_close($dbcon);

?>

