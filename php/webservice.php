<?php
  //db variables
  $dbHost =""
  $dbUseName =""
  $dbPassWord =""
  $dbName = ""
  
  //SQL statement 
  $sql = "SELECT * FROM tbl_User";
  
  //array to store result
  $arrayResult = array();
  $arrayTempResult = array();
  
  //Connection to MySQL-database
  $con=mysqli_connect($dbHost, $dbUserName, $dbPassWord, $dbName);
  
  //if Connection failed print error message 
  if (mysqli_connect_errorno()) 
    {
      echo "Connection to database failled with error:" . mysqli_connect_error();
    }
  
  //store result into array 
  if ($result = mysqli_query($con, $sql))
    {
        while ($row = $result->fetch_object())
        {
          $arrayTempResult = $row;
          array_push($arrayResult, $arrayTempResult);
        }
        
        //output result in JSON format
        echo json_encode($resultArray);
    }
  
  //close connection
  mysqli_close($con);

?>

