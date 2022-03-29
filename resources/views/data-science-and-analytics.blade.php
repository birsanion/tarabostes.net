@extends('layouts.app')

@section('content')
<main id="main">
  <div class="area-padding">
    <div class="container mt-5">
      <div class="row">
        <div class="col-xs-12 py-5" >
          <div class="section-headline mb-4" data-aos="zoom-in" data-aos-delay="100">
            <h2>Data science and analytics</h2>
          </div>
          <h4 data-aos="zoom-in" data-aos-delay="100">
            Continuous improvement with simple, effective data
          </h4>
          <br>
          <br>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Too much data can quickly become debilitating. Tarabostes's ethos of always moving forward means we keep our data science approach as simple as possible.
          </h6>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            We use it to better understand user behaviour and make more informed decisions about how to continuously improve the products we build.
          </h6>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            We do that through a range of different data services including visualisation through a tailored dashboard, the creation of data lakes for consolidation, deep analytics reviews and machine learning models.
          </h6>
          <h6 data-aos="zoom-in" data-aos-delay="100">
            Tarabostes software can make your data more manageable and use it to make your product more effective.
          </h6>
          <h5 class="mt-5" data-aos="zoom-in" data-aos-delay="100">
            <a href="{{ route('contact') }}">
              <strong>
                <u>
                  Talk to us about data science and analytics
                </u>
              </strong>
            </a>
          </h5>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
