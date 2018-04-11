<?php

function is_post_request(){
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request(){
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}

function redirect($location){
  header("Location: " . $location);
  exit;
}

function require_login(){
  if( !isset($_SESSION['username'])){
    redirect('../index.php');
  }
}

?>
