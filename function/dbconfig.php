<?php
class dbConnection{
  public function __construct(){
    global $conn;
    $conn = new mysqli("localhost", "root", "" , "db_ams");
    //check error 
    if(!$conn){
      die("Database cannot established connection properly: " . $conn->connect_error());
    }

  }
}

?>
