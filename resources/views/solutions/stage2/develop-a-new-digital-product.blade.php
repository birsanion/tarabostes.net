@extends('layouts.app')

@section('content')
<main id="main">
  <div class="area-padding">
    <div class="container mt-5">
      <div class="row">
        <div class="col-xs-12 py-5" >
          <div class="section-headline mb-4" data-aos="zoom-in" data-aos-delay="100">
            <h2>Develop a new digital product</h2>
          </div>
          <h4 data-aos="zoom-in" data-aos-delay="100">
            Technical excellence comes from expertise, experience and the ability to remove complexity while delivering on the overall aim of the product.
          </h4>
          <br>
          <br>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Problem
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Finding a development partner to create a digital product which is on brief, moves customer expectations and just works.
          </h6>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Solution
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Our development team uses an agile, continuous-delivery approach to ensure the end product meets your specifications. This means the team continuously release and test new features, presenting them to key stakeholders for approval.
          </h6>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Development involves everything from receiving the initial client brief and discovery outputs, through to the launch plan and transition into a support model tailored to your business needs.
          </h6>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            We believe collaboration with our clients is the only way to ensure projects are delivered efficiently to meet all goals.
          </h6>
          <h5 class="mt-5" data-aos="fade-up" data-aos-delay="100">
            <strong class="section-title">
              Where do I start with my digital product development?
            </strong>
          </h5>
          <a class="ready-btn" data-aos="fade-up" data-aos-delay="100" href="{!! route('get-in-touch') !!}">Get in touch</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
