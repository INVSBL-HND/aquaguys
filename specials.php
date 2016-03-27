<?php include 'header.php';?>
<div class="container main-content">
	<div class="row">
    	<div class="col-xs-12">
	    	<h2 class="text-center first-heading">Current Specials</h2>
        </div>
   </div>
   <div class="row">
  	<div class="col-sm-6">
  		<div class="row">
			<h3 class="text-center">Refer Us</h3>
			<div class="col-xs-12">
            	<div class="thumbnail special-thumbnail">
					<img src="img/aquaguys-specials-free-service-lawn.jpg" class="img-responsive clearfix" alt="Free Startup or Winterization of Lawn Sprinkler Service"/>
					<caption>
						<h3 class="text-center">Free Startup or Winterization of Lawn Sprinkler Service</h3>
						<p class="text-center">Tell your friends and neighbors about Aqua Guys services and receive a free Startup or Winterization service if your referral completes 3 full months of service with us.<br><small><i>Not valid with any other offer.</i></small></p>
						<p class="text-center"><a class="btn btn-success" data-toggle="modal" data-target="#specialsModal" data-special="Free Startup or Winterization of Lawn Sprinkler Service">Get This Offer</a></p>
					</caption>
            	</div>
            </div>
			<div class="col-xs-12">
				<div class="thumbnail special-thumbnail">
					<img src="img/aquaguys-specials-free-service-pool.jpg" class="img-responsive clearfix" alt="Free Month of Weekly Pool Service"/>
					<caption>
						<h3 class="text-center">Free Month of Weekly Pool Service</h3>
						<p class="text-center">Tell your friends and neighbors about Aqua Guys services and receive a free month of our weekly pool services if your referral completes 3 full months.<br><small><i>Cannot be used for openings and closings. Not valid with any other offer. Pool services available in Fairfield County, CT and Westchester, NY</i></small></p>
						<p class="text-center"><a class="btn btn-success" data-toggle="modal" data-target="#specialsModal" data-special="Free Month of Weekly Pool Service">Get This Offer</a></p>
					</caption>
                </div>
			</div>
  		</div>
    </div>
    <div class="col-sm-6">
    	<div class="row">
			<h3 class="text-center">New Customers</h3>
			<div class="col-xs-12">
            	<div class="thumbnail special-thumbnail">
					<img src="img/aquaguys-specials-50-off-lawn.jpg" class="img-responsive clearfix" alt="50% Off First Lawn Sprinkler Service Repairs"/>
					<caption>
						<h3 class="text-center">50% Off First Lawn Sprinkler Service Repairs</h3>
						<p class="text-center">For NEW Aqua Guys customers only with prepaid annual contract up to $250.<br><small><i>Not valid with any other offer.</i></small></p>
						<p class="text-center"><a class="btn btn-success" data-toggle="modal" data-target="#specialsModal" data-special="50% Off First Lawn Sprinkler Service Repairs">Get This Offer</a></p>
					</caption>
            	</div>
            </div>
			<div class="col-xs-12">
				<div class="thumbnail special-thumbnail">
					<img src="img/aquaguys-specials-50-off-pool.jpg" class="img-responsive clearfix" alt="50% Off First Month of Pool Service"/>
					<caption>
						<h3 class="text-center">50% Off First Month of Pool Service</h3>
						<p class="text-center">For NEW Aqua Guys customers only, with prepaid annual contract – Not for openings and closings.<br><small><i>Not valid with any other offer.</i></small></p>
						<p class="text-center"><a class="btn btn-success" data-toggle="modal" data-target="#specialsModal" data-special="50% Off First Month of Pool Service">Get This Offer</a></p>
					</caption>
                </div>
			</div>
  		</div>
    </div>
    <div class="modal fade" id="specialsModal" tabindex="-1" role="dialog" aria-labelledby="specialsModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="specialsModalLabel">New message</h4>
          </div>
            <form role="form" id="specialsForm" data-toggle="validator" class="shake">
            	 <div class="modal-body">
                      <h4>Get in Touch!<br/><small>* indicates a required field</small></h4>
                      <div class="form-group">
                        <label for="name">Name*</label>
                        <input type="name" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name.">
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                        <label for="email">Email*</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your email address.">
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                        <label for="phone">Phone*</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required data-error="Please enter your phone number.">
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                        <label for="special">Special</label>
                        <input type="text" class="form-control" id="special" name="special" value="" placeholder="" readonly>
                      </div>
                      <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" rows="3" id="message" name="message" placeholder="Additional info"></textarea>
                      </div>
                      <div class="radio">
                        <h5>Preferred Method of Contact</h5>
                        <label class="radio-inline">
                        <input type="radio" name="contact" id="contact1" value="phone" checked>
                        Phone
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="contact" id="contact2" value="email">
                        Email
                        </label>
                      </div>
                      <div class="form-group">
                      	<label for="human" class="control-label">Answer this question: 2 + 3 = ?</label>
                        <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer" required data-error="Please solve the equation.">
                        <div class="help-block with-errors"></div>
					</div>
                    <div class="form-group">
                    	<div id="specialsFormAlert" class="alert text-center hidden"></div>
					</div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="form-submit" type="submit" name="submit" class="btn btn-success">Submit</button>
                  </div>
              </form>
        </div>
      </div>
	</div>
  </div>
</div>
<?php include 'footer.php' ;?>