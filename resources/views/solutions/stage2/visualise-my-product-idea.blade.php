@extends('layouts.app')

@section('content')
<main id="main">
  <div class="area-padding">
    <div class="container mt-5">
      <div class="row">
        <div class="col-xs-12 py-5" >
          <div class="section-headline mb-4" data-aos="zoom-in" data-aos-delay="100">
            <h2>I want to visualise my product idea</h2>
          </div>
          <h4 data-aos="zoom-in" data-aos-delay="100">
            Product ideas should be brought to life as quickly and efficiently as possible in order to minimise risk and over investment.
          </h4>
          <br>
          <br>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Visualising a product requires a blend of skills across strategy, design and technology. Cue an Tarabostes design sprint.
          </h6>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Tarabostes's multi-disciplinary teams have exactly the right combination of expertise to visualise your product idea and turn it into a viable reality.
          </h6>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            What's the insight which underpins the problem the product is solving, what experience will it create for the user and what is the best technology to bring that to life?
          </h6>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            We use design sprints, as part of a bigger project or as a standalone service, to solve a specific problem or test new ideas. It can be used to validate and visualise a proposed approach before going through a full design.
          </h6>
          <h5 class="mt-5" data-aos="fade-up" data-aos-delay="100">
            <strong class="section-title">
              How can I visualise my product idea?
            </strong>
          </h5>
          <a class="ready-btn" data-aos="fade-up" data-aos-delay="100" href="{!! route('contact') !!}">Get in touch</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
