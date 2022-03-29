@extends('layouts.app')

@section('content')
<main id="main">
  <div class="area-padding">
    <div class="container mt-5">
      <div class="row">
        <div class="col-xs-12 py-5" >
          <div class="section-headline mb-4" data-aos="zoom-in" data-aos-delay="100">
            <h2>I'm looking to innovate with technology</h2>
          </div>
          <h4 data-aos="zoom-in" data-aos-delay="100">
            Being inquisitive and insightful with innovation is the best way to make new technology work for you.
          </h4>
          <br>
          <br>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Problem
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            How can technology be used to take an innovative approach to meeting my business and customer needs?
          </h6>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Solution
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Innovation is all about solving problems. Our approach is to push the boundaries of where technology can be used to have a practical and positive impact on your business. We can prioritise your challenges and use expertise from our engineering teams and technology partners to develop the right product or solution.
          </h6>
          <h5 class="mt-5" data-aos="fade-up" data-aos-delay="100">
            <strong class="section-title">
              How can I innovate with new technology?
            </strong>
          </h5>
          <a class="ready-btn" data-aos="fade-up" data-aos-delay="100" href="{!! route('contact') !!}">Get in touch</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
