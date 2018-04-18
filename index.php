<?php require_once('php/schema.php'); ?>
<?php
 CDatabase();
 CREATE_USER();
 CREATE_ESTATE();
 CREATE_COMMENT();
 CREATE_RATE();
 INSERT_USER();
 INSERT_ESTATE();
 CREATE_CART();
 CREATE_PURCHASED();
 ?>
 
<?php require_once('php/initialize.php'); ?>

<!DOCTYPE>

<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="UTF-8">
      <title>PHP Live MySQL Database Search</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/styles.css">
      <title>login page</title>
    </head>

    <body>
      <header class="jumbotron, text-center">
        <image class="img-fluid mx-auto" width="800" src="images/Estate.jpg" alt="Hospital image">
        <h1 class="page-header">Anonymous Estate Company</h1>
      </header>

      <div class="container">
        <form action= 'login.php' method ='post'>
          <fieldset class="form-group">
            <legend>Login:</legend>

            <div class="form-group">
            <label class="form-control-label" for="username">Username</label>
            <input class="form-control"  type="text" name="Username" placeholder="Ahmed" required>
            </div>

            <div class="form-group">
            <label class="form-control-label" for="password">Password</label>
            <input class="form-control" type="password" name="Password" placeholder="1234" required>
            </div>

            <button class="btn btn-primary btn-lg" type="submit">Login</button>
            <small >not a user?<a href="Register.php"> Click here to Register</a></small>
          </fieldset>
        </form>
      </div>

      <footer class="text-center">
      <p class="text-center h4">&copy; Anonymous <?php echo date("Y");?> </p>
      </footer>
    </body>

</html>
