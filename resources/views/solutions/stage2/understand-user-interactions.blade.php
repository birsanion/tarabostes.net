@extends('layouts.app')

@section('content')
<main id="main">
  <div class="area-padding">
    <div class="container mt-5">
      <div class="row">
        <div class="col-xs-12 py-5" >
          <div class="section-headline mb-4" data-aos="zoom-in" data-aos-delay="100">
            <h2>Understand user interactions</h2>
          </div>
          <h4 data-aos="zoom-in" data-aos-delay="100">
            In order to fully understand the way customers interact with digital products, we can create a plan specific to your users through three main areas of focus.
          </h4>
          <br>
          <br>
          <h6 data-aos="fade-left" data-aos-delay="100">
            <i class="bi bi-caret-right-fill text-blue-dark"></i> <strong>Research</strong> - The first is understanding the user themselves. Who is the audience, what is their need and how do they benefit? At Tarabostes, this begins with research through data, in-field studies and interviews.
          </h6>
          <h6 data-aos="fade-left" data-aos-delay="100">
            <i class="bi bi-caret-right-fill text-blue-dark"></i> <strong>Test</strong> - People using a product is the best way to understand interactions. Our testing services can be deployed across numerous platforms and devices to not only create robust products, but also examine user behaviour and deliver feedback.
          </h6>
          <h6 data-aos="fade-left" data-aos-delay="100">
            <i class="bi bi-caret-right-fill text-blue-dark"></i> <strong>Validate</strong> - The final step is to validate interactions through ongoing measurement and analytics to ensure they are driving the right impact.
          </h6>
          <h5 class="mt-5" data-aos="fade-up" data-aos-delay="100">
            <strong class="section-title">
              How will Tarabostes help me define the user experience?
            </strong>
          </h5>
          <a class="ready-btn" data-aos="fade-up" data-aos-delay="100" href="{!! route('get-in-touch') !!}">Get in touch</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
