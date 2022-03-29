@extends('layouts.app')

@section('content')
<main id="main">
  <div class="area-padding">
    <div class="container mt-5">
      <div class="row">
        <div class="col-xs-12 py-5" >
          <div class="section-headline mb-4" data-aos="zoom-in" data-aos-delay="100">
            <h2>Manage my app reviews and ratings</h2>
          </div>
          <h4 data-aos="zoom-in" data-aos-delay="100">
            Poor reviews aren't just about functionality flaws. Active community management is a key part of keeping customers happy.
          </h4>
          <br>
          <br>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Problem
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            My app has a poor rating in the App Store and Google Play.
          </h6>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Solution
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Having the right infrastructure for customer support and optimisation in app stores can be just as important as the in-app experience. Tarabostes’s community management team provides best practice in responding to app store reviews, creating stock answers for common questions and a feedback loop to ensure comments are factored into future functionality discussions. We can respond to all reviews within 24 hours, engage with your app users and turn one star reviews into five.
          </h6>
          <h5 class="mt-5" data-aos="fade-up" data-aos-delay="100">
            <strong class="section-title">
              How do we get to a 5-star app rating?
            </strong>
          </h5>
          <a class="ready-btn" data-aos="fade-up" data-aos-delay="100" href="{!! route('contact') !!}">Get in touch</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
