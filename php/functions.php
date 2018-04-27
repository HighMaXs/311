<?php

 // check if the data sent use post method for secruity purposes
function is_post_request(){
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}
 // check if the data sent use get method
function is_get_request(){
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}

 // redirect the user to the specified page in the input
function redirect($location){
  header("Location: " . $location);
  exit;
}
// if session is set(user is logged in) let the user view the page else redirect him to login page.
function require_login(){
  if( !isset($_SESSION['username'])){
    redirect('../index.php');
  }
}

?>
