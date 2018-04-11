<?php

require_once("php/initialize.php");
require_once("php/functions.php");
session_start();
session_destroy();
$_SESSION = [];
redirect('index.php');
 ?>
