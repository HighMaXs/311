<?php

require_once("connect.php");

  $db = db_connect();


$term = mysqli_real_escape_string($db, $_REQUEST['term']);
  $sql = "SELECT * FROM ESTATE WHERE SELLER LIKE '" . $term . "%'";
  if($result = mysqli_query($db, $sql)){

 echo  "<table class = 'table'>";
    echo
    "<tr>
       <th>ID</th>
       <th>Image</th>
       <th>SELLER</th>
       <th>LOCATION</th>
       <th>PRICE</th>
       <th>TYPE</th>
       <th>SPACE</th>
       <th>OPTION</th>
       <th>ACTION</th>
     </tr>";


      if(mysqli_num_rows($result) > 0){

          while($row = mysqli_fetch_array($result)){


   echo
   "<tr>" .
     "<td>".  $row['ID'] . "</td>".
     "<td>".  '<image class="img-fluid mx-auto" width="150" src="../images/' .
     $row['IMAGE']. '" alt="Hospital image">' . "</td>".
     "<td>".  $row['SELLER'] . "</td>".
     "<td>" . $row['LOCATION'] . "</td>".
     "<td>" . $row['PRICE'] . "</td>".
     "<td>" . $row['TYPE'] . "</td>".
     "<td>" . $row['SPACE'] . "</td>" .
     "<td>" . $row['OPTION'] . "</td>" .
     "<td>".
     "<form action='view.php' method='POST'>
      <button class='btn btn-primary' name='id' type='submit' value='$row[ID]'>View</button>
      </form> " . "</td>" .
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
