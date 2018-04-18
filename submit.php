<?php


// submit user information and insert them in database
require_once("php/functions.php");
require_once("php/initialize.php");

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


// insert values in database
 $sql = " INSERT INTO USER (USERNAME,PASSWORD,FIRSTNAME
 ,LASTNAME,PHONE,AGE,CITY,GENDER) VALUES(";
 $sql .= "'" . $username   . "',";
 $sql .= "'" . $password   . "',";
 $sql .= "'" . $firstname  . "',";
 $sql .= "'" . $lastname   . "',";
 $sql .= "'" . $phone      . "',";
 $sql .= "'" .  $age       . "' ,";
 $sql .= "'" . $city       . "',";
 $sql .=  "'". $gender     . "')";




echo "successfully submitted";
$result = mysqli_query($db, $sql);

}else{
  echo mysqli_error($db);
  db_disconnect($db);
  redirect('index.php');
  exit;
}



db_disconnect($db);
redirect('index.php');

 ?>
