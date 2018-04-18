<?php


require_once("../../php/functions.php");
require_once("../../php/initialize.php");
session_start();

global $db;
$db = db_connect();

if(is_post_request()) {

//store form input in variables:
  $eid = $_POST['id'];


// insert values in database
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
