<?php

require_once("php/functions.php");
require_once("php/initialize.php");

global $db;
$db = db_connect();

// post does not show user data in URL unlike get (post protect data)
if(is_post_request()) {

  $username = $_POST['Username'] ?? ''; // empty?
  $password = $_POST['Password'] ?? ''; // empty?
  // prtect agains sql injection:
  $myusername = mysqli_real_escape_string($db, $username);
  $mypassword = mysqli_real_escape_string($db, $password);

  $sql ="SELECT * FROM USER WHERE  USERNAME =  '$username'  AND  PASSWORD =  '$password'";
  $result = mysqli_query($db,$sql); // execute
  $count = mysqli_num_rows($result);


 // not error and data were retrived
    if($result && $count == 1 ){
        session_start();
        // fetch user data in array and add them to the session
        $user = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $user['ID'];
        $_SESSION['username'] = "$username";
        redirect('Customer/profile.php');
      }else{
      echo "username or password was not correct";
    //  redirect('index.php');
  }

}else{
  db_disconnect($db);
  redirect('index.php');
  exit;
}


db_disconnect($db);
 ?>
