<?php
// include the header
 include('header.php');
 /*
 this page retrive user data from the database and desplay them.
 a button is included at the end to update user information which is sent
 using post method to update.php to allow the users to update their information.
 */
?>


<div class="container">

  <?php
    $sql = "SELECT * FROM USER WHERE USERNAME = '$_SESSION[username]'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);
  ?>

  <table class="table" ALIGN="CENTER">
    <tr>
       <th>Field</th>
       <th>Data</th>
    </tr>
    <tr>
      <td>ID</td>
      <td><?php echo $row["ID"]?></td>
    </tr>
    <tr>
      <td>Username</td>
      <td><?php echo $row["USERNAME"]?></td>
    </tr>
    <tr>
      <td>First Name</td>
      <td><?php echo $row["FIRSTNAME"]?></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><?php echo $row["LASTNAME"]?></td>
    </tr>
    <tr>
      <td>Phone Number</td>
      <td><?php echo $row["PHONE"]?></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><?php echo $row["AGE"]?></td>
    </tr>
    <tr>
      <td>City</td>
      <td><?php echo $row["CITY"]?></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><?php echo $row["GENDER"]?></td>
    </tr>
    <tr>
      <td colspan ="2">
        <a href="Update.php"><button class="btn-block btn-lg btn-primary" type="button">Update</button></a>
      </td>
    </tr>
  </table>

</div>

<?php
// include the footer
 include('footer.php')
  ?>
