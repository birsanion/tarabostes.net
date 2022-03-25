@extends('layouts.app')

@section('content')
<main id="main">
  <div class="area-padding">
    <div class="container mt-5">
      <div class="row">
        <div class="col-xs-12 py-5" >
          <div class="section-headline mb-4" data-aos="zoom-in" data-aos-delay="100">
            <h2>Improve the conversion performance of my app</h2>
          </div>
          <br>
          <br>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Problem
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Conversion rates within my digital product are lower than expected and it’s a challenge to understand why.
          </h6>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Solution
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Low conversion rates are rarely linked to one single factor, which is why we approach Conversion Rate Optimisation (CRO) by looking at the entire funnel. How can we break down the steps we are asking customers to take on their conversion journey and what improvements can be made at each one? We ensure the right analytics are in place to accurately track users, before recommending iterative improvements which can be measured and tested.
          </h6>
          <h5 class="mt-5" data-aos="fade-up" data-aos-delay="100">
            <strong class="section-title">
              How will Tarabostes improve my app conversion?
            </strong>
          </h5>
          <a class="ready-btn" data-aos="fade-up" data-aos-delay="100" href="{!! route('get-in-touch') !!}">Get in touch</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
