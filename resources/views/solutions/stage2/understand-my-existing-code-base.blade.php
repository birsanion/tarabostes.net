@extends('layouts.app')

@section('content')
<main id="main">
  <div class="area-padding">
    <div class="container mt-5">
      <div class="row">
        <div class="col-xs-12 py-5" >
          <div class="section-headline mb-4" data-aos="zoom-in" data-aos-delay="100">
            <h2>Understand my existing code base</h2>
          </div>
          <h4 data-aos="zoom-in" data-aos-delay="100">
            Legacy code can often be a blocker to digital product progression.
          </h4>
          <br>
          <br>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Problem
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Not having a clear understanding of an existing code base is restricting ongoing improvements and development.
          </h6>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Solution
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Regardless of where you are with your current technology, our development team can quickly evaluate existing products, hosting solutions and data in order to make informed recommendations. Whether it's an initial consultation or a full audit, we can help to remove the complexity of legacy issues and outline a path for progress.
          </h6>
          <h5 class="mt-5" data-aos="fade-up" data-aos-delay="100">
            <strong class="section-title">
              Can Tarabostes review my existing code base?
            </strong>
          </h5>
          <a class="ready-btn" data-aos="fade-up" data-aos-delay="100" href="{!! route('get-in-touch') !!}">Get in touch</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
