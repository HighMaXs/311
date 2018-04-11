<?php
  include('../php/initialize.php');
  session_start();
  require_login();

 ?>

<!DOCTYPE>
<html>
  <head>
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
    <title>Registration Form</title>
  </head>

  <body>
    <header class="text-center">
      <image class="img-fluid mx-auto" width="800" src="../images/Estate.jpg" alt="Hospital image">
    </header>
    <!--Navigation bar-->
    <nav class="nav nav-tabs nav-fill flex-column flex-sm-row">
      <a class="nav-item  nav-link " href="Profile.php">Profile</a>
      <a class="nav-item nav-link " href="Browse.php">Browse Estates</a>
      <a class="nav-item nav-link " href="scores.php">Search Estates</a>
      <a class="nav-item nav-link " href="rating.php">Rate</a>
      <a class="nav-item nav-link " href="advertise.php">Advertsments</a>
      <a class="nav-item nav-link " href="../logout.php">Logout</a>
    </nav>
