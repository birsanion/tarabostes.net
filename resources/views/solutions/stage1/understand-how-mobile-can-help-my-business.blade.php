@extends('layouts.app')

@section('content')
<main id="main">
  <div class="area-padding">
    <div class="container mt-5">
      <div class="row">
        <div class="col-xs-12 py-5" >
          <div class="section-headline mb-4" data-aos="zoom-in" data-aos-delay="100">
            <h2>I'm looking to understand how mobile can help my business</h2>
          </div>
          <h4 data-aos="zoom-in" data-aos-delay="100">
            You know the importance of mobile, but your current presence isn’t delivering for your business. Where do you start?
          </h4>
          <br>
          <br>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Problem
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Everybody knows we have to be mobile-first, but turning that approach into action and understanding exactly how it can deliver impact isn’t always straightforward.
          </h6>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Solution
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Through a simple initial evaluation process, Tarabostes can help to quickly map your current presence, measure its effectiveness and outline immediate areas where mobile can make a difference.
          </h6>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            That could be about optimising an existing product, improving visibility of a current application or making recommendations for ongoing technology support. We ensure our experience helps you to be clear about what you should or shouldn’t be doing on mobile.
          </h6>
          <h5 class="mt-5" data-aos="fade-up" data-aos-delay="100">
            <strong class="section-title">
              How will a mobile app benefit my business?
            </strong>
          </h5>
          <a class="ready-btn" data-aos="fade-up" data-aos-delay="100" href="{!! route('get-in-touch') !!}">Get in touch</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
