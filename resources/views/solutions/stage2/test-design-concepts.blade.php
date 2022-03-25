@extends('layouts.app')

@section('content')
<main id="main">
  <div class="area-padding">
    <div class="container mt-5">
      <div class="row">
        <div class="col-xs-12 py-5" >
          <div class="section-headline mb-4" data-aos="zoom-in" data-aos-delay="100">
            <h2>Test design concepts</h2>
          </div>
          <h4 data-aos="zoom-in" data-aos-delay="100">
            Testing at the design stage helps a project to remain user-focused and doesn't have to slow things down.<br>
            Here's how…
          </h4>
          <br>
          <br>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Problem
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Getting robust results from testing design concepts can be a lengthy and inefficient process.
          </h6>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Solution
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Tarabostes uses design sprints to consolidate design ideas and test concepts with rapid prototyping. This fast and low-cost exercise enables concepts to be prioritised and then tested with users to ensure only effective ideas are progressed. And all in a matter of days.
          </h6>
          <h5 class="mt-5" data-aos="fade-up" data-aos-delay="100">
            <strong class="section-title">
              How will Tarabostes test my digital product concept?
            </strong>
          </h5>
          <a class="ready-btn" data-aos="fade-up" data-aos-delay="100" href="{!! route('get-in-touch') !!}">Get in touch</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
