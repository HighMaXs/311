<?php

require_once('db_credentials.php');

function db_connect(){
  // connect to database using the static variable in db_credentials else return error
  $connection = mysqli_connect(DBhost, DBuser, DBpass,DBname);

  if(!$connection){
    die("connection failed" . mysqli_connect_error());
  }
    return $connection;
}
// disconnect from databased if there is a connection
function db_disconnect($connection){
   if(isset($connection)){
       mysqli_close($connection);
   }
}
?>
