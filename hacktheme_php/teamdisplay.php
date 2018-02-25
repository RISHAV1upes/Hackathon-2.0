<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Themes Selected|UPES-CSI</title>


  <!-- Custom styles for this template -->
  
		<link rel="shortcut icon" href="../images/logo.png">
  <link href="css/heroic-features.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <style>
  .jumbotron{
    padding: 2rem 10rem;
  }
 .display-7{
    padding: 0rem 0rem;
 }
</style>
</head>

<body background="BG1.jpg" style="background-repeat: no-repeat;height:100%; background-position: center; background-size: cover;background-attachment: fixed; ">






<div class="container">


  <!-- Jumbotron Header -->
  <header class="jumbotron my-4">
    <center><h1 class="display-7">Teams and Selected Theme</h1></center>
       <!-- <p class="lead">Those candidates who are here to make some real life project and want to change
the course of human history ,refer to this group.</p>
<!--<a href="#" class="btn btn-primary btn-lg">Call to action!</a>-->
</header>
</div>
<br><br>
<!-- Page Content 0-->
<div class="container">

      <!-- Jumbotron Header
        <header class="jumbotron my-4">
          <h1 class="display-3" style="color:white;font-family:OCR A Std;font-weight:100;font-size:50px;">CATEGORY A</h1>
          <p class="lead" style="color:white;font-family:OCR A Std;font-weight:100;font-size:20px;">Those candidates who are here to make some real life project and want to change
          the course of human history, refer to this group.</p>
          <!--<a href="#" class="btn btn-primary btn-lg">Call to action!</a>-->

<br>

 <!-- Page Features2 -->
        <div class="row text-center">

          <div class="col-lg-6 col-md-12 mb-4">
            <div class="card">
              <!--<img class="card-img-top" src="http://placehold.it/500x325" alt="">-->
              <div class="card-body">
                <br>
                <b><h2 class="card-title" style="color:red;">TEAM ID</h2></b><hr><br>
                <?php
                include 'config.php';
                $que = mysql_query("SELECT * FROM teamdetails WHERE `theme` IS NOT NULL");
                  while ($row = mysql_fetch_array($que)) {
                     echo "<h3 style='color:blue;'>".$row['teamid']."</h3>"."<br></br>";
                   }
                ?>

              </div>
            </div>
          </div>


          <div class="col-lg-6 col-md-6 mb-4">
            <div class="card">

              <div class="card-body">
                <br>
                <b><h2 class="card-title" style="color:red;">THEME</h2></b><hr><br>
                <?php
                include 'config.php';
                $que = mysql_query("SELECT * FROM teamdetails WHERE `theme` IS NOT NULL");
                  while ($row = mysql_fetch_array($que)) {
                     echo "<h3 style='color:blue;'>".$row['theme']."</h3>"."<br></br>";
                   }
                ?>

             </div>
           </div>
         </div>
      </div>

      <!-- /.row -->

      </div>





<div class="container">

      <!-- Jumbotron Header
        <header class="jumbotron my-4">
          <h1 class="display-3" style="color:white;font-family:OCR A Std;font-weight:100;font-size:50px;">CATEGORY A</h1>
          <p class="lead" style="color:white;font-family:OCR A Std;font-weight:100;font-size:20px;">Those candidates who are here to make some real life project and want to change
          the course of human history, refer to this group.</p>
          <!--<a href="#" class="btn btn-primary btn-lg">Call to action!</a>-->

<br>

 <!-- Page Features2 -->
        <div class="row text-center">

          


      </div>

      <!-- /.row -->

      </div>








</div>
    <!-- Footer -->
    <footer class="py-5 bg-dark" style="width: 100%">
     <!-- <div class="container-fluid">-->
        <p class="m-0 text-center text-white">Copyright &copy;UPES-CSI 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  </html>
