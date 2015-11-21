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

    <?php
      $users_id = $_SESSION['user_id'];
      $sql = "SELECT * FROM Users_info WHERE users_id=$users_id ";
      $result = $conn->query($sql);
      $row = mysqli_fetch_array($result);

      $sql = "SELECT * FROM Plans WHERE users_id=$users_id ";
      $result = $conn->query($sql);
      $row2 = mysqli_fetch_array($result);
    ?>

    <h1>Hello, <?php echo $row['name'] ?></h1>
    <h2>Your plan is: <?php echo $row2['plan_name'] ?> </h2>

    <hr>
    <h3>Lets start with simple steps: </h3>
    <div class="steps yoga">
      <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="row">
            <div class="progress" id="progress1">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                </div>
                <span class="progress-type">Overall Progress</span>
                <span class="progress-completed">20%</span>
            </div>
        </div>
        <div class="row">
            <div class="row step">
                <div id="div1" class="col-md-2" onclick="javascript: resetActive(event, 0, 'step-1');">
                    <span class="fa fa-thumbs-up"></span>
                    <p>Download Application</p>
                </div>
                <div class="col-md-2 activestep" onclick="javascript: resetActive(event, 20, 'step-2');">
                    <span class="fa fa-pencil"></span>
                    <p>Fill out</p>
                </div>
                <div class="col-md-2" onclick="javascript: resetActive(event, 40, 'step-3');">
                    <span class="fa fa-refresh"></span>
                    <p>Check</p>
                </div>
                <div class="col-md-2" onclick="javascript: resetActive(event, 60, 'step-4');">
                    <span class="fa fa-dollar"></span>
                    <p>Pay Fee</p>
                </div>
                <div class="col-md-2" onclick="javascript: resetActive(event, 80, 'step-5');">
                    <span class="fa fa-cloud-upload"></span>
                    <p>Submit Application</p>
                </div>
                <div id="last" class="col-md-2" onclick="javascript: resetActive(event, 100, 'step-6');">
                    <span class="fa fa-star"></span>
                    <p>Send Feedback</p>
                </div>
            </div>
        </div>
        <div class="row setup-content step hiddenStepInfo" id="step-1">
            <div class="col-xs-12">
                <div class="col-md-12 well text-center">
                    <h1>STEP 1</h1>
                    <h3 class="underline">Instructions</h3>
                    <p>
                      Download the application form from our repository.
                      This may require logging in.
                    </p>

                    <ul class="text-left ">
                      <li>Hi</li>
                      <li>Hi</li>
                      <li>Hi</li>
                      <li>Hi</li>
                      <li>Hi</li>
                      <li>Hi</li>
                    </ul>

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/g93SpZylCD4" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row setup-content step activeStepInfo" id="step-2">
            <div class="col-xs-12">
                <div class="col-md-12 well text-center">
                    <h1>STEP 2</h1>
                    <h3 class="underline">Instructions</h3>
                    Fill out the application.
                    Make sure to leave no empty fields.
                </div>
            </div>
        </div>
        <div class="row setup-content step hiddenStepInfo" id="step-3">
            <div class="col-xs-12">
                <div class="col-md-12 well text-center">
                    <h1>STEP 3</h1>
                    <h3 class="underline">Instructions</h3>
                    Check to ensure that all data entered is valid.
                </div>
            </div>
        </div>
        <div class="row setup-content step hiddenStepInfo" id="step-4">
            <div class="col-xs-12">
                <div class="col-md-12 well text-center">
                    <h1>STEP 4</h1>
                    <h3 class="underline">Instructions</h3>
                    Pay the application fee.
                    This can be done either by entering your card details, or by using Paypal.
                </div>
            </div>
        </div>
        <div class="row setup-content step hiddenStepInfo" id="step-5">
            <div class="col-xs-12">
                <div class="col-md-12 well text-center">
                    <h1>STEP 5</h1>
                    <h3 class="underline">Instructions</h3>
                    Upload the application.
                    This may require a confirmation email.
                </div>
            </div>
        </div>
        <div class="row setup-content step hiddenStepInfo" id="step-6">
            <div class="col-xs-12">
                <div class="col-md-12 well text-center">
                    <h1>STEP 6</h1>
                    <h3 class="underline">Instructions</h3>
                    Send us feedback on the overall process.
                    This step is not obligatory.
                </div>
            </div>
        </div>
    </div>
    </div>
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
<script type="text/javascript">
  $('.carousel').carousel({
    interval: 5000 //changes the speed
  })
  // progress steps
  function resetActive(event, percent, step) {
        $(".progress-bar").css("width", percent + "%").attr("aria-valuenow", percent);
        $(".progress-completed").text(percent + "%");

        $("div").each(function () {
            if ($(this).hasClass("activestep")) {
                $(this).removeClass("activestep");
            }
        });

        if (event.target.className == "col-md-2") {
            $(event.target).addClass("activestep");
        }
        else {
            $(event.target.parentNode).addClass("activestep");
        }

        hideSteps();
        showCurrentStepInfo(step);
    }

    function hideSteps() {
        $("div").each(function () {
            if ($(this).hasClass("activeStepInfo")) {
                $(this).removeClass("activeStepInfo");
                $(this).addClass("hiddenStepInfo");
            }
        });
    }

    function showCurrentStepInfo(step) {
        var id = "#" + step;
        $(id).addClass("activeStepInfo");
    }
</script>
</body>

</html>
