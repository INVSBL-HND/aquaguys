<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Aqua Guys</title>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="css/aquaguys.css" rel="stylesheet" type="text/css">
<link href="css/animate.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<header class="aqua-header hidden-xs">
	<div class="container">
    	<div class="row">
        	<div class="col-sm-9 col-sm-offset-3">
            	<img src="img/aquaguys-water_wise_guys.png" alt="The Water Wise Guys">
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-default" id="aqua-nav">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
    </div>
    <div class="collapse navbar-collapse" id="defaultNavbar1">
        <div class="row">
        	<div class="col-sm-3">
            	<div class="nav-logo">
            	<a href="index.php" class="hidden-xs"><img src="img/aquaguys-logo-md.png" alt="The Aqua Guys"/></a>
                </div>
            </div>
            <div class="col-sm-9">
              <ul class="nav navbar-nav">
              	<?php $pagename = basename($_SERVER['PHP_SELF']);?>
                <li <?php if ($pagename == 'index.php') { echo 'class="active"';}?>><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
                <li class="dropdown <?php if ($pagename == 'sprinkler_services.php' || $pagename == 'sprinkler_faq.php') { echo ' active';}?>">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sprinklers <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li <?php if ($pagename == 'sprinkler_services.php') { echo 'class="active"';}?>><a href="sprinkler_services.php">Sprinkler Services</a></li>
                    <li <?php if ($pagename == 'sprinkler_faq.php') { echo 'class="active"';}?>><a href="sprinkler_faq.php">Sprinkler Q&amp;A</a></li>
                    <li <?php if ($pagename == 'lighting_faq.php') { echo 'class="active"';}?>><a href="lighting_faq.php">Nightscaping Q&amp;A</a></li>
                  </ul>
                </li>
                <li class="dropdown <?php if ($pagename == 'pool_services.php' || $pagename == 'pool_faq.php') { echo ' active';}?>">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pools <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li <?php if ($pagename == 'pool_services.php') { echo 'class="active"';}?>><a href="pool_services.php">Pool Services</a></li>
                    <li <?php if ($pagename == 'pool_faq.php') { echo 'class="active"';}?>><a href="pool_faq.php">Pool Q&amp;A</a></li>
                  </ul>
                </li>
                <li <?php if ($pagename == 'partners.php') { echo 'class="active"';}?>><a href="partners.php">Partners</a></li>
                <li <?php if ($pagename == 'specials.php') { echo 'class="active"';}?>><a href="specials.php">Specials</a></li>
                <li <?php if ($pagename == 'contact.php') { echo 'class="active"';}?>><a href="contact.php">Contact</a></li>
              </ul>
            </div>
       	</div>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>