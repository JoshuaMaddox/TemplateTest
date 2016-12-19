<?php  
  /* Header Template */
?> 
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?php bloginfo('template-url') ?>/imgs/favicon.ico">
  <!--FONT AWESOME STYLE SHEETS HERE-->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/font-awesome/css/font-awesome.min.css">
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
</head>
<body>
<!-- NAVBAR 
=========================================================================================================
-->
 <nav id="section1">
  <div class="navbar-wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> <!-- button -->
          <a class="navbar-brand" href="http://jmaddox.com"><img src="<?php bloginfo('template_url') ?>/imgs/JBM_logo.png" alt="Joshua Maddox" width="166px" height="20px"></a>
        </div><!-- navbar-header -->
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active link1"><a id="link1" class="nav-section1" href="#section1">Top</a></li>
            <li><a id="link2" class="nav-section2" href="#section2">Key Positions</a></li>
            <li><a id="link3" class="nav-section3" href="#section3">Quick Points</a></li>
            <li><a id="link4" class="nav-section4" href="#section4">My Projects</a></li>
            <li><a id="link5" class="nav-section5" href="#section5">On The Web</a></li>
            
          </ul><!-- navigation -->  
        </div><!-- navbar-collapse -->
      </div><!-- container -->  
    </div><!-- navbar -->
  </div><!-- navbar-wrapper --> 
</nav>
<!-- HEADER 
=========================================================================================================
-->
<header class="jm-main-header" id="section1"> 
  <div class="container">
    <div class="row jm-intro">
      <div class="col-xs-12">
        <div class="jm-header-text">
          <img class="img-responsive img-circle jm-header-img" src="<?php bloginfo('template_url') ?>/imgs/JoshuaMaddox.jpg" alt="Head Shot of Joshua Maddox">
          <h1>Joshua Maddox</h1>
          <p>I am passionate about using marketing, code, design and entrepreneurship as tools for social good and poverty elimination. I've often said I would've loved to have been a full-time student; luckily, I've chosen a career that requires an insatiable appetite for learning...or else.  
          </p>
        </div><!--JM-HEADER-TEXT-->
      </div><!--COL-->
      <div class="col-sm-4">
        <button class="btn jm-btn-header"><a href="https://drive.google.com/file/d/0BxpDt5ltPm9eNk5lS2UtNktSTlk/view?usp=sharing" target="_blank">RESUME</a></button>
      </div><!--COL-->
      <div class="col-sm-4">
        <button class="btn jm-btn-header"><a href="http://cinderhouse.com.au" target="_blank">DESIGN</a></button>
      </div><!--COL-->
      <div class="col-sm-4">
        <button class="btn jm-btn-header"><a href="https://github.com/JoshuaMaddox" target="_blank">GITHUB</a></button>
      </div><!--COL-->  
    </div><!--ROW-->
  </div><!--CONTAINER-->
</header>