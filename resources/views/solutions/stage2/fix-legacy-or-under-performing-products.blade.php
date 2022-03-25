@extends('layouts.app')

@section('content')
<main id="main">
  <div class="area-padding">
    <div class="container mt-5">
      <div class="row">
        <div class="col-xs-12 py-5" >
          <div class="section-headline mb-4" data-aos="zoom-in" data-aos-delay="100">
            <h2>Fix an under-performing product</h2>
          </div>
          <h4 data-aos="zoom-in" data-aos-delay="100">
            Whether it's low conversion, poor engagement or functionality errors, under-performing products need to be fixed.
          </h4>
          <br>
          <br>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Problem
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Your application is live, but it's not fixing the problem it was built to solve. Can anything be done to avoid an expensive and time-consuming return to the drawing board. And if so, what?
          </h6>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Solution
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            The Tarabostes App Audit provides a fast and efficient way of reviewing the design, technology and performance of your product in line with your business objectives. You’ll benefit from a prioritised list of actions comprising quick wins and longer term improvements to get your App back on track.
          </h6>
          <h5 class="mt-5" data-aos="fade-up" data-aos-delay="100">
            <strong class="section-title">
              How can I improve my existing or legacy app?
            </strong>
          </h5>
          <a class="ready-btn" data-aos="fade-up" data-aos-delay="100" href="{!! route('get-in-touch') !!}">Get in touch</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
