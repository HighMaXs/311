<?php
include('header.php')
/*
 user data will be retrived from the database and fill all forms with these data.
 the user can modify these data submit them to the database using the submit
 button then he will be redirected to profile page.
*/
 ?>

 <?php
    $sql = "SELECT * FROM USER WHERE USERNAME = '$_SESSION[username]'";
    $result = mysqli_query($db, $sql);
    $data = mysqli_fetch_assoc($result);
  ?>

<div class="container">
<form action="submit/submit_update.php" method="post">
<fieldset  class="form-group">

<div class="form-group">
<label class="form-control-label" for="username">Username</label>
<input class="form-control"  type="text" name="Username" value="<?php echo $data['USERNAME'] ?>"  required>
</div>

<div class="form-group">
<label class="form-control-label" for="password">Password</label>
<input class="form-control" type="password" name="Password" value="<?php echo $data['PASSWORD'] ?>" required>
</div>

<div class="form-group row">
  <div class="form-group col-6">
  <label class="form-control-label" for="FirstName">FirstName</label>
  <input class="form-control" type="text" name="FirstName" value="<?php echo $data['FIRSTNAME'] ?>" required>
  </div>

  <div class="form-group col-6">
  <label class="form-control-label" for="LastName">Last Name</label>
   <input class="form-control" type="text" name="LastName" value="<?php echo $data['LASTNAME'] ?>" required>
  </div>
</div>

  <div class="form-group">
    <label class="form-control-label" for="Phone">Phone</label>
    <input  class="form-control" type="tel" name="Phone" value="<?php echo $data['PHONE'] ?>" required>
  </div>

  <div class="form-group">
      <label class="form-control-label" for="Age">Age</label>
      <input class="form-control" type="number" name="Age" value="<?php echo $data['AGE'] ?>" required>
  </div>

<div class="form-group row">
    <div class="form-group col-8">
      <label class="form-control-label" for="City">City</label>
      <select class="form-control" name="City" required >
        <?php echo   "<option  value='";
         echo $data["CITY"];
         echo"'selected hidden>". $data["CITY"] ."</option>";
         ?>
        <option value="Dammam">Dammam</option>
        <option value="Riyadh">Riyadh</option>
        <option value="Medina">Medina</option>
        <option value="Khobar">Khobar</option>
     </select>
    </div>

    <div class="form-group col-4">
      <label class="form-control-label" for="Gender">Gender</label>
      <select class="form-control" name="Gender" required>
        <?php echo   "<option  value='";
         echo $data['GENDER'];
         echo"'selected hidden>". $data['GENDER'] ."</option>";
         ?>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </div>
    </div>
      <button class="btn-block btn-lg btn-primary" type="submit">Submit</button>
    </fieldset>
    </form>
    </div>

<?php include('footer.php') ?>
