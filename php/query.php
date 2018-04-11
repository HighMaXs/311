<?php


require_once("connect.php");

$db = db_connect();

$term = mysqli_real_escape_string($db, $_REQUEST['term']);
if(isset($term)){
    // Attempt select query execution
    $sql = "SELECT * FROM ESTATES WHERE TYPE LIKE '" . $term . "%'";
    if($result = mysqli_query($db, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['NAME'] . "</p>";
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
