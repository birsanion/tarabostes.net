<form action="{{ route('api.contact') }}" method="post" role="form" class="php-email-form">
  <div class="row mt-4">
    <div class="col-md-6">
      <div class="form-group">
        <label class="form-label">First name <span class="text-danger">*</span></label>
        <input type="text" name="first_name" class="form-control"  required="">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label class="form-label">Last name <span class="text-danger">*</span></label>
        <input type="text" name="last_name" class="form-control" required="">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group mt-3">
        <label class="form-label">Phone number <span class="text-danger">*</span></label>
        <input type="text" name="phone" class="form-control" required="">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group mt-3">
        <label class="form-label">Email <span class="text-danger">*</span></label>
        <input type="email" name="email" class="form-control" required="">
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group mt-3">
        <label class="form-label">Company <span class="text-danger">*</span></label>
        <input type="text" name="company_name" class="form-control" required="">
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group mt-3">
        <label class="form-label">How can we help you? <span class="text-danger">*</span></label>
        <textarea class="form-control" name="message" rows="5" required=""></textarea>
      </div>
    </div>
    <div class="col-md-12">
      <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </div>
    </div>
  </div>
</form>
