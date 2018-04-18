<!DOCTYPE>

<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Project: Anonymous Estate Company">
    <meta name="keywords" content="HTML,CSS,KFUPM,SWE311,kfupm,css,html,swe311Web Development,Project">
    <meta name="author" content="Anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Registration Form</title>
  </head>

  <body>
    <header class="jumbotron">
      <h1 >Registration Form</h1>
    </header>

    <div class="container">
      <form action="submit.php" method="post">
        <fieldset  class="form-group">
          <legend>Please Fill Your Information:</legend>

          <div class="form-group">
            <label class="form-control-label" for="username">Username</label>
            <input class="form-control"  type="text" name="Username" placeholder="Username" required>
          </div>

          <div class="form-group">
            <label class="form-control-label" for="password">Password</label>
            <input class="form-control" type="password" name="Password" placeholder="Password" required>
          </div>

          <div class="form-group row">
            <div class="form-group col-6">
              <label class="form-control-label" for="FirstName">FirstName</label>
              <input class="form-control" type="text" name="FirstName" placeholder="First Name" required>
            </div>

            <div class="form-group col-6">
              <label class="form-control-label" for="LastName">LastName</label>
              <input class="form-control" type="text" name="LastName" placeholder="Last Name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="form-control-label" for="Phone">Phone</label>
            <input  class="form-control" type="number" name="Phone" placeholder="Ex: 056********" required>
          </div>

            <div class="form-group">
                <label class="form-control-label" for="Age">Age</label>
                <input class="form-control" type="number" name="Age" placeholder="Ex: 32" required>
            </div>

          <div class="form-group row">
            <div class="form-group col-8">
                <label class="form-control-label" for="City">City</label>
                  <select class="form-control" name="City" required>
                    <option value="" disabled selected hidden>Select your City</option>
                    <option value="Dammam">Dammam</option>
                    <option value="Riyadh">Riyadh</option>
                    <option value="Medina">Medina</option>
                    <option value="Khobar">Khobar</option>
                  </select>
            </div>

            <div class="form-group col-4">
              <label class="form-control-label" for="Gender">Gender</label>
                <select class="form-control" name="Gender" required>
                  <option value="" disabled selected hidden>Select your Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
            </div>
          </div>

          <button class="btn btn-primary btn-lg" type="submit">Submit</button>
        </fieldset>
      </form>
    </div>


    <footer class="text-center">
      <p class="text-center h4">&copy; Anonymous <?php echo date("Y");?> </p>
    </footer>
  </body>


</html>
