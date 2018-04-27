<?php
 include('header.php');
 /*
 view page: allows the user to view all data about the propery and apply functions.
 add to cart, rate the property and post/view comments.
 */
  ?>

  <?php
  // retrive data about propery with id sent from post method
    $id = $_POST['id'];
    $sql = "SELECT * FROM ESTATE WHERE ID = '$id'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);

// rating = average rating of all users for this property
    $sql = "SELECT AVG(RATE) FROM RATE WHERE E_ID = '$id'";
    $result = mysqli_query($db, $sql);
    $rate = mysqli_fetch_assoc($result);
  ?>

<br>
<!-- print propery data -->
  <header class="text-center">
    <h1 class="page-header">Property</h1>
    <br>
    <?php echo'<image class="img-fluid mx-auto" width="600" src="../images/' .
    $row['IMAGE']. '" alt="Hospital image">'?>
  </header>

<br>
<div class="container">

  <table class="table" ALIGN="CENTER">
    <tr>
       <th>Field</th>
       <th>Data</th>
    </tr>
    <tr>
      <td>Property ID</td>
      <td><?php echo $row["ID"]?></td>
    </tr>
    <tr>
      <td>Seller</td>
      <td><?php echo $row["SELLER"]?></td>
    </tr>
    <tr>
      <td>Location</td>
      <td><?php echo $row["LOCATION"]?></td>
    </tr>
    <tr>
      <td>Price</td>
      <td><?php echo $row["PRICE"]?></td>
    </tr>
    <tr>
      <td>Property types</td>
      <td><?php echo $row["TYPE"]?></td>
    </tr>
    <tr>
      <td>Space</td>
      <td><?php echo $row["SPACE"]?></td>
    </tr>
    <tr>
      <td>OPTION</td>
      <td><?php echo $row["OPTION"]?></td>
    </tr>
    <tr>
      <td>Rating</td>
      <td><?php echo $rate['AVG(RATE)'] ?></td>
    </tr>
  </table>
</div>

<!-- add the property to the cart -->
<form action='submit/submit_cart.php' method='POST'>
 <button class='btn-block btn-primary' name='id' type='submit' value='<?php echo $row['ID']?>'>Add to Cart</button>
 </form>


<br>


<!-- choose and submit rating -->
<form action= "submit/submit_rate.php" method ='post' >
  <div class="form-group row" >
<div class="form-group col-6">
    <select class="form-control" name="Rate" required>
      <option value="" disabled selected hidden>Rate the Property</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="4">5</option>
    </select>
    <input class="form-control"  type="text" name="id" value="<?php echo $id ?>"  hidden>

</div>
<div class="form-group col-6">
<button class="btn-block btn btn-danger" type="submit" value='Rate'>Rate!</button>
</div>
</div>
</form>

  <br>

<br>

<!-- write and post comments -->
<div class="form-group">
  <form action= "submit/submit_comment.php" method ='post'>
<label class="form-control-label" for="Comment">Comment</label>
<textarea class="form-control" name="comment" rows="4" cols="50" required></textarea>
<input class="form-control"  type="text" name="id" value="<?php echo $id ?>"  hidden>
<br>
 <button class="btn-block btn btn-primary" type="submit" value='comment'>Post</button>
</form>
</div>


<?php
 // retrieve all comments for this property
  $sql = "SELECT * FROM COMMENT WHERE E_ID = $id";
  $result = mysqli_query($db, $sql);
?>

<div class="container">
  <h2>Comments</h2>
  <table class="table" ALIGN="CENTER">
    <tr>
       <th>User</th>
       <th>Comment</th>
       <th>Date</th>
    </tr>

  <?php
    while($row = mysqli_fetch_array($result)){
      echo
        "<tr>" .
         "<td>".  $row['USERNAME'] . "</th>".
         "<td>" . $row['COMMENT'] . "</th>".
         "<td>" . $row['DAY'] . "</th>".
        "</tr>";
        }
      ?>

  </table>
</div>
<br>
<?php include('footer.php') ?>
