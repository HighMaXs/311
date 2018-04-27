<?php
 include('header.php');
 /*
 retrive all properties from the database which are not sold. a flag = 0 for
 propeties that are not sold and 1 for properites that are sold.
 */
  ?>

<div class="container">

<?php
  $sql = "SELECT * FROM ESTATE WHERE FLAG = '0' ";
  $result = mysqli_query($db, $sql);
  ?>


  <table class="table" ALIGN="CENTER">
    <tr>
       <th>ID</th>
       <th>IMAGE</th>
       <th>SELLER</th>
       <th>LOCATION</th>
       <th>PRICE</th>
       <th>TYPE</th>
       <th>SPACE</th>
       <th>OPTION</th>
       <th>Action</th>
    </tr>

  <?php

  while($row = mysqli_fetch_array($result)){

    echo
      "<tr>" .
       "<th>".  $row['ID'] . "</th>".
       "<th>".  '<image class="img-fluid mx-auto" width="150" src="../images/' .
       $row['IMAGE']. '" alt="Hospital image">' . "</th>".
       "<th>".  $row['SELLER'] . "</th>".
       "<th>" . $row['LOCATION'] . "</th>".
       "<th>" . $row['PRICE'] . "</th>".
       "<th>" . $row['TYPE'] . "</th>".
       "<th>" . $row['SPACE'] . "</th>" .
       "<th>" . $row['OPTION'] . "</th>".
       "<td>".
       "<form action='view.php' method='POST'>
        <button class='btn btn-primary' name='id' type='submit' value='$row[ID]'>View</button>
        </form> " . "</td>" .
      "</tr>";
      }
    ?>


  </table>

</div>

<?php include('footer.php') ?>
