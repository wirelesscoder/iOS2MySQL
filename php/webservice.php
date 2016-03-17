<?php

  echo "webservice";
  
  //db variables
  
  define('DB_USER', 'web235_1');
  define('DB_PASSWORD','Salome45');
  define('DB_NAME','web235_db1');
  define('DB_HOST', 'localhost');


  //SQL statement 
  //$sql = "SELECT * FROM tbl_user";
  
  
  



  //array to store result
  //$arrayResult = array();
  //$arrayTempResult = array();
  
  //Connection to MySQL-database
  //$con=mysqli_connect($dbHost, $dbUserName, $dbPassWord, $dbName);

  //$con=mysqli_connect("localhost","web235_1","Salome45","web235_db1");

  $dbcon = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) OR die('Could not connect to MySQL ' . mysqli_connect_error());
  


  
  //if Connection failed print error message 
  //if (mysqli_connect_errorno()) 
  //  {
  //    echo "Connection to database failled with error";
  //  }
  
  //store result into array 
  /*if ($result = mysqli_query($con, $sql))
    {
        while ($row = $result->fetch_object())
        {
          $arrayTempResult = $row;
          array_push($arrayResult, $arrayTempResult);
        }
        
        //output result in JSON format
        echo json_encode($arrayResult);
    }
  */
  //close connection
  //mysqli_close($dbcon);

?>

