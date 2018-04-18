<?php

// update patient information in database

require_once("../../php/functions.php");
require_once("../../php/initialize.php");

global $db;
$db = db_connect();

if(is_post_request()) {

//store form input in variables:
  $username = $_POST['Username'];
  $password = $_POST['Password'];
  $firstname = $_POST['FirstName'];
  $lastname = $_POST['LastName'];
  $phone = $_POST['Phone'];
  $age = $_POST['Age'];
  $city = $_POST['City'];
  $gender = $_POST['Gender'];
  $id = $_SESSION['id'];


// insert values in database
 $sql = " UPDATE USER SET
  USERNAME = '$username',
  PASSWORD = '$password' ,
  FIRSTNAME = '$firstname',
  LASTNAME = '$lastname' ,
  PHONE = '$phone' ,
  AGE =' $age' ,
  CITY = '$city' ,
  GENDER = '$gender' WHERE ID = '$id'  ";

echo "successfully submitted";
$result = mysqli_query($db, $sql);

}else{
  echo mysqli_error($db);
}



db_disconnect($db);
redirect('../profile.php');

 ?>
