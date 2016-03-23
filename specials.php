<?php include 'header.php';?>
<div class="container main-content">
	<div class="row">
    	<div class="col-xs-12">
	    	<h2 class="text-center first-heading">Current Specials</h2>
        </div>
   </div>
   <div class="row">
  	<div class="col-sm-6">
    	<h3 class="text-center">Refer Us</h3>
        <div class="small-img" data-toggle="modal" data-target="#specialsModal" data-special="FREE STARTUP OR WINTERIZATION OF LAWN SPRINKLER SERVICES">
        	<img src="img/aquaguys-specials-free-lawn-service.jpg" class="clickable img-responsive clearfix" alt="FREE STARTUP OR WINTERIZATION OF LAWN SPRINKLER SERVICES"/>
        </div>
		<div class="small-img" data-toggle="modal" data-target="#specialsModal" data-special="FREE MONTH OF WEEKLY POOL SERVICE">
        	<img src="img/aquaguys-specials-free-pool-service.jpg" class="clickable img-responsive clearfix" alt="FREE MONTH OF WEEKLY POOL SERVICE"/>
        </div>
    </div>
    <div class="col-sm-6">
    	<h3 class="text-center">New Customers</h3>
        <div class="small-img" data-toggle="modal" data-target="#specialsModal" data-special="50% OFF FIRST LAWN SPRINKLER SERVICE REPAIRS">
        	<img src="img/aquaguys-specials-50-off-lawn.jpg" class="clickable img-responsive clearfix" alt="50% OFF FIRST LAWN SPRINKLER SERVICE REPAIRS"/>
    	</div>
    	<div class="small-img" data-toggle="modal" data-target="#specialsModal" data-special="50% OFF FIRST MONTH OF POOL SERVICE">
       		<img src="img/aquaguys-specials-50-off-pool.jpg" class="clickable img-responsive clearfix" alt="50% OFF FIRST MONTH OF POOL SERVICE"/>
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
                    	<div id="msgSubmit" class="alert text-center hidden"></div>
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