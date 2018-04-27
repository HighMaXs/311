<?php

require_once("php/initialize.php");
require_once("php/functions.php");
session_start();
$_SESSION = [];
session_destroy();
redirect('index.php');
 ?>
