@extends('layouts.app')

@section('content')
<main id="main">
  <div class="area-padding">
    <div class="container mt-5">
      <div class="row">
        <div class="col-xs-12 py-5" >
          <div class="section-headline mb-4" data-aos="zoom-in" data-aos-delay="100">
            <h2>Get my app featured in the App Store</h2>
          </div>
          <h4 data-aos="zoom-in" data-aos-delay="100">
            App Store blindness from the sheer volume of competition puts a premium on getting your product in front of the right users.
          </h4>
          <br>
          <br>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Problem
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            With so many apps vying for eyeballs, my app struggles to get exposure and visibility in the App Store.
          </h6>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Solution
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Our specialist product marketing team has the tools and experience to help your app achieve its potential. We can help to increase the chances of your app being featured in the App Store and Google Play by working with the Apple and Google marketing teams to highlight why your app will appeal to their audiences.
          </h6>
          <h5 class="mt-5" data-aos="fade-up" data-aos-delay="100">
            <strong class="section-title">
              How do we get featured in the App Store?
            </strong>
          </h5>
          <a class="ready-btn" data-aos="fade-up" data-aos-delay="100" href="{!! route('get-in-touch') !!}">Get in touch</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
