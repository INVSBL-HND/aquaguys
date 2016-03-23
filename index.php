<?php include 'header.php';?>
<div class="container-fluid">
	<div class="row">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="carousel-img">
                <a href="pool_faq.php">
              	  <img src="img/aquaguys-home-01.jpg" alt="Pool FAQ">
                </a>
            </div>
        </div>
        <div class="item">
          <div class="carousel-img">
          	<a href="lighting_faq.php">
	          <img src="img/aquaguys-home-02.jpg" alt="Lighting FAQ">
            </a>
          </div>
        </div>
        <div class="item">
          <div class="carousel-img">
          	<a href="sprinkler_faq.php">
	          <img src="img/aquaguys-home-03.jpg" alt="Sprinkler FAQ">
            </a>
          </div>
        </div>
      </div>
    
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
<div class="container main-content">
  <div class="row">
  	<div class="col-sm-12 col-md-9">
    	<div class="row">
            <div class="col-sm-4">
                <h3 class="first-heading">Experience</h3>
                <p>Recognized as a leader in the northeast since 1966, we are totally licensed professionals who have years of understanding how to enhance landscapes. Maintaining Lawn Sprinkler Systems on award-winning landscapes, we are now introducing a superb complete Pool Service to complement any landscape.</p>
            </div>
            <div class="col-sm-4">
                <h3 class="first-heading">Partnership</h3>
                <p>After 50 years in the business we recognize the importance of partnership. We work together with our clients to achieve optimum satisfaction and exquisite results. Experience has proven we need professional partners: architects, property managers and industry leaders to provide cutting edge design and products for your ultimate landscape and pool.</p>
            </div>
            <div class="col-sm-4">
                <h3 class="first-heading">Value</h3>
                <p>Who today is not concerned about getting the most for what they are spending? We quote exactly and properly, but allow for flexibility if adjustments are necessary. The proof is in the performance. Our clients are extremely satisfied with our superb service and value because we have over a 95% renewal rate on our services every year.</p>
            </div>
       </div>
        <div class="row">
            <div class="col-xs-4 col-sm-4">
                <a href="sprinkler_services.php">
                    <img src="img/aquaguys-home-lawn.jpg" class="img-responsive" alt="Lawn Services">
                </a>
            </div>
            <div class="col-xs-4 col-sm-4">
                <a href="pool_services.php">
                    <img src="img/aquaguys-home-pool.jpg" class="img-responsive" alt="Pool Services">
                </a>
            </div>
            <div class="col-xs-4 col-sm-4">
                <a href="specials.php">
                    <img src="img/aquaguys-home-specials.jpg" class="img-responsive" alt="Specials">
                </a>
            </div>
       </div>
   	</div>
    <aside class="col-sm-12 col-md-3">
    	<div class="hidden-md"><br></div>
    	<?php include 'contact-form.php';?>
    </aside>
  </div>
</div>
<?php include 'footer.php' ;?>