<?php

require_once("php/functions.php");
require_once("php/initialize.php");
require_once("php/query.php");

global $db;
$db = db_connect();

if(is_post_request()) {

  $username = $_POST['Username'] ?? '';
  $password = $_POST['Password'] ?? '';

  $sql ="SELECT * FROM USER WHERE  USERNAME = '$username'
   AND  PASSWORD = '$password';";
  $result = mysqli_query($db,$sql);


  if($result){
        $user = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['username'] = "$username";
        redirect('Customer/profile.php');
      }else{
      echo "username or password was not correct";
  }

}else{
  db_disconnect($db);
  redirect('index.php');
  exit;
}

db_disconnect($db);
 ?>
