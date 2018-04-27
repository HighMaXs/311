<?php

// include all methods needed and stat session
require_once("../../php/functions.php");
require_once("../../php/initialize.php");
session_start();

global $db;
$db = db_connect();

if(is_post_request()) {

//store form input in variables:
  $comment= $_POST['comment'];
  $eid = $_POST['id'];
  $id = $_SESSION['id']; // id of the user
  $username = $_SESSION['username'];
  $date = date("d-m-Y H:i:s");




// insert values in database
 $sql = " INSERT INTO COMMENT  (E_ID, USERNAME, COMMENT, DAY)
 values
  ('$eid', '$username','$comment','$date')";

echo "successfully submitted";
$result = mysqli_query($db, $sql);

}else{
  echo mysqli_error($db);
  db_disconnect($db);
  redirect('../browse.php');
}

db_disconnect($db);
redirect('../browse.php');

 ?>
