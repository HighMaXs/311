<?php
/*
connect to database, start session and make sure the user is logged in.
this pages contains the head only: title, company image and tabs which is going
to be included for other pages instead of rewriting the code.
*/
  include('../php/initialize.php');
  session_start();
  require_login();

 ?>

<!DOCTYPE>
<html>
  <head>
    <!--
      Meta data: include frameworks, make site visibl by search engines
      and provide encoding data
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Project: Anonymous Estate Company">
    <meta name="keywords" content="HTML,CSS,KFUPM,SWE311,kfupm,css,html,swe311
          Web Development,Project">
    <meta name="author" content="Anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="script" src="../js/jquery-3.2.1.min.js">
    <title>page header </title>
  </head>

  <body>
    <header class="text-center">
      <image class="img-fluid mx-auto" width="800" src="../images/Estate.jpg" alt="Hospital image">
    </header>
    <!--Navigation bar: links for other pages -->
    <nav class="nav nav-tabs nav-fill flex-column flex-sm-row">
      <a class="nav-item  nav-link " href="Profile.php">Profile</a>
      <a class="nav-item nav-link " href="Browse.php">Browse Estates</a>
      <a class="nav-item nav-link " href="search.php">Search Estates</a>
      <a class="nav-item nav-link " href="cart.php">Cart</a>
      <a class="nav-item nav-link " href="../logout.php">Logout</a>
    </nav>
