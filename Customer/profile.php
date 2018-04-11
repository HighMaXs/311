<?php include('header.php') ?>


<div class="container">

<?php
  $sql = "SELECT * FROM USER WHERE USERNAME = '$_SESSION[username]'";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>

  <table class="table-striped table-bordered" ALIGN="CENTER">
    <tr>
       <th>Field</th>
       <th>Data</th>
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
        <a href="Update.php"><button class="btn btn-primary" type="button">Update</button></a>
      </td>
    </tr>
  </table>

</div>

<?php include('footer.php') ?>
