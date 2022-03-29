@extends('layouts.app')

@section('content')
<main id="main">
  <div class="header-bg page-area d-flex align-items-center" style="background-image: url(/img/banners/get-in-touch.jpg)">
    <div class="container">
      <div class="container">
        <div class="header-title" data-aos="fade-up" data-aos-delay="100">
          <h2 class="m-0"><strong>Contact</strong></h2>
          <h5>We'd love to hear from you</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="area-padding mb-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
          @component('components.contact-form')
          @endcomponent
        </div>

        <div class="col-md-6">
          <div class="row mt-4">
            <div class="col-sm-12" data-aos="zoom-in" data-aos-delay="100">
              <h4 class="section-title mb-4">
                <strong>
                  Get in touch
                </strong>
              </h4>
              <h6 class="mb-5">
                If you need a mobile-first digital partner, fill out our form and we'll get back to you - or give us a call. Don't worry if it's out of office hours - we'll get back to you as soon as we can.
              </h6>
            </div>

            <div class="col-sm-6" data-aos="zoom-in" data-aos-delay="100">
              <h6>
                <strong>
                  Bucuresti<br>
                  str.serg Latea Ghe. 17, bl.C60, ap.65<br>
                  Mobil: <a href="tel:+40754.23.00.00">+40754.23.00.00</a><br>
                </strong>
              </h6>
            </div>
            <div class="col-sm-6" data-aos="zoom-in" data-aos-delay="100">
              <h6>
                <strong>
                  Buzau<br>
                  Aleea Viitorului G2, ap.15 Buzau-Romania<br>
                  <a href="tel:+40217.463.731">+40217.463.731</a><br>
                </strong>
              </h6>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</main>
@endsection
