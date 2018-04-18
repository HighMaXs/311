<?php


require_once("../../php/functions.php");
require_once("../../php/initialize.php");
session_start();

global $db;
$db = db_connect();

if(is_post_request()) {

//store form input in variables:
  $id = $_SESSION['id']; // id of the user
  $date = date("d-m-Y");

// ID OF ALL PROPERTIES
  $sql = "SELECT * FROM ESTATE LEFT JOIN CART ON ESTATE.ID = CART.E_ID WHERE CART.ID = '$id'";
  $result = mysqli_query($db, $sql);

  while($row = mysqli_fetch_array($result) ){

    $eid = $row['E_ID']; // ID OF PROPERTY
    echo $eid;

// FLAG = 1 FOR BOUGHT PROPERTIES
  $sql = " UPDATE ESTATE SET
   FLAG = '1' WHERE ID = '$eid'  ";

   $result2 = mysqli_query($db, $sql);

   // STORE BILL IN DATABASE
    $sql = " INSERT INTO PURCHASED
    VALUES
     ('$eid', '$id', '$date') ";

    $result3 = mysqli_query($db, $sql);

// REMOVE PROPERTIES FROM CART
    $sql = " DELETE FROM CART
    WHERE ID = '$id' OR E_ID = '$eid'";

    $result4 = mysqli_query($db, $sql);

}
    echo "successfully submitted";

}else{
  echo mysqli_error($db);
  db_disconnect($db);
  redirect('../cart.php');
}

db_disconnect($db);
redirect('../cart.php');

 ?>
