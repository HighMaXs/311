<?php

require_once("connect.php");

  $db = db_connect();


$term = mysqli_real_escape_string($db, $_REQUEST['term']);
  $sql = "SELECT * FROM STUDENT WHERE NAME LIKE '" . $term . "%'";
  if($result = mysqli_query($db, $sql)){
    echo  "<table class = 'table'>" .
     "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Score1</th>
        <th>Score2</th>
        <th>Score3</th>
      </tr>";
      if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_array($result)){

 echo
 "<tr>" .
 "<th>". $row['ID'] . "</th>".
 "<th>" . $row['NAME'] . "</th>".
 "<th>" . $row['SCORE1'] . "</th>".
 "<th>" . $row['SCORE2'] . "</th>".
 "<th>" . $row['SCORE3'] . "</th>" .
  "</tr>";
          }
          echo   "</table>";
          mysqli_free_result($result);
      } else{
          echo "<p>No matches found</p>";
      }
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
  }

mysqli_close($db);

?>
