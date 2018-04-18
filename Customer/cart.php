<?php include('header.php') ?>

<div class="container">

<?php
  $id = $_SESSION['id'];

  $sql = "SELECT SUM(PRICE) FROM ESTATE LEFT JOIN CART ON ESTATE.ID = CART.E_ID WHERE CART.ID = '$id'";
  $result2 = mysqli_query($db, $sql);
  $price = mysqli_fetch_assoc($result2);

  $sql = "SELECT * FROM ESTATE LEFT JOIN CART ON ESTATE.ID = CART.E_ID WHERE CART.ID = '$id'";
  $result = mysqli_query($db, $sql);

  ?>

<br>
  <header class="text-center">
    <h1 class="page-header">Cart Items</h1>
  </header>
<br>

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
       <th>ACTION</th>
    </tr>

  <?php

  while($row = mysqli_fetch_array($result) ){

    echo
      "<tr>" .
       "<td>".  $row['E_ID'] . "</td>".
       "<td>".  '<image class="img-fluid mx-auto" width="150" src="../images/' .
       $row['IMAGE']. '" alt="Hospital image">' . "</td>".
       "<td>".  $row['SELLER'] . "</td>".
       "<td>" . $row['LOCATION'] . "</td>".
       "<td>" . $row['PRICE'] . "</td>".
       "<td>" . $row['TYPE'] . "</td>".
       "<td>" . $row['SPACE'] . "</td>" .
       "<td>" . $row['OPTION'] . "</td>" .
       "<td>".
       "<form action='submit/remove_cart.php' method='POST'>
        <button class='btn btn-danger' name='id' type='submit' value='$row[E_ID]'>Remove from cart</button>
        </form> " . "</td>" .
       "</tr>";
      }
    ?>

  </table>

</div>

<br>
<hr>

<form action='checkout.php' target="_new" method='POST'>
  <div class="form-group row" >
    <div class="container col-6" Align="center">
      <h3> Total Price = <?php echo $price['SUM(PRICE)'] . " SR"; ?></h2>
    </div>

  <form action='che.php' method='POST'>
    <div class="form-group col-6" Align="center">
      <button class="btn btn-primary btn-lg" type="submit">Proceed to Checkout</button>
    </div>
  </div>
</form>

<br>
<hr>

<?php include('footer.php') ?>
