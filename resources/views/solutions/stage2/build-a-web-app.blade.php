@extends('layouts.app')

@section('content')
<main id="main">
  <div class="area-padding">
    <div class="container mt-5">
      <div class="row">
        <div class="col-xs-12 py-5" >
          <div class="section-headline mb-4" data-aos="zoom-in" data-aos-delay="100">
            <h2>Build a web app</h2>
          </div>
          <h4 data-aos="zoom-in" data-aos-delay="100">
            Delivering great experiences across any device with a browser, web applications are a natural cross-platform option.
          </h4>
          <br>
          <br>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Problem
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Can web apps effectively deliver engaging and effective mobile experiences?
          </h6>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Solution
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Web applications are just as capable of delivering brilliant mobile experiences as their native counterparts. While your business requirements should be the driving force behind your technology choice, the proliferation of Progressive Web Applications (PWAs) has created a viable cross-platform alternative. Our development teams can help to define your needs and arrive at the right technology to meet them.
          </h6>
          <h5 class="mt-5" data-aos="fade-up" data-aos-delay="100">
            <strong class="section-title">
              Why work with Tarabostes for web development?
            </strong>
          </h5>
          <a class="ready-btn" data-aos="fade-up" data-aos-delay="100" href="{!! route('get-in-touch') !!}">Get in touch</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
