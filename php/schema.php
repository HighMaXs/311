<?php

require_once('db_credentials.php');
require_once('connect.php');

/*
this page contain a list of functions to create the database, tables
and insert needed data which is useful for the prototype and allow anyone
to start using the site immediately which helpful for development
*/

// create the database if it is not created
function CDatabase(){

  $connection = mysqli_connect(DBhost, DBuser, DBpass);

  if(!$connection){
    die("connection failed" . mysqli_connect_error());
  }

  $sql = "CREATE DATABASE IF NOT EXISTS estate;";
  $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
}

// create table for customers
function CREATE_USER(){
    $db = db_connect();
    $sql = "CREATE TABLE USER (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    USERNAME VARCHAR(30) NOT NULL UNIQUE KEY,
    PASSWORD VARCHAR(15) NOT NULL,
    FIRSTNAME VARCHAR(30) NOT NULL,
    LASTNAME VARCHAR(30) NOT NULL,
    PHONE VARCHAR(10) NOT NULL,
    AGE INT(3),
    CITY VARCHAR(30),
    GENDER VARCHAR(6)
  )";

  if (mysqli_query($db, $sql)) {
  }

}

// create table for properties: houses for example
function CREATE_ESTATE(){
  $db = db_connect();
  $sql = "CREATE TABLE ESTATE (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    IMAGE VARCHAR(30),
    SELLER VARCHAR(30),
    LOCATION VARCHAR(50),
    PRICE VARCHAR(100),
    TYPE VARCHAR(10),
    SPACE VARCHAR(10),
    OPTION VARCHAR(10),
    FLAG VARCHAR(1) DEFAULT '0'
  )";

  if (mysqli_query($db, $sql)) {
  }

}

// comments table which connect users with properties.
function CREATE_COMMENT(){
  $db = db_connect();
 //id = comment id, E_id = property id, day = time and date of comment
  $sql = "CREATE TABLE COMMENT (
    ID INT(6) AUTO_INCREMENT PRIMARY KEY,
    E_ID INT(6),
    USERNAME VARCHAR(30),
    COMMENT VARCHAR(255),
    DAY VARCHAR(20)
  )";


  if (mysqli_query($db, $sql)) {
  }

}

// rate table which connect users with properties.
function CREATE_RATE(){
  $db = db_connect();
   // id = user id, E_id = property id
  $sql = "CREATE TABLE RATE (
    E_ID INT(6) PRIMARY KEY,
    ID INT(6)  unique,
    RATE INT(2)
  )";

  if (mysqli_query($db, $sql)) {
  }

}
// cart for customers which allows them to add and remove properties
function CREATE_CART(){
  $db = db_connect();
   // id = user id, E_id = propery id 
  $sql = "CREATE TABLE CART (
    E_ID INT(6) PRIMARY KEY,
    ID INT(6)
  )";

  if (mysqli_query($db, $sql)) {
  }
}

// contain information about who bought the property and when(data and time)
function CREATE_PURCHASED(){
  $db = db_connect();
   // id = user id
   //start = time and data of purchase
  $sql = "CREATE TABLE PURCHASED (
    E_ID INT(6) PRIMARY KEY,
    ID INT(6),
    START VARCHAR(20)
  )";

  if (mysqli_query($db, $sql)) {
  }
}

// insert customers data
function INSERT_USER(){
$db = db_connect();
$sql ="INSERT INTO USER
  (ID, USERNAME, PASSWORD, FIRSTNAME, LASTNAME, PHONE, AGE, CITY, GENDER)
 VALUES
  (1, 'Mohammed', '1234', 'Mohammed', 'Ahmed', 0564568, 15, 'Dammam', 'Male'),
  (2, 'Ahmed', '1234', 'Mohammed', 'Ahmed', 0564568, 15, 'Khobar', 'Male'),
  (3, 'Ryan', '1234', 'Mohammed', 'Ahmed', 0564568, 15, 'Makka', 'Male'),
  (4, 'Muhanned', '1234', 'Mohammed', 'Ahmed', 0564568, 15, 'Dhahran', 'Male'),
  (5, 'Ali', '1234', 'Mohammed', 'Ahmed', 0564568, 15, 'Dammam', 'Female'),
  (6, 'Mahdi', '1234', 'Mohammed', 'Ahmed', 0564568, 15, 'Madina', 'Female'),
  (7, 'Raed', '1234', 'Mohammed', 'Ahmed', 0564568, 15, 'Dammam', 'Female'),
  (8, 'Qasim', '1234', 'Mohammed', 'Ahmed', 0564568, 15, 'Dammam', 'Female');";

  if (mysqli_query($db, $sql)) {
  }

}

// insert properties data
function INSERT_ESTATE(){
    $db = db_connect();
    $sql ="INSERT INTO ESTATE
    (ID, IMAGE, SELLER, LOCATION, PRICE, TYPE, SPACE, OPTION)
    VALUES
    (1, 'real-estate.jpg','Mohammed Saleh','Dammam',1500000, 'House', '26000', 'BUY'),
    (2, 'real-estate-house.jpg','Ali qahtani','Dammam',1000000, 'House', '22000' , 'BUY'),
    (3, 'real-estate-villa.jpg','Mahdi Alnaser','Dammam',13000000, 'Villa', '2500000', 'BUY'),
    (4, 'real-estate-house2.jpg','Raed Ahmadi','Dammam',1500000, 'House', '25000', 'RENT'),
    (5, 'House.jpg','Ahmed alrasheed','Dammam',900000, 'House', '15000', 'RENT'),
    (6, 'HorseCountry.jpg','Mohammed haddad','Dammam',100500, 'House', '30000', 'RENT');";

    if (mysqli_query($db, $sql)) {
    }


}



?>
