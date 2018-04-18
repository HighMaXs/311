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


// insert values in database
 $sql = " INSERT INTO CART
 values
  ('$eid', '$id')";

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
