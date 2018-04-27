<?php

require_once("connect.php");

$db = db_connect();

/*
this page is used for search function. it will take the term which is written
in the search box and store it in $term variable using Request method and will
check whether the variable is empty or not. if it is empty then print not match.
if it contains data it will make query from data base for a value that matches
input in search box. it will print the matched values. 
*/

$term = mysqli_real_escape_string($db, $_REQUEST['term']);
if(isset($term)){

    // Attempt select query execution
    $sql = "SELECT * FROM ESTATE WHERE SELLER LIKE '" . $term . "%' ";
    if($result = mysqli_query($db, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){

            echo "<p>" . $row['SELLER'] . "</p>";
            }
            // Close result set
            mysqli_free_result($result);
        } else{
            echo "<p>No matches found</p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
    }
}

mysqli_close($db);


?>
