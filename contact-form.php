
<div class="panel panel-default">
<div class="panel-body">
<form role="form" id="contactForm" data-toggle="validator" class="shake">
<h4>FOR MORE INFORMATION, CONFIRM SERVICE OR A FREE CONSULTATION<br/><small>* indicates a required field</small></h4>
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
    <label for="message">Message</label>
    <textarea class="form-control" rows="3" id="message" name="message" placeholder="Additional info"></textarea>
  </div>
  <div class="form-group">
    <label for="human" class="control-label">Answer this question: 2 + 3 = ?</label>
   	<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer" required data-error="Please solve the equation.">
    <div class="help-block with-errors"></div>
  </div>
  <div class="form-group">
  	<div id="contactSubmitMsg" class="h6 text-center hidden"></div>
  </div>
  <button id="contactSubmitBtn" type="submit" name="submit" class="btn btn-success">Submit</button>
</form>
</div>
</div>