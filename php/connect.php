<?php

require_once('db_credentials.php');

function db_connect(){
  $connection = mysqli_connect(DBhost, DBuser, DBpass,DBname);

  if(!$connection){
    die("connection failed" . mysqli_connect_error());
  }
    return $connection;
}

function db_disconnect($connection){
   if(isset($connection)){
       mysqli_close($connection);
   }
}
?>
