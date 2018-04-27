<?php

// include all methods needed and stat session
require_once("../../php/functions.php");
require_once("../../php/initialize.php");
session_start();

global $db;
$db = db_connect();

// make sure post method used for security purposes
if(is_post_request()) {

//store property id wichi is recived from cart.php
  $eid = $_POST['id'];


// remove the property which has the id recieved from post method
 $sql = " DELETE FROM CART WHERE E_ID = $eid ";

echo "successfully submitted";
$result = mysqli_query($db, $sql);

}else{
  echo mysqli_error($db);
  db_disconnect($db);
  redirect('../cart.php');
}

db_disconnect($db);
redirect('../cart.php');

 ?>
