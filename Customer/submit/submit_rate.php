<?php


require_once("../../php/functions.php");
require_once("../../php/initialize.php");
session_start();

global $db;
$db = db_connect();

if(is_post_request()) {

//store form input in variables:
  $eid = $_POST['id'];
  $id = $_SESSION['id']; // id of the user
  $rate = $_POST['Rate'];


// insert values in database
 $sql = " INSERT INTO RATE
 values
  ('$eid', '$id','$rate')";

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
