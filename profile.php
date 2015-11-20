<?php session_start();
if(isset($_SESSION["user_id"]) == true){}
else{
  header("Location: index.php");
}
?>
<?php require 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="webthemez">
  <title>Add-Life-Health-Fitness-Free-Bootstrap-HTML5-Template</title>
  <!-- core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
  <link rel="shortcut icon" href="images/ico/favicon.ico">
</head>
<body>

  <header id="header">
    <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="logo">
          </a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="scroll active"><a href="#home">Yoga</a></li>
            <li class="scroll"><a href="#services">Workout</a></li>
            <li class="scroll"><a href="#about">Meditation</a></li>
            <?php
              if(isset($_SESSION["user_id"]) == true){
                ?>
                <li><a class="btn btn-primary btn-lg custom_btn" href="profile.php">User Profile</a></li>
                <li><a class="btn btn-secondary btn-lg custom_btn" href="logout.php">Log Out</a></li>
                <?php
              }
              else{
                ?>
                <!-- <li><button class="btn btn-primary btn-lg custom_btn" href="#signup" data-toggle="modal" data-target=".bs-modal-sm">Sign In/Register</button></li> -->
                <?php
              }

            ?>
          </ul>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->


  <div class="container admin">
    <!-- <div class="message"><?php if($message!="") { echo $message; } ?></div> -->

    <h1>Hello Mr. X</h1>
    <h2>Your plan is: Weekly(Basic)</h2>

    <hr>
    <h3>Plan Info: </h3>
    <form class="" action="profile_handler.php" method="post">
      <div class="control-group">
        <label class="control-label" for="name">Plan:</label>
        <div class="controls">
          <select class="controls" name="plan_name">
            <option>Weekly</option>
            <option>Monthly</option>
            <option>Yearly</option>
          </select>
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="confirmsignup"></label>
        <div class="controls">
          <button id="confirmsignup" name="confirmsignup" class="btn btn-success pull-right">Submit</button>
        </div>
      </div>
    </form>
    <hr>

    <h3>User Info: </h3>

    <form class="" action="profile_handler.php" method="post">
      <div class="control-group">
        <label class="control-label" for="name">Full Name:</label>
        <div class="controls">
          <input id="name" name="name" class="form-control" type="text" placeholder="" class="input-large">
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="name">Address:</label>
        <div class="controls">
          <input id="address" name="address" class="form-control" type="text" placeholder="" class="input-large">
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="name">Phone:</label>
        <div class="controls">
          <input id="phone" name="phone" class="form-control" type="text" placeholder="" class="input-large">
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="name">Weight:</label>
        <div class="controls">
          <input id="weight" name="weight" class="form-control" type="text" placeholder="" class="input-large">
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="name">Height:</label>
        <div class="controls">
          <input id="height" name="height" class="form-control" type="text" placeholder="" class="input-large">
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="users_desc">Users Desc:</label>
        <div class="controls">
          <input id="users_desc" name="users_desc" class="form-control" type="textarea" placeholder="" rows=6 class="input-large">
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="confirmsignup"></label>
        <div class="controls">
          <button id="confirmsignup" name="confirmsignup" class="btn btn-success pull-right">Submit</button>
        </div>
      </div>

    </form>

    <hr>


  </div>


<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        &copy; 2015 Company Name. Template by <a target="_blank" href="http://webthemez.com/" title="Free Bootstrap Themes and HTML Templates">WebThemez.com</a>
      </div>
      <div class="col-sm-6">
        <ul class="social-icons">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          <li><a href="#"><i class="fa fa-github"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!--/#footer-->



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mousescroll.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom-scripts.js"></script>
</body>

</html>
