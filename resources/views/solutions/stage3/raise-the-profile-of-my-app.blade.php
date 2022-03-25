@extends('layouts.app')

@section('content')
<main id="main">
  <div class="area-padding">
    <div class="container mt-5">
      <div class="row">
        <div class="col-xs-12 py-5" >
          <div class="section-headline mb-4" data-aos="zoom-in" data-aos-delay="100">
            <h2>Raise the profile of my app</h2>
          </div>
          <h4 data-aos="zoom-in" data-aos-delay="100">
            Building a great application is one thing, getting people to use it another. Make your app stand out from the millions out there.
          </h4>
          <br>
          <br>
          <h5 class="mt-5"  data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              Increasing Visibility
            </strong>
          </h5>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            With more than 230 billion apps available to download, standing out from the crowd has never been more important for both new and established apps.
          </h6>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Tatabostes software has built a series of ASO best practices to help optimise your app's presence online and increase conversion:
          </h6>
          <h6 data-aos="fade-left" data-aos-delay="100">
            <i class="bi bi-caret-right-fill text-blue-dark"></i> Maximising app store visibility
          </h6>
          <h6 data-aos="fade-left" data-aos-delay="100">
            <i class="bi bi-caret-right-fill text-blue-dark"></i> Increasing traffic
          </h6>
          <h6 data-aos="fade-left" data-aos-delay="100">
            <i class="bi bi-caret-right-fill text-blue-dark"></i> Improving organic downloads
          </h6>
          <h5 class="mt-5"  data-aos="zoom-in" data-aos-delay="100">
            <strong class="section-title">
              App Store Optimisation (ASO)
            </strong>
          </h5>
          <h6 data-aos="fade-up" data-aos-delay="100">
            The key to ASO is understanding each app store’s search algorithm, which is hard to do without the right analysis of apps and their rankings.
          </h6>
          <h6 data-aos="fade-up" data-aos-delay="100">
            Get it wrong and you'll quickly find yourself missing the beat.
          </h6>
          <h6 data-aos="fade-up" data-aos-delay="100">
            As with SEO, ASO is all about watching the horizon for changes in the algorithm, and having the right content in place to maximise exposure.
          </h6>
          <h5 class="mt-5" data-aos="fade-up" data-aos-delay="100">
            <strong class="section-title">
              How can I improve our app performance?
            </strong>
          </h5>
          <a class="ready-btn" data-aos="fade-up" data-aos-delay="100" href="{!! route('get-in-touch') !!}">Get in touch</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
