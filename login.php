<?php

require_once("php/functions.php");
require_once("php/initialize.php");

global $db;
$db = db_connect();

if(is_post_request()) {

  $username = $_POST['Username'] ?? '';
  $password = $_POST['Password'] ?? '';
  $myusername = mysqli_real_escape_string($db, $username);
  $mypassword = mysqli_real_escape_string($db, $password);

  $sql ="SELECT * FROM USER WHERE  USERNAME =  '$username'  AND  PASSWORD =  '$password'";
  $result = mysqli_query($db,$sql);
  $count = mysqli_num_rows($result);



    if($result && $count == 1 ){
        session_start();
        $user = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $user['ID'];
        $_SESSION['username'] = "$username";
        redirect('Customer/profile.php');
      }else{
      echo "username or password was not correct";
      sleep(10);
  }

}else{
  db_disconnect($db);
  redirect('index.php');
  exit;
}

db_disconnect($db);
 ?>
