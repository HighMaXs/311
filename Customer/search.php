
<?php
// connect to database, startsession and makesure the user is logged in otherwise redirect to index.
 require_once('../php/initialize.php');
 session_start();
 require_login();
?>

<!DOCTYPE>
<html>
  <head>
    <!--
      Meta data: include frameworks, make site visibl by search engines
      and provide encoding data
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Project: Anonymous Estate Company">
    <meta name="keywords" content="HTML,CSS,KFUPM,SWE311,kfupm,css,html,swe311
          Web Development,Project">
    <meta name="author" content="Anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Registration Form</title>

 <!--style the seller name retrived from database-->
    <style type="text/css">
        /* Formatting result items */
        .result p{
            margin: 0;
            padding: 7px 10px;
            border: 1px solid #CCCCCC;
            border-top: none;
            cursor: pointer;
            background: #FFF221;
        }
        .result p:hover{
            background: #FFFAAA;
        }
    </style>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">

    // will retive seller names from the database and display them dynamically
    $(document).ready(function(){
        $('.search-box input[type="text"]').on("keyup input", function(){
            /* Get input value on change */
            var inputVal = $(this).val();
            var resultDropdown = $(this).siblings(".result");
            if(inputVal.length){
                $.get("../php/query.php", {term: inputVal}).done(function(data){
                    // Display the returned data in browser
                    resultDropdown.html(data);
                });
            } else{
                resultDropdown.empty();
            }
        });

        /*
        Set search input value on click of result item, on click all PROPERTIES
        which are owned by seller will be retrived and displayed to the user
        then he can view the property
        */

        $(document).on("click", ".result p", function(){
            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
            $(this).parents(".result").empty();

            var x = $('#box').val();
            $.get("../php/query2.php", {term: x}).done(function(data){
            $('.result2').html(data);

          });
        });
    });
    </script>


  </head>

  <body>
    <header class="text-center">
      <image class="img-fluid mx-auto" width="800" src="../images/Estate.jpg" alt="Hospital image">
    </header>
    <!--Navigation bar-->
    <nav class="nav nav-tabs nav-fill flex-column flex-sm-row">
      <a class="nav-item  nav-link " href="Profile.php">Profile</a>
      <a class="nav-item nav-link " href="Browse.php">Browse Estates</a>
      <a class="nav-item nav-link " href="search.php">Search Estates</a>
      <a class="nav-item nav-link " href="cart.php">Cart</a>
      <a class="nav-item nav-link " href="../logout.php">Logout</a>
    </nav>

    <div class="container">
      <fieldset class="form-group">
      <legend>Search for Estates</legend>
      <!-- here the seller names will be displayed when the user types-->
        <div class="form-group search-box">
          <label class="form-control-label" for="FirstName">Seller Name:</label>
          <input class="form-control " id="box" type="text" name="FirstName" placeholder="Ex: Mohammed"
           autocomplete="off" c="Search name..." />
        <div class="result"></div>
        </div>
      <!-- here the reuslt will be displayed on click-->
      <div class="result2">
      </div>
      </fieldset>
    </div>
  <?php include('footer.php') ?>
</html>
