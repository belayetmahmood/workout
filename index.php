<?php session_start(); echo var_dump($_SESSION); ?>
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

<body id="home">
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
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#services">Classes</a></li>
            <li class="scroll"><a href="#about">About</a></li>
            <li class="scroll"><a href="#our-team">Trainers</a></li>
            <li class="scroll"><a href="#portfolio">Gallery</a></li>
            <li class="scroll"><a href="#pricing">Pricing</a></li>
            <li class="scroll"><a href="#contact-us">Contact</a></li>
            <?php
              if(isset($_SESSION["user_id"]) == true){
                ?>
                <li><a class="btn btn-primary btn-lg custom_btn" href="admin.php">User Panel</a></li>
                <li><a class="btn btn-secondary btn-lg custom_btn" href="logout.php">Log Out</a></li>
                <?php
              }
              else{
                ?>
                <li><button class="btn btn-primary btn-lg custom_btn" href="#signup" data-toggle="modal" data-target=".bs-modal-sm">Sign In/Register</button></li>
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


  <!-- Modal -->
<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
              <li class=""><a href="#signup" data-toggle="tab">Register</a></li>
              <li class=""><a href="#why" data-toggle="tab">Why?</a></li>
            </ul>
        </div>
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in" id="why">
        <p>We need this information so that you can receive access to the site and its content. Rest assured your information will not be sold, traded, or given to anyone.</p>
        <p></p><br> Please contact <a mailto:href="JoeSixPack@Sixpacksrus.com"></a>JoeSixPack@Sixpacksrus.com</a> for any other inquiries.</p>
        </div>
        <div class="tab-pane fade active in" id="signin">
            <form class="form-horizontal" action="login.php" method="POST">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Email:</label>
              <div class="controls">
                <input required id="userid" name="email" type="email" class="form-control" placeholder="bela@example.com" class="input-medium">
              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="passwordinput">Password:</label>
              <div class="controls">
                <input required id="passwordinput" name="password" class="form-control" type="password" placeholder="********" class="input-medium">
              </div>
            </div>

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <button id="signin" name="signin" class="btn btn-success">Sign In</button>
              </div>
            </div>
            </fieldset>
            </form>
        </div>
        <div class="tab-pane fade" id="signup">
            <form class="form-horizontal" method="POST" action="register.php">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
            <!-- <div class="control-group">
              <label class="control-label" for="name">Name:</label>
              <div class="controls">
                <input id="name" name="name" class="form-control" type="text" placeholder="Bela" class="input-large">
              </div>
            </div> -->

            <div class="control-group">
              <label class="control-label" for="Email">Email:</label>
              <div class="controls">
                <input id="Email" name="email" class="form-control" type="text" placeholder="bela@ex.com" class="input-large" required="">
              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="password">Password:</label>
              <div class="controls">
                <input id="password" name="password" class="form-control" type="password" placeholder="********" class="input-large" required="">
                <em>1-8 Characters</em>
              </div>
            </div>

            <!-- <div class="control-group">
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
              <label class="control-label" for="users_desc">Users Desc:</label>
              <div class="controls">
                <input id="users_desc" name="users_desc" class="form-control" type="textarea" placeholder="" rows=6 class="input-large">
              </div>
            </div> -->






            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="confirmsignup" class="btn btn-success">Sign Up</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div>
    </div>
  </div>
</div>



  <!-- Full Page Image Background Carousel Header -->
  <header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
      <div class="item active">
        <!-- Set the first background image using inline CSS below. -->
        <div class="fill" style="background-image:url('images/arnold.jpg'); background-position: top;"></div>
        <div class="carousel-caption">
          <h2>
            <blockquote cite="A">
              <p class="text-left">
                Strength does not come from winning. Your struggles develop your strengths. When you go through hardships and decide not to surrender, that is strength.
              </p>
            </blockquote>
            <h1 class="text-right">Arnold S.</h1>
          </h2>
        </div>
      </div>
      <div class="item">
        <!-- Set the second background image using inline CSS below. -->
        <div class="fill" style="background-image:url('images/dorian-yates.jpg'); background-position: top;"></div>
        <div class="carousel-caption">
          <h2>Caption 2</h2>
        </div>
      </div>
      <div class="item">
        <!-- Set the third background image using inline CSS below. -->
        <div class="fill" style="background-image:url('images/rock.jpg'); background-position: top;"></div>
        <div class="carousel-caption">
          <h2>Caption 3</h2>
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="icon-next"></span>
    </a>

  </header>

  <!-- <section id="hero-banner">
             <div class="banner-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">

                                    <h2>Stronger than <b>EVER</b></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisici <br/> Praesent eget risus.</p>
                                    <a class="btn btn-primary btn-lg" href="#">Start Now</a>

                            </div>
                        </div>
                    </div>
                </div>
    </section> -->

  <section id="services">
    <div class="container">
      <!-- <div class="message"><?php if($message!="") { echo $message; } ?></div> -->

      <div class="section-header">
        <h2 class="section-title wow fadeInDown">Whats Best For You</h2>
        <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
          <br> semper aliquam quis mattis quam.</p>
      </div>

      <div class="row">
        <div class="features">
          <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
            <div class="media service-box">
              <div class="pull-left">
                <i class="fa fa-futbol-o"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Aerobic</h4>
                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
              </div>
            </div>
          </div>
          <!--/.col-md-4-->

          <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
            <div class="media service-box">
              <div class="pull-left">
                <i class="fa fa-compass"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Cardio</h4>
                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
              </div>
            </div>
          </div>
          <!--/.col-md-4-->

          <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
            <div class="media service-box">
              <div class="pull-left">
                <i class="fa fa-database"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Six Pack</h4>
                <p>Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>
              </div>
            </div>
          </div>
          <!--/.col-md-4-->

          <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
            <div class="media service-box">
              <div class="pull-left">
                <i class="fa fa-bar-chart"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Classes</h4>
                <p>Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>
              </div>
            </div>
          </div>
          <!--/.col-md-4-->

          <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
            <div class="media service-box">
              <div class="pull-left">
                <i class="fa fa-paper-plane-o"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Special Trainer</h4>
                <p>Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>
              </div>
            </div>
          </div>
          <!--/.col-md-4-->

          <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
            <div class="media service-box">
              <div class="pull-left">
                <i class="fa fa-bullseye"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Health Sports</h4>
                <p>Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>
              </div>
            </div>
          </div>
          <!--/.col-md-4-->
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#services-->


  <section id="about">
    <div class="container">

      <div class="section-header">
        <h2 class="section-title wow fadeInDown">Who we are</h2>
        <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
          <br> semper aliquam quis mattis quam.</p>
      </div>

      <div class="row">
        <div class="col-sm-6 wow fadeInLeft">
          <img class="img-responsive" src="images/about.png" alt="">
        </div>

        <div class="col-sm-6 wow fadeInRight">
          <h3 class="column-title">Our Fitness Studio</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa semper aliquam quis mattis quam. Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa semper aliquam quis mattis quam adipiscing elit. Praesent eget risus vitae massa.</p>
          <ul class="listarrow">
            <li><i class="fa fa-angle-double-right"></i>Aerobic</li>
            <li><i class="fa fa-angle-double-right"></i>Cardio</li>
            <li><i class="fa fa-angle-double-right"></i>Abdomen</li>
            <li><i class="fa fa-angle-double-right"></i>Special Trainer</li>
            <li><i class="fa fa-angle-double-right"></i>Round the clock</li>
          </ul>


        </div>
      </div>
    </div>
  </section>
  <!--/#about-->

  <section id="our-team">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title wow fadeInDown">
          OUR TRAINERS
        </h2>
        <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
          <br> semper aliquam quis mattis quam.</p>
      </div>


      <div class="row text-center">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
            <div class="team-img">
              <img class="img-responsive" src="images/team/01.jpg" alt="">
            </div>
            <div class="team-info">
              <h3>Micky Deo</h3>
              <span>Founder</span>
            </div>
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
            <div class="team-img">
              <img class="img-responsive" src="images/team/02.jpg" alt="">
            </div>
            <div class="team-info">
              <h3>Mike Timobbs</h3>
              <span>Sr. Trainer</span>
            </div>
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
            <div class="team-img">
              <img class="img-responsive" src="images/team/03.jpg" alt="">
            </div>
            <div class="team-info">
              <h3>Remo Silvaus</h3>
              <span>Sr. Trainer</span>
            </div>
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
            <div class="team-img">
              <img class="img-responsive" src="images/team/04.jpg" alt="">
            </div>
            <div class="team-info">
              <h3>Niscal Deon</h3>
              <span>Jr. Trainer</span>
            </div>
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!--/#our-team-->

  <section id="portfolio">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title wow fadeInDown">Gallery</h2>
        <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
          <br> semper aliquam quis mattis quam.</p>
      </div>

      <div class="text-center">
        <ul class="portfolio-filter" style="display:none">
          <li><a class="active" href="#" data-filter="*">All Works</a></li>
          <li><a href="#" data-filter=".designing">Designing</a></li>
          <li><a href="#" data-filter=".mobile">Mobile App</a></li>
          <li><a href="#" data-filter=".development">Development</a></li>
        </ul>
        <!--/#portfolio-filter-->
      </div>

      <div class="portfolio-items">
        <div class="portfolio-item designing">
          <div class="portfolio-item-inner">
            <img class="img-responsive" src="images/portfolio/01.jpg" alt="">
            <div class="portfolio-info">
              <a class="preview" href="images/portfolio/01.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
            </div>
          </div>
        </div>
        <!--/.portfolio-item-->

        <div class="portfolio-item mobile development">
          <div class="portfolio-item-inner">
            <img class="img-responsive" src="images/portfolio/02.jpg" alt="">
            <div class="portfolio-info">
              <a class="preview" href="images/portfolio/02.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
            </div>
          </div>
        </div>
        <!--/.portfolio-item-->

        <div class="portfolio-item designing">
          <div class="portfolio-item-inner">
            <img class="img-responsive" src="images/portfolio/03.jpg" alt="">
            <div class="portfolio-info">
              <a class="preview" href="images/portfolio/03.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
            </div>
          </div>
        </div>
        <!--/.portfolio-item-->

        <div class="portfolio-item mobile">
          <div class="portfolio-item-inner">
            <img class="img-responsive" src="images/portfolio/04.jpg" alt="">
            <div class="portfolio-info">
              <a class="preview" href="images/portfolio/04.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
            </div>
          </div>
        </div>
        <!--/.portfolio-item-->

        <div class="portfolio-item designing development">
          <div class="portfolio-item-inner">
            <img class="img-responsive" src="images/portfolio/05.jpg" alt="">
            <div class="portfolio-info">
              <a class="preview" href="images/portfolio/05.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
            </div>
          </div>
        </div>
        <!--/.portfolio-item-->

        <div class="portfolio-item mobile">
          <div class="portfolio-item-inner">
            <img class="img-responsive" src="images/portfolio/06.jpg" alt="">
            <div class="portfolio-info">
              <a class="preview" href="images/portfolio/06.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
            </div>
          </div>
        </div>
        <!--/.portfolio-item-->

        <div class="portfolio-item designing development">
          <div class="portfolio-item-inner">
            <img class="img-responsive" src="images/portfolio/07.jpg" alt="">
            <div class="portfolio-info">
              <a class="preview" href="images/portfolio/07.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
            </div>
          </div>
        </div>
        <!--/.portfolio-item-->

        <div class="portfolio-item mobile">
          <div class="portfolio-item-inner">
            <img class="img-responsive" src="images/portfolio/08.jpg" alt="">
            <div class="portfolio-info">
              <a class="preview" href="images/portfolio/08.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
            </div>
          </div>
        </div>
        <!--/.portfolio-item-->
      </div>
    </div>
    <!--/.container-->
  </section>
  <!--/#portfolio-->

  <section id="pricing">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title wow fadeInDown">Pricing</h2>
        <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
          <br> semper aliquam quis mattis quam.</p>
      </div>

      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">
          <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms">
            <ul class="pricing">
              <li class="plan-header">
                <div class="price-duration">
                  <span class="price">
                    $45
                  </span>
                  <span class="duration">
                    per month
                  </span>
                </div>

                <div class="plan-name">
                  Basic
                </div>
              </li>
              <li>
                <strong>1</strong> DOMAIN</li>
              <li>
                <strong>100GB</strong> DISK SPACE</li>
              <li>
                <strong>UNLIMITED</strong> BANDWIDTH</li>
              <li>SHARED SSL CERTIFICATE</li>
              <li>
                <strong>10</strong> EMAIL ADDRESS</li>
              <li>
                <strong>24/7</strong> SUPPORT</li>
              <li class="plan-purchase"><a class="btn btn-primary" href="#">Get It Now!</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">
          <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="200ms">
            <ul class="pricing featured">
              <li class="plan-header">
                <div class="price-duration">
                  <span class="price">
                    $85
                  </span>
                  <span class="duration">
                    per month
                  </span>
                </div>

                <div class="plan-name">
                  Bronze
                </div>
              </li>
              <li>
                <strong>5</strong> DOMAIN</li>
              <li>
                <strong>500GB</strong> DISK SPACE</li>
              <li>
                <strong>UNLIMITED</strong> BANDWIDTH</li>
              <li>SHARED SSL CERTIFICATE</li>
              <li>
                <strong>30</strong> EMAIL ADDRESS</li>
              <li>
                <strong>24/7</strong> SUPPORT</li>
              <li class="plan-purchase"><a class="btn btn-primary" href="#">Get It Now!</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">
          <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="400ms">
            <ul class="pricing">
              <li class="plan-header">
                <div class="price-duration">
                  <span class="price">
                    $125
                  </span>
                  <span class="duration">
                    per month
                  </span>
                </div>

                <div class="plan-name">
                  Silver
                </div>
              </li>
              <li>
                <strong>10</strong> DOMAIN</li>
              <li>
                <strong>2GB</strong> DISK SPACE</li>
              <li>
                <strong>UNLIMITED</strong> BANDWIDTH</li>
              <li>SHARED SSL CERTIFICATE</li>
              <li>
                <strong>50</strong> EMAIL ADDRESS</li>
              <li>
                <strong>24/7</strong> SUPPORT</li>
              <li class="plan-purchase"><a class="btn btn-primary" href="#">Get It Now!</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">
          <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
            <ul class="pricing">
              <li class="plan-header">
                <div class="price-duration">
                  <span class="price">
                    $185
                  </span>
                  <span class="duration">
                    per month
                  </span>
                </div>

                <div class="plan-name">
                  Gold
                </div>
              </li>
              <li>
                <strong>15</strong> DOMAIN</li>
              <li>
                <strong>10GB</strong> DISK SPACE</li>
              <li>
                <strong>UNLIMITED</strong> BANDWIDTH</li>
              <li>SHARED SSL CERTIFICATE</li>
              <li>
                <strong>100</strong> EMAIL ADDRESS</li>
              <li>
                <strong>24/7</strong> SUPPORT</li>
              <li class="plan-purchase"><a class="btn btn-primary" href="#">Get It Now!</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/#pricing-->



  <section id="business-stats">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title wow fadeInDown">Healty Report</h2>
        <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
          <br> semper aliquam quis mattis quam.</p>
      </div>

      <div class="row text-center">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
            <div class="business-stats" data-digit="6850" data-duration="1000"></div>
            <strong>Clients</strong>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
            <div class="business-stats" data-digit="1465" data-duration="1000"></div>
            <strong>Trainer</strong>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
            <div class="business-stats" data-digit="4325" data-duration="1000"></div>
            <strong>Programs</strong>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
            <div class="business-stats" data-digit="2568" data-duration="1000"></div>
            <strong>Successes</strong>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/#business-stats-->


  <section class="testimonial-area" id="testimonial">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title wow fadeInDown">Testimonial</h2>
        <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
          <br> semper aliquam quis mattis quam.</p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
            <div class="row">
              <div class="col-xs-12">
                <blockquote>Sontrary to popular belief, Lorem Ipsuis no simply random text. It has roots in a piece of classical Layears old. belief, Lorem Ipsuis not simply</blockquote>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-3">
                <img src="images/pic1.jpg" alt="client">
              </div>
              <div class="col-xs-9 half-gutter">
                <h5>John Bond</h5>
                <h6>Lorem Ipsuis simply</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
            <div class="row">
              <div class="col-xs-12">
                <blockquote>Tontrary to popular belief, Lorem Ipsuis no simply random text. It has roots in a piece of classical Layears old. belief, Lorem Ipsuis not simply</blockquote>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-3">
                <img src="images/pic2.jpg" alt="client">
              </div>
              <div class="col-xs-9 half-gutter">
                <h5>John Bond</h5>
                <h6>Lorem Ipsuis simply</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
            <div class="row">
              <div class="col-xs-12">
                <blockquote>Aontrary to popular belief, Lorem Ipsuis no simply random text. It has roots in a piece of classical Layears old. belief, Lorem Ipsuis not simply</blockquote>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-3">
                <img src="images/pic1.jpg" alt="client">
              </div>
              <div class="col-xs-9 half-gutter">
                <h5>John Bond</h5>
                <h6>Lorem Ipsuis simply</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contact-us">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title wow fadeInDown">Contact Us</h2>
        <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
          <br> semper aliquam quis mattis quam.</p>
      </div>
    </div>
  </section>
  <!--/#contact-us-->


  <section id="contact">

    <div class="container">
      <div class="container contact-info">
        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="contact-form">
              <h3>Contact Info</h3>

              <address>
                <strong>Amazing Company, Inc.</strong>
                <br> 12345 NewYork, Street 125
                <br> United States 94107
                <br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
              </address>
            </div>
          </div>
          <div class="col-sm-8 col-md-8">
            <div class="contact-form">

              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                </div>
                <div class="form-group">
                  <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/#bottom-->

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
  </script>
</body>

</html>
